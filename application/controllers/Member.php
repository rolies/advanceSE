<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index() {	
  		$this->load->view('member/user-header');
		$this->load->view('member/user-body');
		$this->load->view('include/footer');
	}
	
	public function sellpost() {
		if (isset($_POST['tipe'])){
			$post = array (
				'tipe' => $_POST['tipe'],
				'judul' => $_POST['judul'],
				'tanggal' => $_POST['tanggal'],
				'harga' => $_POST['harga'],
				'kota' => $_POST['kota'],
				'deskripsi' => $_POST['deskripsi'],
			);
			$this->load->model('Sample_model');
			if(!$this->Sample_model->add_sellpost($post)){
				die('Something Wrong');
			} else {
				echo "Post sukses bro";
			}
		} else {
			$this->load->helper('form');
			$this->load->view('member/user-header');
			$this->load->view('member/sell-post');
			$this->load->view('include/footer');
		}  
	}
}