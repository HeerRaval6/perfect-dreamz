<?php
$a=$_POST['l1'];
$b=$_POST['l2'];
session_start();
$_SESSION['username']=$a;

$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$data=mysql_query("select * from register");
$n=mysql_num_rows($data);
//echo $n;
 for($i=0;$i<$n;$i++)
{
	$row=mysql_fetch_row($data);
	//echo $row[3]." ".$row[5];
	//echo "<br>";
	if($a==$row[2] && $b==$row[4])
	{
	//echo "successful";	
	echo "<script language='javascript'>document.location='package.html'; </script>";
	}	
}
echo "<script language='javascript'>document.location='login.html'; </script>";
//echo "not successful";
?>

