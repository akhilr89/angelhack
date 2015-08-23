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
      <li><a href="addsig.php" target=_blank>Add A New Signal Control</a></li>
      <li><a href="remsig.php" target=_blank>Remove Existing Signal Control</a></li>
      <li><a href="list.php" target=_blank>List Out</a></li>
    </ul>
</div>
<center>
<div id="content">

    <center><p> Select One Of the Submenu's To Move On <br><br><br><br></p></center>
</div>
<?php
		include('../footer.php');
		?>
</center>
</body>
</html>
