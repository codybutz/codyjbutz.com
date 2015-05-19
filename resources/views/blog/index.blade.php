@extends('layout.blog')

@section('title', 'My Blog')

@section('blogContent')
    @include('partials.blog.short-posts')
@endsection

