<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Something went wrong!Please Try Again Later!' . mysql_error());
  }
  $lo=$_GET['lo'];
  $la=$_GET['la'];
mysql_select_db("traffic", $con);
$sql=mysql_query("update control set status=1 where lat='$la' AND lon='$lo'", $con);
mysql_close($con);
?>
<html>
<head/>
<body>
	<?php
        include('../header.php');
        ?>
<script>
window.close();
</script>
</body>
</html>
