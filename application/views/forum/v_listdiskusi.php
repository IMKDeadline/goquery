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
    <?php if ($this->session->flashdata('alert') == 'sukses_tambah' ): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      <p>Forum berhasil ditambahkan.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>
    <div class="row px-3 pt-5 mb-2">
      <a href="<?=base_url('forum/create')?>" class="btn btn-danger"><i class="fas fa-plus"></i></a>
    </div>
    <div class="row">
      <?php
					foreach ($post as $key => $post ) {
				?>
				<div class="col-sm-12 col-md-5 col-lg-4 py-4">
         <a href="<?=base_url('forum/'.$post->slug.'')?>">
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
                <?php
                if (isset($comment[$key]->total) == NULL){
                  echo '<span class="comment">0</span>';
                }else{
                  if ($post->id_post == $comment[$key]->id_post){
                    echo '<span class="comment">'. $comment[$key]->total .'</span>';
                  }else {
                    echo '<span class="comment">0</span>';
                  }
                }
                ?>
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
					</div>
          </a>
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
