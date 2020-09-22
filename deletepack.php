<?php
$z= $_GET['a'];
mysql_connect('localhost','root','');
mysql_select_db('event');
$str="delete from package where s_id=$z";
mysql_query($str);
echo "<script language='javascript'>document.location='deletepackage.php'; </script>";
?>



