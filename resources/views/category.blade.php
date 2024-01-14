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
    <div class="tw-flex tw-flex-col tw-gap-100px tw-pb-100px">
        <x-category.banner />
        <x-category.showcase />
    </div>
@endsection
@section('footer')
    <x-footer />
@endsection
@section('script')
@endsection
