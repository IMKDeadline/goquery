<!DOCTYPE html>
<html>
<head>
  <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ikfd6ijllclcevmsfcou3vx1o1t21j2c9uj0pv3y28c8gwcs"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body id="kelolaMateri">
<?php $createdby  =  $this->session->userdata('username'); ?>

<h2 style="text-align: center;margin-bottom: 30px"> Kelola Materi</h2>
<div class="container" style="margin-top: 20px;padding-left: 25px">
	<div class="col-md-12">
		<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambah">Tambah Materi</button>
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Tambah Materi</h4>
                    </div>
                    <form method="post" action="tambah">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Nama Materi</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <label for="tingkat">Tingkat Kesulitan</label>
                              <select name="tingkat" class="form-control" id="tingkat">
                                <option value="Mudah">Mudah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Sulit">Sulit</option>
                              </select>
                              <input type="hidden" name="pembuat" class="form-control" value="<?= $createdby; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="isi">Isi</label>
                                <textarea class="form-control" name="isi" placeholder="Enter text here..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
          <th> No</th>
          <th> Nama Materi</th>
          <th> Jenis Materi</th>
          <th> Pembuat</th>
          <th> Tanggal dibuat</th>
          <th> <center>Action</center></th>
        </tr>
      </thead>
        <tbody>
                  <?php
                  $no=1;
                  foreach ($materi as $mtr) {
                      ?>
                  <tr>
                         <td><?php echo $no++;?></td>
                         <td><?php echo $mtr->nama;?></td>
                         <td><?php echo $mtr->jenis; ?></td>
                         <td><?php echo $mtr->created_by; ?></td>
                         <td><?php echo $mtr->tanggal;?></td>
                         <td style="text-align: center;">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $mtr->materi_id; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $mtr->materi_id; ?>"><i class="glyphicon glyphicon-trash"></i></button>
                        </td>
                        <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam data-target yang ada di button -->
                    </tr>
                    <div id="edit<?php echo $mtr->materi_id; ?>" class="modal fade" role="dialog">
                      <!--                    echo kan php dari foreach di atas dengan objek nim ke dalam id edit-->
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"></button>
                                  <h4 class="modal-title">Edit Materi</h4>
                              </div>
                              <?php echo form_open("Materi/edit"); ?>
                              <div class="modal-body">
                                  <div class="form-group">
                                      <label class="control-label" for="nama">Nama Materi</label>
                                      <input type="text" class="form-control" name="nama" value="<?php echo $mtr->nama;?>" required>
                                      <input type="hidden" class="form-control" name="id" value="<?php echo $mtr->materi_id; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="tingkat">Tingkat Kesulitan</label>
                                    <select name="tingkat" class="form-control" id="tingkat">
                                      <option value="Mudah">Mudah</option>
                                      <option value="Sedang">Sedang</option>
                                      <option value="Sulit">Sulit</option>
                                    </select>
                                    <input type="hidden" name="pembuat" class="form-control" value="<?= $createdby; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label" for="tanggal">Tanggal</label>
                                      <input type="text" name="tanggal" class="form-control" value="<?php echo $mtr->tanggal;?>" disabled>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label" for="isi">Isi</label>
                                      <textarea class="form-control" rows="5" name="isi" required><?php echo $mtr->isi;?></textarea>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                  <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                              </div>
                              <?php echo form_close(); ?>
                          </div>
                      </div>
                  </div>

                  <div id="hapus<?php echo $mtr->materi_id; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"></button>
                                  <h4 class="modal-title">Anda Ingin Menghapus Materi <?php echo $mtr->nama; ?> ?</h4>
                              <?php echo form_open("materi/delete/$mtr->materi_id"); ?>
                                  <input type="hidden" class="form-control" name="id" value="<?php echo $mtr->materi_id; ?>">
                              </div>
                              <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                  <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                              </div>
                              <?php echo form_close(); ?>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
              </tbody>
          </table>
      </div>
  </div>
<a href="<?php echo site_url('User/logout')?>" class="btn btn-danger">Logout</a>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>
