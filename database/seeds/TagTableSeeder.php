<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["informazione","cultura","disinformazione"];
        
        foreach ($tags as $key => $tag) {
            # code...

            $newTag = new Tag();
            $newTag->title = $tag;
            $newTag->save();
        }
    }
}
