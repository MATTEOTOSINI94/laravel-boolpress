@extends('admin.private')

@section('content')

@if (count($errors->all()) !== 0)
<div class="alert alert-danger" role="alert">
  @foreach ($errors->all() as $message)
    <strong>{{$message}}</strong><br>
  @endforeach
  </div>
  @endif

<div class="d-flex justify-content-center pt-5"  class="pt-5">
  
<form style="width: 500px" action="{{route("admin.post.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="titolo">Titolo</label>
      <input type="text" class="form-control" id="titolo" name="title" >
    </div>
    <div class="form-group">
      <label for="descrizione">Descrizione</label>
      <textarea type="content" class="form-control" id="descrizione" name="content" ></textarea>
    </div>
    <div class="form-group">
        <label for="cover">Immagine</label>
        <input type="coverImg" class="form-control" id="cover" name="coverImg" >
      </div>
      <div class="form-group">
        <label for="cateogries">Categoria</label>
        <select name="categorie_id" class="form-control">
          @foreach ($categoria as $catego)
          <option value="{{$catego->id}}">{{$catego->title}}</option>
          @endforeach
          
        </select>
      </div>
      <div class="form-group">
        <label for="tags">Tag</label>
        <select name="tags[]" class="form-control" multiple>
          @foreach ($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->title}}</option>
          @endforeach
          
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection