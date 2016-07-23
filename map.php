<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Find your route</title>
<?php include'header.php'; ?>

    <style>

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select, #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }
      
      #map {
        /*height: 500px;*/
        float: left;
        width: 100%;
        height: 100%;
        margin-top: -106px;
        /*z-index: -1;*/
      }

      #right-panel {
        margin: 23px 20px 20px 20px;
        border-width: 2px;
        width: 20%;
        float: left;
        text-align: left;
        padding: 20px;
        position: absolute;
        background-color: #fff;
      }

      #directions-panel {
        margin-top: 20px;
        /*background-color: #FFF;*/
        padding: 10px;
      }

      input{
        width: 100%;
        height: 35px;
        font-family: "Lato", sans-serif;
        font-size: 20px;
        color: #ffd405;
        background-color: #000;
        outline: none;
        border: none;
        margin-top: 20px;
      }

      select{
        height: 40px;
      }

    </style>
<!--   </head>
  <body> -->
    

    <div id="map"></div>
    
    <div id="right-panel">
    <div>
    <b>Start:</b>
    <select id="start">
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option>
      <option value="Gulberg Town,Karachi">Gulberg Town</option>
      <option value="Nagan Chowrangi, Karachi">Nagan Chowrangi</option>
      <option value="Anda Mor Road, Karachi">Anda Mor Road</option>
      <option value="Serena Towers and Mobile Market, Karachi">Serena Towers and Mobile Market</option>
      <option value="5 Star Round About, Shahrah-Sher Shah Suri, Karachi">5 Star Round About</option>
      <option value="Hyderi Bus Stop, Karachi">Hyderi </option>
      <option value="KDA Chowrangi Bus Stop, Karachi">KDA Chowrangi</option>
            <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
      <option value="Mausoleum of Quiad Azam, M. A. Jinnah Road, Karachi">Mausoleum of Quiad Azam, M. A. Jinnah Road</option>
      <option value="Sea View Karachi, Sea View Road, Karachi">Sea View Karachi, Sea View Road</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>

    </select>
    <br>


     <!-- <b>Waypoints:</b> <br>
    <i>(multiple selection)</i> <br> -->
    <select multiple id="waypoints" hidden>
    </select>
    
    <!-- <br> -->



    <b>End:</b>
    <select id="end">
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option>
      <option value="Gulberg Town,Karachi">Gulberg Town</option>
      <option value="Nagan Chowrangi, Karachi">Nagan Chowrangi</option>
      <option value="Anda Mor Road, Karachi">Anda Mor Road</option>
      <option value="Serena Towers and Mobile Market, Karachi">Serena Towers and Mobile Market</option>
      <option value="5 Star Round About, Shahrah-Sher Shah Suri, Karachi">5 Star Round About</option>
      <option value="Hyderi Bus Stop, Karachi">Hyderi </option>
      <option value="KDA Chowrangi Bus Stop, Karachi">KDA Chowrangi</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
      <option value="Mausoleum of Quiad Azam, M. A. Jinnah Road, Karachi">Mausoleum of Quiad Azam, M. A. Jinnah Road</option>
      <option value="Sea View Karachi, Sea View Road, Karachi">Sea View Karachi, Sea View Road</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>

    </select>
    <br>
      <input type="submit" id="submit" value="Find">
    </div>
    <div id="directions-panel"></div>
    <input type="button" value="Sigin In to Ride"  onclick="location.href='signin'">'
    </div>


    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 24.8615, lng: 67.0099}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var checkboxArray = document.getElementById('waypoints');
        for (var i = 0; i < checkboxArray.length; i++) {
          if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i].value,
              stopover: true
            });
          }
        }

        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
          
              summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br>';

            }
          } else {
            window.alert('Directions request failed due to ' + status);
          }
          
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjmANqiA3CjCY2QjYSfI9GapQ8khcICOA&callback=initMap">
    </script>

<!--   </body>
</html>