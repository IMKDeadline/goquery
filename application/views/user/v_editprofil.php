<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
</head>
<body id="view">

<div class="container tengah">
  <div class="row">
    <div class="col-md-3 navbarr text-center px-1">
      <!-- <nav class="nav flex-column">
        <a class="nav-link active" href="menuProfil">Lihat profil</a>
        <a class="nav-link" href="menuEdit ">Edit Profil</a>
        <a class="nav-link" href="#">Ubah Sandi</a>
      </nav> -->
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
        <div class="public">
            <div class="tittle">
              <h5>Edit Profil</h5>
            </div>
          <div class="row">
            <div class="col-md-12 info">
              <strong>Data Pribadi</strong>
            </div>
          </div>
          <?php echo form_open_multipart("user/edit"); ?>
          <?php foreach ($user as $usr) { ?>
          <div class="row">
            <div class="col-md-5 gambar">
              <img src="<?=base_url()?>upload/images/<?= $usr->images?>">
            </div>
            <div class="col-md-7">
              <p>Upload foto profile anda.</p>
              <input type="file" name="berkas" value="">
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Fisrt Name</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="first_name" value="<?= $usr->first_name ?>" class="form-control">
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Last Name</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="last_name" value="<?= $usr->last_name ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="public">
          <div class="row">
            <div class="col-md-12 info1">
              <strong>Akun</strong>
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Username</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="username" value="<?= $usr->username ?>" class="form-control">
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Email</label>
            </div>
            <div class="col-md-7">
              <input type="email" name="email" value="<?= $usr->email ?>" class="form-control">
            </div>
          </div>
          <div class="row">
              <div class="col-md-5 btnKlik">
                <input type="submit" name="Edit" value="Edit Data" class="btn btn-success">
              </div>
          </div>
          <?= form_close() ?>
          <?php } ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
