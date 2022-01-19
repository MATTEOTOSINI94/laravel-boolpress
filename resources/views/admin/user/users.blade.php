@extends('admin.private')

@section('content')
<ul class="list-group pt-5">
    @foreach ($users as $user)
    <div class="d-flex justify-content-center align-items-center" >
      <li style="min-width: 500px" class="list-group-item">{{$user->name}} - Email({{$user->email}})   <a href="{{route("admin.user.edit",$user->id) }}">Modifica</a></li>
    </div>
    @endforeach
    
    
  </ul>
@endsection