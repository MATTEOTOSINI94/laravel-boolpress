@extends('admin.private')

@section('content')
<div class="d-flex justify-content-center">
<div class="card" style="width: 800px">
    <img class="card-img-top" src="{{$post->coverImg}}" alt="Card image cap">
    <div class="card-body">
        <h1>{{$post->title}}</h1>
      <p class="card-text">{{$post->content}}</p>
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
</div>
@endsection