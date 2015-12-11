<?php
/**
* 
*/
class sample_model extends CI_model {
	
	public function __construct()
	{
		parent::__construct();
	}
	public function add_user($user) {
		return $this->db->insert('users', $user);
	}
}