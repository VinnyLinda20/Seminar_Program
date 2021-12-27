<?php
include "koneksi.php";
require('lib/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('assets/images/logo.jpeg', 10,6);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190,7,'SEKOLAH MENENGAH PERTAMA NEGERI 3 BALEENDAH',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR BUKU',0,1,'C');
$pdf->Ln();
$pdf->Output();
?>
