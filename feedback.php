<?php
$a=$_POST['f1'];
$b=$_POST['f2'];
$c=$_POST['f3'];
$d=$_POST['f4'];

$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$str="insert into feedback(name,emailid,subject,message)values('$a','$b','$c','$d')";
mysql_query($str);
echo "thank you for feedback";


?>
