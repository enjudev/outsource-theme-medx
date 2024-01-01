@extends('components.layout')
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
