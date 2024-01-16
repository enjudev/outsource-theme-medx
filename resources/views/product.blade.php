@extends('components.layout')
@section('css')
    <style>
        label input:checked+span:after {
            opacity: 1;
        }
    </style>
@endsection
@section('header')
    <x-header />
@endsection
@section('content')
    <div class="tw-flex tw-flex-col tw-pb-100px lg:tw-gap-100px">
        <x-product.banner />
        <x-product.showcase />
        <x-product.related />
    </div>
@endsection
@section('footer')
    <x-footer />
@endsection
@section('script')
@endsection
