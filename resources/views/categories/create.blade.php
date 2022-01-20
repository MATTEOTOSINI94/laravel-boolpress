@extends('admin.private')

@section('content')


<div class="d-flex justify-content-center pt-5"  class="pt-5">
  
<form style="width: 500px" action="{{route("admin.categories.store")}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="titolo">Titolo</label>
      <input type="text" class="form-control" id="titolo" name="title" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection