<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #f1f1f1;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
	<h1> Admin Control Pannel</h1>
<ul>
  <li><a href="adminhomee.html">Home</a></li>
  <li><a href="memdetail.php">member detail</a></li>
  <li><a href="feeddetail.php">view feedback</a></li>
  <li><a href="photo.html">add photo</a></li>
    <li><a  href="#">add package</a></li>

</ul>


<?php
//echo "<body bgcolor=black text=orange>"<img src="C:\wamp\www\trial project\images\tooplate_slider">;
mysql_connect('localhost','root','');
mysql_select_db('event');
echo "<br>";
echo "<center><h1><font size=5 color=blue> registered member</font></h1></center>";
echo "<br>";
$data=mysql_query("select * from register");
$n=mysql_num_rows($data);
echo "<center>";
echo "<table border=1 align=center height=80% width=80%>";
echo "<tr>";
echo "<th>r_id";
echo "<th>firstname";
echo "<th>lastname";
echo "<th>username";
echo "<th>email";
echo "<th>password";
echo "<th>mobile no.";
echo "<th>address";
echo "<th>city";
echo "<th>state";
echo "<th>pin-code";
echo "<th>security question";
echo "<th>answer";
$p=1;
for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_row($data);
echo "<tr>";
echo "<td>".$row[0];
echo "<td>".$row[1];
echo "<td>".$row[2];
echo "<td>".$row[3];
echo "<td>".$row[4];
echo "<td>".$row[5];
echo "<td>".$row[6];
echo "<td>".$row[7];
echo "<td>".$row[8];
echo "<td>".$row[9];
echo "<td>".$row[10];
echo "<td>".$row[11];
echo "<td>".$row[12];
}
echo "</table>";
echo "</center>";
?>
</td>
</table>
	</body>
</html>