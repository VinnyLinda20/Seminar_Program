<?php
include "koneksi.php";
require('lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'LAPORAN DATA PEMINJAMAN BUKU',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PERPUSTAKAAN SMP NEGERI 3 BALEENDAH',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(44,6,'NAMA SISWA',1,0);
$pdf->Cell(64,6,'JUDUL BUKU',1,0);
$pdf->Cell(25,6,'TGL PINJAM',1,0);
$pdf->Cell(27,6,'TGL KEMBALI',1,0);
$pdf->Cell(18,6,'JUMLAH',1,0);
$pdf->Cell(18,6,'STATUS',1,1);


if(!empty($_POST['start_pekerjaan']) && !empty($_POST['end_pekerjaan'])){
    $mulai = $_POST['start_pekerjaan'];
    $akhir = $_POST['end_pekerjaan'];
    $peminjaman = mysqli_query($koneksi, "select * from peminjaman, detail_pinjam where peminjaman.id_pinjam = detail_pinjam.id_pinjam and tgl_pinjam >='$mulai' and tgl_pinjam <= '$akhir' ");
    $bukuDiPinjam = mysqli_query($koneksi, "select sum(detail_pinjam.jumlah) as jumlah from peminjaman, detail_pinjam WHERE peminjaman.id_pinjam = detail_pinjam.id_pinjam and peminjaman.status='pinjam' and peminjaman.tgl_pinjam >='$mulai' and peminjaman.tgl_pinjam <= '$akhir'");
    $bukuDiKembalikan = mysqli_query($koneksi, "select sum(detail_pinjam.jumlah) as jumlah from peminjaman, detail_pinjam WHERE peminjaman.id_pinjam = detail_pinjam.id_pinjam and peminjaman.status='return' and peminjaman.tgl_pinjam >='$mulai' and peminjaman.tgl_pinjam <= '$akhir'");
}else{
    $peminjaman = mysqli_query($koneksi, "select * from peminjaman, detail_pinjam where peminjaman.id_pinjam = detail_pinjam.id_pinjam;");
    $bukuDiPinjam = mysqli_query($koneksi, "select sum(detail_pinjam.jumlah) as jumlah from peminjaman, detail_pinjam WHERE peminjaman.id_pinjam = detail_pinjam.id_pinjam and peminjaman.status='pinjam'");
    $bukuDiKembalikan = mysqli_query($koneksi, "select sum(detail_pinjam.jumlah) as jumlah from peminjaman, detail_pinjam WHERE peminjaman.id_pinjam = detail_pinjam.id_pinjam and peminjaman.status='return'");
    
}


while ($row = mysqli_fetch_array($peminjaman)){
    $pdf->Cell(44,6,$row['nama_siswa'],1,0);
    $pdf->Cell(64,6,$row['judul_buku'],1,0); 
    $pdf->Cell(25,6,$row['tgl_pinjam'],1,0); 
    $pdf->Cell(27,6,$row['tgl_kembali'],1,0);
    $pdf->Cell(18,6,$row['jumlah'],1,0);
    $pdf->Cell(18,6,$row['status'],1,1);
}

$totalbukuDiPinjam = mysqli_fetch_assoc($bukuDiPinjam);
$totalbukuDiKembalikan = mysqli_fetch_assoc($bukuDiKembalikan);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(48,6,'Jumlah buku yang dipinjam : '.$totalbukuDiPinjam['jumlah'],0,1,'C');
$pdf->Cell(58,6,'Jumlah buku sudah dikembalikan : '.$totalbukuDiKembalikan['jumlah'],0,1,'C');
$pdf->Output();
