<?php $end = "Rua isaac de oliveira 71 santa monica uberlandia";

	$end = str_replace(" ", "+", $end);
	
	echo $end;

$geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$end.'&sensor=false');

$output= json_decode($geocode);

$lat = $output->results[0]->geometry->location->lat;
$long = $output->results[0]->geometry->location->lng;

echo $lat." - - ".$long;


?>



<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyBWX65SWnShDhbin6V-87H4hroL8T_ks4s" 
          type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
   var locations = [
  ['Uberlandia', <?php echo $lat; ?>, <?php echo $long; ?>, 4]
];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng( <?php echo $lat; ?>, <?php echo $long; ?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
