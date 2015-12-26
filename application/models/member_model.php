<?php

class member_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

	public function read_all_post($name, $username){
		$query = "SELECT * FROM $name WHERE user='$username'";
		return $this->db->query($query);
	}

	public function read_reserved($name, $username){
		$query = "SELECT * FROM $name WHERE status='reserved' AND keterangan='$username'";
		return $this->db->query($query);
	}
	public function read_reserved_satu($name, $username){
		$query = "SELECT * FROM $name WHERE status='reserved' AND keterangan='$username' LIMIT 2";
		return $this->db->query($query);
	}

	public function read_img($username){
		$query = $this->db->query("SELECT * FROM users WHERE username='$username'");
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

    public function update_post($number, $edit){
		$this->db->where('number', $number);
		return $this->db->update('sellpost', $edit);
    }
    public function update_member($edit, $username){
		$this->db->where('username', $username);
		return $this->db->update('users', $edit);
    }
}
