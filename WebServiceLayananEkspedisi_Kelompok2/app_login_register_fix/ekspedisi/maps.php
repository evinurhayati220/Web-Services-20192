<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Set a point after Geocoder result</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
type="text/css"
/>
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<style>
#geocoder-container > div {
min-width: 50%;
margin-left: 25%;
}
</style>
<div id="map"></div>
 
<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibWl0aGEyMyIsImEiOiJja2I4M3Fuc28wMGg2MnBvNHFtNzZqNnB3In0.BNTiiL71LY2v8uDtBb3kGw';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [108.5520407, -6.6916173],
zoom: 13
});
 
var geocoder = new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
marker: {
color: 'orange'
},
mapboxgl: mapboxgl
});


map.addControl(geocoder);
</script>
 
</body>
</html>
