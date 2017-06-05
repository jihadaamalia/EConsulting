<?php
$koneksi = mysql_connect('localhost','root','');
$database = mysql_select_db('consulting');

	$id=$_POST['ID'];
	$pasien=$_POST['pasien'];
	$dokter=$_POST['dokter'];
	$judul=$_POST['judul'];
	$tgl_konsul=$_POST['tgl_konsul'];
	$pesan=$_POST['pesan'];
	$tgl_pesan=date('y/m/d');
	
	$input = mysql_query("INSERT INTO pesan_dokter VALUES ('$id', '$pasien', '$dokter','$judul','$tgl_konsul','$tgl_pesan','$pesan')"); //input data ke tabel pesan_dokter
	echo "<script>location.href='consul.php'</script>";
?>