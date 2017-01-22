<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business_m extends CI_Model {

	private $table = 'businesses';
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($fields = null)
	{
		$this->db->insert($this->table, $fields);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}

	public function get_all_businesses($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->table);
		$result = $this->db->get();

		return $result->result();
	}

	public function count_businesses()
	{
		$this->db->where(['userId' => $this->encryption->decrypt($this->session->userdata['userdata']['userId'])]);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}//END OF CLASS