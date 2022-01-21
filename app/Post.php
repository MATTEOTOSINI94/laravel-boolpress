<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $fillable = [
        'title', 'content', 'coverImg','categorie_id',"user_id"
    ];

   public function user(){
       return $this->belongsTo("App\User");
   }

   public function categorie(){
       return $this->belongsTo("App\Categorie");
   }

   public function tag(){
       return $this->belongsToMany("App\Tag","tag_post");
   }
}
