<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Post;
use App\Models\PostCategory;
use Conner\Tagging\Tag;

Route::bind('post', function ($value) {
    return Post::where('slug', $value)->published()->firstOrFail();
});


Route::bind('category', function ($value) {
    return PostCategory::where('slug', $value)->firstOrFail();
});

Route::bind('tag', function ($value) {
    return Tag::where('slug', $value)->firstOrFail();
});

Route::get('/', ['uses' => 'SiteController@index', 'as' => 'index']);
Route::get('/skills', ['uses' => 'SiteController@skills', 'as' => 'skills']);
Route::get('/portfolio', ['uses' => 'SiteController@portfolio', 'as' => 'portfolio']);
Route::get('/contact', ['uses' => 'SiteController@contact', 'as' => 'contact']);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

Route::group(['middleware' => 'auth.basic'], function () {
    Route::get('/admin', ['uses' => 'AdminIndexController@index', 'as' => 'admin.index']);
    Route::resource('admin/posts', 'AdminPostController');
});