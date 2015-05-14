<div class="post">
    <h3 class="post-title">{{ $post->title }}</h3>

    <div class="text-right">
        <small>Posted on <i>{{ $post->created_at->toFormattedDateString() }}</i></small>
    </div>

    <div class="post-content">
        {!! $post->parsedContent() !!}
    </div>

    <div class="post-category">
        <b>Category: </b> {{$post->category->name}}
    </div>
</div>