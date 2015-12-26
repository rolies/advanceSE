
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public $userlogin;

	public function __construct(){
		parent::__construct();
		$this->validate_user();
	}

	public function validate_user() {
		$is_logged_in = $this->session->userdata('is_logged_in');
			if (!isset($is_logged_in) || $is_logged_in != true) {
				echo "You are not allowed to access this Page";
			}
	}

	public function index() {
		if (isset($_SESSION['is_logged_in']))
		{
			$this->load->helper('url');
			$data['name'] = $_SESSION['username'];

			$data['page_title'] = 'Member Dashboard';
			$this->load->model('Sample_model');
			$this->load->model('member_model');
			$data['h'] = $this->Sample_model->read_active('sellpost', $_SESSION['username']);			
			$data['h_satu'] = $this->Sample_model->read_active_satu('sellpost', $_SESSION['username']);
			$data['h_deactived'] = $this->Sample_model->read_deactived('sellpost', $_SESSION['username']);
			$data['h_reserved'] = $this->member_model->read_reserved('sellpost', $_SESSION['username']);
			
			$data['h_reserved_satu'] = $this->member_model->read_reserved_satu('sellpost', $_SESSION['username']);
			$data['h_all_post'] = $this->member_model->read_all_post('sellpost', $_SESSION['username']);
			$data['h_img'] = $this->member_model->read_img($_SESSION['username']);
	  		$this->load->view('member/user-header', $data);
			$this->load->view('member/user-body', $data);
			$this->load->view('include/footer');
		} 
	}
	
	public function sellpost() {
		if (isset($_SESSION['is_logged_in']))
		{
			$config['upload_path']          = './uploads/ticket';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

			$data['page_title'] = 'Sell post - Dashboard';
			if (isset($_POST['tipe'])){
				$this->load->library('upload', $config);
	            $this->upload->do_upload('gambar-ticket');

				$post = array (
					'tipe' => $_POST['tipe'],
					'judul' => $_POST['judul'],
					'tanggal' => $_POST['tanggal'],
					'harga' => $_POST['harga'],
					'alamat' => $_POST['alamat'],
					'deskripsi' => $_POST['deskripsi'],
					'gambar' => $this->upload->data('file_name'),
					'status' =>'active',

				);
				
				$this->load->model('Sample_model');
				if(!$this->Sample_model->add_sellpost($post)){
					die('Something Wrong');
				} else {
					echo "Post sukses bro";
				}
			} else {
				$this->load->helper('form');
				$this->load->view('member/user-header', $data);
				$this->load->view('member/sell-post');
				$this->load->view('include/footer');
			} 
		} 
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');
	}

	public function edit_profil(){
		if (isset($_SESSION['is_logged_in']))
		{
			$userlogin = $_SESSION['username'];
			$data['name'] = $userlogin;
			$data['page_title'] = 'Edit Profil - Dashboard';
			$this->load->view('member/user-header', $data);
			$this->load->view('member/edit-profil', $data);
			$this->load->view('include/footer');
		}
	}
	public function mark_sold(){
		$sold =array(
			'status' =>'sold'
			);
		$number = $this->input->post('nomerpost');
		$this->load->model('member_model');
		$this->member_model->update_sold($number, $sold);
		redirect ('Member'."#sellpost");
	}

	public function cancel_reserve(){
		$reserve =array(
			'status' =>'active',
			'keterangan' => $this->input->post('user_reserve'). " cancel reservation"
			);
		$number = $this->input->post('nomerpost');
		$this->load->model('member_model');
		$this->member_model->update_reserve($number, $reserve);
		redirect ('Member');
	}

	public function editpost($number) {
		if (isset($_SESSION['is_logged_in']))
		{

			$userlogin = $_SESSION['username'];
			$data['name'] = $userlogin;
			$config['upload_path']          = './uploads/ticket';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
			$this->load->model('member_model');
			$data['display'] =$this->member_model->select_for_update('sellpost', $number);
			$data['page_title'] = 'Edit post - Dashboard';
			if (isset($_POST['tipe'])){
				$this->load->library('upload', $config);
	            $this->upload->do_upload('gambar-ticket');

				$edit = array (
					'tipe' => $_POST['tipe'],
					'judul' => $_POST['judul'],
					'tanggal' => $_POST['tanggal'],
					'harga' => $_POST['harga'],
					'alamat' => $_POST['alamat'],
					'deskripsi' => $_POST['deskripsi'],
					'gambar' => $this->upload->data('file_name'),
					'status' =>'active',

				);
				
				$this->load->model('member_model');
				if(!$this->member_model->update_post($number, $edit)){
					die('Something Wrong');
				} else {
					redirect ('Member');
				}
			} else {
				$this->load->helper('form');
				$this->load->view('member/user-header', $data);
				$this->load->view('member/edit-post');
				$this->load->view('include/footer');
			} 
		} 
	}


	public function editmember() {
		if (isset($_SESSION['is_logged_in']))
		{
			$userlogin = $_SESSION['username'];
			$data['name'] = $userlogin;
			$config['upload_path']          = './uploads/users';
	        $config['allowed_types']        = 'gif|jpg|png';
			$data['page_title'] = 'Edit Member - Dashboard';

			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar-profil');
			
			$edit = array (
				'hp' => $_POST['hp'],
				'kota' => $_POST['kota'],
				'gambar' => $this->upload->data('file_name')
			);
			
			$this->load->model('member_model');
			$this->member_model->update_Member($edit, $userlogin);
			redirect ('Member');
		} 
	}

}