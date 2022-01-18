<!DOCTYPE html>
<html lang="en">
<head>
    @section('vue')
    <script src="{{ asset('js/vue.js') }}" defer></script>
    @endsection
   @include('partials.head')
    <title>Document</title>
</head>
<body>

    <header>
        <div class="box-nav">
            @if (Route::has('login'))
            <div class="nav-link-content">
                @auth
                    <a href="{{ route("admin.post.index") }}">Home</a>
                

                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
       </div>
    @endif
    </header>
    <div id="App">

    </div>
</body>
</html>
