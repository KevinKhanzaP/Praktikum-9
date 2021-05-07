<?php
require 'vendor/autoload.php'; //me-load file lain
use PhpOffice\PhpSpreadsheet\Spreadsheet; //memanggil namespace
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //memanggil namespace

$spreadsheet = new Spreadsheet(); //deklarasi variabel
$sheet = $spreadsheet ->getActiveSheet(); //deklarasi membuat excel
$sheet->setCellValue('A1', 'Hello World !'); //deklarasi penempatan pada excel

$writer = new Xlsx($spreadsheet); //deklarasi variabel
$writer->save('hello world.xlsx'); //deklarasi membuat excel
?>
