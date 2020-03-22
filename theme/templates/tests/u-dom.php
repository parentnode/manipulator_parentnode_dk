<?php
$this->headerIncludes(array(
	"/js/tests/m-dom.js"
));
?>

<div class="scene i:scene">
	<h1>DOM</h1>

	<div class="tests i:dom">
		<div id="qstest" class="type:cv othertype:notcv"><h3><span>querySelector</span> error</h3></div>
		<div class="qsatest"><span>querySelectorAll</span></div>
		<div class="getest"><div class="type:1">getElement</div></div>
		<div class="gestest type:3"><span class="error type:4">getElements</span></div>
		<div class="parentnode"><ul class="u1"><li><ul class="u2"><li><span>parentNode</span></li></ul></li></ul></div>

		<div class="ns">
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
		<div class="ps">
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

		<div class="cn">
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
		<div class="ce">
			<a href="http://index/" class="error">Index</a>
		</div>
	</div>
</div>
<div class="comments">
	<p>u.gcs: Firefox+webkit will return the computed value in px, regardless of how it is specified.</p>
	<p>u.gcs: Firefox+webkit will return bg-color as rgb(), regardless of how it is specified.</p>
</div>
