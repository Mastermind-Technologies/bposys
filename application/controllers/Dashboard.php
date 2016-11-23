<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Owner_m');
		$this->load->model('Application_m');
		$this->load->model('Lessor_m');
		$this->load->model('Business_Activity_m');
		$this->load->library('form_validation');
	}

	public function _init()
	{
		$this->load->view('templates/sb_admin2/sb_admin2_includes');
		$this->load->view('templates/sb_admin2/sb_admin2_navbar');
	}

	public function _init_matrix()
	{
		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar');
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
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == 'Applicant')
		{
			$this->_init();
			$is_registered = $this->Owner_m->check_owner($user_id);
			if($is_registered)
			{
				$data['user'] = $this->Owner_m->get_full_details($this->session->userdata['userdata']);

				$query = array(
					'userId' => $user_id
					);
				$data['applications'] = $this->Application_m->get_all_applications($query);

				$data['user'][0]->password = '';
				$this->load->view('dashboard/applicant/index', $data);	
			}
			else
			{
				$query = array(
					'userId' => $user_id
					);
				$data['user'] = $this->User_m->get_all_users($query);
				redirect('profile/edit');
			}
		}
		else if($role == 'BPLO')
		{
			$this->_init_matrix();
			$query = array(
				'status' => 'Waiting'
				);
			$data['incoming'] = sizeof($this->Application_m->get_all_applications($query));
			$data['issued'] = sizeof([]);
			$data['pending'] =sizeof([]);
			$query = array(
					'userId' => $user_id
					);
			$data['user'] = $this->User_m->get_all_users($query);
			$data['user'][0]->password = '';
			$this->load->view('dashboard/bplo/index', $data);
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
			// $this->session->set_flashdata('error', validation_errors());
			// redirect('dashboard/new_application_validate');
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
				'status' => 'Waiting'
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

			// $display['application'] = $this->Application_m->get_application_details($referenceNum);
			// $display['lessor'] = $this->Lessor_m->get_lessor_details($referenceNum);
			// echo "<pre>";
			// print_r($display);
			// echo "</pre>";
			// exit();
			//redirect('dashboard');
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

	public function incoming_applications()
	{
		$this->isLogin();
		$this->_init_matrix();

		$query = array(
			'status' => 'Waiting'
			);
		$data['incoming'] = $this->Application_m->get_all_applications($query);

		// $encrypted = $this->encryption->encrypt(
		// 	'hehe',
		// 	array(
		// 		'cipher' => 'blowfish',
		// 		'mode' => 'ecb',
		// 		'key' => $this->config->item('encryption_key'),
		// 		'hmac' => false
		// 		)
		// 	);

		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		// echo "<pre>";
		// print_r($data['custom_encrypt']);
		// echo "</pre>";
		// var_dump($this->encryption->decrypt($encrypted, array(
		// 		'cipher' => 'blowfish',
		// 		'mode' => 'ecb',
		// 		'key' => $this->config->item('encryption_key'),
		// 		'hmac' => false
		// 		)));
		// exit();


		$this->load->view('dashboard/bplo/incoming',$data);

	}

	public function incoming_view($application_id)
	{
		$this->isLogin();
		$this->_init_matrix();

		$decrypt_credentials = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);
		$application_id = $this->encryption->decrypt(hex2bin($application_id), $decrypt_credentials);

		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		// var_dump($application_id);
		// exit();

		$query = array(
			'applicationId' => $application_id
			);

		$data['application'] = $this->Application_m->get_all_applications($query);
		$param['userId'] = $this->encryption->encrypt($data['application'][0]->userId);
		$data['owner'] = $this->Owner_m->get_full_details($param);
		$data['owner'][0]->password = 'HIDDEN';

		$this->load->view('dashboard/bplo/view',$data);
	}
}//END OF CLASS,
