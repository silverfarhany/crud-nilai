<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['klasif']==2){
require_once('DB/konekmysql.php');
$select = "SELECT * from data_matkul";
$selectuser = "SELECT * from data_akun where who=1";
$hasil = mysqli_query($conn, $select);
$hasiluser = mysqli_query($conn, $selectuser);
$selectnilai = "SELECT nilai.id_nilai, data_matkul.nama_matkul, data_akun.nama, 
nilai.n_tukis, nilai.n_uts, nilai.n_uas, nilai.n_akhir from nilai,data_matkul,data_akun 
where nilai.id_matkul = data_matkul.id_matkul and nilai.id_user = data_akun.id_user";
$hasilnilai = mysqli_query($conn, $selectnilai);
require_once('views/input_nilai.php');
    if(isset($_POST["simpanNilai"])){
    $matkul = $_POST['Matkul'];
    $mhs = $_POST["namamhs"];
    $n_tukis = $_POST["nTukis"];
    $n_uts = $_POST["nUts"];
    $n_uas = $_POST["nUas"];
    $n_akhir = $_POST["nAkhir"];

        $quer = "INSERT INTO nilai VALUES (null,'$matkul','$mhs','$n_tukis','$n_uts','$n_uas','$n_akhir')";

        $isi = mysqli_query($conn, $quer);

            if($isi){
                echo "<script>
                        alert('Nilai Tersimpan')
                        </script>";
            }else{
                echo "<script>
                        alert('Nilai Gagal Tersimpan')
                        </script>";

            }
        }
    }
else {
            echo "<script>
            alert('Login dulu dong')
            </script>";
} 
?>