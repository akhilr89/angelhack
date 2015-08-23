<?php
include('session.php');
?>

<html>

<head>

<meta charset="UTF-8" />
      
      <link href="style.css" rel="stylesheet" type="text/css">

    <title> Maps </title>

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script type="text/javascript">

 window.onload = function () {

 var mapOptions = {

 center: new google.maps.LatLng(8.56124601727043, 76.88876152038574),

 zoom: 14,

 mapTypeId: google.maps.MapTypeId.ROADMAP

 };

 var infoWindow = new google.maps.InfoWindow();

 var latlngbounds = new google.maps.LatLngBounds();

 //This will load your map with default location co-ordinates.

 var map = new google.maps.Map(document.getElementById("mapDiv"), mapOptions);

 //To capture click event.

 google.maps.event.addListener(map, 'click', function (e) {

 document.getElementById("latitude").value = e.latLng.lat();

 document.getElementById("longitude").value = e.latLng.lng();

 placeMarker(e.latLng,map);

 });

 }

//Adding marker on click

var marker;

function placeMarker(location,map) {

  if ( marker ) {

    marker.setPosition(location);

  } else {

    marker = new google.maps.Marker({

      position: location,

      map: map

    });

  }

}</script>

<script type="text/javascript">

      function calculateRoute(from, to) {

        // Center initialized to Technopark

        var myOptions = {

          zoom: 10,

          center: new google.maps.LatLng(8.56124601727043, 76.88876152038574),

          mapTypeId: google.maps.MapTypeId.ROADMAP

        };

        // Draw the map

        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);

        var directionsService = new google.maps.DirectionsService();

        var directionsRequest = {

          origin: from,

          destination: to,

          travelMode: google.maps.DirectionsTravelMode.DRIVING,

          unitSystem: google.maps.UnitSystem.METRIC

        };

        directionsService.route(

          directionsRequest,

          function(response, status)

          {

            if (status == google.maps.DirectionsStatus.OK)

            {

              new google.maps.DirectionsRenderer({

                map: mapObject,

                directions: response

              });

            }

            else

              $("#error").append("Unable to retrieve your route<br />");

          }

        );

      }

      $(document).ready(function() {

        // If the browser supports the Geolocation API

        if (typeof navigator.geolocation == "undefined") {

          $("#error").text("Your browser doesn't support the Geolocation API");

          return;

        }

        $("#from-link, #to-link").click(function(event) {

          event.preventDefault();

          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {

            var geocoder = new google.maps.Geocoder();

            geocoder.geocode({

              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)

            },

            function(results, status) {

              if (status == google.maps.GeocoderStatus.OK)

                $("#" + addressId).val(results[0].formatted_address);

              else

                $("#error").append("Unable to retrieve your address<br />");

            });

          },

          function(positionError){

            $("#error").append("Error: " + positionError.message + "<br />");

          },

          {

            enableHighAccuracy: true,

            timeout: 10 * 1000 // 10 seconds

          });

        });

        $("#calculate-route").submit(function(event) {

          event.preventDefault();

          calculateRoute($("#from").val(), $("#to").val());

        });

      });

    </script>

    <style type="text/css">

      #map {

        text-align: auto;

        width: 500px;

        height: 400px;

        margin-top: 10px;

      }

    </style>

 </head>

<body>
  <?php
        include('../header.php');
        ?>
<center>
<div id="profile">
<b id="welcome"><a href="profile.php">Go Back</a></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<br/>
  <h1>Get The Best Route</h1>
  <h2>Pick the Destination Or Enter It</h2>
  <div id="mapDiv" style="width: 75%; height: 300px"> </div>

   <script>

   function generateto()

   {

        document.getElementById('to').value = 

        document.getElementById('latitude').value + ',' + 

        document.getElementById('longitude').value;

   }

</script>

<input id="latitude" name="latitude" type="text" placeholder="Latitude">

<input id="longitude" name="longitude" type="text" placeholder="Longitude" onkeyup="generateto()">

<br/>



    <form id="calculate-route" name="calculate-route" action="#" method="get">

      

      <input type="text" id="from" name="from" required="required" placeholder="Current address" size="30" />

      

      <button  class="button" id="from-link" href="#">Get my position</button>

      <br/>

      <input type="text" id="to" name="to" required="required" placeholder="To address" size="30" />
        <button  class="button" onclick="generateto()">Get destinaion</button>

      <br />

      <input type="submit" class="button"/>

      <input type="reset" class="button"/>

    <div id="mapDiv"></div>

    <p id="error"></p>

  <div id="map" style="width: 75%"></div>

<input type="button" value="Drive On" onclick="showlocation()" class="button"/> 

 <br/>

<span id="latitude1"></span>

<span id="longitude1"></span>

<script>

function showlocation(){

    navigator.geolocation.watchPosition(callback);

}

function callback(position){

    document.getElementById('latitude1').innerHTML=position.coords.latitude;

    document.getElementById('longitude1').innerHTML=position.coords.longitude;

    var la = position.coords.latitude;

    var lo = position.coords.longitude;

    window.open('push.php?la='+la+'&lo='+lo,'_blank'); 

}

</script>

|Page will be periodically refershed when you start driving,for precise location.
</center>
</form>
</center>
</body>

</html>

