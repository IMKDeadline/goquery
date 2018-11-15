<div class="container">
  <div class="row">
    <div class="card text-center">
      <div class="card-header">
        GoQuery
      </div>
      <div class="card-body">
        <h5 class="card-title"><?=$post->judul?></h5>
        <p class="card-text"><?=$post->isi?></p>

        <div class="row py-5">
          <a href="<?=base_url('forum/'.$post->slug.'/edit')?>" class="btn btn-primary">Edit Post</a>
          <div class="">
            <form class="" action="delete" method="post">
              <input type="hidden" name="id" value="<?=$post->id_post?>">
              <input type="submit" class="btn btn-danger" value="Delete Post">
          </form>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <?= 'dipost saat '.$post->tanggal?>
      </div>
    </div>
  </div>
</div>
