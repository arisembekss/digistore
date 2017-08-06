<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->helper('html');
		
		$this->load->model('m_login');
		$this->form_validation->set_error_delimiters('<div class="w3-text-teal">', '</div>');
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
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('v_login');
        }
		else
		{
			$username = $this->input->post('email');
			$password = $this->input->post('password');

			$where = array(
				'email' => $username,
				'pass' => $password
			);

			$cek = $this->m_login->cek_login("user",$where)->num_rows();
			if($cek > 0){
 				$data['user'] = $this->m_login->cek_login("user",$where)->result();
 				foreach($this->m_login->cek_login("user",$where)->result() as $u){
 					$uemail = $u->email;
 					$uid = $u->user_id;
 					$uname = $u->nama;
 				}

				$data_session = array(
					'unama' => $uname,
					'ustatus' => "login",
					'uemail' => $uemail,
					'uid' => $uid
					);
		 
				$this->session->set_userdata($data_session);
		 
				redirect(base_url("Account"));
			}else{
				echo "Username dan password salah !";
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}

}

?>