<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_soal extends CI_Model {

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

  public function get_all_tugas(){
    $data = $this->db->get('tugas');
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_all_soal_by_id($id_tugas){
    $data = $this->db->distinct()
                      ->where('detail_soal.id_tugas', $id_tugas)
                      ->join('detail_jawaban', 'detail_soal.id_detailsoal = detail_jawaban.id_detailsoal')
                      ->order_by('no_soal', 'asc')
                      ->get('detail_soal');
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_id_detail_soal($id_tugas, $no_soal){
    $data = $this->db->select('id_detailsoal')
                      ->where(['id_tugas' => $id_tugas, 'no_soal' => $no_soal])
                      ->limit(1)
                      ->get('detail_soal');
    if($data->num_rows() > 0){
      return $data->row()->id_detailsoal;
    }else{
      return false;
    }
  }

  public function get_jumlah_soal($id_history_tugas){
    $data = $this->db->where('detail_soal.id_tugas', $id_tugas)
                    ->get('detail_soal');
    if($data->num_rows() > 0){
      return $data->num_rows();
    }else{
      return 0;
    }
  }


}
