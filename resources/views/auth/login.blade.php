@extends('layouts/header-footer')

@section('title', 'Dashboard')

@section('content')





<div class="bg-gray-100 my-12 rounded-lg">
    <div class="w-full max-w-3xl mx-auto p-8">
        <div class="bg-white p-8 rounded-lg shadow-md border dark:border-gray-700">
            <h1 class="text-2xl font-bold text-gray-800  mb-4">Login</h1>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Shipping Address -->
            <div class="mb-6">                

                <div class="mt-4">
                    <label for="email" class="block text-gray-700  mb-1">Email</label>
                    <input type="email" id="email" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
                </div>

                <div class="mt-4">
                    <label for="password" class="block text-gray-700  mb-1">Password</label>
                    <input type="password" id="password" class="w-full rounded-lg border py-2 px-3 bg-gray-300  dark:border-none" name="password" required autocomplete="current-password">
                </div>

            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>


            <div class="mt-8 flex justify-end">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="mx-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium">
                    Login
                </button>
            </div>

            <div class="block mt-4">
                <a href="/#pricing">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Or register') }}</span>
                </a>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection
