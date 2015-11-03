<?php
$this->headerIncludes(array(
	"/js/tests/i-navigation.js"
));
?>

<div class="scene i:scene">
	<h1>Navigation</h1>
	<p>
		Clicking links should update url, using Hash as fallback in older browsers. To test, click links and see if 
		browser url and the link in Current location is aligned and that browser navigation "back" and "forward" works.
	</p>

	<div class="tests i:navigation">
		<h2>Links</h2>

		<ul class="links">
			<li><a href="<?= SITE_URL . $this->url ?>"><?= SITE_URL . $this->url ?></a> (refreshes)</li>
			<li><a href="/content-1">/content-1</a></li>
			<li><a href="/content-1/scene">/content-1/scene</a></li>
			<li><a href="/content-1/scene/param">/content-1/scene/param</a></li>
			<li><a href="/content-2">/content-2</a></li>
			<li><a href="/content-2/scene">/content-2/scene</a></li>
			<li><a href="/content-2/scene/param">/content-2/scene/param</a></li>
		</ul>

		<h2>Current location</h2>
		<p><span class="location"></span></p>

	</div>

</div>
<div class="comments"></div>
