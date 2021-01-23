<?php

$pdf = new FPDF('l', 'mm', 'A3');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetTitle("Laporan Pemakaian Solar", 1);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(400, 7, 'TRINATHA GROUP', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Image(base_url() . "assets/images/logo.png", 10, 10, 25, 0, 'PNG');

$pdf->Cell(400, 7, 'LAPORAN PEMAKAIAN SOLAR', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(400, 7, 'PERIODE ' . date_indo($tgl_awal) . ' SAMPAI ' . date_indo($tgl_akhir) . ' PADA TANGKI ' . $tangki, 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(40, 6, 'TANGGAL', 1, 0, 'C');
$pdf->Cell(20, 6, 'JAM', 1, 0, 'C');
$pdf->Cell(60, 6, 'KODE TRANSAKSI', 1, 0, 'C');
$pdf->Cell(30, 6, 'KODE ALAT', 1, 0, 'C');
$pdf->Cell(40, 6, 'ALAT', 1, 0, 'C');
$pdf->Cell(40, 6, 'OPERATOR', 1, 0, 'C');
$pdf->Cell(110, 6, 'KETERANGAN', 1, 0, 'C');
$pdf->Cell(30, 6, 'TANGKI', 1, 0, 'C');
$pdf->Cell(20, 6, 'QTY', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$no = 1;
foreach ($result as $key) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(40, 6, date_indo($key->tanggal), 1, 0, 'C');
    $pdf->Cell(20, 6, $key->jam, 1, 0, 'C');
    $pdf->Cell(60, 6, $key->kode_transaksi, 1, 0, 'C');
    $pdf->Cell(30, 6, $key->kode_alat, 1, 0, 'C');
    $pdf->Cell(40, 6, $key->nama_alat, 1, 0, 'C');
    $pdf->Cell(40, 6, $key->operator, 1, 0, 'C');
    $pdf->Cell(110, 6, $key->keterangan, 1, 0, 'L');
    $pdf->Cell(30, 6, $key->tangki, 1, 0, 'C');
    $pdf->Cell(20, 6, $key->solar_out, 1, 1, 'C');
}
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(380, 6, 'TOTAL', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(20, 6, $total, 1, 1, 'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(330, 6, '', 0, 0, 'C');
$pdf->Cell(20, 6, 'Cilegon, ' . date_indo(date('Y-m-d')), 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(330, 6, '', 0, 0, 'C');
$pdf->Cell(20, 6, 'Mengetahui,', 0, 1, 'C');
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->Cell(305, 6, '', 0, 0, 'C');
$pdf->Cell(70, 6, 'Supervisor', 'T', 1, 'C');





$pdf->Output();
