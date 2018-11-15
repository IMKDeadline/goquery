<div class="row py-5">

    <!-- Box Comment  -->
    <div class="card">
      <div class="card-header">
        Edit Your Comment
      </div>
      <div class="card-body">

        <?php
        echo form_open_multipart($action);
        ?>
        <div class="col-md-12">
          <input type="hidden" name="id_post" value="<?=$comment->id_post?>">
          <input type="hidden" name="id_comment" value="<?=$comment->id_comment?>">
          <div class="form-group">
            <textarea name="isi_comment" class="form-control" placeholder="Keterangan" id="keterangan"><?=$comment->isi?></textarea>
          </div>

          <div class="form-group">
            <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
            <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg">
          </div>

        </div>
        <?php echo form_close() ?>

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
