<?php 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function regis_user($table, $data){
		$this->db->insert($table, $data);
	}
}
 ?>
