

<html>

    <head>
        <title>My Project</title>
        <link href="{{ asset('css/chatstyle.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>

    <body>
        <header>
        <div class="header">
            <div class="leftheader">
                <h2>SNAKKER</h2>

            </div>
            <div class="rightheader">
                <nav class="navbar-expand-sm">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        @if (Session::get('user'))


                        
                      <a class="nav-item nav-link clr" href="/chatlogout">Logout</a>
                        @else
                        <a class="nav-item nav-link clr"  data-toggle="modal" data-target="#myModal">Login</a>&nbsp; &nbsp; &#x7c;  &nbsp; &nbsp;
                        <a class="nav-item nav-link clr" data-toggle="modal" data-target="#signupModal">Sign Up</a>
                        @endif
                      </div>
                    </div>
                  </nav>


            </div>
        </div>
    </header>


            <div>

            @yield('content')

            </div>
            <footer>

            </footer>
        </body>
    </html>
