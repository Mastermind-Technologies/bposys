<?php

require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();


$pdf->AddPage("L");
$pdf->SetTitle("Employees Accomplishment Report");

$pdf->SetFont("Times","B","10");
$pdf->Cell(0,5,"Appendix E",0,0,"C");

$y = $pdf->GetY();
$pdf->SetY($y+10);
$pdf->Cell(0,5,"Sample Reports",0,0,"C");

$y = $pdf->GetY();
$pdf->SetY($y+10);
$pdf->MultiCell(0,5,"EMPLOYEES ACCOMPLISHMENT REPORT\nFOR THE PERIOD JANUARY TO JUNE 2016",1,"C");

$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->Cell(0,5,"Business Permit",1,1,"C");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFont("Times","","10");
$pdf->Text($x,$y+13,"NEW");
$pdf->Text($x,$y+22,"RENEWAL");
$pdf->SetFont("Times","B","10");
$pdf->Text($x,$y+28,"TOTAL");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+30,$y);
$pdf->SetFont("Times","","10");
$pdf->Cell(18,5,"JAN",1,0,"C");
$pdf->Cell(18,5,"FEB",1,0,"C");
$pdf->Cell(18,5,"MAR",1,0,"C");
$pdf->Cell(18,5,"APR",1,0,"C");
$pdf->Cell(18,5,"MAY",1,0,"C");
$pdf->Cell(18,5,"JUN",1,0,"C");
$pdf->Cell(18,5,"JUL",1,0,"C");
$pdf->Cell(18,5,"AUG",1,0,"C");
$pdf->Cell(18,5,"SEP",1,0,"C");
$pdf->Cell(18,5,"OCT",1,0,"C");
$pdf->Cell(18,5,"NOV",1,0,"C");
$pdf->Cell(18,5,"DEC",1,0,"C");
$pdf->Cell(31,5,"TOTAL",1,1,"C");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+30,$y);
$pdf->SetFont("Times","","10");
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+48,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+66,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+84,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+102,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+120,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+138,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+156,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+174,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+192,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+210,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+228,$y);
$pdf->MultiCell(18,18,"",1,"R");
$pdf->SetXY($x+246,$y);
$pdf->MultiCell(31,18,"",1,"R");

//
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+30,$y);
$pdf->SetFont("Times","B","10");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(18,8,"",1,0,"R");
$pdf->Cell(31,8,"",1,1,"R");
// //
$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->Cell(0,5,"INSPECTED ESTABLISHMENT",1,1,"C");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x+30,$y);
$pdf->SetFont("Times","","10");
$pdf->Cell(18,5,"JAN",1,0,"C");
$pdf->Cell(18,5,"FEB",1,0,"C");
$pdf->Cell(18,5,"MAR",1,0,"C");
$pdf->Cell(18,5,"APR",1,0,"C");
$pdf->Cell(18,5,"MAY",1,0,"C");
$pdf->Cell(18,5,"JUN",1,0,"C");
$pdf->Cell(18,5,"JUL",1,0,"C");
$pdf->Cell(18,5,"AUG",1,0,"C");
$pdf->Cell(18,5,"SEP",1,0,"C");
$pdf->Cell(18,5,"OCT",1,0,"C");
$pdf->Cell(18,5,"NOV",1,0,"C");
$pdf->Cell(18,5,"DEC",1,0,"C");
$pdf->Cell(31,5,"TOTAL",1,1,"C");

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFont("Times","","10");
  $pdf->Text($x,$y+13,"PAPAG");
  $pdf->Text($x,$y+22,"KASILAG");
  $pdf->Text($x,$y+31,"IBARBIA");
  $pdf->Text($x,$y+40,"SAMSON");
  $pdf->Text($x,$y+49,"MARCELLANA");
  $pdf->Text($x,$y+58,"OGAMA");
  $pdf->SetFont("Times","B","10");
  $pdf->Text($x,$y+64,"TOTAL");

  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x+30,$y);
  $pdf->SetFont("Times","","10");
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+48,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+66,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+84,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+102,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+120,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+138,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+156,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+174,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+192,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+210,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+228,$y);
  $pdf->MultiCell(18,59,"",1,"R");
  $pdf->SetXY($x+246,$y);
  $pdf->MultiCell(31,59,"",1,"R");

  $x = $pdf->GetX();
  $y = $pdf->GetY();
  $pdf->SetXY($x+30,$y);
  $pdf->SetFont("Times","B","10");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(18,8,"",1,0,"R");
  $pdf->Cell(31,8,"",1,1,"R");
$pdf->Output();
 ?>
