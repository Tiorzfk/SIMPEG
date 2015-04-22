<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/*
		***	Controller : login.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/

function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->helper(array('text_helper'));
	}
	
	function index()
	{
		$this->load->view('login');
	}

	function cek_login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));		
		$ex['i'] = $this->model_login->cek_data($username,$password);
		$r = $ex['i']->row();
		// PERIKSA ADMIN //
		if($r == 1){
			if($r->status == 'administrator'){				
				$adm = array(
							'login' => 'GetMeLogin',
							'username'=>$r->username,
							'password'=>$r->password,
							'nama_lengkap'=>$r->nama_lengkap,
							'foto'=>$r->foto,
							'status'=>$r->status,
							'id_login'=>$r->id_login);
				$this->session->set_userdata($adm);				
				redirect('administrator/home');	
			}
			elseif($r->status == 'pegawai'){
				$op = array(
							'login' => 'GetMeLogin',
							'username'=>$r->username,
							'password'=>$r->password,
							'nama_lengkap'=>$r->nama_lengkap,
							'foto'=>$r->foto,
							'status'=>$r->status,
							'id_login'=>$r->id_login,
							'id_pegawai'=>$r->id_pegawai);
				$this->session->set_userdata($op);				
				redirect('pegawai/home');
			}
		}
		else{
		$this->session->set_flashdata('result_login', "Maaf, kombinasi username dan password yang anda masukkan tidak valid dengan database kami.");
		header('location:'.base_url().'login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	function ganti_password()
	{
		$this->load->view('administrator/header');
		$this->load->view('administrator/user/ganti_password');
		$this->load->view('administrator/footer');
	}
	function save_pass()
	{
			$id['username'] = $this->input->post("username");
			$pass_lama = md5($this->input->post("pass_lama"));
			$pass_baru = md5($this->input->post("pass_baru"));
			$ulangi_pass_baru = md5($this->input->post("ulangi_pass_baru"));
			$id_login = $this->input->post("id_login");

			$set['tab_a'] = "active";
			$set['tab_b'] = "";
			$this->session->set_userdata($set);
			
			$login['username'] = $id['username'];
			$login['password'] = $pass_lama;
			$cek = $this->db->get_where('tb_login', $login);
			if($cek->num_rows()>0)
			{
				if($pass_baru==$ulangi_pass_baru)
				{
						$upd['password'] = $pass_baru;
						$this->model_login->save_pass($upd,$id_login);
						$this->session->set_flashdata('berhasil', 'Berhasil mengubah password...');
						header('location:'.base_url().'login/ganti_password');
				}
				else
					{
						$this->session->set_flashdata('gagal', 'Password Baru tidak sama...');
						header('location:'.base_url().'login/ganti_password');
					}
				}
			else
			{
				$this->session->set_flashdata('gagal', 'Password Lama salah...');
				header('location:'.base_url().'login/ganti_password');
			}
	}
	function savename()
	{
		$nama = $this->input->post("nama");
		$id_login = $this->input->post("id_login");

		$set['tab_a'] = "";
		$set['tab_b'] = "active";
		$this->session->set_userdata($set);

		$upd['nama_lengkap'] = $nama;

			$config['upload_path'] = BASEPATH.'../assets/user_image/';
 			$config['allowed_types'] = 'gif|jpg|png';
 			$config['file_name'] = url_title($this->input->post('foto'));
			$this->load->library('upload', $config);

			$upload =$this->upload->do_upload('foto');

			if(! $upload){
				$this->session->set_flashdata('perhatian', $this->upload->display_errors());
				header('location:'.base_url().'login/ganti_password');
 			}else{
 				$path=$this->upload->upload_path;
 				$foto=$this->upload->file_name;
				$type=$this->upload->allowed_types;
				$upd['foto'] = $foto;
				$set_new['foto'] = $upd['foto'];
				$id['id_login'] = $this->input->post("id_login");
				$q = $this->db->get_where("tb_login",$id);
					foreach($q->result() as $dt)
					{
				unlink($path.$dt->foto);
					}
			}
				$this->model_login->upd_name($upd,$id_login);
				$this->session->set_flashdata('berhasil', 'Berhasil mengubah.');
				$set_new['nama_lengkap'] = $upd['nama_lengkap'];
				$this->session->set_userdata($set_new);
				header('location:'.base_url().'login/ganti_password');
			
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */