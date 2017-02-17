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
		$this->load->model('Gross_m');
		$this->load->model('Archive_m');
		$this->load->model('Notification_m');
		$this->load->model('Renewal_m');
		$this->load->model('Payment_m');
		$this->load->model('Issued_Application_m');
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
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);

		if($role == "BPLO")
		{
			$query['status'] = 'For validation...';
			$data['incoming'] = count($this->Application_m->get_all_bplo_applications($query));

			$query['status'] = 'For applicant visit';
			$data['pending'] = count($this->Application_m->get_all_bplo_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_bplo_applications($query));

			$query['status'] = 'Completed';
			$data['complete'] = count($this->Application_m->get_all_bplo_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_bplo_applications($query));

			$data['total'] = $data['incoming']+$data['pending']+$data['process']+$data['complete']+$data['issued'];
		}
		else if($role == 'Zoning')
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_zoning_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_zoning_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_zoning_applications($query));

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}
		else if($role == 'BFP')
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_bfp_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_bfp_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_bfp_applications($query));

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}
		else if($role == 'CENRO')
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_cenro_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_cenro_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_cenro_applications($query));

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}
		else if($role == "CHO")
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_sanitary_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_sanitary_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_sanitary_applications($query));

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}

		else if($role == "Engineering")
		{
			$query['status'] = 'For applicant visit';
			$data['incoming'] = count($this->Application_m->get_all_engineering_applications($query));

			$query['status'] = 'On process';
			$data['process'] = count($this->Application_m->get_all_engineering_applications($query));

			$query['status'] = 'Active';
			$data['issued'] = count($this->Application_m->get_all_engineering_applications($query));

			$data['total'] = $data['incoming']+$data['process']+$data['issued'];
		}

		$this->load->view('templates/matrix/matrix_includes');
		$this->load->view('templates/matrix/matrix_navbar', $data);
	}

	public function isLogin()
	{
		if(!isset($this->session->userdata['userdata']))
		{
			// $this->session->set_flashdata('failed', 'You are not logged in!');
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

		$this->load->view('dashboard/applicant/renew-application', $data);
	}

	public function submit_renewal_application()
	{
		$this->isLogin();
		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

		$this->form_validation->set_rules('DTISECCDA_RegNum', 'DTI/SEC/CDA Registration Number', 'required|numeric');
		$this->form_validation->set_rules('DTISECCDA_Date', 'DTI/SEC/CDA Date', 'required');
		$this->form_validation->set_rules('brgy-clearance-date-issued','Barangay Clearance Date Issued', 'required');
		$this->form_validation->set_rules('ctc-number', 'CTC Number', 'required|numeric');
		$this->form_validation->set_rules('tin', 'TIN', 'required');
		$this->form_validation->set_rules('occupancy-permit-number', 'Occupancy Permit Number', 'required');
		$this->form_validation->set_rules('id-presented', 'ID Presented', 'required');
		$this->form_validation->set_rules('mode-of-payment', 'Mode of Payment', 'required');
		// $this->form_validation->set_rules('capital-invested', 'Capital Invested', 'required|numeric');
		// $this->form_validation->set_rules('business', 'Business Profile', 'required');

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
		}

		// $this->form_validation->set_rules('code', 'Code', 'required');
		// $this->form_validation->set_rules('line-of-business', 'Line of Business', 'required');
		// $this->form_validation->set_rules('num-of-units', 'Number of Units', 'required');
		// $this->form_validation->set_rules('capitalization', 'Capitalization', 'required');
		$this->form_validation->set_rules('previous-gross[]', 'Previous Gross', 'required|numeric');
		$this->form_validation->set_rules('essential[]', 'Essential', 'required|numeric');
		$this->form_validation->set_rules('non-essential[]', 'Non-essential', 'required|numeric');

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
		$this->form_validation->set_rules('storeys','No. of Storeys','required');
		$this->form_validation->set_rules('portion-occupied','Portion Occupied','required');
		$this->form_validation->set_rules('area-per-floor','Area per Floor','required');

		if($this->form_validation->run() == false)
		{
			// $data['error'] = "Error: Please resolve invalid inputs.";

			//test mode
			$data['error'] = validation_errors();
			$this->session->set_flashdata('error', validation_errors());

			$custom_crypto = array(
				'cipher' => 'blowfish',
				'mode' => 'ecb',
				'key' => $this->config->item('encryption_key'),
				'hmac' => false
				);
			$reference_num = $this->encryption->decrypt($this->input->post('ref'));
			$application_id = $this->encryption->decrypt($this->input->post('aid'));
			$param = bin2hex($this->encryption->encrypt($application_id."|".$reference_num, $custom_crypto));

			// $data['1'] = $param;
			// $data['2'] = validation_errors();

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();


			redirect("form/renew/".$param);	
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

			//validate first to avoid script kiddies
			$reference_num = $this->encryption->decrypt($this->input->post('ref'));

			$this->archive_record($reference_num);

			$business_id = $this->encryption->decrypt($this->input->post('business'));

			//archive old records
			//then update
			
			//START BPLO FORM
			$bplo_fields = array(
				'referenceNum' => $reference_num,
				'userId' => $user_id,
				'businessId' => $this->encryption->decrypt($this->input->post('business')),
				'taxYear' => $this->input->post('tax-year'),
				'applicationDate' => $this->input->post('application-date'),
				'modeOfPayment' => $this->input->post('mode-of-payment'),
				'idPresented' => $this->input->post('id-presented'),
				'DTISECCDA_RegNum' => $this->input->post('DTISECCDA_RegNum'),
				'DTISECCDA_Date' => $this->input->post('DTISECCDA_Date'),
				'brgyClearanceDateIssued' => $this->input->post('brgy-clearance-date-issued'),
				'CTCNum' => $this->input->post('ctc-number'),
				'TIN' => $this->input->post('tin'),
				'entityName' => $entity,
				'status' => 'On process'
				);

			$bplo_id = $this->Application_m->update_bplo($bplo_fields);

			if($this->input->post('rented'))
			{
				$lessor_fields = array(
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
					);

				$this->Lessor_m->update_lessor($lessor_fields);
			}

			//insert gross
			$activities = $this->input->post('activity-id');
			$previousGross = $this->input->post('previous-gross');
			$essential = $this->input->post('essential');
			$non_essential = $this->input->post('non-essential');
			foreach ($activities as $key => $activity) {
				$gross_field = array(
					'activityId' => $this->encryption->decrypt($activity),
					'previousGross' => $previousGross[$key],
					'essentials' => $essential[$key],
					'nonEssentials' => $non_essential[$key],
					);
				$this->Gross_m->insert($gross_field);
			}
			//END BPLO

			//START ZONING
			$zoning_fields = array(
				'userId' => $user_id,
				'referenceNum' => $reference_num,
				'businessId' =>$business_id,
				'status' => 'For applicant visit',
				);
			$this->Application_m->update_zoning($zoning_fields);
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
				'productsAndByProducts' => $this->input->post('products-by-products'),
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
				'status' => 'For applicant visit',
				);
			$this->Application_m->update_cenro($cenro_fields);
			//END CENRO

			//SANITARY
			$sanitary_fields = array(
				'referenceNum' => $reference_num,
				'userId' =>  $user_id,
				'businessId' => $business_id,
				'annualEmployeePhysicalExam' => $this->input->post('annual-exams')=="Yes" ? 1 : 0,
				'typeLevelOfWaterSource' => $this->input->post('water-supply-type'),
				'status' => 'For applicant visit',
				);
			$this->Application_m->update_sanitary($sanitary_fields);
			//END OF SANITARY

			//BFP
			$bfp_fields = array(
				'referenceNum' => $reference_num,
				'userId' => $user_id,
				'businessId' => $business_id,
				'applicationDate' => $this->input->post('application-date'),
				'storeys'  => $this->input->post('storeys'),
				'occupiedPortion' => $this->input->post('portion-occupied'),
				'areaPerFloor' => $this->input->post('area-per-floor'),
				'occupancyPermitNum' => $this->input->post('occupancy-permit-number'),
				'status' => 'For applicant visit',
				);
			$this->Application_m->update_bfp($bfp_fields);
			//END OF BFP

			//ENGINEERING
			$engineering_fields = array(
				'referenceNum' => $reference_num,
				'userId' => $user_id,
				'businessId' => $business_id,
				'status' => 'For applicant visit',
				);
			$this->Application_m->update_engineering($engineering_fields);
			//END ENGINEERING

			//SEND NOTIFICATION TO ALL OFFICES
			//4,5,7,8,9,10
			for($i = 4; $i <= 10 ; $i++)
			{
				if($i != 6)
				{
					$query = array(
						'referenceNum' => $reference_num,
						'status' => "Unread",
						'role' => $i,
						'notifMessage' => "Incoming",
						);

					$this->Notification_m->insert($query);
				}
			}
			$renewal_field = array(
				'referenceNum' => $reference_num,
				'year' => date('Y'),
				);
			$this->Renewal_m->insert($renewal_field);
			$this->session->set_flashdata('message', 'Renewal request has been sent successfully!');

			redirect('dashboard');
		}
	}//END OF SUBMIT RENEWAL APPLICATION

	private function archive_record($reference_num)
	{
		$bplo = new BPLO_Application($reference_num);
		$cenro = new CENRO_Application($reference_num);
		$bfp = new BFP_Application($reference_num);
		$sanitary = new Sanitary_Application($reference_num);

		// $data['bplo'] = $bplo;
		// $data['cenro'] = $cenro;
		// $data['bfp'] = $bfp;
		// $data['sanitary'] = $sanitary;

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit();

		//fugitiveParticulates
		$fugitive_particulates = null;
		foreach ($cenro->get_FugitiveParticulates() as $key => $value) {
			$fugitive_particulates .= "|".$value;
		}
		$fugitive_particulates = substr($fugitive_particulates, 1);

		//steamGenerator
		$steam_generator = null;
		foreach ($cenro->get_SteamGenerator() as $key => $value) {
			$steam_generator .= "|".$value;
		}
		$steam_generator = substr($steam_generator, 1);
		
		//wasteMinimizationMethod
		$waste_minimization_method = null;
		foreach ($cenro->get_WasteMinimizationMethod() as $key => $value) {
			$waste_minimization_method .= "|".$value;
		}
		$waste_minimization_method = substr($waste_minimization_method, 1);
		// echo "<pre>";
		// var_dump($fugitive_particulates." ".$steam_generator." ".$waste_minimization_method);
		// echo "</pre>";
		// exit();


		$archive_application_field = array(
			'referenceNum' => $reference_num, 
			'userId' => $this->encryption->decrypt($bplo->get_UserId()), 
			'taxYear' => $bplo->get_taxyear(), 
			'applicationDate' => $bplo->get_ApplicationDate(), 
			'modeOfPayment' => $bplo->get_ModeOfPayment(), 
			'idPresented' => $bplo->get_IdPresented(), 
			'DTISECCDA_RegNum' => $bplo->get_DTISECCDARegNum(), 
			'DTISECCDA_Date' => $bplo->get_DTISECCDADate(), 
			'brgyClearanceDateIssued' => $bplo->get_BrgyClearanceDateIssued(), 
			'CTCNum' => $bplo->get_CTCNum(), 
			'TIN' => $bplo->get_TIN(), 
			'entityName' => $bplo->get_EntityName(), 
			'dateStarted' => $bplo->get_DateStarted(), 
			'presidentTreasurerName' => $bplo->get_PresidentTreasurerName(), 
			'businessName' => $bplo->get_BusinessName(), 
			'companyName' => $bplo->get_CompanyName(), 
			'tradeName' => $bplo->get_TradeName(), 
			'signageName' => $bplo->get_SignageName(), 
			'organizationType' => $bplo->get_OrganizationType(), 
			'corporationName' => $bplo->get_CorporationName(), 
			'dateOfOperation' => $bplo->get_DateOfOperation(), 
			'businessDesc' => $bplo->get_BusinessDesc(), 
			'PIN' => $bplo->get_PIN(), 
			'bldgName' => $bplo->get_BldgName(), 
			'houseBldgNum' => $bplo->get_HouseBldgNum(), 
			'unitNum' => $bplo->get_UnitNum(), 
			'street' => $bplo->get_Street(), 
			'subdivision' => $bplo->get_Subdivision(), 
			'barangay' => $bplo->get_Barangay(), 
			'cityMunicipality' => $bplo->get_CityMunicipality(), 
			'province' => $bplo->get_province(), 
			'telNum' => $bplo->get_TelNum(), 
			'email' => $bplo->get_Email(), 
			'pollutionControlOfficer' => $bplo->get_PollutionControlOfficer(), 
			'maleEmployees' => $bplo->get_MaleEmployees(), 
			'femaleEmployees' => $bplo->get_FemaleEmployees(), 
			'PWDEmployees' => $bplo->get_PWDEmployees(), 
			'LGUEMployees' => $bplo->get_LGUEmployees(), 
			'businessArea' => $bplo->get_BusinessArea(), 
			'emergencyContactPerson' => $bplo->get_EmergencyContactPerson(), 
			'emergencyTelNum' => $bplo->get_EmergencyTelNum(), 
			'emergencyEmail' => $bplo->get_EmergencyEmail(), 
			'zoneType' => $bplo->get_ZoneType(), 
			'lat' => $bplo->get_lat(), 
			'lng' => $bplo->get_lng(), 
			'gmapAddress' => $bplo->get_GmapAddress(), 
			'ownerFirstName' => $bplo->get_FirstName(), 
			'ownerMiddleName' => $bplo->get_MiddleName(), 
			'ownerLastName' => $bplo->get_LastName(), 
			'ownerHouseBldgNum' => $bplo->get_OwnerHouseBldgNo(), 
			'ownerBldgName' => $bplo->get_OwnerBldgName(), 
			'ownerUnitNum' => $bplo->get_OwnerUnitNum(), 
			'ownerStreet' => $bplo->get_OwnerStreet(), 
			'ownerBarangay' => $bplo->get_OwnerBarangay(), 
			'ownerSubdivision' => $bplo->get_OwnerSubdivision(), 
			'ownerCityMunicipality' => $bplo->get_OwnerCityMunicipality(), 
			'ownerProvince' => $bplo->get_OwnerProvince(), 
			'ownerContactNum' => $bplo->get_OwnerContactNum(), 
			'ownerTelNum' => $bplo->get_OwnerTelnum(), 
			'ownerEmail' => $bplo->get_OwnerEmail(), 
			'ownerPIN' => $bplo->get_OwnerPIN(), 
			'CNC' => $cenro->get_CNC(), 
			'LLDAClearance' => $cenro->get_LLDAClearance(), 
			'dischargePermit' => $cenro->get_DischargePermit(), 
			'apsci' => $cenro->get_APSCI(), 
			'productsAndByProducts' => $cenro->get_productsAndByProducts(), 
			'smokeEmission' => $cenro->get_SmokeEmission(), 
			'volatileCompound' => $cenro->get_VolatileCompound(), 
			'fugitiveParticulates' => $fugitive_particulates,
			'steamGenerator' => $steam_generator,
			'APCD' => $cenro->get_APCD(), 
			'stackHeight' => $cenro->get_StackHeight(), 
			'wastewaterTreatmentFacility' => $cenro->get_WasteWaterTreatmentFacility(), 
			'wastewaterTreatmentOperationAndProcess' => $cenro->get_WasteWaterTreatmentOperationAndProcess(), 
			'pendingCaseWithLLDA' => $cenro->get_pendingCaseWithLLDA(), 
			'typeOfSolidWastesGenerated' => $cenro->get_TypeOfSolidWastesGenerated(), 
			'qtyPerDay' => $cenro->get_QtyPerDay(), 
			'garbageCollectionMethod' => $cenro->get_GarbageCollectionMethod(), 
			'frequencyOfGarbageCollection' => $cenro->get_FrequencyOfGarbageCollection(), 
			'wasteCollector' => $cenro->get_WasteCollector(), 
			'collectorAddress' => $cenro->get_CollectorAddress(), 
			'garbageDisposalMethod' => $cenro->get_GarbageDisposalMethod(), 
			'wasteMinimizationMethod' => $waste_minimization_method,
			'drainageSystem' => $cenro->get_DrainageSystem(), 
			'drainageType' => $cenro->get_DrainageType(), 
			'drainageDischargeLocation' => $cenro->get_DrainageDischargeLocation(), 
			'sewerageSystem' => $cenro->get_SewerageSystem(), 
			'septicTank' => $cenro->get_SepticTank(), 
			'sewerageDischargeLocation' => $cenro->get_SewerageDischargeLocation(), 
			'waterSupply' => $cenro->get_WaterSupply(), 
			'storeys' => $bfp->get_Storeys(), 
			'occupiedPortion' => $bfp->get_OccupiedPortion(), 
			'areaPerFloor' => $bfp->get_AreaPerFloor(), 
			'occupancyPermitNum' => $bfp->get_OccupancyPermitNum(), 
			'annualEmployeePhysicalExam' => $sanitary->get_AnnualEmployeePhysicalExam(),
			'typeLevelOfWaterSource' => $sanitary->get_typeLevelOfWaterSource()
			);
$archive_application_id = $this->Archive_m->insert_application($archive_application_field);

foreach ($bplo->get_BusinessActivities() as $key => $activity) {
	$business_activity_field = array(
		'archiveApplicationId' => $archive_application_id,
		'lineOfBusiness' => $activity->lineOfBusiness,
		'capitalization' => $activity->capitalization,
		);	
	$this->Archive_m->insert_business_activity($business_activity_field);
}

if($bplo->get_lessors() != null)
{
	$lessors_field = array(
		'archiveApplicationId' => $archive_application_id,
		'firstName' => $bplo->get_lessors()->firstName,
		'middleName' => $bplo->get_lessors()->middleName,
		'lastName' => $bplo->get_lessors()->lastName,
		'address' => $bplo->get_lessors()->address,
		'subdivision' => $bplo->get_lessors()->subdivision,
		'barangay' => $bplo->get_lessors()->barangay,
		'cityMunicipality' => $bplo->get_lessors()->cityMunicipality,
		'province' => $bplo->get_lessors()->province,
		'monthlyRental' => $bplo->get_lessors()->monthlyRental,
		'telNum' => $bplo->get_lessors()->telNum,
		'email' => $bplo->get_lessors()->email,
		);
	$this->Archive_m->insert_lessor($lessors_field);
}
}

