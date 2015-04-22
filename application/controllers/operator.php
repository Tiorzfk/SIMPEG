<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator extends MY_Controller {

	/*
		***	Controller : operator.php
		***	by Tioreza
		***	http://ultraviolet.com
	*/

function __construct()
	{
		parent::__construct();
		$this->load->helper(array('text_helper'));
		$controler=$this->session->userdata('status');
		if($this->session->userdata('status')!="operator"){
            redirect($controler);
        }
	}

	function index()
	{
		$this->load->view('operator/header');
		$this->load->view('operator/index');
		$this->load->view('operator/footer');

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */