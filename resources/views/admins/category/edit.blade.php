@extends('admins.layouts.app')

@section('content')
<div class="mb-3 text-white bg-blue-500 py-1.5 rounded-md w-fit px-5">
    <a href="{{ route('category')}}">Back</a>
</div>
<div class="bg-white p-8 rounded-lg shadow-lg  w-full">

    <h1 class="text-center font-bold text-3xl text-indigo-600 mb-6">Create Category</h1>

    <form action="{{ route('category.update', $categories->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        
        <div class="form-group">
            <label for="category" class="block text-sm font-semibold text-gray-800">Category</label>
            <input type="text" class="mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" id="category" name="name" value="{{ $categories->name }}" placeholder="name" required>
        </div>

        <button type="submit" class="w-full inline-flex justify-center py-3 px-4 border border-transparent shadow-lg text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </form>

</div>
@endsection
