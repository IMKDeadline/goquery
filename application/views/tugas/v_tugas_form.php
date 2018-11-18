<div class="container">
  <?=form_open($action, ['class'=>'form-horizontal'])?>

    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="judul" name="judul" class="form-control" id="judul" placeholder="Judul Tugas/Latihan/Quiz">
    </div>
    <div class="form-group">
      <label for="judul">Tanggal</label>
      <input type="tanggal" name="tanggal" class="form-control" id="tanggal" value="<?=date('Y-m-d');?>" readonly>
    </div>
    <div class="form-group">
      <label for="judul">Max Score</label>
      <input type="text" name="score" class="form-control" id="score" placeholder="10-100">
    </div>
    <div class="form-group">
      <label for="jenis">Jenis Tugas</label>
      <select name="jenis" class="form-control" id="jenis">
        <option value="exercise">Exercise</option>
        <option value="quiz">Quiz</option>
      </select>
    </div>
    <div class="form-group">
      <label for="tingkat">Tingkat Kesulitan</label>
      <select name="tingkat" class="form-control" id="tingkat">
        <option value="Mudah">Mudah</option>
        <option value="Sedang">Sedang</option>
        <option value="Sulit">Sulit</option>
      </select>
    </div>
    <button type="button" name="button" class="btn btn-success" id="add-soal"><i class="fas fa-plus"> Add Question</i></button>
    <div class="py-3" id="kolom-soal"></div>

    <button type="submit" class="btn btn-success" name="button">Submit</button>
  <?=form_close();?>
</div>
