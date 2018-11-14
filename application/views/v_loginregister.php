<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login / register material design form</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'>
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

</head>

<body>

  <div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
		<form class="col s12">
			<div class="form-container">
				<h3 class="teal-text">Hello</h3>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="action">Login</button>
					<br>
					<br>
					<a href="">Forgot Password?</a>
				</center>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form method="post" action="<?php echo site_url('User/tambah');?>" id="signupform" class="form-horizontal" role="form">
			<div class="form-container">
				<h3 class="teal-text">Welcome</h3>
				<div class="row">
					<div class="input-field col s6">
						<input id="first_name" name="firstname" type="text" class="validate">
						<label for="last_name">First Name</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" name="lastname" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>
        <div class="row">
					<div class="input-field col s12">
						<input id="email" name="username" type="text" class="validate">
						<label for="username">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" name="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" name="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<!-- <div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" name="password" type="password" class="validate">
						<label for="password-confirm">Password Confirmation</label>
					</div>
				</div> -->
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="submit">Submit</button>
				</center>
			</div>
		</form>
	</div>
</div>
  <script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script>
    <script  src="<?=base_url('assets/js/index.js')?>"></script>
</body>

</html>
