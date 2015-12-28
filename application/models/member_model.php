<?php

class member_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

	public function read_for_category($name, $filter){
		$query = "SELECT * FROM $name ORDER BY tanggal $filter";
		return $this->db->query($query);
	}

	public function read_all_post($column, $username, $filter){
		$query = "SELECT * FROM sellpost WHERE $column='$username' ORDER BY tanggal $filter";
		return $this->db->query($query);
	}

	public function read_post($name){
		$query = "SELECT * FROM $name WHERE status='active' ORDER BY tanggal ASC";
		return $this->db->query($query);
	}
	public function read_max($name){
		$query = "SELECT * FROM $name WHERE status='active'";
		return $this->db->query($query);
	}

	public function read_reserved($name, $username){
		$query = "SELECT * FROM $name WHERE status='reserved' AND keterangan='$username' ORDER BY tanggal DESC";
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
