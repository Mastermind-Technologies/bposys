<?php

require("application/views/FPDF/fpdf.php");
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetTitle("Zoning Clearance Form");

$cb = array(1);
$cblength = count($cb);
for($i=0;$i<$cblength;$i++)
{
  if($cb[$i] == 1)
  {
    $pdf->SetXY(72.3,36.50125);
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(4, 3, $check,0, 0);
  }
  else if($cb[$i] == 2)
  {
    $pdf->SetXY(92.3,36.50125);
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(4, 3, $check,0, 0);
  }
  else if($cb[$i] == 3)
  {
    $pdf->SetXY(118.3,36.50125);
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 10);
    $pdf->Cell(4, 3, $check,0, 0);
  }
}

$pdf->SetFont("Arial","","10");
$y = $pdf->GetY();
$pdf->SetXY(10.00125,30.00125);
$pdf->Cell(0,5,"Zoning Clearance for Business Permit Application Form",0,1,"C");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+62,$y+4.7,$x+67,$y+4.7);
$pdf->SetX(71);
$pdf->Cell(7,5,"",0,0,"C");
$x = $pdf->GetX();
$pdf->SetX($x+1);
$pdf->Cell(7,5,"New",0,0,"C");
$pdf->SetX($x+13.5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+5,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x-1);
$pdf->Cell(7,5,"",0,0,"C");
$x = $pdf->GetX();
$pdf->SetX($x-1.5);
$pdf->Cell(20,5,"Additional",0,0,"C");
$pdf->SetX($x+20.5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+5,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x-1);
$pdf->Cell(7,5,"",0,0,"C");
$x = $pdf->GetX();
$pdf->SetX($x-3);
$pdf->Cell(20,5,"Renewal",0,0,"C");

//
$y = $pdf->GetY();
$pdf->SetXY(117.5,$y+17);
$pdf->Cell(25,5,"Application no.",0,0,"L");
$pdf->SetX($x+23);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+50,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(50,5,"[/]",0,0,"C");

$y = $pdf->GetY();
$pdf->SetXY(117.5,$y+5);
$pdf->Cell(25,5,"Date Received",0,0,"L");
$pdf->SetX($x);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+50,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(50,5,"[/]",0,0,"C");

$y = $pdf->GetY();
$pdf->SetXY(117.5,$y+5);
$pdf->Cell(25,5,"Received by:",0,0,"L");
$pdf->SetX($x);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+50,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(50,5,"[/]",0,0,"C");

//
$y = $pdf->GetY();
$pdf->SetY($y+10);
$pdf->Cell(25,5,"Sir/Madam:",0,0,"L");

//
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+10);
$pdf->Cell(6,5,"I,",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+95,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(95,5,"[/]",0,0,"L");
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(60,5,",  owner/operation,   of   legal   age   and",0,0,"L");
$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->Cell(24,5,"residence  of",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+81.5,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(81.5,5,"[/]",0,0,"L");
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(60,5,"hereby   apply   for   a   permit   to   engage   in",0,0,"L");
$y = $pdf->GetY();
$pdf->SetY($y+5);
$pdf->Cell(24,5,"business and for this purpose the following information are submitted:",0,0,"L");

//
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+10);
$pdf->Cell(58,5,"BUSINESS/TRADE NAME            :",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+93,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(93 ,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(85,5,"SIGNAGE NAME (if differ from business/trade name:",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+66,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(66,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(85,5,"NAME OF PERMITEE-",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(70,5,">in case of Corp., the name of Corporation:",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+81,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(81,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(74,5,">in case of Single Proprietor, name of Owner:",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+77,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(77,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(47,5,"BUSINESS ADDRESS       :",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+104,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(104,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(68.5,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x,$y+4.7,$x+103,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(103,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(47,5,"CAPITAL INVESTED         :",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+104,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(104,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(47,5,"DATE OF OPERRATION   :",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+104,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(104,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$pdf->Cell(57,5,"DESCRIPTION OF BUSINESS     :",0,0,"L");
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+94,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x);
$pdf->Cell(94,5,"[/]",0,0,"L");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+151,$y+4.7);
$x = $pdf->GetX();
$pdf->SetX($x+1);
$pdf->Cell(149,5,"[/]",0,0,"L");

//
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+15);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"The   above   declaration   is   subject   to   verification   by   proper   authorities   upon   demand   without ");
$y = $pdf->GetY();
$pdf->SetXY(10,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"objection.   I   promise   to   open   only   the   business(es)   granted   approval   by   this   application,   subject   to");
$y = $pdf->GetY();
$pdf->SetXY(10,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"submission   of   the   applicable   requirements   as   listed   at   the   back   of   application   form.");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"The   Clearance   issued   shall   be   posted   in   a   conspicuous   place   in   the   establishment.");
$y = $pdf->GetY();
$pdf->SetXY(20.5,$y+10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"I   promise   to   surrender   the   business   permit   with   tax   receipts   duly   annonated   by   the   City");
$y = $pdf->GetY();
$pdf->SetXY(10,$y+10);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"Treasurer,   upon   expiration   of   the   period   stated   therein   or   upon   transfer   for   any   cause.   Otherwise,   by");
$y = $pdf->GetY();
$pdf->SetXY(10,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"non-compliance   therewith,   shall   subject   me   to   whatever   amount   of   tax   and   other   charges   that   may  be");
$y = $pdf->GetY();
$pdf->SetXY(10,$y+5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Text($x,$y,"imposed   by   the   government.");
$y = $pdf->GetY();
$pdf->SetXY(120,$y+25);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Line($x+1,$y+4.7,$x+75,$y+4.7);
$pdf->Text($x+20,$y+8,"Signature of Applicant");

$pdf->Output();
 ?>
