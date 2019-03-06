<?php
$this->headerIncludes(array(
	"/js/manipulator/src/beta-u-googlemaps.js",

	"/js/tests/i-googlemaps.js",
	"/css/tests/s-googlemaps.css"
));
?>

<div class="scene i:scene">
	<h1>Google Maps</h1>

	<h2>Default map</h2>
	<p>Map has been initialized without options and default marker.</p>
	<p>Test default map for default options:</p>
	<ul>
		<li>zoom:10</li>
		<li>scrollwheel:true</li>
		<li>streetview:false</li>
		<li>styles:unset (default google maps)</li>
		<li>disableUI:false</li>
	</ul>
	<div class="map i:googlemaps"></div>

	<h2>Customized map</h2>
	<p>Map has been with initialized options and custom removable marker (click). <br>
		The textbox above the marker is an infowindow, which should hide on marker.mouseover and reappear on marker.mouseout.
	</p>
	<p>Below is a list of options all have been set with an options object:</p>
	<ul>
		<li>zoom:10</li>
		<li>scrollwheel:false</li>
		<li>streetview:true</li>
		<li>styles:themed (manipulator inpsired)</li>
		<li>disableUI:true</li>
	</ul>
	<div class="map i:googlemapsAdvanced"></div>

</div>
<div class="comments"></div>
