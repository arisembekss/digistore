<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function regis_user($table, $data){
		$this->db->insert($table, $data);
	}

	function tampil_user_toko($iduser){
		$this->db->select("*");
		$this->db->from("user_store");
		$this->db->where("id_user", $iduser);
		return $this->db->get()->result();
	}
}
 ?>
