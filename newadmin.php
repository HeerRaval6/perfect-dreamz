<?php
$a=$_POST['n1'];
$b=$_POST['n2'];

$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$str="insert into newadmin(uname,pwd)values('$a','$b')";
mysql_query($str);
echo "<script language='javascript'>document.location='admin.html'; </script>";
	

?>