<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jawaban extends CI_Model {

  public function insert($data){
    $this->db->insert('tugas', $data);
  }

  public function update($id_tugas, $data){
    $this->db->where('id_tugas', $id_tugas)
             ->update('tugas', $data);
  }

  public function delete($id){
    $this->db->where('id_tugas', $id)
              ->delete('tugas');
  }

  public function get_jawaban_benar($id_history_tugas){
    $data = $this->db->where(['detail_jawaban.hasil' => 1,
                              'user_jawaban.id_history_tugas' => $id_history_tugas])
                    ->join('user_jawaban', 'user_jawaban.id_detail_jawaban = detail_jawaban.id_detailjawaban')
                    ->join('history_tugas', 'user_jawaban.id_history_tugas = history_tugas.id_history_tugas')
                    ->get('detail_jawaban');
    if($data->num_rows() > 0){
      return $data->num_rows();
    }else{
      return 0;
    }

  }

  public function get_jumlah_soal($id_history_tugas){
    $data = $this->db->where('history_tugas.id_history_tugas', $id_history_tugas)
                      ->join('user_jawaban', 'user_jawaban.id_history_tugas = history_tugas.id_history_tugas')
                      ->get('history_tugas');
    return $data->num_rows();
  }
}
