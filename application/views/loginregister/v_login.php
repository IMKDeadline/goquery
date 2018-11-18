<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GoQuery Login</title>
  <link rel="stylesheet" href="<?=site_url('assets/css/style.css')?>">
</head>
<body id="login" style="background-color:#2d3436;">
  <?php
	if ($this->session->flashdata('alert')=='gagal_login'){
		echo "<script>alert('Username atau Password salah.');</script>";
	}
	?>
  <div id="logo">
    <img src="<?=site_url('assets/images/db.png')?>">
  </div>

  <div id="login-window" class="center">
    <div id="profile-pic">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/41205/45.jpg">
    </div>

    <div id="login-text">
      <h1>Sign in with your GoQuery ID</h1>
    </div>

    <form method="post" action="<?php echo site_url('User/login');?>" id="signinform">
    <div id="input-boxes">
      <input type="text" name="username" class="input input-top" placeholder="Email or Username" required/><br />
      <input type="password" name="password" class="input" placeholder="Password" required/><br />
    </div>
    <button type="submit" name="submit" id="sign-in-button" class="btn blue-btn"> Sign In </button>
    </form>

    <span id="forgot-pw"><a href="#">Forgot Password?</a></span>

  </div>

  <span id="sign-up-link"><a href="view_register">Sign up for GoQuery</a></span>
</body>
</html>
