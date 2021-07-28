<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>by Silverfarhany</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<!-- Registrasi -->
  <section class="registrasi" id="regis">
    <div class="container">
    <h2 class="text-center">Buat Akun</h2>
    <form action="" method="post">
    <div >
    <label for="exampleInputUsername" class="form-label" >Username</label>
        <br>
            <input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputUsername" class="form-label" >Password</label>
    
        <br>
            <input type="password" name="password" class="form-control" placeholder="Password" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputUsername" class="form-label" >Confirm Password</label>
        <br>
            <input type="password" name="konfirmasi" class="form-control" placeholder="Confirm Password" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputUsername" class="form-label" >Nama</label>
        <br>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required="" autofocus="">
        </br>
        <br>
        <label for="exampleInputUsername"  class="form-label" >NIM / NIP</label>
        <br>
            <input type="number" name="nim" class="form-control" placeholder="Nim" required="" autofocus="">
        </br>
        <br>
            <input type="radio" id="dosen" name="klasif" required="" value=2>
            <label for="dosen">Dosen</label>
            <input type="radio" id="mahasiswa" name="klasif" required="" value=1>
            <label for="mahasiswa">Mahasiswa</label>
        </br>
        <br>
           <button button class="btn btn-primary" type="submit" name="daftar">Daftar</button>
        </br>
    </form>  
    </div>
  </section>