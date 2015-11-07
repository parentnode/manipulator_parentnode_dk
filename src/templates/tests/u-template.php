<?php
$this->headerIncludes(array(
	"/js/tests/i-template.js",
	"/css/tests/s-template.css"	
));
?>

<div class="scene i:scene">
	<h1>Template</h1>

<? if(preg_match("/desktop_light|tv|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<div class="tests i:template">
		<ul class="test1">
			<li class="template"><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></li>
		</ul>

		<ul class="test2"></ul>
	</div>

<? endif;?>

</div>
<div class="comments">
	<p>
		Using u.template on table structures in >=IE8 doesn't work, because table.innerHTML is read-only. Using other 
		nodetypes works fine.
	</p>
	
</div>
