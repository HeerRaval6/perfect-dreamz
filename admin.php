<?php
$a=$_POST['a1'];
$b=$_POST['a2'];
$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$data=mysql_query("select * from newadmin");
$n=mysql_num_rows($data);
//echo $n;
for($i=0;$i<$n;$i++)
{
	$row=mysql_fetch_row($data);
	//echo $row[1]." ".$row[2];
	//echo "<br>";
	if($a==$row[1] && $b==$row[2])
	{
	//echo "successful";	
	echo "<script language='javascript'>document.location='adminhomee.html'; </script>";
	}	
}
echo "<script language='javascript'>document.location='admin.html'; </script>";
//echo "not successful";
?>

