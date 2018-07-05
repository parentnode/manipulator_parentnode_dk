<?php
$this->headerIncludes(array(
	"/js/tests/i-keyboard.js"
));
?>

<div class="scene i:scene">
	<h1>Keyboard shortcuts</h1>
	<p>Test all shortcuts (only for devices with fixed keyboards)</p>

	<div class="tests i:keyboard"></div>

</div>
<div class="comments">
	<p>
		IE6: keyboard shortcuts doesn't work (possibly due to window events of IE6 - see events-browser)
	<p>
		Should not work on hidden nodes
	</p>
	<p>
		metakey false should specifically exclude metakey combinations
	</p>
</div>
