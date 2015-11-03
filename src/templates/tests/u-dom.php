<?php
$this->headerIncludes(array(
	"/js/tests/i-dom.js"
));
?>

<div class="scene i:scene">
	<h1>DOM</h1>

	<div class="tests i:dom">
		<div id="qstest" class="correct type:cv othertype:notcv"><h3 class="error"><span>querySelector</span> error</h3></div>
		<div class="qsatest correct"><span class="error">querySelectorAll</span></div>
		<div class="error"><div class="type:1">getElement</div></div>
		<div class="type:2 correct"><span class="error">getElements</span></div>
		<div class="parentnode correct"><ul class="u1"><li><ul class="u2"><li><span class="error">parentNode</span></li></ul></li></ul></div>

		<div class="ns correct">
			<ul>
				<li class="start"><span class="error">nextSibling</span></li>
				<li class="nons"></li>
				<li class="jens"></li>
				<li class="end"></li>
			</ul>
			<div class="c1"></div>
			<span class="c1"></span>
			<span class="c2"></span>
			<div class="c2"></div>
		</div>
		<div class="ps correct">
			<ul>
				<li class="end"><span class="error">previousSibling</span></li>
				<li class="jeps"></li>
				<li class="nops"></li>
				<li class="start"></li>
			</ul>
			<div class="c1"></div>
			<span class="c1"></span>
			<span class="c2"></span>
			<div class="c2"></div>
		</div>

		<div class="cn correct">
			<div class="error">childNodes</div>
			<a class="error"><span>childNodes</span></a>
			<span class="error">childNodes</span>
			<div class="c1"></div>
			<span class="c1"></span>
			<span class="c2"></span>
			<div class="c2"></div>
		</div>
		<div class="textcontent">
			<!-- COMMENT -->
			<span class="error">node.textContent</span>
		</div>
		<div class="ce correct">
			<a href="http://index/" class="error">Index</a>
		</div>
	</div>
</div>
<div class="comments">
	<p>u.gcs: Firefox+webkit will return the computed value in px, regardless of how it is specified.</p>
	<p>u.gcs: Firefox+webkit will return bg-color as rgb(), regardless of how it is specified.</p>
</div>
