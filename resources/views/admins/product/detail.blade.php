@extends('admins.layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <div class="mb-6">
        <a href="{{ route('product') }}" class="text-blue-500 hover:text-blue-700 font-medium flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span>Back to Product List</span>
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="grid md:grid-cols-2">
            <div class="relative">
                <img src="{{ asset($product->product_img) }}" alt="{{ $product->title }}" 
                    class="object-cover w-full h-full max-h-96">
            </div>
            
            <!-- Product Details -->
            <div class="p-8 space-y-6">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">{{ $product->title }}</h1>

                <p class="text-gray-600 text-sm md:text-base">
                    {{ $product->description }}
                </p>

                <div class="text-sm md:text-base">
                    <span class="font-medium text-gray-800">Price:</span>
                    <span class="text-gray-600">Rp.{{ number_format($product->price, 0, '.', '.') }}</span>
                </div>

                <div class="text-sm md:text-base">
                    <span class="font-medium text-gray-800">Category:</span>
                    <span class="text-gray-600">{{ $product->category->name ?? 'No Category' }}</span>
                </div>

                <div class="text-sm md:text-base">
                    <span class="font-medium text-gray-800">Created At:</span>
                    <span class="text-gray-600">{{ $product->created_at->format('d M Y, H:i') }}</span>
                </div>

                <div class="text-sm md:text-base">
                    <span class="font-medium text-gray-800">Last Updated:</span>
                    <span class="text-gray-600">{{ $product->updated_at->format('d M Y, H:i') }}</span>
                </div>

                <a href="{{ route('product') }}" 
                   class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium text-sm px-6 py-2 rounded-md shadow-md transition-all">
                    Back to Products
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
