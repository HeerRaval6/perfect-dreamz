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
	<h1> Admin Control Panel</h1>

<ul>
  <li><a href="adminhomee.html">Home</a></li>
  <li><a href="newadmin.html">New Admin</a></li>    <li><a href="memdetail.php">member detail</a></li>
  <li><a href="feeddetail.php">view feedback</a></li>
  <li><a href="photo.html">add photo</a></li>
  <li><a  href="newpackage.html">add package</a></li>
  <li><a  href="deletepackage.php">Delete Package</a></li>

</ul>
        
<center><h1><font size=5 color=black>Add service to package</font></h1></center>
<form action="package.php" method="post" ">
<center><table align=center>
<font size=5>
<tr>
<td><font size=3 color=black>Enter event<td><input type=text name="p1">
</tr>
<tr>
<td><font size=3 color=black> Add  amount<td><input type=text name="p2">
</tr> 
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p3">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p4">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p5">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p6">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p7">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p8">
</tr> 
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p9">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p10">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p11">
</tr>
<tr>
<td><font size=3 color=black>Enter service <td><input type=text name="p12">
</tr>
 
 <tr><td><br>
<input type="submit" class="btn btn-primary btn-block btn-large" value="Upload package" name="submit">
</font></table></center>
</form>
</body>
</html>