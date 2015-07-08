<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}

	.map {height: 300px;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			scene.map = u.qs(".map", scene);
			scene.map.APIloaded = function() {
				u.bug("map API loaded")
			}
			scene.map.loaded = function() {
				u.bug("map loaded")
				var g_marker1 = u.googlemaps.addMarker(this.g_map, [55.720716, 12.46179]);
			}

			// scene.map.g_map will be available when map is loaded (when callback loaded is invoked)
			u.googlemaps.map(scene.map, [55.700716,12.44179], {"zoom":10});
			
		}
	}

</script>

<div class="scene i:test">
	<h1>Google Maps</h1>

	<div class="map"></div>

</div>
<div class="comments"></div>
