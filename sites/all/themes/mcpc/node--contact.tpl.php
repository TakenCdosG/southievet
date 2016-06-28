<div id="contact_wrapper">
	<div id="map">
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMx26Zzzcj2CRatbAR0j_vN4BSXsve2Iw&sensor=true">
    </script>
    <script type="text/javascript">
			function initialize(){
				// Coordinates
				var myLatlng = new google.maps.LatLng(<?php print $node->field_location['und'][0]['latitude'].','.$node->field_location['und'][0]['longitude'] ?>);
				// Map settings
				var mapOptions = {
          center: myLatlng,
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					streetViewControl: false,
					zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
				// Load the map
				var map = new google.maps.Map(document.getElementById("map"), mapOptions);
				// Add marker
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title:"South Boston Animal Hospital"
				});
				// Recenter the map on resize
				google.maps.event.addDomListener(window, 'resize', function() {
					map.setCenter(myLatlng);
				});
			}

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	</div>
</div>