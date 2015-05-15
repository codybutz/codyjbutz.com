@extends('layout.blog')

@section('blogContent')
    @include('partials.blog.short-posts',['allPosts' => $posts])
@endsection

