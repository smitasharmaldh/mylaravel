

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
            @if (Session::get('user'))



                 <div class="dd">
                    <button type="button"  class="btn  dropdown-toggle ddbtn" data-toggle="dropdown">
                     Check who is online!!!
                    </button>

                    <div class="dropdown-menu">
                        @foreach($usr as $item)
                        <a class="dropdown-item" href="{!! route('cf', ['frnd'=>$item->id]) !!}"
                        data-toggle="" data-target="">
                                 {{$item->name}}
                                </a>
                             @endforeach


                        </div>

                  </div>

                  @endif
        </div>
		<div class="rightheader">
            <nav class="navbar-expand-sm">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    @if (Session::get('user'))


                  <a class="nav-item nav-link clr" href="#">Welcome | {{Session::get('user')}}</a>
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

	<div class="modal" id="myModal">
		<div class="modal-dialog box">
			 <div class="modal-content box" style="background-color: #086165">
			<div class="modal-body mymodalbody box">
				<form action="chatloginchk" method="post">
                    @csrf
					<table width="100%">
						<tr>
							<td>
								<button type="button" class="mybtn"></button>
							</td>
							<td></td>
							<td>
								<button type="button" class="mybtn" data-dismiss="modal">&times;</button>
							</td>
						</tr>
						<tr>
							<td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
							<td colspan="3">&nbsp;</td>
                        </tr>
						<tr>
							<td></td>
							<td class="heading">
								<h1><b>A</b>ccount <b>L</b>ogin</h1> </td>
							<td></td>
						</tr>

                        <tr>
							<td colspan="3">&nbsp;</td>
                        </tr>
                        <tr>
							<td colspan="3">&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="form-group"> <i class="fa fa-user fa-1x ic" aria-hidden="true"></i>
									<input type="text" placeholder="Username"  name="username" class="form-control fc" id="usr" data-toggle="tooltip" title="Enter username"> </div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="form-group"> <i class="fa fa-lock fa-1x ic" aria-hidden="true"></i>
									<input type="password" placeholder="Password" name="password" class="form-control fc"  id="pass" data-toggle="tooltip" title="Enter Password"> </div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button type="submit" class="mymodalbodybutton" id="mybtn">Sign In</button>
							</td>
							<td> </td>
						</tr>
						<tr>
							<td colspan="3">&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<h6>	<a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Sign Up</a>&nbsp; &nbsp; &#x7c; <a href="">Forgot your password?</a></h6> </td>
							<td></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
	<div class="modal" id="signupModal">
		<div class="modal-dialog box">
			<div class="modal-content box" style="background-color: #086165">
			<div class="modal-body mymodalbody box">
				<form action="chatregister" method="post">

					<table width="100%">
						<tr>
							<td>
								<button type="button" class="mybtn"></button>
							</td>
							<td></td>
							<td>
								<button type="button" class="mybtn" data-dismiss="modal">&times;</button>
							</td>
						</tr>
						<tr>
							<td colspan="3">@csrf/td>
						</tr>
						<tr>
							<td></td>
							<td class="heading" cell>
								<h1><b>A</b>ccount <b>S</b>ignup</h1> </td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3">&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" placeholder="Enter Name" class="form-control fc" id="usr" name="name" data-toggle="tooltip" title="Enter username"> </div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" placeholder="Enter Email" class="form-control fc" id="usr" name="username" data-toggle="tooltip" title="Enter Password"> </div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" placeholder="Enter Password" class="form-control fc" id="usr" name="password" data-toggle="tooltip" title="Enter Password"> </div>
							</td>
							<td></td>
                        </tr>
                        <tr>
							<td></td>
							<td>
								<div class="form-group">
									<input type="text" placeholder="Confirm Password" class="form-control fc" id="usr" name="repassword" data-toggle="tooltip" title="Enter Password"> </div>
							</td>
							<td></td>
						</tr>

						<tr>
							<td></td>
							<td>
								<button type="submit" class="mymodalbodybutton" id="mybtn">Sign Up</button>
							</td>
							<td> </td>
						</tr>
						<tr>
							<td colspan="3">&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<h6>	Already have an account? Click
											<a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal"
											 >
											Log In</a>
										</h6> </td>
							<td></td>
						</tr>
						<tr>
							<td colspan="3">&nbsp;</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>




<!-- Button trigger modal -->


  <!-- Modal -->


        <div>

        @yield('content')

        </div>
        <footer>

        </footer>
    </body>
</html>
