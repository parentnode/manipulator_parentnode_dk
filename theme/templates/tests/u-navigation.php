<?php
$this->headerIncludes(array(
	"/js/tests/i-navigation.js",
	"/css/tests/s-navigation.css"
));
?>

<div class="scene i:scene">
	<h1>Navigation</h1>
	<p>
		Clicking links should update url, using Hash as fallback in older browsers. To test, click links and see if 
		browser url and the link in <em>Current location</em> is aligned for the correct callback recipients. There are 4
		recipients, which should be updated according to the following rules:<br /><br />
		<strong>page.cN.navigate:</strong> Should receive callback when the first url fragment changes (content-1/2).<br />
		<strong>page.cN.scene.navigate:</strong> Should receive callback when only the following fragments changes.<br />
		<strong>div.navigate:</strong> Should be updated on every event.<br />
		<strong>div.updated:</strong> Should be updated on every event.<br /><br />
		In addition the <em>initializers</em> should be updated as follows:<br /><br />
		<strong>page.cN:</strong> Should only be initialized when page.cN.navigate receives callback.<br />
		<strong>page.cN.scene:</strong> Should be initialized on every event.
	</p>
	<p>
		Also check if browser navigation "back" and "forward" works, following the same rules.
	</p>

	<div class="tests i:navigation">
		<h2>Links</h2>

		<ul class="links">
			<li><a href="<?= SITE_URL . $this->url ?>?hash=ok#/try/hash"><?= SITE_URL . $this->url ?>?hash=ok#/try/hash</a> <span class="source">(refreshes with hash, should update all)</span></li>
			<li><a href="<?= SITE_URL . $this->url ?>"><?= SITE_URL . $this->url ?></a> <span class="source">(refreshes)</span></li>
			<li><a href="/content-1">/content-1</a></li>
			<li><a href="/content-1/scene">/content-1/scene</a></li>
			<li><a href="/content-1/scene/param">/content-1/scene/param</a></li>
			<li><a href="/content-2">/content-2</a></li>
			<li><a href="/content-2/scene">/content-2/scene</a></li>
			<li><a href="/content-2/scene/param">/content-2/scene/param</a></li>
			<li class="silent:1"><a href="/content-2/scene/param/silent">/content-2/scene/param/silent (silent)</a></li>
		</ul>

		<h2>Current location</h2>
		<p>
			<span class="source">1 - page.cN.navigate:</span> <span class="l1 location"><?= $this->url ?></span><br />
			<span class="source">2 - page.cN.scene.navigate:</span> <span class="l2 location"><?= $this->url ?></span><br />
			<span class="source">3 - div.navigate:</span> <span class="l3 location"><?= SITE_URL . $this->url ?></span><br />
			<span class="source">4 - div.updated:</span> <span class="l4 location"><?= SITE_URL . $this->url ?></span>
		</p>

		<p><span class="location"></span></p>

	</div>

</div>
<div class="comments"></div>
