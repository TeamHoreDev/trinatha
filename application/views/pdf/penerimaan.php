<?php

$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetTitle("Laporan Penerimaan Solar", 1);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(275, 7, 'TRINATHA GROUP', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Image(base_url() . "assets/images/logo.png", 10, 10, 25, 0, 'PNG');

$pdf->Cell(275, 7, 'LAPORAN PENERIMAAN SOLAR', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(275, 7, 'PERIODE ' . date_indo($tgl_awal) . ' SAMPAI ' . date_indo($tgl_akhir) . ' PADA TANGKI ' . $tangki, 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 6, 'NO', 1, 0, 'C');
$pdf->Cell(60, 6, 'KODE TRANSAKSI', 1, 0, 'C');
$pdf->Cell(60, 6, 'TANGGAL', 1, 0, 'C');
$pdf->Cell(75, 6, 'VENDOR', 1, 0, 'C');
$pdf->Cell(40, 6, 'TANGKI', 1, 0, 'C');
$pdf->Cell(30, 6, 'QUANTITY', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$no = 1;
foreach ($result as $key) {
    $pdf->Cell(15, 6, $no++, 1, 0, 'C');
    $pdf->Cell(60, 6, $key->kode_transaksi, 1, 0, 'C');
    $pdf->Cell(60, 6, date_indo($key->tanggal), 1, 0, 'C');
    $pdf->Cell(75, 6, $key->nama_vendor, 1, 0);
    $pdf->Cell(40, 6, $key->tangki, 1, 0, 'C');
    $pdf->Cell(30, 6, $key->solar_in, 1, 1, 'C');
}
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(250, 6, 'TOTAL PENERIMAAN SOLAR', 1, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(30, 6, $total, 1, 1, 'C');
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(210, 6, '', 0, 0, 'C');
$pdf->Cell(70, 6, 'Cilegon,' . date_indo(date('Y-m-d')), 0, 1, 'C');
$pdf->Cell(210, 6, '', 0, 0, 'C');
$pdf->Cell(70, 6, 'Mengetahui, ', 0, 1, 'C');
$pdf->ln();
$pdf->ln();

$pdf->Cell(210, 6, '', 0, 0, 'C');
$pdf->Cell(70, 6, 'Supervisor', 'T', 1, 'C');


$pdf->Output();
