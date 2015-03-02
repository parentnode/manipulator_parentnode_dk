<?php
$this->bodyClass("changelog");
$this->pageTitle("It's just improvements");
?>
<div class="scene changelog i:scene">

	<h1>Changelog</h1>

	<h2>Version 9.5</h2>
	<p>
		
	</p>
	<ul class="changes">
		<li>
			Improvements to u.svg. Now supporting id, class and title on svg element. Fixed bug in svg_cache, which
			caused an error when using id for svg_cache.
		</li>
		<li>
			u-form-builder now supporting text element (textarea).
		</li>
	</ul>


	<h2>Version 9.0</h2>
	<p>
		Version 0.9 sees some major modules coming out of BETA strives to align both parameter and
		syntax methodology. Most functions now expects callback parameters to be String with name of function
		(on node) instead of full function reference.
	</p>
	<p>
		The most important updates are:
	</p>

	<ul class="changes">
		<li>
			Util.parentNode, Util.childnodes, Util.previousSibling, Util.nextSibling now with JSON options 
			parameter for node exclusion/inclusion
		</li>

		<li>Util.Form extended with form builder for complete JavaScript form building.</li>

		<li>Sortable, ScrollTo, Textscaler, Audio, Video, Keyboard, SVG functions are now out of BETA.</li>

		<li>
			Util.Animation.transition now automatically removes transition and deletes node.transitioned after
			transition is done.
		</li>

		<li>
			Simplified universal bundle added. Now Manipulator can be included without any prior browser detection.
			The universal bundle excludes a few advanced featureddoes include a significant load overhead for the individual browser and is
			only recommended when no browser detections can be performed before including JS/CSS.
		</li>
	</ul>

</div>
