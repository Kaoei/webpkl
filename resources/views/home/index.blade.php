@extends('layouts.app')

@section('content')
<div class=""> 
    {{-- hero --}}
    @include('home.hero')

    {{-- services --}}
    @include('home.serviceCard')

    {{-- hero2 --}}
    @include('home.hero2')

    {{-- web list --}}
    @include('home.webList')

</div>
@endsection
