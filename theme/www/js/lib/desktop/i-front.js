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
			this.div_bundle_builder = u.ae(this, "div", {"class":"bundle_builder"});

			this.div_bundle_builder.response = function(response) {
				var coreModules = u.qsa(".library.core > li", response);
				var ul_coreModules = u.ae(this, "ul", {"class":"coreModules"});

				for(var i = 0; i < coreModules.length; i++) {
					u.ae(ul_coreModules, coreModules[i]);
					u.e.hover(coreModules[i], {"delay":"0"});

					coreModules[i].over = function() {
						var description = this.children[1];
						u.a.transition(description, "all 0.2s ease-in");
						u.a.translate(description, 0, 6);
						u.a.opacity(description, 1);
					}
					
					coreModules[i].out = function() {
						var description = this.children[1];
						u.a.transition(description, "all 0.2s ease-in");
						u.a.translate(description, 0, 0);
						u.a.opacity(description, 0);
					}
				}
			}
			
			u.request(this.div_bundle_builder, "/docs");
		}


		// scene is ready
		scene.ready();

	}

}
