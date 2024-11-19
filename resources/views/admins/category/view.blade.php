@extends('admins.layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">Category List</h2>

<div class="">
    <div class="mb-5">
        <a href="{{ route('category.create') }}" class="bg-blue-500 text-white py-1.5 px-4 rounded-md">add category</a>
    </div>
    
    @include('admins.table.categoryTable')
</div>



@endsection