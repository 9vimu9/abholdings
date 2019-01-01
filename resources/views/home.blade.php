@extends('layout.master')

@section('content')
    @include('layout.home')
    @include('layout.about')
    @include('layout.portfolio')
    {{--@include('layout.about-p')--}}
    {{--@include('layout.video-features')--}}
    {{--@include('layout.services')--}}
    {{--@include('layout.numbers')--}}
    {{--@include('layout.team')--}}
    {{--@include('layout.testimonials')--}}
    @include('layout.contact')
    {{--@include('layout.sponsors')--}}

@endsection

@section('script')

    <script src="/assets/js/typed.min.js"></script>
    <script src="/assets/js/text-typed.js"></script>
@endsection

