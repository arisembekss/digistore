<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public $user_rtdb;
	public $encstore;
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('encrypt');
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
			/*$qrmd = base64_encode("meja".$i.",".$namastore.",".$last_id_store);*/
			$query = $this->db->query('insert into meja_store (id_user, id_store, format) values ('.$this->db->escape($iduser).', '.$this->db->escape($last_id_store).', "meja '.$i.','.$namastore.','.$last_id_store.'")');
		}
		
		$encstore = base64_encode($this->input->post('nmtoko').','.$last_id_store);
		$dataupdenc = array(
				'enc'=>$encstore
			);
		$this->m_data->update_table('user_store', 'id_store', $last_id_store, $dataupdenc);
		$where = array(
				'id_user'=>$iduser,
				'id_store'=>$last_id_store,
				'nama_store'=>$namastore
			);
		//$data['qrcode'] = $this->m_data->select_data('meja_store', $where);
		$this->load->view('v_redirect_store', $where);
	}

	function detail_toko(){
		//$session_toko = array("toko"=>$nmtoko);
		$nmtoko = array(
			'nmtoko'=>$this->input->get('sessnmtoko'),
			'idtoko'=>$this->input->get('sesstoko'),
			'basenmtoko'=>$this->input->get('sessbase')
			);
		$this->session->set_userdata($nmtoko);
		$this->load->view('v_detail_toko');
	}

	function edit_menu(){
		
		$nmtoko = array(
			'nmtoko'=>base64_decode($this->input->get('sessnmtoko')),
			'idtoko'=>base64_decode($this->input->get('sesstoko'))
			);

		$this->load->view('v_menu', $nmtoko);
	}

	function add_menu(){
		/*$data = array(
				'id_store'=>$this->input->post('id_store'),
				'jenis'=>$this->input->post('jenis'),
				'nama_menu'=>$this->input->post('nmmenu'),
				'keterangan'=>$this->input->post('keterangan'),
				'harga'=>$this->input->post('harga'),
				'foto'=>$this->input->post('berkas')
			);*/

		$config['upload_path']          = './pict/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		 $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('berkas'))
                {
                	$this->upload->display_errors('<p>', '</p>');
                        /*$error = array('error' => $this->upload->display_errors());

                        $this->load->view('tmplt', $error);*/
                }
                else
                {
                        /*$data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);*/
                    $fotoupl = base_url()."pict/".$this->upload->data('file_name');
                    $data = array(
						'id_store'=>$this->input->post('id_store'),
						'jenis'=>$this->input->post('jenis'),
						'nama_menu'=>$this->input->post('nmmenu'),
						'keterangan'=>$this->input->post('keterangan'),
						'harga'=>$this->input->post('harga'),
						'foto'=>$fotoupl
					);
                    $lastidmenu = $this->m_data->insert_table_retid('menu', $data);
                    $this->session->set_userdata('lastidmenu', $lastidmenu);

					$this->load->view('v_redirect_menu', $data);
                }

		
		
	}

}

?>