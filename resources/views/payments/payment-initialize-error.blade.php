@extends('layouts/header-footer')

@section('title', 'Payment initialize error')

@section('content')





<div class="container mx-auto px-4 py-12 max-w-4xl">



    <div class="flex flex-wrap justify-center py-5">
        <div class="transform  rounded-xl h-screen w-160 sm:h-84 sm:w-84 shadow-xl transition duration-300 hover:scale-105 bg-indigo-50 px-4">

            <h1 class="text-7xl text-center font-extrabold text-red-700 mt-6">Oh no!</h1>
            <br><br>
            <p class="text-4xl font-bold text-red-700">
                The payment failed to initialize.
            </p> 

            <div class="flex h-full justify-center items-center">
                <a href="/#pricing" class="mb-16 block bg-red-700 text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg transform transition hover:scale-105 hover:bg-red-900">Kindly try again
                </a>

            </div>
        </div>
    </div>
    
</div>


@endsection

        
