@extends('layout.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('partials.admin.navigation')
            </div>
            <div class="col-md-9">
                @yield('adminContent')
            </div>
        </div>
    </div>

@endsection