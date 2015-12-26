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

	public function check_user($credentials) {
		$this->db->where($credentials);
		return  $this->db->get('users');
	}

	public function add_sellpost($post) {
		return $this->db->insert('sellpost', $post);
	}

	public function read_active($name, $username){
		$query = "SELECT * FROM $name WHERE (status='active' OR status='reserved') AND (user='$username')";
		return $this->db->query($query);
	}

	public function read_deactived($name, $username){
		$query = "SELECT * FROM $name WHERE (status='sold' OR status='deactived')  AND (user='$username')";
		return $this->db->query($query);
	}

	public function read_active_satu($name, $username){
		$query = "SELECT * FROM $name WHERE (status='active' OR status='reserved')  AND (user='$username') LIMIT 1";
		return $this->db->query($query);
	}

	public function read_for_detail($name, $number){
		$query = $this->db->query("SELECT * FROM $name WHERE number=$number");
    	return $query->row();
	}

	public function read_user_for_detail($name, $username){
		$query = $this->db->query("SELECT * FROM $name WHERE username='$username'");
    	return $query->row();
	}

}