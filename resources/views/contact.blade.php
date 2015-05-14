@extends('layout.main')

@section('content')


    <div class="container">
        <h1>Contact Cody Butz</h1>

        <div class="row">
            <div class="col-lg-8">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {!! Form::open(array('route' => 'contact.store', 'class' => 'form')) !!}
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', '',
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', '',
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', '',
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Me!',
                      array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}

            </div>
            <div class="col-lg-4">
                <div class="well well-md">
                    <p><i class="fa fa-fw fa-user text-custom"></i>&nbsp;Cody James Butz</p>

                    <p><i class="fa fa-fw fa-map-marker text-custom"></i>&nbsp;Dayton, Ohio (United States)</p>

                    <p><i class="fa fa-fw fa-phone text-custom"></i> <a title="phone number" href="tel:4192174366">(419) 217-4366</a></p>

                    <p><i class="fa fa-fw fa-envelope text-custom"></i>&nbsp;<a href="mailto:codyjbutz@gmail.com">codyjbutz@gmail.com</a></p>

                    <p><i class="fa fa-fw fa-skype text-custom"></i> Skype “codyjbutz”</p>

                    <div class="text-center">
                        @include('partials.social-icons')
                        </p>
                    </div>
                </div>


                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98119.22178708026!2d-84.20215734999998!3d39.779490450000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884080d5aedd1403%3A0xa640e392f20e4ce4!2sDayton%2C+OH!5e0!3m2!1sen!2sus!4v1431622104948"--}}
                {{--frameborder="0" style="border:0; width: 100%; height: 200px;"></iframe>--}}
            </div>
        </div>
    </div>
@endsection

