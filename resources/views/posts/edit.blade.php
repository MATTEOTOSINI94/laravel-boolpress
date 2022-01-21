@extends('admin.private')

@section('content')

@if (count($errors->all()) !== 0)
<div class="alert alert-danger" role="alert">
  @foreach ($errors->all() as $message)
    <strong>{{$message}}</strong><br>
  @endforeach
  </div>
  @endif
  
<div  class="d-flex justify-content-center pt-5">
<form style="width: 500px" action="{{route("admin.post.update", $postMod->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="titolo">Titolo</label>
      <input type="text" class="form-control" id="titolo" name="title" value="{{$postMod->title}}" >
    </div>
    <div class="form-group">
      <label for="descrizione">Descrizione</label>
      <textarea type="content" class="form-control" id="descrizione" name="content" value="">{{$postMod->content}}</textarea>
    </div>
    <div class="form-group">
        <label for="cover">Immagine</label>
        <input type="coverImg" class="form-control" id="cover" name="coverImg">
      </div>
      

      <div class="form-group">
        <label for="cateogries">Categoria</label>
        <select name="categorie_id" class="form-control">
          @foreach ($categoria as $catego)
          <option value="{{$catego->id}}" @if($catego->id===$postMod->categorie_id) selcted @endif>{{$catego->title}}</option>
          @endforeach
          
        </select>
      </div>
      @dump($postMod->tag)
      <div class="form-group">
        <label for="tags">Tag</label>
        <select name="tags[]" class="form-control" multiple >
          @foreach ($tags as $tag)
          <option value="{{$tag->id}}" {{$postMod->tag->contains($tag) ? "selected": "" }}>{{$tag->title}}</option>
          @endforeach
          
        </select>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection