<!DOCTYPE html>
<HTML>
<BODY>
	<?php
        include('../header.php');
        ?>
Click Show location button and run :)
<input type="button" value="Drive On" onclick="showlocation()"/> 
 
<br/>
Latitude: <span id="latitude">..</span> <br>
Longitude: <span id="longitude">..</span>
 
<SCRIPT>
function showlocation(){
    navigator.geolocation.watchPosition(callback);
}
function callback(position){
    document.getElementById('latitude').innerHTML=position.coords.latitude;
    document.getElementById('longitude').innerHTML=position.coords.longitude;
}
</SCRIPT>
</HTML>
