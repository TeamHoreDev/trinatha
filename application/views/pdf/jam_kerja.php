<?php

$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetTitle("Laporan Jam Kerja Alat Berat", 1);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(275, 7, 'TRINATHA GROUP', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Image(base_url() . "assets/images/logo.png", 10, 10, 25, 0, 'PNG');

$pdf->Cell(275, 7, 'LAPORAN JAM KERJA ALAT BERAT', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(275, 7, 'PERIODE ' . $tgl_awal . ' SAMPAI ' . $tgl_akhir, 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(45, 6, 'TANGGAL', 1, 0, 'C');
$pdf->Cell(20, 6, 'JAM', 1, 0, 'C');
$pdf->Cell(30, 6, 'KODE ALAT', 1, 0, 'C');
$pdf->Cell(50, 6, 'ALAT', 1, 0, 'C');
$pdf->Cell(60, 6, 'OPERATOR', 1, 0, 'C');
$pdf->Cell(30, 6, 'TANGKI', 1, 0, 'C');
$pdf->Cell(30, 6, 'QTY', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$no = 1;
foreach ($result as $key) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(45, 6, $key->tanggal, 1, 0, 'C');
    $pdf->Cell(20, 6, $key->jam, 1, 0, 'C');
    $pdf->Cell(30, 6, $key->kode_alat, 1, 0, 'C');
    $pdf->Cell(50, 6, $key->nama_alat, 1, 0, 'C');
    $pdf->Cell(60, 6, $key->operator, 1, 0, 'C');
    $pdf->Cell(30, 6, $key->tangki, 1, 0, 'C');
    $pdf->Cell(30, 6, $key->solar_out, 1, 1, 'C');
}
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(245, 6, 'TOTAL', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);

$pdf->Cell(30, 6, $total, 1, 1, 'C');

$pdf->Output();
