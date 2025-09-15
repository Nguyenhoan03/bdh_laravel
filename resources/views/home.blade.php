@extends('layouts.app')

@section('title', 'Trang Chủ - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Banner -->
@include('components.banner-slide')

<!--  -->

<!--  -->
<div class="">
    <img src="{{asset('img/bnn.jpg')}}" alt="">
    <div class="">
        @include('components.product-card')
    </div>
</div>


@endsection