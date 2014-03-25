<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.flash {border: 1px solid green; height: 100px;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			u.ae(scene, "div", {"html":"u.flashDetection() = " + u.flashDetection()});
			u.ae(scene, "div", {"html":"u.flashDetection(8) = " + u.flashDetection(8)});
			u.ae(scene, "div", {"html":"u.flashDetection(9) = " + u.flashDetection(9)});
			u.ae(scene, "div", {"html":"u.flashDetection(10) = " + u.flashDetection(10)});
			u.ae(scene, "div", {"html":"u.flashDetection(11) = " + u.flashDetection(11)});
			u.ae(scene, "div", {"html":"u.flashDetection(12) = " + u.flashDetection(12)});

			u.ae(scene, "div", {"html":'u.flashDetection("<=8") = ' + u.flashDetection("<=8")});
			u.ae(scene, "div", {"html":'u.flashDetection(">=8") = ' + u.flashDetection(">=8")});

			u.ae(scene, "div", {"html":'u.flashDetection("<11") = ' + u.flashDetection("<11")});
			u.ae(scene, "div", {"html":'u.flashDetection(">11") = ' + u.flashDetection(">11")});
			u.ae(scene, "div", {"html":'u.flashDetection(">=11") = ' + u.flashDetection(">=11")});
			u.ae(scene, "div", {"html":'u.flashDetection("<=11") = ' + u.flashDetection("<=11")});

			if(u.flashDetection()) {
				var flash = u.ae(scene, "div", {"class":"flash"});
				u.flash(flash, "/documentation/media/flash/videoplayer.swf");
			}
			else {
				var flash = u.ae(scene, "div", {"html":"NO FLASH PLUGIN"});
			}
		}
	}
</script>

<div class="scene i:test">
	<h1>flash</h1>


</div>
<div class="comments"></div>
