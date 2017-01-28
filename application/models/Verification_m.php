<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification_m extends CI_Model {

	private $table = 'verifications';
	public function __construct()
	{
		parent::__construct();
	}

	public function generate_verification_code($param)
	{
		$id = $this->db->count_all($this->table)+1;
		$raw_code = $this->encryption->encrypt($id.$param['lastName'].$param['firstName']);
		$code = strtoupper(substr($raw_code, 0, 10));

		$fields = array(
			'userId' => $param['userId'],
			'code' => $code,
			'status' => 0,
			);
		$this->db->insert($this->table, $fields);

		return $code;
	}

	public function verify($query)
	{
		$this->db->select('*')->from($this->table)->where($query);
		if($this->db->num_rows());
	}
}//END OF CLASS