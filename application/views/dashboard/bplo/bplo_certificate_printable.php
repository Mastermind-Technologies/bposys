<?php

require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();


$pdf->AddPage();
$pdf->SetTitle("BPLO Certificate");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Image('application/views/dashboard/bplo/bplo_certificate.jpg',$x-10,$y-10,212,195);

$pdf->SetXY(44,62.8);
$pdf->SetFont("Arial","","10");
$pdf->Cell(25,5,"PERMIT No.",1,0,"C");
  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x+2,$y+9);
$pdf->Cell(70,5,"Business Name",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+2,$y+12);
$pdf->Cell(70,5,"Business Address",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+2,$y+13.5);
$pdf->Cell(70,5,"Name of Applicant",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+2,$y+13);
$pdf->Cell(70,5,"Nature of Business",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+11,$y+20);
$pdf->Cell(17,5,"2017",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+24,$y+4);
$pdf->Cell(15,5,"10",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+49,$y);
$pdf->Cell(23,5,"February",1,0,"C");

//
$pdf->SetFont("Arial","","8");
  $y = $pdf->GetY();
  $pdf->SetXY($x+38.5,$y+3.5);
$pdf->Cell(35,5,"Paid under O.R.",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+38.5,$y+3);
$pdf->Cell(35,5,"February 10, 2017",1,0,"C");
  $y = $pdf->GetY();
  $pdf->SetXY($x+38.5,$y+3.5);
$pdf->Cell(35,5,"P 1,000,000.00",1,0,"C");
$pdf->Output();
 ?>
