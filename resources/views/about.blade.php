@extends('layout.main')

@section('content')

    {{-- Slider --}}
    @include('partials.home.slider')

    {{-- About Me --}}
    @include('partials.home.aboutme')

    {{-- Laptop Callout --}}
    @include('partials.home.laptop-callout')

    {{-- Features --}}
    @include('partials.home.services')

    {{-- Portfolio --}}
    @include('partials.home.portfolio')

    {{-- Testimonials--}}
    @include('partials.home.testimonials')

@endsection

