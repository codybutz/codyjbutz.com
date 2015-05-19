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
            if (!PostCategory::whereName($cat)->exists()) {
                PostCategory::create(['name' => $cat, 'slug' => Conner\Tagging\TaggingUtil::slug($cat)]);
            }
        }
    }
}
