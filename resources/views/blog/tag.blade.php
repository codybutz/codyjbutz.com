@extends('layout.blog')

@section('blogContent')
    <h2>Tag: {{ $tag->name }}</h2>
    @include('partials.blog.full-posts',['allPosts' => $posts])
@endsection

