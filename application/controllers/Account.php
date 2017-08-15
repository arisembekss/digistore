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

	public function overview(){
		$this->load->view('v_overview_store');
	}

	public function add_store_data(){
		$iduser = $this->session->userdata("iduser");
		$jmlhmeja = $this->input->post('jmlmeja');
		$namastore = $this->input->post('nmtoko');
		$tipe = 1;
		$data = array(
			'id_user' => $iduser,
			'nama_store' => $namastore,
			'alamat_store' => $this->input->post('almttoko'),
			'jml_meja' => $jmlhmeja,
			'tipe_store' => $tipe
		);

		$datameja = array(

			);
		$last_id_store = $this->m_data->insert_table_retid('user_store', $data);
		
		for ($i=1; $i <= $jmlhmeja ; $i++) { 
			# code...
			$qrmd = md5("meja".$i.",".$namastore.",".$last_id_store);
			$query = $this->db->query('insert into meja_store (id_user, id_store, format, qr_code) values ('.$this->db->escape($iduser).', '.$this->db->escape($last_id_store).', "meja'.$i.','.$namastore.','.$last_id_store.'", '.$this->db->escape($qrmd).')');
		}
		
		$where = array(
				'id_user'=>$iduser,
				'id_store'=>$last_id_store
			);
		$data['qrcode'] = $this->m_data->select_data('meja_store', $where);
		$this->load->view('v_redirect_store', $where);
	}

	function detail_toko(){
		//$session_toko = array("toko"=>$nmtoko);
		$nmtoko = array('nmtoko'=>$this->input->get('sesstoko'));
		$this->load->view('v_detail_toko', $nmtoko);
	}

}

?>