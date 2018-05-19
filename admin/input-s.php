<?php
include '../conn.php';
$NIS=$_POST['NIS'];
$NAMA=$_POST['NAMA'];


$sql="insert into siswa(ID_SISWA,NIS,NAMA,X,X_REGIS,XI,XI_REGIS,XII,STATUS)values(NULL,'$NIS','$NAMA',NULL,'BELUM_REGISTRASI',NULL,'BELUM_REGISTRASI',NULL,'AKTIF')";
$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
header("location:siswa.php");
 ?>
