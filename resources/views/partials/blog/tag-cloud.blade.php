@if(count($tags) > 0)
    <ul class="cloud">
        @foreach($tags as $tag)
            <li>
                <a href="{{ route('blog.tag', ['tag' => $tag->slug]) }}" style="{{tagStyle($tag)}}">{{ $tag->name }}</a>
            </li>
        @endforeach
        {{--<li><a href="/html101classes/a/bl_xclass1_2a.htm" class="tag3">Basic Tags for a Web Site</a></li>--}}
        {{--<li><a href="/htmleditors/a/aa121304.htm" class="tag7">Best Web Design Software</a></li>--}}
        {{--<li><a href="/beginningtutorials/a/aa033103a.htm" class="tag2">Building a Web Page for the Totally Lost</a></li>--}}
        {{--<li><a href="/color/a/aa072604.htm" class="tag2">Color Symbolism</a></li>--}}
    </ul>
@else
    <b>No Tags Found</b>
@endif