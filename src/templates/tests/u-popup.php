<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var div = u.ae(scene, "div", ({"html":"Click to open popup, 400x300"}));
			u.ce(div);
			div.clicked = function() {
				this.popup = u.popup(location.href, ({"width":400, "height":300}));
				if(this.popup.name) {
					this.innerHTML = "Now, click to close popup";
					this.clicked = function() {
						this.popup.close();
						this.innerHTML = "Popup 400x300: correct";
						u.ac(this, "correct");
//						u.bug("popup:" + this.popup);
					}
				}
				else {
					u.ac(this, "error");
					this.innerHTML = "popup, 400x300: error";
				}
//				u.bug("name:" + this.popup.name);
			}

			var div = u.ae(scene, "div", ({"html":"Click to open popup, name test"}));
			u.ce(div);
			div.clicked = function() {
				this.popup = u.popup(location.href, ({"name":"test"}));
				if(this.popup.name == "test") {
					this.innerHTML = "Now, click to close popup";
					this.clicked = function() {
						this.popup.close();
						this.innerHTML = "Popup name: correct";
						u.ac(this, "correct");
//						u.bug("popup:" + this.popup);
					}
				}
				else {
					u.ac(this, "error");
					this.innerHTML = "popup name: error";
				}
//				u.bug("name:" + this.popup.name);
			}

		}
	}
</script>

<div class="scene i:test">
	<h1>Popup</h1>

</div>
<div class="comments"></div>
