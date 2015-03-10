<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Browser support");
?>
<div class="scene browsersupport i:scene">

	<h1>Browser support</h1>
	<p>
		The modular/segmented architecture of Manipulator allows it to support a wider range of browsers without
		any performance loss. This is because only the code required for your browser is included - only the 
		old/dysfunctional browsers suffer load/perfomance overhead.
	</p>

	<p>Manipulator supports the following browsers and more:</p>
	<ul>
		<li>Chrome 1+</li>
		<li>Safari 1+</li>
		<li>Firefox 1+</li>
		<li>Firefox Mobile 1+</li>
		<li>Mobile WebKit (iPad 1+, iPhone 1+, Android 1+, Blackberry 7+, Symbian 9+)</li>
		<li>Internet Explorer 6+</li>
		<li>Webkit 413+</li>
		<li>Mobile Internet Explorer 7+</li>
		<li>Opera 8+</li>
		<li>Netscape 7+</li>


		<!--li>NetAccess 1+</li-->
	</ul>

	<h2>Disclaimer</h2>
	<p>
		If you are familiar with browser development, you'll know and understand why <em>support</em> doesn't
		mean you should attempt to replicate any visual effect in all the listed browsers.
	</p>
	<p>
		Older browsers will typically perform badly on heavy calculations or dom-query intensive operations - 
		so though Manipulator actually allows you to implement advanced animations in IE7, you should consider 
		whether it makes sense or if a simpler version is a better solution for the older browsers.
	</p>
	<p>
		Smaller devices typically requires custom interfaces to work and perform well and simply scaling
		down your desktop animation is not in the interest of the end user with an year-old smartphone.
	</p>

	<p>
		In other words, even a good library can be spoiled, when used without consideration.
	</p>

</div>