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

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			$this->session->set_flashdata('failed', 'You are not logged in!');
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
			$is_registered = $this->Owner_m->check_owner($user_id);
			if($is_registered)
			{
				$data['user'] = new User($user_id);

				$query['userId'] = $user_id;
				$data['applications'] = $this->Application_m->get_all_bplo_applications($query);
				foreach ($data['applications'] as $key => $value) {
					$data['applications'][$key] = new BPLO_Application($value->referenceNum);
					$data['applications'][$key]->set_applicationId($this->encryption->decrypt($data['applications'][$key]->get_applicationId()));
					$data['applications'][$key]->check_expiry();
				}

				//get applicant notifications
				$nav_data['notifications'] = User::get_notifications();
				
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

				if($this->Business_m->count_businesses() > 0)
					$this->load->view('dashboard/applicant/index', $data);
				else
					redirect('profile/manage_business_profiles?ft=1');
			}
			//if applicant is still not a registered owner, force register.
			else
			{
				redirect('profile/manage_owner_profiles?ft=1');
			}
		}
		else if($role == 'BPLO')
		{
			$applications = $this->Application_m->get_all_bplo_applications();
			if(count($applications) > 0)
			{	
				foreach ($applications as $application) {
					$application_obj = new BPLO_Application($application->referenceNum);
					$application_obj->check_expiry();
				}
			}

			$navdata['title'] = 'BPLO Dashboard';
			$navdata['active'] = 'Dashboard';
			//get notifications
			$navdata['notifications'] = User::get_notifications();
			$navdata['completed'] = User::get_complete_notifications();
			$this->_init_matrix($navdata);

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

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/bplo/index', $data);
		}
		else if($role == "CENRO")
		{
			$navdata['title'] = 'CENRO Dashboard';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_cenro_applications($query));

			$query['status'] = 'On process';
			$data['on_process'] = count($this->Application_m->get_all_cenro_applications($query));

			$query['status'] = 'Active';
			$data['issued'] =count($this->Application_m->get_all_cenro_applications($query));

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/cenro/index', $data);
		}
		else if($role == "Zoning")
		{
			$navdata['title'] = 'Zoning Dashboard(not final)';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_zoning_applications($query));

			$query['status'] = 'On Process';
			$data['on_process'] = count($this->Application_m->get_all_zoning_applications($query));

			$query['status'] = 'Active';
			$data['issued'] =count($this->Application_m->get_all_zoning_applications($query));

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/zoning/index', $data);
		}
		else if($role == "CHO")
		{
			$navdata['title'] = 'CHO Dashboard';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);


			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_sanitary_applications($query));

			$query['status'] = 'On Process';
			$data['on_process'] = count($this->Application_m->get_all_sanitary_applications($query));

			$query['status'] = 'Active';
			$data['issued'] =count($this->Application_m->get_all_sanitary_applications($query));

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/cho/index', $data);
		}
		else if($role == "Engineering")
		{
			$navdata['title'] = 'Engineering Dashboard';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			$query['status'] = 'For applicant visit';
			$data['pending'] = count([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = count([]);

			$data['issued'] =count([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/engineering/index', $data);
		}
		else if($role == "BFP")
		{
			$navdata['title'] = 'BFP Dashboard';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			$query['status'] = 'For applicant visit';
			$data['pending'] = count([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = count([]);

			$data['issued'] =count([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/bfp/index', $data);
		}
		else if($role == "Assessor")
		{
			$navdata['title'] = 'Assessor Dashboard';
			$navdata['active'] = 'Dashboard';
			$navdata['notifications'] = User::get_notifications();
			$this->_init_matrix($navdata);

			$query['status'] = 'For applicant visit';
			$data['pending'] = count([]);

			$query['status'] = 'For validation...';
			$data['incoming'] = count([]);

			$data['issued'] =count([]);

			$data['user'] = new User($user_id);
			$this->load->view('dashboard/assessors/index', $data);
		}
	}

	public function new_application()
	{
		//$this->load->js('templates/sb_admin2/sb_admin2_includes');
		echo script_tag('assets/js/dashboard.js');
		echo script_tag('assets/js/parsley.min.js');
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$query['userId'] = $user_id;
		$data['business'] = $this->Business_m->get_all_businesses($query);

		$this->load->view('dashboard/applicant/new_application',$data);
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
		$this->form_validation->set_rules('brgy-clearance-date-issued','Barangay Clearance Date Issued', 'required');
		$this->form_validation->set_rules('ctc-number', 'CTC Number', 'required|numeric');
		$this->form_validation->set_rules('tin', 'TIN', 'required');
		$this->form_validation->set_rules('capital-invested', 'Capital Invested', 'required|numeric');
		$this->form_validation->set_rules('business', 'Business Profile', 'required');

		if($this->input->post('tax-incentive'))
		{
			$this->form_validation->set_rules('entity', 'Entity', 'required');
		}

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

		if($this->input->post('cnc'))
		{
			$this->form_validation->set_rules('cnc-date-issued', 'CNC Date Issued', 'required');
		}
		if($this->input->post('llda'))
		{
			$this->form_validation->set_rules('llda-date-issued', 'LLDA Date Issued','required');
		}
		if($this->input->post('discharge-permit'))
		{
			$this->form_validation->set_rules('discharge-permit-date-issued','Discharge Permit Date Issued', 'required');
		}
		if($this->input->post('apsci'))
		{
			$this->form_validation->set_rules('apsci-date-issued','Permit to Operate/APSCI', 'required');
		}
		//dumped steam-generator-specify serverside validation

		$this->form_validation->set_rules('air-pollution-control-devices','Air Pollution Control Devices Being Used', 'required');
		$this->form_validation->set_rules('stack-height','Stack Height', 'required');

		$this->form_validation->set_rules('wastewater-treatment-facility', 'Wastewater Treatment Facility', 'required');
		if($this->input->post('pending-llda-case'))
		{
			$this->form_validation->set_rules('llda-case-no', 'LLDA Case Number', 'required');
		}

		$this->form_validation->set_rules('type-of-solid-wastes', 'Type of Solid Wastes', 'required');
		$this->form_validation->set_rules('qty-per-day', 'Quantity per day', 'required');
		$this->form_validation->set_rules('method-of-garbage-collection', 'required');

		//dumpled garbage-collection-specify serverside validation

		$this->form_validation->set_rules('collector', 'Person / Company Collecting Solid Wastes', 'required');
		$this->form_validation->set_rules('collector-address', 'Collector\'s Address', 'required');
		$this->form_validation->set_rules('water-supply-type', 'Type of Water Supply/Source', 'required');

		if($this->form_validation->run() == false)
		{
			// $data['error'] = "Error: Please resolve invalid inputs.";

			//test mode
			$data['error'] = validation_errors();
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

			$reference_num = $this->Reference_Number_m->generate_reference_number();
			$business_id = $this->encryption->decrypt($this->input->post('business'));
			
			//START BPLO FORM
			$data['application_fields'] = array(
				'referenceNum' => $reference_num,
				'userId' => $user_id,
				'businessId' => $business_id,
				'taxYear' => $this->input->post('tax-year'),
				'applicationDate' => $this->input->post('application-date'),
				'DTISECCDA_RegNum' => $this->input->post('DTISECCDA_RegNum'),
				'DTISECCDA_Date' => $this->input->post('DTISECCDA_Date'),
				'brgyClearanceDateIssued' => $this->input->post('brgy-clearance-date-issued'),
				'CTCNum' => $this->input->post('ctc-number'),
				'TIN' => $this->input->post('tin'),
				'entityName' => $entity,
				'status' => 'For validation...'
				);

			$bplo_id = $this->Application_m->insert_bplo($data['application_fields']);

			if($this->input->post('rented'))
			{
				$data['lessor_fields'] = array(
					'bploId' => $bplo_id,
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

			//END BPLO FORM

			//START ZONING
			$zoning_fields = array(
				'userId' => $user_id,
				'referenceNum' => $reference_num,
				'businessId' =>$business_id,
				'capitalInvested' => $this->input->post('capital-invested'),
				'status' => 'standby',
				);
			$this->Application_m->insert_zoning($zoning_fields);
			//END ZONING

			//START CENRO
			if($this->input->post('fugitive-particulates'))
			{
				$fugitive_particulates = "";
				$result = $this->input->post('fugitive-particulates');
				foreach ($result as $r) {
					$fugitive_particulates = $fugitive_particulates."|".$r;
				}
				$fugitive_particulates = substr($fugitive_particulates, 1);
			}
			else
			{
				$fugitive_particulates = "NA";
			}

			if($this->input->post('steam-generators'))
			{
				$steam_generator = "";
				$result = $this->input->post('steam-generators');
				foreach ($result as $r) {
					$steam_generator = $steam_generator."|".$r;
				}
				$steam_generator = substr($steam_generator, 1);
			}
			else
			{
				$steam_generator = "NA";
			}

			if($this->input->post('waste-minimization'))
			{
				$waste_minimization = "";
				$result = $this->input->post('waste-minimization');
				foreach ($result as $r) {
					$waste_minimization = $waste_minimization."|".$r;
				}
				$waste_minimization = substr($waste_minimization, 1);
			}
			else
			{
				$waste_minimization = "NA";
			}

			$cenro_fields = array(
				'userId' => $user_id,
				'referenceNum' => $reference_num,
				'businessId' => $business_id,
				'CNC' => $this->input->post('cnc') ? $this->input->post('cnc-date-issued') : 'NA',
				'LLDAClearance' => $this->input->post('llda') ? $this->input->post('llda-date-issued') : 'NA',
				'dischargePermit' => $this->input->post('discharge-permit') ? $this->input->post('discharge-permit-date-issued') : 'NA',
				'apsci' => $this->input->post('apsci') ? $this->input->post('apsci-date-issued') : "NA",
				'productsAndByProducts' => 'NA',
				'smokeEmission' => $this->input->post('smoke-emission') ? 1 : 0,
				'volatileCompound' => $this->input->post('volatile-compound') ? 1 : 0,
				'fugitiveParticulates' => $fugitive_particulates,
				'steamGenerator' => $steam_generator,
				'APCD' => $this->input->post('air-pollution-control-devices'),
				'stackHeight' => $this->input->post('stack-height'),
				'wastewaterTreatmentFacility' => $this->input->post('wastewater-treatment-facility'),
				'wastewaterTreatmentOperationAndProcess' => $this->input->post('wastewater-treatment-operation') ? 1 : 0,
				'pendingCaseWithLLDA' => $this->input->post('pending-llda-case') ? $this->input->post('llda-case-no') : "NA",
				'typeOfSolidWastesGenerated' => $this->input->post('type-of-solid-wastes'),
				'qtyPerDay' => $this->input->post('qty-per-day'),
				'garbageCollectionMethod' => $this->input->post('method-of-garbage-collection'),
				'frequencyOfGarbageCollection' => $this->input->post('garbage-collection-frequency'),
				'wasteCollector' => $this->input->post('collector'),
				'collectorAddress' => $this->input->post('collector-address'),
				'garbageDisposalMethod' => $this->input->post('garbage-disposal-method'),
				'wasteMinimizationMethod' => $waste_minimization,
				'drainageSystem' => $this->input->post('drainage-system') ? 1 : 0,
				'drainageType' => $this->input->post('drainage-system') ? $this->input->post('drainage-system-type') : "NA",
				'drainageDischargeLocation' => $this->input->post('drainage-system') ? $this->input->post('drainage-where-discharged') : "NA",
				'sewerageSystem' => $this->input->post('sewerage-system') ? 1 : 0,
				'septicTank' => $this->input->post('septic-tank') ? 1 : 0,
				'sewerageDischargeLocation' => $this->input->post('septic-tank') ? $this->input->post('sewerage-where-discharged') : "NA",
				'waterSupply' => $this->input->post('water-supply'),
				'status' => 'standby',
				);
			$this->Application_m->insert_cenro($cenro_fields);
			//END CENRO

			//SANITARY
			$sanitary_fields = array(
				'referenceNum' => $reference_num,
				'userId' =>  $user_id,
				'businessId' => $business_id,
				'annualEmployeePhysicalExam' => $this->input->post('annual-exams')=="Yes" ? 1 : 0,
				'typeLevelOfWaterSource' => $this->input->post('water-supply-type'),
				'status' => 'standby',
				);
			$this->Application_m->insert_sanitary($sanitary_fields);
			//END OF SANITARY

			//SEND NOTIFICATION TO BPLO
			$query = array(
				'referenceNum' => $reference_num,
				'status' => "Unread",
				'role' => 4,
				'notifMessage' => "Incoming",
				);

			$this->Notification_m->insert($query);
			$data['referenceNum'] = $bplo_id; //referenceNum changed to bploId
			echo json_encode($data);
		}
	}//END OF SUBMIT_APPLICATION

	public function store_business_activity()
	{
		$fields = array(
			'bploId' => $this->input->post('referenceNum'),
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
		$navdata['title'] = 'Incoming Applications';
		$navdata['active'] = 'Applications';
		$navdata['notifications'] = User::get_notifications();
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$this->_init_matrix($navdata);

		// var_dump($this->encryption->decrypt($this->session->userdata['userdata']['role']));
		// exit();

		$this->update_notif();

		if($role == "BPLO")
		{
			$query['status'] = 'For validation...';
			$applications = $this->Application_m->get_all_bplo_applications($query);

			foreach ($applications as $key => $value) {
				$data['incoming'][$key] = new BPLO_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
			}
		}
		else if ($role == "Zoning")
		{
			$query['status'] = 'For applicant visit';
			$applications = $this->Application_m->get_all_zoning_applications($query);

			foreach ($applications as $key => $value) {
				$data['incoming'][$key] = new Zoning_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
			}
		}
		else if ($role == "CENRO")
		{
			$query['status'] = 'For applicant visit';
			$applications = $this->Application_m->get_all_cenro_applications($query);

			foreach ($applications as $key => $value) {
				$data['incoming'][$key] = new CENRO_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
			}
		}
		else if ($role == "CHO")
		{
			$query['status'] = 'For applicant visit';
			$applications = $this->Application_m->get_all_sanitary_applications($query);

			foreach ($applications as $key => $value) {
				$data['incoming'][$key] = new Sanitary_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['incoming'][$key]->set_applicationId($this->encryption->decrypt($data['incoming'][$key]->get_applicationId()));
			}
		}
		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/incoming',$data);
	}

	public function pending_applications()
	{
		$this->isLogin();
		$navdata['title'] = "Pending Applications";
		$navdata['active'] = 'Applications';
		$navdata['notifications'] = User::get_notifications();
		$this->_init_matrix($navdata);
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == 'BPLO')
		{
			$query['status'] = 'For applicant visit';
			$applications = $this->Application_m->get_all_bplo_applications($query);

			foreach ($applications as $key => $value) {
				$data['pending'][$key] = new BPLO_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['pending'][$key]->set_applicationId($this->encryption->decrypt($data['pending'][$key]->get_applicationId()));
			}
		}
		else if ($role == "Zoning")
		{
			// $query['status'] = 'On process';
			// $applications = $this->Application_m->get_all_zoning_applications($query);

			// foreach ($applications as $key => $value) {
			// 	$data['pending'][$key] = new Zoning_Application($value->referenceNum);
			// //decrypting appId property for custom encryption
			// 	$data['pending'][$key]->set_applicationId($this->encryption->decrypt($data['pending'][$key]->get_applicationId()));
			// }
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/pending',$data);
	}

	public function on_process_applications()
	{
		$this->isLogin();
		$navdata['title'] = "On Process Applications";
		$navdata['active'] = 'Applications';
		$navdata['notifications'] = User::get_notifications();
		$this->_init_matrix($navdata);
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == "BPLO")
		{
			$query['status'] = 'On Process';
			$applications = $this->Application_m->get_all_bplo_applications($query);

			foreach ($applications as $key => $value) {
				$data['on_process'][$key] = new BPLO_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['on_process'][$key]->set_applicationId($this->encryption->decrypt($data['on_process'][$key]->get_applicationId()));
			}
		}
		else if($role == "Zoning")
		{
			$query['status'] = 'On Process';
			$applications = $this->Application_m->get_all_zoning_applications($query);

			foreach ($applications as $key => $value) {
				$data['on_process'][$key] = new Zoning_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['on_process'][$key]->set_applicationId($this->encryption->decrypt($data['on_process'][$key]->get_applicationId()));
			}
		}
		else if($role == "CENRO")
		{
			$query['status'] = 'On Process';
			$applications = $this->Application_m->get_all_cenro_applications($query);

			foreach ($applications as $key => $value) {
				$data['on_process'][$key] = new CENRO_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['on_process'][$key]->set_applicationId($this->encryption->decrypt($data['on_process'][$key]->get_applicationId()));
			}
		}
		else if($role == "CHO")
		{
			$query['status'] = 'On Process';
			$applications = $this->Application_m->get_all_sanitary_applications($query);

			foreach ($applications as $key => $value) {
				$data['on_process'][$key] = new Sanitary_Application($value->referenceNum);
			//decrypting appId property for custom encryption
				$data['on_process'][$key]->set_applicationId($this->encryption->decrypt($data['on_process'][$key]->get_applicationId()));
			}
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/on-process',$data);
	}

	public function completed_applications()
	{
		$this->isLogin();
		$navdata['title'] = "Complete Requirements";
		$navdata['active'] = 'Applications';
		$navdata['notifications'] = User::get_notifications();
		$navdata['completed'] = User::get_complete_notifications();
		$this->_init_matrix($navdata);
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$query = array(
			'status' => 'Completed',
			);
		$application = $this->Application_m->get_all_bplo_applications($query);

		foreach ($application as $key => $app) {
			$data['complete'][$key] = new BPLO_Application($app->referenceNum);
			$data['complete'][$key]->set_applicationId($this->encryption->decrypt($data['complete'][$key]->get_applicationId()));
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/bplo/complete',$data);
	}

	public function issue_permit($reference_num = null)
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$reference_num = $this->encryption->decrypt(str_replace(['-','_','='], ['/','+','='], $reference_num));
		
		BPLO_Application::update_status($reference_num, 'Active');

		$fields = array(
			'referenceNum' => $reference_num,
			'dept' => $role,
			'type' => 'New',
			);
		$this->Issued_Application_m->insert($fields);

		$this->session->set_flashdata('message','Permit issued! You can now print your applicant\'s Business Permit.');
		redirect('dashboard');
	}

	public function issued_applications()
	{
		$this->isLogin();
		$navdata['title'] = "Issued Applications";
		$navdata['active'] = 'Applications';
		$navdata['notifications'] = User::get_notifications();
		$navdata['completed'] = User::get_complete_notifications();
		$this->_init_matrix($navdata);
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$query = array(
			'status' => 'Active',
			);
		$application = $this->Application_m->get_all_bplo_applications($query);

		foreach ($application as $key => $app) {
			$data['issued'][$key] = new BPLO_Application($app->referenceNum);
			$data['issued'][$key]->set_applicationId($this->encryption->decrypt($data['issued'][$key]->get_applicationId()));
		}

		//custom encryption credentials for URL encryption
		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/issued',$data);
	}

	public function validate_application($referenceNum = null)
	{
		$this->isLogin();
		// var_dump($referenceNum);
		$referenceNum = str_replace(['-','_','='], ['/','+','='], $referenceNum);
		// var_dump($referenceNum);
		$referenceNum = $this->encryption->decrypt($referenceNum);
		$userId = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$role_Id = $this->Role_m->get_roleId($role);

		if($role == "BPLO")
		{
			$application = new BPLO_Application($referenceNum);
			//validate
			$application->change_status($referenceNum, 'For applicant visit');
			$notif_message = $application->get_businessName() . " has been validated by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of BPLO. Please check your application status.";
		}
		else if ($role == "Zoning")
		{
			$application = new Zoning_Application($referenceNum);
			//validate
			$application->change_status($referenceNum, 'On process');
			$notif_message = $application->get_businessName() . " has been validated by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of Zoning Department. Please check application status.";
		}
		else if ($role == "CENRO")
		{
			$application = new CENRO_Application($referenceNum);
			//validate
			$application->change_status($referenceNum, 'On process');
			$notif_message = $application->get_businessName() . " has been validated by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of City Environment and Natural Resources. Please check application status.";
		}
		else if ($role == "CHO")
		{
			$application = new Sanitary_Application($referenceNum);
			//validate
			$application->change_status($referenceNum, 'On process');
			$notif_message = $application->get_businessName() . " has been validated by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of City Health Office. Please check application status.";
		}

		//approvals
		$query = array(
			'referenceNum' => $referenceNum,
			'role' => $role_Id->roleId,
			'type' => "Validate",
			'staff' => $this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName'],
			);
		$this->Approval_m->insert($query);

		//notifications
		$query = array(
			'referenceNum' => $referenceNum,
			'status' => 'Unread',
			'role' => '3',
			'notifMessage' => $notif_message,
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
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$role_Id = $this->Role_m->get_roleId($role);

		//validate if application is legitimately validated
		$query = array(
			'referenceNum' => $referenceNum,
			'type' => "Validate",
			);
		$result = $this->Approval_m->get_all($query);

		if(count($result) > 0)
		{
			if($role == 'BPLO')
			{
				$application = new BPLO_Application($referenceNum);
				//update application status
				$application->change_status($referenceNum, 'On process');
				Zoning_Application::update_status($referenceNum, 'For applicant visit');
				CENRO_Application::update_status($referenceNum, 'For applicant visit');
				Sanitary_Application::update_status($referenceNum, 'For applicant visit');

				$notif_message = $application->get_businessName() . " has been approved by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of BPLO. You can now go to other required offices to process your application.";

				//notify all departments
				for ($i=5; $i <= 10 ; $i++) { 
					$query = array(
						'referenceNum' => $referenceNum,
						'status' => 'Unread',
						'role' => $i,
						//herehere
						'notifMessage' => 'Incoming',
						);
					$this->Notification_m->insert($query);
				}
			}
			else if ($role == "Zoning")
			{
				$application = new Zoning_Application($referenceNum);
				$application->change_status($referenceNum, 'Active');
				$notif_message = $application->get_businessName() . " has been approved by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of Zoning Department.";
			}
			else if ($role == "CENRO")
			{
				$application = new CENRO_Application($referenceNum);
				$application->change_status($referenceNum, 'Active');
				$notif_message = $application->get_businessName() . " has been approved by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of City Environment and Natural Resources.";
			}
			else if ($role == "CHO")
			{
				$application = new Sanitary_Application($referenceNum);
				$application->change_status($referenceNum, 'Active');
				$notif_message = $application->get_businessName() . " has been approved by ".$this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName']." of City Health Office.";
			}

			if($role != "BPLO")
			{
				$fields = array(
					'referenceNum' => $referenceNum,
					'dept' => $role,
					'type' => 'New',
					);
				$this->Issued_Application_m->insert($fields);
			}
			
			//approvals
			$query = array(
				'referenceNum' => $referenceNum,
				'role' => $role_Id->roleId,
				'type' => "Approve",
				'staff' => $this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName'],
				);
			$this->Approval_m->insert($query);

			$query = array(
				'referenceNum' => $referenceNum
				);

			//COMPLETE REQUIREMENTS (NOT FINAL NO BFP, ENGINEERING, ASSESSOR)
			if(count($this->Approval_m->get_all($query)) == 8)
			{
				BPLO_Application::update_status($referenceNum, 'Completed');
				$query = array(
					'referenceNum' => $referenceNum,
					'status' => 'Unread',
					'role' => 4,
					'notifMessage' => 'Completed',
					);
				$this->Notification_m->insert($query);
			}

			//notifications
			//notify applicant
			$query = array(
				'referenceNum' => $referenceNum,
				'status' => 'Unread',
				'role' => '3',
				'notifMessage' => $notif_message,
				);
			$this->Notification_m->insert($query);

			$this->session->set_flashdata('message', 'Application approved!');
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata('message', 'ERROR: Invalid action!');
			redirect('dashboard/pending_applications');
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
		// var_dump($reference_num);
		// exit();

		BPLO_Application::update_status($reference_num, 'Cancelled');
		CENRO_Application::update_status($reference_num, 'Cancelled');
		Zoning_Application::update_status($reference_num, 'Cancelled');
		Sanitary_Application::update_status($reference_num, 'Cancelled');
		redirect('dashboard');
	}

	public function view_application($application_id)
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$navdata['title'] = "View Application";
		$navdata['active'] = "Applications";
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
		$query['applicationId'] = $application_id;

		if($role == 'BPLO')
		{
			//get application using model then map to application object
			
			$data['application'] = $this->Application_m->get_all_bplo_applications($query);
			//map to application object
			$data['application'] = new BPLO_Application($data['application'][0]->referenceNum);
			if($data['application']->get_status() == 'Completed' || $data['application']->get_status() == 'Active')
			{
				$reference_num = $this->encryption->decrypt($data['application']->get_referenceNum());
				unset($query);
				$query['referenceNum'] = $reference_num;
				$query['YEAR(createdAt)'] = date('Y');

				$query['dept'] = 'Zoning';
				$data['zoning'] = $this->Issued_Application_m->get_all($query);
				$query['dept'] = 'CHO';
				$data['sanitary'] = $this->Issued_Application_m->get_all($query);
				//bfp
				//occupancy
			}
			$data['application']->set_referenceNum(str_replace(['/','+','='], ['-','_','='], $data['application']->get_referenceNum()));
			//instantiate Owner of this application
			$data['owner'] = new Owner($this->encryption->decrypt($data['application']->get_userId()));
			$this->load->view('dashboard/bplo/view',$data);
		}
		else if($role == "Zoning")
		{
			//get application using model then map to application object
			$data['application'] = $this->Application_m->get_all_zoning_applications($query);
			//map to application object
			$data['application'] = new Zoning_Application($data['application'][0]->referenceNum);
			$data['application']->set_referenceNum(str_replace(['/','+','='], ['-','_','='], $data['application']->get_referenceNum()));
			//instantiate Owner of this application
			$data['owner'] = new Owner($this->encryption->decrypt($data['application']->get_userId()));

			$this->load->view('dashboard/zoning/view', $data);
		}
		else if($role == "CENRO")
		{
			//get application using model then map to application object
			$data['application'] = $this->Application_m->get_all_cenro_applications($query);
			//map to application object
			$data['application'] = new CENRO_Application($data['application'][0]->referenceNum);
			$data['application']->set_referenceNum(str_replace(['/','+','='], ['-','_','='], $data['application']->get_referenceNum()));
			//instantiate Owner of this application
			$data['owner'] = new Owner($this->encryption->decrypt($data['application']->get_userId()));

			$this->load->view('dashboard/cenro/view', $data);
		}
		else if($role == "CHO")
		{
			//get application using model then map to application object
			$data['application'] = $this->Application_m->get_all_sanitary_applications($query);
			//map to application object
			$data['application'] = new Sanitary_Application($data['application'][0]->referenceNum);
			$data['application']->set_referenceNum(str_replace(['/','+','='], ['-','_','='], $data['application']->get_referenceNum()));
			//instantiate Owner of this application
			$data['owner'] = new Owner($this->encryption->decrypt($data['application']->get_userId()));

			$this->load->view('dashboard/cho/view', $data);
		}
	}

	//FOR AJAX PURPOSES
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

			if(count($notifications) > 0)
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
		// $query = array(
		// 	'status' => "Unread",
		// 	'role' => $role_id->roleId,
		// 	);
		// $data['notifications'] = count($this->Notification_m->get_all($query));
		// unset($query);
		$data['notifications'] = count(User::get_notifications());
		$data['complete'] = count(User::get_complete_notifications());

		$query['status'] = 'For applicant visit';
		$data['pending'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'For validation...';
		$data['incoming'] = count($this->Application_m->get_all_bplo_applications($query));

		$query['status'] = 'On Process';
		$data['process'] = count($this->Application_m->get_all_bplo_applications($query));

		echo json_encode($data);
	}

	public function check_application_status()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$query['userId'] = $user_id;
		$applications = $this->Application_m->get_all_bplo_applications($query);
		foreach ($applications as $key => $value) {
			$data['applications'][$key] = new BPLO_Application($value->referenceNum);
			$data['applications'][$key]->set_applicationId($this->encryption->decrypt($data['applications'][$key]->get_applicationId()));
		}

		//get notifications
		$data['notifications'] = User::get_notifications();


		if($data['notifications'] == "")
			unset($data['notifications']);
		else
			$data['notifications'] = count($data['notifications']);


		$data['custom_encrypt'] = array(
			'cipher' => 'blowfish',
			'mode' => 'ecb',
			'key' => $this->config->item('encryption_key'),
			'hmac' => false
			);

		$this->load->view('dashboard/applicant/application-table-body',$data);
	}

	public function get_business_profile()
	{
		$this->isLogin();
		$business_id = $this->encryption->decrypt($this->input->get('id'));
		$query['businessId'] = $business_id;
		$data['business'] = $this->Business_m->get_all_businesses($query);
		$data['owner_name'] = $this->Owner_m->get_owner_name($data['business'][0]->ownerId);

		$result = (object) array_merge((array) $data['business'][0], (array) $data['owner_name'][0]);

		echo json_encode($result);
	}

}//END OF CLASS,
