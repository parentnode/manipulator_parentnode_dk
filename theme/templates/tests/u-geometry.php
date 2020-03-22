<?php
$this->headerIncludes(array(
	"/js/tests/m-geometry.js",
	"/css/tests/s-geometry.css"
));
?>

<div class="scene i:scene">
	<h1>Geometry</h1>

	<div class="tests i:geometry"></div>

</div>
<div class="comments">
	<p>
		Auto testing of Util.browserWidth/Height, Util.htmlWidth/Height and Util.pageScrollX/Y is simulated, as
		these values will vary and can only be verified by using these same functions - and thus a test will not reveal serious errors.
	</p>	
</div>
