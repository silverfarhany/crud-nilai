<?php
$no =1 ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>read - MHS</title>

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
        <a class="js-scroll-trigger" href="#page-top">
        </a>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="home_mhs.php">Home</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="lihat_nilai.php">Lihat Nilai</a>
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
  <section class="datanilai" id="data_nilai">
        <div class="container">
            <h2 class="text-center">Nilai Kamu</h2>
        <form action="" method="post">  
    <?php if(mysqli_num_rows($result)): ?>
       <table border=3 class="table">
       <tr class="bg-info">
            <th> No                 </th>
            <th> Nama Matakuliah    </th>
            <th> Nilai Tugas & Kuis  </th>
            <th>Nilai UTS            </th>
            <th>Nilai UAS            </th>
            <th>Nilai Akhir          </th>
        </tr>
        <tr>
        <?php while ($mhs = $result->fetch_assoc()): ?>
            <td> <?= $no++ ?></td>
            <td> <?= $mhs["nama_matkul"]  ?> </td>
            <td> <?= $mhs["n_tukis"]  ?> </td>
            <td><?= $mhs["n_uts"]  ?> </td>
            <td> <?= $mhs["n_uas"]  ?> </td>
            <td> <?= $mhs["n_akhir"]  ?> </td>
        </tr>
        <?php endwhile;?>
    </table>
   <h3> <?php echo "IP Kamu adalah : $total_ip"?> </h3>
<?php endif; ?>
        <br> 
        <br>
        <br>
    </div>
  </section>