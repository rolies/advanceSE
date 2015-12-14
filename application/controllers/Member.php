<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index() {	
		$data['page_title'] = 'Member Dashboard';
		$this->load->model('Sample_model');
		$data['h'] = $this->Sample_model->read_active('sellpost');
  		$this->load->view('member/user-header', $data);
		$this->load->view('member/user-body', $data);
		$this->load->view('include/footer');
	}
	
	public function sellpost() {
		$data['page_title'] = 'Sell post - Dashboard';
		if (isset($_POST['tipe'])){
			$post = array (
				'tipe' => $_POST['tipe'],
				'judul' => $_POST['judul'],
				'tanggal' => $_POST['tanggal'],
				'harga' => $_POST['harga'],
				'kota' => $_POST['alamat'],
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
			$this->load->view('member/user-header', $data);
			$this->load->view('member/sell-post');
			$this->load->view('include/footer');
		}  
	}
}