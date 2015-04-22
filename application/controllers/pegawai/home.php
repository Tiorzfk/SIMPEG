<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/*
		***	Controller : pegawai/home.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/

function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="pegawai"){
            redirect($controler.'/home');
        }
	}

	function index()
	{
		$u['tampil'] = $this->model_pegawai->tampil_pegawai();
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/index',$u);
		$this->load->view('pegawai/footer');
	}
	function detail_pegawai()
	{
			$id['id_pegawai'] = $this->uri->segment(4);
			$data_pegawai = $this->db->get_where("tb_data_pegawai",$id);
			
			if($data_pegawai->num_rows()>0)
			{
				$q = $this->db->get_where("tb_data_pegawai",$id);
				$set_detail = $q->row();
				$this->session->set_userdata("nama_pegawai",$set_detail->nama_pegawai);
				
				foreach($q->result() as $data)
				{
					$d['nip'] = $data->nip;
					$d['no_kartu'] = $data->no_kartu_pegawai;
					$d['nama_pegawai'] = $data->nama_pegawai;
					$d['tempat_lahir'] =  $data->tempat_lahir;
					$d['tgl_lahir'] = $data->tanggal_lahir;
					$d['jenis_kelamin'] = $data->jenis_kelamin;
					$d['agama'] = $data->agama;
					$d['usia'] =  $data->usia;
					$d['id_status_pegawai'] = $data->id_status_pegawai;
					$d['tgl_pengangkatan'] = $data->tanggal_pengangkatan_cpns;
					$d['alamat'] =  $data->alamat;
					$d['no_npwp'] = $data->no_npwp;
					$d['id_golongan'] = $data->id_golongan;
					$d['kartu_akses'] = $data->kartu_akses_pegawai;
					$d['foto'] = $data->foto;
				}
				$d['status_pegawai'] = $this->db->get('tb_master_status_pegawai');
				$d['golongan'] = $this->db->get('tb_master_golongan');

				$d['data_keluarga'] = $this->db->get_where("tb_data_keluarga",$id);
				$d['data_gaji_pokok'] = $this->model_pegawai->tampil_gaji_pokok($id);
				$this->load->view('pegawai/header');
				$this->load->view('administrator/pegawai/detail',$d);
				$this->load->view('pegawai/footer');
			}
		}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */