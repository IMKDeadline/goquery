<!--Judul-->
<div class="container judul">
  <span>Forum</span>
  <span>></span>
  <span>Diskusi</span>
  <span>></span>
  <span><?=$post->judul?></span>
  <div class="row">
    <div class="col-md-12">
      <h2>Diskusi</h3>

    </div>
  </div>
</div>

<div class="container-fluid middle">
  
  <?php if ($this->session->flashdata('insert_comment') == 'success' ): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <p>Komentar anda berhasil dipost</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <div class="container p-5">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-12">

        <div class="card">
          <div class="card-header">
            <h4 class="card-title display-5"><?=$post->judul?></h4>
          </div>
          <div class="card-body p-5">
            <p class="card-text"><?=$post->isi?></p>

            <?php if($post->created_by == $this->session->userdata('username')){ ?>
              <div class="row py-5">
                <a href="<?=base_url('forum/'.$post->slug.'/edit')?>" class="btn btn-primary">Edit Post</a>
                <div class="">
                  <form class="" action="delete" method="post">
                    <input type="hidden" name="id" value="<?=$post->id_post?>">
                    <input type="submit" class="btn btn-danger" value="Delete Post">
                </form>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="card-footer text-muted">
            <?= 'dipost saat '.$post->tanggal?>
          </div>




        </div>

        <h2 class="mt-4">Comments</h2>
        <hr>
        <?php
        if(!empty($all_comment)){
         foreach ($all_comment as $comment){ ?>

            <div class="col-sm-10 py-2">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><?=$comment->created_by?></h5>
                    <p class="card-text"><?=$comment->isi?></p>
                    <div class="card-footer text-muted">
                      <?php if($comment->created_by == $this->session->userdata('username')){
                        echo '<a href="'.base_url("'omment/$comment->id_comment/edit").'"><i class="fas fa-edit"></i></a>';
                      } ?>
                      <?= 'dipost saat '.$comment->tanggal?>
                    </div>
                  </div>
                </div>
              </a>
            </div>
        <?php }
            }else{
          echo "<h5 class='py-3'>No Comments Yet</h5>";
        } ?>
        <!-- Box Comment  -->
        <div class="card m  y-5">
          <div class="card-header">
            Your Comment
          </div>
          <div class="card-body">

            <?php
            echo form_open_multipart('comment/insert');
            ?>
            <div class="col-md-12">
              <input type="hidden" name="tanggal" class="form-control" value="<?= date('Y-m-d H-m-s');?>">
              <input type="hidden" name="id_post" value="<?=$post->id_post?>">
              <input type="hidden" name="slug" value="<?=$post->slug?>">
              <div class="form-group">
                <textarea name="isi_comment" class="form-control" placeholder="Keterangan" id="keterangan"></textarea>
              </div>

              <div class="form-group">
                <input type="submit" name="submit" value="Post your answer" class="btn btn-primary">
                <input type="reset" name="reset" value="Reset" class="btn btn-danger">
              </div>

            </div>
            <?php echo form_close() ?>

          </div>
        </div>
        </div>
      </div>
  </div>
</div>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=nfqrx1rnrng76u9ardv32o9akavsaw05edid61v8ku0cdyk3  "></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
