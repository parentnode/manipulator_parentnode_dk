<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

	var time = new Date().getTime();

	Util.Objects["test"] = new function() {
		this.init = function(scene) {
			load_time = new Date().getTime();
//			text += "#onload ("+(load_time - time)+")<br>" + document.body + "<br>" + document.readyState + "<br>";

//			u.bug(text);
			if(!scene.initialized) {
				scene.initialized = true;
				var init_div = u.qs(".init", scene)
				init_div.parentNode.removeChild(init_div);

				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "Initialized: "+(load_time - time);
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "Multiple initializations";
			}

		}

	}

	
</script>

<div class="scene i:test">
	<h1>Init</h1>

	<div class="init">Waiting for initialization</div>

</div>
<div class="comments"></div>
