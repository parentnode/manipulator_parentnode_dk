<? $page_title = "Math tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var node;


			// u.random
			if(u.random(1,10) >= 1 && u.random(1,10) <= 10) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "random: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "random: error";
			}

			// u.numToHex
			if(u.numToHex(255) == "ff" && u.numToHex(47) == "2f") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "numToHex: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "numToHex: error";
			}

			// u.hexToNum
			if(u.hexToNum("ff") == 255 && u.hexToNum("0F") == 15) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "hexToNum: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "hexToNum: error";
			}


		}

	}
</script>

<div class="scene i:test">
	<h1>Math</h1>


</div>
<div class="comments">
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>