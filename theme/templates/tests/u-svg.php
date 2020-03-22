<?php
$this->headerIncludes(array(
	"/js/tests/m-svg.js"
));
?>

<div class="scene i:scene">
	<h1>SVG creation</h1>

<? if(preg_match("/desktop_light|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<p>Below you should see the SVG drawing and a reference image</p>
	<div class="tests i:svg"></div>

<? endif;?>

</div>
<div class="comments"></div>
