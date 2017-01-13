<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		//object classes are autoloaded from config/autoload.php
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

	public function _init_matrix($data = null)
	{
		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar', $data);
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			$this->session->set_flashdata('failed', 'You are not logged in!');
			redirect('home');
		}
	}

	// public function test()
	// {
	// 	$param['body'] = "HEHEZ";
	// 	//email is sent to user object's email property
	// 	$user = new User($this->encryption->decrypt($this->session->userdata['userdata']['userId']));
	// 	$user->send_mail($param);
	// }

	public function index()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == 'Applicant')
		{
			$is_registered = $this->Owner_m->check_owner($user_id);
			if($is_registered)
			{
				$data['user'] = new Owner($user_id);

				$query['userId'] = $user_id;
				$data['applications'] = $this->Application_m->get_all_applications($query);
				foreach ($data['applications'] as $key => $value) {
					$data['applications'][$key] = new Application($value->referenceNum);
					$data['applications'][$key]->set_applicationId($this->encryption->decrypt($data['applications'][$key]->get_applicationId()));
					$data['applications'][$key]->check_expiry();
				}

				//get applicant notifications
				$nav_data['notifications'] = User::get_notifications();

				// foreach($data['applications'] as $application)
				// {
				// 	$query = array(
				// 		'referenceNum' => $this->encryption->decrypt($application->get_referenceNum()),
				// 		'status' => "Unread",
				// 		'role' => 3,
				// 		);
				// 	$notification = $this->Notification_m->get_all($query);
				// 	if($notification != null)
				// 	{
				// 		foreach ($notification as $value) {
				// 			$nav_data['notifications'][] = $value;
				// 		}
				// 	}
				// }
				
				//custom encryption credentials for URL encryption
				$data['custom_encrypt'] = array(
					'cipher' => 'blowfish',
					'mode' => 'ecb',
					'key' => $this->config->item('encryption_key'),
					'hmac' => false
					);
				if($nav_data['notifications'] == "")
					$this->_init();
				else
					$this->_init($nav_data);

				$this->load->view('dashboard/applicant/index', $data);
			}
			//if applicant is still not a registered owner, force register.
			else
			{
				redirect('profile/edit');
			}
		}
		else if($role == 'BPLO')
		{
			$applications = $this->Application_m->get_all_applications();
			if(sizeof($applications) > 0)
			{	
				foreach ($applications as $application) {
					$application_obj = new Application($application->referenceNum);
					$application_obj->check_expiry();
				}
			}

			$navdata['title'] = 'BPLO Dashboard';
			//get notifications
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			//get notifications
			// $data['notifications'] = User::get_notifications();
			// $query = array(
			// 	'status' => "Unread",
			// 	'role' => 4,
			// 	);
			// $data['notifications'] = $this->Notification_m->get_all($query);
			// unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof($this->Application_m->get_all_applications($query));

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof($this->Application_m->get_all_applications($query));

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/bplo/index', $data);
		}
		else if($role == "BFP")
		{
			$navdata['title'] = 'BFP Dashboard';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 5
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/bfp/index', $data);
		}
		else if($role == "Assessor")
		{
			$navdata['title'] = 'Assessor Dashboard';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 6
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/assessors/index', $data);
		}
		else if($role == "CENRO")
		{
			$navdata['title'] = 'CENRO Dashboard';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 7
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/cenro/index', $data);
		}
		else if($role == "Zoning")
		{
			$navdata['title'] = 'Zoning Dashboard(not final)';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 8
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/zoning/index', $data);
		}
		else if($role == "Engineering")
		{
			$navdata['title'] = 'Engineering Dashboard';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 9
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/engineering/index', $data);
		}
		else if($role == "CHO")
		{
			$navdata['title'] = 'CHO Dashboard';
			$this->_init_matrix($navdata);
			$query = array(
				'status' => "Unread",
				'role' => 10
				);
			$data['notifications'] = $this->Notification_m->get_all($query);
			unset($query);

			$query['status'] = 'For applicant visit';
			$data['pending'] = sizeof([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = sizeof([]);

			$data['issued'] =sizeof([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/cho/index', $data);
		}
	}

	public function new_application()
	{
		//$this->load->js('templates/sb_admin2/sb_admin2_includes');
		echo script_tag('assets/js/dashboard.js');
		echo script_tag('assets/js/parsley.min.js');
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$this->load->view('dashboard/applicant/new_application');
	}

	public function new_application_validate()
	{
		$this->isLogin();
		$this->_init();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$this->load->view('dashboard/applicant/new_application');
	}

	public function submit_application()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('DTISECCDA_RegNum', 'DTI/SEC/CDA Registration Number', 'required|numeric');
		$this->form_validation->set_rules('DTISECCDA_Date', 'DTI/SEC/CDA Date', 'required');
		$this->form_validation->set_rules('organization-type', 'Organization Type', 'required');
		$this->form_validation->set_rules('ctc-number', 'CTC Number', 'required|numeric');
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
		$this->form_validation->set_rules('unit-no', 'Unit Number', 'required|numeric');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('barangay', 'Barangay', 'required');
		$this->form_validation->set_rules('subdivision', 'Subdivision', 'required');
		$this->form_validation->set_rules('city-municipality', 'City/Municipality', 'required');
		$this->form_validation->set_rules('province', 'Province', 'required');

		$this->form_validation->set_rules('tel-num', 'Telephone Number', 'required|numeric');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('pin', 'Property Index Number (PIN)', 'required');
		$this->form_validation->set_rules('total-employee-num', 'Total Number of Employees', 'required|numeric');

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
			$this->form_validation->set_rules('lessor-tel-cel-no', "Lessor's Telephone/Cellphone Number", 'required|numeric');
			$this->form_validation->set_rules('lessor-email', "Lessor's Email", 'required|valid_email');
			$this->form_validation->set_rules('lessor-address', "Lessor's Address", 'required');
			$this->form_validation->set_rules('emergency-contact-name', "Lessor's Address", 'required');
			$this->form_validation->set_rules('emergency-tel-cel-no', "Lessor's Address", 'required|numeric');
			$this->form_validation->set_rules('emergency-email', "Lessor's Address", 'required');
		}

		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('line-of-business', 'Line of Business', 'required');
		$this->form_validation->set_rules('num-of-units', 'Number of Units', 'required');
		$this->form_validation->set_rules('capitalization', 'Capitalization', 'required');

		if($this->form_validation->run() == false)
		{
			$data['error'] = "Error: Please resolve invalid inputs.";
			echo json_encode($data);
		}
		else
		{

			if($this->input->post('tax-incentive'))
			{
				$entity = $this->input->post('entity');
			}
			else
			{
				$entity = "NA";
			}

			$tax_payer_name = $this->input->post('tax-first-name') . " " . $this->input->post('tax-middle-name') . ", " . $this->input->post('tax-last-name');
			$president_treasurer_name = $this->input->post('pt-first-name') . " " . $this->input->post('pt-middle-name') . ", " . $this->input->post('pt-last-name');

			$data['application_fields'] = array(
				'referenceNum' => 'Processing_'.$user_id,
				'userId' => $user_id,
				'taxYear' => $this->input->post('tax-year'),
				'applicationDate' => $this->input->post('application-date'),
				'DTISECCDA_RegNum' => $this->input->post('DTISECCDA_RegNum'),
				'DTISECCDA_Date' => $this->input->post('DTISECCDA_Date'),
				'typeOfOrganization' => $this->input->post('organization-type'),
				'CTCNum' => $this->input->post('ctc-number'),
				'TIN' => $this->input->post('tin'),
				'entityName' => $entity,
				'taxPayerName' => $tax_payer_name,
				'businessName' => $this->input->post('business-name'),
				'tradeName' => $this->input->post('trade-name'),
				'presidentTreasurerName' => $president_treasurer_name,
				'houseBldgNum' => $this->input->post('house-bldg-no'),
				'bldgName' => $this->input->post('bldg-name'),
				'unitNum' => $this->input->post('unit-no'),
				'street' => $this->input->post('street'),
				'barangay' => $this->input->post('barangay'),
				'subdivision' => $this->input->post('subdivision'),
				'cityMunicipality' => $this->input->post('city-municipality'),
				'province' => $this->input->post('province'),
				'telNum' => $this->input->post('tel-num'),
				'email' => $this->input->post('email'),
				'PIN' => $this->input->post('pin'),
				'numOfEmployees' => $this->input->post('total-employee-num'),
				'status' => 'For validation...'
				);

			$this->Application_m->insert_application($data['application_fields']);

			$referenceNum = $this->Application_m->update_application_reference_number($user_id);

			if($this->input->post('rented'))
			{
				$data['lessor_fields'] = array(
					'referenceNum' => $referenceNum,
					'firstName' => $this->input->post('lessor-first-name'),
					'middleName' => $this->input->post('lessor-middle-name')==''?'NA':$this->input->post('lessor-middle-name'),
					'lastName' => $this->input->post('lessor-last-name'),
					'address' => $this->input->post('lessor-address'),
					'subdivision' => $this->input->post('lessor-subdivision'),
					'barangay' => $this->input->post('lessor-barangay'),
					'cityMunicipality' => $this->input->post('lessor-city-municipality'),
					'province' => $this->input->post('lessor-province'),
					'monthlyRental' => $this->input->post('lessor-monthly-rental'),
					'telNum' => $this->input->post('lessor-tel-cel-no'),
					'email' => $this->input->post('lessor-email'),
					'emergencyContactPerson' => $this->input->post('emergency-contact-name'),
					'emergencyTelNum' => $this->input->post('emergency-tel-cel-no'),
					'emergencyEmail' => $this->input->post('emergency-email')
					);

				$this->Lessor_m->insert_lessor($data['lessor_fields']);
			}

			$query = array(
				'referenceNum' => $referenceNum,
				'status' => "Unread",
				'role' => 4,
				'notifMessage' => "New business permit application"
				);

			$this->Notification_m->insert($query);
			$data['referenceNum'] = $referenceNum;
			echo json_encode($data);
		}
	}//END OF SUBMIT_APPLICATION

	public function store_business_activity()
	{
		$fields = array(
			'referenceNum' => $this->input->post('referenceNum'),
			'code' => $this->input->post('code'),
			'lineOfBusiness' => $this->input->post('lineOfBusiness'),
			'numOfUnits' => $this->input->post('numOfUnits'),
			'capitalization' => $this->input->post('capitalization'),
			);

		$this->Business_Activity_m->insert_business_activity($fields);
		$ctr = $this->input->post('ctr');
		$total = $this->input->post('total_rows');
		if($ctr == $total)
		{
			echo json_encode("success");
		}
		else
		{
			echo json_encode($ctr." out of ".$total);
		}
	}

	public function cancel_application($reference_num = null)
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$decrypt_credentials = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);
		$reference_num = $this->encryption->decrypt(hex2bin($reference_num), $decrypt_credentials);

		$application = new Application($reference_num);
		// echo "<pre>";
		// print_r($application);
		// echo "</pre>";
		// exit();
		$application->change_status($reference_num, 'Cancelled');
		redirect('dashboard');
	}

	public function check_application_status()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$query['userId'] = $user_id;
		$applications = $this->Application_m->get_all_applications($query);
		foreach ($applications as $key => $value) {
			$data['applications'][$key] = new Application($value->referenceNum);
			$data['applications'][$key]->set_applicationId($this->encryption->decrypt($data['applications'][$key]->get_applicationId()));
		}

		//get notifications
		$data['notifications'] = User::get_notifications();
		// echo "<pre>";
		// print_r($data['notifications']);
		// echo "</pre>";
		// exit();
		// foreach($data['applications'] as $application)
		// {
		// 	$query = array(
		// 		'referenceNum' => $this->encryption->decrypt($application->get_referenceNum()),
		// 		'status' => "Unread",
		// 		'role' => 3,
		// 		);
		// 	$notification = $this->Notification_m->get_all($query);
		// 	if($notification != null)
		// 	{
		// 		foreach ($notification as $value) {
		// 			$data['notifications'][] = $value;
		// 		}
		// 	}
		// }
		

		if($data['notifications'] == "")
			unset($data['notifications']);
		else
			$data['notifications'] = sizeof($data['notifications']);


		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/applicant/application-table-body',$data);
	}

	public function incoming_applications()
	{
		$this->isLogin();
		$navdata['title'] = 'Incoming Applications';
		$navdata['notifications'] = User::get_notifications();
		$this->_init_matrix($navdata);

		$this->update_notif();

		$query['status'] = 'For validation...';
		$applications = $this->Application_m->get_all_applications($query);

		foreach ($applications as $key => $value) {
			$data['incoming'][$key] = new Application($value->referenceNum);
			//decrypting appId property for custom encryption
			$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/bplo/incoming',$data);
	}

	public function pending_applications()
	{
		$this->isLogin();
		$navdata['title'] = "Pending Applications";
		$navdata['notifications'] = User::get_notifications();
		$this->_init_matrix($navdata);

		$query['status'] = 'For applicant visit';
		$applications = $this->Application_m->get_all_applications($query);

		foreach ($applications as $key => $value) {
			$data['incoming'][$key] = new Application($value->referenceNum);
			//decrypting appId property for custom encryption
			$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/bplo/pending',$data);
	}

	public function view_application($application_id)
	{
		$this->isLogin();
		$navdata['title'] = "View Application";
		$navdata['notifications'] = User::get_notifications();
		$this->_init_matrix($navdata);

		//custom encryption credentials for decrypting appId
		$decrypt_credentials = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);
		$application_id = $this->encryption->decrypt(hex2bin($application_id), $decrypt_credentials);

		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		//get application using model then map to application object
		$query['applicationId'] = $application_id;
		$data['application'] = $this->Application_m->get_all_applications($query);
		//map to application object
		$application = new Application();
		$data['application'] = $application->set_application_all($data['application'][0]);
		$application->set_referenceNum(str_replace(['/','+','='], ['-','_','='], $application->get_referenceNum()));

		//instantiate Owner of this application
		$data['owner'] = new Owner($this->encryption->decrypt($application->get_userId()));

		$this->load->view('dashboard/bplo/view',$data);
	}

	public function validate_application($referenceNum = null)
	{
		$this->isLogin();
		// var_dump($referenceNum);
		$referenceNum = str_replace(['-','_','='], ['/','+','='], $referenceNum);
		// var_dump($referenceNum);
		$referenceNum = $this->encryption->decrypt($referenceNum);
		$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$application = new Application($referenceNum);
		
		
		$role_Id = $this->Role_m->get_roleId($this->encryption->decrypt($this->session->userdata['userdata']['role']));

		//approvals
		$query = array(
			'referenceNum' => $referenceNum,
			'role' => $role_Id->roleId,
			'type' => "Validate",
			'staff' => $this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName'],
			);
		$this->Approval_m->insert($query);

		//validate
		// $query = array(
		// 	'referenceNum' => $referenceNum,
		// 	'status' => 'For applicant visit'
		// 	);
		// $this->Application_m->update_application($query);
		$application->change_status($referenceNum, 'For applicant visit');

		//notifications
		$query = array(
			'referenceNum' => $referenceNum,
			'status' => 'Unread',
			'role' => '3',
			'notifMessage' => $application->get_businessName() . " has been validated by BPLO. Please check application status.",
			);
		$this->Notification_m->insert($query);

		$this->session->set_flashdata('message', 'Application validated successfully!');
		redirect('dashboard/incoming_applications');
	}

	public function approve_application($referenceNum = null)
	{
		$this->isLogin();
		$referenceNum = str_replace(['-','_','='], ['/','+','='], $referenceNum);
		$referenceNum = $this->encryption->decrypt($referenceNum);
		$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$application = new Application($referenceNum);

		//validate if application is legitimately validated
		$query = array(
			'referenceNum' => $referenceNum,
			'type' => "Validate",
			);
		$result = $this->Approval_m->get_all($query);

		if(sizeof($result) > 0)
		{
			//approvals
			$role_Id = $this->Role_m->get_roleId($this->encryption->decrypt($this->session->userdata['userdata']['role']));

			$query = array(
				'referenceNum' => $referenceNum,
				'role' => $role_Id->roleId,
				'type' => "Approve",
				'staff' => $this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName'],
				);
			$this->Approval_m->insert($query);

			//approve - update application status
			// $query = array(
			// 	'referenceNum' => $referenceNum,
			// 	'status' => 'On process'
			// 	);
			// $this->Application_m->update_application($query);
			$application->change_status($referenceNum, 'On process');

		//notifications
		//notify applicant
			$query = array(
				'referenceNum' => $referenceNum,
				'status' => 'Unread',
				'role' => '3',
				'notifMessage' => $application->get_businessName() . " has been approved by BPLO. You can now go to other required offices to process your application.",
				);
			$this->Notification_m->insert($query);

		//notify all departments
			for ($i=5; $i <= 10 ; $i++) { 
				$query = array(
					'referenceNum' => $referenceNum,
					'status' => 'Unread',
					'role' => $i,
					'notifMessage' => 'You have new incoming application.',
					);
				$this->Notification_m->insert($query);
			}

			$this->session->set_flashdata('message', 'Application approved!');
			redirect('dashboard/pending_applications');
		}
		else
		{
			$this->session->set_flashdata('message', 'ERROR: Invalid action!');
			redirect('dashboard/pending_applications');
		}	
	}

	public function update_notif()
	{
		$this->isLogin();
		$role_id = $this->Role_m->get_roleId($this->encryption->decrypt($this->session->userdata['userdata']['role']));
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		if($role_id->roleId == '3')
		{

			$notifications = $this->Notification_m->get_applicant_notif($role_id->roleId, $user_id);

			foreach ($notifications as $notification) {
				$query = array(
					'role' => $role_id->roleId,
					'referenceNum' => $notification->referenceNum
					);
				$set['status'] = "Read";
				$this->Notification_m->update($query,$set);
			}
			$data['notifications'] = $notifications;
			$this->load->view('dashboard/applicant/notif-view', $data);
		}
		else
		{
			$query = array(
				'role' => $role_id->roleId,
				'status' => 'Unread'
				);
			$notifications = $this->Notification_m->get_all($query);

			if(sizeof($notifications) > 0)
			{
				$set['status'] = "Read";
				$this->Notification_m->update($query, $set);
			}
		}

	}

	public function check_notif()
	{
		$this->isLogin();
		$role_id = $this->Role_m->get_roleId($this->encryption->decrypt($this->session->userdata['userdata']['role']));
		$query = array(
			'status' => "Unread",
			'role' => $role_id->roleId,
			);
		$data['notifications'] = sizeof($this->Notification_m->get_all($query));
		unset($query);

		$query['status'] = 'For applicant visit';
		$data['pending'] = sizeof($this->Application_m->get_all_applications($query));

		$query['status'] = 'For validation...';
		$data['incoming'] = sizeof($this->Application_m->get_all_applications($query));

		echo json_encode($data);
	}

}//END OF CLASS,
