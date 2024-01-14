@extends('components.layout')
@section('css')
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
        <x-home.guarantee />
        <x-home.contact />
        <x-home.new />
        <x-home.exp />
    </div>
@endsection
@section('footer')
    <x-footer />
@endsection
@section('script')
@endsection
