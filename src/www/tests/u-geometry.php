<? $page_title = "Geometry tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
	.div_a {position: absolute; top: 300px; left: 250px; padding: 55px 50px;}
	.div_b {padding: 10px; width: 100px; height: 50px;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var div_a = u.ae(document.body, "div", {"class":"div_a"});
			var div_b = u.ae(div_a, "div", {"class":"div_b"});


			// u.bug("absX (div_a):" + u.absX(div_a));
			// u.bug("absX (div_b):" + u.absX(div_b));
			if(u.absX(div_b) == 300 && u.absX(div_a) == 250) {
				u.ae(scene, "div", {"class":"correct", "html":"absX: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"absX: error"});
			}

			// u.bug("absY (div_a):" + u.absY(div_a));
			// u.bug("absY (div_b):" + u.absY(div_b));
			if(u.absY(div_b) == 355 && u.absY(div_a) == 300) {
				u.ae(scene, "div", {"class":"correct", "html":"absY: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"absY: error"});
			}


			// u.bug("relX (div_a):" + u.relX(div_a));
			// u.bug("relX (div_b):" + u.relX(div_b));
			if(u.relX(div_b) == 50 && u.relX(div_a) == 250) {
				u.ae(scene, "div", {"class":"correct", "html":"relX: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"relX: error"});
			}

			// u.bug("relY (div_a):" + u.relY(div_a));
			// u.bug("relY (div_b):" + u.relY(div_b));
			if(u.relY(div_b) == 55 && u.relY(div_a) == 300) {
				u.ae(scene, "div", {"class":"correct", "html":"relY: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"relY: error"});
			}


			// u.bug("actualW (div_a):" + u.actualW(div_a));
			// u.bug("actualW (div_b):" + u.actualW(div_b));
			if(u.actualW(div_b) == 100 && u.actualW(div_a) == 120) {
				u.ae(scene, "div", {"class":"correct", "html":"actualW: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"actualW: error"});
			}

			// u.bug("actualH (div_a):" + u.actualH(div_a));
			// u.bug("actualH (div_b):" + u.actualH(div_b));
			if(u.actualH(div_b) == 50 && u.actualH(div_a) == 70) {
				u.ae(scene, "div", {"class":"correct", "html":"actualH: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"actualH: error"});
			}

			// remove test div
			document.body.removeChild(div_a);


			var event_x = u.ae(scene, "div", {"class":"event", "html":"click to test eventX"});
			u.ce(event_x);
			event_x.clicked = function(event) {
				if(u.eventX(event) > u.absX(this) && u.eventX(event) < u.absX(this)+this.offsetWidth) {
					this.innerHTML = "eventX: correct";
					u.ac(this, "correct");
				}
				else {
					this.innerHTML = "eventX: error";
					u.ac(this, "error");
				}
			}

			var event_y = u.ae(scene, "div", {"class":"event", "html":"click to test eventY"});
			u.ce(event_y);
			event_y.clicked = function(event) {
				if(u.eventY(event) > u.absY(this) && u.eventY(event) < u.absY(this)+this.offsetHeight) {
					this.innerHTML = "eventY: correct";
					u.ac(this, "correct");
				}
				else {
					this.innerHTML = "eventY: error";
					u.ac(this, "error");
				}
			}


			var browser = u.ae(scene, "div", {"class":"browser", "html":"Click to get browser size"});
			u.ce(browser);
			browser.clicked = function() {
				this.innerHTML = "browserWidth x browserHeight: " + u.browserW() + " x " + u.browserH();
			}

			var html = u.ae(scene, "div", {"class":"html", "html":"Click to get HTML size"});
			u.ce(html);
			html.clicked = function() {
				this.innerHTML = "htmlWidth x htmlHeight: " + u.htmlW() + " x " + u.htmlH();
			}

			var scroll = u.ae(scene, "div", {"class":"scroll", "html":"Click to get scroll offset"});
			u.ce(scroll);
			scroll.clicked = function() {
				this.innerHTML = "scrollX x scrollY: " + u.scrollX() + " x " + u.scrollY();
			}


		}
	}
</script>

<div class="scene i:test">
	<h1>Geometry</h1>
	<p>This test contains calculation of event coordinates, which requires your input. Click as indicated below.</p>
	<p>
		Auto testing of Util.browserWidth/Height, Util.htmlWidth/Height and Util.pageScrollX/Y is not possible, as
		these values will vary and can only be verified by using these same functions - and thus a test will not reveal errors.
		The values returned by these functions will be printed on the screen, but must be verified manually.
	</p>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>