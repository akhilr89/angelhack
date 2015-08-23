<!DOCTYPE html>
<html>
<head>
<title>Its Your Home Page,<?php echo ($login_session);?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome"><a href="profile1.php">Go Back></a></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<br/>
<?php
include('login1.php'); 
$lon=$_POST['lon'];
$lat=$_POST['lat'];
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("traffic", $connection);
$query = mysql_query("select * from control where lon='$lon' AND lat='$lat'", $connection);
$rows = mysql_num_rows($query);
if ($rows != 0) {
echo "<p>The Postition Is Already Occupied!<p>";
} else {
$sql="INSERT INTO control (lon,lat)VALUES ('$_POST[lon]','$_POST[lat]')";
if ($id = mysql_query($sql,$connection))
  {
echo "<p>Success</p>";
}
mysql_close($connection); // Closing Connection
}

?>
<?php
		echo "</br></br>";
		include('../footer.php');
		?>
</body>
</html>
