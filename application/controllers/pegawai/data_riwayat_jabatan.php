<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_riwayat_jabatan extends MY_Controller {

	/*
		***	Controller : pegeawai/data_riwayat_jabatan.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="pegawai"){
            redirect($controler.'/data_riwayat_jabatan');
        }
	}

	public function index()
	{
		$d['data_riwayat_jabatan'] = $this->model_pegawai->tampil_riwayat_jabatan();
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/riwayat_jabatan/index',$d);
		$this->load->view('pegawai/footer');
	}
	function tambah()
	{
		$d['breadcrumb'] = "Tambah";
		$d['id_riwayat_jabatan'] = "";
		$d['id_pegawai'] = $this->session->userdata("id_pegawai");
		$d['status'] = "";
		$d['penempatan'] = "";
		$d['id_jabatan'] = "";
		$d['id_unit_kerja'] = "";
		$d['uraian'] = "";
		$d['id_eselon'] = "";
		$d['tmt_eselon'] = "";
		$d['nomor_sk'] = "";
		$d['tanggal_sk'] = "";
		$d['tanggal_mulai'] = "";
		$d['tanggal_selesai'] = "";
		$d['lokasi'] = "";
		$d['st'] = "tambah";
		$d['jabatan'] = $this->db->get("tb_master_jabatan");
		$d['unit_kerja'] = $this->db->get("tb_master_unit_kerja");
		$d['eselon'] = $this->db->get("tb_master_eselon");
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/riwayat_jabatan/input',$d);
		$this->load->view('pegawai/footer');
	}
	function simpan()
	{
		$st = $this->input->post('st');
		if($st=="tambah")
		{
			$in['id_pegawai'] =  $this->input->post("id_pegawai");
			$in['status'] =  $this->input->post("status");
			$in['penempatan'] =  $this->input->post("penempatan");
			$in['id_jabatan'] =  $this->input->post("id_jabatan");
			$in['id_unit_kerja'] =  $this->input->post("id_unit_kerja");
			$in['uraian'] =  $this->input->post("uraian");
			$in['id_eselon'] =  $this->input->post("id_eselon");
			$in['tmt_eselon'] =  $this->input->post("tmt_eselon");
			$in['nomor_sk'] =  $this->input->post("nomor_sk");
			$in['tanggal_sk'] =  $this->input->post("tanggal_sk");
			$in['tanggal_mulai'] =  $this->input->post("tanggal_mulai");
			$in['tanggal_selesai'] =  $this->input->post("tanggal_selesai");
			$in['lokasi'] =  $this->input->post("lokasi");

			$this->db->insert("tb_data_riwayat_jabatan",$in);
			$pesan="Data Berhasil ditambahkan.";
			$this->session->set_flashdata('berhasil',$pesan);
			header('location:'.base_url().'pegawai/data_riwayat_jabatan');
		}elseif($st=="edit")
		{
			$id['id_riwayat_jabatan'] = $this->input->post("id_riwayat_jabatan");
			$upd['id_pegawai'] =  $this->input->post("id_pegawai");
			$upd['status'] =  $this->input->post("status");
			$upd['penempatan'] =  $this->input->post("penempatan");
			$upd['id_jabatan'] =  $this->input->post("id_jabatan");
			$upd['id_unit_kerja'] =  $this->input->post("id_unit_kerja");
			$upd['uraian'] =  $this->input->post("uraian");
			$upd['id_eselon'] =  $this->input->post("id_eselon");
			$upd['tmt_eselon'] =  $this->input->post("tmt_eselon");
			$upd['nomor_sk'] =  $this->input->post("nomor_sk");
			$upd['tanggal_sk'] =  $this->input->post("tanggal_sk");
			$upd['tanggal_mulai'] =  $this->input->post("tanggal_mulai");
			$upd['tanggal_selesai'] =  $this->input->post("tanggal_selesai");
			$upd['lokasi'] =  $this->input->post("lokasi");
			$this->db->update("tb_data_riwayat_jabatan",$upd,$id);
			$pesan="Data Berhasil diupdate.";
			$this->session->set_flashdata('berhasil',$pesan);
			header('location:'.base_url().'pegawai/data_riwayat_jabatan');
		}
	}
		function edit()
	{
		$id['id_riwayat_jabatan'] = $this->uri->segment(4);
		$q = $this->db->get_where("tb_data_riwayat_jabatan",$id);
		foreach($q->result() as $dt)
		{
			$d['id_riwayat_jabatan'] = $dt->id_riwayat_jabatan;
			$d['id_pegawai'] =  $dt->id_pegawai;
			$d['status'] =  $dt->status;
			$d['penempatan'] =  $dt->penempatan;
			$d['id_jabatan'] =  $dt->id_jabatan;
			$d['id_unit_kerja'] =  $dt->id_unit_kerja;
			$d['uraian'] =  $dt->uraian;
			$d['id_eselon'] =  $dt->id_eselon;
			$d['tmt_eselon'] =  $dt->tmt_eselon;
			$d['nomor_sk'] =  $dt->nomor_sk;
			$d['tanggal_sk'] =  $dt->tanggal_sk;
			$d['tanggal_mulai'] =  $dt->tanggal_mulai;
			$d['tanggal_selesai'] =  $dt->tanggal_selesai;
			$d['lokasi'] =  $dt->lokasi;
		}
		$d['st'] = "edit";
		$d['breadcrumb'] = "Edit";
		$d['jabatan'] = $this->db->get("tb_master_jabatan");
		$d['unit_kerja'] = $this->db->get("tb_master_unit_kerja");
		$d['eselon'] = $this->db->get("tb_master_eselon");
			
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/master_data/riwayat_jabatan/input',$d);
		$this->load->view('pegawai/footer');
	}
	function hapus()
	{
	
		$id['id_riwayat_jabatan'] = $this->uri->segment(4);
		$this->db->delete("tb_data_riwayat_jabatan",$id);
		header('location:'.base_url().'pegawai/data_riwayat_jabatan');
	}

}