{{--Footer--}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>About Me</h4>
                <div class="avatar">
                    <img src="/img/cody.png" width="78" height="78"/>
                </div>

                <div class="bio">
                    <p class="bio-info">Cody is an outgoing, enthusiastic web developer who aspires to learn new
                        technologies everyday. His love for computing and programming has helped him start web
                        development at a young age. When not busy at work, Cody loves to go out boating, fishing, and
                        having a great time with family and friends.
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-blog">
                    <h4>Latest Articles</h4>
                    @if(count($recentPosts) > 0)
                        <ul class="fa-ul">
                            @foreach($recentPosts as $post)
                                <li><i class="fa-li fa fa-newspaper-o"></i><a title="{{ $post->title }}"
                                                                              href="{{ route('blog.post', $post->slug) }}">{{$post->title}}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <b class="text-center"></b>
                    @endif

                </div>
            </div>
            <div class="col-sm-4">
                <h4>Sitemap</h4>
                <dl>
                    <dt><a href="/">About Me</a></dt>
                    <dd>Read more about me and see some of my work</dd>
                    <dt><a href="/skills/">Skills</a></dt>
                    <dd>Learn more about my skills and philosophy</dd>
                    <dt><a href="/blog/">Blog</a></dt>
                    <dd>Read web related articles, opinions &amp; tutorials</dd>
                    <dt><a href="/contact/">Contact</a></dt>
                    <dd>Send a message or project request to me</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="text-left" style="margin: auto;">
                        Copyright &copy; 2015 - Cody Butz
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-right" style="color: white; font-size: 36px;">
                        @include('partials.social-icons')
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
