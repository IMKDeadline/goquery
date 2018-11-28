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
<body id="profile">

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
        <ul class="list-group list-group-flush card-middle">
          <li class="list-group-item"><a href="view_lihatprofil"><i class="fas fa-user"> Lihat Profil</i> </a></li>
          <li class="list-group-item"><a href="view_editprofil"><i class="fas fa-user-edit"> Edit Profil</i> </a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9 content">
      <div class="bg-container">
        <div class="tittle">
          <h5>Lihat Profil</h5>
        </div>
        <?php foreach ($user as $usr) { ?>
        <div class="row">
          <div class="col-md-12 gambar">
            <?php
            if ($usr->images == NULL) {
              echo '<img src="'.base_url().'assets/images/icon-user.png">';
            }else {
              echo '<img src="'.base_url().'upload/images/'. $usr->images .'">';
            }
            ?>
          </div>
        </div>
        <div class="bg-informasi py-4">
          <div class="row">
            <div class="col-md-5">
              <h5>Nama Awal : </h5>
            </div>
            <div class="col-md-7">
              <p><?= $usr->first_name ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5>Nama Akhir : </h5>
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
