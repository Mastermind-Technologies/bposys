<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Application {
	private $applicationId = null;
	private $referenceNum = null;
	private $userId = null;
	private $taxYear = null;
	private $applicationDate = null;
	private $DTISECCDA_RegNum = null;
	private $DTISECCDA_Date = null;
	private $typeOfOrganization = null;
	private $CTCNum = null;
	private $TIN = null;
	private $entityName = null;
	private $taxPayerName = null;
	private $businessName = null;
	private $tradeName = null;
	private $presidentTreasurerName = null;
	private $houseBldgNum = null;
	private $unitNum = null;
	private $street = null;
	private $barangay = null;
	private $subdivision = null;
	private $cityMunicipality = null;
	private $province = null;
	private $telNum = null;
	private $email = null;
	private $PIN = null;
	private $numOfEmployees = null;
	private $status = null;
	private $businessActivities = null;
	private $lessors = null;
	private $dateStarted = null;
	
	public function __construct($reference_num = null){
		$this->CI =& get_instance();
		$this->CI->load->model('Application_m');
		$this->CI->load->model('Business_Activity_m');
		$this->CI->load->model('Lessor_m');
		if(isset($reference_num))
			return $this->get_application($reference_num);
	}

	//SETTERS
	public function set_applicationId($param = null)
	{
		$this->applicationId = $param;
	}

	public function set_referenceNum($param = null)
	{
		$this->referenceNum = $param;
	}

	public function set_userId($param = null)
	{
		$this->userId = $param;
	}

	public function set_taxYear($param = null)
	{
		$this->taxYear = $param;
	}

	public function set_applicationDate($param = null)
	{
		$this->applicationDate = $param;
	}

	public function set_DTISECCDA_RegNum($param = null)
	{
		$this->DTISECCDA_RegNum = $param;
	}

	public function set_DTISECCDA_Date($param = null)
	{
		$this->DTISECCDA_Date = $param;
	}

	public function set_typeOfOrganization($param = null)
	{
		$this->typeOfOrganization = $param;
	}

	public function set_CTCNum($param = null)
	{
		$this->CTCNum = $param;
	}

	public function set_TIN($param = null)
	{
		$this->TIN = $param;
	}

	public function set_entityName($param = null)
	{
		$this->entityName = $param;
	}

	public function set_taxPayerName($param = null)
	{
		$this->taxPayerName = $param;
	}

	public function set_businessName($param = null)
	{
		$this->businessName = $param;
	}

	public function set_tradeName($param = null)
	{
		$this->tradeName = $param;
	}

	public function set_presidentTreasurerName($param = null)
	{
		$this->presidentTreasurerName = $param;
	}

	public function set_houseBldgNum($param = null)
	{
		$this->houseBldgNum = $param;
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

	public function set_telNum($param = null)
	{
		$this->telNum = $param;
	}

	public function set_email($param = null)
	{
		$this->email = $param;
	}

	public function set_PIN($param = null)
	{
		$this->PIN = $param;
	}

	public function set_numOfEmployees($param = null)
	{
		$this->numOfEmployees = $param;
	}

	public function set_status($param = null)
	{
		$this->status = $param;
	}

	public function set_businessActivities($param = null)
	{
		$this->businessActivities = $param;
	}

	public function set_lessors($param = null)
	{
		$this->lessors = $param;
	}

	public function set_dateStarted($param = null)
	{
		$this->dateStarted = $param;
	}

	//GETTERS
	public function get_applicationId()
	{
		return $this->applicationId;
	}

	public function get_referenceNum()
	{
		return $this->referenceNum;
	}

	public function get_userId()
	{
		return $this->userId;
	}

	public function get_taxYear()
	{
		return $this->taxYear;
	}

	public function get_applicationDate()
	{
		return $this->applicationDate;
	}

	public function get_DTISECCDA_RegNum()
	{
		return $this->DTISECCDA_RegNum;
	}

	public function get_DTISECCDA_Date()
	{
		return $this->DTISECCDA_Date;
	}

	public function get_typeOfOrganization()
	{
		return $this->typeOfOrganization;
	}

	public function get_CTCNum()
	{
		return $this->CTCNum;
	}

	public function get_TIN()
	{
		return $this->TIN;
	}

	public function get_entityName()
	{
		return $this->entityName;
	}

	public function get_taxPayerName()
	{
		return $this->taxPayerName;
	}

	public function get_businessName()
	{
		return $this->businessName;
	}

	public function get_tradeName()
	{
		return $this->tradeName;
	}

	public function get_presidentTreasurerName()
	{
		return $this->presidentTreasurerName;
	}

	public function get_houseBldgNum()
	{
		return $this->houseBldgNum;
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

	public function get_telNum()
	{
		return $this->telNum;
	}

	public function get_email()
	{
		return $this->email;
	}

	public function get_PIN()
	{
		return $this->PIN;
	}

	public function get_numOfEmployees()
	{
		return $this->numOfEmployees;
	}

	public function get_status()
	{
		return $this->status;
	}

	public function get_businessActivities()
	{
		return $this->businessActivities;
	}

	public function get_lessors()
	{
		return $this->lessors;
	}

	public function get_dateStarted()
	{
		return $this->dateStarted;
	}

	public function get_application($reference_num = null)
	{
		$query['referenceNum'] = $reference_num;

		$application = $this->CI->Application_m->get_all_applications($query);
		$this->set_application_all($application[0]);

		$this->unset_CI();
		return $this;
	}

	public function change_status($referenceNum = null, $status = null)
	{
		$this->CI =& get_instance();
		$query = array(
			'referenceNum' => $referenceNum,
			'status' => $status,
			);
		$this->CI->Application_m->update_application($query);
		$this->status = $status;
		$this->unset_CI();
	}

	public function check_expiry()
	{
		$this->CI =& get_instance();
		//check if status is active
		if($this->status == 'Active')
		{
			//if this year is greater than application date, expire application
			if(date('Y') > date('Y', strtotime($this->applicationDate)))
			{
				$this->change_status($this->CI->encryption->decrypt($this->referenceNum), 'Expired');
				$this->status = 'Expired';
			}
		}
		$this->unset_CI();
	}

	public function set_application_all($param = null)
	{
		// echo "<pre>";
		// print_r($param);
		// echo "</pre>";
		// exit();

		if(!isset($this->CI))
			$this->CI =& get_instance();

		$query['referenceNum'] = $param->referenceNum;
		$lessors = $this->CI->Lessor_m->get_all_lessor($query);
		$business_activities = $this->CI->Business_Activity_m->get_all_business_activity($query);

		foreach ($lessors as $lessor) {
			$lessor->lessorId = $this->CI->encryption->encrypt($lessor->lessorId);
			unset($lessor->referenceNum);
		}

		foreach ($business_activities as $business_activity) {
			$business_activity->activityId = $this->CI->encryption->encrypt($business_activity->activityId);
			unset($business_activity->referenceNum);
		}

		$this->applicationId = $this->CI->encryption->encrypt($param->applicationId);
		$this->referenceNum = $this->CI->encryption->encrypt($param->referenceNum);
		$this->userId = $this->CI->encryption->encrypt($param->userId);
		$this->taxYear = $param->taxYear;
		$this->applicationDate = $param->applicationDate;
		$this->DTISECCDA_RegNum = $param->DTISECCDA_RegNum;
		$this->DTISECCDA_Date = $param->DTISECCDA_Date;
		$this->typeOfOrganization = $param->typeOfOrganization;
		$this->CTCNum = $param->CTCNum;
		$this->TIN = $param->TIN;
		$this->entityName = $param->entityName;
		$this->taxPayerName = $param->taxPayerName;
		$this->businessName = $param->businessName;
		$this->tradeName = $param->tradeName;
		$this->presidentTreasurerName = $param->presidentTreasurerName;
		$this->houseBldgNum = $param->houseBldgNum;
		$this->unitNum = $param->unitNum;
		$this->street = $param->street;
		$this->barangay = $param->barangay;
		$this->subdivision = $param->subdivision;
		$this->cityMunicipality = $param->cityMunicipality;
		$this->province = $param->province;
		$this->telNum = $param->telNum;
		$this->email = $param->email;
		$this->PIN = $param->PIN;
		$this->numOfEmployees = $param->numOfEmployees;
		$this->status = $param->status;
		$this->businessActivities = $business_activities;
		$this->dateStarted = $param->createdAt;
		if($lessors != null)
			$this->lessors = $lessors[0];
		else
			unset($this->lessors);
		

		$this->unset_CI();
		return $this;
	}

	protected function unset_CI()
	{
		if(isset($this->CI))
			unset($this->CI);
	}
}