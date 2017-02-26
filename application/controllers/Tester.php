<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

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
		$this->load->model('Archive_m');
		$this->load->library('form_validation');
		$this->load->model('Fee_m');
		$this->load->model('Business_Address_m');
	}

	public function test_mayor_fee()
	{
		$business_activity = new stdClass();
		$business_activity->activityId = 62;
		$business_activity->lineOfBusiness = "Amusement Places";
		$business_activity->capitalization = 500000;

		$fee = Assessment::compute_mayors_permit_fee($business_activity, 30);
		echo "<pre>";
		print_r($fee);
		echo "</pre>";
		exit();
		/*
		returns:
		mayor_fee
		tax
		garbage service fee
		*/
	}

	public function test_environmental()
	{
		$fee = Assessment::compute_environmental_clearance_fee(6000000);
		var_dump($fee);
		exit();
	}

	public function test_health_card()
	{
		$fee = Assessment::compute_health_card_fee(20);
		var_dump($fee);
		exit();
	}

	public function test_sanitary_permit()
	{
		$fee = Assessment::compute_sanitary_permit_fee(30);
		var_dump($fee);
		exit();
	}

	public function test_fixed_fees()
	{
		$fees = Assessment::get_fixed_fees();
		echo "<pre>";
		print_r($fees);
		echo "</pre>";
		exit();
	}

	public function test_retirement_fee()
	{
		$fee = Assessment::get_retirement_fee();
		var_dump($fee[0]->fee);
		exit();
	}

	public function show_details()
	{
		$result = $this->Application_m->get_all_bplo_applications();
		//[4] <-- D2D2E57657
		$reference_num = $result[4]->referenceNum;
		$result = new BPLO_Application($reference_num);

		$data['bplo_complete'] = $result;
		$query['referenceNum'] = $reference_num;
		$data['cenro'] = $this->Application_m->get_all_cenro_applications($query);
		$data['zoning'] = $this->Application_m->get_all_zoning_applications($query);
		$data['bfp'] = $this->Application_m->get_all_bfp_applications($query);
		$data['sanitary'] = $this->Application_m->get_all_sanitary_applications($query);
		$data['engineering'] = $this->Application_m->get_all_engineering_applications($query);
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		exit();

	}

	public function archive_application()
	{
		//tester: D2D2E57657
		$reference_num = "D2D2E57657";
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

public function test_concat()
{
	$tax[0] = 1;
	$tax[1] = 1;
	$tax[2] = 1;
	$tax[3] = 1;
	$tax[4] = 1;
	foreach ($tax as $key => $t) {
		var_dump("Q".($key+1));
		echo "<br>";
	}
}

public function test_devices()
{
	$devices = $this->Business_Activity_m->get_amusement_devices(62);

	$total = 0;
	foreach ($devices as $key => $device) {
		$total += $device->ratePerUnit*$device->units;
	}
	echo "<pre>";
	print_r($devices);
	echo "</pre>";
	exit();

}

public function test_bowling_alleys()
{
	$bowling = $this->Business_Activity_m->get_bowling_alleys(62);
	$bowling_fee = $this->Fee_m->get_bowling_alley_fee();
	$total = 0;
	foreach ($bowling as $key => $b) {
		$total += $b->nonAutomaticLanes*$bowling_fee->nonAutomaticLaneFee;
		$total += $b->automaticLanes*$bowling_fee->automaticLaneFee;
	}
	echo "<pre>";
	print_r($total);
	echo "</pre>";
	exit();
}

public function test_financial_institution()
{
	$fee = $this->Business_Activity_m->get_financial_institution_fee(62);
	var_dump($fee);
	exit();
}

public function test_golf_links()
{
	$holes = $this->Business_Activity_m->get_golf_link_fees(62);
	$golf_link_fees = $this->Fee_m->get_golf_link_fees();

	// echo "<pre>";
	// print_r($golf_link_fees);
	// echo "</pre>";
	// exit();
	// 0 - 10
	// 10 - 15
	// 15- 18
	foreach ($golf_link_fees as $key => $golf_link) {
		if($golf_link->above == 0)
		{
			if($holes <= $golf_link->below)
			{
				$fee = $golf_link->fee;
			}
		}
		else if($golf_link->below == 0)
		{
			if($holes >= $golf_link->above)
			{
				$fee = $golf_link->fee;
			}
		}
		else
		{
			if($holes > $golf_link->above && $holes <= $golf_link->below)
			{
				$fee = $golf_link->fee;
			}
		}
	}
	var_dump($fee);

}

public function test_get_req()
{
	//select items.name, submitted_requirements.submittedRequirementsId from items join requirements on items.itemId = requirements.itemId join submitted_requirements on requirements.requirementId = submitted_requirements.requirementId where submitted_requirements.referenceNum = '1E5E2270C6';
	
}

}//END OF CLASS,
