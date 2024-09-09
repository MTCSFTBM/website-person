<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Form Data', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Date: ' . $_POST['date'], 0, 1);
$pdf->Cell(0, 10, 'Section: ' . $_POST['section'], 0, 1);
$pdf->Cell(0, 10, 'Notifier: ' . $_POST['notifier'], 0, 1);
$pdf->Cell(0, 10, 'Machine Name: ' . $_POST['machine_name'], 0, 1);
$pdf->Cell(0, 10, 'Machine Number: ' . $_POST['machine_number'], 0, 1);
$pdf->Cell(0, 10, 'Open Point: ' . $_POST['open_point'], 0, 1);
$pdf->Cell(0, 10, 'Action Plan: ' . $_POST['action_plan'], 0, 1);

$filename = 'data.pdf';
$pdf->Output('F', $filename);

echo 'Data berhasil disimpan!';
?>
