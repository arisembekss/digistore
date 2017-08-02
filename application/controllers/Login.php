<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}	

	public function index(){
		$this->load->view('v_login');
		/*$myJSVar = $this->input->post('myOrderString');
		if ($myJSVar == null) {
			# code...
			echo "<script>console.log('Boo!');</script>";
		} else {
			
			echo "<script>console.log('".$myJSVar."');</script>";
		}*/
	}

	public function login(){
		//echo "halaman login";
		$this->load->view('v_account');
		$myJSVar =$_POST['email'];
		$this->session->set_userdata('nama', $myJSVar);
		$name = $this->session->userdata('nama');
		//echo "<script>console.log(".$myJSVar.");</script>";
		echo $nama;
	}

}

?>