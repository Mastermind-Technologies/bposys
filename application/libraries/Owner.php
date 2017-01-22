<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner {

	private $ownerId = null;
	private $firstName = null;
	private $middleName = null;
	private $lastName = null;
	private $owner_houseBldgNo = null;
	private $owner_bldgName = null;
	private $owner_unitNum = null;
	private $owner_street = null;
	private $owner_barangay = null;
	private $owner_subdivision = null;
	private $owner_cityMunicipality = null;
	private $owner_province = null;
	private $owner_contactNum = null;
	private $owner_telNum = null;

	public function __construct($owner_id = null)
	{
		$this->CI =& get_instance();
		$this->CI->load->model('Owner_m');
		if(isset($owner_id))
			return $this->get_owner_information($owner_id);
	}

	public function get_owner_information($id = null)
	{
		$query['ownerId'] = $id;
		$result = $this->CI->Owner_m->get_all_owners($query);
		$this->set_owner_all($result[0]);

		$this->unset_CI();
		return $this;
	}

	public function set_owner_all($param = null)
	{
		if(!isset($this->CI))
			$this->CI =& get_instance();
		$this->ownerId = $this->CI->encryption->encrypt($param->ownerId);
		$this->firstName = $param->firstName;
		$this->middleName = $param->middleName;
		$this->lastName = $param->lastName;
		$this->owner_houseBldgNo = $param->houseBldgNo;
		$this->owner_bldgName = $param->bldgName;
		$this->owner_unitNum = $param->unitNum;
		$this->owner_street = $param->street;
		$this->owner_barangay = $param->barangay;
		$this->owner_subdivision = $param->subdivision;
		$this->owner_cityMunicipality = $param->cityMunicipality;
		$this->owner_province = $param->province;
		$this->owner_contactNum = $param->contactNum;
		$this->owner_telNum = $param->telNum;

		$this->unset_CI();
		return $this;
	}

	protected function unset_CI()
	{
		if(isset($this->CI))
			unset($this->CI);
	}



    /**
     * Gets the value of ownerId.
     *
     * @return mixed
     */
    public function get_OwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Sets the value of ownerId.
     *
     * @param mixed $ownerId the owner id
     *
     * @return self
     */
    private function set_OwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
    }

    /**
     * get_s the value of firstName.
     *
     * @return mixed
     */
    public function get_FirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the value of firstName.
     *
     * @param mixed $firstName the first name
     *
     * @return self
     */
    private function set_FirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * get_s the value of middleName.
     *
     * @return mixed
     */
    public function get_MiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets the value of middleName.
     *
     * @param mixed $middleName the middle name
     *
     * @return self
     */
    private function set_MiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * get_s the value of lastName.
     *
     * @return mixed
     */
    public function get_LastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the value of lastName.
     *
     * @param mixed $lastName the last name
     *
     * @return self
     */
    private function set_LastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * get_s the value of owner_houseBldgNo.
     *
     * @return mixed
     */
    public function get_OwnerHouseBldgNo()
    {
        return $this->owner_houseBldgNo;
    }

    /**
     * Sets the value of owner_houseBldgNo.
     *
     * @param mixed $owner_houseBldgNo the owner house bldg no
     *
     * @return self
     */
    private function set_OwnerHouseBldgNo($owner_houseBldgNo)
    {
        $this->owner_houseBldgNo = $owner_houseBldgNo;
    }

    /**
     * get_s the value of owner_bldgName.
     *
     * @return mixed
     */
    public function get_OwnerBldgName()
    {
        return $this->owner_bldgName;
    }

    /**
     * Sets the value of owner_bldgName.
     *
     * @param mixed $owner_bldgName the owner bldg name
     *
     * @return self
     */
    private function set_OwnerBldgName($owner_bldgName)
    {
        $this->owner_bldgName = $owner_bldgName;
    }

    /**
     * get_s the value of owner_unitNum.
     *
     * @return mixed
     */
    public function get_OwnerUnitNum()
    {
        return $this->owner_unitNum;
    }

    /**
     * Sets the value of owner_unitNum.
     *
     * @param mixed $owner_unitNum the owner unit num
     *
     * @return self
     */
    private function set_OwnerUnitNum($owner_unitNum)
    {
        $this->owner_unitNum = $owner_unitNum;
    }

    /**
     * get_s the value of owner_street.
     *
     * @return mixed
     */
    public function get_OwnerStreet()
    {
        return $this->owner_street;
    }

    /**
     * Sets the value of owner_street.
     *
     * @param mixed $owner_street the owner street
     *
     * @return self
     */
    private function set_OwnerStreet($owner_street)
    {
        $this->owner_street = $owner_street;
    }

    /**
     * get_s the value of owner_barangay.
     *
     * @return mixed
     */
    public function get_OwnerBarangay()
    {
        return $this->owner_barangay;
    }

    /**
     * Sets the value of owner_barangay.
     *
     * @param mixed $owner_barangay the owner barangay
     *
     * @return self
     */
    private function set_OwnerBarangay($owner_barangay)
    {
        $this->owner_barangay = $owner_barangay;
    }

    /**
     * get_s the value of owner_subdivision.
     *
     * @return mixed
     */
    public function get_OwnerSubdivision()
    {
        return $this->owner_subdivision;
    }

    /**
     * Sets the value of owner_subdivision.
     *
     * @param mixed $owner_subdivision the owner subdivision
     *
     * @return self
     */
    private function set_OwnerSubdivision($owner_subdivision)
    {
        $this->owner_subdivision = $owner_subdivision;
    }

    /**
     * get_s the value of owner_cityMunicipality.
     *
     * @return mixed
     */
    public function get_OwnerCityMunicipality()
    {
        return $this->owner_cityMunicipality;
    }

    /**
     * Sets the value of owner_cityMunicipality.
     *
     * @param mixed $owner_cityMunicipality the owner city municipality
     *
     * @return self
     */
    private function set_OwnerCityMunicipality($owner_cityMunicipality)
    {
        $this->owner_cityMunicipality = $owner_cityMunicipality;
    }

    /**
     * get_s the value of owner_province.
     *
     * @return mixed
     */
    public function get_OwnerProvince()
    {
        return $this->owner_province;
    }

    /**
     * Sets the value of owner_province.
     *
     * @param mixed $owner_province the owner province
     *
     * @return self
     */
    private function set_OwnerProvince($owner_province)
    {
        $this->owner_province = $owner_province;
    }

    /**
     * get_s the value of owner_contactNum.
     *
     * @return mixed
     */
    public function get_OwnerContactNum()
    {
        return $this->owner_contactNum;
    }

    /**
     * Sets the value of owner_contactNum.
     *
     * @param mixed $owner_contactNum the owner contact num
     *
     * @return self
     */
    private function set_OwnerContactNum($owner_contactNum)
    {
        $this->owner_contactNum = $owner_contactNum;
    }

    /**
     * get_s the value of owner_telNum.
     *
     * @return mixed
     */
    public function get_OwnerTelNum()
    {
        return $this->owner_telNum;
    }

    /**
     * Sets the value of owner_telNum.
     *
     * @param mixed $owner_telNum the owner tel num
     *
     * @return self
     */
    private function set_OwnerTelNum($owner_telNum)
    {
        $this->owner_telNum = $owner_telNum;
    }
}//END OF CLASS
