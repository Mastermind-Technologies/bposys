<?php

require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetTitle("CENRO Form");

//Variables or Data
// $nameCo
// $add=
// $natBusi
// $pollCtrlOfficer
// $officePhoneNum
// $cnc=
// $llda=
// $dischargePermit
// $apsci
// $productsAndByProducts
// $smokeEmission
// $volatileCompound
// $airPollCtrlDevice=
// $wwtf=
// $wwtop=
// $copyOfwwLabTest
// $pendingCaseLlda=
// $tswg=
// $mgc=
// $fgc=
// $ccsw
// $mgd=
// $mwm
// $ds
// $dt
// $wd
// $ss
// $st=
// $swd
// $wss=


//
$pdf->SetFont("Arial","B","10");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"CENRO-001-0");

//
$pdf->Image('application/views/dashboard/cenro/binan_city_seal.jpg',$x+13,$y+2,20,20);
$pdf->SetFont("Arial","B","9");
$pdf->SetY($y+5);
$pdf->Cell(0,5,"Province of Laguna",0,1,"C");
$pdf->Cell(0,5,"City of Binan",0,1,"C");
$pdf->Cell(0,5,"CITY ENVIRONMENT AND NATURAL RESOURCES OFFICE",0,1,"C");
$pdf->Image('application/views/dashboard/cenro/binan_city_seal.jpg',$x+160,$y+2,20,20);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->SetFont("Arial","B","10");
$pdf->Cell(0,5,"ENVIRONMENTAL DATA SHEET",0,1,"C");
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"(Note: Accomplish this form as applicable and submit to the City ENRO and secure an Environmental Clearance)",0,1,"C");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetY($y+5);
  $pdf->SetFont("Arial","","9");
$pdf->Cell(0,5,"Name of Company:",1,1,"L");
$pdf->SetXY(40,50);
$pdf->Cell(0,5,"---- -----",0,1,"L");
$pdf->Cell(0,5,"Complete Address:",1,1,"L");
$pdf->SetXY(40,55);
$pdf->Cell(0,5,"---- -----",0,1,"L");
$pdf->Cell(0,5,"Nature of Business:",1,1,"L");
$pdf->SetXY(41,60);
$pdf->Cell(0,5,"---- -----",0,1,"L");
$pdf->Cell(0,5,"Pollution Control Officer:",1,1,"L");
$pdf->SetXY(49,65);
$pdf->Cell(0,5,"---- -----",0,1,"L");
$pdf->SetXY(113,65);
$pdf->Cell(0,5,"Office Phone Number:",0,1,"L");
$pdf->SetXY(148,65);
$pdf->Cell(0,5,"---- -----",0,1,"L");

//
$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->Cell(0,5,"Environmental Compliance Certificate / CNC:",1,1,"L");
   $pdf->SetXY(94,75.5);
   $x = $pdf->GetY();
   $y = $pdf->GetY();
   $pdf->Cell(5,3.8,"",1,0,"L");
   $pdf->Cell(0,5,"YES",0,0,"L");
   $pdf->SetXY(110,75.5);
   $pdf->Cell(5,3.8,"",1,0,"L");
   $pdf->Cell(0,5,"NONE",0,0,"L");
   $pdf->SetX(130);
   $pdf->Cell(0,5,"Date Issued:",0,0,"L");
   $pdf->SetX(150);
   $pdf->Cell(0,5,"---- -----",0,1,"L");

   //
   $cbCNC = "Yes";
   if($cbCNC == "")
   {
   $pdf->SetXY(94.5,76.2);
   $pdf->Cell(4, 3,"X",0, 0);
   }
   else if($cbCNC == "Yes")
   {
     $pdf->SetXY(110.5,76.2);
     $pdf->Cell(4, 3,"X",0, 0);
   }

   //
   $pdf->SetY(80);
