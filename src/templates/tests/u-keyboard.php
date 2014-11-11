<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}

	div.key {margin: 10px; padding: 5px; background: blue; color: white;}
	div.key * {color: white;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var a1 = u.qs("div.a1", scene);
			u.ce(a1);
			u.k.addKey(a1, "a");
			a1.clicked = function(event){

				alert("A1 clicked:" + event.type);
				u.bug("A1 clicked:" + event.type);

				u.xInObject(u.k.shortcuts);
			}


			var a2 = u.qs("div.a2", scene);
			u.ce(a2);
			u.k.addKey(a2, "b");
			a2.clicked = function(event){

				u.bug("A2 clicked:" + event.type);
				u.as(u.qs("div.a1"), "display", "none");

				u.xInObject(u.k.shortcuts);
			}


			var a3 = u.qs("div.a3", scene);
			u.ce(a3);
			u.k.addKey(a3, "c");
			a3.clicked = function(event) {

				u.bug("A3 clicked:" + event.type);
				this.parentNode.parentNode.removeChild(this.parentNode);

				u.xInObject(u.k.shortcuts);
			}


			var a4 = u.qs("div.a4", scene);
			u.ce(a4);
			u.k.addKey(a4, "ESC", {"callback":"keyboard"});
			a4.clicked = function(event) {

				u.bug("A4 clicked - SHOULD NOT HAPPEN UNLESS YOU CLICKED ON A5:" + event.type);

				u.xInObject(u.k.shortcuts);
			}
			a4.keyboard = function(event) {

				u.bug("A4 keyboard:" + event.type);

				u.xInObject(u.k.shortcuts);
			}


			var a5 = u.qs("div.a5", scene);
			u.ce(a5);
			u.k.addKey(a5, "e", {"metakey":false});
			a5.clicked = function(event) {

				u.bug("A5 clicked:" + event.type);
				u.as(u.qs("div.a1"), "display", "block");

				u.xInObject(u.k.shortcuts);
			}

		}
	}

</script>

<div class="scene i:test">
	<h1>Keyboard shortcuts</h1>
	<p>Test all shortcuts</p>
	<p>if a key is hidden or removed, its callback cannot be invoked</p>

	<div class="key a1">A1 - key CMD/CTRL+a (alert)</div>

	<div class="key a2">A2 - key CMD/CTRL+b (hides A1)</div>

	<div class="key"><div class="a3">A3 - key CMD/CTRL+c (removes itself)</div></div>

	<div class="key a4">A4 - key ESC (custom callback)</div>

	<div class="key a5">A5 - key e (no metakey, shows A1 again)</div>

</div>
<div class="comments"></div>
