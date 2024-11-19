@extends('layouts.app')

@section('content')

<div class="min-h-screen flex justify-center items-center bg-gray-100">

    <div class="bg-white max-w-4xl flex p-8 rounded-lg shadow-lg">
        <div class="hidden md:block md:w-1/2 p-5">
            <img src="{{ asset('img/dummy.png') }}" alt="Registration Image" class="rounded-lg">
        </div>

        <div class="w-full md:w-1/2 flex flex-col p-5">
            <div class="mb-6">
                <h1 class="font-bold text-4xl text-gray-800">Create Your Account</h1>
                <p class="text-gray-600 mt-2">Fill in the details below to get started.</p>
            </div>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Username</label>
                    <input type="text" name="name" id="name" class="bg-gray-200 py-2 px-4 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Name">
                    @error('name')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-200 py-2 px-4 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email">
                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-200 py-2 px-4 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-200 py-2 px-4 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm Password">
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <button class="bg-blue-500 text-white py-2 rounded-lg w-full hover:bg-blue-600 transition duration-300">Register</button>
                </div>
            </form>
        </div>
    </div>
    
</div>

@endsection
