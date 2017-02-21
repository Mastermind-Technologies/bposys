<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alerts extends CI_Controller {

	public function __construct()
	{
		//object classes are autoloaded from config/autoload.php
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->model('Role_m');
		$this->load->model('Reference_Number_m');
		$this->load->model('Application_m');
		$this->load->model('Lessor_m');
		$this->load->model('Business_Activity_m');
		$this->load->model('Issued_Application_m');
		$this->load->model('Business_m');
		$this->load->model('Approval_m');
		$this->load->model('Notification_m');
		$this->load->library('form_validation');

		$this->load->model('Business_Address_m');
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			// $this->session->set_flashdata('failed', 'You are not logged in!');
			redirect('home');
		}
	}

	public function _init_matrix($data = null)
	{
		$query['status'] = 'For validation...';
		$data['incoming'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'For applicant visit';
		$data['pending'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'On Process';
		$data['process'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'Completed';
		$data['complete'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'Active';
		$data['issued'] = count($this->Application_m->get_all_bplo_applications($query));

		$data['total'] = $data['incoming']+$data['pending']+$data['process']+$data['complete']+$data['complete']+$data['issued'];
		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar', $data);
	}

	public function index()
	{
		$navdata['title'] = 'Send Alerts';
		$navdata['active'] = 'Alerts';
		$navdata['notifications'] = User::get_notifications();
		$navdata['completed'] = User::get_complete_notifications();
		$this->_init_matrix($navdata);
		$this->isLogin();

		$this->load->view('dashboard/bplo/alerts');
		echo script_tag('assets/js/jquery.min.js');
		echo script_tag('assets/js/jquery.canvasjs.min.js');
	}
}//END OF CLASS
