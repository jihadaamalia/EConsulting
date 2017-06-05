<?php

$koneksi = mysql_connect('localhost','root','');
$database = mysql_select_db('consulting');

$query = mysql_query("SELECT * FROM identitas WHERE ID = '".$_POST['id']."' AND Password = '".$_POST['password']."'");
$row= mysql_fetch_array($query);

if (!empty($row['ID']) AND !empty($row['Password']) ) {
	session_start();
	$_SESSION['identitas'] = $row['ID'];
	$_SESSION['login'] = TRUE;
	echo "<script>location.href='index.php'</script>";

}
else {
	echo "<script>alert('ID atau Password salah');</script>";
}
?>