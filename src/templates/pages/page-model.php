<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("Be a good example ...");
?>
<div class="scene pagemodel i:scene">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">The Page Model</h1>

		<dl class="info">
			<dt class="published_at">Date published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="author">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">

			<p>
				Introduction to Manipulator Page Model is to be added here. This is part of the 0.9.5 milestone.
			</p>


			<h2>Draft</h2>

			<p>
				The Manipulator framework is based on a Page model, which comes a complete global page and 
				flow controller model with automated UI extension, AJAX based navigation flows as well as resize, scroll and 
				orientationchange events. It is designed to support complex AJAX based websites with transitions at every 
				level as well as simple hardloaded websites without any fancy details.
			</p>
			<p>
				The Page model is mapped to an outer parent Node, which then works a the global rendering, loading and 
				transition controller. It gives you a central control structure, that allows you to coordinate any activity
				on the page in detail. The <a href="/pages/initializer-objects">Initializer objects</a> can be extensions the Page
				Model, to create a Page/Scene hierachy.  
		
				an library 
			</p>
			<p>
				It extends the DOM objects individually to become controllers of the UI they represent. 
				It does NOT extend generally ... - to optimize performance
			</p>
			<p>
				The Manipulator Page Model is designed around the Modulator markup model, but it can be used with any kind of HTML
				layout.
			</p>
			<h2>
				???
			</h2>
			<p>
			</p>
		</div>
	</div>
</div>
