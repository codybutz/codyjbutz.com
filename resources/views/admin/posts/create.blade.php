@extends('layout.admin')

@section('adminContent')
    <h1>Write a Post</h1>

    {!! Form::model($post = new \App\Models\Post() , ['route' => 'admin.posts.store', 'files' => true]) !!}
    @include('admin.posts._form', ['submitButtonText' => 'Create Post'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection

