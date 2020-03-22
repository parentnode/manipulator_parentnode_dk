<?php
$this->headerIncludes(array(
	"/js/tests/m-overlay.js",
	"/css/tests/s-overlay.css"
));
?>

<div class="scene i:scene">
	<h1>Overlay</h1>

<? if(preg_match("/tv|mobile_light|mobile|tablet_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>
	
	<div class="legend">
		<p class="beige">Overlay header is beige</p>
		<p class="red">Overlay close is red</p>
		<p class="green">Overlay content div is green</p>
		<p class="blue">Overlay content representation is blue</p>
	</div>


	<div class="i:overlay">
		<h2>Click buttons to open overlay</h2>

		<ul class="actions">
			<li class="default"><input type="button" value="Default (no params)" class="button"></li>
			<li class="small"><input type="button" value="Small (300px)" class="button"></li>
			<li class="large"><input type="button" value="Large (600px)" class="button"></li>
			<li class="nodrag"><input type="button" value="No drag" class="button"></li>
			<li class="overflow"><input type="button" value="Content overflow" class="button"></li>
			<li class="overflow_autoheight"><input type="button" value="Content overflow with content_scroll" class="button"></li>
		</ul>
	</div>

<? endif;?>
</div>

<div class="comments"></div>

