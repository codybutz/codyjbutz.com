@extends('layout.blog')

@section('blogContent')
    <h1>Categories: {{ $category->name }}</h1>
    @include('partials.blog.full-posts',['allPosts' => $category->posts])
@endsection

