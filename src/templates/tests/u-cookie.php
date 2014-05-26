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
				u.ae(scene, "div", ({"class":"correct", "html":"u.saveCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.saveCookie: error"}));
			}

			// get cookie
			if(u.getCookie("test") == "test-value") {
				u.ae(scene, "div", ({"class":"correct", "html":"u.getCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.getCookie: error"}));
			}

			// delete cookie
			u.deleteCookie("test");
			if(!u.getCookie("test")) {
				u.ae(scene, "div", ({"class":"correct", "html":"u.deleteCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.deleteCookie: error"}));
			}



			// node cookies
			var footer = u.qs("#footer");
			u.deleteCookie("man_mem", {"path":"/"});

			// saveNodeCookie
			u.saveNodeCookie(scene, "test1", "s-value1");
			u.saveNodeCookie(scene, "test2", "s-value2");
			u.saveNodeCookie(footer, "test2", "f-value2");
			// u.bug(u.getCookie("man_mem"));
			if(u.getCookie("man_mem") == '{"DIV#content DIV.scene":{"test1":"s-value1","test2":"s-value2"},"DIV#footer":{"test2":"f-value2"}}') {
				u.ae(scene, "div", ({"class":"correct", "html":"u.saveNodeCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.saveNodeCookie: error"}));
			}


			// getNodeCookie
			// u.bug("get scene test2:" + u.getNodeCookie(scene, "test2"));
			// u.bug("get footer:" + JSON.stringify(u.getNodeCookie(footer)));
			if(u.getNodeCookie(scene, "test2") == "s-value2" && JSON.stringify(u.getNodeCookie(footer)) == '{"test2":"f-value2"}') {
				u.ae(scene, "div", ({"class":"correct", "html":"u.getNodeCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.getNodeCookie: error"}));
			}


			// deleteNodeCookie
			u.deleteNodeCookie(scene, "test2");
			u.deleteNodeCookie(footer);
			// u.bug("get scene test1:" + u.getNodeCookie(scene, "test1"));
			// u.bug("get scene test2:" + u.getNodeCookie(scene, "test2"));
			// u.bug("get footer:" + u.getNodeCookie(footer));
			// u.bug(u.getCookie("man_mem"));
			if(!u.getNodeCookie(scene, "test2") && !u.getNodeCookie(footer) && u.getNodeCookie(scene, "test1") == "s-value1") {
				u.ae(scene, "div", ({"class":"correct", "html":"u.deleteNodeCookie: correct"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"u.deleteNodeCookie: error"}));
			}



		}

	}
</script>

<div class="scene i:test">
	<h1>Cookie</h1>

</div>
<div class="comments"></div>
