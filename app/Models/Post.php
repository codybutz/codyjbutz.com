<?php namespace App\Models;

use Conner\Tagging\TaggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use ParsedownExtra;

class Post extends Model
{

    use TaggableTrait, SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title'         => 10,
            'body'          => 5,
            'category.name' => 2
        ],
        'joins'   => [
            'category' => ['posts.category_id', 'post_category.id'],
        ],
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeUnpublished($query)
    {
        return $query->where('status', '<>', 'published');
    }

    public function parsedContent()
    {
        return ParsedownExtra::instance()->setMarkupEscaped(true)->text($this->body);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\PostCategory');
    }
}
