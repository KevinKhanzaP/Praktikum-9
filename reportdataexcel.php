<?php
  include('koneksi.php'); //me-load file lain
  require 'vendor/autoload.php'; //me-load file lain
  use PhpOffice\PhpSpreadsheet\Spreadsheet; //memanggil namespace
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx; //memanggil namespace

  $spreadsheet = new Spreadsheet(); //deklarasi variabel
  $sheet = $spreadsheet->getActiveSheet(); //deklarasi membuat excel
  //deklarasi posisi cell
  $sheet->setCellValue('A1', 'No');
  $sheet->setCellValue('B1', 'Nama');
  $sheet->setCellValue('C1', 'Kelas');
  $sheet->setCellValue('D1', 'Alamat');

  //deklarasi koneksi dengan query db
  $query = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
  $i = 2; //deklarasi var i
  $no = 1; //deklarasi var no
  while($row = mysqli_fetch_array($query)) //deklarasi kondisi
  {
    //deklarasi posisi cell
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('C'.$i, $row['kelas']);
    $sheet->setCellValue('D'.$i, $row['alamat']);
    $i++; //deklarasi var i
  }

  //pengaturan style border pada excel
  $styleArray = [
              'borders' => [
                  'allBorders' => [
                      'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border:: BORDER_THIN,
                  ],
              ],
          ];
  $i = $i - 1; //deklarasi var i
  $sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

  //deklarasi membuat excel
  $writer = new Xlsx($spreadsheet);
  $writer->save('Report Data Siswa.xlsx');
 ?>
