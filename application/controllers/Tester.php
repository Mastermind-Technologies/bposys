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
		$this->load->library('form_validation');

		$this->load->model('Business_Address_m');
	}

	public function test_assessment()
	{
		Assessment::compute_zoning_clearance_free(3000000, "Apartments/Townhouses");
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
		$sanitary = new BFP_Application($reference_num);

		$archive_application_field = array(
			'referenceNum' => $reference_num, 
			'userId' => $this->encryption->decrypt($bplo->get_UserId()), 
			'taxYear' => $bplo->get_taxyear(), 
			'applicationDate' => $bplo->get_ApplicationDate(), 
			'modeOfPayment' => $bplo->get_ModeOfPayment(), 
			'idPresented' => $bplo->get_IdPresented(), 
			'DTISECCDA_RegNum' => $bplo->get_DTISECCDARegNum(), 
			'DTISECCDA_Date' => $bplo->get_DTISECCDA_Date(), 
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
			'unitNum' => $blpo->get_UnitNum(), 
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
			'ownerFirstName' => $bplo->get_OwnerFirstName(), 
			'ownerMiddleName' => $bplo->get_OwnerMiddleName(), 
			'ownerLastName' => $bplo->get_OwnerLastName(), 
			'ownerHouseBldgNum' => $bplo->get_OwnerHouseBldgNum(), 
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
			'productsAndByProducts' => $cenro->get_productsByProducts(), 
			'smokeEmission' => $cenro->get_SmokeEmission(), 
			'volatileCompound' => $cenro->get_VolatileCompound(), 
			'fugitiveParticulates' => $cenro->get_FugitiveParticulates(), 
			'steamGenerator' => $cenro->get_SteamGenerator(), 
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
			'wasteMinimizationMethod' => $cenro->get_WasteMinimizationMethod(), 
			'drainageSystem' => $cenro->get_DrainageSystem(), 
			'drainageType' => $cenro->get_DrainageType(), 
			'drainageDischargeLocation' => $cenro->get_DrainageDischargeLocation(), 
			'sewerageSystem' => $cenro->get_SewerageSystem(), 
			'septicTank' => $cenro->get_SepticTank(), 
			'sewerageDischargeLocation' => $cenro->get_SewerageDischargeLocation(), 
			'waterSupply' => $cenro->get_WaterSupply(), 
			'storeys' => $bfp->get_Storeys(), 
			'occupiedPortion' => $bfp->get_OccupiedPortion(), 
			'areaPerFloor' => $bfp->get_ArePerFloor(), 
			'occupancyPermitNum' => $bfp->get_OccupancyPermitNum(), 
			'annualEmployeePhysicalExam' => $sanitary->get_annualEmployeePhysicalExam(), 
			'typeLevelOfWaterSource' => $sanitary->get_typeLevelOfWaterSource(), 
			);

			foreach ($bplo->get_BusinessActivities() as $key => $activities) {
				# code...
			}
			$business_activity_field = array(
				'referenceNum' => $reference_num,
				'lineOfBusiness' => "",
				'capitalization' => "",
				);

			$lessors_field = array(
				'archiveId' => "",
				'referenceNum' => "",
				'firstName' => "",
				'middleName' => "",
				'lastName' => "",
				'address' => "",
				'subdivision' => "",
				'barangay' => "",
				'cityMunicipality' => "",
				'province' => "",
				'monthlyRental' => "",
				'telNum' => "",
				'email' => "",
				);
}

}//END OF CLASS,
