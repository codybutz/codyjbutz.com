<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\SearchRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Conner\Tagging\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog.index');
    }


    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return View
     */
    public function post(Post $post)
    {
        return view('blog.post', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param PostCategory $category
     * @return View
     */
    public function category(PostCategory $category)
    {
        return view('blog.category', compact('category'));
    }


    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return View
     */
    public function tag(Tag $tag)
    {
        $posts = Post::withAnyTag(array($tag->name))->get();

        return view('blog.tag', compact(array('tag', 'posts')));
    }

    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function search(SearchRequest $request)
    {
        $posts = Post::search($request->get('search'))->get();
        echo count($posts);

        return view('blog.search', compact('posts'));
    }

}
