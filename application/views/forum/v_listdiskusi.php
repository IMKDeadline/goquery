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

    .middle-top {
      background-color: #f5f6fa;
      margin-top: 50px;
      margin-bottom: 50px;
    }
    .middle {
      background-color:  #f5f6fa;
    }
    #list main .event {
    overflow: hidden;
    position: relative;
    background: #fff;
    -webkit-box-shadow:rgba(0,0,0,0.38) 1px 1px 7px 0;
    box-shadow: rgba(0,0,0,0.38) 1px 1px 7px 0;
    padding: 0;
    margin-bottom: 20px;
    min-height: 300px;
    }

    #list main .event .top{
    background: #833471;
    color: white;
    text-decoration: none;
    padding: 15px;
    line-height: 1;
    font-family: sans-serif;
    font-weight: 600;
    font-size: 12px;
    }

    #list main .event .middle{
    font-family: proxima-nova;
    padding : 15px;
    min-height: 200px;
    background-color: white;
    }
    #list main .event .bottom{
    border-top: 1px solid #dee5eb;
    min-height: 70px;
    overflow: hidden;
    width: 100%;
    }

    #list main .event .middle h4{
    font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-weight: 600px;
    font-size: 22px;
    }

    #list main .event img{
    width: 20px;
    float: right;
    }

    #list main .event .bottom .time{
    font-size: 12px;
    border-right: 1px solid #dee5eb;
    border-bottom: 1px solid #dee5eb;
    text-align: center;
    color: rgba(85,104,115,0.72);
    text-transform: uppercase;
    line-height: 20px;
    font-weight: bold;
    display: inline-block;
    box-sizing: border-box;
    float: left;
    width: 20%;
    height: 100px;
    padding-top: 20px;

    }
    #list main .event .bottom .time .number{
    font-size: 30px;
    text-align: center;
    color: black;
    }
    #list main .event .bottom .relawan{
    font-size: 15px;
    width: 80%;
    float: right;
    position: relative;
    border-bottom: 1px solid #dee5eb;
    color: #71787d;
    line-height: 20px;
    min-height: 50px;
    }

    #list main .event .bottom .lokasi{
    font-size: 10px;
    float: right;
    text-align: center;
    }

    #list main .event a{
    position: absolute;
    height: 100%;
    width: 100%;
    z-index: 1;
    top: 0;
    left: 0;
    }

    #list main .event a:hover{text-decoration: none;}

    #list main .event .top p{
    margin-bottom: 0;
    }

    #list .deskripsi{
    font-size: 20px;
    color: #71787d;
    }

    #list .date{
    font-size: 13px;
    }

    </style>
  </head>
<body id="list">
<?php include "header.php" ?>

<!--Judul-->
  <div class="container judul">
    <span>Forum</span>
    <span>></span>
    <span>Diskusi</span>
    <div class="row">
      <div class="col-md-12">
        <h2>Diskusi</h3>
      </div>
    </div>
  </div>
<!--End Judul-->
<main>
<div class="container-fluid middle ">
  <div class="container">
    <div class="row">
      <?php
					foreach ($post as $post) {
				?>
				<div class="col-sm-12 col-md-5 col-lg-4 py-4">
					<div class="col-12 event">
						<div class="top post">
							<span>Forum Diskusi</span>
							<img src="<?=base_url()?>assets/images/icon-event.png">
						</div>
						<div class="middle">
							<h4><?= $post->judul ?></h4>
							<span class="deskripsi"><?= $post->first_name ?> <?= $post->last_name ?></span>
						</div>
						<div class="bottom">
							<div class="time">
								<span class="comment"><?= $post->comment ?></span>
								<span>Comment</span>
							</div>
							<div class="relawan">
								<div><span><?= $post->created_by ?></span></div>
								<img src="<?=base_url()?>assets/images/icon-orang.png">
							</div>
							<div class="Date">
								<span><?= $post->tanggal ?></span>
								<img src="<?=base_url()?>assets/images/icon-time.png">
							</div>
						</div>
            <?php
								$id = $post->id_post;
						?>
						<a href="tampilDetail/<?= $id ?>"></a>
					</div>
				</div>
      <?php } ?>
		</div>
  </div>
</div>
</main>
<!--Copyright-->
	<div class="container copyright">
		<div class="row">
			<div class="col-9">
				<span>Copyright &copy; 2018 | Dayeuh Kolot, Bandung, Indonesia</span>
			</div>
		</div>
	</div>
	<!--End Copyright-->

</script>

</body>
</html>
