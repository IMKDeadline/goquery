<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_comment extends CI_Model {

  public function insert($data){
    $this->db->insert('comment', $data);
  }

  public function update($id_comment, $data){
    $this->db->where('id_comment', $id_comment)
             ->update('comment', $data);
  }

  public function delete($id){
    $this->db->where('id_comment', $id)
              ->delete('comment');
  }

	public function get_all_comment_by_id_post($id_post){
    $data = $this->db->where('id_post', $id_post)
                      ->get('comment');
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_comment_by_id($id_comment){
    $data = $this->db->where('id_comment', $id_comment)
                      ->limit(1)
                      ->get('comment');
    if($data->num_rows() > 0){
      return $data->row();
    }else{
      return false;
    }
  }


}
