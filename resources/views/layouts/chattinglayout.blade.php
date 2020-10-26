<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SNAKKER</title>
	<link href="{{ asset('css/chatstyle.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="">
            <div class="header">
                <div class="leftheader">
                    <h2>SNAKKER</h2>




                         <div class="dd">


                            <div class="dropdown-menu">

                                <a class="dropdown-item" href=""
                                data-toggle="" data-target="">

                                        </a>



                                </div>

                          </div>


                </div>
                <div class="rightheader">
                    <nav class="navbar-expand-sm">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">



                          <a class="nav-item nav-link clr" href="#">Welcome | {{ Auth::user()->name }}</a>
                          <a class="nav-item nav-link clr" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}</a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                          <!--  <a class="nav-item nav-link clr"  data-toggle="modal" data-target="#myModal">Login</a>&nbsp; &nbsp; &#x7c;  &nbsp; &nbsp;
                            <a class="nav-item nav-link clr" data-toggle="modal" data-target="#signupModal">Sign Up</a>
                          -->
                          </div>
                        </div>
                      </nav>


                </div>
            </div>

        </nav>
<div class="middle">
        <main class="py-4">
            @yield('content')
        </main>
        </div>
    </div>
</body>
</html>
