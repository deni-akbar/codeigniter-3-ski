<?php

class Stand_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('tbl_stand');
		return $query->result();
	}

}

?>