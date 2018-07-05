<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			scene.fontsLoaded = function() {
				u.bug("fonts are ready");
			}
			scene.fontsNotLoaded = function() {
				u.bug("fonts are not ready");
			}
			u.fontsReady(scene, [
				{"family":"OpenSans", "style":"italic", "weight": 600},
				{"family":"PT Serif", "weight": 700},
				{"family":"OpenSans", "style":"normal", "weight": 100},
			]);


			scene.allGood = function() {
				u.bug("fonts are ALL good");
			}
			scene.notGood = function() {
				u.bug("fonts are NOT good");
			}
			u.fontsReady(scene, {"family":"PT Serif", "weight": 100}, {"callback":"allGood", "timeout":"notGood", "max":1000});

		}
	}

</script>

<div class="scene i:test">
	<h1>Fonts Ready</h1>
	<p>
		Checking if fonts are ready (loaded).
	</p>

</div>
<div class="comments"></div>
