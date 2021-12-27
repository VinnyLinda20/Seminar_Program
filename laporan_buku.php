<?php
include "koneksi.php";
require('lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'LAPORAN DATA BUKU',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PERPUSTAKAAN SMP NEGERI 3 BALEENDAH',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(23,6,'KODE BUKU',1,0);
$pdf->Cell(64,6,'JUDUL BUKU',1,0);
$pdf->Cell(42,6,'PENGARANG',1,0);
$pdf->Cell(30,6,'PENERBIT',1,0);
$pdf->Cell(23,6,'THN TERBIT',1,0);
$pdf->Cell(16,6,'JUMLAH',1,1);


$buku = mysqli_query($koneksi, "select * from buku");
while ($row = mysqli_fetch_array($buku)){
    $pdf->Cell(23,6,$row['id_buku'],1,0);
    $pdf->Cell(64,6,$row['judul_buku'],1,0);
    $pdf->Cell(42,6,$row['pengarang'],1,0);
    $pdf->Cell(30,6,$row['penerbit'],1,0); 
    $pdf->Cell(23,6,$row['tahun_terbit'],1,0);
    $pdf->Cell(16,6,$row['jumlah'],1,1);
}
$pdf->Cell(10,7,'',0,1);
$tampil = mysqli_query($koneksi, "select * from buku order by id_buku");
$total = mysqli_num_rows($tampil);
$pdf->Cell(35,6,'Jumlah total buku  : '.$total,0,1,'C');
$bukuHabis = mysqli_query($koneksi, "select * from buku where jumlah <1");
$totalbukuHabis = mysqli_num_rows($bukuHabis);

$pdf->Cell(40,6,'Jumlah stok buku habis : '.$totalbukuHabis,0,1,'C');
$pdf->Output();
?>
