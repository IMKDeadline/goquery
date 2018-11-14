<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper();
	}

	public function index()
	{
			$this->load->view('index');
	}

	public function view_loginregister()
	{
			$this->load->view('v_loginregister');
	}

	public function login()
	{
		$data = $this->input->post(null,TRUE);
		$login= $this->Model_User->login_user($data);
		if($login){
			$sess_data = array(
			'logged_in' => "Sudah Login",
			'tipe' => $login->tipe,
			'username' => $login->username
			);
			$this->session->set_userdata($sess_data);
			redirect('Control/index');
		}else{
			echo "error";
		}
	}

}
