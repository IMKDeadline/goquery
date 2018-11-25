<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
</head>
<body id="profile">

<div class="container tengah">
  <div class="row">
    <div class="col-md-3 navbarr text-center px-1">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Pengaturan Akun
        </div>
        <ul class="list-group list-group-flush card-middle">
          <li class="list-group-item"><a href="#">Lihat Profil</a></li>
          <li class="list-group-item"><a href="#">Edit Profil</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9 content">
      <div class="bg-container">
        <div class="tittle">
          <h5>Lihat Profil</h5>
        </div>
        <div class="row">
          <div class="col-md-12 gambar">
            <img src="<?=base_url()?>assets/images/icon-user.png">
          </div>
        </div>

        <?php foreach ($user as $usr) { ?>

        <div class="bg-informasi">
          <div class="row">
            <div class="col-md-5">
              <h5>First Name : </h5>
            </div>
            <div class="col-md-7">
              <p><?= $usr->first_name ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5>Last Name : </h5>
            </div>
            <div class="col-md-7">
              <p><?= $usr->last_name ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5>Email : </h5>
            </div>
            <div class="col-md-7">
              <p><?= $usr->email ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5>Username : </h5>
            </div>
            <div class="col-md-7">
              <p><?= $usr->username ?></p>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
