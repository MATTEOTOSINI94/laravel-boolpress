@extends('admin.private')

@section('content')
<div  class="d-flex justify-content-center pt-5">
<form style="width: 500px" action="{{route("admin.user.update", $user->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="form-group">
      <label for="titolo">Nome</label>
      <input type="text" class="form-control" id="titolo" name="name"  value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" >
    </div>

    @if (Auth::user()->role == "admin")
    <div class="form-group">
      <label for="role">Role</label>
      <input type="role" class="form-control" id="role" name="role" value="{{$user->role}}" >
    </div>
    @endif
   

    <button type="submit" class="btn btn-primary">Modifica</button>
  </form>
</div>
@endsection