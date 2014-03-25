<? $page_title = "Download bundles" ?>
<? $body_class = "download" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene">

	<h1>Downloads</h1>

	<div class="c">
		<h2>Github</h2>
		<p><a href="http://github.com/hvadhedderde/jes">Manipulator is public on GitHub</a>.</p>
	</div>

	<div class="c">
		<h2>Bundles</h2>
		<div class="c200">
			<p>Precompiled bundles of the Manipulator JavaScript library.</p>

			<h3>About the bundles</h3>
			<p>
				The Manipulator library is based on segments. This means the library contains variations depending on which segment(s) 
				you are building for. In each bundle you will find 9 include files. See <a href="http://whattheframework.org">WhatTheFramework.org</a>
				for details on how <a href="http://whattheframework.org/segments">Segments</a> work.
			</p>
			<p>
				The bundles are NOT minified. Minification saves some bytes, but renders code unreadable.
				Using fewer includes, optimizing your HTML or simply writing better JavaScript are much more efficient ways 
				of enhancing performance. If you really want it - use your own tool to minify.
			</p>
			<p>
				Without further compression the full Manipulator library for a desktop computer is 79Kb.
				If you are using Webserver compression on JavaScript servings, the full Manipulator footprint for a desktop computer is reduced
				to about 25kb.
			</p>
		</div>

		<div class="c200">

			<div class="promotion">
				<h3>Light bundle</h3>
				<p>For the simple site. Only the most basic tools. Includes 
					<?php
						// list of includes files for each segment
						$modules = array();
						$js_include = "bundles/light/lib/seg_desktop_include.js";
						if(file_exists($js_include)) {

							$includes = file($js_include);
							foreach($includes as $index => $include) {
								if(strpos($include, "//") !== 0 && preg_match("/src=\"([a-zA-Z0-9\.\/_\:\-\=\?]+)\"/i", $include, $include_matches)) {
									$docs_module = preg_replace("/\.js/", "", basename($include_matches[1]));
									$docs_file = 'documentation/'.$docs_module;
//									print $docs_file . ":" . file_exists($docs_file.".php");
									if(file_exists($docs_file.".php")) {
										$modules[] = '<a href="/'.$docs_file.'">' . ucwords(preg_replace("/u\-/", "", $docs_module)) . '</a>';
									}
								}
							}

							if(count($modules)) {
								foreach($modules as $index => $module) {
									print $module;

									if($index < count($modules)-2) {
										print ", ";
									}
									if($index == count($modules)-2) {
										print " and ";
									}
								}
							}
						}

//						print_r($modules);
					?>.
				</p>

				<ul class="actions">
					<li><a href="/bundles/jes_light_v0_7.zip" class="button primary">Download light</a></li>
				</ul>
			</div>


			<div class="promotion">
				<h3>Medium bundle</h3>
				<p>For most sites without being bloathed. Includes 
					<?php
						// list of includes files for each segment
						$modules = array();
						$js_include = "bundles/medium/lib/seg_desktop_include.js";
						if(file_exists($js_include)) {

							$includes = file($js_include);
							foreach($includes as $index => $include) {
								if(strpos($include, "//") !== 0 && preg_match("/src=\"([a-zA-Z0-9\.\/_\:\-\=\?]+)\"/i", $include, $include_matches)) {
									$docs_module = preg_replace("/\.js/", "", basename($include_matches[1]));
									$docs_file = 'documentation/'.$docs_module;
									if(file_exists($docs_file.".php")) {
										$modules[] = '<a href="/'.$docs_file.'">' . ucwords(preg_replace("/u\-/", "", $docs_module)) . '</a>';
									}
								}
							}

							if(count($modules)) {
								foreach($modules as $index => $module) {
									print $module;

									if($index < count($modules)-2) {
										print ", ";
									}
									if($index == count($modules)-2) {
										print " and ";
									}
								}
							}
						}
					?>.
				</p>

				<ul class="actions">
					<li><a href="/bundles/jes_medium_v0_7.zip" class="button primary">Download medium</a></li>
				</ul>
			</div>

			<div class="promotion">
				<h3>Full bundle</h3>
				<p>Everything if you need it - but ask yourself if you really do. Includes 

					<?php
						// list of includes files for each segment
						$modules = array();
						$js_include = "bundles/full/lib/seg_desktop_include.js";
						if(file_exists($js_include)) {

							$includes = file($js_include);
							foreach($includes as $index => $include) {
								if(strpos($include, "//") !== 0 && preg_match("/src=\"([a-zA-Z0-9\.\/_\:\-\=\?]+)\"/i", $include, $include_matches)) {
									$docs_module = preg_replace("/\.js/", "", basename($include_matches[1]));
									$docs_file = 'documentation/'.$docs_module;
									if(file_exists($docs_file.".php")) {
										$modules[] = '<a href="/'.$docs_file.'">' . ucwords(preg_replace("/u\-/", "", $docs_module)) . '</a>';
									}
								}
							}

							if(count($modules)) {
								foreach($modules as $index => $module) {
									print $module;

									if($index < count($modules)-2) {
										print ", ";
									}
									if($index == count($modules)-2) {
										print " and ";
									}
								}
							}
						}
					?>.
				</p>

				<ul class="actions">
					<li><a href="/bundles/jes_full_v0_7.zip" class="button primary">Download full</a></li>
				</ul>

			</div>

		</div>
	</div>
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>