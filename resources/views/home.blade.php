@extends('components.layout')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
@endsection
@section('header')
    <x-header />
@endsection
@section('content')
    <div>
        <x-home.banner />
        <x-home.vitamin-service />
        <x-home.best-offer />
        <x-home.hot />
        <x-home.best-seller />
        <x-home.feedback />
        <x-home.question />
    </div>
@endsection
@section('footer')
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
