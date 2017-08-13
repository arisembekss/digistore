<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function insert_table($table, $data){
		$this->db->insert($table, $data);
	}

	function select_all($table){
		return $this->db->get($table);
	}

	function select_data($table, $where){
		return $this->db->get_where($table,$where);
	}

	function tampil_user_toko($iduser){
		$this->db->select("*");
		$this->db->from("user_store");
		$this->db->where("id_user", $iduser);
		return $this->db->get()->result();
	}
}
 ?>
