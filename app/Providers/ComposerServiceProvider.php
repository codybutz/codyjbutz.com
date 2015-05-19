<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;


class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.home.testimonials', 'App\Http\Composers\TestimonialComposer');
        View::composer('partials.blog.sidebar', 'App\Http\Composers\BlogSidebarComposer');
        View::composer('blog.index', 'App\Http\Composers\BlogIndexComposer');
        View::composer('layout.footer', 'App\Http\Composers\FooterComposer');
        View::composer('admin.index', 'App\Http\Composers\AdminIndexComposer');
        View::composer('about', 'App\Http\Composers\HomeComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
