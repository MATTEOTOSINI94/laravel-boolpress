@extends('admin.private')

@section('content')
    <div class="container pt-3">
        <div class="row pt-5">
            @foreach ($posts as $post)
            <div class="col-4 border ">
                <img style="height: 300px" class="card-img-top" src="{{$post->coverImg}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <div>
                    @foreach ($post->tag as $tag)
                    <span class="badge badge-primary">
                      {{$tag->title}}
                    </span>
                    @endforeach
                  </div>
                  <p style="width: 100%; overflow:hidden" class="card-text crop">{{$post->content}}</p>
                  <p class="card-text"><small>{{$post->created_at}}</small><br>Creato da: <strong>{{$post->user->name}}</strong></p>
                 
                  <div class="d-flex justify-content-center">
                    <a href="{{route("admin.post.edit",$post->id)}}" class="">Modifica</a>
                    <a href="{{route("admin.post.show",$post->id)}}" class=" ml-3">Visualizza</a>
            
                    <form action="{{route("admin.post.destroy",$post->id)}}" method="POST">
                      @csrf
                      @method("delete")
                      <button class="btn btn-primary ml-3">Elimina</button>
                    </form>
                   
                  </div>
                </div>
              </div>
            @endforeach
            
 
           
          </div>
    </div>
@endsection