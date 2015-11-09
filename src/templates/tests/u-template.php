<?php
$this->headerIncludes(array(
	"/js/tests/i-template.js",
	"/css/tests/s-template.css"	
));
?>

<div class="scene i:scene">
	<h1>Template</h1>

	<div class="tests i:template"></div>

</div>
<div class="comments">
	<p>
		Using innerHTML on table structures in <=IE9 doesn't work, because table.innerHTML is read-only. In other words: 
		TR's cannot be used as real DOM nodes, they must be passed as strings.
	</p>
</div>
