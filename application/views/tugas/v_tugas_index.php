<div class="container">
  <div class="row py-5">
    <a href="<?=base_url('tugas/create')?>" class="btn btn-primary">Buat Soal</a>
  </div>
  <div class="row">

    <?php
    if(!empty($all_tugas)){
     foreach ($all_tugas as $tugas){ ?>

        <div class="col-sm-4">
          <a href="<?=base_url('tugas/'.strtolower(url_title($tugas->judul)))?>">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$tugas->judul?></h5>
                <p class="card-text"><?=$tugas->created_by.' '.$tugas->tanggal?></p>
              </div>
            </div>
          </a>
        </div>
    <?php } } ?>
  </div>

</div>
