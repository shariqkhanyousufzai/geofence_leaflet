<!DOCTYPE html>
<html>
<head>
	<title>Leaflet debug page</title>

	<link rel="stylesheet" href="../lib/leaflet-0.6.4/leaflet.css" />
    <!-- <link rel="stylesheet" href="../css/marker-extend.css" /> -->
    <link rel="stylesheet" href="../lib/Leaflet.draw-0.2.0/dist/leaflet.draw.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="../lib/leaflet-0.6.4/leaflet.ie.css" /><![endif]-->

	<script src="../lib/jquery-1.6.4.min.js"></script>
	<script src="../lib/leaflet-0.6.4/leaflet-src.js"></script>
    <script src="../lib/Leaflet.draw-0.2.0/dist/leaflet.draw.js"></script>
	<script src="../src/L.CircleEditor.js" ></script> 
	<script src="../src/L.PolySideLabel.js" ></script> 
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<body>
	<div id="map" style="width: 800px; height: 600px; border: 1px solid #ccc"></div>

	<script src="route.js"></script>
	<script>
		var cloudmadeUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
			cloudmade = new L.TileLayer(cloudmadeUrl, {maxZoom: 18}),
			map = new L.Map('map', {layers: [cloudmade], center: new L.LatLng(51.505, -0.04), zoom: 13});


		// var circleLocation = new L.LatLng(51.51, -0.03),
		// circleOptions = {
		//     color: 'red', 
		//     fillColor: 'yellow', 
		//     fillOpacity: 0.7,
  //           extendedIconClass : 'extend-icon' /*there are 3 classes defined in the marker-extend.css file*/
		// };

  //       var circle = new L.CircleEditor(circleLocation, 800, circleOptions);
		
		// map.addLayer(circle);

		// var polygon = new L.Polygon([
		// 	new L.LatLng(51.51, -0.1),
		// 	new L.LatLng(51.5, -0.06),
		// 	new L.LatLng(51.52, -0.03)
		// ]);

		// polygon.editing.enable();

		// map.addLayer(polygon);

		// circle.on('edit', function() {
  //           console.log('Circle was edited!');
  //           console.log(this._latlng);
  //          circle_data = this._mRadius;
  //          $('#assign_circle_value').val(this._mRadius);
  //          $('#lat_circle').val(this._latlng.lat);
  //          $('#lon_circle').val(this._latlng.lng);
  //          $('#type_geofency').val("cicle");
  //          console.log(circle_data);
  //       });

		// circle.on('centerchange', function() {
		// 	console.log('the circle has moved.');
		// });
		
		// circle.on('radiuschange', function() {
		// 	//console.log(this);
				 
		// 	//console.log('the radius has chahged to: ' + this._mRadius);
		// 	});

	</script>
	<form method="post" action="save.php">
		<input type="hidden" id="assign_circle_value" name="circle_radius">
		<input type="hidden" id="lat_circle" name="lat_circle">
		<input type="hidden" id="lon_circle" name="lon_circle">
		<input type="hidden" name="type_geofency" id="type_geofency">
	<button id="saveCircle">Save Circle Geofency</button>
	</form>
	
</body>
</html>
