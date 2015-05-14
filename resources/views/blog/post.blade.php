@extends('layout.blog')

@section('blogContent')
    @include('partials.blog.post', $post)
@endsection

