<?php
$this->headerIncludes(array(
	"/js/tests/i-timer.js",
	"/css/tests/s-timer.css"
));
?>

<div class="scene i:scene">
	<h1>Timer</h1>
	<p>This test will cause the page to be changed after load, as the timers needs to finish to perform test. Wait for it to finish - <span class="remaining">2 seconds</span></p>

	<div class="tests i:timer"></div>

</div>
<div class="comments"></div>
