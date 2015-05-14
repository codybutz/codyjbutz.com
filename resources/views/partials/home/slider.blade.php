<div class="laptop-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 hidden-md hidden-sm hidden-xs">
                <div class="slider">
                    <div class="slide">
                        @include('partials.slides.slideOne')
                    </div>
                    <div class="slide">
                        @include('partials.slides.slideTwo')
                    </div>
                    <div class="slide">
                        @include('partials.slides.slideThree')
                    </div>
                </div>
            </div>
            <div class="col-md-12 visible-md visible-sm visible-xs">
                @include('partials.slides.slideOne')
            </div>
        </div>
    </div>
    <div style="clear: both"></div>
    <br/>
</div>