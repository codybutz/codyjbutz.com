<?php

use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class PostCategoryTableSeeder extends Seeder
{

    public function run()
    {
        $cats = [
            'Web Development',
            'Other'
        ];

        foreach ($cats as $cat) {
            PostCategory::updateOrCreate(['name' => $cat, 'slug' => Conner\Tagging\TaggingUtil::slug($cat)]);
        }
    }
}
