<?php
$this->headerIncludes(array(
	"/js/tests/i-history.js"
));
?>

<div class="scene i:scene">
	<h1>History</h1>
	<p>
		To test, click test links and check if 
		browser url and the link in Current location is aligned and that browser navigation "back" and "forward" works.
	</p>

	<div class="tests i:history">

		<h2>Test links</h2>
		<ul class="links">
			<li><a href="<?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>"><?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?></a></li>
			<li><a href="/test1">/test1</a></li>
			<li><a href="/test2">/test2</a></li>
		</ul>

		<h2>Current location</h2>
		<p><span class="location"><?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?></span></p>

	</div>

</div>

<div class="comments"></div>
