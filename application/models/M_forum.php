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


	public function get_diskusi(){
    $this->db->select('post.id_post, post.judul, post.slug, post.tanggal, post.created_by, first_name, last_name');
    $this->db->from('post');
    $this->db->join('users','username = created_by');
    $data = $this->db->get();
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_slug_by_id_post($id_post){
    $data = $this->db->select('slug')
                    ->where('id_post', $id_post)
                    ->get('post');
    if($data->num_rows() > 0){
      return $data->row()->slug;
    }else{
      return false;
    }
  }

  public function get_all_post(){
    $data = $this->db->get('post');
    if($data->num_rows() > 0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function get_id_post($slug){
    $data = $this->db->select('id_post')
                    ->where('slug', $slug)
                    ->get('post');

    if($data->num_rows() > 0){
      return $data->row()->id_post;
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
