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
	public function index()
	{	
		// $data['view'] = 'display_view';
        $this->load->view('load_view');
	}
	public function signup(){	
		$user = array(
	        'username' => $_POST['username'],
	        'password' => md5($_POST['password']),
	        'email' => $_POST['email'],
	        'hp' => $_POST['hp'],
	        'kota' => $_POST['kota']     
        );
        $this->load->model('sample_model');
        $this->Sample_model->add_user($user);
	}
}