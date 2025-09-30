@extends('layouts/header-footer')

@section('title', 'How to use signals')

@section('content')





<div class="container mx-auto px-4 py-12 max-w-4xl mt-12">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-indigo-700 mb-4">How to use our signals</h1>
    </div>

    <div class="flex gap-8 flex-wrap justify-center py-10">
        <a href="{{route('how-to-use-crypto-signals')}}">
            <div
            class="transform  rounded-xl h-screen w-60 sm:h-84 sm:w-84 shadow-xl transition duration-300 hover:scale-105 bg-indigo-50">
                <div class="flex h-full justify-center items-center">
                    <span class="font-bold text-gray-500">Crypto</span>
                </div>
            </div>
        </a>
        

        <a href="{{route('how-to-use-forex-signals')}}">
            <div
            class="transform  rounded-xl h-screen w-60 sm:h-84 sm:w-84 shadow-xl transition duration-300 hover:scale-105 bg-indigo-50">
                <div class="flex h-full justify-center items-center">
                    <span class="font-bold text-gray-500">Forex</span>
                </div>
            </div>
        </a>
    </div>
    
</div>


@endsection

        
