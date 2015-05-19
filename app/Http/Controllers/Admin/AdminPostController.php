<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\PostCategory;
use Conner\Tagging\Tag;
use Illuminate\Http\Request;
use Input;
use Redirect;
use Response;
use Session;
use View;

class AdminPostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();

        return View::make('admin.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = PostCategory::lists('name', 'id');
        $tags = Tag::lists('name', 'name');

        return view('admin.posts.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = new Post();

        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->status = Input::get('status');
        $post->category()->associate(PostCategory::find(Input::get('category_id')));

        if (Input::hasFile('featuredImage')) {
            $image = Input::file('featuredImage');

            $image->move(__DIR__ . '/storage/', $image->getClientOriginalName());
            $post->setFeaturedImage(__DIR__ . '/storage/' . $image->getClientOriginalName());
        }


        if ($post->save()) {

            if (Input::has('tagged')) {
                $removeTags = array_diff($post->tagNames(), Input::get('tagged'));
                foreach ($removeTags as $tag) {
                    $post->untag($tag);
                }

                $post->tag(Input::get('tagged'));
            }

            return Redirect::route('admin.posts.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::with('tagged')->find($id);
        $categories = PostCategory::lists('name', 'id');
        $tags = Tag::lists('name', 'name');

        return view('admin.posts.edit', compact('post', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $post = Post::find($id);

        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->status = Input::get('status');
        $post->category()->associate(PostCategory::find(Input::get('category_id')));


        if (Input::hasFile('featuredImage')) {
            $image = Input::file('featuredImage');

            $image->move(__DIR__ . '/storage/', $image->getClientOriginalName());
            $post->setFeaturedImage(__DIR__ . '/storage/' . $image->getClientOriginalName());
        }
        if (Input::has('tagged')) {
            $removeTags = array_diff($post->tagNames(), Input::get('tagged'));
            foreach ($removeTags as $tag) {
                $post->untag($tag);
            }

            $post->tag(Input::get('tagged'));
        }

        if ($post->save()) {
            return Redirect::route('admin.posts.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        Session::flash('message', 'You have successfull deleted a blog post');

        return Redirect::route('admin.posts.index');
    }

}
