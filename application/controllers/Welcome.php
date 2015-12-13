<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {	
		$data['view'] = 'welcome_message';
  		$this->load->view('load_view', $data);

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
			);
			$this->load->model('Sample_model');
			if(!$this->Sample_model->add_user($user)){
				die('Something Wrong');
			}
		}


		// if (isset($_POST['username'])){

		// 	$this->load->model('Sample_model');
		// 	$username = $_POST['username'];
		// 	$password = $_POST['password'];
		// 	if($this->Sample_model->check_user($username, $password) == 1){
		// 		redirect('Member');
		// 	} else {
		// 		die('Something Wrong');
		// 	}
		// } else {
		// 	//$this->load->helper('form');
		// }


	}
	
}