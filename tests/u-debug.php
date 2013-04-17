<? $page_title = "Debug tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			u.bug(scene.innerHTML)

			u.bug(u.nodeId(scene, 1), 1, "green");
			u.bug(u.nodeId(scene, 1), "red");
			u.bug(u.nodeId(scene, 1), 2, "blue");

			u.xInObject({"class":"fisk", "node":"frø"});


			if(u.qsa(".debug_0 div").length == 3 && u.qsa(".debug_1 div").length == 1) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = 'u.bug: correct';
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = 'u.bug: error';
			}

			if(u.nodeId(u.qs("#page"), 1) == "BODY.tests->DIV#page") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = 'u.nodeId: correct';
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = 'u.nodeId: error';
			}

		}
	}
</script>

<div class="scene i:test">
	<h1>Debug</h1>


</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>