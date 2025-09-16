@extends('layouts/header-footer')

@section('title', 'FAQ')

@section('content')


<div class="container mx-auto px-4 py-12 max-w-4xl">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-indigo-700 mb-4">Frequently Asked Questions</h1>
        <p class="text-lg text-gray-600">Find answers to common questions about our products and services.</p>
    </div>


    <!-- FAQ Items -->
    <div class="space-y-4">
        <!-- FAQ Item 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">What do I need to start using your signals?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    You need a crypto exchange account (like Binance, Bybit, or OKX), USDT for trading, and access to our signal channel.
                </p>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">How do I subscribe?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600 mb-3">
                    Simply choose a <a href="/#pricing" class="text-blue-600">subscription plan</a>, make payment, and you’ll be added instantly to our VIP signal group.
                </p>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">What is the success rate of your signals?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    Our signals have a consistent win rate of 75–85%, backed by years of professional trading experience.
                </p>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">How many signals do you send per day?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600 mb-3">
                    On average, we send 2–5 high-quality signals daily, depending on market conditions.
                </p>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">Do I need a lot of capital to start?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    Not at all. You can start with as little as $50–100 USDT and grow steadily over time.
                </p>
            </div>
        </div>

        <!-- FAQ Item 6 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">How do I manage risk with your signals?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    Every signal includes entry points, stop-loss (SL), and take-profits (TPs) to ensure proper risk management.
                </p>
            </div>
        </div>

        <!-- FAQ Item 7 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">Can beginners follow your signals?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    Yes! Our signals are beginner-friendly, with clear instructions that anyone can follow.
                </p>
            </div>
        </div>

        <!-- FAQ Item 8 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
            <button class="faq-toggle w-full flex justify-between items-center p-6 text-left">
                <h3 class="text-lg font-semibold text-gray-800">Do I need to be online all the time?</h3>
                <i class="fas fa-chevron-down text-indigo-600 transition-transform duration-300"></i>
            </button>
            <div class="faq-content px-6 pb-6 hidden">
                <p class="text-gray-600">
                    No. Our Crypto VIP signal has Cornix auto-trading bot integrated for automatic trading. You just need to check the channel for updates and place trades when signals are posted, that is if you trade manually.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Support -->
    <div class="mt-16 text-center bg-indigo-50 rounded-xl p-8">
        <h2 class="text-2xl font-bold text-indigo-700 mb-3">Still have questions?</h2>
        <p class="text-gray-600 mb-6">Our support team is happy to help you with any other questions you might have.</p>
        <button class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium">
            Contact Support
        </button>
    </div>
</div>


@endsection

        
