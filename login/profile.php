

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

<div id="profile">

<b id="welcome">Welcome : <i><?php echo ($login_session); ?></i></b>

<b id="logout"><a href="logout.php">Log Out</a></b>

</div>

<br/>

<table>

<tr>

<td width="25%">

<div id="nav">

    <ul>

      <li><a href="locate.html">Your Location</a></li>

      <li><a href="final.php">Go Somewhere</a></li>

    </ul>

</div>

</td>

<td width="75%">

<center>

<div id="content">

    <center><p> Select A Submenu To Move On </p></center>

</div>

</center>



</td>

</tr>

</table>

</body>

</html>

