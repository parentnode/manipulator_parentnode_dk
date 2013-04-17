<? $page_title = "Devices tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}

	.box {background: green;
		width: 50px;
		-webkit-transition: all 1s ease-in;
	}
	.box.wide {width: 500px;}

</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {
			var box = u.qs(".box");
			u.e.click(box);
			box.clicked = function() {
				if(u.hc(box, "wide")) {
					u.rc(box, "wide");
				}
				else {
					u.ac(box, "wide");
				}
			}
		}
	}
</script>

<div class="scene i:test">
	<h2>Devices - transition test</h2>

	<div class="box">box</div>

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>