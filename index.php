<head>
  <title>List Peserta Didik Baru</title> <!-- judul -->
  <meta charset="utf-8">
  <!-- konfigurasi responsifitas halaman -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- menyertakan file lain untuk style halaman -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <!-- konfigurasi style internal untuk tampilan halaman -->
  <style media="screen">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
  </style>
  <!-- menyertakan file lain untuk style halaman -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
<h2>List Peserta Didik Baru</h2><br> <!-- menuliskan text -->
<table border="1"> <!-- membuat tabel dengan ketebalan border=1 -->
 <tr>   <!-- membuat isi tabel -->
   <th>No</th>
   <th>Nama Lengkap</th>
   <th>Jenis Pendaftaran</th>
   <th>Tanggal Masuk Sekolah</th>
   <th>NIS</th>
   <th>No Peserta Ujian</th>
   <th>PAUD</th>
   <th>TK</th>
   <th>SKHUN</th>
   <th>Ijazah</th>
   <th>Hobi</th>
   <th>Cita-cita</th>
   <th>Jenis Kelamin</th>
   <th>NISN</th>
   <th>NIK</th>
   <th>Tanggal Lahir</th>
   <th>Tempat Lahir</th>
   <th>Agama</th>
   <th>Kebutuhan Khusus</th>
   <th>Alamat Jalan</th>
   <th>Tanggal Masuk Sekolah</th>
   <th>Dusun</th>
   <th>Kelurahan/Desa</th>
   <th>RT</th>
   <th>RW</th>
   <th>Kecamatan</th>
   <th>Tempat Tinggal</th>
   <th>Moda Transportasi</th>
   <th>No HP</th>
   <th>No Telepon</th>
   <th>Email</th>
   <th>Penerima KPS/PKH/KIP</th>
   <th>No KPS/PKH/KIP</th>
   <th>Kewarganegaraan</th>
   <th>Nama Negara</th>

 </tr>
 <?php
   include 'koneksi.php'; //menyertakan file lain
   $formpd = mysqli_query($conn, "SELECT * from formpd"); //mengambil data query db
   $no=1; //deklarasi var
   // deklarasi fungsi foreach
   foreach ($formpd as $row) {
     //menuliskan data dari query db dalam tabel
     echo "<tr>
           <td>$no</td>
           <td>".$row['nama']."</td>
           <td>".$row['jpen']."</td>
           <td>".$row['tglmsk']."</td>
           <td>".$row['paud']."</td>
           <td>".$row['tk']."</td>
           <td>".$row['nis']."</td>
           <td>".$row['npu']."</td>
           <td>".$row['skhun']."</td>
           <td>".$row['ijazah']."</td>
           <td>".$row['hobi']."</td>
           <td>".$row['cita']."</td>
           <td>".$row['jk']."</td>
           <td>".$row['agama']."</td>
           <td>".$row['nisn']."</td>
           <td>".$row['nik']."</td>
           <td>".$row['tmptlhr']."</td>
           <td>".$row['tgllhr']."</td>
           <td>".$row['khusus']."</td>
           <td>".$row['almtjln']."</td>
           <td>".$row['tglmsk']."</td>
           <td>".$row['dsn']."</td>
           <td>".$row['keldes']."</td>
           <td>".$row['rt']."</td>
           <td>".$row['rw']."</td>
           <td>".$row['kec']."</td>
           <td>".$row['tmpttgl']."</td>
           <td>".$row['moda']."</td>
           <td>".$row['nmrhp']."</td>
           <td>".$row['nmrtlp']."</td>
           <td>".$row['email']."</td>
           <td>".$row['kps']."</td>
           <td>".$row['nokps']."</td>
           <td>".$row['kwn']."</td>
           <td>".$row['namangr']."</td>
           </tr>";
           //menuliskan isi tabel yang diisi dengan data dari db
     $no++; //variabel $no akan bertambah terus hingga kondisi selesai
   }
  ?>
</table>
  <!-- membuat button menuju file lain -->
  <br><button class="btn btn-primary" onclick="document.location='daftar.php'">
        Klik untuk mendaftar</button>
</body>
