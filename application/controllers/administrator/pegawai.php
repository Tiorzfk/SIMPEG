<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends MY_Controller {

	/*
		***	Controller : pegawai.php
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
		$u['tampil'] = $this->model_pegawai->tampil_pegawai();
		$this->load->view('pegawai/header');
		$this->load->view('pegawai/index',$u);
		$this->load->view('pegawai/footer');
	}
	public function tambah()
	{

		$d['id_param'] = "";
		$d['nip'] = "";
		$d['no_kartu'] = "";
		$d['nama_pegawai'] = "";
		$d['tempat_lahir'] = "";
		$d['tgl_lahir'] = "";
		$d['jenis_kelamin'] = "";
		$d['no_npwp'] = "";
		$d['usia'] = "";
		$d['tgl_pengangkatan'] = "";
		$d['kartu_akses'] = "";
		$d['alamat'] = "";

		$d['st'] = "tambah";
		$d['status_pegawai'] = $this->db->get('tb_master_status_pegawai');
		$d['golongan'] = $this->db->get('tb_master_golongan');
		$this->load->view('administrator/header');
		$this->load->view('administrator/pegawai/input',$d);
		$this->load->view('administrator/footer');
			
	}
	function simpan()
	{
			$id['id_pegawai'] = $this->input->post("id_param");
			
				$st = $this->input->post('st');
				if($st=="tambah")
				{
					$in['nip'] = $this->input->post('nip');
					$in['no_kartu_pegawai'] = $this->input->post('no_kartu');
					$in['nip'] = $this->input->post('nip');
					$in['nama_pegawai'] = $this->input->post('nama');
					$in['jenis_kelamin'] = $this->input->post('jenis_kelamin');
					$in['agama'] = $this->input->post('agama');
					$in['id_status_pegawai'] = $this->input->post('status_pegawai');
					$in['alamat'] = $this->input->post('alamat');
					$in['tempat_lahir'] = $this->input->post('tempat_lahir');
					$in['no_npwp'] = $this->input->post('no_npwp');
					$in['kartu_akses_pegawai'] = $this->input->post('kartu_akses_pegawai');
					$in['tanggal_lahir'] = $this->input->post('tgl_lahir');
					$in['usia'] = $this->input->post('usia');
					$in['tanggal_pengangkatan_cpns'] = $this->input->post('tgl_pengangkatan');
					$in['id_golongan'] = $this->input->post('golongan');

					if(!empty($_FILES['foto']['name']))
					{
						$acak=rand(00000000000,99999999999);
						$bersih=$_FILES['foto']['name'];
						$nm=str_replace(" ","_","$bersih");
						$pisah=explode(".",$nm);
						$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
						$nama_murni=date('Ymd-His');
						$ekstensi_kotor = $pisah[1];
						
						$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
						$file_type_baru = strtolower($file_type);
						
						$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
						$n_baru = $ubah.'.'.$file_type_baru;
						
						$config['upload_path']	= "./assets/pegawai/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '2500';
						$config['max_width']  	= '3000';
						$config['max_height']  	= '3000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("foto")) {
							$data	 	= $this->upload->data();
							$in['foto'] = $data['file_name'];
						}
					}

					$this->db->insert("tb_data_pegawai",$in);
					$this->session->set_flashdata('berhasil', 'Berhasil menambahkan pegawai.');
					header('location:'.base_url().'administrator/pegawai');
				}
	}
	function detail()
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
				$this->load->view('administrator/header');
				$this->load->view('administrator/pegawai/detail',$d);
				$this->load->view('administrator/footer');
			}
	}
}
