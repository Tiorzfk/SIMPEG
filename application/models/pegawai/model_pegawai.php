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
	function tampil_riwayat_jabatan(){
		$this->db->select('*');
		$this->db->from('tb_data_riwayat_jabatan a');
		$this->db->join('tb_master_jabatan b', 'b.id_jabatan = a.id_jabatan');
		$this->db->join('tb_master_unit_kerja d', 'd.id_unit_kerja = a.id_unit_kerja');
		$this->db->join('tb_master_eselon e', 'e.id_eselon = a.id_eselon');
		return $this->db->get();
	}
}
?>