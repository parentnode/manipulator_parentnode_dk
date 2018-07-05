<?php
$this->headerIncludes(array(
	"/js/tests/i-string.js"
));
?>

<div class="scene i:scene">
	<h1>String</h1>

	<div class="tests i:string"></div>

</div>
<div class="comments">
	<p>In the cutString function we should consider the possibility of defining your own ending to the cut string.</p>
	<p>
		Also if the required length is less than 3 the string returned will be "...". Makes it impossible to cut a 
		string to just one char. Something to consider.
	</p>
</div>
