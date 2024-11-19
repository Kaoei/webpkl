@extends('admins.layouts.app')

@section('content')
<div class="mb-3 text-white bg-blue-500 py-1.5 rounded-md w-fit px-5">
    <a href="{{ route('product') }}">Back</a>
</div>
<div class="bg-white p-8 rounded-lg shadow-lg  w-full">

    <h1 class="text-center font-bold text-3xl text-indigo-600 mb-6">edit Product</h1>

    <form action="{{ route('product.update', $product->id_product) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title" class="block text-sm font-semibold text-gray-800">Title</label>
            <input type="text" class="mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" id="title" name="title" value="{{ $product->title }}" required>
        </div>
        
        <div class="form-group">
            <label for="description" class="block text-sm font-semibold text-gray-800">Description</label>
            <textarea class="mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" id="description" name="description" rows="4" required>{{ $product->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="category_id" class="block text-sm font-semibold text-gray-800">Category</label>
            <select name="category_id" id="category_id" class="mt-2 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                @foreach(App\models\Category::all() as $a)
                <option value="{{ $a->id }}" {{ $product->category_id == $a->id ? 'selected' : '' }}>{{ $a->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="image" class="block text-sm font-semibold text-gray-800">Image</label>
            <input type="file" class="mt-2 block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 focus:outline-none" id="image" name="product_img">
        </div>

        <button type="submit" class="w-full inline-flex justify-center py-3 px-4 border border-transparent shadow-lg text-sm font-medium rounded-lg text-white bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </form>

</div>
@endsection
