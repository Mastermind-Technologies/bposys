<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->model('Role_m');
		$this->load->model('Application_m');
		$this->load->model('Lessor_m');
		$this->load->model('Business_Activity_m');
		$this->load->model('Approval_m');
		$this->load->model('Notification_m');
		$this->load->library('form_validation');
	}

	public function _init($data = null)
	{
		if($data != null)
			$this->load->view('templates/sb_admin2/sb_admin2_navbar', $data);
		else
			$this->load->view('templates/sb_admin2/sb_admin2_navbar');
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			$this->session->set_flashdata('failed', 'You are not logged in!');
			redirect('home');
		}
	}

	public function view($application_param = null)
	{
		$this->isLogin();
		$user_Id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		//get notifications
		$nav_data['notifications'] = User::get_notifications();
		if($nav_data['notifications'] == "")
			$this->_init();
		else
			$this->_init($nav_data);

		
		//decrypt application_param
		$data['custom_crypto'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$application_param = $this->encryption->decrypt(hex2bin($application_param), $data['custom_crypto']);
		$pieces = explode('|',$application_param);
		$referenceNum = $pieces[1];
		if($referenceNum == null)
		{
			$this->session->set_flashdata('message','Invalid URL');
			redirect('dashboard');
		}

		$data['application'] = new BPLO_Application($referenceNum);

		$this->load->view('dashboard/applicant/view_application', $data);
	}

	public function renew($application_param)
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

			//get notifications
		$nav_data['notifications'] = User::get_notifications();
		if($nav_data['notifications'] == "")
			$this->_init();
		else
			$this->_init($nav_data);

		//decrypt application_param
		$custom_decrypt = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);
		$application_param = $this->encryption->decrypt(hex2bin($application_param), $custom_decrypt);
		$pieces = explode('|',$application_param);
		$referenceNum = $pieces[1];
		if($referenceNum == null)
		{
			$this->session->set_flashdata('message','Invalid URL');
			redirect('dashboard');
		}

		$data['application'] = new BPLO_Application($referenceNum);
		$data['bfp'] = new BFP_Application($referenceNum);
		$data['cenro'] = new CENRO_Application($referenceNum);
		$data['business'] = new Business($this->encryption->decrypt($data['application']->get_BusinessID()));
		$data['sanitary'] = new Sanitary_Application($referenceNum);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		// echo script_tag('assets/js/dashboard.js');
		// echo script_tag('assets/js/parsley.min.js');
		$this->load->view('dashboard/applicant/renew-application', $data);
	}

	public function submit_renewal_application()
	{

	}

	//BILLY 12-15-2016 3:45PM
}