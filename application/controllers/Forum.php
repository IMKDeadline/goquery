<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('M_forum');
      $this->load->model('M_comment');
  }

  public function index()
	{
    $data = array('all_post' => $this->M_forum->get_all_post());
    $this->load->view('template/v_header', $data);
    $this->load->view('forum/v_forum_index');
    $this->load->view('template/v_footer');
  }

  public function detail_post(){
    if($this->uri->segment(2)){
      $slug = $this->uri->segment(2);
      $css = array();
      $id_post = $this->M_forum->get_id_post($slug);
      $data = array('title' => '',
                    'post' => $this->M_forum->get_post($slug),
                    'all_comment' => $this->M_comment->get_all_comment_by_id_post($id_post),
                    'css' => $css);
      $this->load->view('template/v_header', $data);
      $this->load->view('forum/v_forum_detail');
      $this->load->view('template/v_footer');
    }
  }

  private function form($action = 'insert', $slug_post =''){
    $data = array('action' => base_url('forum/'.$action.'/'.$slug_post),
                  'post' => $this->M_forum->get_post($slug_post));
    $this->load->view('template/v_header', $data);
    $this->load->view('forum/v_forum_form');
    $this->load->view('template/v_footer');
  }

  public function create()
  {
    $this->form();
  }

  public function edit()
  {
    $slug_post = $this->uri->segment(2);
    $this->form('update', $slug_post);
  }


  public function insert(){
      $slug = url_title($this->input->post('judul'), 'dash', true);
      $data = array(
        'created_by' => $this->session->userdata('username'),
        'judul' => $this->input->post('judul'),
        'isi' => $this->input->post('isi'),
        'tanggal' => $this->input->post('tanggal')
      );
        $this->M_forum->insert($data);
        $insert_id = $this->db->insert_id();
        $data['slug'] = $slug.'-'.$insert_id;
        $this->M_forum->set_slug($insert_id, $data);
        $this->session->set_flashdata('insert_page','success');
        redirect('forum');
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

}
