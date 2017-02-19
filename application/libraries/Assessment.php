<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment{

	/* NOTE: =====================
	The computations on this library is based on 
	CITY ORDINANCE NO. 13 - (2016) FROM THE OFFICE OF THE SANGGUNIANG PANLUNGSOD
	AN ORDINANCE ENACTING THE
	"REVISED REVENUE CODE OF THE CITY OF BIÑAN (2016)"
	*/

	//MAYORS PERMIT
	public static function compute_mayors_permit_fee($capital, $work_force, $line_of_business, $opt_param = null)
	{
		//UNIT IS PESOS
		//cottage: <500k with < 10 workforce
		//small scale: 500k - 5m with 11 - 99 workforce
		//medium scale: 5M - 20M with 100 - 199 workforce
		//large scale: over 20M with over 200 workforce

		if($capital <= 500000 || $work_force <= 10)
			$ent_scale = "Cottage";
		if(($capital > 500000 && $capital <= 5000000) || ($work_force > 11 && $work_force <= 99))
			$ent_scale = "Small Scale";
		if(($capital > 5000000 && $capital <= 20000000) || ($work_force > 100 && $work_force <= 199))
			$ent_scale = "Medium Scale";
		if($capital > 20000000 || $work_force >= 200)
			$ent_scale = "Large Scale";

		//Manufacturer Kind
		if($line_of_business == "Manufacturer Kind")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 1000; break;
				case "Small Scale": $fee = 3500; break;
				case "Medium Scale": $fee = 5000; break;
				case "Large Scale": $fee = 7000; break;
			}
		}

		//Wholesaler kind
		if($line_of_business == "Wholesaler Kind")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 1000; break;
				case "Small Scale": $fee = 3500; break;
				case "Medium Scale": $fee = 5000; break;
				case "Large Scale": $fee = 7000; break;
			}
		}

		//Exporter kind
		if($line_of_business == "Exporter Kind")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 800; break;
				case "Small Scale": $fee = 2500; break;
				case "Medium Scale": $fee = 4000; break;
				case "Large Scale": $fee = 6500; break;
			}
		}

		//Retailer
		if($line_of_business == "Retailer")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 500; break;
				case "Small Scale": $fee = 1500; break;
				case "Medium Scale": $fee = 3000; break;
				case "Large Scale": $fee = 5000; break;
			}
		}

		//Contractor(Restaurants, cafes, cafeterias)
		if($line_of_business == "Contractor")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 500; break;
				case "Small Scale": $fee = 1500; break;
				case "Medium Scale": $fee = 3000; break;
				case "Large Scale": $fee = 5000; break;
			}
		}

		//Lessor (Renting)
		if($line_of_business == "Lessor (Renting)")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 3000; break;
				case "Small Scale": $fee = 3000; break;
				case "Medium Scale": $fee = 6000; break;
				case "Large Scale": $fee = 10000; break;
			}
		}

		//Peddlers
		if($line_of_business == "Peddlers")
		{
			$fee = 100;
		}

		//Amusement devices/places
		if($line_of_business == "Amusement devices/places")
		{
			//not based on capital
			//NOT FINAL
			switch($ent_scale)
			{
				case "Cottage": $fee = 500; break;
				case "Small Scale": $fee = 1500; break;
				case "Medium Scale": $fee = 3000; break;
				case "Large Scale": $fee = 5000; break;
			}
		}

		//Bank
		if($line_of_business == "Bank")
		{
			//not based capital
			//NOT FINAL
			switch($ent_scale)
			{
				case "Cottage": $fee = 5000; break;
				case "Small Scale": $fee = 5000; break;
				case "Medium Scale": $fee = 7000; break;
				case "Large Scale": $fee = 10000; break;
			}
		}

		//Retail Dealers (liquors)
		if($line_of_business == "Retail Dealers (liquors)")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 3000; break;
				case "Small Scale": $fee = 3000; break;
				case "Medium Scale": $fee = 5000; break;
				case "Large Scale": $fee = 7000; break;
			}
		}

		//Retail Dealers (tobaccos)
		if($line_of_business == "Retail Dealers (tobaccos)")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 3000; break;
				case "Small Scale": $fee = 3000; break;
				case "Medium Scale": $fee = 5000; break;
				case "Large Scale": $fee = 7000; break;
			}
		}

		//Display areas of products
		if($line_of_business == "Display areas of products")
		{
			//50 pesos per square meter of the size of the office or warehouse
			$fee = $opt_param['business_area'] * 50;
			return $fee;
		}

		//Others
		if($line_of_business == "Others")
		{
			switch($ent_scale)
			{
				case "Cottage": $fee = 2500; break;
				case "Small Scale": $fee = 5000; break;
				case "Medium Scale": $fee = 7500; break;
				case "Large Scale": $fee = 10000; break;
			}
		}

		$data['mayor_fee'] = $fee;
		$data['tax'] = $fee * .10;
		$data['line_of_business'] = $line_of_business;
		return $data;
	}

	//ENVIRONMENTAL CLEARANCE
	public static function compute_environmental_clearance_fee($capital)
	{
		//UNIT IS PESOS
		// below 350,000 : 500/year
		// 350,000 - 1,000,000 : 750/year
		// 1,000,000 - 5,000,000 : 1000/year
		// more than 5,000,000 : 1500/year

		if($capital <= 350000)
			$fee = 500;
		if($capital > 350000 && $capital <= 1000000)
			$fee = 750;
		if($capital > 1000000 && $capital <= 5000000)
			$fee = 1000;
		if($capital > 5000000)
			$fee = 1500;

		return $fee;
	}

	//ZONING/LOCATIONAL CLEARANCE
	public static function compute_zoning_clearance_fee($capital, $zone_type)
	{
		//UNIT IS PESOS
		switch($zone_type)
		{
			case "Single residential":
			if($capital <= 100000)
			{
				$fee = 240;
			}
			if($capital > 100000 && $capital <= 200000)
			{
				$fee = 480;
			}
			if($capital > 200000)
			{
				$excess = $capital - 200000;
				$excess_fee = ($excess * 0.01) / 10;
				$fee = 600 + $excess_fee;
			}
			break;

			case "Apartments/Townhouses":
			if($capital <= 500000)
			{
				$fee = 1200;
			}
			if($capital > 500000 && $capital <= 2000000)
			{
				$fee = 1800;
			}
			if($capital > 2000000)
			{
				$excess = $capital - 2000000;
				$excess_fee = ($excess * 0.01) / 10;
				$fee = 3000 + $excess_fee;
			}
			break;

			case "Dormitories":
			if($capital <= 2000000)
			{
				$fee = 2400;
			}
			if($capital > 2000000)
			{
				$excess = $capital - 2000000;
				$excess_fee = ($excess * 0.01) / 10;
				$fee = 2400 + $excess_fee;
			}
			break;

			case "Commercial/Industrial kind":
			if($capital <= 100000)
			{
				$fee = 1200;
			}
			if($capital > 100000 && $capital <= 500000)
			{
				$fee = 1800;
			}
			if($capital > 500000 && $capital <= 1000000)
			{
				$fee = 2400;
			}
			if($capital > 1000000 && $capital <= 2000000)
			{
				$fee = 3600;
			}
			if($capital > 2000000)
			{
				$excess = $capital - 2000000;
				$excess_fee = ($excess * 0.01) / 10;
				$fee = 6000 + $excess_fee;
			}
			break;

			case "Special Uses/Special Projects":
			if($capital <= 2000000)
			{
				$fee = 6000;
			}
			if($capital > 2000000)
			{
				$excess = $capital - 2000000;
				$excess_fee = ($excess * 0.01) / 10;
				$fee = 6000 + $excess_fee;
			}
			break;

		}

		return $fee;
	}

	//SANITARY PERMIT
	public static function compute_sanitary_permit_fee($area)
	{
		if($area <= 25)
		{
			$fee = 100;
		}
		if($area > 25)
		{
			$excess_area = $area - 25;
			$excess_fee = $excess_area * 4;
			$fee = 100 + $excess_fee;
		}

		return $fee;
	}

	//GARBAGE SERVICE FEE
	public static function compute_garbage_service_fee($line_of_business = null)
	{
		//this is not final
		$fee = 600;
		return $fee;
	}

	/*
	Annual Inspection Fee
	Business Inspection Fee
	Business Plate and Sticker
	Health Card Fee
	*/
	public static function get_fixed_fees($work_force)
	{
		// $data['annual_inspection'] = 400;
		$data['business_inspection'] = 200;
		$data['business_plate_sticker'] = 350;
		$data['health_card_fee'] = 100 * $work_force;

		return $data;
	}

	public static function compute_renewal_tax($line_of_business, $gross, $gross_type = null)
	{
		if($line_of_business == "Manufacturer Kind" || $line_of_business == "Retail Dealers (liquors)" || $line_of_business == "Exporter Kind" )
		{
			if($gross < 20000)
			{
				$fee = 432;
			}
			else if($gross >= 20000 && $gross < 30000)
			{
				$fee = 629;
			}
			else if($gross >= 30000 && $gross < 40000)
			{
				$fee = 944;
			}
			else if($gross >= 40000 && $gross < 50000)
			{
				$fee = 1180;
			}
			else if($gross >= 50000 && $gross < 75000)
			{
				$fee = 1888;
			}
			else if($gross >= 75000 && $gross < 100000)
			{
				$fee = 2360;
			}
			else if($gross >= 100000 && $gross < 150000)
			{
				$fee = 3146;
			}
			else if($gross >= 150000 && $gross < 200000)
			{
				$fee = 3932;
			}
			else if($gross >= 200000 && $gross < 300000)
			{
				$fee = 5505;
			}
			else if($gross >= 300000 && $gross < 500000)
			{
				$fee = 7765;
			}
			else if($gross >= 500000 && $gross < 750000)
			{
				$fee = 11440;
			}
			else if($gross >= 750000 && $gross < 1000000)
			{
				$fee = 14300;
			}
			else if($gross >= 1000000 && $gross < 2000000)
			{
				$fee = 19662;
			}
			else if($gross >= 2000000 && $gross < 3000000)
			{
				$fee = 23595;
			}
			else if($gross >= 3000000 && $gross < 4000000)
			{
				$fee = 28314;
			}
			else if($gross >= 4000000 && $gross < 5000000)
			{
				$fee = 33033;
			}
			else if($gross >= 5000000 && $gross < 6500000)
			{
				$fee = 34856.25;
			}
			else if($gross >= 6500000)
			{
				$fee = ($gross*0.01) * 0.5366;
			}

			if($gross_type == "essential")
			{
				return $fee/2;
			}
			else
			{
				return $fee;
			}
		}//end of if 1

		else if($line_of_business == "Wholesaler Kind" || $line_of_business == "Retail Dealers (tobaccos)")
		{
			if($gross < 20000)
			{
				$fee = 393;
			}
			else if($gross >= 20000 && $gross < 30000)
			{
				$fee = 472;
			}
			else if($gross >= 30000 && $gross < 40000)
			{
				$fee = 629;
			}
			else if($gross >= 40000 && $gross < 50000)
			{
				$fee = 944;
			}
			else if($gross >= 50000 && $gross < 75000)
			{
				$fee = 1416;
			}
			else if($gross >= 75000 && $gross < 100000)
			{
				$fee = 1888;
			}
			else if($gross >= 100000 && $gross < 150000)
			{
				$fee = 2674;
			}
			else if($gross >= 150000 && $gross < 200000)
			{
				$fee = 3461;
			}
			else if($gross >= 200000 && $gross < 300000)
			{
				$fee = 4719;
			}
			else if($gross >= 300000 && $gross < 500000)
			{
				$fee = 6292;
			}
			else if($gross >= 500000 && $gross < 750000)
			{
				$fee = 9438;
			}
			else if($gross >= 750000 && $gross < 1000000)
			{
				$fee = 12584;
			}
			else if($gross >= 1000000 && $gross < 2000000)
			{
				$fee = 14300;
			}
			else if($gross >= 2000000)
			{
				$fee = ($fee * 0.01) * 0.715;
			}

			if($gross_type == "essential")
			{
				return $fee/2;
			}
			else
			{
				return $fee;
			}
		}//end of if 2

		else if($line_of_business == "Retailer")
		{
			if($gross >= 50000 && $gross < 400000)
			{
				$fee = $gross * 0.026;
			}
			else if($gross >= 400000)
			{
				$fee = $gross * 0.013;
			}
			else
			{
				$fee = 0;
			}

			if($gross_type == "essential")
			{
				if($fee != 0)
					return $fee/2;
				else
					return $fee;
			}
			else
			{
				return $fee;
			}
		}//end of if 3

		else if($line_of_business == "Contractor" || $line_of_business == "Others" || $line_of_business == "Display areas of products")
		{
			if($gross < 20000)
			{
				$fee = 235.95;
			}
			else if($gross >= 20000 && $gross < 30000)
			{
				$fee = 393.25;
			}
			else if($gross >= 30000 && $gross < 40000)
			{
				$fee = 550.55;
			}
			else if($gross >= 40000 && $gross < 50000)
			{
				$fee = 786.50;
			}
			else if($gross >= 50000 && $gross < 75000)
			{
				$fee = 1258;
			}
			else if($gross >= 75000 && $gross < 100000)
			{
				$fee = 1888;
			}
			else if($gross >= 100000 && $gross < 150000)
			{
				$fee = 2831;
			}
			else if($gross >= 150000 && $gross < 200000)
			{
				$fee = 3775;
			}
			else if($gross >= 200000 && $gross < 250000)
			{
				$fee = 5191;
			}
			else if($gross >= 250000 && $gross < 300000)
			{
				$fee = 6607;
			}
			else if($gross >= 300000 && $gross < 400000)
			{
				$fee = 8809;
			}
			else if($gross >= 400000 && $gross < 500000)
			{
				$fee = 11798;
			}
			else if($gross >= 500000 && $gross < 750000)
			{
				$fee = 13228;
			}
			else if($gross >= 750000 && $gross < 1000000)
			{
				$fee = 14658;
			}
			else if($gross >= 1000000 && $gross < 2000000)
			{
				$fee = 16445;
			}
			else if($gross >= 2000000)
			{
				$fee = ($fee * 0.01) * 0.715;
			}

			return fee;
		}//end of if 4

		else if($line_of_business == "Bank")
		{
			$fee = ($gross * 0.01) * 0.75;
			return $fee;
		}

		else if($line_of_business == "Peddlers")
		{
			//75 pesos per peddler per annum
			return 75;
		}

		else if($line_of_business == "Amusement devices/places")
		{
			if($gross < 20000)
			{
				$fee = 235.95;
			}
			else if($gross >= 20000 && $gross < 30000)
			{
				$fee = 393.25;
			}
			else if($gross >= 30000 && $gross < 40000)
			{
				$fee = 550.55;
			}
			else if($gross >= 40000 && $gross < 50000)
			{
				$fee = 786.50;
			}
			else if($gross >= 50000 && $gross < 75000)
			{
				$fee = 1258;
			}
			else if($gross >= 75000 && $gross < 100000)
			{
				$fee = 1888;
			}
			else if($gross >= 100000 && $gross < 150000)
			{
				$fee = 2831;
			}
			else if($gross >= 150000 && $gross < 200000)
			{
				$fee = 3775;
			}
			else if($gross >= 200000 && $gross < 250000)
			{
				$fee = 5191;
			}
			else if($gross >= 250000 && $gross < 300000)
			{
				$fee = 6607;
			}
			else if($gross >= 300000 && $gross < 400000)
			{
				$fee = 8809;
			}
			else if($gross >= 400000 && $gross < 500000)
			{
				$fee = 11798;
			}
			else if($gross >= 500000 && $gross < 750000)
			{
				$fee = 13228;
			}
			else if($gross >= 750000 && $gross < 1000000)
			{
				$fee = 14658;
			}
			else if($gross >= 1000000 && $gross < 2000000)
			{
				$fee = 16445;
			}
			else if($gross >= 2000000)
			{
				$fee = ($fee * 0.01) * 0.715;
				if($fee < 16445)
				{
					$fee = 16445;
				}
			}

			return $fee;
		}//end of if 5

		else if ($line_of_business == "Lessor (Renting)")
		{
			if($gross < 10000)
			{
				$fee = 420;
			}
			else if($gross >= 10000 && $gross < 20000)
			{
				$fee = 630;
			}
			else if($gross >= 20000 && $gross < 30000)
			{
				$fee = 770;
			}
			else if ($gross >= 30000 && $gross < 40000)
			{
				$fee = 840;
			}
			else if($gross >= 40000 && $gross < 50000)
			{
				$fee = 1050;
			}
			else if($gross >= 50000 && $gross < 100000)
			{
				$fee = 1400;
			}
			else if($gross >= 100000)
			{
				$fee = $gross * 0.014;
			}

			return $fee;
		}
	}//end of compute renewal tax
}