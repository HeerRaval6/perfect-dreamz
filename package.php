
<?php
$a=$_POST['p1'];
$b=$_POST['p2'];
$c=$_POST['p3'];
$d=$_POST['p4'];
$e=$_POST['p5'];
$f=$_POST['p6'];
$g=$_POST['p7'];
$h=$_POST['p8'];
$i=$_POST['p9'];
$j=$_POST['p10'];
$k=$_POST['p11'];
$l=$_POST['p12'];


$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con); 
$str="insert into package (ename,amount,s2,s3,s4,s5,s6,s7,s8,s9,s10,s11) values ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";

mysql_query($str);
echo "inserted";
?>
