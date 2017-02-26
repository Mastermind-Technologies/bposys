<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_m extends CI_Model {

	private $line_of_business = 'line_of_businesses';
	private $amusement_devices = 'fee_amusement_devices';
	private $bowling_alleys = 'fee_bowling_alley';
	private $common_enterprise = 'fee_common_enterprise';
	private $environmental_clearance = 'fee_environmental_clearance_conditions';
	private $financial_institution = 'fee_financial_institution';
	private $fixed_fees = 'fee_fixed';
	private $golf_link = 'fee_golf_link';
	private $sanitary_permit = 'fee_sanitary_permit';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_line_of_businesses($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->line_of_business)->order_by('name','asc');
		$result = $this->db->get();

		return $result->result();
	}

	public function get_bowling_alley_fee($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->bowling_alleys)->limit(1);
		$result = $this->db->get();

		return $result->result()[0];
	}

	public function get_all_environmental_conditions($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->environmental_clearance);
		$result = $this->db->get();

		return $result->result();
	}

	public function get_sanitary_fee($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->sanitary_permit)->limit(1);
		$result = $this->db->get();

		return $result->result()[0];
	}

	public function get_all_fixed_fees($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->fixed_fees);
		$result = $this->db->get();

		return $result->result();
	}

	public function get_financial_institution_fees($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->financial_institution);
		$result = $this->db->get();

		return $result->result();
	}

	public function get_golf_link_fees($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->golf_link)->order_by('above','asc');
		$result = $this->db->get();

		return $result->result();
	}

	public function get_common_enterprise($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->common_enterprise);
		$this->db->join($this->line_of_business, 'fee_common_enterprise.lineOfBusinessId = line_of_businesses.lineOfBusinessId');
		$result = $this->db->get();

		return $result->result();
	}

	public function get_all_amusement_devices($query = null)
	{
		if($query != null)
			$this->db->where($query);
		$this->db->select('*')->from($this->amusement_devices);
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_line_of_business($fields)
	{
		$this->db->insert($this->line_of_business, $fields);
	}

	public function insert_amusement_device($fields)
	{
		$this->db->insert($this->amusement_devices, $fields);
	}

	public function update_bowling_alley($fields)
	{
		$this->db->update($this->bowling_alleys, $fields);
	}

	public function insert_common_enterprise($fields)
	{
		$this->db->insert($this->common_enterprise, $fields);
	}

	public function insert_environmental_clearance($fields)
	{
		$this->db->insert($this->environmental_clearance, $fields);
	}

	// public function insert_financial_institution($fields)
	// {
	// 	$this->db->insert($this->financial_institution, $fields);
	// }

	public function update_financial_institution_fee($scale, $fields)
	{
		$this->db->where('scale',$scale);
		$this->db->update($this->financial_institution, $fields);
	}

	public function insert_fixed_fees($fields)
	{
		$this->db->insert($this->fixed_fees, $fields);
	}

	public function insert_golf_link($fields)
	{
		$this->db->insert($this->golf_link, $fields);
	}

	public function update_sanitary_fees($fields)
	{
		$this->db->update($this->sanitary_permit, $fields);
	}


}//END OF CLASS