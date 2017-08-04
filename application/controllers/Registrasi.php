<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}	

	public function index(){
		$this->load->view('v_reg');
	}

	public function user_regis(){
		//echo "halaman login";
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');

		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('v_reg');
        }
		else
		{
			//insert the user registration details into database
			$data = array(
				'nama' => $this->input->post('fname'),
				'email' => $this->input->post('email'),
				'pass' => $this->input->post('password')
			);

			$this->m_data->regis_user('user', $data);
			redirect('Account/');
		}
	}

}

?>