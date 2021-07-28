<?php
session_start();
require_once('DB/konekmysql.php');
if(isset($_SESSION['id'])&& $_SESSION['klasif']==2){
require_once('views/home_dsn.php');
}
else {
    echo "<script>
    alert('Login dulu dong')
    </script>";
}
?>