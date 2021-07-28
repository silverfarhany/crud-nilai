<?php
session_start();
require_once('DB/konekmysql.php');
if(!isset($_SESSION['username'])){
require_once('views/v_login.php');

if(isset($_POST["login"])){

$user = $_POST["username"];
$pass = $_POST["password"];
$result = mysqli_query($conn,"SELECT * FROM data_akun WHERE username = '$user'");
if(mysqli_num_rows($result) > 0){
    $result = mysqli_fetch_assoc($result);
    if(password_verify($pass, $result["password"])){
        $_SESSION['username'] = $result['username'];
        $_SESSION['klasif'] = $result['who'];
        $_SESSION['id'] = $result['id_user'];
        if ($result['who'] == 1 ){
        header("Location: home_mhs.php");}
        else{
            header("Location: home_dsn.php");
        }
    }
    else { 
        echo "<script>
                alert ('Gagal Login, Username atau Password Salah!')
            </script>";
    }
}}
} else {
    echo "<script>
    alert('Logout dulu yaaa')
    </script>";           
}
?>