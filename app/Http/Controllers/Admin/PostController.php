<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Categorie;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categoria = Categorie::all();
        
        return view("posts.posts", compact("posts","categoria"));
    }

    public function dati(){

        $postList = Post::with("categorie","user")->get();

        return $postList;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categoria = Categorie::all();
        return view("posts.create",compact("categoria"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:20',
            'coverImg'=>'required|url',
        ]);

        // da completare la validazione
        $data =$request->all();
        
        $newPost = new Post();

        $newPost->title = $data["title"];
        $newPost->content=$data["content"];
        $newPost->coverImg=$data["coverImg"];
        $newPost->user_id= Auth::user()->id;
        $newPost->save();

        return redirect()->route("admin.post.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
     

        return view("posts.show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postMod = Post::findOrFail($id);
        $categoria = Categorie::all();
      
        return view("posts.edit",["postMod"=>$postMod,"categoria"=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:20',
            'coverImg'=>'required|url',
        ]);

        $data = $request->all();
        $post->update($data);

        return redirect()->route("admin.post.show", $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("admin.post.index", $post->id);
    }
}
