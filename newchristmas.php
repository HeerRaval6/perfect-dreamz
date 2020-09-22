<?php

echo "<head>";

echo "<style>";
echo "img {
     width: 100%;
   
}";
echo "</style>";
echo "</head>";
$con=mysql_connect('localhost','root','');
mysql_select_db('event',$con);

 $result=mysql_query("select * from package where ename='christmas' ");
$n=mysql_num_rows($result);
echo "<form action=submit1.php>";
echo "<center>";
echo "<table align=center>"; 
 for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_row($result);
echo "<tr>";

echo "<tr><br><h1>$row[1]</h1>";
echo "<tr><br>prize=$row[2]";
echo "<tr><br><h1>service provided :- </h1><br>$row[3]";
echo "<tr><br>$row[4]";
echo "<tr><br>$row[5]";
echo "<tr><br>$row[6]";
echo "<tr><br>$row[7]";
echo "<tr><br>$row[8]";
echo "<tr><br>$row[9]";
echo "<tr><br>$row[10]";
echo "<tr><br>$row[11]";
echo "<tr><br>$row[12]";
echo "<tr><br><a href=submit1.php?a=$row[2]&b=$row[1]>Submit</a>";

echo "</tr>";
echo "<hr>";
}
echo "<table>";
?>