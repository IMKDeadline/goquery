<?php

class Model_User extends CI_Model
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

	public function get_all_user()
	{
		$query = $this->db->order_by('first_name','DESC')->get('users');
		return $query->result();
	}

	public function get_user($id){
        $query = $this->db->where('username', $id)->order_by('first_name','DESC')->get('users');
		if($query->num_rows() == 0){
			return null;
		}
		else{
			return $query->result();
		}
    }

	public function daftar_user($data){
    $this->db->insert('users',$data);
    return true;
  }

	public function login_user($data){
			$this->db->where('username',$data['username']);
			$this->db->where('password',md5($data['password']));
			$this->db->from('users');
			$this->db->limit(1);
      $query = $this->db->get();
      if($query->num_rows() == 1){
          return $query->row();
      }else{
          return false;
      }
    }

	public function edit_user($data){
        $config['upload_path']          = 'upload/images';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = '5000';
        $config['max_width']            = '5000';
        $config['max_height']           = '5000';

        $this->load->library('upload', $config);
        if ( !$this->upload->do_upload('berkas')){
            $id = $this->session->userdata['username'];
            $table = 'users';
            $param = array (
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							'username' => $this->input->post('username'),
							'email' => $this->input->post('email'),
						);
            $this->db->where('username', $id);
            $update = $this->db->update($table,$param);
            if ($update){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            $id = $this->session->userdata['username'];
            $table = 'users';
            $gambar = $this->upload->data('file_name');
            $param = array (
									'first_name' => $this->input->post('first_name'),
									'last_name' => $this->input->post('last_name'),
									'username' => $this->input->post('username'),
									'email' => $this->input->post('email'),
                	'images' => $gambar
            );
            $this->db->where('username', $id);
            $update = $this->db->update($table,$param);
            if ($update){
                return TRUE;
            }else{
                return FALSE;
            }
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
