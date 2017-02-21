<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BFP_Application extends Business {

	private $applicationId = null;
	private $referenceNum = null;
	private $userId = null;
    private $businessId = null;
    private $storeys = null;
    private $applicationDate = null;
    private $areaPerFloor = null;
    private $occupiedPortion = null;
    private $occupancyPermitNum = null;
	private $status = null;
    private $lineOfBusiness = null;
    private $applicationType = null;
    private $requirements = null;
	
	public function __construct($reference_num = null){
		$this->CI =& get_instance();
        $this->CI->load->model('Approval_m');
		$this->CI->load->model('Application_m');
		$this->CI->load->model('Notification_m');
        $this->CI->load->model('Business_Activity_m');
        $this->CI->load->model('Requirement_m');
        $this->CI->load->model('Renewal_m');

        $isExisting = $this->CI->Renewal_m->check_application($reference_num);

        if($isExisting)
        {
            $this->applicationType = "Renew";
        }
        else
        {
            $this->applicationType = "New";
        }

		if(isset($reference_num))
			return $this->get_application($reference_num);
	}

	public function get_application($reference_num = null)
	{
		$query['referenceNum'] = $reference_num;

		$application = $this->CI->Application_m->get_all_bfp_applications($query);
        if(count($application) > 0)
        {
          $this->set_application_all($application[0]);
          if($application[0]->businessId != null)
              $this->get_business_information($application[0]->businessId);
        }
      $this->unset_CI();
      return $this;
    }

	public function change_status($reference_num = null, $status = null)
	{
		$this->CI =& get_instance();
		$query = array(
			'referenceNum' => $reference_num,
			'status' => $status,
			);
		$this->CI->Application_m->update_application($query, 'bfp');
		$this->status = $status;
		$this->unset_CI();
	}

    public static function update_status($reference_num = null, $status = null)
    {
        $var = get_instance();
        $query = array(
            'referenceNum' => $reference_num,
            'status' => $status,
            );
        $var->Application_m->update_application($query, 'bfp');
        // $query = array(
        //     'referenceNum' => $reference_num,
        //     );
        // $var->Approval_m->
        unset($var);
    }

    public function check_expiry()
    {
        if(!isset($this->CI))
             $this->CI =& get_instance();
    		//check if status is active
         if($this->status == 'Active')
         {
            $reference_num = $this->CI->encryption->decrypt($this->referenceNum);
            $query = array(
                'referenceNum' => $reference_num,
                'role' => 5,
                'type' => 'Approve',
                );
            $approval = $this->CI->Approval_m->get_latest_approval($query);
                //if this year is greater than application date, expire application
            if(date('Y') > date('Y', strtotime($approval[0]->createdAt)))
            {
                $reference_num = $this->CI->encryption->decrypt($this->referenceNum);
                $this->change_status($reference_num, 'Expired');
                $this->status = 'Expired';
            }
        }
        $this->unset_CI();
    }

	public function set_application_all($param = null)
	{
        $line_of_business = $this->CI->Business_Activity_m->get_all_business_activity_by_reference_num($param->referenceNum);
        if(count($line_of_business) > 0)
        $line_of_business = $line_of_business[0]->lineOfBusiness;
		if(!isset($this->CI))
			$this->CI =& get_instance();
        $this->applicationId = $this->CI->encryption->encrypt($param->applicationId);
        $this->referenceNum = $this->CI->encryption->encrypt($param->referenceNum);
        $this->businessId = $this->CI->encryption->encrypt($param->businessId);
        $this->userId = $this->CI->encryption->encrypt($param->userId);
        $this->storeys = $param->storeys;
        $this->applicationDate = $param->applicationDate;
        $this->areaPerFloor = $param->areaPerFloor;
        $this->occupiedPortion = $param->occupiedPortion;
        $this->occupancyPermitNum = $param->occupancyPermitNum;
        $this->status = $param->status;
        $this->lineOfBusiness = $line_of_business;
        $this->requirements = $this->CI->Requirement_m->get_requirements(5);
		$this->unset_CI();
		return $this;
	}
    
   

   

    /**
     * Gets the value of applicationId.
     *
     * @return mixed
     */
    public function get_ApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Sets the value of applicationId.
     *
     * @param mixed $applicationId the application id
     *
     * @return self
     */
    public function set_ApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Gets the value of referenceNum.
     *
     * @return mixed
     */
    public function get_ReferenceNum()
    {
        return $this->referenceNum;
    }

    /**
     * Sets the value of referenceNum.
     *
     * @param mixed $referenceNum the reference num
     *
     * @return self
     */
    public function set_ReferenceNum($referenceNum)
    {
        $this->referenceNum = $referenceNum;

        return $this;
    }

    /**
     * Gets the value of userId.
     *
     * @return mixed
     */
    public function get_UserId()
    {
        return $this->userId;
    }

    /**
     * Sets the value of userId.
     *
     * @param mixed $userId the user id
     *
     * @return self
     */
    public function set_UserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Gets the value of businessId.
     *
     * @return mixed
     */
    public function get_BusinessId()
    {
        return $this->businessId;
    }

    /**
     * Sets the value of businessId.
     *
     * @param mixed $businessId the business id
     *
     * @return self
     */
    public function set_BusinessId($businessId)
    {
        $this->businessId = $businessId;

        return $this;
    }

    /**
     * Gets the value of storeys.
     *
     * @return mixed
     */
    public function get_Storeys()
    {
        return $this->storeys;
    }

    /**
     * Sets the value of storeys.
     *
     * @param mixed $storeys the storeys
     *
     * @return self
     */
    public function set_Storeys($storeys)
    {
        $this->storeys = $storeys;

        return $this;
    }

    /**
     * Gets the value of applicationDate.
     *
     * @return mixed
     */
    public function get_ApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Sets the value of applicationDate.
     *
     * @param mixed $applicationDate the application date
     *
     * @return self
     */
    public function set_ApplicationDate($applicationDate)
    {
        $this->applicationDate = $applicationDate;

        return $this;
    }

    /**
     * Gets the value of areaPerFloor.
     *
     * @return mixed
     */
    public function get_AreaPerFloor()
    {
        return $this->areaPerFloor;
    }

    /**
     * Sets the value of areaPerFloor.
     *
     * @param mixed $areaPerFloor the area per floor
     *
     * @return self
     */
    public function set_AreaPerFloor($areaPerFloor)
    {
        $this->areaPerFloor = $areaPerFloor;

        return $this;
    }

    /**
     * Gets the value of occupiedPortion.
     *
     * @return mixed
     */
    public function get_OccupiedPortion()
    {
        return $this->occupiedPortion;
    }

    /**
     * Sets the value of occupiedPortion.
     *
     * @param mixed $occupiedPortion the occupied portion
     *
     * @return self
     */
    public function set_OccupiedPortion($occupiedPortion)
    {
        $this->occupiedPortion = $occupiedPortion;

        return $this;
    }

    /**
     * Gets the value of occupancyPermitNum.
     *
     * @return mixed
     */
    public function get_OccupancyPermitNum()
    {
        return $this->occupancyPermitNum;
    }

    /**
     * Sets the value of occupancyPermitNum.
     *
     * @param mixed $occupancyPermitNum the occupancy permit num
     *
     * @return self
     */
    public function set_OccupancyPermitNum($occupancyPermitNum)
    {
        $this->occupancyPermitNum = $occupancyPermitNum;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return mixed
     */
    public function get_Status()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param mixed $status the status
     *
     * @return self
     */
    public function set_Status($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of applicationType.
     *
     * @return mixed
     */
    public function get_ApplicationType()
    {
        return $this->applicationType;
    }

    /**
     * Sets the value of applicationType.
     *
     * @param mixed $applicationType the application type
     *
     * @return self
     */
    public function set_ApplicationType($applicationType)
    {
        $this->applicationType = $applicationType;

        return $this;
    }

    /**
     * Gets the value of lineOfBusiness.
     *
     * @return mixed
     */
    public function get_LineOfBusiness()
    {
        return $this->lineOfBusiness;
    }

    /**
     * Sets the value of lineOfBusiness.
     *
     * @param mixed $lineOfBusiness the line of business
     *
     * @return self
     */
    public function set_LineOfBusiness($lineOfBusiness)
    {
        $this->lineOfBusiness = $lineOfBusiness;

        return $this;
    }

    /**
     * Gets the value of requirements.
     *
     * @return mixed
     */
    public function get_Requirements()
    {
        return $this->requirements;
    }

    /**
     * Sets the value of requirements.
     *
     * @param mixed $requirements the requirements
     *
     * @return self
     */
    private function set_Requirements($requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }
}//END OF CLASS