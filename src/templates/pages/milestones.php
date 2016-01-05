<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Where we are heading ...");
?>
<div class="scene milestones i:scene">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Milestones</h1>

		<dl class="info">
			<dt class="published_at">Date published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="author">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">
			<p>
				The core functionality of Manipulator is solid and already implemented across
				a multitude of websites. The further development of Manipulator is focused on syntax
				alignment, performance optimization, extending the advanced feature set and minor
				bug-fixing.
			</p>
			<p>
				Below you'll find the current roadmap for reaching version 1.
			</p>


			<h2>Version 0.9.5</h2>

			<h3>General</h3>
			<ul class="todo">
				<li>Test entire library using strict warnings to identify any undeclared variables</li>
				<li>Align callback syntax and methodology across all functions.</li>
				<li>Add general "getting started" examples</li>
				<li>Fix: Flash in IE11 (not playing)</li>
				<li>Fix: Video pause doesn't work in Simple video test for IE11</li>
				<li>Add page model introduction and documentation</li>
				<li>Documentation for: u.lcfirst and u.ucfirst</li>
				<li>Documentation for window resize, scroll, start, move and end event</li>
			</ul>

			<h4>Callback alignment status:</h4>
			<p>
				The preferred method is "function name string"-parameters as primary method, with an optional
				function reference as an additional option. Update remaining functions using function references 
				or hardcoded callbacks:
			</p>
			<ul>
				<li>request - function name string</li>
				<li>slideshow - function name string</li>
				<li>sortable - function name string</li>
				<li>movements - function name string</li>
				<li>gridmaster - function name string</li>
				<li>history - function name string</li>
				<li>scrollTo - function name string</li>
				<li>preloader - function name string</li>
				<li>timer - function reference or function name string (better to support both methods for timer)</li>
			</ul>
			<ul>
				<li>navigation - hardcoded function</li>
				<li>events - hardcoded function</li>
				<li>form - hardcoded function</li>
				<li>video - hardcoded function</li>
				<li>audio - hardcoded function</li>
			</ul>
			<ul>
				<li>sequence - function reference</li>
			</ul>


			<h3>Animation</h3>
			<ul class="todo">
				<li>Dom update on u.a.transition?</li>
				<li>Implement custom transition methods (Manipulator:easeIn4, Manipulator:bounce, etc)</li>
				<li>Replace timerbased fallback with animation frame</li>
			</ul>

			<h3>Cookie</h3>
			<ul class="todo">
				<li>Strip nodeCookie-identification for any init-values (or anything with : in it) - Looked at it, but failed to remember why this would be a good idea?</li>
			</ul>

			<h3>Events</h3>
			<ul class="todo">
				<li>Doubleclick for IE8 (it does not allow for two mousedown events, probably reserved for built-in dblclick)</li>
			</ul>

			<h3>Events - movements</h3>
			<ul class="todo">
				<li>Consider enabling dropout as default for mouse input</li>
			</ul>

			<h3>Form</h3>
			<ul class="todo">
				<li>Global form error callback + individual input error callback - Included in 0.9.1</li>
				<li>Dropdown (autocomplete input, with select features)</li>
				<li>Designed checkbox (add interaction classes for easy visualisation)</li>
				<li>Designed radiobutton (add interaction classes for easy visualisation)</li>
				<li>Designed datepicker</li>
				<li>HTML Editor - test update/change callbacks</li>
			</ul>

			<h3>History</h3>
			<ul class="todo">
				<li>Enable mutiple listeners (by using real eventlisteners)</li>
				<li>Shift u.navigation -> node.navigate to u.h.history (seems like it belongs there)</li>
			</ul>

			<h3>Navigation</h3>
			<ul class="todo">
				<li>Hardcoded callbacks</li>
				<li>Shift node.navigate to u.h.history (seems like it belongs there)</li>
			</ul>

			<h3>Preloader</h3>
			<ul class="todo">
				<li>Max-processes parameter</li>
				<li>Return individual queues instead of global loader queue? Pros/cons evaluation.</li>
				<li>Implement progress callbacks</li>
			</ul>

			<h3>Request</h3>
			<ul class="todo">
				<li>Test: responseError callback is (perhaps) never invoked because response object is caught by script-request evaluation</li>
				<li>Make it possible to set responseError callback name</li>
				<li>Test: new onreadystatechange event handling in older IEs - DONE</li>
			</ul>

			<h3>ScrollTo</h3>
			<ul class="todo">
				<li>Investigate why IEMobile does _not_ scroll the the value passed in window.scrollTo (to avoid using a IE hack in the scrollTo function)</li>
			</ul>

			<h3>Sortable</h3>
			<ul class="todo">
				<li>Add callback tests</li>
				<li>Update nesting drag'n'drop detection</li>
			</ul>

			<h3>Template</h3>
			<ul class="todo">
				<li>Add Object templating as implementet in the Axpoint project</li>
			</ul>




			<h2>Version 1.0</h2>

			<h3>Audio</h3>
			<ul class="todo">
				<li>desktop_light player out of BETA</li>
			</ul>

			<h3>Detector</h3>
			<ul class="todo">
				<li>Simplified browser segmented detection, deduced from Detector API, implemented with Regular Expectations.</li>
			</ul>

			<h3>Layover</h3>
			<ul class="todo">
				<li>Should remove scrollbar and inject layover</li>
				<li>Layover should remember scroll-position and disable all scrolling while page is in layover state</li>
				<li>Layover should contain self-close function</li>
				<li>Optional click outside overlay to close</li>
				<li>Adapt early u-fullscreen features</li>
			</ul>

			<h3>Gridmaster</h3>
			<ul class="todo">
				<li>Finalize, add tests and documentation</li>
			</ul>

			<h3>Scroll</h3>
			<ul class="todo">
				<li>Complete native scroll override with scrolling transition</li>
				<li>Custom scrollbar with drag'n'drop</li>
				<li>Finalize, add tests and documentation</li>
			</ul>

			<h3>Sequence</h3>
			<ul class="todo">
				<li>Switch timer to Animation frame</li>
				<li>Finalize, add tests and documentation</li>
			</ul>

			<h3>Slideshow</h3>
			<ul class="todo">
				<li>Extend callback options</li>
				<li>Implement additional layout options</li>
				<li>Finalize, add tests and documentation</li>
			</ul>

			<h3>Support</h3>
			<ul class="todo">
				<li>Provide JavaScript feature detection</li>
				<li>Feature support test functions</li>
			</ul>

			<h3>Video</h3>
			<ul class="todo">
				<li>desktop_light player out of BETA</li>
			</ul>


			<h2>For consideration</h2>
			<p>
				Most of Manipulator has been created on a need-to basis. Whenever something is needed in a project,
				we build the first version for that project. If it turns out to be a reoccuring need, it might end up
				as an official function.
			</p>
			<p>
				The following ideas have shown up along the way and are listed here to preserved initial thoughts for 
				further refinement.
			</p>

			<ul class="todo">
				<li>Sortby - simple function to sort rows/columns in structure (table/div+span/li etc)</li>
				<li>Autocomplete - simple function making server request and storing data for quick match return</li>
				<li>Notification object - global notification handler (prototype implemented in Janitor Admin interface)</li>
				<li>Modal window?</li>
				<li>Scrollspy - primarily a matter of defining a likable syntax for ease of mapping functions to scroll positions</li>
				<li>Tooltips - syntax approach of mapping extended information to nodes, preferably with some SEO considerations.</li>
				<li>Alerts and warnings - advanced visual feedback for better usabillity</li>
			</ul>
		</div>
	</div>
</div>
