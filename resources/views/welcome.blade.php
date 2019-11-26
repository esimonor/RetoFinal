<!DOCTYPE html>
<html>
	<head>
		<title>Landing page</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
		<style>
			li:hover{
				text-decoration: underline;
			}
			.button {
			  padding: 15px 25px;
			  font-size: 24px;
			  text-align: center;
			  cursor: pointer;
			  outline: none;
			  color: #fff;
			  background-color: #4CAF50;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 9px #999;
			  margin-left: 30%;
			}

			.button:hover {background-color: #3e8e41}

			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
			}
		</style>
	</head>
	<body style="background-image: url(../images/europe-map.jpg);">
		<!--navbar-expand-md-->
		<nav class="navbar bg-dark navbar-dark">
			<img src="../images/logo.png">
			<a class="navbar-brand" href="#">ESTURI</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-center" style="border-bottom: 1px solid black;border-top: 1px solid black" href="#">Iniciar sesion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-center" style="border-bottom: 1px solid black;" href="#">Crear cuenta</a>
					</li>
				</ul>
			</div>
		</nav>
	<div style="float: right;background-color: black;opacity: 0.5; width: 35%;height: 450px;position: absolute;border-radius: 5%;
	margin-left:62.5%;">
	</div>

		<div style="width: 30%;border:1px solid black; background-color: white;border-radius: 5%; margin-left:65%;margin-top:2%;float: right;position: absolute;" class="rounded-1 text-gray bg-gray-light py-4 px-4 px-md-3 px-lg-4">
				<form class="home-hero-signup text-gray-dark js-signup-form" autocomplete="off" method="post">    
					<dl class="form-group mt-0">
						<dt class="input-label">
						<label class="form-label h5" for="user[login]">Username</label>
						</dt>
						<dd>
						<input type="text" name="user[login]" id="user[login]" class="form-control form-control-lg input-block" autocomplete="off" spellcheck="false">
						</dd>
					</dl>
				
					<dl class="form-group">
						<dt class="input-label">
						<label class="form-label h5" for="user[email]">Email</label>
						</dt>
						<dd>
						<input type="text" name="user[email]" id="user[email]" class="form-control form-control-lg input-block js-email-notice-trigger" autocomplete="off" spellcheck="false">
						</dd>
					</dl>
					<dl class="form-group">
						<dt class="input-label">
						<label class="form-label h5" for="user[password]">Password</label>
						</dt>
						<dd>
						<input type="password" name="user[password]" id="user[password]" class="form-control form-control-lg input-block">
						</dd>
					</dl>
				<input class="button" type="button" value="Sign up" >
			</form>
		</div>
		<footer style="background-color: #1d2023;position: absolute;margin-top: 37%;width: 100%;">
			<ul>
				<li style="color:white;width: 80px">Instagram</li>
				<li style="color:white;width: 80px">Facebook</li>
				<li style="color:white;width: 50px">Twitter</li>
			</ul>
			<p style="color: white;text-align: center;">&copy Esturi 2019</p>
		</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!--<script src={{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
