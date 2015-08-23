<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Its Your Home Page,<?php echo ($login_session);?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
        include('../header.php');
        ?>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo ($login_session); ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<br/>
<div id="nav">
    <ul>
      <li><a href="locate.html">Your Location</a></li>
      <li><a href="final.php">Go Somewhere</a></li>
    </ul>
</div>
<center>
<div id="content">

    <center><p> Select A Submenu To Move On </p></center>
</div>
</center>
<?php
		include('../footer.php');
		?>
</body>
</html>
