@extends('admin.private')

@section('content')

@if(Auth::user()->role == "admin")
<div class="" >
    <li style="min-width: 500px" class="list-group-item">{{$user->name}} - Email({{$user->email}})   <a href="{{route("admin.user.edit",$user->id) }}">Modifica</a></li>
  </div>
  @endif
@endsection