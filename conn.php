<?php
//fungsi format rupiah
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }
    **/
$base_url='http://localhost/ppdb_antr';
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
//$db_name = "preshion";
//$db_name = "diffusal";
$db_name = "mutasi";
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
