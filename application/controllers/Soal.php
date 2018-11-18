<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper();
    // $this->load->model('Model_Materi');
	}

  public function view_quiz(){
    $this->load->view('soal/v_quiz');
  }
}
