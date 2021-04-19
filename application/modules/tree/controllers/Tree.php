<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tree extends CI_Controller {

	public function __construct()
	{
		
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['keluarga'] = $this->db->query('SELECT a.*, b.nama as parent_name FROM tbl_tree a left join tbl_tree b on a.id_parent = b.id')->result();
		$this->load->view('theme/vheader');
		$this->load->view('theme/v_navbar');
		$this->load->view('tree/index',$data);
		$this->load->view('theme/vfooter');
	}

	public function hapus()
	{
		$id = $this->input->get('id');
		$this->db->where('id',$id);
		$action = $this->db->delete("tbl_tree");
		if ($action) {
			$message = array('alert'=>'success','pesan'=>'<b>Success</b> delete data</b>');
			$this->session->set_flashdata('message', $message);
		}else{
			$message = array('alert'=>'danger','pesan'=>'<b>Maaf</b> ada kesalahan</b>');
			$this->session->set_flashdata('message', $message);
		}
		redirect('tree');
	}

	public function add()
	{
		$nama = strtoupper($this->input->post('nama'));
		$jenis_kelamin = strtoupper($this->input->post('jenis_kelamin'));
		$id_parent = strtoupper($this->input->post('id_parent'));
		$data_insert = array('nama' => $nama,
							'jenis_kelamin' => $jenis_kelamin,
							'id_parent' => $id_parent,
							);
		$action = $this->db->insert('tbl_tree',$data_insert);
		$message = array('alert'=>'success','pesan'=>'<b>Success</b> tambah data</b>');
		$this->session->set_flashdata('message', $message);
		redirect('tree');
	}


	public function update()
	{
		$id = $this->input->post('id');
		$nama = strtoupper($this->input->post('nama'));
		$jenis_kelamin = strtoupper($this->input->post('jenis_kelamin'));
		$id_parent = strtoupper($this->input->post('id_parent'));
		$data_update = array('nama' => $nama,
							'jenis_kelamin' => $jenis_kelamin,
							'id_parent' => $id_parent,
							);
		$this->db->where('id',$id);
		$action = $this->db->update('tbl_tree',$data_update);
		$message = array('alert'=>'success','pesan'=>'<b>Success</b> update data</b>');
		$this->session->set_flashdata('message', $message);
		redirect('tree');
	}


	public function edit_keluarga($id)
	{
		$data = $this->db->query("SELECT * FROM tbl_tree where id = '".$id."' ")->row();
		echo json_encode($data);
	}


}