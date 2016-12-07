<h2>Mapa dos pontos e estudantes</h2>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(<?php echo $estudantes[0]->getLat().",".$estudantes[0]->getLong(); ?>),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'webroot/img/';
        var icons = {
          ponto: {
            icon: iconBase + 'bus_map.png'
          },
          estudante: {
            icon: iconBase + 'user_map.png'
          }
        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }

        var features = [
           <?php
           $cont = 0;
           foreach ($estudantes as $estudante) {
             if($cont != (count($estudante)-1))
               echo  ",";
          $cont++;
          ?>

             {
              type: 'estudante',
              position: new google.maps.LatLng(<?php echo $estudante->getLat().",".$estudante->getLong(); ?>)
             }

           <?php

         }

         if(!empty($pontos))
            echo ",";
           ?>


           <?php
          $cont = 0;
          foreach ($pontos as $ponto) {
           if($cont != (count($ponto)-1))
             echo  ",";
         $cont++;
         ?>

           {
             type: 'ponto',
             position: new google.maps.LatLng(<?php echo $ponto->getLat().",".$ponto->getLong(); ?>)
           }

          <?php

        }
          ?>


        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWX65SWnShDhbin6V-87H4hroL8T_ks4s&callback=initMap">
    </script>
  </body>
</html>
