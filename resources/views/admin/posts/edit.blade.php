@extends('layout.admin')

@section('adminContent')
    <h1>Edit: {{ $post->title }}</h1>

    {!! Form::model($post , ['method' => 'PATCH', 'action' => ['AdminPostController@update' , $post->id], 'files' => true]) !!}
    @include('admin.posts._form', ['submitButtonText' => 'Update Post'])
    {!! Form::close() !!}

    @include('errors.list')
@endsection

