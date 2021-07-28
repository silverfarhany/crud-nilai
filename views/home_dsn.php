<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Dosen</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation --> 
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Dosen
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

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Hai, <?php echo $_SESSION['username']?></h1>
      <h3 class="mb-5">
        <em> Dosen bisa Input dan perbaiki nilai mahasiswa, disini!</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="input_nilai.php">Input Nilai</a>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="nilai_dosen.php">Data Nilai</a>
    </div>
    <div class="overlay"></div>
  </header>
   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>
  </body>

</html>