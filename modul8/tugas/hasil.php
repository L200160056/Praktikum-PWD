<?php
session_start();
echo "Anda Berhasil Login Sebagai ".$_SESSION['username']." Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<br>
Welcom Admin
Silahkan Logout dengan klik link <a href='logout.php'> Disini</a>
