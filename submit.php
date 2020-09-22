<?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
$d=$_POST['s4'];                        
$e=$_POST['s5'];
$f=$_POST['s6'];
$g=$_POST['s7'];
$h=$_POST['s8'];
$i=$_POST['s9'];
$j=$_POST['s10'];
$k=$_POST['s11'];

$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$str="insert into submit(prize,ename,uname,email,mono,address,city,state,pincode,date,bdate)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
mysql_query($str);
echo "your package is been booked to finalize the deal please visit our office";

?>