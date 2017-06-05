<?php
session_start();
unset($_SESSION['identitas']);
unset($_SESSION['nama']);
unset($_SESSION['status']);
$_SESSION['login']=FALSE;
echo("<script>location.href='index.php';</script>");
?>
