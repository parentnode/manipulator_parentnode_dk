Util.Objects["front"] = new function() {
	this.init = function(scene) {
//		u.bug("scene init:" + u.nodeId(scene))

		scene.resized = function() {
//			u.bug("scene.resized:" + u.nodeId(this));

		}

		scene.scrolled = function() {
//			u.bug("scrolled:" + u.nodeId(this))

		}

		scene.ready = function() {
//			u.bug("scene.ready:" + u.nodeId(this));

			// map reference
			page.cN.scene = this;

			// required fonts loaded
			this.fontsLoaded = function() {

				page.resized();
				this.build();
			}

			// preload fonts
			u.fontsReady(this, [
				{"family":"OpenSans", "weight":"normal", "style":"normal"},
				{"family":"OpenSans", "weight":"bold", "style":"normal"},
				{"family":"OpenSans", "weight":"normal", "style":"italic"},
				{"family":"PT Serif", "weight":"normal", "style":"normal"}
			]);

		}


		scene.build = function() {
//			u.bug("scene.build:" + u.nodeId(this));

		}


		// scene is ready
		scene.ready();

	}

}
