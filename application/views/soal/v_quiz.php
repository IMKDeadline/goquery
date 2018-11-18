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
    <span>Quiz</span>
    <span>></span>
    <span>Query</span>
    <div class="row">
      <div class="col-md-12">
        <h2>Query</h3>
      </div>
    </div>
  </div>
<!--End Judul-->

<div class="container-fluid middle ">
  <div class="container">
    <div class="row">
      <div class="col-md-9 middle-top">
					<div class="col-12 isi">
						<div class="row">
              <div class="col-md-12 nama">
                <h5>Quiz 1 : Insert Table</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <span>Mudah,</span>
                <span>Max Score 10,</span>
              </div>
              <div class="col-md-8">
                <a href="" class="btn btn-success">Lihat Materi</a>
              </div>
            </div>
					</div>
      </div>
      <div class="col-md-3">
        <div class="col-lg-12 middle-top">
          <div class="row jenis" style="border-bottom: ridge; border-color: #f5f6fa;">
            <h6>STATUS</h6>
          </div>
          <div class="row jenis">
            <input type="checkbox" name="info" value="Selesai"></input>
            <span>Selesai</span>
          </div>
          <div class="row jenis">
            <input type="checkbox" name="info" value="Belum"></input>
            <span>Belum</span>
          </div>
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
