<?php
class Model_login extends CI_Model{
	/// input baru user ///
	function inputNew_user($username){
		return $this->db->insert('user',$username);
	}
	//cek data 
	function cek_data($username,$password){
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get('tb_login');
	}
	function save_pass($upd,$id_login){
		$this->db->where('id_login',$id_login);
		return $this->db->update('tb_login',$upd);
	}
	function upd_name($upd,$id_login){
		$this->db->where('id_login',$id_login);
		return $this->db->update('tb_login',$upd);
	}

}
?>
