@extends('admin.private')

@section('content')
<div class="d-flex justify-content-center pt-5"  class="pt-5">
<form style="width: 500px" action="{{route("admin.post.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="titolo">Titolo</label>
      <input type="text" class="form-control" id="titolo" name="title" >
    </div>
    <div class="form-group">
      <label for="descrizione">Descrizione</label>
      <input type="content" class="form-control" id="descrizione" name="content" >
    </div>
    <div class="form-group">
        <label for="cover">Immagine</label>
        <input type="coverImg" class="form-control" id="cover" name="coverImg" >
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection