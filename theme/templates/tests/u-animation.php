<?php
$this->headerIncludes(array(
	"/js/tests/i-animation.js",
	"/css/tests/s-animation.css"
));
?>

<div class="scene i:scene">
	<h1>Animation</h1>

<? if(preg_match("/desktop_light|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<div class="tests callbacks i:callbacks">
		<h2>Callbacks</h2>

	</div>

	<div class="tests basics i:basics">
		<h2>Basics</h2>

	</div>

<? endif;?>

</div>
<div class="comments"></div>
