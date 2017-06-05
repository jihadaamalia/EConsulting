<?php
	$koneksi = mysql_connect('localhost','root','');
	$database = mysql_select_db('consulting');

	$query = mysql_query("SELECT * FROM dokter WHERE ID = '".$_POST['ID']."' AND Password = '".$_POST['Password']."'");
	$row= mysql_fetch_array($query);

	if (!empty($row['ID']) AND !empty($row['Password']) ) {
		session_start();
		$query2 = mysql_query("SELECT Nama FROM dokter WHERE ID = '".$_POST['ID']."' AND Password = '".$_POST['Password']."'");
		$row2= mysql_fetch_array($query2);

		$_SESSION['identitas'] = $row['ID'];
		$_SESSION['nama'] = $row2['Nama'];
		$_SESSION['login'] = TRUE;
		$_SESSION['status'] = "dokter";
		echo "<script>location.href='index.php'</script>";
	}
	else {
		echo "<script>alert('ID atau Password salah');</script>";
	}
?>