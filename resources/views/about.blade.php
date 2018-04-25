@extends('layout.main')

@section('title', 'About Me')

@section('content')

    {{-- Slider --}}
    @include('partials.home.slider')

    {{-- About Me --}}
    @include('partials.home.aboutme')

    {{-- Features --}}
    @include('partials.home.services')

    {{-- Laptop Callout --}}
    @include('partials.home.laptop-callout')

    {{-- Testimonials--}}
    @include('partials.home.testimonials')

@endsection

