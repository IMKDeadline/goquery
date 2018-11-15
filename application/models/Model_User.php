<?php

class Model_User extends CI_Model
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

	public function daftar_user($data){
    $this->db->insert('users',$data);
    return true;
  }

	public function login_user($data){
    $this->db->where('username',$data['username']);
    $this->db->where('password',md5($data['password']));

    $result = $this->db->get('users');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

	public function update_user($data){
		$username = $this->session->users['username'];
		$this->db->where('username', $username);

		$result = $this->db->update('users',$data);
		if ($result){
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function delete_user($username){
		$this->db->where('username', $username);
		$result = $this->db->delete('users');
		if ($result){
			return TRUE;
		}else {
			return FALSE;
		}
	}
}
