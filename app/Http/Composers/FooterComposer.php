<?php namespace App\Http\Composers;

use App\Models\Post;
use App\Models\PostCategory;
use Conner\Tagging\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class FooterComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('recentPosts', Post::published()->limit(4)->latest()->get());
    }

}