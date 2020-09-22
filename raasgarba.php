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

 $result=mysql_query("select * from photo where ename='raasgarba' ");
$n=mysql_num_rows($result);
echo "<table>"; 
 for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_row($result);
echo "<tr>";

echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=gallery2/$row[2] style=width:928px;height:328px;>";
}
echo "<table>";
?>