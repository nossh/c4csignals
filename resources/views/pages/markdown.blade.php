@extends('layouts/header-footer')

@section('title', 'FAQ')

@section('content')

    <div class="container mx-auto px-4 py-10 prose prose-lg max-w-4xl bg-white shadow-lg rounded-2xl p-8">
        {!! $content !!}
    </div>

@endsection