<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perfect Dreamz</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2067 Education
http://www.tooplate.com/view/2067-education
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>

<body>

<div id="tooplate_header">
    <a href="index.html" class="sitetitle">Education Template</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="login.html">Login</a>
                
            </li>
            <li><a href="gallery.html">Gallery</a>
                
            </li>
            <li><a href="about.html">About</a></li>                
            <li><a href="contact.html">Contact</a></li>
        </ul>

        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->



<html>
<?php
$z=$_GET['a'];
$y=$_GET['b'];
echo "<center>";
echo "<form action=submit.php method=post onSubmit=return formValidator(this);>";
echo"<table>";
echo"<td>";

echo "<table>";
echo "<td>";
echo "<h2>Submit form</h2>";
			echo "<tr>";
			echo "<td><label for=author>Package Prize:</label>";
                        echo "<input type=text id=author name=s1 value=$z class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>event name:</label>";
                        echo "<input type=text id=author name=s2 value=$y class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>First Name:</label>";
                        echo "<input type=text id=author name=s3 class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>Email-id:</label>";
                        echo "<input type=text id=author name=s4  class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>Mobile no:</label>";
                        echo "<input type=text id=author name=s5 class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>Address:</label>";
                        echo "<textarea id=text name=s6 rows=0 cols=0 class=required></textarea></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>City:</label>";
                   	echo "<select name=s7>";
			echo "<option value=ahmedabad>AHMEDABAD</option>";
			echo "<option value=rajkot>RAJKOT</option>";
			echo "<option value=jamnagar>JAMNAGAR</option>";
			echo "<option value=surat>SURAT</option>";
			echo "<option value=vadodra>VADODRA</option>";
			echo "<option value=mumbai>MUMBAI</option>";
			echo "<option value=delhi>DELHI</option>";
			echo "<option value=chennai>CHENNAI</option>";
			echo "<option value=jaipur>JAIPUR</option>";
			echo "<option value=udaipur>UDAIPUR</option>";
			echo "<option value=ludhiana>LUDHIANA</option>";
			echo "<option value=pune>PUNE</option>";
			echo "<option value=amritsar>AMRITSAR</option>";
			echo "<option value=goa>GOA</option>";
			echo "</select>";
			echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>State:</label>";
			echo "<select name=s8>";
			echo "<option value=gujarat>GUJARAT</option>";
			echo "<option value=maharashtra>MAHARASHTRA</option>";
			echo "<option value=punjab>PUNJAB</option>";
			echo "<option value=goa>GOA</option>";
			echo "<option value=rajasthan>RAJASTHAN</option>";
               		echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>Pincode:</label>";
                    	echo "<input type=text id=author name=s9 class=required input_field /></td>";

$ans=date("d/m/y");
			echo "<tr>";
			echo "<td><label for=author>Current Date:</label>";
                        echo "<input type=text id=author value=$ans name=s10 class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><label for=author>Booking Date:</label>";
                        echo "<input type=text id=author name=s11 class=required input_field /></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo "<p>";
			echo "<td><button>submit</button></a></td></p>";
			echo "</td>";
			echo "</tr>";
		echo "</td>";
echo "</table>";
?>	