<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class UpdateSlugPostsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $slugs = [];
        foreach ($posts as $post) {
            
            $titolo = $post["title"];
            $slug = Str::slug($titolo);
        if (array_key_exists($slug,$slugs)) {
            $slugs[$slug] += 1;
        }else{
            $slugs[$slug] = 1;
            
        }
        $post->slug = $slug . "-" . $slugs[$slug];
        $post->save();



        }
    }
}
