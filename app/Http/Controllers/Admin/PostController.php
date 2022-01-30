<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Tag;
use App\Categorie;
use Illuminate\Support\Str;
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
        $posts = Post::paginate(2);
        $categoria = Categorie::all();
        
        
        return view("posts.posts", compact("posts","categoria"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categoria = Categorie::all();
        return view("posts.create",compact("categoria","tags"));
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

        $slug = Str::slug($data["title"]);
        dd($slug);

        $tags = $request->only("tags");
        
      
        
       
        
        $newPost = new Post();

        $newPost->title = $data["title"];
        $newPost->content=$data["content"];
        $newPost->coverImg=$data["coverImg"];
      
        $newPost->user_id= Auth::user()->id;
        $newPost->save();
        foreach ($tags as $key => $tag) {
            $newPost->tag()->attach($tag);
        }

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
        $tags = Tag::all();
        $postMod = Post::findOrFail($id);
        $categoria = Categorie::all();
      
        return view("posts.edit",["postMod"=>$postMod,"categoria"=>$categoria,"tags"=>$tags]);
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
        $tags = $request->only("tags");

        // dump($tags["tags"]);
        // exit();
       
        $post->update($data);

        $post->tag()->sync($tags["tags"]);

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
