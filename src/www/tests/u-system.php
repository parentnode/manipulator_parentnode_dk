<? $page_title = "System tests" ?>
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

			// ie
			// u.bug("IE<10:" + u.browser("ie"));
			if(u.browser("ie")) {
				u.ae(scene, "div", ({"class":"correct", "html":"IE: correct ("+u.browser("ie")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"IE: error ("+u.browser("ie")+")"}));
			}

			// ie < 10
			// u.bug("IE<10:" + u.browser("ie", "<10"));
			if(u.browser("ie", "<10")) {
				u.ae(scene, "div", ({"class":"correct", "html":"IE<10: correct ("+u.browser("ie", "<10")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"IE<10: error ("+u.browser("ie", "<10")+")"}));
			}

			// explorer > 7
			// u.bug("IE>7:" + u.browser("explorer", ">7"));
			if(u.browser("explorer", ">7")) {
				u.ae(scene, "div", ({"class":"correct", "html":"explorer>7: correct ("+u.browser("explorer", ">7")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"explorer>7: error ("+u.browser("explorer", ">7")+")"}));
			}

			// explorer > 8
			// u.bug("IE>8:" + u.browser("explorer", ">8"));
			if(u.browser("explorer", ">8")) {
				u.ae(scene, "div", ({"class":"correct", "html":"explorer>8: correct ("+u.browser("explorer", ">8")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"explorer>8: error ("+u.browser("explorer", ">8")+")"}));
			}

			// IE 6
			// u.bug("IE 6:" + u.browser("explorer", "6"));
			if(u.browser("explorer", "6")) {
				u.ae(scene, "div", ({"class":"correct", "html":"explorer 6: correct ("+u.browser("explorer", "6")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"explorer 6: error ("+u.browser("explorer", "6")+")"}));
			}

			// Firefox
			// u.bug("Firefox:" + u.browser("Firefox"));
			if(u.browser("Firefox")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Firefox: correct ("+u.browser("Firefox")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Firefox: error ("+u.browser("Firefox")+")"}));
			}

			// Firefox < 10
			// u.bug("Firefox<10:" + u.browser("Firefox", "<10"));
			if(u.browser("Firefox", "<10")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Firefox<10: correct ("+u.browser("Firefox", "<10")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Firefox<10: error ("+u.browser("explorer", "<10")+")"}));
			}

			// Gecko > 10
			// u.bug("Gecko>10:" + u.browser("Gecko", ">10"));
			if(u.browser("Gecko", ">10")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Gecko>10: correct ("+u.browser("Gecko", ">10")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Gecko>10: error ("+u.browser("Gecko", ">10")+")"}));
			}


			// webkit
			// u.bug("Webkit:" + u.browser("Webkit"));
			if(u.browser("Webkit")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Webkit: correct ("+u.browser("Webkit")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Webkit: error ("+u.browser("Webkit")+")"}));
			}

			// webkit > 530
			// u.bug("Webkit>530:" + u.browser("Webkit", ">530"));
			if(u.browser("Webkit", ">530")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Webkit>530: correct ("+u.browser("Webkit", ">530")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Webkit>530: error ("+u.browser("Webkit", ">530")+")"}));
			}


			// Safari
			// u.bug("Safari:" + u.browser("Safari"));
			if(u.browser("Safari")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Safari: correct ("+u.browser("Safari")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Safari: error ("+u.browser("Safari")+")"}));
			}

			// safari < 5
			// u.bug("Safari>5:" + u.browser("Safari", "<5"));
			if(u.browser("Safari", "<5")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Safari<5: correct ("+u.browser("Safari", "<5")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Safari<5: error ("+u.browser("Safari", "<5")+")"}));
			}

			// safari > 5
			// u.bug("Safari>5:" + u.browser("Safari", ">5"));
			if(u.browser("Safari", ">5")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Safari>5: correct ("+u.browser("Safari", ">5")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Safari>5: error ("+u.browser("Safari", ">5")+")"}));
			}


			// chrome
			// u.bug("Chrome:" + u.browser("Chrome"));
			if(u.browser("Chrome")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Chrome: correct ("+u.browser("Chrome")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Chrome: error ("+u.browser("Chrome")+")"}));
			}

			// chrome > 15
			// u.bug("Chrome>15:" + u.browser("Chrome", ">15"));
			if(u.browser("Chrome", ">15")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Chrome >15: correct ("+u.browser("Chrome", ">15")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Chrome >15: error ("+u.browser("Chrome", ">15")+")"}));
			}

			// chrome < 15
			// u.bug("Chrome<15:" + u.browser("Chrome", "<15"));
			if(u.browser("Chrome", "<15")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Chrome <15: correct ("+u.browser("Chrome", "<15")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Chrome <15: error ("+u.browser("Chrome", "<15")+")"}));
			}


			// opera
			// u.bug("Opera:" + u.browser("Opera"));
			if(u.browser("Opera")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Opera: correct ("+u.browser("Opera")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Opera: error ("+u.browser("Opera")+")"}));
			}

			// opera > 8
			// u.bug("Opera>8:" + u.browser("Opera", ">8"));
			if(u.browser("Opera", ">8")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Opera >8: correct ("+u.browser("Opera", ">8")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Opera >8: error ("+u.browser("Opera", ">8")+")"}));
			}

			// opera < 11
			// u.bug("Opera<11:" + u.browser("Opera", "<11"));
			if(u.browser("Opera", "<11")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Opera <11: correct ("+u.browser("Opera", "<11")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Opera <11: error ("+u.browser("Opera", "<11")+")"}));
			}

			// opera 12
			// u.bug("Opera 12:" + u.browser("Opera", "12"));
			if(u.browser("Opera", "12")) {
				u.ae(scene, "div", ({"class":"correct", "html":"Opera 12: correct ("+u.browser("Opera", "12")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"Opera 12: error ("+u.browser("Opera", "12")+")"}));
			}


			// u.support
			// u.bug("Opera 12:" + u.browser("Opera", "12"));
			if(u.support("opacity")) {
				u.ae(scene, "div", ({"class":"correct", "html":"opacity support: correct ("+u.support("opacity")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"opacity support: error ("+u.support("opacity")+")"}));
			}

			if(u.support(u.a.variant()+"Transition")) {
				u.ae(scene, "div", ({"class":"correct", "html":"transition support: correct ("+u.support(u.a.variant()+"Transition")+")"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"transition support: error ("+u.support(u.a.variant()+"Transition")+")"}));
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>System</h1>
	<p>This test is browser dependent - you need to manually verify the results below.</p>

</div>
<div class="comments">
	
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>