<?php
session_start();
require_once('DB/konekmysql.php');
session_destroy();
header('Location:login.php');
?>