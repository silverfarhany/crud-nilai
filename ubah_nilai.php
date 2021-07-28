<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['klasif']==2){
require_once('DB/konekmysql.php');
$select = "SELECT * from data_matkul";
$selectuser = "SELECT * from data_akun where who=1";
$hasil = mysqli_query($conn, $select);
$hasiluser = mysqli_query($conn, $selectuser);
$id_nilai = $_GET['id'];
$selectnilai = "SELECT nilai.id_nilai, data_matkul.nama_matkul, data_akun.nama, 
nilai.n_tukis, nilai.n_uts, nilai.n_uas, nilai.n_akhir, data_matkul.id_matkul from nilai,data_matkul,data_akun 
where nilai.id_matkul = data_matkul.id_matkul and nilai.id_user = data_akun.id_user and id_nilai='$id_nilai'";
$hasilnilai = mysqli_query($conn, $selectnilai);
$detailnilai = mysqli_fetch_assoc($hasilnilai);
require_once('views/ubah_nilai.php');
        if(isset($_POST["ubahNilai"])){
        $matkul = $_POST['Matkul'];
        $nama = $_POST['namamhs'];
        $n_tukis = $_POST["nTukis"];
        $n_uts = $_POST["nUts"];
        $n_uas = $_POST["nUas"];
        $n_akhir = $_POST["nAkhir"];

            $quer = "UPDATE nilai SET id_matkul='$matkul', n_tukis='$n_tukis', n_uts=$n_uts, n_uas=$n_uas, n_akhir=$n_akhir WHERE id_nilai='$id_nilai'";

                $isi = mysqli_query($conn, $quer);

                    if($isi){
                                header('Location:nilai_dosen.php');
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