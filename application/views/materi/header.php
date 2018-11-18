<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito|Poppins:500|Ubuntu:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <style media="screen">
  #header .navbarr .logo img{
    width:40px;
  }

  #header .navbar-brand {
    font-family: 'Raleway', sans-serif;
    font-weight: 1000;
  }

  #header .navbarr .navbar-nav li a {
    color: white;
    font-weight: 700;
  }

  #header .navbarr li a:hover {
    color: #00b3fe;
  }

  #header .navbar-nav li {
    margin: auto;
    margin-right: 10px;
  }

  #header .navbar-nav .active li a:focus{
    color: #00b3fe;
    background-color: transparent;
  }

  #header .navbarr .navbar-toggle .icon-bar {
    background-color: #fff;
  }

  #header .dropdown p{
    margin-left: 25px;
  }

  #header .dropdown .btn{
    margin-left:35px;
  }

  </style>
</head>

<body id="header">
  <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top navbarr">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">GoQuery</a>
          <img src="<?=site_url('assets/images/db.png')?>"style="width:40px;">
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <li><a href=""><i class="fas fa-home"> Home</i></a></li>
          <li><a href=""><i class="fab fa-discourse"> Discussion</i></a></li>
          <li><a href=""><i class="fas fa-bell"> Notification</i></a></li>
          <li class="dropdown">
  					<a href="#" data-toggle="dropdown"><i class="fas fa-user"> Account</i></a>
  					<ul id="login-dp" class="dropdown-menu">
  						<li>
  							<div class="row">
  								<div class="col-md-12">
  									<p class="text-left"><strong>Fauzan Rahman</strong></p>
  								</div>
  								<div class="bottom text-center">
  									<a href="<?php echo site_url('control/logout_customer')?>" class="btn btn-danger btn-block">Logout</a>
  								</div>
  							</div>
  						</li>
  					</ul>
  				</li>
        </div>
      </div>
    </div>
    </nav>
  <!--End Navbar-->


</body>
</html>
