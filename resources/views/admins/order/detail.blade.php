@extends('admins.layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
    <!-- Back Button -->
    <div class="mb-6">
        <a href="{{ route('order') }}" class="flex items-center text-blue-500 hover:underline">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7.707 7.293a1 1 0 011.414 0L10 8.172l.879-.879a1 1 0 011.415 1.415l-2 2a1 1 0 01-1.415 0l-2-2a1 1 0 010-1.415z" clip-rule="evenodd" />
            </svg>
            Back to Orders
        </a>
    </div>

    <!-- Order Details Card -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Order Details</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div>
                <h3 class="text-lg font-medium text-gray-500 mb-2">General Information</h3>
                <div class="bg-gray-100 p-4 rounded-lg flex flex-col space-y-5">
                    <p><span class="font-semibold">Name:</span> {{ $order->name }}</p>
                    <p><span class="font-semibold">Website Name:</span> {{ $order->product->title }}</p>
                    <p><span class="font-semibold">Contact Email:</span> {{ $order->email }}</p>
                    <p><span class="font-semibold">Domain Name:</span> {{ $order->domain_name }}</p>
                    <p><span class="font-semibold">Website Price:</span> Rp. {{ number_format($order->product->price, 0,'.','.') }}</p>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <h3 class="text-lg font-medium text-gray-500 mb-2">User & Payment Information</h3>
                <div class="bg-gray-100 p-4 rounded-lg flex flex-col space-y-3">
                    <p><span class="font-semibold">Username:</span> {{ $order->user->name }}</p>
                    <p><span class="font-semibold">User email:</span> {{ $order->user->email }}</p>
                    <p><span class="font-semibold">Note :</span> {{ $order->catatan }}</p>
                    <p><span class="font-semibold">Transfer Proof:</span></p>
                    <img src="{{ asset('storage/' . $order->bukti_tf) }}" alt="Bukti Transfer" class="w-full h-96 rounded-lg border">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
