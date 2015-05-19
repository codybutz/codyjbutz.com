{{-- Testimonials --}}
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h1 class="section-title"><i class="fa fa-newspaper-o"></i> Testimonials</h1>
            </div>
        </div>
    </div>
    <br/>

    <div class="row">
        @if(count($testimonials) == 3)
            @foreach($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="testimonial">
                        <b>{{ $testimonial->title }}</b>

                        <p>
                            {{ $testimonial->content }}
                        </p>

                        <div class="footer">
                            <cite>
                                {{ $testimonial->author }}
                                @if(strlen($post->autor_company) > 0)
                                    @if($post->author_company_link)
                                        , <a href="{{$post->author_company_link}}" title="{{$post->author_company}}">{{ $post->author_company }}</a>
                                    @else
                                        , {{$testimonial->author_company}}
                                    @endif
                                @endif
                                {{ $testimonial->author_company != "" ? ", " . $testimonial->author_company : ""}}
                            </cite>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-xs-12">
                <div class="text-center">
                    <h3>No testimonials found.</h3>
                </div>
            </div>
        @endif
    </div>
    <br/>
</div>