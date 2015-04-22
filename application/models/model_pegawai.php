<?php
class Model_pegawai extends CI_Model{

	function tampil_pegawai(){
		$this->db->select('*');
		$this->db->from('tb_data_pegawai');
		$this->db->join('tb_master_status_pegawai', 'tb_master_status_pegawai.id_status_pegawai = tb_data_pegawai.id_status_pegawai');
		return $this->db->get();
	}
	function tampil_gaji_pokok($id){
		$this->db->select('*');
		$this->db->from('tb_data_gaji_pokok a');
		$this->db->join('tb_master_golongan b', 'b.id_golongan = a.id_golongan');
		$this->db->where($id);
		return $this->db->get();
	}
}
?>