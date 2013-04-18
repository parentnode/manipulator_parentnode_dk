<? $page_title = "STRING tests" ?>
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

			var node;

			// u.cutString
			var cutStringText = "This function will cut the string to the number of letter you'd like";
			if(u.cutString(cutStringText, 10) == "This fu...") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "cutString: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "cutString: error";
			}

			// u.random
			if(u.random(1,10) >= 1 && u.random(1,10) <= 10) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "random: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "random: error";
			}

			// u.randomKey
			if(u.randomKey(10).length == 10) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "randomKey: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "randomKey: error";
			}

			// u.randomString
			if(u.randomString(10).length == 10) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "randomString: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "randomString: error";
			}

			// u.uuid
			if(u.uuid().length == 36 && u.uuid().toString().match(/-/g).length == 4) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "uuid: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "uuid: error";
			}

			// u.stringOr
			if(u.stringOr(0, "zero") == 0 && u.stringOr(null, "zero") == "zero") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "stringOr: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "stringOr: error";
			}


			// node.textContent
			var test = u.qs(".textcontent", scene);
			if(test.textContent != undefined && test.textContent.trim() == "node.textContent") {
				test.innerHTML += ": correct";
				u.ac(test, "correct");
			}
			else {
				test.innerHTML += ": error";
				u.ac(test, "error");
			}

			// trim
			// substr

		}

	}
</script>

<div class="scene i:test">
	<h2>STRING</h2>

	<div class="textcontent">
		<!-- COMMENT -->
		<span>node.textContent</span>
	</div>

</div>
<div class="comments">
	<p>In the cutString function we should consider the possibility of defining your own ending to the cut string.</p>
	<p>
		Also if the required length is less than 3 the string returned will be "...". Makes it impossible to cut a 
		string to just one char. Something to consider.
	</p>
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>