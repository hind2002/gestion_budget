@extends('layouts.app')
 {{-- @extends('layouts.app')

@section('content')
<!DOCTYPE html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
  
      <title>{{ config('app.name', 'YourMoney') }}</title>
  
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- Bootstrap CSS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Updock&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet"  href="{{asset('css/stylebudget.css')}}">
</head>
<body> 
   
    <header id="main-header">
  <nav class="navbar navbar-expand-lg" >
    <!-- <header id="main-header"> -->
    <div class="container">
      <a class="navbar-brand" href="#">YourMoney</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav m-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href=#home>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=#trend >Transactions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href=#ourproduct>
              Comptes
            </a> </li>   
            <li class="nav-item">
              <a class="nav-link" href=#aboutus >Budget</a>
            </li> 
          
        
          
                          <!-- Authentication Links -->

                          @guest
                              <li class="nav-item" >
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('CONNEXION') }}</a>
                              </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('INSCRIPTION') }}</a>
                                  </li>
                              @endif
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>
  
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Deconnexion') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                      <script src="/js/bootstrap.min.js"></script>
                          <script src="/js/popper.min.js"></script>
                                  </div>
                              </li>
                          @endguest
                          
                  </div>
              </div>
          </nav>
          <main class="py-4">
            
              @yield('content')
          </main>
          
        </ul>
        
      </div>
    </div>
  </nav> 
</html>
@endsection 
 --}}