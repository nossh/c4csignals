@extends('layouts/header-footer')

@section('title', 'Dashboard')

@section('content')


<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>



<div class="bg-gray-100 my-12 rounded-lg">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800  mb-4">Checkout</h1>

            <!-- Shipping Address -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-700  mb-2">Shipping Address</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="first_name" class="block text-gray-700  mb-1">First Name</label>
                        <input type="text" id="first_name" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                    <div>
                        <label for="last_name" class="block text-gray-700  mb-1">Last Name</label>
                        <input type="text" id="last_name" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="email" class="block text-gray-700  mb-1">Email</label>
                        <input type="text" id="email" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                    <div>
                        <label for="tg_id" class="block text-gray-700  mb-1">Telegram ID Number</label>
                        <input type="text" id="tg_id" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" placeholder="This is NOT your username">
                        <p>Use this link to get your USER ID: <a href="https://t.me/userinfobot" target="_blank">https://t.me/userinfobot</a></p>
                    </div>
                </div>

                <div class="mt-4">
                    <label for="address" class="block text-gray-700  mb-1">Address</label>
                    <input type="text" id="address" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="city" class="block text-gray-700  mb-1">City</label>
                        <input type="text" id="city" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                    <div>
                        <label for="country" class="block text-gray-700  mb-1">Country</label>
                        <select class="w-full rounded-lg border py-2 px-3 bg-gray-300" id="country">
                            <option>Select country</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="state" class="block text-gray-700  mb-1">State</label>
                        <input type="text" id="state" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                    <div>
                        <label for="zip" class="block text-gray-700  mb-1">ZIP Code</label>
                        <input type="text" id="zip" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div>
                <h2 class="text-xl font-semibold text-gray-700  mb-2">Payment Information</h2>
                <div class="mt-4">
                    <label for="card_number" class="block text-gray-700  mb-1">Card Number</label>
                    <input type="text" id="card_number" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                </div>

                <div class="grid grid-cols-2 gap-4 mt-4">
                    <div>
                        <label for="exp_date" class="block text-gray-700  mb-1">Expiration Date</label>
                        <input type="text" id="exp_date" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                    <div>
                        <label for="cvv" class="block text-gray-700  mb-1">CVV</label>
                        <input type="text" id="cvv" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none">
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-end">
                <button class="bg-teal-500 text-white px-4 py-2 rounded-lg hover:bg-teal-700 dark:bg-teal-600  dark:hover:bg-teal-900">Place Order</button>
            </div>
        </div>
    </div>
</div>


@endsection
