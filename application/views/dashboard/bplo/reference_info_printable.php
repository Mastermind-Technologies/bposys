<?php
require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetTitle("Reference Information");

// $referenceNumber = ;
// $businessName = ;
// $nameOfOwner = ;
// $datePrinted = ;
//
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Image('application/views/dashboard/bplo/ref_bg.jpg',$x-10,$y-10,90,67);
// $pdf->Rect(10,10,90,67);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFont("Arial","B","30");
$pdf->Text($x-6,$y+21.5,"9E9E1D64A2");

$pdf->SetFont("Arial","","14");
$pdf->Text($x+21,$y+35,"Jollibee");
$pdf->Text($x+7,$y+42.6,"Jason Hernandez");
$pdf->Text($x+17,$y+50.3,"February 17, 2017");
$pdf->Output();
 ?>
