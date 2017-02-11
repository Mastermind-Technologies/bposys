<?php

require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetTitle("BPLO Permit Form");

//
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFont("Arial","","7.8");
$pdf->Text($x,$y,"BPLO-001-0");

//
$pdf->SetFont("Arial","B","8");
$pdf->Cell(0,4,"APPLICATION FORM FOR BUSINESS PERMIT",0,1,"C");
$pdf->Cell(0,4,"TAX YEAR ????",0,1,"C");
$pdf->Cell(0,4,"CITY OF BINAN",0,1,"C");

//
$y = $pdf->GetY();
$pdf->SetY($y+4);
$pdf->Cell(0,4,"INSTRUCTIONS",0,1,"L");

//
$pdf->SetFont("Arial","B","7.8");
$pdf->Cell(0,4,"1. Provide accurate information and print legibly to avoid delays. Incomplete application form will be returned to the applicant.",0,1,"L");
$pdf->Cell(0,4,"2. Ensure that all the documents attached to this form (if any are complete and properly filled out.)",0,1,"L");

//
$pdf->SetFont("Arial","B","8");
$pdf->Cell(0,4,"I. APPLICATION SECTION",0,1,"L");
$pdf->Text(157,43,"BIN: 243-00-2016-0002869");
//
$x = $pdf->GetX();
$pdf->SetX($x+5);
$pdf->Cell(0,4,"1. BASIC INFORMATION",0,1,"L");

//
$pdf->SetFont("Arial","","8");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+7,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x,$y+3.7,$x+5,$y+3.7);
$pdf->Text($x+6,$y+3.5,"New");

//
$x = $pdf->GetX();
$pdf->SetXY($x+18,46.00125);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x,$y+3.7,$x+5,$y+3.7);
$pdf->Text($x+6,$y+3.5,"Renewal");

$typeOfApplication = 'New';
//
if($typeOfApplication == '')
{
  $pdf->SetXY(18.00125,47);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($typeOfApplication == 'New')
{
  $pdf->SetXY(36.00125,47);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}

//
$x = $pdf->GetX();
$pdf->SetXY($x,46.00125);
$pdf->Text($x+33,$y+3.5,"Mode of Payment:");

//
$x = $pdf->GetX();
$pdf->SetXY($x+57,46.00125);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x,$y+3.7,$x+5,$y+3.7);
$pdf->Text($x+6,$y+3.5,"Anually");

//
$x = $pdf->GetX();
$pdf->SetXY($x+18,46.00125);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x,$y+3.7,$x+5,$y+3.7);
$pdf->Text($x+6,$y+3.5,"Semi-Annually");

//
$x = $pdf->GetX();
$pdf->SetXY($x+27,46.00125);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x,$y+3.7,$x+5,$y+3.7);
$pdf->Text($x+6,$y+3.5,"Quarterly");

