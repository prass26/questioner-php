<?php
require('../fpdf17/fpdf.php');
require('../config.php');

//get invoices data
$query = mysqli_query($dbconnect,"select * from j_aplikasi
    where
    id_user = '".$_GET['id_user']."'");
$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130  ,5,'Jawaban Kuesioner Tingkat Kematangan',0,0);
$pdf->Cell(59   ,5,'Data Responden',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130  ,5,'Dinas Komunikasi Dan Informatika',0,0);
$pdf->Cell(59   ,5,'',0,1);//end of line

$pdf->Cell(130  ,5,'Kota Mojokerto',0,0);
$pdf->Cell(25   ,5,'Tanggal',0,0);
$pdf->Cell(34   ,5,$invoice['tgl_input'],0,1);//end of line

$pdf->Cell(130  ,5,'',0,0);
$pdf->Cell(25   ,5,'ID User',0,0);
$pdf->Cell(34   ,5,$invoice['id_user'],0,1);//end of line

$pdf->Cell(130  ,5,'',0,0);
$pdf->Cell(25   ,5,'Nama',0,0);
$pdf->Cell(34   ,5,$invoice['nama'],0,1);//end of line

//make a dummy empty cell as a vertical spacer

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189  ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->SetFont('Arial','',9);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query = mysqli_query($dbconnect,"select * from j_aplikasi where id_user = '".$invoice['id_user']."'");

//display the items
while($item = mysqli_fetch_array($query)){
    $pdf->Ln();
    $pdf->MultiCell(190  ,5,'PERTANYAAN',1,'C');
    $pdf->MultiCell(190  ,5,$item['pertanyaan'],1,'L',false);
    //add thousand separator using number_format function
    $pdf->MultiCell(190  ,5,'JAWABAN',1,'C');
    $pdf->MultiCell(190   ,5,$item['jawaban'],1,'L',false);//end of line
}



















$pdf->Output();
?>
