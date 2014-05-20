<? 
$url = isset($_SERVER["HTTPS"]) ? "https" : "http" . "://" . $_SERVER["SERVER_NAME"] . preg_replace("/.php/", "", $_SERVER["PHP_SELF"]);
?>
<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

	Util.Objects["scene"] = new function() {
		this.init = function(scene) {

			u.navigation(page);

			page.cN.scene = scene;

			page.cN.navigate = function(url) {
				if(url.match(/^\/content/)) {
					_location = u.qs(".location");
					_location.innerHTML = "cN: " + url;
				}
				else {
					location.href = url;
				}

			}

			scene.navigate = function(url) {
				_location = u.qs(".location");
				_location.innerHTML = "scene: " + url;
			}

			var links = u.qsa("ul.links li", scene);
			for(i = 0; link = links[i]; i++) {
				u.ce(link, {"type":"link"});
			}

		}
	}

</script>

<div class="scene i:scene">
	<h1>Navigation</h1>
	<p>
		Clicking links should update url, using Hash as fallback in older browsers. To test, click links and see if 
		browser url and the link in Current location is aligned and that browser navigation "back" and "forward" works.
	</p>

	<ul class="links">
		<li><a href="<?= $url ?>"><?= $url ?></a></li>
		<li><a href="/content-1">/content-1</a></li>
		<li><a href="/content-1/scene">/content-1/scene</a></li>
		<li><a href="/content-1/scene/param">/content-1/scene/param</a></li>
		<li><a href="/content-2">/content-2</a></li>
		<li><a href="/content-2/scene">/content-2/scene</a></li>
		<li><a href="/content-2/scene/param">/content-2/scene/param</a></li>
	</ul>

	<h3>Current location</h3>
	<p><span class="location"><?= $url ?></span></p>


</div>
<div class="comments"></div>
