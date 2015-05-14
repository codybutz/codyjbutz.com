<?php namespace App\Http\Composers;

use App\Models\Post;
use App\Models\PostCategory;
use Conner\Tagging\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class BlogSidebarComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('recentPosts', Post::published()->limit(5)->latest()->get());
        $view->with('categories', PostCategory::get()->sortBy(function ($cat) {
            return count($cat->posts()->published()->get());
        }, SORT_REGULAR, true));

        $view->with('tags', Tag::orderBy(DB::raw('RAND()'))->limit(15)->get());
    }

}