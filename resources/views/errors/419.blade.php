@extends('layouts/header-footer')

@section('title', 'Page Expired')

@section('content')





<div class="container mx-auto px-4 py-12 max-w-4xl mt-12">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-indigo-700 mb-4">The page has expired</h1>
    </div>

    <div class="flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 text-center max-w-md">
            <h1 class="text-4xl font-bold text-red-600 mb-4">419</h1>
            <h2 class="text-xl font-semibold mb-2">Page Expired</h2>
            <p class="text-gray-600 mb-6">
                Your session has expired. This usually happens if you’ve been inactive for too long. 
            </p>

            <div class="flex justify-center space-x-4">
                <button onclick="history.back()" 
                    class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-700">
                    Go Back
                </button>

                <button onclick="location.reload()" 
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Refresh Page
                </button>
            </div>
        </div>
    </div>
    
</div>


@endsection

        
