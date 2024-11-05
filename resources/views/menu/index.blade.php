@extends('app')

@section('content')
<div class="text-center my-14 flex items-center justify-center flex-col">
    <h1 class="font-bold text-3xl">
        Pilih Websitemu
    </h1>
    <div class="w-80">
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, accusantium?</p>
    </div>
</div>

<div class="flex mb-20">
    @include('menu.sideMenu')

    @include('menu.webCard')
</div>

@endsection