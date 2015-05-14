@if(count($recentPosts) > 0)
    <ul class="recent-posts">
        @foreach($recentPosts as $post)
            <li><a href="{{ route('blog.post', ['post' => $post->slug]) }}" title="{{ $post->title }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@else
    <b>No posts to show</b>
@endif