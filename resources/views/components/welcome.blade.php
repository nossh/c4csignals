<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome back, {{ Auth::user()->name ?? 'Trader' }}
    </h1>

    <p class="mt-2 text-gray-500 leading-relaxed">
        Stay subscribed to our VIP signals to always get all the profitable signals.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 p-6 lg:p-8">

    <!-- Subscription Status -->
    <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-indigo-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Subscription Status
            </h2>
        </div>

        <p class="mt-4 text-gray-600 text-sm leading-relaxed">
            {{ Auth::user()->subscription->plan_name ?? 'No active plan' }}
        </p>

        <p class="mt-2 text-sm text-gray-500">
            Expires: 
            {{ Auth::user()->subscription->expires_at 
                ? Auth::user()->subscription->expires_at->format('M d, Y') 
                : 'N/A' }}
        </p>

        <a href="/#pricing" class="mt-4 inline-flex items-center font-semibold text-indigo-700">
            {{ Auth::user()->subscription->sub_status ? 'Upgrade Plan' : 'Subscribe Now' }}
        </a>
    </div>

    <!-- Latest Signal -->
    <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-green-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h4l3 8 4-16 3 8h4" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Latest Signal
            </h2>
        </div>

        <p class="mt-4 text-gray-600 text-sm leading-relaxed">
            {{ $latestSignal->pair ?? 'BTC/USDT' }} - 
            <span class="font-semibold">{{ $latestSignal->action ?? 'BUY' }}</span> 
            @ {{ $latestSignal->entry ?? '122,200' }}
        </p>

        <p class="mt-2 text-sm text-gray-500">
            Stop Loss: {{ $latestSignal->stop_loss ?? '65,800' }} |
            Take Profit: {{ $latestSignal->take_profit ?? '123,500' }}
        </p>

        <a href="" class="mt-4 inline-flex items-center font-semibold text-indigo-700">
            View All Signals →
        </a>
    </div>

    <!-- Account Summary -->
    <div class="p-6 bg-white rounded-lg shadow-sm border border-gray-100">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.343-4 3 0 1.657 1.79 3 4 3s4-1.343 4-3c0-1.657-1.79-3-4-3z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v1m0 10v1m-7 0h14" />
            </svg>
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Account Summary
            </h2>
        </div>

        <ul class="mt-4 text-gray-600 text-sm leading-relaxed space-y-1">
            <li>Email: {{ Auth::user()->email }}</li>
            <li>Joined: {{ Auth::user()->created_at->format('M d, Y') }}</li>
            <li>Telegram Linked: {{ Auth::user()->telegram_username ?? 'Not linked' }}</li>
        </ul>

        <a href="{{ route('profile.show') }}" class="mt-4 inline-flex items-center font-semibold text-indigo-700">
            Manage Profile →
        </a>
    </div>
</div>
