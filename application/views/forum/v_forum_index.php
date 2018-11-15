<div class="container">
  <div class="row py-5">
    <a href="<?=base_url('forum/create')?>" class="btn btn-primary">Buat Post</a>
  </div>
  <div class="row">

    <?php
    if(!empty($all_post)){
     foreach ($all_post as $post){ ?>

        <div class="col-sm-4">
          <a href="<?=base_url('forum/'.$post->slug.'')?>">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$post->judul?></h5>
                <p class="card-text"><?=$post->created_by.' '.$post->tanggal?></p>
              </div>
            </div>
          </a>
        </div>
    <?php } } ?>
  </div>

</div>
