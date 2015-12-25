<?php

class member_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

	public function read_reserved($name, $username){
		$query = "SELECT * FROM $name WHERE status='reserved' AND keterangan='$username'";
		return $this->db->query($query);
	}
	public function read_reserved_satu($name, $username){
		$query = $this->db->query("SELECT * FROM $name WHERE status='reserved' AND keterangan='$username'");
    	return $query->row();
	}

	public function update_sold($id, $sold){
		$this->db->where('number', $id);
		return $this->db->update('sellpost', $sold);
    }

    public function update_reserve($id, $sold){
		$this->db->where('number', $id);
		return $this->db->update('sellpost', $sold);
    }
    public function select_for_update($name, $id){
		$query = $this->db->query("SELECT * FROM $name WHERE number='$id'");
		return $query->row();
    }
}
