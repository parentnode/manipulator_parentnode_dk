Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		u.bug("scene init:", scene);
		

		scene.resized = function() {
//			u.bug("scene.resized:" + u.nodeId(this));

			// refresh dom
			//this.offsetHeight;
		}

		scene.scrolled = function() {
//			u.bug("scrolled:" + u.nodeId(this))
		}

		scene.ready = function() {
//			u.bug("scene.ready:" + u.nodeId(this));

			page.cN.scene = this;

			this.response = function(response) {
				var tests = u.qsa("li.test a", response);

				var i, test, current_location;
				for(i = 0; test = tests[i]; i++) {
					current_location = location.href;
					if(location.search) {
						current_location = current_location.replace(location.search, "");
					}
					if(location.hash) {
						current_location = current_location.replace(location.hash, "");
					}

					if(test.href == current_location) {
						if(tests.length > i+1) {
							page.fN.innerHTML = "";
							u.ae(page.fN, "a", {"html":"Next test: " + tests[i+1].innerHTML, "href":tests[i+1].href});
						}
					}
				}

			}
			u.request(this, "/tests");

			page.resized();
		}

		// scene is ready
		scene.ready();
	}
}
