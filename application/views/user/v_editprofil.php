<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Ubuntu" rel="stylesheet">
</head>
<body id="view">

<div class="container tengah">
  <div class="row">
    <div class="col-md-3 navbarr text-center px-1">
      <div class="card" style="width: 18rem;">
        <div class="card-header" style="font-family: 'Sedgwick Ave', cursive;">
          <a href="<?=base_url('')?>" style=" color:#fff;"><i class="fas fa-home"></i></a>
        </div>
        <div class="card-header" style="font-family: 'Sedgwick Ave', cursive; color:#fff;">
          <a href="<?=base_url('user/view_dashboard')?>" style=" color:#fff;">Dashboard</a>
        </div>
        <div class="card-header" style="background-color: #303952; font-family: 'Quicksand', sans-serif;">
          <a href="<?=base_url('tugas')?>" style=" color:#fff;">Tugas</a>
        </div>
        <div class="card-header" style="background-color: #303952; font-family: 'Quicksand', sans-serif;">
          Pengaturan Akun
        </div>
        <ul class="list-group list-group-flush card-middle">
          <li class="list-group-item"><a href="view_lihatprofil"><i class="fas fa-user"> Lihat Profil</i> </a></li>
          <li class="list-group-item"><a href="view_editprofil"><i class="fas fa-user-edit"> Edit Profil</i> </a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9 content">
      <div class="bg-container">
        <?php if ($this->session->flashdata('alert') == 'sukses_edit' ): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p>Data berhasil diubah</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php endif; ?>

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
              <?php
              if ($usr->images == NULL) {
                echo '<img src="'.base_url().'assets/images/icon-user.png">';
              }else {
                echo '<img src="'.base_url().'upload/images/'. $usr->images .'">';
              }
              ?>
            </div>
            <div class="col-md-7">
              <p>Upload foto profile anda.</p>
              <input type="file" name="berkas" value="">
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Nama Akhir</label>
            </div>
            <div class="col-md-7">
              <input type="text" name="first_name" value="<?= $usr->first_name ?>" class="form-control">
            </div>
          </div>
          <div class="row formm">
            <div class="col-md-5">
              <label>Nama Akhir</label>
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
                <input type="submit" name="Edit" value="Edit Profil" class="btn btn-danger">
              </div>
          </div>
          <?= form_close() ?>
          <?php } ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
