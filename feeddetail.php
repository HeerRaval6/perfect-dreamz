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
//echo "<body bgcolor=black text=orange>";
mysql_connect('localhost','root','');
mysql_select_db('event');
echo "<br><center><h1><font size=5 color=blue>Suggestion Given By member</font></h1></center>";
$data=mysql_query("select * from feedback");
$n=mysql_num_rows($data);
echo "<br><center>";
echo "<table border=1 align=center height=50% width=50%>";
echo "<tr>";
echo "<th>f_id";
echo "<th>name";
echo "<th>Email_id";
echo "<th>message ";

for($i=0;$i<$n;$i++)
{
$row=mysql_fetch_row($data);
echo "<tr>";
echo "<td>".$row[0];
echo "<td>".$row[1];
echo "<td>".$row[2];
echo "<td>".$row[4];
}
echo "</table>";
echo "</center>";
echo "</body>";
?>




</body>
</html>
