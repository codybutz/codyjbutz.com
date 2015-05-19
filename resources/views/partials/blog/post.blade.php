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

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'codyjbutzcom';
        var disqus_identifier = '{{$post->slug}}';
        var disqus_title = '{{$post->title}}';
        var disqus_url = '{{ Request::url() }}';
        var disqus_category_id = '{{$post->category->name}}';
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var dsq = document.createElement('script');
            dsq.type = 'text/javascript';
            dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
    </noscript>
</div>