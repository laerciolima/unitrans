<?php

$cont = 0;
$vetor = "";
foreach ($estudantes as $estudante) {
    $address = str_replace(" ", "+", $estudante->getRua()) . "," . $estudante->getNumero() . ",";
    $address .= str_replace(" ", "+", $estudante->getCidade()) . ",Brasil";

    echo $address . "-<br/>";

    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $address . '&sensor=false');

    $output = json_decode($geocode);

    $lat = $output->results[0]->geometry->location->lat;
    $long = $output->results[0]->geometry->location->lng;


     $vetor .= "['".$estudante->getNome()."', ".$lat . "," . $long.",1]";
     if($cont != (count($estudante)-2))
         $vetor .= ",";
    $cont++;
}

echo $vetor;



?>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBWX65SWnShDhbin6V-87H4hroL8T_ks4s&sensor=false"
          type="text/javascript"></script>
 <div id="map" style="width: 900px; height: 600px;"></div>

  <script type="text/javascript">
    var locations = [
      <?php echo $vetor; ?>
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(-18.9205386, -48.2567756),
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
