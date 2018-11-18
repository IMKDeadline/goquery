<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
    $this->load->model('Model_User');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

  public function tambah(){
		$tanggal = date('Y-m-d');
		$data = array(
			'first_name' => $this->input->post('firstname'),
			'last_name' => $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'tanggal_lahir' => $tanggal,
			'tipe' => 'member'
		);
		$username = $this->input->post('username');
		$cek = $this->db->query("SELECT username FROM users WHERE username = '$username'");
		if($cek->num_rows() == 0 && $cekForm == TRUE){
			$result = $this->Model_User->daftar_user($data);
			if($result == TRUE){
				redirect('User/view_login');
			}
		}else{
			$this->session->set_flashdata('register_status', 'failed');
			redirect('register');
		$result = $this->Model_User->daftar_user($data);
		if($cek->num_rows() == 0 && $result==TRUE){
			$this->session->set_flashdata('alert','sukses_insert');
			redirect('User/view_login');
		}else{
			$this->session->set_flashdata('alert', 'gagal');
			redirect('User/view_register');
		}
  }
}

	public function edit(){
		$cek = $this->input->post(null,TRUE);
		$data = array (
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		$edit = $this->Model_User->update_user($data);
		if($cek == TRUE){
			if($edit==TRUE){
				$this->load->view('view_profile');
			}
		} else {
			echo "error";
		}
	}

	public function delete(){
		$username = $this->input->post('username');
		$delete = $this->Model_User->delete_user($username);
		if ($delete == TRUE){
			redirect('Control/index');
		}else {
			echo "error";
		}
	}

	public function login()
	{
		$data = $this->input->post(null,TRUE);
		$login = $this->Model_User->login_user($data);
		if($login){
			$sess_data = array(
			'logged_in' => "Sudah Login",
			'username' => $login->username,
			);
			$this->session->set_userdata($sess_data);
			redirect('Materi/view_adminMateri');
		}else{
			$this->session->set_flashdata('alert', 'gagal_login');
    	redirect('User/view_login');
		}
	}

	public function view_login()
	{
		$this->load->view('loginregister/v_login');
	}

	public function view_register()
	{
		$this->load->view('loginregister/v_register');
	}

	public function logout(){
	  $this->session->sess_destroy();
		$this->session->set_flashdata('login_status', 'logout');
	  redirect(site_url('login'));
		$this->session->sess_destroy();
		redirect(site_url('User/view_login'));
	}
}