$pdf->Cell(0,5,"LLDA Clearance / Certificate of Exemption:",1,1,"L");
  $pdf->SetXY(94,80.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(110,80.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");
  $pdf->SetX(130);
  $pdf->Cell(0,5,"Date Issued:",0,0,"L");
  $pdf->SetX(150);
  $pdf->Cell(0,5,"---- -----",0,1,"L");

  //
  $cbCertExemp = "Yes";
  if($cbCertExemp == "")
  {
  $pdf->SetXY(94.5,81.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbCertExemp == "Yes")
  {
    $pdf->SetXY(110.5,81.2);
    $pdf->Cell(4, 3,"X",0, 0);
  }

  //
  $pdf->SetY(85);
$pdf->Cell(0,5,"Discharge Permit:",1,1,"L");
  $pdf->SetXY(94,85.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(110,85.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");
  $pdf->SetX(130);
  $pdf->Cell(0,5,"Date Issued:",0,0,"L");
  $pdf->SetX(150);
  $pdf->Cell(0,5,"---- -----",0,1,"L");

  //
  $cbDischargePermit = "Yes";
  if($cbDischargePermit == "")
  {
  $pdf->SetXY(94.5,86.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbDischargePermit == "Yes")
  {
    $pdf->SetXY(110.5,86.2);
    $pdf->Cell(4, 3,"X",0, 0);
  }

  //
  $pdf->SetY(90);
$pdf->Cell(0,5,"Permit to Operate/APSCI",1,1,"L");
  $pdf->SetXY(94,90.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(110,90.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");
  $pdf->SetX(130);
  $pdf->Cell(0,5,"Date Issued:",0,0,"L");
  $pdf->SetX(150);
  $pdf->Cell(0,5,"---- -----",0,1,"L");

  //
  $cbAPSCI = "Yes";
  if($cbAPSCI == "")
  {
  $pdf->SetXY(94.5,91.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAPSCI == "Yes")
  {
    $pdf->SetXY(110.5,91.2);
    $pdf->Cell(4, 3,"X",0, 0);
  }

  //
  $pdf->SetY(95);
$pdf->Cell(0,5,"Products and By-Products",1,1,"L");

//
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"A.         Air Pollutants",0,1,"L");

//
$pdf->SetFont("Arial","","9");
$pdf->Cell(0,5,"    a. Smoke / Emission",1,1,"L");

  //
  $cbAP = "Yes";
  if($cbAP == "")
  {
  $pdf->SetXY(51.5,106.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(51.5,111.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(119.5,106.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(143.5,106.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(167.5,106.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(109.5,111.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "")
  {
  $pdf->SetXY(133.5,111.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbAP == "Yes")
  {
  $pdf->SetXY(157.5,111.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(51.00125,105.5);
$pdf->Cell(5,3.8,"",1,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x+18);
$pdf->Cell(35,5,"c.  Fugitive Particulates",0,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x+10);
$pdf->Cell(5,3.8,"",1,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(9,3.8,"Dust",0,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x+10);
$pdf->Cell(5,3.8,"",1,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(9,3.8,"Mist",0,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x+10);
$pdf->Cell(5,3.8,"",1,0,"L");
$x=$pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(8,3.8,"Gas",0,0,"L");
$pdf->SetXY(10.00125,110);
$pdf->Cell(0,5,"    b. Volatile Compound",1,1,"L");
  $pdf->SetXY(51.00125,110.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x+18);
  $pdf->Cell(35,5,"d.  Steam Generator",0,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(10,3.8,"Boiler",0,0,"L");
  //
  $x=$pdf->GetX();
  $pdf->SetX($x+9);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(14,3.8,"Furnace",0,0,"L");
  //
  $x=$pdf->GetX();
  $pdf->SetX($x+5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(23,3.8,"Others/Specify",0,0,"L");
  //
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(15,3.8,"Val",0,0,"L");
$pdf->SetXY(10.00125,115);
$pdf->Cell(126,5,"Air Pollution Control Devices being used:",1,0,"L");
  $pdf->SetXY(69.00125,115.5);
  $pdf->Cell(67,3.8,"Val",0,0,"L");
$pdf->SetXY(136.00125,115);
$pdf->Cell(64,5,"Stack Height:",1,1,"L");
  $pdf->SetXY(157.00125,115.5);
  $pdf->Cell(43,3.8,"Val",0,0,"L");

//
$pdf->SetXY(10,120);
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"B.         Wastewater",0,1,"L");

//
$pdf->SetFont("Arial","","9");
  $pdf->SetXY(10,125);
$pdf->Cell(0,5,"Wastewater Treatment Facility",1,1,"L");
  $pdf->SetXY(55,125.5);
  $pdf->Cell(145,3.8,"Val",0,0,"L");

  //
  $cbwtop = "Yes";
  if($cbwtop == "")
  {
  $pdf->SetXY(113.5,131.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbwtop == "Yes")
  {
  $pdf->SetXY(131.5,131.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
  $pdf->SetXY(10,130);
$pdf->Cell(0,5,"Wastewater Treatment Operation and Process",1,1,"L");
  $pdf->SetXY(113,130.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(131,130.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");
$pdf->SetXY(10,135);
$pdf->Cell(0,5,"Note: Furnish copy of latest wastewater laboratory test results",1,1,"L");
  $pdf->SetXY(99,135.5);
  $pdf->Cell(101,3.8,"Val",0,0,"L");

  //
  $cbPendingCaseLLDA = "Yes";
  if($cbPendingCaseLLDA == "Yes")
  {
  $pdf->SetXY(68.8,141.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbPendingCaseLLDA == "")
  {
  $pdf->SetXY(134.5,141.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,140);
$pdf->Cell(0,5,"Pending case with LLDA?",1,1,"L");
  $pdf->SetXY(68.5,140.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES, Case No.",0,0,"L");
  $pdf->SetXY(134,140.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");
//
$pdf->SetXY(10,145);
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"C.         Solid Wastes",0,1,"L");

//
$pdf->SetFont("Arial","","9");
$pdf->SetXY(10,150);
$pdf->Cell(0,5,"Type of Solid Wastes Generated:",1,1,"L");
  $pdf->SetXY(58,150.5);
  $pdf->Cell(60,5,"Val",0,0,"L");
  $pdf->SetXY(118,150.5);
  $pdf->Cell(26,5,"Quantity per day:",0,0,"L");
  $pdf->SetXY(144,150.5);
  $pdf->Cell(56,5,"Val",0,0,"L");
$pdf->SetXY(10,155);
$pdf->Cell(0,5,"Method of Garbage Collection:",1,1,"L");
  $pdf->SetXY(55,155.5);
  $pdf->Cell(145,5,"Val",0,0,"L");

  //
  $cbFreqGarbageCollection = "Yes";
  if($cbFreqGarbageCollection == "")
  {
  $pdf->SetXY(74.5,161.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbFreqGarbageCollection == "")
  {
  $pdf->SetXY(123.5,161.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbFreqGarbageCollection == "Yes")
  {
  $pdf->SetXY(162.5,161.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,160);
$pdf->Cell(0,5,"Frequency of Garbage Collection:",1,1,"L");
  $pdf->SetXY(74,160.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Daily",0,0,"L");
  $pdf->SetXY(123,160.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Weekly",0,0,"L");
  $pdf->SetXY(162,160.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(23,3.8,"Others/Specify",0,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(10,3.8,"Val",0,0,"L");
$pdf->SetXY(10,165);
$pdf->Cell(0,5,"Person / Company Collection Solid Wastes:",1,1,"L");
  $pdf->SetXY(73,165.5);
  $pdf->Cell(60,5,"Val",0,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(14,5,"Address:",0,0,"L");
  $x=$pdf->GetX();
  $pdf->SetX($x);
  $pdf->Cell(53,5,"Val",0,0,"L");

  //
  $cbMethodGarbageDisposal = "Yes";
  if($cbMethodGarbageDisposal == "")
  {
  $pdf->SetXY(74.5,171.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbMethodGarbageDisposal == "Yes")
  {
  $pdf->SetXY(137.5,171.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,170);
$pdf->Cell(0,5,"Method of Garbage Disposal:",1,1,"L");
  $pdf->SetXY(74,170.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Sanitary Landfill",0,0,"L");
  $pdf->SetXY(137,170.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Controlled Dumpsite",0,0,"L");

  //
  $cbMethodWasteMin = "Yes";
  if($cbMethodWasteMin == "")
  {
  $pdf->SetXY(74.5,176.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbMethodWasteMin == "")
  {
  $pdf->SetXY(123.5,176.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbMethodWasteMin == "Yes")
  {
  $pdf->SetXY(162.5,176.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,175);
$pdf->Cell(0,5,"Method of Waste Minimization (if any)",1,1,"L");
  $pdf->SetXY(74,175.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Recycling",0,0,"L");
  $pdf->SetXY(123,175.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Reduction",0,0,"L");
  $pdf->SetXY(162,175.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(23,3.8,"Re-use",0,0,"L");

//
$pdf->SetFont("Arial","B","9");
$pdf->SetXY(10,180);
$pdf->Cell(0,5,"D.         Drainage",0,1,"L");

//
$pdf->SetFont("Arial","","9");

//
$cbDrainageSystem = "Yes";
if($cbDrainageSystem == "")
{
$pdf->SetXY(74.5,186.2);
$pdf->Cell(4, 3,"X",0, 0);
}
else if($cbDrainageSystem == "Yes")
{
$pdf->SetXY(123.5,186.2);
$pdf->Cell(4, 3,"X",0, 0);
}

//
$pdf->SetXY(10,185);
$pdf->Cell(0,5,"Drainage System:",1,1,"L");
  $pdf->SetXY(74,185.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(123,185.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");

  //
  $cbDStype = "Yes";
  if($cbDStype == "Yes")
  {
  $pdf->SetXY(50.5,191.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbDStype == "")
  {
  $pdf->SetXY(134.5,191.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,190);
$pdf->Cell(0,5,"Type:",1,1,"L");
  $pdf->SetXY(50,190.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Closed Underground",0,0,"L");
  $pdf->SetXY(134,190.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Open Canal",0,0,"L");

  //
  $cbWhereDischarge = "Yes";
  if($cbWhereDischarge == "Yes")
  {
  $pdf->SetXY(50.5,196.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbWhereDischarge == "")
  {
  $pdf->SetXY(134.5,196.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,195);
$pdf->Cell(0,5,"Where Discharged:",1,1,"L");
  $pdf->SetXY(50,195.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Public Drainage System",0,0,"L");
  $pdf->SetXY(134,195.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Natural Outfall/Waterbody",0,0,"L");

//
$pdf->SetXY(10,200);
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"E.         Sewerage",0,1,"L");

//
$pdf->SetXY(10,205);
$pdf->SetFont("Arial","","9");
$pdf->Cell(0,5,"Sewerage System:",1,1,"L");

  //
  $cbSewerageSystem = "Yes";
  if($cbSewerageSystem == "Yes")
  {
  $pdf->SetXY(74.5,206.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbSewerageSystem == "")
  {
  $pdf->SetXY(123.5,206.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
  $pdf->SetXY(74,205.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(123,205.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");

  //
  $cbSewerageSystem = "Yes";
  if($cbSewerageSystem == "")
  {
  $pdf->SetXY(74.5,211.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbSewerageSystem == "Yes")
  {
  $pdf->SetXY(123.5,211.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,210);
$pdf->Cell(0,5,"Septic Tank:",1,1,"L");
  $pdf->SetXY(74,210.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"YES",0,0,"L");
  $pdf->SetXY(123,210.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"NONE",0,0,"L");

  //
  $cbWhereDischarge2 = "Yes";
  if($cbWhereDischarge2 == "")
  {
  $pdf->SetXY(50.5,216.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }
  else if($cbWhereDischarge2 == "Yes")
  {
  $pdf->SetXY(134.5,216.2);
  $pdf->Cell(4, 3,"X",0, 0);
  }

  //
$pdf->SetXY(10,215);
$pdf->Cell(0,5,"Where Discharged:",1,1,"L");
  $pdf->SetXY(50,215.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Public Drainage System",0,0,"L");
  $pdf->SetXY(134,215.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Treatment in Septic Tank",0,0,"L");

//

$cbWhereDischarge2 = "Yes";
if($cbWhereDischarge2 == "")
{
$pdf->SetXY(16.5,226.2);
$pdf->Cell(4, 3,"X",0, 0);
}
else if($cbWhereDischarge2 == "")
{
$pdf->SetXY(66.5,226.2);
$pdf->Cell(4, 3,"X",0, 0);
}
else if($cbWhereDischarge2 == "Yes")
{
$pdf->SetXY(139.5,226.2);
$pdf->Cell(4, 3,"X",0, 0);
}

//
$pdf->SetXY(10,220);
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"F.         Water Supply/ Source",0,1,"L");
  $pdf->SetFont("Arial","","9");
  $pdf->SetXY(16,225.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Deep Well",0,0,"L");
  $pdf->SetXY(66,225.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Local Water Utility",0,0,"L");
  $pdf->SetXY(139,225.5);
  $pdf->Cell(5,3.8,"",1,0,"L");
  $pdf->Cell(0,5,"Surface Water",0,0,"L");

//
$pdf->SetXY(10,225);
$pdf->SetFont("Arial","","9");
$pdf->Cell(0,5,"",1,1,"L");

//
$pdf->SetXY(10,230);
$pdf->SetFont("Arial","B","9");
$pdf->Cell(0,5,"G.         Hazardous Waste Treater / Transporter",0,1,"L");

//
$y=$pdf->GetY();
$pdf->SetY($y+3);
$pdf->Cell(0,38,"",1,1,"L");
$pdf->SetXY(20,$y+6.5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFont("Arial","","9");

$pdf->Text($x,$y,"I  hereby  certify,  to  the  best  of  my  knowledge,  that  the  above  information  are  true  and  correct.  Any  wrong  information");
$pdf->SetXY(11,$y+4.5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"provided  will be  enough  grounds  for  revocation  of  our  business  permit.");

$pdf->SetFont("Arial","B","9");
$pdf->SetXY(42,$y+10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+55,$y+4.7);
$x = $pdf->GetX();
$pdf->SetXY($x+1,$y+1);
$pdf->Cell(54,5,"val",0,0,"C");
$pdf->Text($x+10,$y+8,"Pollution Control Officer /");
$pdf->Text($x+2,$y+13,"Duly Authorized Representative");
$pdf->SetXY(129,$y);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+35,$y+4.7);
$x = $pdf->GetX();
$pdf->SetXY($x+1,$y+1);
$pdf->Cell(34,5,"val",0,0,"C");
$pdf->Text($x+15,$y+8,"Date");

$pdf->Output();
 ?>