$modeOfPayment = 'Anually';
//
if($modeOfPayment == '')
{
  $pdf->SetXY(98.00125,47);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($modeOfPayment == '')
{
  $pdf->SetXY(116.00125,47);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($modeOfPayment == 'Anually')
{
  $pdf->SetXY(143.00125,47);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
//
// $y = $pdf->GetY();
$pdf->SetY(50.2012);
  // $y = $pdf->GetY();
$pdf->Cell(94,4,"Date of Application: ",1,0,"L");
$pdf->Cell(94,4,"Date Started: ",1,1,"L");

//
$pdf->Cell(94,4,"TIN No: ",1,0,"L");
$pdf->Cell(94,4,"DTI/SEC/CDA Registration No: ",1,1,"L");

//
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(188,4,"Type of Business:",1,1,"L");

  $pdf->SetX($x,$y);
  $pdf->Text($x+29,$y+3,"Single");
  //
  $pdf->SetX($x);
  $pdf->Text($x+41,$y+3,"Partnership");
  //
  $pdf->SetX($x);
  $pdf->Text($x+62,$y+3,"Corporation");
  //
  $pdf->SetX($x);
  $pdf->Text($x+85,$y+3,"Cooperative");

//
$typeOfBusiness = 'Single';
//
if($typeOfBusiness == '')
{
  $pdf->SetXY(36.00125,58.9012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($typeOfBusiness == '')
{
  $pdf->SetXY(48.00125,58.9012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($typeOfBusiness == '')
{
  $pdf->SetXY(69.00125,58.9012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($typeOfBusiness == 'Single')
{
  $pdf->SetXY(92.00125,58.9012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}

//
$pdf->SetY(62.2012);
$pdf->Cell(20,4,"Amendment",1,0,"L");
$pdf->Cell(15,4,"From",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Single");
$pdf->Cell(51,4,"",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Partnership");
$pdf->Cell(51,4,"",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Corporation");
$pdf->Cell(51,4,"",1,1,"L");

//
$y = $pdf->GetY();
$pdf->Cell(20,4,"",1,0,"L");
$pdf->Cell(15,4,"To",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Single");
$pdf->Cell(51,4,"",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Partnership");
$pdf->Cell(51,4,"",1,0,"L");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x,$y);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
  $pdf->Line($x+2,$y+3.7,$x+7,$y+3.7);
  $pdf->Text($x+8,$y+3.5,"Corporation");
$pdf->Cell(51,4,"",1,1,"L");

//
$amendmentFrom = 'Single';
if($amendmentFrom == 'Single')
{
  $pdf->SetXY(48.00125,63.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($amendmentFrom == '')
{
  $pdf->SetXY(99.00125,63.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($amendmentFrom == '')
{
  $pdf->SetXY(150.00125,63.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}

//
$amendmentTo = 'Single';
if($amendmentTo == '')
{
  $pdf->SetXY(48.00125,67.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($amendmentTo == '')
{
  $pdf->SetXY(99.00125,67.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($amendmentTo == 'Single')
{
  $pdf->SetXY(150.00125,67.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}

//

$pdf->SetY(70.2012);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x,$y);
  $x = $pdf->GetX();
  $y = $pdf->GetY();
$pdf->Line($x+82,$y+3.7,$x+86,$y+3.7);
$pdf->Text($x+87,$y+3.3,"Yes");
$pdf->Line($x+95,$y+3.7,$x+99,$y+3.7);
$pdf->Text($x+100,$y+3.3,"No");
$pdf->Text($x+106,$y+3.3,"Please specify the entity? ");
$pdf->Cell(188,4,"Are you enjoying tax incentive from any Government Entity? ",1,1,"L");

//
$govEntity = 'Yes';
if($govEntity == 'Yes')
{
  $pdf->SetXY(92.00125,71.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}
else if($govEntity == '')
{
  $pdf->SetXY(105.00125,71.2012);
  $pdf->SetFont("Arial","","8");
  $pdf->Cell(4, 3,"X",0, 0);
}

//
$pdf->SetFont("Arial","B","8");
$pdf->SetY(74.2012);
$pdf->Cell(0,4,"Name of Taxpayer/Registrant",0,1,"C");

//
$pdf->SetFont("Arial","","8");
$pdf->Cell(26,4,"Last Name:",1,0,"L");
$pdf->Cell(68,4,"",1,0,"L");
$pdf->Cell(26,4,"First Name:",1,0,"L");
$pdf->Cell(31,4,"",1,0,"L");
$pdf->Cell(26,4,"Middle Name:",1,0,"L");
$pdf->Cell(11,4,"",1,1,"L");

//
$pdf->Cell(26,4,"Business Name:",1,0,"L");
$pdf->Cell(162,4,"",1,1,"L");
$pdf->Cell(188,4,"Trade Name/Franchise:",1,1,"L");

//
$x = $pdf->GetX();
$pdf->SetX($x+5);
$pdf->SetFont("Arial","B","8");
$pdf->Cell(0,4,"2. OTHER INFORMATION",0,1,"L");

//
$x = $pdf->GetX();
$pdf->SetX($x+5);
$pdf->SetFont("Arial","","7.8");
$pdf->Cell(0,4,"Note: For renewal applications, do not fill up this section unless certain information have changed.",0,1,"L");

//
$pdf->Cell(188,4,"Business Address: ",1,1,"L");
$pdf->Cell(35,4,"Postal Code: ",1,0,"L");
$pdf->Cell(59,4,"",1,0,"L");
$pdf->Cell(35,4,"Email Address: ",1,0,"L");
$pdf->Cell(59,4,"",1,1,"L");

//
$pdf->Cell(35,4,"Telephone No: ",1,0,"L");
$pdf->Cell(59,4,"",1,0,"L");
$pdf->Cell(35,4,"Model No: ",1,0,"L");
$pdf->Cell(59,4,"",1,1,"L");

//
$pdf->Cell(35,4,"Owner's Address: ",1,0,"L");
$pdf->Cell(153,4,"",1,1,"L");

//
$pdf->Cell(35,4,"Postal Code: ",1,0,"L");
$pdf->Cell(59,4,"",1,0,"L");
$pdf->Cell(35,4,"Email Address: ",0,0,"L");
$pdf->Cell(59,4,"",0,1,"L");

//
$pdf->Cell(35,4,"Telephone No: ",1,0,"L");
$pdf->Cell(59,4,"",1,0,"L");
$pdf->Cell(35,4,"Model No: ",1,0,"L");
$pdf->Cell(59,4,"",1,1,"L");

//
$pdf->Cell(188,4,"In case of emergency, provide name of contact person: ",1,1,"L");

//
$pdf->Cell(35,4,"Telephone No/ Mobile No: ",1,0,"L");
$pdf->Cell(59,4,"",1,0,"L");
$pdf->Cell(35,4,"Email Address: ",1,0,"L");
$pdf->Cell(59,4,"",1,1,"L");

//
$y = $pdf->GetY();
$pdf->Text(11,133.2012,"Business Area (in sqm.)");
$pdf->Cell(35,8,"",1,0,"L");
$pdf->Cell(18,8,"",1,0,"L");
$pdf->Cell(48,8,"",1,0,"L");
$pdf->Text(64,133.2012,"Total No. of Employees in");
$pdf->Text(64,137.2012,"Establishment:");
$pdf->Cell(13,8,"",1,0,"L");
$pdf->Cell(61,8,"",1,0,"L");
$pdf->Text(125,133.2012,"No. of Employees Residing within LGU:");
$pdf->Cell(13,8,"",1,1,"L");

//
$pdf->SetFont("Arial","B","8");

$pdf->Cell(0,4,"Note: Fill Up Only if Business Place is Rented",0,1,"L");

//
$pdf->SetFont("Arial","","7.8");
$pdf->Cell(188,4,"Lessor's Full Name: ",1,1,"L");
$pdf->Cell(188,4,"Lessor's Full Address: ",1,1,"L");
$pdf->Cell(188,4,"Lessor's Fill Telephone/Mobile No.:",1,1,"L");
$pdf->Cell(94,4,"Lessor's Email Address:",1,0,"L");
$pdf->Cell(94,4,"Monthly Rental:",1,1,"L");

//
$x = $pdf->GetX();
$pdf->SetX($x+5);
$pdf->SetFont("Arial","B","8");
$pdf->Cell(0,4,"3. BUSINESS ACTIVITY",0,1,"L");

//
$pdf->SetFont("Arial","","7.8");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x,$y);
$pdf->Text($x+114,$y+4,"Capitalization");
$pdf->Text($x+140,$y+4,"Gross/Sales Receipts");
$pdf->Text($x+167,$y+4,"(for Renewal)");
$pdf->Text($x+23,$y+8,"Line of Business");
$pdf->Text($x+110,$y+8,"(for New Business)");
$pdf->Text($x+143,$y+8,"Essential");
$pdf->Text($x+167,$y+8,"Non-Essential");

//
$pdf->SetXY($x,$y+9);
$pdf->Cell(70,4,"",1,0,"L");
$pdf->Cell(40,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(28,4,"",1,1,"L");

//
$pdf->Cell(70,4,"",1,0,"L");
$pdf->Cell(40,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(28,4,"",1,1,"L");

//
$pdf->Cell(70,4,"",1,0,"L");
$pdf->Cell(40,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(28,4,"",1,1,"L");

//
$pdf->Cell(70,4,"",1,0,"L");
$pdf->Cell(40,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(25,4,"",1,0,"L");
$pdf->Cell(28,4,"",1,1,"L");

//
$pdf->SetFont("Arial","","8");
$pdf->Cell(0,4,"Last Payment: 2017 1st Qtr REN",0,1,"L");

//
$pdf->SetFont("Arial","","7.8");
$x = $pdf->GetX();
$pdf->SetX($x+70);
$pdf->Cell(0,4,"Oath of Undertaking",0,1,"L");

//
$y = $pdf->GetY();
$pdf->SetY($y+4);
$pdf->SetFont("Arial","","8");
$pdf->Cell(59,4,"I DECLARE UNDER PENALTY OF PERJURY",0,0,"L");
$pdf->SetFont("Arial","","7.6");
$pdf->Cell(137,4,"that the foregoing information are true based on my personal knowledge and authentic records. Further, I agree to",0,1,"L");
$pdf->Cell(0,4,"comply with the regulatory requirement and other deficiencies within 30 days from release of the business permit, and I am aware that non-compliance within the",0,1,"L");
$pdf->Cell(0,4,"prescribed period would be sufficient ground for cancellation of my business permit and closure of my business establishments.",0,1,"L");

//
$pdf->SetX(77);
$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf->Line($x+15,$y+8,$x+90,$y+8);
$pdf->Text($x+12.5,$y+11,"SIGNATURE OF APPLICANT/TAXPAYER OVER PRINTED NAME");

//
$pdf->Line($x+20,$y+16,$x+85,$y+16);
$pdf->Text($x+43,$y+19,"POSITION/TITLE");

//
$pdf->SetFont("Arial","B","8");
$y = $pdf->GetY();
$pdf->SetY($y+20);
$pdf->Cell(0,4,"II. LGU SECTION (Do Not Fill Up This Section)",0,1,"L");

//
$x = $pdf->GetX();
$pdf->SetX($x+5);
$pdf->Cell(0,4,"1. VERIFICATION OF DOCUMENTS",0,1,"L");

//
$pdf->SetFont("Arial","","7.8");
$pdf->Cell(70,4,"Description",1,0,"C");
$pdf->Cell(70,4,"Office/Agency",1,0,"C");
$pdf->Cell(15,4,"Yes",1,0,"C");
$pdf->Cell(15,4,"No",1,0,"C");
$pdf->Cell(18,4,"Not Needed",1,1,"C");

$pdf->Cell(70,4,"Engineering Clearance",1,0,"L");
$pdf->Cell(70,4,"Office of the Building Official",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"Barangay Clearance (For Renewal)",1,0,"L");
$pdf->Cell(70,4,"Barangay",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"Sanitary Permit/Health Clearance",1,0,"L");
$pdf->Cell(70,4,"City Health Office",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"City Environemntal Certificate",1,0,"L");
$pdf->Cell(70,4,"City Environment and Natural Resources Office",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"Market Clearance (For Stall Holders)",1,0,"L");
$pdf->Cell(70,4,"Office of the City Market Administrator",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"Fire Safety Inspection Certificate",1,0,"L");
$pdf->Cell(70,4,"Bureau of Fire Protection",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

$pdf->Cell(70,4,"Zoning Clearance",1,0,"L");
$pdf->Cell(70,4,"City Planning & Development Office",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(15,4,"",1,0,"L");
$pdf->Cell(18,4,"",1,1,"C");

//
$y = $pdf->GetY();
$pdf->SetY($y);

$pdf->Text(120,$y+8,"Approved by:");
$pdf->SetFont("Arial","","8");
$pdf->Text(115,$y+16,"RENE C. MANABAT");
$pdf->Text(120,$y+20,"BPLO HEAD");
$pdf->Output();
 ?>

<div class="container">

  <div class="row">

      <div class="col-sm-6">

      </div>
  </div>

</div>