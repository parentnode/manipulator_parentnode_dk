<? $page_title = "Pushstate/Hashchange tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">


</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			scene.hashChanged = function() {
				u.bug("hash change " + location.hash);
			}

			u.h.catchEvent(scene.hashChanged, scene);

		}

	}
</script>

<div class="scene i:test">
	<h1>Hashchanged</h1>

	<div><a href="#test1">#test1</a></div>
	<div><a href="#test2">#test2</a></div>


</div>
<div class="comments">
	<h3>// COMMENTs</h3>
	<p>Implement prioritized pushstate before splitting</p>
	<p>Test in Safari 4.0.5 to see at which webkit release hashchanged was added - I believe it came with the transitions release</p>
	<p>Detection error in IE 7</p>
	<p>Should separate timerbased function into desktop_light/ie file - IE7 needs to go into the IE segment maybe?</p>
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>