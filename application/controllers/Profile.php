<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->model('Business_m');
		$this->load->library('form_validation');

		$this->load->model('Business_Address_m');
	}

	public function _init()
	{
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
		$this->load->view('templates/sb_admin2/sb_admin2_navbar');
	}

	public function index()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$this->_init();

		$data['user'] = new User($this->encryption->decrypt($this->session->userdata['userdata']['userId']));

		// echo "<pre>";
		// print_r($data['user']);
		// echo "</pre>";
		// exit();


		// $is_registered = $this->Owner_m->check_owner($user_id);
		// if($is_registered)
		// {
		// 	$owner = new Owner($user_id);
		// 	$data['user'] = $owner;
		// }
		// else
		// {
		// 	$user = new User($user_id);
		// 	$data['user'] = $user;
		// }

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
		
		$this->load->view('profile/index', $data);
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			redirect('home');
		}
	}

	public function edit()
	{
		$this->isLogin();
		$this->_init();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		
		$is_registered = $this->Owner_m->check_owner($user_id);
		if($is_registered)
		{
			$owner = new Owner($user_id);
			$data['user'] = $owner;
		}
		else
		{
			$user = new User($user_id);
			$data['user'] = $user;
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();
		
		$this->load->view('profile/edit_profile', $data);
	}

	public function save_edit_info($fields = null)
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('birth-date', 'Birth Date', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('house-bldg-no', 'Civil Status', 'required');
		$this->form_validation->set_rules('bldg-name', 'Building Name', 'required');
		$this->form_validation->set_rules('unit-no', 'Unit Number', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'required');
		$this->form_validation->set_rules('subdivision', 'Subdivision', 'required');
		$this->form_validation->set_rules('city-municipality', 'City/Municipality', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');
		$this->form_validation->set_rules('contact-number', 'Contact Number', 'required');
		$this->form_validation->set_rules('business-area', 'Business Area', 'required');
		$this->form_validation->set_rules('num-of-employees', 'Number of Employees', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('profile/edit');
		}
		else
		{
			$user_fields = array(
				'firstName' => $this->input->post('fname'),
				'lastName' => $this->input->post('lname'),
				'middleName' => $this->input->post('mname'),
				'suffix' => $this->input->post('suffix'),
				'gender' => $this->input->post('gender'),
				'birthDate' => $this->input->post('birth-date'),
				'civilStatus' => $this->input->post('civil-status'),
				);

			$applicant_fields = array(
				'userId' => $user_id,			
				'houseBldgNo' => $this->input->post('house-bldg-no'),
				'bldgName' => $this->input->post('bldg-name'),
				'unitNum' => $this->input->post('unit-no'),
				'street' => $this->input->post('street'),
				'barangay' => $this->input->post('barangay'),
				'subdivision' => $this->input->post('subdivision'),
				'cityMunicipality' => $this->input->post('city-municipality'),
				'province' => $this->input->post('province'),
				'contactNum' => $this->input->post('contact-number'),
				'telNum' => $this->input->post('telephone-number'),
				'businessArea' => $this->input->post('business-area'),
				'numOfEmployeesLGU' => $this->input->post('num-of-employees'),
				'position' => $this->input->post('position'),
				);

	    	// echo "<pre>";
	    	// print_r($applicant_fields);
	    	// echo "</pre>";
	    	// exit();

			$is_setup = $this->Owner_m->check_owner($user_id);

	    	//if applicant is already registered
			if($is_setup)
			{
				$is_success = $this->Owner_m->update_owner_details($user_fields, $applicant_fields);

				if($is_success)
				{
					$this->session->set_flashdata('message', 'Update Successful!');
				}
				else
				{
					$this->session->set_flashdata('message', 'Update failed');
				}
			}
	    	//for first time set-up
	    	//the system registers the applicant first before updating
			else
			{
				$is_success = $this->Owner_m->register_owner($applicant_fields);
				if($is_success)
				{
					$is_success = $this->Owner_m->update_owner_details($user_fields, $applicant_fields);
					if($is_success)
					{
						$this->session->set_flashdata('message', 'Applicant Registered!');
					}
					else
					{
						$this->session->set_flashdata('message', 'Applicant Registration Failed');
					}
				}
				else
				{
					$this->session->set_flashdata('message', 'Applicant Registration Failed');
				}

			}
			// if($this->Business_Address_m->count_addresses > 0)
			// {
			// 	redirect('dashboard');
			// }
			// else
			// {
				// redirect('profile/manage_business_address');
			// }
		}
	}

	public function manage_owner_profiles()
	{
		// $this->isLogin();
		$this->_init();
		$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		if($this->input->get('ft') == "1")
		{
			$this->session->set_flashdata('message', 'Welcome to <strong>BPOSYS</strong>! Please set up your initial owner profile before you can proceed. Just fill up the fields below.');
		}
		$this->load->view('profile/manage_owners');
	}

	public function save_owner()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('house-bldg-no', 'Civil Status', 'required');
		$this->form_validation->set_rules('bldg-name', 'Building Name', 'required');
		$this->form_validation->set_rules('unit-no', 'Unit Number', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'required');
		$this->form_validation->set_rules('subdivision', 'Subdivision', 'required');
		$this->form_validation->set_rules('city-municipality', 'City/Municipality', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');
		$this->form_validation->set_rules('contact-number', 'Contact Number', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('profile/manage_owner_profiles');
		}
		else
		{
			$fields = array(
				'userId' => $user_id,
				'firstName' => $this->input->post('fname'),
				'middleName' => $this->input->post('mname'),
				'lastName' => $this->input->post('lname'),
				'suffix' => $this->input->post('suffix'),
				'gender' => $this->input->post('gender'),
				'bldgName' => $this->input->post('bldg-name'),
				'houseBldgNo' => $this->input->post('house-bldg-no'),
				'unitNum' => $this->input->post('unit-no'),
				'street' => $this->input->post('street'),
				'barangay' => $this->input->post('barangay'),
				'subdivision' => $this->input->post('subdivision'),
				'cityMunicipality' => $this->input->post('city-municipality'),
				'province' => $this->input->post('province'),
				'contactNum' => $this->input->post('contact-number'),
				'telNum' => $this->input->post('telephone-number'),
				);

			$this->Owner_m->insert($fields);

			if($this->Business_m->count_businesses > 0)
				redirect('dashboard');
			else
				redirect('profile/manage_business_profiles?ft=1');
		}
	}

	public function manage_business_profiles()
	{
		$this->isLogin();
		$this->_init();
		$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		if($this->input->get('ft') == 1)
		{
			$this->session->set_flashdata('message', '<strong>Almost there</strong>! Please set up your initial business profile before you can proceed to your dashboard and apply for your permits/clearances.');
			$this->session->set_flashdata('ft','1');
		}
		if($this->Owner_m->count_owners() > 0)
		{
			$data['owner'] = $this->Owner_m->get_all_owners();
			$this->load->view('profile/manage_businesses', $data);
		}
		else
		{
			redirect('profile/manage_owner_profiles?ft=1');
		}
	}

	public function save_business()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('business-owner','Business Owner','required');
		$this->form_validation->set_rules('business-name','Business Name','required');
		$this->form_validation->set_rules('company-name','Company Name','required');
		$this->form_validation->set_rules('trade-name','Trade/Franchise Name','required');
		$this->form_validation->set_rules('signage-name','Signage Name','required');
		$this->form_validation->set_rules('nature-of-business','Nature of Business','required');
		$this->form_validation->set_rules('organization-type','Organization Type','required');
		if($this->input->post('organization-type') == 'Corporation')
			$this->form_validation->set_rules('corporation-name', 'Corporation Name', 'required');
		$this->form_validation->set_rules('date-of-operation','Date of Operation','required');
		$this->form_validation->set_rules('business-area','Business Area','required');
		$this->form_validation->set_rules('business-desc','Business Description', 'required');
		$this->form_validation->set_rules('house-bldg-no','HouseN No./Bldg No.','required');
		$this->form_validation->set_rules('bldg-name','Building Name','required');
		$this->form_validation->set_rules('unit-no','Unit No.','required');
		$this->form_validation->set_rules('street','Street','required');
		$this->form_validation->set_rules('subdivision','Subdivision','required');
		$this->form_validation->set_rules('barangay','Barangay','required');
		$this->form_validation->set_rules('city-municipality','City Municipality','required');
		$this->form_validation->set_rules('province','Province','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('telephone-number','Telephone Number','required');
		$this->form_validation->set_rules('pollution-control-officer','Pollution Control Officer','required');
		$this->form_validation->set_rules('male-employees','Total Male Employees','required|numeric');
		$this->form_validation->set_rules('female-employees','Total Female Employees','required|numeric');
		$this->form_validation->set_rules('pwd-employees','Total PWD Employees','required|numeric');
		$this->form_validation->set_rules('president-treasurer-name', 'Name of President/Treasurer of Corporation','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('profile/manage_business_profiles');
		}
		else
		{
			$fields = array(
				'userId' => $user_id,
				'ownerId' => $this->encryption->decrypt($this->input->post('business-owner')),
				'businessName' => $this->input->post('business-name'),
				'companyName' => $this->input->post('company-name'),
				'tradeName' => $this->input->post('trade-name'),
				'signageName' => $this->input->post('signage-name'),
				'natureOfBusiness' => $this->input->post('nature-of-business'),
				'organizationType' => $this->input->post('organization-type'),
				'corporationName' => $this->input->post('organization-type')=="Corporation" ? $this->input->post('corporation-name') : "NA",
				'dateOfOperation' => $this->input->post('date-of-operation'),
				'businessDesc' => $this->input->post('business-desc'),
				'bldgName' => $this->input->post('bldg-name'),
				'houseBldgNum' => $this->input->post('house-bldg-no'),
				'unitNum' => $this->input->post('unit-no'),
				'street' => $this->input->post('street'),
				'barangay' => $this->input->post('barangay'),
				'subdivision' => $this->input->post('subdivision'),
				'cityMunicipality' => $this->input->post('city-municipality'),
				'province' => $this->input->post('province'),
				'telNum' => $this->input->post('telephone-number'),
				'email' => $this->input->post('email'),
				'pollutionControlOfficer' => $this->input->post('pollution-control-officer'),
				'maleEmployees' => $this->input->post('male-employees'),
				'femaleEmployees' => $this->input->post('female-employees'),
				'PWDEmployees' => $this->input->post('pwd-employees'),
				'businessArea' => $this->input->post('business-area'),
				'presidentTreasurerName' => $this->input->post('president-treasurer-name'),
				);
			$this->Business_m->insert($fields);

			if($this->input->post('ft'))
			{
				$this->session->set_flashdata('ft','1');
			}
			redirect('dashboard');
		}
	}

	// public function manage_business_address()
	// {
	// 	$this->isLogin();
	// 	$this->_init();
	// 	$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

	// 	$query['userId'] = $userId;
	// 	$data['business_addresses'] = $this->Business_Address_m->get_all_business_addresses($query);

	// 	$this->load->view('profile/manage_business_address', $data);
	// }

	// public function save_business_address()
	// {
	// 	$this->isLogin();
	// 	$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

	// 	$this->form_validation->set_rules('business-address-name', 'Address Name', 'required');
	// 	$this->form_validation->set_rules('house-bldg-no', 'House No./Building No.', 'required');
	// 	$this->form_validation->set_rules('bldg-name', 'Building Name', 'required');
	// 	$this->form_validation->set_rules('unit-no', 'Unit Number', 'required');
	// 	$this->form_validation->set_rules('street', 'Street', 'required');
	// 	$this->form_validation->set_rules('barangay', 'Barangay', 'required');
	// 	$this->form_validation->set_rules('subdivision', 'Subdivision', 'required');
	// 	$this->form_validation->set_rules('city-municipality', 'City/Municipality', 'required');
	// 	$this->form_validation->set_rules('province', 'Province', 'required');

	// 	if($this->form_validation->run() == false)
	// 	{	
	// 		$this->session->set_flashdata('error', validation_errors());
	// 		redirect('profile/manage_business_address');
	// 	}
	// 	else
	// 	{
	// 		$fields = array(
	// 			'userId' => $user_id,
	// 			'addressName' => $this->input->post('business-address-name'),
	// 			'bldgName' => $this->input->post('bldg-name'),
	// 			'houseBldgNum' => $this->input->post('house-bldg-no'),
	// 			'unitNum' => $this->input->post('unit-no'),
	// 			'street' => $this->input->post('street'),
	// 			'barangay' => $this->input->post('barangay'),
	// 			'subdivision' => $this->input->post('subdivision'),
	// 			'cityMunicipality' => $this->input->post('city-municipality'),
	// 			'province' => $this->input->post('province'),
	// 			);
	// 		if($this->Business_Address_m->insert($fields))
	// 		{
	// 			redirect('profile/manage_business_address');
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('error', "Address Name already exists!");
	// 			redirect('profile/manage_business_address');
	// 		}

	// 	}
	// }
}//END OF CLASS
