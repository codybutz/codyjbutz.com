<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/">

                <div class="navbar-brand">
                    <img src="/img/logo-code.png"/>
                </div>

                <div class="navbar-brand brand-text">
                    Cody Butz<br/>
                    <small>Web Developer</small>
                </div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a {{ Route::currentRouteName() == "index" ? 'class=active' : '' }} href="{{ route('index') }}">About</a></li>
                <li><a {{ Route::currentRouteName() == "skills" ? 'class=active' : '' }} href="{{ route('skills') }}">Skills</a></li>
                <li><a {{ Route::currentRouteName() == "contact" ? 'class=active' : '' }} href="{{ route('contact') }}">Contact Me</a></li>
                @if(Auth::check())
                    <li><a {{ starts_with(Route::currentRouteName(), 'admin')  ? 'class=active' : '' }} href="{{ route('admin.index') }}">Admin</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>