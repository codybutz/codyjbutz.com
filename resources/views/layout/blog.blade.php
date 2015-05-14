@extends('layout.main')

@section('content')

    <div class="blog container">
        <h1>My Blog</h1>

        <div class="row">
            <div class="col-md-9">
                @yield('blogContent')
            </div>
            <div class="col-md-3">
                @include('partials.blog.sidebar')
            </div>
        </div>
    </div>

@endsection
