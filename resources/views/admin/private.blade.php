<!DOCTYPE html>
<html lang="en">
<head>
     @include('partials.head')
    <title>Document</title>
</head>
<body>


<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 200px; min-height:100vh ; -webkit-box-shadow: 0px 4px 12px 1px rgba(0,0,0,0.7); 
    box-shadow: 0px 4px 12px 1px rgb(236 236 236 / 99%)">
        <div class="d-flex">
          <img style="width: 50px" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
          <h5 class="align-self-center m-0 pl-3">{{Auth::user()->name}}</h5>
        </div>
        
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{route("admin.post.index")}}" class="nav-link text-secondary " aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{route("admin.post.create")}}" class="nav-link text-secondary">Crea Post</a>
          </li>
          <li>
            <a href="/" class="nav-link text-secondary ">Blog</a>
          </li>

          @if (Auth::user()->role === 'admin')
          <li>
            <a href="{{route("admin.user.index")}}" class="nav-link text-secondary">Utenti</a>
          </li> 
          <li>
            <a href="{{route("admin.categories.create")}}" class="nav-link text-secondary ">Crea Cateogoria</a>
          </li> 
          @endif
          
    
        </ul>
      </div>

      <div class="d-flex">
        <main>
            <div style="width: calc(100vw - 218px);" class="box-nav">
                @if (Route::has('login'))
                <div class="nav-link-content d-flex justify-content-end">
                    @auth
                        <a href="{{ route("admin.post.index") }}">Home</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button style="background: transparent" class="border-0" type="submit"><a>LOGOUT</a></button>
                         </form>
                    
    
                    @else
                        <a href="{{ route('login') }}">Login</a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
           </div>
        @endif

        <div class="">
          

            @yield('content')
                
          

         
      </div>
    </main>
     </div>
      
    </div>
</body>
</html>



