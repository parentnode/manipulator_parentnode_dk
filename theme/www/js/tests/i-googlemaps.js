Util.Objects["googlemaps"] = new function() {
	this.init = function(div) {

		div.APIloaded = function() {
			u.bug("map API loaded")
		}
		div.loaded = function() {
			u.bug("map loaded")
			var g_marker1 = u.googlemaps.addMarker(this.g_map, [55.720716, 12.46179]);
		}

		// scene.map.g_map will be available when map is loaded (when callback loaded is invoked)
		u.googlemaps.map(div, [55.700716,12.44179], {"zoom":10});
		
	}
}


Util.Objects["googlemapsAdvanced"] = new function() {
	this.init = function(div) {


	}
}