<?php namespace App\Models;

use Conner\Tagging\TaggableTrait;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use ParsedownExtra;
use Spatie\MediaLibrary\MediaLibraryModel\MediaLibraryModelInterface;
use Spatie\MediaLibrary\MediaLibraryModel\MediaLibraryModelTrait;

class Post extends Model implements MediaLibraryModelInterface
{

    use TaggableTrait, SearchableTrait, MediaLibraryModelTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 10,
            'body'  => 5,
            'post_categories.name' => 2
        ],
        'joins'   => [
            'post_categories' => ['posts.category_id', 'post_categories.id'],
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

    public function setFeaturedImage($file)
    {
        $media = $this->getMedia('featuredImage');
        if (count($media) > 0) {
            foreach ($media as $img) {
                $this->removeMedia($img->id);
            }
        }

        $this->addMedia($file, 'featuredImage');
    }

    public function getFeaturedImage()
    {
        $media = $this->getMedia('featuredImage');

        if (count($media) > 0) {
            return $media[0];
        }

        return null;
    }

    public function getImageProfileProperties()
    {
        return [
            'timeline'  => ['w' => 300, 'h' => 300, 'fit' => 'stretch', 'fmt' => 'png'],
            'timeline2' => ['w' => 300, 'h' => 300, 'fit' => 'stretch', 'fmt' => 'png'],
        ];
    }
}
