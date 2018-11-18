<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .judul  {
        padding: 30px;
        font-family: 'Ubuntu', sans-serif;
      }
      .judul span{
        color: #b2bec3;
        font-size: 13px;
      }
      .jenis {
        margin-left: 10px;
        margin-bottom: 10px;
        font-family: 'Nunito', sans-serif;
      }
      .jenis h6{
        color: #a4b0be;
        font-weight: bold;
      }

      .jenis a {
        color:grey;
        font-weight:bold;
        outline: none;
      }

      .jenis a:hover {
        color: black;
        text-decoration: none;
      }

      .middle-top {
        background-color: #f5f6fa;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      .middle {
        background-color:  #f5f6fa;
      }
      .isi {
        margin-bottom: 10px;
        background-color: white;
        padding: 10px;
        padding-top: 35px;
        height: 100px;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
      }
      .isi a {
        float:right;
      }

      .copyright {
        padding: 10px;
      }
      .jenis input{
        margin-top: 5px;
        margin-right: 3px;
      }
    </style>
  </head>
<body>
<?php include "header.php" ?>

<!--Judul-->
  <div class="container judul">
    <span>Materi</span>
    <span>></span>
    <span>Basic Query</span>
    <div class="row">
      <div class="col-md-12">
        <h2>Basic Query</h3>
      </div>
    </div>
  </div>
<!--End Judul-->

<div class="container-fluid middle ">
  <div class="container">
    <div class="row">
      <div class="col-md-9 middle-top">
      <?php
      foreach ($materi as $mtr) {
      ?>
					<div class="col-12 isi">
						<div class="row">
              <div class="col-8 nama">
                <h5><?= $mtr->nama; ?></h5>
              </div>
              <div class="col-4">
                <?php
    							$slug = $mtr->slug;
    						?>
                <a href="<?= base_url('materi/'.$slug) ?>" class="btn btn-success">Lihat Materi</a>
              </div>
            </div>
					</div>
      <?php } ?>
      </div>
      <div class="col-md-3">
        <div class="col-lg-12 middle-top">
          <div class="row jenis" style="border-bottom: ridge; border-color: #f5f6fa;">
            <h6>TINGKAT KESULITAN</h6>
          </div>
          <div class="row jenis">
            <input type="checkbox" name="tingkat" value="Mudah"></input>
            <span>Mudah</span>
          </div>
          <div class="row jenis">
            <input type="checkbox" name="tingkat" value="Sedang"></input>
            <span>Sedang</span>
          </div>
          <div class="row jenis">
            <input type="checkbox" name="tingkat" value="Sulit"></input>
            <span>Sulit</span>
          </div>
        </div>
			</div>
    </div>
  </div>
</div>

<!--Copyright-->
	<div class="container copyright">
		<div class="row">
			<div class="col-9">
				<span>Copyright &copy; 2018 | Dayeuh Kolot, Bandung, Indonesia</span>
			</div>
		</div>
	</div>
	<!--End Copyright-->
</body>
</html>
