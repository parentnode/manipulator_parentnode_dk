<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Initializer objects");
?>

<script type="text/javascript">
	Util.Objects["clickme"] = new function() {
		this.init = function(node) {
			Util.clickableElement(node);
			node.clicked = function() {
				Util.toggleClass(this, "c1", "c2");
			}
		}
	}
</script>
<style type="text/css">
	.scene .clickme {margin: 10px 50px; border-radius: 10px; background: black; color: #ffffff; padding: 5px 20px;}
	.scene .clickme.c1 {background: blue; color: #ffffff;}
	.scene .clickme.c2 {background: orange; color: #000000;}
</style>

<div class="scene object i:scene">

	<h1>Initializer Objects</h1>
	<p>
		This page model of Manipulator is designed for node extension using Initializer Objects. Initializers are
		JavaScript objects which are mapped to HTML nodes using specific classnames in the HTML document, to provide seamless
		cross device interface variations without any changes to the backend generated HTML.
	</p>
	<p>
		Initializers are stored in <em>Util.Objects</em>, also avaliable as <em>u.o</em>.
	</p>

	<p>This is what an initializer looks like:</p>
	<code>Util.Objects["initializerExample"] = new function() {
	this.init = function(node) {

		// your code here

	}
}</code>

	<p>An initalizer object is mapped to an HTML node like this:</p>
	<code>&lt;div class=&quot;i:initializerExample&quot;&gt;&lt;/div&gt;</code>

	<p>
		The combination of the above, will result in the <span class="htmltag">div</span> being passed to the
		u.o.initializerExample.init function as <span class="var">node</span>.
	</p>

	<p>
		An initializer can contain any code you want to execute, and are most commonly used to manipulate the 
		<span class="var">node</span> HTML and add event handlers.
	</p>

	<p>
		A full example could look like this:</p>
	</p>

	<code>Util.Objects["clickme"] = new function() {
	this.init = function(node) {

		Util.clickableElement(node);
		node.clicked = function() {
			Util.toggleClass(this, "c1", "c2");
		}

	}
}</code>

	<code>&lt;div class=&quot;i:clickme&quot;&gt;Click me&lt;/div&gt;</code>

	<p>
		In effect this looks like this (with a bit of CSS added):
	</p>

	<div class="clickme i:clickme">Click me</div>


</div>
