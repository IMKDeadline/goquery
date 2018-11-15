<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper();
    $this->load->model('Model_Materi');
	}

	public function tambah(){
		$username = $this->session->users['username'];
		$cek = $this->input->post(null,TRUE);
		$tanggal = date('Y-m-d');
		$data = array(
			'isi' => $this->input->post('isi'),
			'created_by' => $username,
			'username' => $this->input->post('username'),
			'jenis' => $this->input->post('jenis'),
			'tanggal' => $tanggal
		);
		if($cek == TRUE){
			$result = $this->Model_User->tambah_materi($data);
			if($result == TRUE){
				$this->load->view('index');
			}
		} else{
			echo "error";
		}
	}

	public function edit(){
		$id = $this->input->post('id');
		$cek = $this->input->post(null,TRUE)
		if ($cek == TRUE){
			$result = $this->Model_User->update_materi($id);
			if ($result == TRUE){
				$this->load->view('index');
			}
		}else {
			echo "error";
		}
	}

	public function delete(){
		$id = $this->input->post('id');
		$delete = $this->Model_Materi->delete_materi($id);
		if ($delete == TRUE){
			$this->load->view('index');
		}else {
			echo "error";
		}
	}
}
