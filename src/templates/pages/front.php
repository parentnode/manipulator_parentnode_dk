<?
$fs = new FileSystem();
$modules = $fs->files(LOCAL_PATH."/www/bundles/src");

?>
<div class="scene front i:front">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">If manipulation is required ...</h1>

		<dl class="info">
			<dt class="published_at">Published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="image">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">
			<h2>Build a Manipulator bundle now</h2>
			<p>Module introduction
			Load module list from docs frontpage with js instead of php
			Use file information from docs page to determine include requirements
			
			</p>
			<ul class="modules">



			</ul>

			<h2>New to Manipulator?</h2>
			<p>
				Manipulator is an extremely flexible, performance optimized 
				<a href="http://en.wikipedia.org/wiki/List_of_JavaScript_libraries" target="_blank">JavaScript library and
				framework</a> with a slightly neurotic focus on details.
				It is designed to mimic regular JavaScript, utilize and extend the DOM objects instead of inventing new
				objects. Work WITH the DOM and take back control of your interface. Keep it close to native JavaScript
				to boost performance.
			</p>
			<p>
				The Manipulator library provides an extensive set of name spaced cross-device shorthand functions, written 
				to utilize the the best performance option available - without inventing new concepts or abiding
				old implementation flaws.
			</p>
			<p>
				Have you ever tried building clean JavaScript/CSS3 for just WebKit 533+? This is it - with 
				<a href="/pages/browser-support">IE6</a> support.
			</p>
			<ul class="actions">
				<li><a href="/getting-started" class="button primary">Getting started</a></li>
			</ul>


			<h2>The goal behind designing the Manipulator library</h2>
			<p>
				The Manipulator library has be developed with the following priorities:
			</p>
			<ul class="goal">
				<li>Using the newest standards</li>
				<li>Support for <a href="/pages/browser-support">all devices</a></li>
				<li><a href="/pages/performance">Performance optimized</a> in all possible ways</li>
				<li>Leveraging standard JavaScript knowledge<br />(not changing the way you write JavaScript)</li>
				<li>Providing a solution to common cross-device/cross-browser problems</li>
				<li>Simplifying backend implementation and development</li>
				<li>Completely modular with no unnecessary overhead</li>
				<li>Fast, compatible and reliable</li>
			</ul>

			<h2>Want to contribute?</h2>
			<p>
				We always need help. Send an email to 
				<a href="mailto:contribute@parentnode.dk">contribute@parentnode.dk</a> to join the team.
			</p>

		</div>
	</div>

	<div class="usedby">
		<h2>Selected clients</h2>
		<ul>
			<li class="cphpix" title="CPH PIX">CPH PIX</li>
			<li class="metro" title="Copenhagen Metro">Copenhagen Metro</li>
			<li class="soulland" title="Soulland">Soulland</li>
			<li class="tuborg" title="Tuborg">Tuborg</li>
			<li class="distortion" title="Distortion">Distortion</li>
		</ul>
	</div>
</div>