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

			// u.prefix
			if(u.prefix("F", 5, "-") == "----F" && u.prefix(10, 2) == "10" && u.prefix(1, 5) == "00001") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "prefix: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "prefix: error";
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

			// u.eitherOr
			if(u.eitherOr(0, "zero") == 0 && u.eitherOr(null, "zero") == "zero" && u.eitherOr("", "zero") == "" && u.eitherOr(undefined, "zero") == "zero" && u.eitherOr("test", "zero") == "test" && u.eitherOr({}, "zero") != "zero") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "eitherOr: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "eitherOr: error";
			}

			// u.stringOr
			// if(u.stringOr("", "zero") == "" && u.stringOr(0, "zero") == 0 && u.stringOr(null, "zero") == "zero" && u.stringOr(undefined, "zero") == "zero") {
			// 	u.ae(scene, "div", ({"class":"correct"})).innerHTML = "stringOr: correct";
			// }
			// else {
			// 	u.ae(scene, "div", ({"class":"error"})).innerHTML = "stringOr: error";
			// }


			// trim
			var test_trim = "\n	test string		\n";
			if(test_trim.trim() == "test string") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "trim: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "trim: error";
			}

			// substr
			var test_substr = "test string";
			if(test_substr.substr(-2) == "ng" && test_substr.substr(2, 4) == "st s") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = "substr: correct";
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = "substr: error";
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>String</h1>


</div>
<div class="comments">
	<p>In the cutString function we should consider the possibility of defining your own ending to the cut string.</p>
	<p>
		Also if the required length is less than 3 the string returned will be "...". Makes it impossible to cut a 
		string to just one char. Something to consider.
	</p>
</div>
