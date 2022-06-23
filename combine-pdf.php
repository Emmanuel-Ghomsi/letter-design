<?php
require_once "vendor/autoload.php";

$path = $_FILES["upload"]["tmp_name"];
$outputName = "letters.pdf";

$pdf = new \Jurosh\PDFMerge\PDFMerger;

foreach ($path as $file) {
    $pdf->addPDF($file, 'all');
}

$pdf->merge('download', $outputName);
