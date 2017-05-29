<?php 

class M_sekolah extends CI_Model{
	function cari_data_jenjang($where,$table){		
		return $this->db->get_where($table,$where);
	}
        function tampil_kab(){
		return $this->db->get('kabupaten');
	}
        function tampil_kec(){
		return $this->db->get('kecamatan');
	}
        
}