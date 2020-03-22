<?php
$this->headerIncludes(array(
	"/js/tests/m-textscaler.js",
	"/css/tests/s-textscaler.css"
));
?>

<div class="scene i:scene">
	<h1>Textscaler</h1>

<? if(preg_match("/desktop_light|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<p>
		Text below scales when you resize the browser window - in both height and width.
	</p>

	<div class="tests i:textscaler">
		<h2>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
			eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</h2>
		<h3>Ut enim ad minim veniam</h3>
		<p>
			Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
			Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

<? endif;?>

</div>
<div class="comments"></div>
