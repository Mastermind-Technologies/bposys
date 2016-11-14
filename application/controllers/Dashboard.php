<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$is_registered = $this->Owner_m->check_owner($user_id);

		if($is_registered)
		{
			$data['user'] = $this->Owner_m->get_full_details($this->session->userdata['userdata']);
			$this->load->view('dashboard/applicant/index', $data);	
		}
		else
		{
			$data['user'] = $this->User_m->get_user_details($this->session->userdata['userdata']);
			$this->load->view('dashboard/applicant/edit_info', $data);
		}
	}

	public function new_application()
	{
		//$this->load->js('templates/sb_admin2/sb_admin2_includes');
		echo script_tag('assets/js/dashboard.js');
		echo script_tag('assets/js/parsley.min.js');
		$user_id = $this->session->userdata['userdata']['userId'];
		$this->load->view('dashboard/applicant/new_application');

	}

	public function submit_application()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('DTISECCDA_RegNum', 'DTI/SEC/CDA Registration Number', 'required');
		$this->form_validation->set_rules('DTISECCDA_Date', 'DTI/SEC/CDA Date', 'required');
		$this->form_validation->set_rules('organization-type', 'Organization Type', 'required');
		$this->form_validation->set_rules('ctc-number', 'CTC Number', 'required');
		$this->form_validation->set_rules('tin', 'TIN', 'required');

		if($this->input->post('tax-incentive'))
		{
			$this->form_validation->set_rules('entity', 'Entity', 'required');
		}

		$this->form_validation->set_rules('tax-first-name', 'Tax Payer First Name', 'required');
		$this->form_validation->set_rules('tax-last-name', 'Tax Payer Last Name', 'required');
		$this->form_validation->set_rules('business-name', 'Business Name', 'required');
		$this->form_validation->set_rules('trade-name', 'Franchise/Trade Name', 'required');

		$this->form_validation->set_rules('pt-first-name', 'First Name of President/Treasurer of Corporation', 'required');
		$this->form_validation->set_rules('pt-last-name', 'Last Name of President/Treasurer of Corporation', 'required');

		$this->form_validation->set_rules('house-bldg-no', 'House No./Building No.', 'required');
		$this->form_validation->set_rules('bldg-name', 'Building Name', 'required');
		$this->form_validation->set_rules('unit-no', 'Unit Number', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'required');
		$this->form_validation->set_rules('subdivision', 'Subdivision', 'required');
		$this->form_validation->set_rules('city-municipality', 'City/Municipality', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');

		$this->form_validation->set_rules('tel-num', 'Telephone Number', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pin', 'Property Index Number (PIN)', 'required');
		$this->form_validation->set_rules('total-employee-num', 'Total Number of Employees', 'required');

		if($this->input->post('rented'))
		{
			$this->form_validation->set_rules('lessor-first-name', "Lessor's First Name", 'required');
			$this->form_validation->set_rules('lessor-last-name', "Lessor's Last Name", 'required');
			$this->form_validation->set_rules('lessor-address', "Lessor's Address", 'required');
			$this->form_validation->set_rules('lessor-subdivision', "Lessor's Subdivision", 'required');
			$this->form_validation->set_rules('lessor-barangay', "Lessor's Barangay", 'required');
			$this->form_validation->set_rules('lessor-city-municipality', "Lessor's City/Municipality", 'required');
			$this->form_validation->set_rules('lessor-province', "Lessor's Province", 'required');
			$this->form_validation->set_rules('lessor-monthly-rental', "Lessor's Monthly Rental", 'required');
			$this->form_validation->set_rules('lessor-tel-cel-no', "Lessor's Telephone/Cellphone Number", 'required');
			$this->form_validation->set_rules('lessor-email', "Lessor's Email", 'required');
			$this->form_validation->set_rules('lessor-address', "Lessor's Address", 'required');
			$this->form_validation->set_rules('emergency-contact-name', "Lessor's Address", 'required');
			$this->form_validation->set_rules('emergency-tel-cel-no', "Lessor's Address", 'required');
			$this->form_validation->set_rules('emergency-email', "Lessor's Address", 'required');
		}
		else
		{

		}
	}
}
