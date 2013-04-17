<? $page_title = "Devices tests" ?>
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
			u.deviceDetection();
		}
	}
</script>

<div class="scene i:test">
	<h2>Devices</h2>

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>