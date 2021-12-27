<?php
include "koneksi.php";
require('lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'LAPORAN DATA ANGGOTA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PERPUSTAKAAN SMP NEGERI 3 BALEENDAH',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(37,6,'NOMOR ANGGOTA',1,0);
$pdf->Cell(48,6,'NAMA SISWA',1,0);
$pdf->Cell(13,6,'JK',1,0);
$pdf->Cell(17,6,'KELAS',1,0);
$pdf->Cell(30,6,'NOMOR INDUK',1,0);
$pdf->Cell(22,6,'NISN',1,0);
$pdf->Cell(22,6,'ALAMAT',1,1);


$anggota = mysqli_query($koneksi, "select * from anggota");
while ($row = mysqli_fetch_array($anggota)){
    $pdf->Cell(37,6,$row['id_anggota'],1,0);
    $pdf->Cell(48,6,$row['nama_siswa'],1,0);
    $pdf->Cell(13,6,$row['jk'],1,0);
    $pdf->Cell(17,6,$row['kelas'],1,0); 
    $pdf->Cell(30,6,$row['nomor_induk'],1,0);
    $pdf->Cell(22,6,$row['nisn'],1,0);
    $pdf->Cell(22,6,$row['alamat'],1,1);
}

$pdf->Output();
?>
