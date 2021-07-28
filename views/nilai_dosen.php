<?php
$no =1 ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>input-dosen</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Input Nilai
        </a>
        <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="home_dsn.php">Home</a>
      </li> 
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="input_nilai.php">Input Nilai</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="nilai_dosen.php">Data Nilai</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="logout.php">Logout</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

<!-- Data Nilai -->
    <section class="datanilai" id="data_nilai">
        <div class="container">
            <h2 class="text-center">Data Nilai</h2>
        <form action="" method="post">  
       <th> 
       <table border=3 class="table">
       <tr class="bg-info">
            <th> No</th>
            <th>ID Nilai</th>
            <th>Nama Matakuliah</th>
            <th> Nama Mahasiswa    </th>
            <th> Nilai Tugas & Kuis  </th>
            <th>Nilai UTS            </th>
            <th>Nilai UAS            </th>
            <th>Nilai Akhir          </th>
            <th> </th>
            <th> </th>
        </tr>
        <tr>
        <?php while ($row = $hasilnilai->fetch_assoc()):?>
            <td> <?= $no++ ?></td>
            <td><?php echo $row['id_nilai']?></td>
            <td><?php echo $row['nama_matkul']?></td>
            <td><?php echo $row['nama']?></td>
            <td><?php echo $row['n_tukis']?></td>
            <td><?php echo $row['n_uts']?></td>
            <td><?php echo $row['n_uas']?></td>
            <td><?php echo $row['n_akhir']?></td>
            <td> 
              <a class="btn btn-warning" name="ubah" href ="ubah_nilai.php?id=<?php echo $row['id_nilai']?>">Ubah</button>
            </td>
            <td> 
              <a class="btn btn-danger" name="hapus" href ="delete_nilai.php?id=<?php echo $row['id_nilai']?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </div>
  </section>