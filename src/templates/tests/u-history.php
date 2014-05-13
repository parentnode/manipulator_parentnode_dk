<style type="text/css"></style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {


			scene.navigate = function(url) {

				// popstate handling
				if(u.h.popstate) {
					history.pushState({}, url, url);
					scene.updated(url);
				}
				// hash handling
				else {
					location.hash = u.h.getCleanUrl(url);
				}

			}
			

			scene.updated = function(url) {

				
				u.bug("location change: " + url);

			}

			u.h.catchEvent(scene.updated, scene);


			var links = u.qsa("ul.links li", scene);
			for(i = 0; link = links[i]; i++) {
				link.scene = scene;

				u.ce(link);
				link.clicked = function() {
					this.scene.navigate(this.url);
				}
			}


		}

	}
</script>

<div class="scene i:test">
	<h1>History</h1>
	<p>
		Clicking links should update url, using Hash as fallback in older browsers. The History object
		can be used in conjunction with the Navigation module for easy implementation.
	</p>


	<ul class="links">
		<li><a href="/test1">/test1</a></li>
		<li><a href="/test2">/test2</a></li>
	</ul>

</div>

<div class="comments">
</div>
