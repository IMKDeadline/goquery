<?php

class Model_Materi extends CI_Model
{
	public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

	public function get_all_materi()
	{
		$query = $this->db->order_by('nama','DESC')->get('materi');
		return $query->result();
	}

	public function get_detail($slug)
	{
		$query = $this->db->where('slug', $slug)
											->get('materi');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

  public function tambah_materi($data)
  {
    $this->db->insert('materi',$data);
		return TRUE;
  }

	public function update_materi($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'isi' => $this->input->post('isi'),
			'jenis' => $this->input->post('jenis')
		);
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
