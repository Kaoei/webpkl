@extends('layouts.app')

@section('content')
<div class="h-screen flex justify-center items-center bg-gray-100">
    <div class="bg-white w-full max-w-4xl flex p-8 rounded-lg shadow-lg">
        <div class="hidden md:block w-1/2 p-5">
            <img src="{{ asset('img/dummy.png') }}" alt="Login Image" class="rounded-lg">
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center p-5">
            <div class="mb-8 text-center">
                <h1 class="font-bold text-4xl text-gray-800">Welcome back!</h1>
                <p class="text-gray-600 mt-2">Please login to your account</p>
            </div>

       

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email :</label>
                    <input type="email" name="email" id="email" class="bg-gray-100 py-3 px-4 w-full rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password :</label>
                    <input type="password" name="password" id="password" class="bg-gray-100 py-3 px-4 w-full rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="text-blue-500 focus:ring-blue-400 rounded">
                        <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-blue-500 hover:underline">Forgot password?</a>
                </div>

                     {{-- Display error message --}}
                    @if (session('error'))
                    <div class="text-red-500 mb-4 text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <div>
                    <button type="submit" class="bg-blue-500 text-white py-3 w-full rounded-lg shadow-lg hover:bg-blue-600 transition-all duration-300">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
