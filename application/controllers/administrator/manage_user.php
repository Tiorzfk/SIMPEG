<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_user extends MY_Controller {

	/*
		***	Controller : administrator/manage_user.php
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

	function index()
	{
		$d['user'] = $this->db->get("tb_login");
		$this->load->view('administrator/header');
		$this->load->view('administrator/user/list_user',$d);
		$this->load->view('administrator/footer');

	}

	function tambah()
	{
		$d['id_param'] = "";
		$d['username'] = ""; 
		$d['password'] = ""; 
		$d['nama_lengkap'] = ""; 
		$d['breadcrumb'] = "Tambah";
		$d['st'] = "tambah";
		$d['pegawai'] = $this->db->get("tb_data_pegawai");
		$this->load->view('administrator/header');
		$this->load->view('administrator/user/input',$d);
		$this->load->view('administrator/footer');
	}
	function edit()
	{
		$id['id_login'] = $this->uri->segment(4);
		$q = $this->db->get_where("tb_login",$id);
		$d = array();
		foreach($q->result() as $dt)
		{
			$d['id_param'] = $dt->id_login;
			$d['username'] = $dt->username; 
			$d['password'] = $dt->password; 
			$d['nama_lengkap'] = $dt->nama_lengkap; 
			$d['id_pegawai'] = $dt->id_pegawai;
			$d['status'] = $dt->status;
		}
		$d['st'] = "edit";
		$d['breadcrumb'] = "Edit";
		$d['pegawai'] = $this->db->get("tb_data_pegawai");
			
		$this->load->view('administrator/header');
		$this->load->view('administrator/user/input',$d);
		$this->load->view('administrator/footer');
	}
	function simpan()
	{
			$st = $this->input->post('st');
			$id['id_login'] = $this->input->post("id_param");
			$id2=$id['id_login'];
				if($st=="edit")
				{
					$upd['nama_lengkap'] = $this->input->post("nama_lengkap");
					$upd['id_pegawai'] = $this->input->post("id_pegawai");
					$upd['status'] = $this->input->post("hak_akses");
					if($this->input->post("password")!="")
					{
						$upd['password'] = md5($this->input->post("password"));
					}
					if($this->input->post("username")!="")
					{
						$upd['username'] = $this->input->post("username");
					}
					$this->db->update("tb_login",$upd,$id);
					$pesan="Data Berhasil diupdate.";
					$this->session->set_flashdata('berhasil',$pesan);
					header('location:'.base_url('administrator/manage_user/edit/'.$id2));
				}
				else if($st=="tambah")
				{
					$login['username'] = $this->input->post("username");
					$cek = $this->db->get_where('tb_login', $login);
					if($cek->num_rows()>0)
					{
						$this->session->set_flashdata('perhatian', 'Username sudah terdaftar.');
						header('location:'.base_url('manage_user/tambah'));
					}
					else
					{
						$in['username'] = $this->input->post("username");
						$in['id_pegawai'] = $this->input->post("id_pegawai");
						$in['status'] = $this->input->post("hak_akses");
						$in['password'] = md5($this->input->post("password"));
						$this->db->insert("tb_login",$in);
						$pesan="Data Berhasil ditambahkan.";
						$this->session->set_flashdata('berhasil',$pesan);
						header('location:'.base_url('administrator/manage_user/tambah'));
					}
				}
	}
	function hapus()
	{
	
		$id['id_login'] = $this->uri->segment(3);
		$this->db->delete("tb_login",$id);
		header('location:'.base_url().'administrator/manage_user');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */