@extends('layouts.master')

@section('content')
    <!-- component -->
    <!-- item card -->
    <div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
        <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="/{{ $product->image }}"
            alt="{{ $product->libPdt }}">
        <div class="relative w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
            <div class="flex items-center">
                <h2 class="text-xl text-gray-800 font-medium mr-auto">{{ $product->libPdt }}</h2>
                <p class="text-gray-800 font-semibold tracking-tighter">
                    only
                    <i class="text-gray-600 line-through">{{ $product->Prix + 500 }}$</i>
                    {{ $product->Prix }}$
                </p>
            </div>
            <p class="text-sm text-gray-700 mt-4">
                {{ $product->description }}
            </p>
            <div class="flex items-center justify-end mt-4 top-auto">
                <a href="{{ route('product.index') }}"
                    class="bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2 hover:bg-gray-300 absolute bottom-4 right-4">Back
                    home</a>
            </div>
        </div>
    </div>
@endsection
