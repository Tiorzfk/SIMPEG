<?php
class Model_adm_pegawai extends CI_Model{

	function tampil_pegawai(){
		$this->db->select('*');
		$this->db->from('tb_data_pegawai');
		$this->db->join('tb_master_status_pegawai', 'tb_master_status_pegawai.id_status_pegawai = tb_data_pegawai.id_status_pegawai');
		return $this->db->get();
	}
	function tampil_gaji_pokok(){
		$this->db->select('*');
		$this->db->from('tb_data_gaji_pokok a');
		$this->db->join('tb_master_golongan b', 'b.id_golongan = a.id_golongan');
		$this->db->join('tb_data_pegawai c', 'a.id_pegawai = c.id_pegawai');
		return $this->db->get();
	}
}
?>