<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('M_tugas');
      $this->load->model('M_soal');
      $this->load->model('M_jawaban');
  }

  public function index()
	{
    if($this->session->userdata('logged_in')){
      $data = array('all_tugas' => $this->M_tugas->get_all_tugas());
      $this->load->view('template/v_header', $data);
      $this->load->view('tugas/v_tugas_index');
      $this->load->view('template/v_footer');
    }else{
      $this->session->set_flashdata('login_status', 'not_login');
      redirect('login');
    }
  }

  public function detail_soal(){
    if($this->uri->segment(2) && $this->session->userdata('logged_in')){
      $slug = $this->uri->segment(2);
      $id_tugas = $this->M_tugas->get_id_tugas_by_slug($slug);
      $css = array();
      $data = array('title' => '',
                    'css' => $css,
                    'action' => 'tugas/submit',
                    'tugas' => $this->M_tugas->get_tugas_by_slug($slug),
                    'soal_arr' => $this->M_soal->get_all_soal_by_id($id_tugas));
      $this->load->view('template/v_header', $data);
      $this->load->view('tugas/v_tugas_detail');
      $this->load->view('template/v_footer');
    }else{
      $this->session->set_flashdata('login_status', 'not_login');
      redirect('login');
    }
  }

  private function form($action = 'insert', $id =''){
    if($this->session->userdata('logged_in')){
      $data = array('action' => base_url('tugas/'.$action),
                    'tugas' => $this->M_tugas->get_tugas_by_id($id)
                  );
      $this->load->view('template/v_header', $data);
      $this->load->view('tugas/v_tugas_form');
      $this->load->view('template/v_footer');
    }else{
      $this->session->set_flashdata('login_status', 'not_login');
      redirect('login');
    }

  }

  public function create()
  {
    $this->form();
  }

  public function edit($id)
  {
    $this->form('update', $id);
  }


  public function insert(){
      $data = array(
        'created_by' => $this->session->userdata('username'),
        'judul' => $this->input->post('judul'),
        'slug' => strtolower(url_title($this->input->post('judul'))),
        'jenis_tugas' => $this->input->post('jenis'),
        'tanggal' => $this->input->post('tanggal'),
        'max_score' => $this->input->post('score'),
        'tingkat' => $this->input->post('tingkat')
      );
      $this->M_tugas->insert($data);

      //Insert Soalnya
      $id_tugas = $this->db->insert_id();
      $soal_arr = $this->input->post('soal');
      $data_detail = [];
      $no_soal_arr = $this->input->post('no_soal');
      foreach ($no_soal_arr as $no_soal) {
        $data_detail[] = [
          'id_tugas' => $id_tugas,
          'no_soal' => $no_soal,
          'pertanyaan' => $soal_arr[$no_soal]
        ];
      }
      $this->db->insert_batch('detail_soal', $data_detail);

      //Insert Jawabannya
      $jawaban_arr = $this->input->post('jawaban');
      $id_soal_arr = $this->input->post('id_soal');
      $jawaban_soal_arr = $this->input->post('jawaban_soal');
      $data_jawaban = [];
      foreach ($jawaban_arr as $key => $jawaban) {
        $no_soal = $id_soal_arr[$key];
        $id_detailsoal = $this->M_soal->get_id_detail_soal($id_tugas, $no_soal);
        $jawaban_soal = $jawaban_arr[$key];
        if($jawaban_soal_arr[$no_soal] == $key){
          $hasil = true;
        }else{
          $hasil = false;
        }
        $data_jawaban[] = [
          'id_detailsoal' => $id_detailsoal,
          'jawaban' => $jawaban,
          'hasil' => $hasil,
        ];
      }
      $this->db->insert_batch('detail_jawaban', $data_jawaban);
      $this->session->set_flashdata('insert_tugas','success');
      // redirect('tugas');
  }

  public function update(){
    $slug = $this->uri->segment(3);
      $data = array(
        'judul' => $this->input->post('judul'),
        'isi' => $this->input->post('isi')
      );
        $this->M_forum->update($slug, $data);
        redirect('forum');
  }


  public function delete(){
    $id = $this->input->post('id');
    $this->M_forum->delete($id);
    redirect('forum');
  }

  public function submit(){
      if($this->input->post()){
        $jawaban_arr = $this->input->post('jawaban');
        $id_tugas = $this->input->post('id_tugas');
        $username = $this->session->userdata('username');
        $data_history_tugas = ['id_tugas' => $id_tugas,
                              'username' => $username
                              ];
        $this->db->insert('history_tugas', $data_history_tugas);
        $id_history_tugas = $this->db->insert_id();
        foreach ($jawaban_arr as $id_detailsoal => $jawaban) {
          $data[] = ['id_history_tugas' => $id_history_tugas,
                    'id_detail_jawaban' => $jawaban,
                    'id_detailsoal' => $id_detailsoal];
        }

        $this->db->insert_batch('user_jawaban', $data);

        $data_nilai = $this->hitung_nilai($id_history_tugas);
        $data = ['jumlah_soal' => $data_nilai['jumlah_soal'],
                'jumlah_jawaban_benar' => $data_nilai['jumlah_jawaban_benar'],
                'hasil' => $data_nilai['hasil']];

        $this->load->view('template/v_header');
        $this->load->view('tugas/v_tugas_result', $data);
        $this->load->view('template/v_footer');
      }else{
        echo 'eror';

      }
  }

  private function hitung_nilai($id_history_tugas){
    $jumlah_soal = $this->M_jawaban->get_jumlah_soal($id_history_tugas);
    $jumlah_jawaban_benar = $this->M_jawaban->get_jawaban_benar($id_history_tugas);
    $hasil = ($jumlah_jawaban_benar / $jumlah_soal) * 10;
    $data =  ['jumlah_soal' => $jumlah_soal,
          'jumlah_jawaban_benar' => $jumlah_jawaban_benar,
          'hasil' => $hasil];
    return $data;
  }

  public function view_exercise(){
    $data = array(
			'tugas' => $this->M_tugas->get_all_tugas()
		);
    $this->load->view('tugas/v_tugas_exercise',$data);
  }

}
