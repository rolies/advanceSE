<?php
/**
* 
*/
class member_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

	public function read_reserved($name, $username){
		$query = "SELECT * FROM $name WHERE status='reserved' AND keterangan='$username'";
		return $this->db->query($query);
	}
}