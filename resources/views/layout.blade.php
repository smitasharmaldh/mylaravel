<html>
    <head>
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Resto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/lists">Lists</a>
                <a class="nav-item nav-link" href="#">CotactUs</a>
                <a class="nav-item nav-link" href="#">AboutUs</a>
                @if (Session::get('user'))
              <a class="nav-item nav-link" href="#">Welcome | {{Session::get('user')}}</a>
              <a class="nav-item nav-link" href="/userlogout">Logout</a>
                @else
                <a class="nav-item nav-link" href="/register">Register</a>
                <a class="nav-item nav-link" href="/userlogin">Login</a>
                @endif
              </div>
            </div>
          </nav>
        </header>
        <div>

            @yield('content')

        </div>
        <footer>

        </footer>
    </body>
</html>
