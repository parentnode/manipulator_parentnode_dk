<style type="text/css">
	
.scene > div {margin: 0 0 5px;}
.correct {background: green;}
.error {background: red;}
	
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {


			scene._location = u.qs(".location", scene);

			scene.navigate = function(url) {

				// popstate handling
				if(u.h.popstate) {
					history.pushState({}, url, url);
					scene.updated(u.h.getCleanUrl(url));
				}
				// hash handling
				else {
					location.hash = u.h.getCleanUrl(url);
				}

			}
			

			scene.updated = function(url) {

				this._location.innerHTML = url;

			}

			u.h.catchEvent(scene, scene.updated);


			var links = u.qsa("ul.links li", scene);
			for(i = 0; link = links[i]; i++) {
				link.scene = scene;

				u.ce(link);
				link.clicked = function() {
					this.scene.navigate(this.url);
				}
			}


			var _cleanurl = u.qs(".cleanurl", scene);
			var url = "<?= isset($_SERVER["HTTPS"]) ? "https" : "http" ?>://<?= $_SERVER["SERVER_NAME"] ?><?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>";
			if(
				u.h.getCleanUrl("http://somedomain.dk/thank/you") == "http://somedomain.dk/thank/you" && 
				u.h.getCleanUrl(url, 1) == "/tests" && 
				u.h.getCleanUrl(url) == "<?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>" &&
				u.h.getCleanUrl(url+"#hashsomething") == "<?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>" &&
				u.h.getCleanUrl(url+"?param=something") == "<?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>?param=something"
			) {
				u.rc(_cleanurl, "error");
				u.ac(_cleanurl, "correct");
			}

			var _cleanhash = u.qs(".cleanhash", scene);
			if(
				u.h.getCleanHash("#/thank/you") == "/thank/you" && 
				u.h.getCleanHash("#/thank/you", 1) == "/thank" && 
				u.h.getCleanHash("#thank/you/for/crap") == "thank/you/for/crap"
			) {
				u.rc(_cleanhash, "error");
				u.ac(_cleanhash, "correct");
			}


		}

	}
</script>

<div class="scene i:test">
	<h1>History</h1>
	<p>
		Clicking links should update url, using Hash as fallback in older browsers. To test, click links and see if 
		browser url and the link in Current location is aligned and that browser navigation "back" and "forward" works.
	</p>

	<ul class="links">
		<li><a href="<?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?>"><?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?></a></li>
		<li><a href="/test1">/test1</a></li>
		<li><a href="/test2">/test2</a></li>
	</ul>

	<h3>Current location</h3>
	<p><span class="location"><?= preg_replace("/.php/", "", $_SERVER["PHP_SELF"]) ?></span></p>

	<div class="cleanurl error">u.h.getCleanUrl</div>
	<div class="cleanhash error">u.h.getCleanHash</div>

</div>

<div class="comments">
</div>
