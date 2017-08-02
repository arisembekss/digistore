<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}	

	public function index(){
		$this->load->view('v_account');
	}

	public function login(){
		echo "halaman login";
	}

}

?>