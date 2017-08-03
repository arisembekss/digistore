<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}	

	public function index(){
		$data['data'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_account', $data);
	}

	public function login(){
		echo "halaman login";
	}

}

?>