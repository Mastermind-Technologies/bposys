<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Zoning_Application extends Business {

	private $applicationId = null;
	private $referenceNum = null;
	private $userId = null;
    private $businessId = null;
    private $capitalInvested = null;
	private $status = null;
	
	public function __construct($reference_num = null){
		$this->CI =& get_instance();
		$this->CI->load->model('Application_m');
		$this->CI->load->model('Notification_m');
		if(isset($reference_num))
			return $this->get_application($reference_num);
	}

	public function get_application($reference_num = null)
	{
		$query['referenceNum'] = $reference_num;

		$application = $this->CI->Application_m->get_all_zoning_applications($query);
		$this->set_application_all($application[0]);
		$this->get_business_information($application[0]->businessId);
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
		$this->CI->Application_m->update_application($query, 'zoning');
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
        $var->Application_m->update_application($query, 'zoning');
        unset($var);
    }

	public function check_expiry()
	{
		if(!isset($this->CI))
			$this->CI =& get_instance();
		//check if status is active
		if($this->status == 'Active')
		{
			//if this year is greater than application date, expire application
			if(date('Y') > date('Y', strtotime($this->applicationDate)))
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
		if(!isset($this->CI))
			$this->CI =& get_instance();

		$this->applicationId = $this->CI->encryption->encrypt($param->applicationId);
		$this->referenceNum = $this->CI->encryption->encrypt($param->referenceNum);
		$this->userId = $this->CI->encryption->encrypt($param->userId);
        $this->businessId = $this->CI->encryption->encrypt($param->businessId);
        $this->capitalInvested = $param->capitalInvested;
		$this->status = $param->status;

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

    public function get_CapitalInvested()
    {
        return $this->capitalInvested;
    }

    /**
     * Sets the value of capitalInvested.
     *
     * @param mixed $capitalInvested the date started
     *
     * @return self
     */
    public function set_CapitalInvested($capitalInvested)
    {
        $this->capitalInvested = $capitalInvested;
    }
}//END OF CLASS