<?php
$a=$_POST['r1'];
$b=$_POST['r2'];
$c=$_POST['r3'];
$d=$_POST['r4'];                        
$e=$_POST['r5'];
$f=$_POST['r7'];
$g=$_POST['r8'];
$h=$_POST['r9'];
$i=$_POST['r10'];
$j=$_POST['r11'];
$k=$_POST['r12'];
$l=$_POST['r13'];

$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);
$str="insert into register(fname,lname,uname,emailid,pwd,mono,address,city,state,pincode,secque,ans)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
mysql_query($str);
echo "record inserted successfully";

?>