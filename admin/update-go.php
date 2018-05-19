<?php
include "../conn.php";
$NIS=$_POST['NIS'];
$ID_SISWA=$_POST['ID_SISWA'];
$NAMA=$_POST['NAMA'];
$X=$_POST['X'];
$query ="UPDATE siswa SET  NIS='$NIS', NAMA='$NAMA', X='$X' WHERE ID_SISWA='$ID_SISWA'";
if (mysqli_query($koneksi, $query)){
header('location:siswa.php');	
} else {
	echo "gagal";
    }
?>