<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tugas extends CI_Model {

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

  public function get_id_tugas_by_slug($slug){
    $data = $this->db->select('id_tugas')
                      ->where('slug', $slug)
                      ->get('tugas');
    if($data->num_rows() > 0){
      return $data->row()->id_tugas;
    }else{
      return false;
    }
  }


  public function get_tugas_by_slug($slug){
    $data = $this->db->where('slug', $slug)
                      ->limit(1)
                      ->get('tugas');
    if($data->num_rows() > 0){
      return $data->row();
    }else{
      return false;
    }
  }

  public function get_tugas_by_id($id_tugas){
    $data = $this->db->where('id_tugas', $id_tugas)
                      ->limit(1)
                      ->get('tugas');
    if($data->num_rows() > 0){
      return $data->row();
    }else{
      return false;
    }
  }


}
