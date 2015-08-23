<?php
include('session1.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>This is the Centralized Control Panel<?php echo ($login_session);?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome"><a href="profile1.php">Go Back<a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<br/>
<center>
<div id="content">
	<center><p> 
    <form method="post" action="adds.php">
    <input id="lat" name="lat" placeholder="Latitude" type="text" required>
    <br>
    <input id="lon" name="lon" placeholder="Longitude" type="text" required>
    <br>
    <input id="gid" name="gid" placeholder="Group Id" type="number" required>
    <br>
    <input id="status" name="status" placeholder="Initial Status" type="number" min=0 max=1 step=1 value=0 required>
    <br>
    <input name="submit" type="submit" value=" Add ">
    </p></center>
</div>
</center>
<?php
		include('../footer.php');
		?>
</body>
</html>
