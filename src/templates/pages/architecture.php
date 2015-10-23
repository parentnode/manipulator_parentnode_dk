<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("How it is put together ...");
?>
<div class="scene architecture i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Architecture of Manipulator</h1>

		<dl class="info">
			<dt class="published_at">Published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="image">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">
			<p>
				Needless to say, native JavaScript provides the best performance, but
				handling different browser implementations is very tiresome and surely justifies encapsulating 
				functionality in a library.
			</p>
			<p>
				Manipulator attempts to be as close to Native JavaScript as possible, to facilitate your own mix of
				library and native JavaScript. About 60% of the functions in the library are only included to fix crossbrowser
				issues in a simple way, the rest are encapsulation complex tasks in simpler wrapper function for ease of use - 
				but with careful consideration. It is a design principle of Manipulator to thoroughly consider 
				performance cost/benefits when adding new functions. Encapsulation will by nature limit flexibility and impact
				performance, as the code will have to consider more options than the one you need to perform at any given time.
			</p>
			<p>
				Though one of the primary goals of Manipulator is to maintain high performance, in practice you can 
				easily include any function in your own Manipulator bundle if you so desire and popular demand can dictate
				inclusion of even performance problematic functions as well.
			</p>
			<p>
				Compromise is daily bread for the idealist, given the world we live in.
			</p>

			<h2>Library basics</h2>

			<p>
				The library uses the <em>u</em> and <em>Util</em> namespaces (<em>u</em> is short for <em>Util</em>). 
				In some cases the function names also exist in a shorthand version, just to make it faster to write
				common functions.
			</p>

			<p>In other words, ALL Manipulator functions starts with <em>u</em> or <em>Util</em>. For example:</p>
			<code>u.ac(scene, "example");</code>
			<p>is the same as</p>
			<code>Util.addClass(scene, "example");</code>

			<p>
				A common methodology is having the node to perform the given function on be the first parameter. Obviously it
				would be closer to native JavaScript to use prototypes to extend the DOM nodes, but the cost/benefit analysis
				quickly rules out this method, as it simple slows down DOM manipulation too much.
			</p>

			<h3>The extended namespaces</h3>
			<p>
				When the functionality scope becomes sufficiently complex or when it makes sense to avoid
				nameclashes, extended namespaces can be introduced. Extended namespaces are commonly devided into 
				specific groups for load optimization - that way you can just include what you need in any given
				project.
			</p>


			<h4>Util.Animation = u.a</h4>
			<p>Animations and functions related to performing animations.</p>
			<ul>
				<li>u-animation - for plain CSS3 animations and transitions</li>
				<li>u-animation-to - for advanced animations and custom transitions</li>
			</ul>


			<h4>Util.Events = u.e</h4>
			<p>
				Events base and all event related functions.
			</p>
			<ul>
				<li>u-events.js - for plain event handlers</li>
				<li>u-events-movements.js - for drag, swipe and overlap detection</li>
				<li>u-events-browser.js - for browser events like scroll, resize and load events</li>
			</ul>


			<h4>Util.Form = u.f</h4>
			<p>
				Form initialization, extension and building.
			</p>
			<ul>
				<li>u-form.js - complex form initialization</li>
				<li>u-form-builder.js - building and extending forms</li>
			</ul>


			<h4>Util.History = u.h</h4>
			<p>Url/Hash change event handler for Ajax based navigation and history implementation.</p>


			<h4>Util.Keyboard = u.k</h4>
			<p>Keyboard shortcut handler</p>


			<h4>Util.Timer = u.t</h4>
			<p>Timeout and interval handler</p>
		</div>
	</div>
</div>