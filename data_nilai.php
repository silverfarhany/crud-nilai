<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['klasif']==1){
require_once('DB/konekmysql.php');
$id = $_SESSION['id'];
$sql = "SELECT nilai.id_nilai, data_matkul.nama_matkul, 
nilai.n_tukis, nilai.n_uts, nilai.n_uas, nilai.n_akhir from nilai,data_matkul,data_akun 
where nilai.id_matkul = data_matkul.id_matkul and nilai.id_user = data_akun.id_user and data_akun.id_user= '$id'";
$result = mysqli_query($conn, $sql); 
$ip = 0;
$arr_ip =array();
$jumlah = "SELECT nilai.n_akhir from nilai,data_akun where nilai.id_user = data_akun.id_user and data_akun.id_user = '$id'";
$hasil_ip =mysqli_query($conn, $sql);
    $no = 0;
    $nilai = 0;
    $sks = 0;
    while($row = mysqli_fetch_assoc($hasil_ip)){
        if ($row['n_akhir']>=80){
            $nilai=4;
        }
        elseif ($row['n_akhir']>=70){
            $nilai=3;
        }
        elseif ($row['n_akhir']>=60){
            $nilai=2;
        }
        elseif ($row['n_akhir']>=50){
            $nilai=1;
        }
        else{
            $nilai=0;
        }
        $sks+=2;
        $ip+=$nilai*2;
        $no++;
        $total_ip=round($ip/$sks,2);
    }

    if(mysqli_num_rows($result) == 0){
        $total_ip = 0;
    }
require_once('views/data_nilai.php');
}
else {
    echo "<script>
    alert('Login dulu dong')
    </script>";
}
?>