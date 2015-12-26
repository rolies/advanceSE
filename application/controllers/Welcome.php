<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {	
		$data['page_title'] = 'Sellticket';
		$this->load->model('member_model');
		$data['h_all'] = $this->member_model->read_post('sellpost');
		$data['h_max'] = $this->member_model->read_max('sellpost');
		$this->load->view('include/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('include/footer');
	}


	public function register(){
  		$this->load->library('form_validation');
  		$this->form_validation->set_rules('email', 'Email', 'valid_email');
        if ($this->form_validation->run() == false){
        	$this->load->helper('form');
		} else {
			$user = array (
				'username' => $_POST['username'],
		        'password' => md5($_POST['password']),
		        'email' => $_POST['email'],
		        'hp' => $_POST['hp'],
		        'kota' => $_POST['kota'],
		        'regdate' => date("Y")
			);
			$this->load->model('Sample_model');
			if(!$this->Sample_model->add_user($user)){
				die('Something Wrong');
			} else {
				redirect('welcome/register_success');
			}
		}
	}
	public function register_success(){
		$data['page_title'] = 'Register sukses';
		$this->load->view('member/header-polos', $data);
		$this->load->view('member/register_success');
	}
	public function login() {
		if (isset($_POST['username'])){

			$credentials = array(
				'username' => $_POST['username'],
				'password' => md5($_POST['password'])
				);

			$this->load->model('Sample_model');
			$user = $this->Sample_model->check_user($credentials);
			if ($user->num_rows() == 1) {
				$user = $user->row();
				$session = array (
					'username' => $user->username,
					'is_logged_in' => TRUE

					);
				$this->session->set_userdata($session);
				redirect('Member');
			}else {
				die('Something Wrong');
			}
		} else {
			//$this->load->helper('form');
		}
	}

}