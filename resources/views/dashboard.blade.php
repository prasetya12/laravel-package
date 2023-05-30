<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container px-12 py-8 mx-auto">
                <div class="flex gap-5">
                    @foreach ($products as $product)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <img src="{{ url($product->image) }}" alt="" class="w-24 h-24 ">
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                            <form method="POST" action="{{ route('cart.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}" name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-red-600 rounded">Add To Cart</button>
                            </form>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>