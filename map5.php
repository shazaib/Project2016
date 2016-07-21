<?php
    session_start();
    $rate = 2;
    $extra = 50;
    $fix = 65;
    $above = 110;
    $next=55;
    $min=3;
    $cons = 4;
    //}
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Taxi Fare Calculation using PHP with GOOGLE MAPS API V3</title>
    <style type="text/css">
    html {
        height: 100%
    }
    body {
        height: 100%;
        margin: 0px;
        padding: 0px;
        font-family:tahoma;
        font-size:8pt;
    }
    #total {
        font-size:large;
        text-align:center;
        font-family:Georgia, “Times New Roman”, Times, serif;
        color:#990000;
        margin:5px 0 10px 0;
        font-size:12px;
        width:580px;
    }
    input {
        margin:5px 0px;
        font-family:tahoma;
        font-size:8pt;
    }
    </style>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjmANqiA3CjCY2QjYSfI9GapQ8khcICOA&callback=initMap">
    </script>
    <script type="text/javascript">
        //<![CDATA[
          var map = null;
          var directionDisplay;
          var directionsService = new google.maps.DirectionsService();

          function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();

            var KARACHI = new google.maps.LatLng(24.8615,67.0099);

            var mapOptions = {  
                        center              : KARACHI,
                        zoom                : 12,
                        minZoom             : 3,
                        streetViewControl   : false,
                        mapTypeId           : google.maps.MapTypeId.ROADMAP,
                        zoomControlOptions  : {style:google.maps.ZoomControlStyle.MEDIUM}
                    };


            map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);

             //Find From location    
        var fromText = document.getElementById('start');
        var fromAuto = new google.maps.places.Autocomplete(fromText);
        fromAuto.bindTo('bounds', map);
        //Find To location
        var toText = document.getElementById('end');
        var toAuto = new google.maps.places.Autocomplete(toText);
        toAuto.bindTo('bounds', map);
        //  
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('directions-panel'));

            /*var control = document.getElementById('control');
            control.style.display = 'block';
            map.controls[google.maps.ControlPosition.TOP].push(control);*/
          }

          function calcRoute() {
            var start = document.getElementById('start').value;
            var end = document.getElementById('end').value;
            var request = {
              origin: start,
              destination: end,
              travelMode: google.maps.DirectionsTravelMode.DRIVING
            };
            directionsService.route(request, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                computeTotalDistance(response);
              }
            });
          }
          function computeTotalDistance(result) {
          var total = 0;
          var myroute = result.routes[0];
          for (i = 0; i < myroute.legs.length; i++) {
            total += myroute.legs[i].distance.value;
          }
          total = total / 1000;
          /*Start Calculating Distance Fair*/
              if (10>total){
              var cost = <?php echo $fix; ?>;
              }
              else if (10<total && 20>total)
                {
                var cost = ((total * <?php echo $rate; ?>) + (<?php echo $extra; ?>));
                }
                else if (20<total && 30>total)
                {
                    var cost = ((total * <?php echo $rate; ?>) + (<?php echo $next; ?>));
                }
                else if (30<total && 50>total)
                {
                    var cost = (((total - 30) * <?php echo $cons; ?>) + (<?php echo $above; ?>));
                }
                else
                {
                    var cost = (((total - 50) * <?php echo $min; ?>) + 130);
                }

              var fare = cost * 100 + cost;
              var fare = Math.round(fare*100)/100;
          /*Distance Fair Calculation Ends*/

          document.getElementById("total").innerHTML = "Total Distance = " + total + " km and FARE = Rs" + fare;
          }

        function auto() {
        var input = document.getElementById[('start'), ('end')];
        var types
        var options = {
           types: [],
           componentRestrictions: {country: ["PAS"]}
            };
            var autocomplete = new google.maps.places.Autocomplete(input, options);
         }

          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body onLoad="initialize()">
    <table width="100%" height="800px"  cellpadding="0" cellspacing="0" " style="border-collapse:collapse">
      <tr>
        <td  style="padding:5px;">
        <table width="100%" height="800px" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><div id="form" style="width:100%; text-align:center; border: solid 1px #336699; background:#d1e1e4;">
                  From:
                    <input type="text" id="start" size="80px" name="start" placeholder="Enter Location From">
                    To:
                    <input size="80px" type="text" id="end" name="end" placeholder="Enter Destination ">
                    <input type="button" value="Calculate" onClick="calcRoute();">
                 <div id="total"></div>
                 </div></td>
            </tr>
            <tr>
              <td><div id="map_canvas" style="width: 100%; height: 800px; border: solid 1px #336699"></div></td>
            </tr>
           
          </table>
          </td>
      </tr>
    </table>
    </body>
    </html>