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

      .isi .paragraf{
        margin-left: 15px;
        margin-right: 15px;
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
        color:#63cdda;
        font-weight:normal;
        outline: none;
      }

      .jenis a:hover {
        color: grey;
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
        padding-top: 30px;
        background-color: white;
        font-family: 'Poppins', sans-serif;
      }
      .isi a {
        float:right;
      }

      .copyright {
        padding: 10px;
      }
    </style>
  </head>
<body>
<?php include "header.php" ?>

<!--Judul-->
<?php
foreach ($materi as $mtr) {
?>
  <div class="container judul">
    <span>Materi</span>
    <span>></span>
    <span>Basic Query</span>
    <span>></span>
    <span><?= $mtr->nama; ?></span>
    <div class="row">
      <div class="col-md-12">
        <h2><?= $mtr->nama; ?></h3>
      </div>
    </div>
  </div>
<!--End Judul-->

<div class="container-fluid middle ">
  <div class="container">
    <div class="row">
      <div class="col-md-9 middle-top">
					<div class="col-12 isi">
            <div class="row paragraf">
                <p><?= $mtr->isi; ?></p>
            </div>
					</div>
      <?php } ?>
      </div>
      <div class="col-md-3">
        <div class="col-lg-12 middle-top">
          <div class="row jenis" style="border-bottom: ridge;">
            <h6>BUTUH BANTUAN?</h6>
          </div>
          <div class="row jenis" style="margin-bottom:20px;">
            <div class="col-md-1">
              <i class="fab fa-wpforms"></i>
            </div>
            <div class="col-md-10">
              <a href="#"><span>Lihat Diskusi</span></a>
            </div>
            <div class="col-md-1">
              <i class="fas fa-tasks"></i>
            </div>
            <div class="col-md-10">
              <a href="#"><span>Latihan dan Quiz</span></a>
            </div>
          </div>
          <div class="row jenis" style="border-bottom: ridge;">
            <h6>DETAIL LAINNYA</h6>
          </div>
          <div class="row jenis">
            <div class="col-md-1">
              <i class="far fa-file"></i>
            </div>
            <div class="col-md-10">
              <a href="#"><span>Download Materi</span></a>
            </div>
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
