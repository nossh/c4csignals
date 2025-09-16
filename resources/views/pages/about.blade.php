@extends('layouts/header-footer')

@section('title', 'About')

@section('content')


<div class="sm:flex items-center max-w-screen-xl">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="https://i.imgur.com/WbQnbas.png">
        </div>
    </div>
    <div class="sm:w-1/2 p-5">
        <div class="text">
            <span class="text-gray-500 border-b-2 border-indigo-600 uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-indigo-600">Our Company</span>
            </h2>
            <p class="text-gray-700">
                At Cash4Coins Signals, we believe trading should be simple, profitable, and accessible to everyone even as a beginner or an experienced trader.
            </p><br>

            <p class="text-gray-700">
                With over 7+ years of professional experience in crypto and forex markets, our mission is clear:
            </p><br>

            <p class="text-gray-700">
                To provide accurate, timely, and high-quality trading signals that help our members maximize profits while minimizing risks.
            </p>
        </div>
    </div>
</div>

<section class="pt-10 overflow-hidden md:pt-0 sm:pt-16 2xl:pt-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">

            <div>
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Easy to use Signals
                </h2>
                <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-700 md:mt-8">
                    We understand how overwhelming the market can be with constant price swings, complex charts, and endless news updates. That’s why we focus on clarity and precision. Every signal we send includes:
                </p>


                <ul class="mt-8 space-y-3 font-medium">
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-3 leading-5 text-gray-600">
                            Entry Zones
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-3 leading-5 text-gray-600">
                            Take-Profit (TP) Targets
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-3 leading-5 text-gray-600">
                            Stop-Loss Protection
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-3 leading-5 text-gray-600">
                            Recommended Leverage
                        </p>
                    </li>
                    <li class="flex items-start lg:col-span-1">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="ml-3 leading-5 text-gray-600">
                            Easy-to-follow instructions
                        </p>
                    </li>
                </ul>

                <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-700 md:mt-8">
                    Our signals aren’t just random calls, they are backed by deep market analysis, risk management strategies, and a proven trading system that has consistently delivered results.
                </p>

                
            </div>

            <div class="relative">
                <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2" src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />

                <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/business-woman.png" alt="" />
            </div>

        </div>
    </div>
</section>
<br>





<div class="sm:flex items-center max-w-screen-xl">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img src="https://i.imgur.com/WbQnbas.png">
        </div>
    </div>
    <div class="sm:w-1/2 p-5">
        <p class="text-base font-semibold leading-6 text-indigo-500 uppercase">
            The reason
        </p>
        <h4 class="mt-2 text-2xl font-extrabold leading-8 text-gray-900 sm:text-3xl sm:leading-9">
            Why Choose Us?
        </h4>

        <ul class="mt-8 space-y-3 font-medium">
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="ml-3 leading-5 text-gray-600">
                    High Accuracy Rate – Signals built on real technical and fundamental analysis.
                </p>
            </li>
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="ml-3 leading-5 text-gray-600">
                    Beginner-Friendly – No complex charts, just clear instructions.
                </p>
            </li>
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="ml-3 leading-5 text-gray-600">
                    24/7 Support – Our team is always available to guide you.
                </p>
            </li>
            <li class="flex items-start lg:col-span-1">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <p class="ml-3 leading-5 text-gray-600">
                    Transparency First – No hype, no false promises — just results.
                </p>
            </li>
        </ul>

        <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-700 md:mt-8">
            At the core, we are more than just a signal provider — we are a community of traders. We want to see you grow, succeed, and achieve financial freedom through disciplined trading.
        </p>

        <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-700 md:mt-8">
            Join thousands of traders worldwide who trust us to guide them in the fast-paced world of crypto and forex.
        </p>
    </div>
</div>


@endsection

        
