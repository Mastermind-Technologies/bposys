<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Applicant_m');
		$this->load->library('form_validation');
		// Load css and js
		//$this->load->view('template/main');
    	// parent::__construct();
		//
    	// // Load form helper library
    	// $this->load->helper('form');
		//
    	// // Load form validation library
    	// $this->load->library('form_validation');
		//
    	// // Load session library
    	// //this is now autoloaded
    	// //$this->load->library('session');
		//
    	// // Load database
   	 	// $this->load->model('ticket');
   		 // $this->load->model('exhibitor_m');
   		 // $this->load->model('log_m');
	}

	public function _init()
	{
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
		$this->load->view('templates/sb_admin2/sb_admin2_navbar');
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			redirect('home');
		}
	}

	public function index()
	{
		$this->isLogin();
		$this->_init();
		//$objectId = $this->session->userdata['userdata']['userId'];

		$data['user'] = $this->User_m->get_user_details($this->session->userdata['userdata']);
		$is_setup = $this->Applicant_m->check_applicant($this->session->userdata['userdata']);
	
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
		var_dump($this->session->userdata['userdata']['userId']);
		exit();

		if($is_setup)
		{
			$this->load->view('dashboard/applicant/index', $data);			
		}
		else
		{
			$this->load->view('dashboard/applicant/edit_info', $data);
		}
	}

	public function info_error()
	{
		$this->isLogin();
		$this->_init();
		//$objectId = $this->session->userdata['userdata']['userId'];

		$data['user'] = $this->User_m->get_user_details($this->session->userdata['userdata']);
		$this->load->view('dashboard/applicant/edit_info', $data);
	}

	public function edit_info()
	{
		$this->isLogin();
		$this->_init();

		$data['user'] = $this->User_m->get_user_details($this->session->userdata['userdata']);
		$this->load->view('dashboard/applicant/edit_info', $data);
	}

	public function save_edit_info($fields = null)
	{
		$this->isLogin();
		$this->_init();

		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('civil-status', 'Civil Status', 'required');


	    if($this->form_validation->run() == FALSE)
	    {
	    	 $this->session->set_flashdata('error', validation_errors());
	    	 redirect('dashboard/info_error');
	    }
	    else
	    {
	    	$month = $this->input->post('month');
	    	$day = $this->input->post('day');
	    	$year = $this->input->post('year');

	    	$user_fields = array(
	    		'firstName' => $this->input->post('fname'),
	    		'lastName' => $this->input->post('lname'),
	    		'middleName' => $this->input->post('mname'),
	    		'suffix' => $this->input->post('suffix'),
	    		'gender' => $this->input->post('gender'),
	    		'birthDate' => $month . "/" . $day . "/" . $year,
	    		);

	    	$applicant_fields = array(
	    		'userId' => $this->session->userdata['userdata']['userId'],
	    		'civilStatus' => $this->input->post('civil-status'),
	    		'houseBldgNo' => $this->input->post('house-bldg-no'),
	    		'bldgName' => $this->input->post('bldg-name'),
	    		'unitNum' => $this->input->post('unit-no'),
	    		'street' => $this->input->post('street'),
	    		'barangay' => $this->input->post('barangay'),
	    		'subdivision' => $this->input->post('subdivision'),
	    		'cityMunicipality' => $this->input->post('city-municipality'),
	    		'province' => $this->input->post('province'),
	    		'contactNum' => $this->input->post('contact-number'),
	    		'telNum' => $this->input->post('telephone-number')
	    		);

	    	// echo "<pre>";
	    	// print_r($applicant_fields);
	    	// echo "</pre>";
	    	// exit();

	    	$is_setup = $this->Applicant_m->check_applicant($this->session->userdata['userdata']);

	    	//if applicant is already registered
	    	if($is_setup)
	    	{
	    		$is_success = $this->Applicant_m->update_applicant($user_fields, $applicant_fields);

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
	    		$is_success = $this->Applicant_m->register_applicant($applicant_fields);
	    		if($is_success)
	    		{
	    			$is_success = $this->Applicant_m->update_applicant($user_fields, $applicant_fields);
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

	    	//$this->Applicant_m->update_applicant($this->session->userdata['userdata']);

	    	redirect('dashboard');
	    }
	}
}
