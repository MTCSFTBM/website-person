<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$data = [
    'date' => $_POST['date'],
    'section' => $_POST['section'],
    'notifier' => $_POST['notifier'],
    'machine_name' => $_POST['machine_name'],
    'machine_number' => $_POST['machine_number'],
    'open_point' => $_POST['open_point'],
    'action_plan' => $_POST['action_plan']
];

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Date');
$sheet->setCellValue('B1', 'Section');
$sheet->setCellValue('C1', 'Notifier');
$sheet->setCellValue('D1', 'Machine Name');
$sheet->setCellValue('E1', 'Machine Number');
$sheet->setCellValue('F1', 'Open Point');
$sheet->setCellValue('G1', 'Action Plan');

$sheet->setCellValue('A2', $data['date']);
$sheet->setCellValue('B2', $data['section']);
$sheet->setCellValue('C2', $data['notifier']);
$sheet->setCellValue('D2', $data['machine_name']);
$sheet->setCellValue('E2', $data['machine_number']);
$sheet->setCellValue('F2', $data['open_point']);
$sheet->setCellValue('G2', $data['action_plan']);

$writer = new Xlsx($spreadsheet);
$filename = 'data.xlsx';
$writer->save($filename);

echo 'Data berhasil disimpan!';
?>
