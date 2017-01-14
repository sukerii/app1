<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;
	  var infowindow1;

      function initMap() {
        var pyrmont = {lat: -7.9658583, lng: 112.6080676};

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 500,
          type: ['store']
		  }, callback);
		  
		    infowindow1 = new google.maps.InfoWindow();
        var service1 = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 500,
          type: ['atm']
		  
        }, callback);
      }
	
	  

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
	  //krisna elek
	  //baris iki tak rubah 
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdEqu7Fworb5KwmQtReKeghN-NO1SJgbs&libraries=places&callback=initMap" async defer></script>
  </body>
</html>

git clone https://github.com/andiksiswanto9/cc.git $didin

- Buat Folder : YUDHA=~/src/latihan4444/latihan44
- Cloning Github ke folder : git clone https://github.com/sysaputra/Youtube-Converter.git $YUDHA
- Masuk ke folder : cd $YUDHA
- Masuk ke branch gcloud : git checkout gcloud
- Deploy ke Web preview : dev_appserver.py --php_executable_path=/usr/bin/php-cgi $PWD 
nyoba