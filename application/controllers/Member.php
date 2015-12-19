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
				'gambar' => $this->upload->data('file_name')

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