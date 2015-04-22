<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	/*
		***	Controller : administrator/home.php
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
		$u['tampil'] = $this->model_pegawai->tampil_pegawai();
		$this->load->view('administrator/header');
		$this->load->view('administrator/index',$u);
		$this->load->view('administrator/footer');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */