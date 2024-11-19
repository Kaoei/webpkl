@extends('layouts.app')

@section('content')

<div class="">

    <div class="flex justify-center">
        <div class="">
            <img src="{{ asset($product->product_img) }}" alt="">
        </div>
    </div>
    
    <div class="px-12 mb-12">
        <h1 class="font-bold text-3xl">{{ $product->title }}</h1>
        <p class="text-base">{{ $product->description }}</p>
    </div>

    <div class="px-12 mb-12">
        <h1 class="font-bold text-2xl mb-2">Metode Pembayaran :</h1>
        <div>
            <img src="{{ asset('img/payment.png') }}" alt="" class="" style="width: 32rem;">
        </div>
    </div>
    
    {{-- form --}}
    @include('menu.form')
    
    
</div>
@endsection