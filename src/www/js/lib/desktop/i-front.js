Util.Objects["front"] = new function() {
	this.init = function(scene) {
		u.bug("scene init:" + u.nodeId(scene))
		

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


			// this.module_list = u.qs("ul.modules", this);
			// this.module_list.response = function(response) {
			//
			// 	var h3, p, li;
			// 	var modules = u.qsa(".scene ul.library > li", response);
			// 	for(i = 0; module = modules[i]; i++) {
			//
			// 		h3 = u.qs("h3", module);
			// 		p = u.qs("p", module);
			//
			// 		li = u.ae(this, "li", {"class":"module"});
			// 		u.ae(li, h3);
			// 		u.ce(li);
			// 		li.clicked = function(event) {
			//
			// 		}
			//
			// 	}
			//
			// }
			//
			// u.request(this.module_list, "/docs");

			page.resized();
		}

		// scene is ready
		scene.ready();
	}
}
