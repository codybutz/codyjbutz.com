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
        View::composer('partials.blog.short-posts', 'App\Http\Composers\BlogIndexComposer');
        View::composer('admin.index', 'App\Http\Composers\AdminIndexComposer');
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
