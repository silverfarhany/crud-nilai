<?php 
session_start();
require_once('DB/konekmysql.php');
        $id_nilai = $_GET['id'];
        $result = "DELETE FROM nilai WHERE id_nilai ='$id_nilai'";  
            
            $hapus = mysqli_query($conn, $result);
                if($hapus){
                    echo "<script>
                        alert('Nilai Terhapus')
                        </script>";
                        header('location:nilai_dosen.php');
                }else{
                    echo "<script>
                            alert('Nilai Belum Terhapus')
                            </script>";
                            header('location:nilai_dosen.php');
    }
?>