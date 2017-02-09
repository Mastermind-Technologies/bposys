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
		if($line_of_business == "Wholesaler kind")
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
		if($line_of_business == "Exporter kind")
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

		//Bank
		if($line_of_business == "Bank")
		{
			//not based capital
			// switch($ent_scale)
			// {
			// 	case "Cottage": $fee = 500; break;
			// 	case "Small Scale": $fee = 1500; break;
			// 	case "Medium Scale": $fee = 3000; break;
			// 	case "Large Scale": $fee = 5000; break;
			// }
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
			// switch($ent_scale)
			// {
			// 	case "Cottage": $fee = 500; break;
			// 	case "Small Scale": $fee = 1500; break;
			// 	case "Medium Scale": $fee = 3000; break;
			// 	case "Large Scale": $fee = 5000; break;
			// }
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
		$data['annual_inspection'] = 400;
		$data['business_inspection'] = 200;
		$data['business_plate_sticker'] = 350;
		$data['health_card_fee'] = 100 * $work_force;

		return $data;
	}
}