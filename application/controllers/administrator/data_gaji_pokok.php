<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_gaji_pokok extends MY_Controller {

	/*
		***	Controller : administrator/data_gaji_pokok.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="administrator"){
            redirect($controler.'/data_gaji_pokok');
        }
	}


	public function index()
	{
		$d['data_gaji_pokok'] = $this->model_adm_pegawai->tampil_gaji_pokok();
		$this->load->view('administrator/header');
		$this->load->view('administrator/master_data/gaji_pokok/index',$d);
		$this->load->view('administrator/footer');
	}
	function simpan()
	{
		$st = $this->input->post('st');
		if($st=="edit"){
			$id['id_gaji_pokok'] = $this->input->post("id_gaji_pokok");
			$upd['id_golongan'] =  $this->input->post("id_golongan");
			$upd['nomor_sk'] =  $this->input->post("nomor_sk");
			$upd['tanggal_sk'] =  $this->input->post("tanggal_sk");
			$upd['dasar_perubahan'] =  $this->input->post("dasar_perubahan");
			$upd['gaji_pokok'] =  $this->input->post("gaji_pokok");
			$upd['tanggal_mulai'] =  $this->input->post("tanggal_mulai");
			$upd['tanggal_selesai'] =  $this->input->post("tanggal_selesai");
			$upd['masa_kerja'] =  $this->input->post("masa_kerja");
			$upd['pejabat_menetapkan'] =  $this->input->post("pejabat_menetapkan");
			$this->db->update("tb_data_gaji_pokok",$upd,$id);
			$pesan="Data Berhasil diupdate.";
			$this->session->set_flashdata('berhasil',$pesan);
			header('location:'.base_url().'administrator/data_gaji_pokok');
		}
	}
	function edit()
	{
		$id['id_gaji_pokok'] = $this->uri->segment(4);
		$q = $this->db->get_where("tb_data_gaji_pokok",$id);
		foreach($q->result() as $dt)
		{
			$d['id_gaji_pokok'] = $dt->id_gaji_pokok;
			$d['id_pegawai'] = $dt->id_pegawai; 
			$d['id_golongan'] =  $dt->id_golongan;
			$d['nomor_sk'] =  $dt->nomor_sk;
			$d['tanggal_sk'] =  $dt->tanggal_sk;
			$d['dasar_perubahan'] =  $dt->dasar_perubahan;
			$d['gaji_pokok'] =  $dt->gaji_pokok;
			$d['tanggal_mulai'] = $dt->tanggal_mulai;
			$d['tanggal_selesai'] =  $dt->tanggal_selesai;
			$d['masa_kerja'] =  $dt->masa_kerja;
			$d['pejabat_menetapkan'] =  $dt->pejabat_menetapkan;
		}
		$d['st'] = "edit";
		$d['breadcrumb'] = "Edit";
		$d['golongan'] = $this->db->get("tb_master_golongan");
			
		$this->load->view('administrator/header');
		$this->load->view('administrator/master_data/gaji_pokok/input',$d);
		$this->load->view('administrator/footer');
	}
	function hapus()
	{
	
		$id['id_gaji_pokok'] = $this->uri->segment(4);
		$this->db->delete("tb_data_gaji_pokok",$id);
		header('location:'.base_url().'administrator/data_gaji_pokok');
	}

}