<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Subscription;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Str;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        //Check if user has a referral
        $referral = request()->query('ref');
        $referrer = null;

        if ($referral) {
            $referrer = User::where('referral_code', $referral)->first();
        }
        Validator::make($input, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tg_id' => ['required', 'string', 'max:25'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:25'],

            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'fname' => $input['fname'],
            'lname' => $input['lname'],
            'name' => $input['fname'] . " " . $input['lname'],
            'email' => $input['email'],
            'tg_id' => $input['tg_id'],
            'address' => $input['address'],
            'city' => $input['city'],
            'country' => $input['country'],
            'state' => $input['state'],
            'zip_code' => $input['zip_code'],
            'referred_by' => $referrer?->id,
            'password' => Hash::make($input['password']),
        ]);


        // Create the subscription immediately after user creation
        $subscription = Subscription::create([
            'id' => Str::uuid(), // or Str::random(10)
            'user_id' => $user->id,
            'plan_name' => $input['plan_name'],
            'cycle' => $input['cycle'],
            'price' => $input['price'],
            'payment_status' => false,
            'sub_status' => false,
            'expiring_date' => now()->addMonth()->timestamp, // Example: 1-month expiry
        ]);

        session(['just_registered' => true]);


        \Mail::to($user->email)->send(new \App\Mail\WelcomeUserMail($user));

        // Return the user
        return $user;
    }
}
