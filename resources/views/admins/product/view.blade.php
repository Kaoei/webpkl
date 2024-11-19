@extends('admins.layouts.app')

@section('content')

<div class="">

    <h1 class="font-bold text-3xl">Product List</h1>

    <div class="mt-12">

        <div class="mb-5">
            <a href="{{ route('product.create') }}" class="bg-blue-500 text-white py-1.5 px-4 rounded-md">add Product</a>
        </div>

        @include('admins.table.webTable')

    </div>

</div>

@endsection