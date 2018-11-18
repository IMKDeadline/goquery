<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('M_comment');
      $this->load->model('M_forum');
  }


  private function form($action = 'insert', $id_comment){
    $data = array('action' => base_url('comment/'.$action),
                  'comment' => $this->M_comment->get_comment_by_id($id_comment));
    $this->load->view('template/v_header', $data);
    $this->load->view('forum/v_comment_form');
    $this->load->view('template/v_footer');
  }

  public function edit()
  {
    $id_comment = $this->uri->segment(2);
    $this->form('update', $id_comment);
  }


  public function insert(){
    if($this->session->userdata('logged_in')){
      $data = array(
        'id_post' => $this->input->post('id_post'),
        'created_by' => $this->session->userdata('username'),
        'isi' => $this->input->post('isi_comment'),
        'tanggal' => $this->input->post('tanggal')
      );
        $slug = $this->input->post('slug');
        $this->M_comment->insert($data);
        $this->session->set_flashdata('insert_comment','success');
        redirect('forum/'.$slug);
    }else{
      $this->session->set_flashdata('login_status', 'not_login');
      redirect('login');
    }

  }

  public function update(){
      $data = array(
        'isi' => $this->input->post('isi_comment')
      );
        $id_comment = $this->input->post('id_comment');
        $id_post = $this->input->post('id_post');
        $slug = $this->M_forum->get_slug_by_id_post($id_post);
        $this->M_comment->update($id_comment, $data);
        redirect('forum/'.$slug);
  }

  public function delete(){
      $id_comment = $this->input->post('id_comment');
      $this->M_comment->delete($id_comment);
      redirect('forum');
  }

}
