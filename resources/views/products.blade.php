@extends('layouts.master')

@section('content')
    <div>
        <div class="mx-auto max-w-2xl px-4 py-12 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="/images/{{ $product->image }}" alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $product->libPdt }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $product->Prix }}</p>
                        </div>
                        <div class="mt-4 flex justify-around">
                            <a href="{{ route('product.show', $product->id) }}"
                                class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded z-10">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <form class="z-10" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded z-10">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
                <!-- More product.. -->
            </div>
        </div>
    </div>
    <div class="flex justify-evenly w-full">
        <div class="mb-10 z-10">{{ $products->links() }}</div>
    </div>
    <a href="{{ route('product.create') }}"><i class="fa-solid fa-circle-plus fixed bottom-10 right-10 text-5xl"></i></a>
@endsection