public function finalize($reference_num)
{
	$this->isLogin();
	echo script_tag('assets/js/jquery.min.js');
	echo script_tag('assets/js/parsley.min.js');
	$navdata['title'] = 'BPLO - Finalize';
	$navdata['active'] = 'Applications';
				//get notifications
	$navdata['notifications'] = User::get_notifications();
	$navdata['completed'] = User::get_complete_notifications();
	$this->_init_matrix($navdata);
	$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);

	$reference_num = $this->encryption->decrypt(str_replace(['-','_','='], ['/','+','='], $reference_num));

	$data['application'] = new BPLO_Application($reference_num);

	$this->load->view('dashboard/bplo/finalization', $data);
}

public function submit_finalization()
{
	$this->isLogin();

	$this->form_validation->set_rules('hidden-paid-up-to', 'Paid Up To','required');
	$this->form_validation->set_rules('or-number', 'OR Number','required');
	$this->form_validation->set_rules('amount-paid', 'Amount Paid', 'required|numeric');

	if($this->form_validation->run() == false)
	{
		$reference_num = str_replace(['/','+','='], ['-','_','='], $this->input->post('ref'));
		$this->session->set_flashdata('error', validation_errors());
		redirect("form/finalize/".$reference_num);
	}
	else
	{
		$reference_num = $this->encryption->decrypt(str_replace(['-','_','='], ['/','+','='], $this->input->post('ref')));

		$query['referenceNum'] = $reference_num;
		$this->Assessment_m->update_assessment($query, $this->input->post('amount-paid'), $this->input->post('hidden-paid-up-to'));

		$payment_field = array(
			'referenceNum' => $reference_num,
			'orNumber' =>  $this->input->post('or-number'),
			'amountPaid' => $this->input->post('amount-paid'),
			'quarterPaid' => $this->input->post('hidden-paid-up-to'),
			);
		$this->Payment_m->insert_payment($payment_field);

		$user_id = $this->encryption->decrypt($this->session->userdata['userdata']['userId']);
		$role = $this->encryption->decrypt($this->session->userdata['userdata']['role']);
		$role_Id = $this->Role_m->get_roleId($role);
		BPLO_Application::update_status($reference_num, 'Active');

		$query = array(
			'referenceNum' => $reference_num,
			'role' => $role_Id->roleId,
			'type' => "Issue",
			'staff' => $this->session->userdata['userdata']['firstName'] . " " . $this->session->userdata['userdata']['lastName'],
			);
		$this->Approval_m->insert($query);

		$bplo = new BPLO_Application($reference_num);
		$fields = array(
			'referenceNum' => $reference_num,
			'dept' => $role,
			'type' => $bplo->get_ApplicationType()=="New" ? 'New' : 'Renew',
			);
		$this->Issued_Application_m->insert($fields);

		$this->session->set_flashdata('message', 'Payment validated, applicant can now claim his/her business permit and business plate');

		redirect('dashboard');
	}
}
}//END OF CLASS