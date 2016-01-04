<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Older versions");
?>
<div class="scene older i:scene">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Older versions</h1>

		<dl class="info">
			<dt class="published_at">Date published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="author">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">

			<p>
				Unless you have a very specific reason to use an older bundle you should get the <a href="/">latest version</a>.
			</p>

			<h2>Github</h2>
			<p><a href="http://github.com/parentnode/manipulator" target="_blank">Manipulator is public on GitHub</a>.</p>


			<h2>About the bundles</h2>
			<p>
				Until version 0.9 Manipulator var distributes as predefined bundles, optimized for the Detector v2 segmentation. 
				Each download package contains three bundles, customized for different needs - light, medium and full.
			</p>
			<p>
				The Manipulator library is based on segments. This means the library contains variations depending on which segment(s) 
				you are building for. In each bundle you will find 9 include files. For more information about <a href="http://detector.parentnode.dk/segments">segments</a>
				visit <a href="http://detector.parentnode.dk" target="_blank">http://detector.parentnode.dk</a> and <a href="http://modulator.parentnode.dk" target="_blank">http://modulator.parentnode.dk</a>.
			</p>
			<p>
				The bundles are NOT minified. Minification saves some bytes, but renders code unreadable.
				Using fewer includes, optimizing your HTML or simply writing better JavaScript are much more efficient ways 
				of enhancing performance. If you really want it - use your own tool to minify.
			</p>


			<h2>Version 0.9</h2>
			<p>Released on 21st of February, 2015.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_9.zip" class="button primary">Download 0.9 ZIP</a></li>
			</ul>


			<h2>Version 0.8</h2>
			<p>Released on 5th of June, 2014.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_8.zip" class="button primary">Download 0.8 ZIP</a></li>
			</ul>


			<h2>Version 0.7.5</h2>
			<p>Released on 13th of May, 2014, this is the first public release of Manipulator.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_7_5.zip" class="button primary">Download 0.7.5 ZIP</a></li>
			</ul>


			<h2>Version 0.7</h2>
			<p>Release on 12th of April, 2013 as JES v7, this is the final JES release before begining transition to Manipulator.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_7.zip" class="button primary">Download 0.7 ZIP</a></li>
			</ul>


			<h2>Version 0.6</h2>
			<p>Release on 6th of January 2013 as JES v6.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_6.zip" class="button primary">Download 0.6 ZIP</a></li>
			</ul>


			<h2>Version 0.5</h2>
			<p>Released on 30th of August 2012 as JES v5.</p>
			<ul class="actions">
				<li><a href="/bundles/archive/v0_5.zip" class="button primary">Download 0.5 ZIP</a></li>
			</ul>
		</div>
	</div>
</div>
