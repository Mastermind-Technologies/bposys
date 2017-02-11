<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Issued_Application_m extends CI_Model {
	private $table = 'issued_applications';

	public function construct()
	{
		parent::__construct();
	}

	public function insert($fields = null)
	{
		$this->db->insert($this->table,$fields);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function get_all($query = null)
	{
		if($query != null)
			$this->db->where($query);

		$this->db->select('*')->from($this->table);
		$result = $this->db->get();

		return $result->result();
	}
}