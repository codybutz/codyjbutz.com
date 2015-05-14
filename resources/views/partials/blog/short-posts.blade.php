@if(count($allPosts) > 0)
    @foreach($allPosts as $post)
        <div class="post">
            <h3 class="post-title"><a href="{{ route('blog.post', ['post' => $post->slug]) }}"
                                      title="{{ $post->title }}">{{ $post->title }}</a></h3>

            <div class="text-right">
                <small>Posted on <i>{{ $post->created_at->toFormattedDateString() }}</i></small>
            </div>

            <div class="post-content">
                {!! truncate($post->parsedContent(), 500) !!}<a href="{{ route('blog.post', ['post' => $post->slug]) }}"
                                                                title="{{ $post->title }}">Read More...</a>
            </div>
        </div>
    @endforeach
@else
    <b>No posts to show</b>
@endif