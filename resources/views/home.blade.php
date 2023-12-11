@extends('components.layout')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
    </div>
@endsection
@section('footer')
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection
