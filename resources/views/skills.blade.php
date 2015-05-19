@extends('layout.main')

@section('title', 'My Skills')

@section('content')

    {{-- Slider --}}
    @include('partials.home.slider')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content">
                    <h2>Skills</h2>

                    <p>Hi there, I am Cody Butz, a Full-Stack Web developer with a side of design. I have been working
                        as a freelance consultant on and off for about 5 years now.</p>

                    <p> I have been working since beforeI graduated from high school, actually sometime freshman year. I
                        have created lots of public and private websites and always looking for more work to learn from.
                        I am always using PHP as my primary programming language, however I have used Ruby on Rails and
                        NodeJS to build smaller websites.</p>

                    <p>I mainly take on back-end development projects now but with experience in multiple
                        disciplines, I am able to work on a project with the full scope in mind, making me a Full-Stack
                        Web Developer. Clients find this approach to be extremely valuable as I am able to adapt quickly
                        and able to provide experience and advice on all aspects of a project.</p>

                    <h3>Back End Development</h3>

                    <div class="logos">

                        <div class="logo">
                            <img src="/img/logos/php.png" width="100" height="100" alt="PHP">

                            <p><strong>PHP</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/laravel.png" width="100" height="100" alt="Laravel 5.0">

                            <p><strong>Laravel 5.0</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/symfony.png" width="100" height="100" alt="Symfony">

                            <p><strong>Symfony</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/ruby-on-rails.png" width="100" height="100" alt="Ruby on Rails">

                            <p><strong>Ruby on Rails</strong></p>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <p>I have spend most of my time doing Web Development on Back End Development. I am focused on
                        managing the interchange of data between the application and the browser. I have built dynamic
                        web sites for small / medium and large companies, with great attention to usability and the user
                        experience. </p>

                    <p>While keeping focused on the data, I also focus on how best to develop the server-side of web
                        applications, yet I also understand the front-end of web development, making it very easy to
                        control the front-end content.</p>

                    <p></p>

                    <h3>Front End Development</h3>

                    <div class="logos">

                        <div class="logo">
                            <img src="/img/logos/html5.png" width="100" height="100" alt="HTML5">

                            <p><strong>HTML5</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/css.png" width="100" height="100" alt="CSS3">

                            <p><strong>CSS3</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/javascript.png" width="100" height="100" alt="Javascript">

                            <p><strong>Javascript</strong></p>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <p>I create beautiful Web sites, fast and easy to handle, pleasant and intuitive navigation
                        experience, even on the mobile. Optimized for best results on the search engines. I also create
                        websites that adapt to all devices: desktop, tablet, smartphone.

                    <p>In any web development environment, I use the latest technologies for maximum compatibility with
                        all browsers and platforms. I am also familiar with a wide variety of frameworks to add slider,
                        modals, and other functionality to any site.I am always looking to learn more and boost my
                        knowledge in everything Web Development.</p>

                    <h3>Design</h3>

                    <div class="logos">
                        <div class="logo">
                            <img src="/img/logos/photoshop.png" alt="Photoshop">

                            <p><strong>Photoshop</strong></p>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <h3>Other Skills</h3>

                    <div class="logos small">
                        <div class="logo">
                            <img src="/img/logos/less-css.png" alt="Less CSS">

                            <p><strong>Less CSS</strong></p>
                        </div>
                        <div class="logo">
                            <img src="/img/logos/git.png" alt="Git">

                            <p><strong>Git</strong></p>
                        </div>

                        <div class="logo">
                            <img src="/img/logos/jquery.png" width="100" height="100" alt="jQuery">

                            <p><strong>jQuery</strong></p>
                        </div>
                        <div class="logo">
                            <img src="/img/logos/gruntjs.png" width="100" height="100" alt="GruntJS">

                            <p><strong>GruntJS</strong></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- Extract out to partial --}}
                <aside class="aboutme-side">
                    <div class="avatar">
                        <img src="/img/cody.png" width="188" height="188" scale="0">
                    </div>
                    @include('partials.social-icons')
                    <div class="bio">
                        <p>Cody is an outgoing, enthusiastic web developer who aspires to learn new technologies
                            everyday. His love for computing and programming has helped him start web development at a
                            young age. When not busy at work, Cody loves to go out boating, fishing, and having a great
                            time with family and friends.</p>
                        <a href="{{ route('contact') }}" class="btn btn-block btn-primary">Contact me</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection

