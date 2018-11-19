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
        color:black;
        font-weight: 600;
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
        background-color: white;
        padding: 10px;
        padding-top: 35px;
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
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
    <span>Latihan</span>
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
        foreach ($tugas as $tgs) {
        ?>
					<div class="col-12 isi <?=$tgs->tingkat;?>">
						<div class="row">
              <div class="col-md-12 nama">
                <h5><?= $tgs->judul; ?></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <span>Kesulitan: <?= $tgs->tingkat; ?>,</span>
                <span>Max Score: <?= $tgs->max_score; ?></span>
              </div>
              <div class="col-md-7">
                <a href="" class="btn btn-success">Mulai Latihan</a>
              </div>
            </div>
					</div>
        <?php } ?>
      </div>
      <div class="col-md-3">
        <div class="col-lg-12 middle-top">
          <div class="row jenis" style="border-bottom: ridge; border-color: #f5f6fa;">
            <h6>STATUS</h6>
          </div>
          <div class="row jenis">
            <input type="radio" name="info" value="selesai"></input>
            <span>Selesai</span>
          </div>
          <div class="row jenis">
            <input type="radio" name="info" value="belum"></input>
            <span>Belum</span>
          </div>
          <div class="row jenis" style="border-bottom: ridge; border-color: #f5f6fa;">
            <h6>TINGKAT KESULITAN</h6>
          </div>
          <div class="row jenis">
            <input type="radio" name="tingkat" value="mudah"></input>
            <span>Mudah</span>
          </div>
          <div class="row jenis">
            <input type="radio" name="tingkat" value="sedang"></input>
            <span>Sedang</span>
          </div>
          <div class="row jenis">
            <input type="radio" name="tingkat" value="sulit"></input>
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

  <script type="text/javascript">
    $(document).ready(function(){
      $('input[name="tingkat"]').click(function(){
        var data = $(this).val();
        $('.mudah').show();
        $('.sedang').show();
        $('.sulit').show();
        if (data=="sulit"){
          $('.sedang').hide();
          $('.mudah').hide();
        }
        if (data=="sedang"){
          $('.sulit').hide();
          $('.mudah').hide();
        }
        if (data=="mudah"){
          $('.sedang').hide();
          $('.sulit').hide();
        }
      });
    });
  </script>
</body>
</html>
