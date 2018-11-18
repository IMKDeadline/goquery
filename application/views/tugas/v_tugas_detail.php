<div class="container">
  <div class="row">
    <div class="card">
      <div class="card-header">
        GoQuery
      </div>

      <div class="card-body">
        <?=form_open($action, ['class'=>'formhorizontal'])?>
        <input type="hidden" name="id_tugas" value="<?=$tugas->id_tugas?>">
        <?php
        $no_soal = 0;
         foreach ($soal_arr as $key => $soal):
          if($no_soal != $soal->no_soal ){
            $no_soal = $soal->no_soal;
            echo '<p class="pt-3">'.$soal->no_soal.'. '.$soal->pertanyaan.'</p>';
          }

          echo '<input type="radio" name="jawaban['.$soal->id_detailsoal.']" value="'.$soal->id_detailjawaban.'"> '.$soal->jawaban.'<br>';
        endforeach; ?>
        <button type="submit" class="btn btn-success my-3" name="button">Submit</button>
        <?=form_close()?>
      </div>
    </div>

  </div>


</div>
