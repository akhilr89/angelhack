<?php
include('login1.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile1.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Traffic Control Helper</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
        include('../header.php');
        ?>
		<div id="main">
		<center><h1>Login</h1><br/>
		<center>
			<div id="loginform">
			<span><h2>Control Room Login</h2></span>
				<div id="login">
				<form action="" method="post">
				<input id="name" name="username" placeholder="Username" type="text" required>
				<br/>
				<input id="password" name="password" placeholder="Your Password" type="password" required>
				<br/>
				<input name="submit" type="submit" value=" Login ">
				<script type="text/javascript">
				$('form').submit(function(){
    $(this).children('input[type=submit]').prop('disabled', true);
});
				</script>
				<br/>
				<span><a href="index.php">Secondary Login</a></span>
				<span><?php echo $error; ?></span>
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