<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper();
    $this->load->model('Model_Materi');
	}

	public function tambah()
	{
		$cek = $this->input->post(null,TRUE);
		$tanggal = date('Y-m-d');
		$data = array(
			'nama' => $this->input->post('nama'),
			'slug' => strtolower(url_title($this->input->post('nama'))),
			'isi' => $this->input->post('isi'),
			'created_by' => $this->input->post('pembuat'),
			'jenis' => $this->input->post('jenis'),
			'tanggal' => $tanggal
		);
		if($cek == TRUE){
			$result = $this->Model_Materi->tambah_materi($data);
			if($result == TRUE){
				$this->session->set_flashdata('insert_materi', 'success');
				redirect('kelolamateri');
			}
		} else{
			$this->session->set_flashdata('insert_materi', 'failed');
			redirect('kelolamateri');
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$cek = $this->input->post(null,TRUE);
		if ($cek == TRUE){
			$result = $this->Model_Materi->update_materi($id);
			if ($result == TRUE){
				$this->session->set_flashdata('insert_materi', 'success');
				redirect('kelolamateri');
			}
		}else {
			$this->session->set_flashdata('insert_materi', 'failed');
			redirect('kelolamateri');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$delete = $this->Model_Materi->delete_materi($id);
		if ($delete == TRUE){
			$this->session->set_flashdata('delete_materi', 'success');
			redirect('kelolamateri');
		}else {
			$this->session->set_flashdata('delete_materi', 'failed');
			redirect('kelolamateri');
		}
	}

	public function view_adminMateri()
	{
		if ($this->session->userdata('logged_in')!="Sudah Login") {
    	redirect('User/view_login');
  	} else {
			$data = array(
	    	'materi' => $this->Model_Materi->get_all_materi()
	  	);
			$this->load->view('materi/v_AdminMateri',$data);
		}
	}

	public function view_materi(){
		$data = array(
			'materi' => $this->Model_Materi->get_all_materi()
		);
		$this->load->view('materi/v_Materi',$data);
	}

	public function view_detailMateri(){
		$slug = $this->uri->segment(2);
		$data = array(
			'materi' => $this->Model_Materi->get_detail($slug)
		);
		$this->load->view('materi/v_detailMateri',$data);
	}
}
