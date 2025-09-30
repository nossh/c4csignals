<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class FortifyRedirect
{
    /**
     * Create a new class instance.
     */
    public function __invoke()
    {
        if (Session::pull('just_registered')) {
            $user = auth()->user();
            $subscription = \App\Models\Subscription::where('user_id', $user->id)->latest()->first();

            if ($subscription) {
                return redirect()->route('nowpayment.checkout', ['subscription_id' => $subscription->id]);

            }
        }

        // Default redirect after login
        return redirect('/dashboard');
    }
}
