@extends('layout.admin')

@section('adminContent')
    <h1 class="page-title">Admin Panel</h1>

    <h2>Posts</h2>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ \Illuminate\Support\Str::title($post->status) }}</td>
                <td>
                    {!! Form::open(array('route' => array('admin.posts.destroy', $post), 'method' => 'delete')) !!}
                    <a href="{{route('blog.post', $post->slug)}}" class="btn btn-primary btn-"><i class="fa fa-eye"></i></a>
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-primary btn-"><i class="fa fa-cog"></i></a>
                    <button class="btn btn-danger" type="submit">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
            <b class="text-center"> No Posts Found </b>
        @endforelse
        </tbody>
    </table>

@endsection

