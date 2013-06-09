<div class="pageContent topBlock">
	<h2>Hitta till Blå Huset</h2>
	<ul>
	<li>Följ Gröndalsleden från Värnamo</li>
	<li>Sväng vänster mot Alandsryd (liten skylt Blå Huset)</li>
	<li>Kör ca 500m</li>
	<li>Sväng höger vid skylten Blå Huset, kör 300m</li>
	<li>Sväng höger vid skylten Blå Huset</li>
	</ul>
</div>
<div class="pageContent right topBlock pT">
	<script type="text/javascript">
		function initialize() {
       	var mapOptions = {
          center: new google.maps.LatLng(57.197918, 13.996795),
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
        var marker = new google.maps.Marker ({
        position:map.getCenter(),
        map: map,
        title: 'Blå Huset'
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
   	</script>
    <div id="map-canvas" class="border" style="width: 400px; height: 400px;"></div>
 </div>
