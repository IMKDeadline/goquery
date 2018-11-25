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
			'tipe' => 'member',
			'foto' => 'gambar-orang.jpg'
		);
		$username = $this->input->post('username');
		$cek = $this->db->query("SELECT username FROM users WHERE username = '$username'");
		if($cek->num_rows() == 0){
			$result = $this->Model_User->daftar_user($data);
			if($result == TRUE){
				$this->session->set_flashdata('alert','sukses_insert');
				redirect('User/view_login');
			}
		}	else{
			$this->session->set_flashdata('register_status', 'failed');
			redirect('register');
		}
  }

	public function edit()
	{
		$data = $this->input->post(null,TRUE);
		$result = $this->Model_User->edit_user($data);
		if($result==TRUE){
	    	$this->session->set_flashdata('alert', 'sukses_edit');
	    	redirect('User/view_editprofil');
	  	}else{
	    	echo "<script>alert('Gagal Edit Data');</script>";
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

	public function view_editprofil(){
		$id = $this->session->userdata['username'];
		$data = array(
			'user' => $this->Model_User->get_user($id)
		);
		$this->load->view('user/v_editprofil',$data);
	}

	public function view_lihatprofil(){
		$id = $this->session->userdata['username'];
		$data = array(
			'user' => $this->Model_User->get_user($id)
		);
		$this->load->view('user/v_lihatprofil',$data);
	}

	public function view_dashboard(){
		$this->load->view('dashboard');
	}

	public function logout(){
	  $this->session->sess_destroy();
		$this->session->set_flashdata('login_status', 'logout');
	  redirect(site_url('login'));
		$this->session->sess_destroy();
		redirect(site_url('User/view_login'));
	}
}
