<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference_Number_m extends CI_Model {

	private $reference = 'reference_numbers';
	public function __construct()
	{
		parent::__construct();
	}

	public function generate_reference_number()
	{
		$id = $this->db->count_all($this->reference)+1;
		$encrypted_reference = $this->encryption->encrypt($id.$this->session->userdata['userdata']['firstName'].$this->session->userdata['userdata']['lastName']);
		$reference_number = strtoupper(substr($encrypted_reference, 0, 10));

		$fields = array(
			'userId' => $this->encryption->decrypt($this->session->userdata['userdata']['userId']),
			'referenceNum' => $reference_number,
			);
		$this->db->insert($this->reference, $fields);

		return $reference_number;
	}
}//END OF CLASS