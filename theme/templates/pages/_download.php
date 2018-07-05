<?php
// find modules from include file
function findModules($file) {

	$modules = array();
	$_ = "";

	if(file_exists($file)) {

		$includes = file($file);
		foreach($includes as $index => $include) {
			if(strpos($include, "//") !== 0 && preg_match("/src=\"([a-zA-Z0-9\.\/_\:\-\=\?]+)\"/i", $include, $include_matches)) {
				$docs_module = preg_replace("/\.js/", "", basename($include_matches[1]));
				$docs_file = '/docs/'.$docs_module;
//				print $docs_file . ":" . file_exists(LOCAL_PATH."/templates".$docs_file.".php")."<br>" . LOCAL_PATH."/templates".$docs_file.".php" . "<br>";
				if(file_exists(LOCAL_PATH."/templates".$docs_file.".php")) {
					$modules[] = '<a href="'.$docs_file.'">' . ucwords(preg_replace("/u\-/", "", $docs_module)) . '</a>';
				}
			}
		}

		if(count($modules)) {
			foreach($modules as $index => $module) {
				$_ .= $module;

				if($index < count($modules)-2) {
					$_ .= ", ";
				}
				if($index == count($modules)-2) {
					$_ .= " and ";
				}
			}
		}
	}

	return $_;
}
?>
<div class="scene download i:scene">

	<h1>Downloads</h1>

	<h2>Github</h2>
	<p><a href="http://github.com/parentnode/manipulator" target="_blank">Manipulator is public on GitHub</a>.</p>

	<h2>Bundles and source</h2>
	<p>
		The package available for download contains the complete source and precompiled bundles of the Manipulator 
		JavaScript library matching most website needs.
	</p>


	<ul class="actions">
		<li><a href="/bundles/archive/v0_9.zip" class="button primary">Download 0.9 ZIP</a></li>
	</ul>


	<h3>About the bundles</h3>
	<p>
		The download package contains three bundles, customized for different needs - light, medium and full.
	</p>
	<p>
		The Manipulator library is based on segments. This means the library contains variations depending on which segment(s) 
		you are building for. In each bundle you will find 9 include files. For more information about <a href="http://detector.parentnode.dk/segments">segments</a>
		visit <a href="http://detector.parentnode.dk" target="_blank">http://detector.parentnode.dk</a> and <a href="http://templator.parentnode.dk" target="_blank">http://templator.parentnode.dk</a>.
	</p>
	<p>
		The bundles are NOT minified. Minification saves some bytes, but renders code unreadable.
		Using fewer includes, optimizing your HTML or simply writing better JavaScript are much more efficient ways 
		of enhancing performance. If you really want it - use your own tool to minify.
	</p>


	<div class="bundle light">
		<h3>Light</h3>
		<p>
			For the simple site. Only the most basic tools. Includes 
			<?= findModules(LOCAL_PATH."/www/bundles/light/lib/seg_desktop_include.js") ?>.
		</p>
	</div>


	<div class="bundle medium">
		<h3>Medium bundle</h3>
		<p>
			For most sites without being bloated. Includes 
			<?= findModules(LOCAL_PATH."/www/bundles/medium/lib/seg_desktop_include.js") ?>.
		</p>
	</div>


	<div class="bundle full">
		<h3>Full bundle</h3>
		<p>
			Everything if you need it - but ask yourself if you really do. Includes 
			<?= findModules(LOCAL_PATH."/www/bundles/full/lib/seg_desktop_include.js") ?>.
		</p>
	</div>


	<hr />


	<h2>Version history</h2>
	<p>
		Looking for <a href="/pages/older-versions">older versions</a> of Manipulator or the <a href="/pages/changelog">changelog</a>?
	</p>
	

</div>
