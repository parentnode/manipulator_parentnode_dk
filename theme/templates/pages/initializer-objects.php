<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Initializer objects");
?>

<style type="text/css" scoped="scoped">
	.scene .clickme {margin: 10px 50px; border-radius: 10px; background: black; color: #ffffff; padding: 5px 20px;}
	.scene .clickme.c1 {background: blue; color: #ffffff;}
	.scene .clickme.c2 {background: orange; color: #000000;}
</style>

<script type="text/javascript">
	Util.Modules["clickme"] = new function() {
		this.init = function(node) {
			Util.clickableElement(node);
			node.clicked = function() {
				Util.toggleClass(this, "c1", "c2");
			}
		}
	}
</script>

<div class="scene object i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Initializer Objects</h1>

		<dl class="info">
			<dt class="published_at">Published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="image">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">

			<p>
				The Manipulator framework is designed for node extension using Initializer Objects. Initializers are
				JavaScript objects which are mapped to HTML nodes using specific classnames in the HTML document, to provide seamless
				cross device UI variations without any changes to the backend generated HTML or creating cross device dependencies.
			</p>
			<p>
				Initializers are stored in <em>Util.Modules</em>, also avaliable as <em>u.o</em>.
			</p>

			<p>This is what an initializer looks like:</p>
			<code>Util.Modules["initializerExample"] = new function() {
	this.init = function(node) {

		// your code here

	}
}</code>

			<p>An initalizer object is mapped to an HTML node like this:</p>
			<code>&lt;div class=&quot;i:initializerExample&quot;&gt;&lt;/div&gt;</code>

			<p>
				The combination of the above, will result in the <span class="htmltag">div</span> being passed to the
				u.m.initializerExample.init function as <span class="var">node</span>.
			</p>

			<p>
				An initializer can contain any code you want to execute, and are most commonly used to manipulate the 
				<span class="var">node</span> HTML and add event handlers.
			</p>

			<p>
				A full example could look like this:
			</p>

			<code>Util.Modules["clickme"] = new function() {
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

			<h2>Scene initializers</h2>

			<p>WRITE ABOUT SCENE INITIALIZERS HERE</p>
		</div>
	</div>
</div>
