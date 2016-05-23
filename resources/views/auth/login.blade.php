<!doctype html> 
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Login - Admin</title>
		<meta name="description">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="../login/styles/vendor.css">
		<link rel="stylesheet" href="../login/styles/main.css">
	</head>
	<div class="login-page">
		<div class="img-container">
			</div>
		<div class="form-content">
			<div class="pro-link"> 
				<a href="{{ url('pesan') }}">BATAL LOGIN</a> 
			</div>
			<div>
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
			<form class="bottom-75" method="POST" action="{{ ('login/ceklogin') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="table-form">
					<div class="form-groups">
					<h1>LOGIN ADMIN<br> 
					</h1>
			
						<div class="form-group"> 
			
						<input type="text" name="username" class="form-control input-lg" placeholder="USERNAME" required> 
						</div>
						<div class="form-group"> 
							<input type="password" name="password" class="form-control input-lg" placeholder="PASSWORD" required> 
						</div>
					</div>
					<div class="button-container">
					<br>						 
					<br>						 
					<br>						 
						<button type="submit" class="btn btn-default login">
						<img src="../login/images/arrow.png">
						</button> 
					</div>
				</div>
				<div class="remember"> 
					<label class="checkbox1" for="Option"> 
					<input id="Option" type="checkbox"> 
					<span></span> 
					</label> remember me 
				</div>
			</form>
		</div>
	</div>
	<div> </div>
	<script> </script> 
	<script src="../Lgn/scripts/vendor.js"></script> <script src="../Lgn/scripts/scripts.js"></script> 
</html>