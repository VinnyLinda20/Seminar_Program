<?php
include "koneksi.php";
require('lib/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'LAPORAN DATA PENGEMBALIAN BUKU',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'PERPUSTAKAAN SMP NEGERI 3 BALEENDAH',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(35,6,'NAMA SISWA',1,0);
$pdf->Cell(54,6,'JUDUL BUKU',1,0);
$pdf->Cell(30,6,'DIKEMBALIKAN',1,0);
$pdf->Cell(27,6,'TGL KEMBALI',1,0);
$pdf->Cell(20,6,'TGL PJM',1,0);
$pdf->Cell(13,6,'JMLH',1,0);
$pdf->Cell(18,6,'KET',1,1);

if(!empty($_POST['start_pekerjaan']) && !empty($_POST['end_pekerjaan'])){
    $mulai = $_POST['start_pekerjaan'];
    $akhir = $_POST['end_pekerjaan'];
    $pengembalian = mysqli_query($koneksi, "SELECT * FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.tgl_dikembalikan >='$mulai' and pengembalian.tgl_dikembalikan <= '$akhir'");
    $bukuRusak = mysqli_query($koneksi, "select count(pengembalian.id_kembali) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.keterangan='rusak' and pengembalian.tgl_dikembalikan >='$mulai' and pengembalian.tgl_dikembalikan <= '$akhir'");
    $bukuHilang = mysqli_query($koneksi, "select count(pengembalian.id_kembali) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.keterangan='hilang' and pengembalian.tgl_dikembalikan >='$mulai' and pengembalian.tgl_dikembalikan <= '$akhir'");
    $tampil = mysqli_query($koneksi, "SELECT sum(detail_pinjam.jumlah) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.tgl_dikembalikan >='$mulai' and pengembalian.tgl_dikembalikan <= '$akhir'");
}else{
    $pengembalian = mysqli_query($koneksi, "SELECT * FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam ");
    $bukuRusak = mysqli_query($koneksi, "select count(pengembalian.id_kembali) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.keterangan='rusak'");
    $bukuHilang = mysqli_query($koneksi, "select count(pengembalian.id_kembali) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam and pengembalian.keterangan='hilang'");
    $tampil = mysqli_query($koneksi, "SELECT sum(detail_pinjam.jumlah) as jumlah FROM pengembalian,detail_pinjam,peminjaman where peminjaman.id_pinjam = detail_pinjam.id_pinjam and detail_pinjam.id_detailpinjam = pengembalian.id_pinjam");
}


while ($row = mysqli_fetch_array($pengembalian)){
    $pdf->Cell(35,6,$row['nama_siswa'],1,0);
    $pdf->Cell(54,6,$row['judul_buku'],1,0);
    $pdf->Cell(30,6,$row['tgl_dikembalikan'],1,0);
    $pdf->Cell(27,6,$row['tgl_kembali'],1,0);
    $pdf->Cell(20,6,$row['tgl_pinjam'],1,0); 
    $pdf->Cell(13,6,$row['jumlah'],1,0);
    $pdf->Cell(18,6,$row['keterangan'],1,1);
}
$pdf->Cell(10,7,'',0,1);

$total = mysqli_fetch_assoc($tampil);
$total_bukuRusak = mysqli_fetch_assoc($bukuRusak);
$total_bukuHilang = mysqli_fetch_assoc($bukuHilang);

$pdf->Cell(55,6,'Jumlah buku yang dikembalikan : '.$total['jumlah'],0,1,'C');
$pdf->Cell(33,6,'Jumlah buku rusak : '.$total_bukuRusak['jumlah'],0,1,'C'); 
$pdf->Cell(33,6,'Jumlah buku hilang : '.$total_bukuHilang['jumlah'],0,1,'C');
$pdf->Output();
?>
