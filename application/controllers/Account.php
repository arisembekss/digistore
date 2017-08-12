<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public $user_rtdb;
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		if($this->session->userdata('ustatus') != "login"){
			redirect(base_url("login"));
		} else{
			$this->user_rtdb = "users/".$this->session->userdata("uid");
		}
	}	

	public function index(){
		$data['data'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_account');
		//echo $this->user_rtdb;
	}

	public function login(){
		echo "halaman login";
	}

}

?>