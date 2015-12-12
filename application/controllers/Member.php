<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index() {	
  		$this->load->view('member/user-header');
		$this->load->view('member/user-body');
		$this->load->view('include/footer');
	}
	
}