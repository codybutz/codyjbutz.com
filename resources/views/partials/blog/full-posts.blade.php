@if(count($allPosts) > 0)
    @foreach($allPosts as $post)
        @include('partials.blog.post', $post)
    @endforeach
@else
    <b>No posts to show</b>
@endif