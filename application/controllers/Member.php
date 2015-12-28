
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public $take_all_post;
	public $take_reserved;
	public $take_stu_reserve;
	public $take_deactived;
	public $take_stu_active;
	public $take_active;
    public $take_img ;
    public $username;

	public function __construct(){
		parent::__construct();
		$this->validate_user();
		$this->load->model('member_model');
		$this->load->model('Sample_model');
		$this->take_img = $this->member_model->read_img($_SESSION['username']);
		$this->take_all_post = $this->member_model->read_all_post('user', $_SESSION['username']);
		$this->take_stu_reserve = $this->member_model->read_reserved_satu('sellpost', $_SESSION['username']);
		$this->take_deactived = $this->Sample_model->read_deactived('sellpost', $_SESSION['username']);
		$this->take_reserved = $this->member_model->read_reserved('sellpost', $_SESSION['username']);
		$this->take_stu_active = $this->Sample_model->read_active_satu('sellpost', $_SESSION['username']);
		$this->take_active = $this->Sample_model->read_active('sellpost', $_SESSION['username']);

		$this->username = $_SESSION['username'];

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
			$data['name'] = $this->username;

			$data['page_title'] = 'Member Dashboard';
			// --------- Calling all data from model
			$data['h'] = $this->take_active;
			$data['h_satu'] = $this->take_stu_active;
			$data['h_deactived'] = $this->take_deactived;
			$data['h_reserved'] = $this->take_reserved;
			$data['h_reserved_satu'] = $this->take_stu_reserve;
			$data['h_all_post'] = $this->take_all_post;
			$data['h_img'] = $this->take_img;

	  		$this->load->view('member/user-header', $data);
	  		$this->load->view('member/member-side', $data);
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

	        $data['name'] = $this->username;
	        $data['h_img'] = $this->take_img;
			$data['h_satu'] = $this->take_stu_active;
			$data['h_reserved_satu'] = $this->take_stu_reserve;
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
				$this->load->view('member/member-side', $data);
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
			$data['name'] = $this->username;
			$data['h_img'] = $this->take_img;
			$data['h_satu'] = $this->take_stu_active;
			$data['h_reserved_satu'] = $this->take_stu_reserve;
			
			$data['page_title'] = 'Edit Profil - Dashboard';
			$this->load->view('member/user-header', $data);
			$this->load->view('member/member-side', $data);
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

			$data['name'] = $this->username;
			$config['upload_path']          = './uploads/ticket';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 100;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
	        // ---- call all database from model
			$data['h_img'] = $this->take_img;
			$data['h_satu'] = $this->take_stu_active;
			$data['h_reserved_satu'] = $this->take_stu_reserve;
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
				$this->load->view('member/member-side', $data);
				$this->load->view('member/edit-post');
				$this->load->view('include/footer');
			} 
		} 
	}


	public function editmember() {
		if (isset($_SESSION['is_logged_in']))
		{
			$userlogin = $this->username;
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