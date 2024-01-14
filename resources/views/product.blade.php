@extends('components.layout')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
