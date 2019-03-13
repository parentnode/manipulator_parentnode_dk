<div class="scene docpage i:docpage">
	<h1>Google Maps</h1>
	<p>
		Interactable and customizable map.
	</p>
	<p>
		You will need to provide a google api key to set up the map.
		To do so make sure the following variable is loaded before the u-googlemaps.js module.
	</p>

	<code>u.gapi_key = "#GOOGLE_API_KEY_HERE";</code>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.googlemaps.map">
				<div class="header">
					<h3>Util.googlemaps.map</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.map</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
							Util.googlemaps.map(
									<span class="type">Node</span> <span class="var">node</span> 
									, <span class="type">Array</span> <span class="var">coordinates </span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Initialize map</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">

							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The node which to inject the map into
								</div>
							</dd>

							<dt><span class="var">Coordinates</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Array</span> The altitude and longtitude coordinates to center the map
								</div>
							</dd>

							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object to customize the map
								</div>

								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">zoom</span></dt>
										<dd>Default <span class="value">10</span>, Specifies which zoom level to start at</dd>

										<dt><span class="value">scrollwheel</span></dt>
										<dd>Default <span class="value">true</span>, Disable or enable scrollwheel zoom</dd>

										<dt><span class="value">streetview</span></dt>
										<dd>Default <span class="value">false</span>, Disable or enable streetview funcionality</dd>

										<dt><span class="value">styles</span></dt>
										<dd>Custom look for your map provided with a JSON array</dd>

										<dt><span class="value">disableUI</span></dt>
										<dd>Default <span class="value">false</span>, Wether to use default googlemaps buttons</dd>
									</dl>
								</div>

							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Default map</p>
							<code>
map.APIloaded = function() {
	// Invoked when the googlemaps API from google is loaded
}
map.loaded = function() {
	// Invoked once the map has been created
}

var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);
							</code>
						</div>

						<div class="example">
							<p>Customized map</p>
							<code>
var map = u.qs("div");
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
		"featureType": "road",
		"elementType": "geometry.stroke",
		"stylers": [
			{
				"hue": "#ff0000"
			}
		]
	}
];

u.googlemaps.map(map, [55.700716,12.44179], {"zoom":6, "styles":theme, "disableUI":true});
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>for ... in</li>
								<li>switch ... case</li>
								<li>while ...</li>
								<li>google.maps.LatLng (Google Maps API)</li>
								<li>google.maps.Map (Google Maps API)</li>
								<li>google.maps.event.addListener (Google Maps API)</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
							</ul>
						</div>

					</div>

				</div>
			</div>




			<div class="function" id="Util.googlemaps.addMarker">
				<div class="header">
					<h3>Util.googlemaps.addMarker</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.addMarker</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Object</span> = 
							Util.googlemaps.addMarker(
									<span class="type">Node</span> <span class="var">map</span> 
									, <span class="type">Array</span> <span class="var">coordinates </span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add marker to a map, returned object is from Google Maps.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">

							<dt><span class="var">map</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The map which to inject the marker into
								</div>
							</dd>

							<dt><span class="var">Coordinates</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Array</span> The altitude and longtitude coordinates to place the marker
								</div>
							</dd>

							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object to customize the marker
								</div>

								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">icon</span></dt>
										<dd>Add a custom icon via URL</dd>

										<dt><span class="value">label</span></dt>
										<dd>Default <span class="value">null</span>, Custom label text</dd>
									</dl>
								</div>

							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Object</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Adding a marker</p>
							<code>
var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179]);

	marker.clicked() = function() {
		// Called when clicked
	}

	marker.entered() = function() {
		// Called when input hovers over marker
	}

	marker.exited() = function() {
		// Called when input leaves marker
	}
}



							</code>
						</div>

						<div class="example">
							<p>Adding a customized marker</p>
							<code>
