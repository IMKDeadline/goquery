<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GoQuery Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=site_url('assets/css/style.css')?>">
</head>
<body id="register" style="background-color:#2d3436;">
  <?php
  if ($this->session->flashdata('alert')=='sukses_insert'){
    echo "<script>alert('Berhasil mendaftarkan, silahkan melakukan login dengan akun anda.');</script>";
  }else if ($this->session->flashdata('alert')=='gagal'){
    echo "<script>alert('Username telah digunakan, silahkan gunakan username yang lain.');</script>";
  }
	?>

  <div id="register-window" class="center">
    <div id="profile-pic">
      <img src="<?=site_url('assets/images/db.png')?>">
    </div>

    <div id="register-text">
      <h1>Sign up your account GoQuery</h1>
    </div>
    <?php if($this->session->flashdata('register_status') == 'failed'){ ?>
        <div class="alert alert-danger" id="login-text" role="alert">
          The username is already registered
        </div>
    <?php }?>

  <form method="post" action="<?php echo site_url('User/tambah');?>" id="signinform" class="form-horizontal" role="form">
    <div id="input-boxes1">
        <input type="text" class="input1 input-top" name="firstname" placeholder="First Name" required/>
        <input type="text" class="input1 input-top" name="lastname" placeholder="Last Name" required/>
    </div>
    <div id="input-boxes" style="width: 338px;">
        <input type="text" class="input" name="username" placeholder="Username" required/></br>
        <input type="email" class="input" name="email" placeholder="Email" required/></br>
        <input type="password" class="input" name="password" placeholder="Password" required/></br>
    </div>
    <button type="submit" name="submit" id="sign-up-button" class="btn blue-btn"> Sign Up </button>
  </form>
  </div>
</body>
</html>
