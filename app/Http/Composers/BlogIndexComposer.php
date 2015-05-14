<?php namespace App\Http\Composers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class BlogIndexComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('allPosts', Post::published()->latest()->get());
    }

}