var map = u.qs("div");
var custom_icon = "icon.png";
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	var marker = u.googlemaps.addMarker(this, 
		[55.720716, 12.46179], {"icon":/img/custom_icon.png, "label":"Hello world"}
	);
}
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>for ... in</li>
								<li>switch ... case</li>
								<li>for ... in</li>
								<li>google.maps.Marker (Google Maps API)</li>
								<li>google.maps.LatLng (Google Maps API)</li>
								<li>google.maps.event.addListener (Google Maps API)</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

					</div>

				</div>
			</div>





			<div class="function" id="Util.googlemaps.removeMarker">
				<div class="header">
					<h3>Util.googlemaps.removeMarker</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.removeMarker</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
							Util.googlemaps.removeMarker(
									<span class="type">Node</span> <span class="var">map</span> 
									, <span class="type">Node</span> <span class="var">marker </span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Remove a marker from a map</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">

							<dt><span class="var">map</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The map which to remove the marker from
								</div>
							</dd>

							<dt><span class="var">marker</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The marker to remove
								</div>
							</dd>

							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object to customize the marker
								</div>

								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">animation</span></dt>
										<dd>Default <span class="value">true</span>, wether to use an animation on remove<dd>
									</dl>
								</div>

							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Removing a marker on click</p>
							<code>
var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179]);

	marker.clicked = function() {
		u.googlemaps.removeMarker(this.g_map, this);
	}
}
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>for ... in</li>
								<li>switch ... case</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.randomString</li>
								<li>Util.Timer.setTimer</li>
							</ul>
						</div>

					</div>

				</div>
			</div>


			
			<div class="function" id="Util.googlemaps.infoWindow">
				<div class="header">
					<h3>Util.googlemaps.infoWindow</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.infoWindow</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
							Util.googlemaps.infoWindow(
									<span class="type">Node</span> <span class="var">map</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create infowindow</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">map</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The map which to create infowindow on
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>
var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	u.googlemaps.infoWindow(this);
}
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>google.maps.InfoWindow (Google Maps API)</li>
								<li>google.maps.event.addListener (Google Maps API)</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

					</div>

				</div>
			</div>


			<div class="function" id="Util.googlemaps.showInfoWindow">
				<div class="header">
					<h3>Util.googlemaps.showInfoWindow</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.showInfoWindow</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
							Util.googlemaps.showInfoWindow(
									<span class="type">Node</span> <span class="var">map</span> 
									, <span class="type">Node</span> <span class="var">marker</span> 
									, <span class="type">String</span> <span class="var">content</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Show infowindow above a marker. An infowindow is a box above a marker containing content.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">map</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The map which to show infowindow on
								</div>
							</dd>

							<dt><span class="var">marker</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The marker which to show infowindow above
								</div>
							</dd>

							<dt><span class="var">content</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> The content of the infowindow, you can put HTML in here
								</div>
							</dd>
						</dl>
						
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Show infowindow when marker is clicked</p>
							<code>
var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179]);

	marker.clicked = function() {
		u.googlemaps.showInfoWindow(this.g_map, this, "&lt;h1&gt;Hello world&lt;/h1&gt;&lt;p&gt;I'm alive!&lt;/p&gt;");
	}
}
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

					</div>

				</div>
			</div>


			<div class="function" id="Util.googlemaps.hideInfoWindow">
				<div class="header">
					<h3>Util.googlemaps.hideInfoWindow</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.googlemaps.hideInfoWindow</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
							Util.googlemaps.hideInfoWindow(
									<span class="type">Node</span> <span class="var">map</span>  
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Hide infowindow</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">map</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> The map which to hide infowindow from
								</div>
							</dd>
						</dl>
						
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Hide infowindow when marker is clicked</p>
							<code>
var map = u.qs("div");
u.googlemaps.map(map, [55.700716,12.44179]);

map.loaded = function() {
	var marker = u.googlemaps.addMarker(this, [55.720716, 12.46179]);

	marker.clicked = function() {
		u.googlemaps.hideInfoWindow(this.g_map, this, "Hello world");
	}
}
							</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

					</div>

				</div>
			</div>


		</div>
	</div>




	

	<div class="section includefiles">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-googlemap.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li>none</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd><span class="file">u-string.js</span> + <span class="file">u-timer.js</span> + <span class="file">u-dom.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-string.js</span> + <span class="file">u-timer.js</span> + <span class="file">u-dom.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-string.js</span> + <span class="file">u-timer.js</span> + <span class="file">u-dom.js</span> + <span class="file">u-dom_ie.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd>Not supported</dd>

				<dt>desktop_light</dt>
				<dd>Not supported</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-string.js</span> + <span class="file">u-timer.js</span> + <span class="file">u-dom.js</span></dd>

				<dt>tablet_light</dt>
				<dd>Not supported</dd>

				<dt>tv</dt>
				<dd>Not tested</dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-string.js</span> + <span class="file">u-timer.js</span> + <span class="file">u-dom.js</span></dd>
	
				<dt>mobile</dt>
				<dd>Not supported</dd>
	
				<dt>mobile_light</dt>
				<dd>Not supported</dd>
			</dl>
		</div>
	</div>

</div>
