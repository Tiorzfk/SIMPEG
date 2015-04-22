<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_keluarga extends MY_Controller {

	/*
		***	Controller : administrator/data_keluarga.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="administrator"){
            redirect($controler.'/home');
        }
	}

	public function index()
	{
		$d['data_keluarga'] = $this->db->query("select a.id_data_keluarga,a.id_pegawai,a.nama_anggota_keluarga,a.tanggal_lahir,a.status_kawin,a.tanggal_nikah,
			a.uraian,a.pekerjaan,b.nama_pegawai from tb_data_keluarga a left join tb_data_pegawai b on a.id_pegawai=b.id_pegawai");
		$this->load->view('administrator/header');
		$this->load->view('administrator/master_data/keluarga/index',$d);
		$this->load->view('administrator/footer');
	}
	function simpan()
	{
		$st = $this->input->post('st');
		if($st=="edit")
		{
			$id['id_data_keluarga'] = $this->input->post("id_data_keluarga");
			$upd['id_pegawai'] = $this->input->post("id_pegawai");
			$upd['nama_anggota_keluarga'] = $this->input->post("nama_keluarga");
			$upd['tanggal_lahir'] = $this->input->post("tgl_lahir");
			$upd['status_kawin'] = $this->input->post("status_kawin");
			$upd['tanggal_nikah'] = $this->input->post("tgl_menikah");
			$upd['uraian'] = $this->input->post("uraian");
			$upd['pekerjaan'] = $this->input->post("pekerjaan");
			$this->db->update("tb_data_keluarga",$upd,$id);
			$pesan="Data Berhasil diupdate.";
			$this->session->set_flashdata('berhasil',$pesan);
			header('location:'.base_url().'administrator/data_keluarga');
		}
	}
		function edit()
	{
		$id['id_data_keluarga'] = $this->uri->segment(4);
		$q = $this->db->get_where("tb_data_keluarga",$id);
		$d = array();
		foreach($q->result() as $dt)
		{
			$d['id_data_keluarga'] = $dt->id_data_keluarga;
			$d['id_pegawai'] = $dt->id_pegawai; 
			$d['nama_anggota_keluarga'] = $dt->nama_anggota_keluarga; 
			$d['tanggal_lahir'] = $dt->tanggal_lahir; 
			$d['status_kawin'] = $dt->status_kawin;
			$d['tanggal_nikah'] = $dt->tanggal_nikah;
			$d['uraian'] = $dt->uraian;
			$d['pekerjaan'] = $dt->pekerjaan;
		}
		$d['st'] = "edit";
		$d['breadcrumb'] = "Edit";
		$d['pegawai'] = $this->db->get("tb_data_keluarga");
			
		$this->load->view('administrator/header');
		$this->load->view('administrator/master_data/keluarga/input',$d);
		$this->load->view('administrator/footer');
	}
	function hapus()
	{
	
		$id['id_data_keluarga'] = $this->uri->segment(4);
		$this->db->delete("tb_data_keluarga",$id);
		header('location:'.base_url().'pegawai/data_keluarga');
	}

}