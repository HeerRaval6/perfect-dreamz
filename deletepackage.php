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
  <li><a  href="newadmin.html">New Admin</a></li>
  <li><a href="memdetail.php">member detail</a></li>
  <li><a href="feeddetail.php">view feedback</a></li>
  <li><a href="photo.html">add photo</a></li>
  <li><a  href="newpackage.php">add package</a></li>
  <li><a  href="deletepackage.php">Delete Package</a></li>
</ul>

<?php
mysql_connect('localhost','root','');
mysql_select_db('event');
echo "<br><center><h1><font size=5 color=blue>Package Information</font></h1></center>";
$data=mysql_query("select * from package");
$n=mysql_num_rows($data);
echo "<br><center>";
echo "<table border=1 align=center height=50% width=50%>";
echo "<tr>";
echo "<th>p_id";
echo "<th>ename";
echo "<th>amount";
echo "<th>s2";
echo "<th>s3";
echo "<th>s4";
echo "<th>s5";
echo "<th>s6";
echo "<th>s7";
echo "<th>s8";
echo "<th>s9";
echo "<th>s10";
echo "<th>s11";

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
echo "<td><a href=deletepack.php?a=$row[0]>Delete</a>";
}
echo "</table>";
echo "</center>";
echo "</body>";
?>
