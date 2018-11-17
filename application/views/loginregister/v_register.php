<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GoQuery Register</title>
  <link rel="stylesheet" href="<?=site_url('assets/css/style.css')?>">
</head>
<body id="register">
  <div id="register-window" class="center">
    <div id="profile-pic">
      <img src="<?=site_url('assets/images/db.png')?>">
    </div>

    <div id="register-text">
      <h1>Sign up your account GoQuery</h1>
    </div>

  <form method="post" action="<?php echo site_url('User/tambah');?>" id="signinform" class="form-horizontal" role="form">
    <div id="input-boxes1">
        <input type="text" class="input1 input-top" name="firstname" placeholder="First Name" required/>
        <input type="text" class="input1 input-top" name="lastname" placeholder="Last Name" required/>
    </div>
    <div id="input-boxes">
        <input type="text" class="input" name="username" placeholder="Username" required/></br>
        <input type="email" class="input" name="email" placeholder="Email" required/></br>
        <input type="password" class="input" name="password" placeholder="Password" required/></br>
    </div>
    <button type="submit" name="submit" id="sign-up-button" class="btn blue-btn"> Sign Up </button>
  </form>
  </div>
</body>
</html>
