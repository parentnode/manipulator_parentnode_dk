<? $page_title = "Cookie tests" ?>
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

			// clear cookie before test
			document.cookie = "";

			u.saveCookie("test", "test-value");
			// save cookie
			if(document.cookie.match(/test=test-value/)) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = 'u.saveCookie: correct';
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = 'u.saveCookie: error';
			}

			// get cookie
			if(u.getCookie("test") == "test-value") {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = 'u.getCookie: correct';
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = 'u.getCookie: error';
			}

			// delete cookie
			u.deleteCookie("test");
			if(!u.getCookie("test")) {
				u.ae(scene, "div", ({"class":"correct"})).innerHTML = 'u.deleteCookie: correct';
			}
			else {
				u.ae(scene, "div", ({"class":"error"})).innerHTML = 'u.deleteCookie: error';
			}

		}

	}
</script>

<div class="scene i:test">
	<h2>Cookie</h2>


</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>