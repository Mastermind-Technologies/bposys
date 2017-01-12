<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User {
	private $userId = null;
	private $firstName = null;
	private $lastName = null;
	private $middleName = null;
	private $role = null;
	private $suffix = null;
	private $gender = null;
	private $civilStatus = null;
	private $email = null;
	private $birthDate = null;

	public function __construct($userId = null){
		$this->CI =& get_instance();
		$this->CI->load->model('User_m');
		if(isset($userId))
			return $this->get_information($userId);
	}

	//SETTERS
	public function set_userId($param = null)
	{
		$this->userId = $param;
	}

	public function set_firstName($param = null)
	{
		$this->firstName = $param;
	}

	public function set_lastName($param = null)
	{
		$this->lastName = $param;
	}

	public function set_middleName($param = null)
	{
		$this->middleName = $param;
	}

	public function set_role($param = null)
	{
		$this->role = $param;
	}

	public function set_suffix($param = null)
	{
		$this->suffix = $param;
	}

	public function set_gender($param = null)
	{
		$this->gender = $param;
	}

	public function set_civilStatus($param = null)
	{
		$this->civilStatus = $param;
	}

	public function set_email($param = null)
	{
		$this->email = $param;
	}

	public function set_birthDate($param = null)
	{
		$this->birthDate = $param;
	}

	//GETTERS
	public function get_userId()
	{
		return $this->userId;
	}

	public function get_firstName()
	{
		return $this->firstName;
	}

	public function get_lastName()
	{
		return $this->lastName;
	}

	public function get_middleName()
	{
		return $this->middleName;
	}

	public function get_role()
	{
		return $this->role;
	}

	public function get_suffix()
	{
		return $this->suffix;
	}

	public function get_gender()
	{
		return $this->gender;
	}

	public function get_civilStatus()
	{
		return $this->civilStatus;
	}

	public function get_email()
	{
		return $this->email;
	}

	public function get_birthDate()
	{
		return $this->birthDate;
	}

	protected function get_information($id = null)
	{
		$query['userId'] = $id;
		$result = $this->CI->User_m->get_all_users($query);

		$this->set_user_all($result[0]);

		$this->unset_CI();
		return $this;
	}

	public static function get_notifications()
	{
		$var = get_instance();
		//optional:
		//role
		//userId
		$role = $var->encryption->decrypt($var->session->userdata['userdata']['role']);

		$role_id = $var->Role_m->get_roleId($role);
		$role_id = $role_id->roleId;

		if($role_id == 3)
		{
			$query = array(
				'userId' => $var->encryption->decrypt($var->session->userdata['userdata']['userId']),
				);
			$applications = $var->Application_m->get_all_applications($query);
			//get applicant notifications
			foreach($applications as $application)
			{
				$query = array(
					'referenceNum' => $application->referenceNum,
					'status' => "Unread",
					'role' => 3,
					);
				$notification = $var->Notification_m->get_all($query);
				if($notification != null)
				{
					foreach ($notification as $value) {
						$nav_data[] = $value;
					}
				}
			}

			unset($var);
			return isset($nav_data) ? $nav_data : "";
		}
		else
		{
			$query = array(
				'status' => "Unread",
				'role' => $role_id,
				);
			$data = $var->Notification_m->get_all($query);
			return $data;
		}

	}

	// public function register($query = null)
	// {
	// 	$response = $this->CI->User_m->register_user($query);

	// 	$this->unset_CI();
	// 	return $response;
	// }

	protected function set_user_all($param = null)
	{
		if(!isset($this->CI))
			$this->CI =& get_instance();
		$role = "";
		switch($param->role)
		{
			case 1: $role = "Master Admin"; break;
			case 2: $role = "User Admin"; break;
			case 3: $role = "Applicant"; break;
			case 4: $role = "BPLO"; break;
		}

		$this->userId = $this->CI->encryption->encrypt($param->userId);
		$this->firstName = $param->firstName;
		$this->middleName = $param->middleName;
		$this->lastName = $param->lastName;
		$this->role = $role;
		$this->suffix = $param->suffix;
		$this->gender = $param->gender;
		$this->civilStatus = $param->civilStatus;
		$this->email = $param->email;
		$this->birthDate = $param->birthDate;

		$this->unset_CI();
		return $this;
	}

	protected function unset_CI()
	{
		if(isset($this->CI))
			unset($this->CI);
	}
}