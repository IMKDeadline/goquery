<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_forum extends CI_Model {

  public function insert($data){
    $this->db->insert('post', $data);
  }

  public function update($slug, $data){
    $this->db->where('slug', $slug)
             ->update('post', $data);
  }

  public function delete($id){
    $this->db->where('id_post', $id)
              ->delete('post');
  }

  public function set_slug($id, $data){
    $this->db->where('id_post', $id)
             ->update('post', $data);
  }


	public function get_all_post(){
    $data = $this->db->get('post');
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_post($slug){
    $data = $this->db->where('slug', $slug)
                      ->limit(1)
                      ->get('post');
    if($data->num_rows() > 0){
      return $data->row();
    }else{
      return false;
    }
  }

}
