<?php
$this->headerIncludes(array(
	"/js/tests/m-googlemaps.js",
	"/css/tests/s-googlemaps.css"
));
?>

<div class="scene i:scene">
	<h1>Google Maps</h1>

<? if(preg_match("/desktop_ie9|desktop_light|tv|mobile_light|mobile|tablet_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

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
	<p>
		Map has been with initialized options and custom removable marker (marker.clicked to remove). <br>
		marker.entered shows an infowindow and hides on marker.exited <br>
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

<? endif;?>

</div>
<div class="comments"></div>
