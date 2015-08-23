<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Something went wrong!Please Try Again Later!' . mysql_error());
  }
  $lo=$_GET['lo'];
  $la=$_GET['la'];
mysql_select_db("traffic", $con);
$sql=mysql_query("update control set status=1 where (( 3959 * acos( cos( radians($la) ) * cos( radians( lat ) ) 
   * cos( radians(lon) - radians($lo)) + sin(radians($la)) * sin( radians(lat))))>300||( 3959 * acos( cos( radians($la) ) * cos( radians( lat ) ) 
   * cos( radians(lon) - radians($lo)) + sin(radians($la)) * sin( radians(lat))))<-300)", $con);

mysql_close($con);
?>
<html>
<head/>
<body>
<script>
window.close();
</script>
</body>
</html>
