<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->library('form_validation');
	}

	public function _init()
	{
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
		$this->load->view('templates/sb_admin2/sb_admin2_navbar');
	}

	public function index()
	{
		$this->load->view('profile/index');
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
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$this->_init();

		$is_registered = $this->Owner_m->check_owner($user_id);
		if($is_registered)
		{
			$data['user'] = $this->Owner_m->get_full_details($this->session->userdata['userdata']);
		}
		else
		{
			$data['user'] = $this->User_m->get_user_details($user_id);
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
		$this->_init();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('birth-date', 'Birth Date', 'required');
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
		$this->form_validation->set_rules('business-area', 'Business Area', 'required');
		$this->form_validation->set_rules('num-of-employees', 'Number of Employees', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('profile/edit');
		}
		else
		{
			// $month = $this->input->post('month');
			// $day = $this->input->post('day');
			// $year = $this->input->post('year');

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
				'numOfEmployeesLGU' => $this->input->post('num-of-employees')
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
			redirect('dashboard');
		}
	}
}
