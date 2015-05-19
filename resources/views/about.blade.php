@extends('layout.main')

@section('title', 'About Me')

@section('content')

    {{-- Slider --}}
    @include('partials.home.slider')

    {{-- About Me --}}
    @include('partials.home.aboutme')

    {{-- Laptop Callout --}}
    @include('partials.home.laptop-callout')

    {{-- Features --}}
    @include('partials.home.services')

    {{-- Blog --}}
    @include('partials.home.blog', $posts)

    {{-- Portfolio --}}
    {{--@include('partials.home.portfolio')--}}

    {{-- Testimonials--}}
    @include('partials.home.testimonials')

@endsection

