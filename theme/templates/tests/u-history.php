<?php
$this->headerIncludes(array(
	"/js/tests/m-history.js",
	"/css/tests/s-history.css"
));
?>

<div class="scene i:scene">
	<h1>History</h1>
	<p>
		To test, click test links and check if browser url is updated and the link shown as Current location below is updated
		accordingly. The three first should update to the current url, the last (div.removed) should not change.
		Also check that browser navigation "back" and "forward" works and updates urls correct.
	</p>

	<div class="tests i:history">

		<h2>Test links</h2>
		<ul class="links">
			<li><a href="<?= $this->url ?>"><?= $this->url ?></a></li>
			<li><a href="/test1">/test1</a></li>
			<li><a href="/test2">/test2</a></li>
			<li><a href="/test3/test4">/test3/test4</a></li>
			<li><a href="/test5/test6">/test5/test6</a></li>
		</ul>

		<h2>Current location</h2>
		<p>
			<span class="source">1 - page.updated:</span> <span class="l1 location"><?= SITE_URL . $this->url ?></span><br />
			<span class="source">2 - div.updated:</span> <span class="l2 location"><?= SITE_URL . $this->url ?></span><br />
			<span class="source">3 - div.navigated:</span> <span class="l3 location"><?= SITE_URL . $this->url ?></span><br />
			<span class="source">4 - div.removed:</span> <span class="l4 location">(should not update)</span>
		</p>

	</div>

</div>

<div class="comments"></div>
