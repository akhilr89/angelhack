<?php
include('login.php'); // Includes Request Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Account Recovery</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
        include('../header.php');
        ?>
		<div id="main">
		<center><h1>Recovery</h1><br/>
		<center>
			<div id="loginform">
			<span><h2>Recover Lost Account Credentials</h2></span>
				<div id="login">
				<form action="" method="post">
				<input id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="e-mail" type="email" required>
				<br/>
				<input name="submit" type="submit" value="Request">
				<br/>
				<span><a href="index.php">Go Back To Login!</a></span>
				<!--<span><?php//echo $error; ?></span></comment>-->
		</form>
		</div>
		</div>
		<?php
		include('../footer.php');
		?>
		</center>
		</div>
		</body>
</html>
