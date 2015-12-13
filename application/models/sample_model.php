<?php
/**
* 
*/
class Sample_model extends CI_model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function add_user($user) {
		return $this->db->insert('users', $user);
	}

	public function check_user($username, $password) {
		
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return  $this->db->count_all_results('users');
	}


	public function add_sellpost($post) {
		return $this->db->insert('sellpost', $post);
	}
}