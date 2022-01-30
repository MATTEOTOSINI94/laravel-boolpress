<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request){

        $posts = Post::with("categorie","user")->get();
        $categorie = $request->query("categorie");
        

        if ($categorie) {
            $posts = $posts->where("categorie_id",$categorie);
        }
     

        return response()->json($posts);
    }

    public function dati(Request $request){



       
        $postList = Post::with("categorie","user",)->paginate(2);

        $categorie = $request->query("categorie");
        $user = $request->query("user");

        if ($categorie) {
            $postList = $postList->where("categorie_id",$categorie);
        }
        if ($user) {
            $postList = $postList->where("user_id",$user);
        }

        return $postList;
    }

    public function showapi($id){
        $post = Post::findOrFail($id);

        return response()->json($post);

    }
}
