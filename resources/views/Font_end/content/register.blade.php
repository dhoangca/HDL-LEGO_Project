<!DOCTYPE html>
<html>
	<head>
        <base href="{{asset('')}}">
		<meta charset="utf-8">
		<title>HDL - LEGO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="login-register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="login-register/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="image-holder">
				<img src="login-register/images/347287.jpg" alt="">
			</div>
			<div class="form-inner">
				<form action="" method="POST">
					@csrf
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="login-register/images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" name="uName"  data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">Username:</label>
						<input type="text" class="form-control" name="uUsername" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="">E-mail:</label>
						<input type="text" class="form-control" name="uEmail" data-validation="email">
					</div>
					<div class="form-group" >
						<label for="">Password:</label>
						<input type="password" class="form-control" name="uPassword" data-validation="length" data-validation-length="min5">
					</div>
					<div class="form-group" >
						<label for="">Phone Number:</label>
						<input type="text" class="form-control" name="uPhoneNumber" data-validation="length" data-validation-length="min8">
					</div>
					<div class="form-group" >
						<label for="">Address:</label>
						<input type="text" class="form-control" name="Address" >
					</div>
					<button type="submit" onclick="return confirm('Create Account Success')" > create my account </button>
					<div class="socials">
						<p>Sign up with social platforms</p>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-facebook"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-instagram"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-twitter"></i>
						</a>
						<a href="" class="socials-icon">
							<i class="zmdi zmdi-tumblr"></i>
						</a>
					</div>
				</form>
			</div>
			
		</div>
		
		<script src="{{asset('login-register/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('login-register/js/jquery.form-validator.min.js')}}"></script>
		<script src="{{asset('login-register/js/main.js')}}"></script>
	</body>
</html>
