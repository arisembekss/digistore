<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public $user_rtdb;
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('form');
		$this->load->helper('url');
		if($this->session->userdata('ustatus') != "login"){
			redirect(base_url("login"));
		} else{
			$this->user_rtdb = "users/".$this->session->userdata("uid");
		}
	}	

	public function index(){
		
		/*$datastore = $this->m_data->tampil_user_toko($this->session->userdata("iduser"));
		
		$idu = $this->session->userdata("iduser");
		$where = array(
				'id_user' => $idu
			);
		$data['userstore'] = $this->m_login->cek_login("user_store",$where)->result();*/
		$this->load->view('v_account');
	}

	public function login(){
		echo "halaman login";
	}

	public function add_store(){
		/*$this->load->view('v_add_store');*/
	}

	public function add_store_data(){
		$iduser = $this->session->userdata("iduser");
		$tipe = 1;
		$data = array(
			'id_user' => $iduser,
			'nama_store' => $this->input->post('nmtoko'),
			'alamat_store' => $this->input->post('almttoko'),
			'jml_meja' => $this->input->post('jmlmeja'),
			'tipe_store' => $tipe
		);

		$this->m_data->insert_table('user_store', $data);
		$this->load->view('v_overview_store');
	}

}

?>