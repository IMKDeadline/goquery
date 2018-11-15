<?php

class Model_Materi extends CI_Model
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function tambah_materi($data)
  {
    $this->db->insert('materi',$data);
		return TRUE;
  }

	public function update_materi($id)
	{
		$data = array(
			'isi' => $this->input->post('isi')
		)
		$this->db->where('materi_id', $id);
		$update = $this->db->update('materi', $data);
		if ($update){
			return TRUE;
		}
	}

	public function delete_materi($id)
	{
		$this->db->where('materi_id',$id);
		$delete = $this->db->delete('materi');
		if ($delete){
			return TRUE;
		}
	}
}
