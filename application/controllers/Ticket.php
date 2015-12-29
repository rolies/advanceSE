<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller {


	public function __construct(){
		parent::__construct();

	}

	public function validate_user() {
		$is_logged_in = $this->session->userdata('is_logged_in');
			if (!isset($is_logged_in) || $is_logged_in != true) {
			}
	}

	public function det($id, $urldetail){
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('Sample_model');
		$this->load->model('member_model');
		$data['detail_ticket'] = $this->Sample_model->read_for_detail('sellpost', $id);
		$data['detail_ticket_user'] = $this->Sample_model->read_user_for_detail('users', $data['detail_ticket']->user);
		$lid = $data['detail_ticket']->judul;
		$url_title = url_title($lid);
		
		if (isset($_SESSION['is_logged_in']))
		{
			$data['h_img'] = $this->member_model->read_img($_SESSION['username']);
			if ($urldetail != $url_title) {
				echo "Ticket you are looking not here";
			}else {
				$data['page_title'] = "TicketSell - ".$lid;
				$this->load->view('detail_header', $data);
				$this->load->view('detail_ticket', $data);
				$this->load->view('include/footer');
			}
		} else {
			$data['page_title'] = "TicketSell - ".$lid;
			$this->load->view('detail_header', $data);
			$this->load->view('detail_ticket', $data);
			$this->load->view('include/footer');
		}
	}

	public function category($type="") {
		$data['page_title'] = "TicketSell - Category";
		$this->load->model('member_model');
		$listfilter = $this->input->post('listfilter');
		$data['type'] = '';
		if ($type=="") {
			$data['h_categ'] = $this->member_model->read_for_category('sellpost', $listfilter);
			} else{
				$data['h_categ'] = $this->member_model->read_all_post('tipe', $type, $listfilter);		
		}

		if (isset($_SESSION['is_logged_in']))
		{
			$data['h_img'] = $this->member_model->read_img($_SESSION['username']);
			$data['nameuser'] = $_SESSION['username'];
			$this->load->view('include/category_header', $data);
			$this->load->view('category_view');
			$this->load->view('include/footer');
		} else {
			$this->load->model('member_model');
			$listfilter = $this->input->post('listfilter');
			$this->load->view('include/category_header', $data);
			$this->load->view('category_view');
			$this->load->view('include/footer');
		}
	}
	public function search() {
		$data['page_title'] = "TicketSell - Category";
		$this->load->model('member_model');
		$srch = $this->input->post('search-hero');
		$data['srch'] = $srch;
		$listfilter = $this->input->post('listfilter');
		$type = $this->input->post('listcategory');
		$data['type'] = $type;
		
		if ($srch !="" ) {
			$data['h_categ'] = $this->member_model->read_for_search($srch);	
		} else {
			$data['h_categ'] = $this->member_model->read_all_post('tipe', $type, $listfilter);
		}
		if ($type=="") {
			$type = $this->input->post('categoryvalue');
		}
		

		if (isset($_SESSION['is_logged_in']))
		{
			$data['h_img'] = $this->member_model->read_img($_SESSION['username']);
			$data['nameuser'] = $_SESSION['username'];
			$this->load->view('include/category_header', $data);
			$this->load->view('category_view');
			$this->load->view('include/footer');
		} else {
			$this->load->model('member_model');
			$listfilter = $this->input->post('listfilter');
			$this->load->view('include/category_header', $data);
			$this->load->view('member/search_view');
			$this->load->view('include/footer');
		}
	}


	public function mark_reserved($id){
		if (isset($_SESSION['is_logged_in']))
		{
			$name = $_SESSION['username'];
			$reserve =array(
				'status' => 'reserved',
				'keterangan' => $name
				);
			$this->load->model('member_model');
			$this->member_model->update_reserve($id, $reserve);
			redirect ('Member');
		}
	}
}