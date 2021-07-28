<?php
session_start();
require_once('DB/konekmysql.php');
if(!isset($_SESSION['username'])){
require_once('views/daftar.php');

if (isset($_POST["daftar"])){
$user = strtolower($_POST["username"]);
$pass = $_POST ["password"];
$konfirm = $_POST["konfirmasi"];
$nama = $_POST["nama"];
$nim = $_POST["nim"];
$who = $_POST["klasif"];

$cek = mysqli_query($conn, "SELECT username FROM data_akun WHERE username ='$user'");
if(mysqli_fetch_assoc($cek)== TRUE){
    echo "<script>
                alert('username sudah terdaftar!')
                </script>";
        return FALSE;
}elseif ($pass != $konfirm){
    echo "<script>
        alert('password tidak sama!')
        </script>";
        return FALSE;
}
$pass = password_hash($pass, PASSWORD_DEFAULT);
    $quer = "INSERT INTO data_akun VALUES (null,'$user','$pass','$nama','$nim','$who')";
    if (mysqli_query($conn, $quer)){
        header('Location:login.php');
    }
    
    return mysqli_affected_rows($conn);
}
} else {
    echo "<script>
    alert('Logout dulu yaaa')
    </script>";
}
?>