<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends User {

	private $ownerId = null;
	private $houseBldgNo = null;
	private $bldgName = null;
	private $unitNum = null;
	private $street = null;
	private $barangay = null;
	private $subdivision = null;
	private $cityMunicipality = null;
	private $province = null;
	private $contactNum = null;
	private $telNum = null;
	private $businessArea = null;
	private $numOfEmployeesLGU = null;

	public function __construct($id = null)
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Owner_m');
		if(isset($id))
			return $this->get_information($id);
	}

	//SETTER
	public function set_ownerId($param = null)
	{
		$this->ownerId = $param;
	}

	public function set_houseBldgNo($param = null)
	{
		$this->houseBldgNo = $param;
	}

	public function set_bldgName($param = null)
	{
		$this->bldgName = $param;
	}

	public function set_unitNum($param = null)
	{
		$this->unitNum = $param;
	}

	public function set_street($param = null)
	{
		$this->street = $param;
	}

	public function set_barangay($param = null)
	{
		$this->barangay = $param;
	}

	public function set_subdivision($param = null)
	{
		$this->subdivision = $param;
	}

	public function set_cityMunicipality($param = null)
	{
		$this->cityMunicipality = $param;
	}

	public function set_province($param = null)
	{
		$this->province = $param;
	}

	public function set_contactNum($param = null)
	{
		$this->contactNum = $param;
	}

	public function set_telNum($param = null)
	{
		$this->telNum = $param;	
	}

	public function set_businessArea($param = null)
	{
		$this->businessArea = $param;	
	}

	public function set_numOfEmployeesLGU($param = null)
	{
		$this->numOfEmployeesLGU = $param;	
	}

	//GETTER
	public function get_userId()
	{
		return $this->userId;
	}

	public function get_ownerId()
	{
		return $this->ownerId;
	}

	public function get_houseBldgNo()
	{
		return $this->houseBldgNo;
	}

	public function get_bldgName()
	{
		return $this->bldgName;
	}

	public function get_unitNum()
	{
		return $this->unitNum;
	}

	public function get_street()
	{
		return $this->street;
	}

	public function get_barangay()
	{
		return $this->barangay;
	}

	public function get_subdivision()
	{
		return $this->subdivision;
	}

	public function get_cityMunicipality()
	{
		return $this->cityMunicipality;
	}

	public function get_province()
	{
		return $this->province;
	}

	public function get_contactNum()
	{
		return $this->contactNum;
	}

	public function get_telNum()
	{
		return $this->telNum;	
	}

	public function get_businessArea()
	{
		return $this->businessArea;	
	}

	public function get_numOfEmployeesLGU()
	{
		return $this->numOfEmployeesLGU;	
	}

	public function get_information($id = null)
	{
		$query['users.userId'] = $id;
		$result = $this->CI->Owner_m->get_all_owner($query);
		$this->set_user_all($result[0]);
		$this->set_owner_all($result[0]);

		$this->unset_CI();
		return $this;
	}

	public function set_owner_all($param = null)
	{
		if(!isset($this->CI))
			$this->CI =& get_instance();
		$this->ownerId = $this->CI->encryption->encrypt($param->ownerId);
		$this->houseBldgNo = $param->houseBldgNo;
		$this->bldgName = $param->bldgName;
		$this->unitNum = $param->unitNum;
		$this->street = $param->street;
		$this->barangay = $param->barangay;
		$this->subdivision = $param->subdivision;
		$this->cityMunicipality = $param->cityMunicipality;
		$this->province = $param->province;
		$this->contactNum = $param->contactNum;
		$this->telNum = $param->telNum;
		$this->businessArea = $param->businessArea;
		$this->numOfEmployeesLGU = $param->numOfEmployeesLGU;

		$this->unset_CI();
	}
}
