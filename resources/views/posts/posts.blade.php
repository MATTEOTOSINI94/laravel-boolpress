@extends('admin.private')

@section('content')
    <div class="container pt-3">
        <div class="row">

            @foreach ($posts as $post)
            <div class="col-5 border ">
                <img class="card-img-top" src="{{$post->coverImg}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p style="width: 100%; overflow:hidden" class="card-text">{{$post->content}}</p>
                  <p class="card-text"><small class="text-muted">{{$post->crated_at}}</small></p>
                  <div class="d-flex justify-content-center">
                    <a href="{{route("admin.post.edit",$post->id)}}" class="btn btn-secondary">Modifica</a>

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