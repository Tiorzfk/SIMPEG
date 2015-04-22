<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_gaji_pokok extends MY_Controller {

	/*
		***	Controller : pegawai/data_gaji_pokok.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="pegawai"){
            redirect($controler.'/data_gaji_pokok');
        }
	}


	public function index()
	{
		$id['id_pegawai'] = $this->session->userdata('id_pegawai');
		$d['data_gaji_pokok'] = $this->model_pegawai->tampil_gaji_pokok($id);
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/gaji_pokok/index',$d);
		$this->load->view('pegawai/footer');
	}
	function tambah()
	{
		$d['breadcrumb'] = "Tambah";
		$d['id_pegawai'] = $this->session->userdata("id_pegawai");
		$d['id_gaji_pokok'] = "";
		$d['id_golongan'] = "";
		$d['nomor_sk'] = "";
		$d['tanggal_sk'] = "";
		$d['dasar_perubahan'] = "";
		$d['gaji_pokok'] = "";
		$d['tanggal_mulai'] = "";
		$d['tanggal_selesai'] = "";
		$d['masa_kerja'] = "";
		$d['pejabat_menetapkan'] = "";
		$d['st'] = "tambah";
		$d['golongan'] = $this->db->get("tb_master_golongan");
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/gaji_pokok/input',$d);
		$this->load->view('pegawai/footer');
	}
	function simpan()
	{
		$st = $this->input->post('st');
		if($st=="tambah")
		{
			$in['id_pegawai'] =  $this->input->post("id_pegawai");
			$in['id_golongan'] =  $this->input->post("id_golongan");
			$in['nomor_sk'] =  $this->input->post("nomor_sk");
			$in['tanggal_sk'] =  $this->input->post("tanggal_sk");
			$in['dasar_perubahan'] =  $this->input->post("dasar_perubahan");
			$in['gaji_pokok'] =  $this->input->post("gaji_pokok");
			$in['tanggal_mulai'] =  $this->input->post("tanggal_mulai");
			$in['tanggal_selesai'] =  $this->input->post("tanggal_selesai");
			$in['masa_kerja'] =  $this->input->post("masa_kerja");
			$in['pejabat_menetapkan'] =  $this->input->post("pejabat_menetapkan");

			$this->db->insert("tb_data_gaji_pokok",$in);
			$pesan="Data Berhasil ditambahkan.";
			$this->session->set_flashdata('berhasil',$pesan);
			header('location:'.base_url().'pegawai/data_gaji_pokok/tambah');
		}elseif($st=="edit"){
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
			header('location:'.base_url().'pegawai/data_gaji_pokok');
		}
	}
	function edit()
	{
		$id['id_gaji_pokok'] = $this->uri->segment(4);
		$q = $this->db->get_where("tb_data_gaji_pokok",$id);
		$d = array();
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
			
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/gaji_pokok/input',$d);
		$this->load->view('pegawai/footer');
	}
	function hapus()
	{
	
		$id['id_gaji_pokok'] = $this->uri->segment(4);
		$this->db->delete("tb_data_gaji_pokok",$id);
		header('location:'.base_url().'pegawai/data_gaji_pokok');
	}

}