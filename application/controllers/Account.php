<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public $user_rtdb;
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_login');
		$this->load->helper('url');
		if($this->session->userdata('ustatus') != "login"){
			redirect(base_url("login"));
		} else{
			$this->user_rtdb = "users/".$this->session->userdata("uid");
		}
	}	

	public function index(){
		//$data['data'] = $this->m_data->tampil_user_toko($this->session->userdata("iduser"));
		$datastore = $this->m_data->tampil_user_toko($this->session->userdata("iduser"));
		//$cekstore = $this->m_data->tampil_user_toko($this->session->userdata("iduser"))->num_rows();
		$idu = $this->session->userdata("iduser");
		$where = array(
				'id_user' => $idu
			);
		$data['userstore'] = $this->m_login->cek_login("user_store",$where)->result();
		$this->load->view('v_account');
		
		
		/*foreach($data as $u){
			echo $u->nama_store;
		}*/
		//echo implode("", $data);
		//echo $this->user_rtdb;
	}

	public function login(){
		echo "halaman login";
	}

}

?>