<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index() {	
  		$this->load->view('admin/admin-header');
		$this->load->view('admin/admin-body');
		$this->load->view('include/footer');
	}
}