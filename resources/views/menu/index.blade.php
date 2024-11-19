@extends('layouts.app2')

@section('content')
<div class="text-center my-14 flex items-center justify-center flex-col">
    <h1 class="font-bold text-3xl">
        Choose Your Website
    </h1>
    <div class="w-80">
        <p class="text-sm">We offer a variety of website solutions to help you grow your business online. we have the perfect solution for you.</p>
    </div>
</div>


<div class="flex mb-20">
    @include('menu.sideMenu')

    @include('menu.webCard')
</div>

@endsection