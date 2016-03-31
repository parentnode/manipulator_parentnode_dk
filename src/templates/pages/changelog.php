<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("It's just improvements");
?>
<div class="scene changelog i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Changelog</h1>

		<dl class="info">
			<dt class="published_at">Published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="image">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">

			<h2>Version 0.9.2</h2>
			<p>
				Version 0.9.2 is work in progress
			</p>
			<ul class="changes">
				<li>
					u.template now allows quotes in JSON input source
				</li>
				<li>
					u.request now supporting POSTing ArrayBuffer objects.
				</li>
				<li>
					Util.Form now implements form.reset() functionality.
				</li>
				<li>
					SVG cache now limited to svg shape (not class, id, title, width, height and node).
				</li>
				<li>
					Google analytics module updated and automatic event tracking options extended.
				</li>
				<li>
					u.bug_console_only is now the default setting.
				</li>
			</ul>


			<h2>Version 0.9.1</h2>
			<p>
				Version 0.9.1 primarily updates the library to the new Detector v3 segmentation model. 
				It also includes many bug-fixes and minor extensions of existing modules.
				Oh, and the template module is out of BETA.
			</p>
			<ul class="changes">
				<li>
					Renamed animation functions setOpacity, setHeight, setWidth, setBgColor 
					and setBgPos to opacity, height, width, bgColor and bgPos.
				</li>
				<li>
					Enhance drag-dropout functionality to avoid dropping smaller 
					draggable elements.
				</li>
				<li>
					Major update to History and Navigation. History can be used to implement custom
					navigation flows and allows mutiple "url-change" listeners, with callback to multiple
					nodes. Navigation now works specifically to implement the Manipulator Ajax based Page model.
				</li>
				<li>
					Improved move detection for click and drag to ensure clicks are not 
					cancelled by shaking hands
				</li>
				<li>
					u.nodeWithin added to help determine if a node is within scope.
				</li>
				<li>
					Automatic vendor detection in u.as and u.ass and all animation functions.
				</li>
				<li>
					Rewritten window resize, scroll, start, move and end event handlers with callback to node
					 - now also support callback as function reference or string.
				</li>
				<li>
					u.template out of BETA. Basic template (JSON to HTML/JSON) parser. 
				</li>
				<li>
					u.e.hover implements mouseover/mouseout events with true mouseout detection 
					(ignoring mouseout on childNodes).
				</li>
				<li>
					Improvements to u.svg. Now supporting id, class and title on svg element. 
					Fixed bug in svg_cache, which
					caused an error when using id for svg_cache.
				</li>
				<li>
					u-form-builder now supporting all standard elements and allow for custom build methods.
				</li>
				<li>
					Added new u-fontsready module (beta), for testing if webfonts are loaded.
				</li>
				<li>
					Added new u-notification module (beta), for central notification control.
				</li>
				<li>
					Enhanced text-scaler to support height based scaling. Also allowed for simplyfied 
					global min/max width/height and unit settings.
				</li>
				<li>
					New transitioned callback model allowing custom callbacks.
				</li>
				<li>
					u.a.to animates svg paths and polygons.
				</li>
				<li>
					New easing module added for custom easings.
				</li>
				<li>
					Global form validation callback + individual input error callback through
					validationPassed and validationFailed.
				</li>
				<li>
					Extended nodeCookie node reference options.
				</li>
				<li>
					Added Util.upperCaseFirst and Util.lowerCaseFirst string functions</li>
				</li>
				<li>
					Updated vendor prefix detection to avoid using prefix when not required and seamless verdor
					prefix support.
				</li>
			</ul>


			<h2>Version 0.9</h2>
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
	</div>
</div>
