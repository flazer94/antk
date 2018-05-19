<?php
include '../conn.php';
$ID_SISWA=$_POST['ID_SISWA'];
$NAMA=$_POST['NAMA'];
$X =$_POST['X'];
$XI =$_POST['XI'];
$jumlah_dipilih = count($ID_SISWA);

for($x=0; $x < $jumlah_dipilih; $x++) 
{
	
	$sql="update siswa set XI='$XI[$x]' where ID_SISWA='$ID_SISWA[$x]'";
	$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
}
header("location:siswa.php");
 ?>
