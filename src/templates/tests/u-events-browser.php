<?php
$this->headerIncludes(array(
	"/js/tests/i-events-browser.js"
));
?>

<div class="scene i:scene">
	<h1>Events, Browser</h1>

	<p>
		Testing browser Window events.
	</p>

	<div class="tests i:eventsBrowser">

		<div class="init error">u.init: waiting</div>

	</div>

</div>
<div class="comments">
	<p>IE6: Windows events does not work in IE6 - only u.e.addDOMReadyEvent test works in this browser</p>
</div>
