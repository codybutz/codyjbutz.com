<?php namespace App\Http\Composers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class AdminIndexComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('publishedPosts', Post::published()->latest()->get());
        $view->with('unpublishedPosts', Post::unpublished()->latest()->get());
    }

}