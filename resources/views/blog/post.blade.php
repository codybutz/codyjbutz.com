@extends('layout.blog')

@section('title', $post->title)


@section('blogContent')
    @include('partials.blog.post', $post)
@endsection

