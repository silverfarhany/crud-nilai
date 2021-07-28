<?php 
$no=1;
?>
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
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="home_dsn.php">Home</a>
      </li>
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Ubah Nilai </a>
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

<!-- Input Nilai -->
  <section class="registrasi" id="regis">
    <div class="container">
    <h2 class="text-center">Ubah Nilai</h2>
    <form action="" method="post">
    <div >
    <label for="exampleInputNilai" class="form-label" >Nama Matakuliah</label>
        <br>
            <select name="Matkul" class="form-control" required="" autofocus="">
          <?php  while ($row = $hasil->fetch_assoc()){?>
            <option value="<?php echo $row['id_matkul']?>" <?php echo $detailnilai['id_matkul']==$row['id_matkul']?'selected':''?>
            > <?php echo $row['nama_matkul'] ?></option>
          <?php } 
           ?>
          </select>
        </br>
        <br>
        <label for="exampleInputNilai" class="form-label" >Nama Mahasiswa</label>
        <br>
            <input type="text" name="namamhs" value="<?php echo $detailnilai['nama']?>" class="form-control" required="" autofocus="" readonly>
        </br>
        <br>
        <label for="exampleInputNilai" class="form-label" >Nilai Tugas & Kuis</label>
        <br>
            <input type="number" name="nTukis" value="<?php echo $detailnilai['n_tukis']?>" class="form-control" placeholder=" masukan nilai" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputNilai" class="form-label" >Nilai UTS</label>
        <br>
            <input type="number" name="nUts" value="<?php echo $detailnilai['n_uts']?>" class="form-control" placeholder="masukan nilai" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputNilai"  class="form-label" >Nilai UAS</label>
        <br>
            <input type="number" name="nUas" value="<?php echo $detailnilai['n_uas']?>" class="form-control" placeholder="masukan nilai" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputNilai" class="form-label" >Nilai Akhir</label>
        <br>
            <input type="number" name="nAkhir" value="<?php echo $detailnilai['n_akhir']?>" class="form-control" placeholder="Masukan Nilai" required="" autofocus="">
        </br>
        <br>
           <button button class="btn btn-primary" type="submit" name="ubahNilai">Ubah</button>
        </br>
    </form>  
    </div>
<br> </br>
<br> </br>