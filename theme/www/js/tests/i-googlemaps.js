Util.Objects["googlemaps"] = new function() {
	this.init = function(div) {

		div.APIloaded = function() {
			u.bug("map API loaded ", this)
		}
		div.loaded = function() {
			u.bug("map loaded ", this)
			var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179]);
		}

		// map.g_map will be available when map is loaded (when callback loaded is invoked)
		u.googlemaps.map(div, [55.700716,12.44179]);
		
	}
}


Util.Objects["googlemapsAdvanced"] = new function() {
	this.init = function(div) {

		var theme = [
			{
				"featureType": "all",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#ffffff"
					}
				]
			},
			{
				"featureType": "all",
				"elementType": "labels.text",
				"stylers": [
					{
						"hue": "#ff0000"
					}
				]
			},
			{
				"featureType": "all",
				"elementType": "labels.icon",
				"stylers": [
					{
						"hue": "#ff0000"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#c49696"
					}
				]
			},
			{
				"featureType": "road",
				"elementType": "geometry.stroke",
				"stylers": [
					{
						"hue": "#ff0000"
					}
				]
			},
			{
				"featureType": "water",
				"elementType": "geometry.fill",
				"stylers": [
					{
						"color": "#e9e9e9"
					}
				]
			}
		];
		
		div.loaded = function() {
			u.bug("map loaded", this);

			// Create marker
			var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179], {"info":"test", "icon":"/img/logo-small.png", "title":"hey", "snippet":"hey"});
			console.log(marker);
			
			// Create info window
			u.googlemaps.infoWindow(div)
			u.googlemaps.showInfoWindow(div, marker, "<h3>Header</h3><p>Paragraph</p>");

			// Marker click handler
			marker.clicked = function() {
				u.googlemaps.removeMarker(this.g_map, this);
			}

			marker.entered = function() {
				u.googlemaps.hideInfoWindow(this.g_map);
			}

		}

		u.googlemaps.map(div, [55.700716,12.44179], {"zoom":10, "styles":theme, "scrollwheel":false, "streetview":true, "disableUI":true});

	}
}