<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BPLO_Application extends Business {

	private $applicationId = null;
	private $referenceNum = null;
	private $userId = null;
	private $taxYear = null;
    private $businessId = null;
	private $applicationDate = null;
    private $modeOfPayment = null;
    private $idPresented = null;
	private $DTISECCDA_RegNum = null;
	private $DTISECCDA_Date = null;
    private $brgyClearanceDateIssued = null;
	private $CTCNum = null;
	private $TIN = null;
	private $entityName = null;
	private $status = null;
	private $businessActivities = null;
	private $lessors = null;
	private $dateStarted = null;
    private $dateIssued = null;
    private $applicationType = null;
	
	public function __construct($reference_num = null){
		$this->CI =& get_instance();
		$this->CI->load->model('Application_m');
        $this->CI->load->model('Approval_m');
		$this->CI->load->model('Business_Activity_m');
		$this->CI->load->model('Lessor_m');
		$this->CI->load->model('Notification_m');
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

		$application = $this->CI->Application_m->get_all_bplo_applications($query);
        if(count($application) > 0)
        {
            $this->set_application_all($application[0]);
            $this->get_business_information($application[0]->businessId);        
        }
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
		$this->CI->Application_m->update_application($query, 'bplo');
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
        $var->Application_m->update_application($query, 'bplo');
        unset($var);
    }

    // public static function check_status($reference_num)
    // {
    //     $var = get_instance();
    //     $status = $var->Application_m->check_status($reference_num, 'bplo');
    //     return $status;
    // }

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
                'role' => 4,
                'type' => 'Issue',
                );
            $approval = $this->CI->Approval_m->get_latest_approval($query);
			//if this year is greater than application date, expire application
			if(date('Y') > date('Y', strtotime($approval[0]->createdAt)))
			{
				$reference_num = $this->CI->encryption->decrypt($this->referenceNum);
				$this->change_status($reference_num, 'Expired');
				$this->status = 'Expired';
				$query = array(
					'referenceNum' => $reference_num,
					'status' => 'Unread',
					'role' => '3',
					'notifMessage' => $this->businessName . " application has expired, please check application details for renewal request.",
					);
				$var = get_instance();
				$var->Notification_m->insert($query);
				unset($var);
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

		$query['bploId'] = $param->applicationId;
		$lessors = $this->CI->Lessor_m->get_all_lessor($query);
		$business_activities = $this->CI->Business_Activity_m->get_all_business_activity($query);

		unset($query);

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
        $this->businessId = $this->CI->encryption->encrypt($param->businessId);
		$this->taxYear = $param->taxYear;
		$this->applicationDate = $param->applicationDate;
        $this->modeOfPayment = $param->modeOfPayment;
        $this->idPresented = $param->idPresented;
		$this->DTISECCDA_RegNum = $param->DTISECCDA_RegNum;
		$this->DTISECCDA_Date = $param->DTISECCDA_Date;
        $this->brgyClearanceDateIssued = $param->brgyClearanceDateIssued;
		$this->CTCNum = $param->CTCNum;
		$this->TIN = $param->TIN;
		$this->entityName = $param->entityName;
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
    }

    /**
     * get_s the value of referenceNum.
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
    }

    /**
     * get_s the value of userId.
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
    }

    /**
     * get_s the value of taxYear.
     *
     * @return mixed
     */
    public function get_TaxYear()
    {
        return $this->taxYear;
    }

    /**
     * Sets the value of taxYear.
     *
     * @param mixed $taxYear the tax year
     *
     * @return self
     */
    public function set_TaxYear($taxYear)
    {
        $this->taxYear = $taxYear;
    }

    /**
     * get_s the value of applicationDate.
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
    }

    /**
     * get_s the value of DTISECCDA_RegNum.
     *
     * @return mixed
     */
    public function get_DTISECCDARegNum()
    {
        return $this->DTISECCDA_RegNum;
    }

    /**
     * Sets the value of DTISECCDA_RegNum.
     *
     * @param mixed $DTISECCDA_RegNum the reg num
     *
     * @return self
     */
    public function set_DTISECCDARegNum($DTISECCDA_RegNum)
    {
        $this->DTISECCDA_RegNum = $DTISECCDA_RegNum;
    }

    /**
     * get_s the value of DTISECCDA_Date.
     *
     * @return mixed
     */
    public function get_DTISECCDADate()
    {
        return $this->DTISECCDA_Date;
    }

    /**
     * Sets the value of DTISECCDA_Date.
     *
     * @param mixed $DTISECCDA_Date the date
     *
     * @return self
     */
    public function set_DTISECCDADate($DTISECCDA_Date)
    {
        $this->DTISECCDA_Date = $DTISECCDA_Date;
    }

    /**
     * get_s the value of CTCNum.
     *
     * @return mixed
     */
    public function get_CTCNum()
    {
        return $this->CTCNum;
    }

    /**
     * Sets the value of CTCNum.
     *
     * @param mixed $CTCNum the cnum
     *
     * @return self
     */
    public function set_CTCNum($CTCNum)
    {
        $this->CTCNum = $CTCNum;
    }

    /**
     * get_s the value of TIN.
     *
     * @return mixed
     */
    public function get_TIN()
    {
        return $this->TIN;
    }

    /**
     * Sets the value of TIN.
     *
     * @param mixed $TIN the 
     *
     * @return self
     */
    public function set_TIN($TIN)
    {
        $this->TIN = $TIN;
    }

    /**
     * get_s the value of entityName.
     *
     * @return mixed
     */
    public function get_EntityName()
    {
        return $this->entityName;
    }

    /**
     * Sets the value of entityName.
     *
     * @param mixed $entityName the entity name
     *
     * @return self
     */
    public function set_EntityName($entityName)
    {
        $this->entityName = $entityName;
    }

    /**
     * get_s the value of status.
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
    }

    /**
     * get_s the value of businessActivities.
     *
     * @return mixed
     */
    public function get_BusinessActivities()
    {
        return $this->businessActivities;
    }

    /**
     * Sets the value of businessActivities.
     *
     * @param mixed $businessActivities the business activities
     *
     * @return self
     */
    public function set_BusinessActivities($businessActivities)
    {
        $this->businessActivities = $businessActivities;
    }

    /**
     * get_s the value of lessors.
     *
     * @return mixed
     */
    public function get_Lessors()
    {
        return $this->lessors;
    }

    /**
     * Sets the value of lessors.
     *
     * @param mixed $lessors the lessors
     *
     * @return self
     */
    public function set_Lessors($lessors)
    {
        $this->lessors = $lessors;
    }

    /**
     * get_s the value of dateStarted.
     *
     * @return mixed
     */
    public function get_DateStarted()
    {
        return $this->dateStarted;
    }

    /**
     * Sets the value of dateStarted.
     *
     * @param mixed $dateStarted the date started
     *
     * @return self
     */
    public function set_DateStarted($dateStarted)
    {
        $this->dateStarted = $dateStarted;
    }
    public function get_BusinessId()
    {
        return $this->businessId;
    }

    /**
     * Sets the value of businessId.
     *
     * @param mixed $businessId the date started
     *
     * @return self
     */
    public function set_BusinessId($businessId)
    {
        $this->businessId = $businessId;
    }
    public function get_BrgyClearanceDateIssued()
    {
        return $this->brgyClearanceDateIssued;
    }

    /**
     * Sets the value of brgyClearanceDateIssued.
     *
     * @param mixed $brgyClearanceDateIssued the date started
     *
     * @return self
     */
    public function set_BrgyClearanceDateIssued($brgyClearanceDateIssued)
    {
        $this->brgyClearanceDateIssued = $brgyClearanceDateIssued;
    }

    /**
     * Gets the value of data_issued.
     *
     * @return mixed
     */
    public function getDataIssued()
    {
        return $this->data_issued;
    }

    /**
     * Sets the value of data_issued.
     *
     * @param mixed $data_issued the data issued
     *
     * @return self
     */
    private function _setDataIssued($data_issued)
    {
        $this->data_issued = $data_issued;

        return $this;
    }

    /**
     * Gets the value of date_issued.
     *
     * @return mixed
     */
    public function get_DateIssued()
    {
        return $this->date_issued;
    }

    /**
     * Sets the value of date_issued.
     *
     * @param mixed $date_issued the date issued
     *
     * @return self
     */
    public function set_DateIssued($date_issued)
    {
        $this->date_issued = $date_issued;

        return $this;
    }

    /**
     * Gets the value of modeOfPayment.
     *
     * @return mixed
     */
    public function get_ModeOfPayment()
    {
        return $this->modeOfPayment;
    }

    /**
     * Sets the value of modeOfPayment.
     *
     * @param mixed $modeOfPayment the mode of payment
     *
     * @return self
     */
    public function set_ModeOfPayment($modeOfPayment)
    {
        $this->modeOfPayment = $modeOfPayment;

        return $this;
    }

    /**
     * Gets the value of idPresented.
     *
     * @return mixed
     */
    public function get_IdPresented()
    {
        return $this->idPresented;
    }

    /**
     * Sets the value of idPresented.
     *
     * @param mixed $idPresented the id presented
     *
     * @return self
     */
    public function set_IdPresented($idPresented)
    {
        $this->idPresented = $idPresented;

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
}//END OF CLASS