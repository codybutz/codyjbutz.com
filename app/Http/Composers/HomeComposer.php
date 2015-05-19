<?php namespace App\Http\Composers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class HomeComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('posts', Post::published()->latest()->limit(3)->get());
    }

}