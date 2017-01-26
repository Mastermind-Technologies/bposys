<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

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
			$this->session->set_flashdata('failed', 'You are not logged in!');
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
		$navdata['title'] = 'View Reports';
		$navdata['active'] = 'Reports';
		$navdata['notifications'] = User::get_notifications();
		$navdata['completed'] = User::get_complete_notifications();
		$this->_init_matrix($navdata);
		$this->isLogin();

		$query['YEAR(createdAt)'] = date('Y');
		$query['dept'] = "BPLO";
		$query['type'] = "New";
		for ($i=1; $i <= 12 ; $i++) { 
			$query['MONTH(createdAt)'] = $i;
			switch ($i)
			{
				case 1: 
				$data['n_january'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 2: 
				$data['n_february'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 3: 
				$data['n_march'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 4: 
				$data['n_april'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 5: 
				$data['n_may'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 6: 
				$data['n_june'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 7: 
				$data['n_july'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 8: 
				$data['n_august'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 9: 
				$data['n_september'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 10: 
				$data['n_october'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 11: 
				$data['n_november'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 12: 
				$data['n_december'] = count($this->Issued_Application_m->get_all($query));
				break;
			}
		}

		$query['type'] = 'Renew';
		for ($i=1; $i <= 12 ; $i++) { 
			$query['MONTH(createdAt)'] = $i;
			switch ($i)
			{
				case 1: 
				$data['r_january'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 2: 
				$data['r_february'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 3: 
				$data['r_march'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 4: 
				$data['r_april'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 5: 
				$data['r_may'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 6: 
				$data['r_june'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 7: 
				$data['r_july'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 8: 
				$data['r_august'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 9: 
				$data['r_september'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 10: 
				$data['r_october'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 11: 
				$data['r_november'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 12: 
				$data['r_december'] = count($this->Issued_Application_m->get_all($query));
				break;
			}
		}

		$this->load->view('dashboard/bplo/reports',$data);
	}

	public function report_year()
	{
		$this->isLogin();
		$year = $this->input->post('year');

		$query['YEAR(createdAt)'] = $year;
		$query['dept'] = "BPLO";
		$query['type'] = "New";
		for ($i=1; $i <= 12 ; $i++) { 
			$query['MONTH(createdAt)'] = $i;
			switch ($i)
			{
				case 1: 
				$data['n_january'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 2: 
				$data['n_february'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 3: 
				$data['n_march'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 4: 
				$data['n_april'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 5: 
				$data['n_may'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 6: 
				$data['n_june'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 7: 
				$data['n_july'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 8: 
				$data['n_august'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 9: 
				$data['n_september'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 10: 
				$data['n_october'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 11: 
				$data['n_november'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 12: 
				$data['n_december'] = count($this->Issued_Application_m->get_all($query));
				break;
			}
		}

		$query['type'] = 'Renew';
		for ($i=1; $i <= 12 ; $i++) { 
			$query['MONTH(createdAt)'] = $i;
			switch ($i)
			{
				case 1: 
				$data['r_january'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 2: 
				$data['r_february'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 3: 
				$data['r_march'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 4: 
				$data['r_april'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 5: 
				$data['r_may'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 6: 
				$data['r_june'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 7: 
				$data['r_july'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 8: 
				$data['r_august'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 9: 
				$data['r_september'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 10: 
				$data['r_october'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 11: 
				$data['r_november'] = count($this->Issued_Application_m->get_all($query));
				break;
				case 12: 
				$data['r_december'] = count($this->Issued_Application_m->get_all($query));
				break;
			}
		}
		$data['year'] = $year;
		$this->load->view('dashboard/bplo/ajax-report',$data);
		echo script_tag('assets/js/jquery.min.js');
		echo script_tag('assets/js/jquery.canvasjs.min.js');		
	}
}//END OF CLASS