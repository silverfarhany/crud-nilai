<?php
session_start();
require_once('DB/konekmysql.php');
if(isset($_SESSION['id'])&& $_SESSION['klasif']==1){
require_once('views/lihat_nilai.php');
}
else {
    echo "<script>
    alert('Login dulu dong')
    </script>";
}
?>