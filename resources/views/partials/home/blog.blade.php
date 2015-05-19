<div class="blog-home">
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1 class="section-title"><i class="fa fa-newspaper-o"></i> Blog</h1>
                </div>
            </div>
        </div>
        <br/>
        @if(count($posts) > 0)
            <ul class="timeline">
                @foreach($posts as $i => $post)
                    <li <?php echo ($i % 2) != 0 ? 'class="timeline-inverted"' : ''; ?>>
                        <div class="timeline-image">
                            <a href="{{ route('blog.post', $post->slug) }}" title="{{ $post->title }}">
                                @if($post->getFeaturedImage() != null)
                                    <img src="{{$post->getFeaturedImage()->getUrl('timeline')}}" class="img-circle img-responsive " width="156"
                                         height="156"/>
                                @else
                                    <img src="/img/no-featured-image.png" class="img-circle img-responsive " width="156" height="156"/>
                                @endif
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <strong>Posted {{ $post->created_at->toFormattedDateString() }}</strong>

                                <h3 class="subheading"><a href="{{ route('blog.post', $post->slug) }}"
                                                          title="{{ $post->title }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                            <div class="timeline-body">
                                {{plainText($post->parsedContent(), 250)}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
        @endif
    </div>
</div>