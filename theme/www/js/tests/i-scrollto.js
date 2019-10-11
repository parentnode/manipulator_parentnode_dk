Util.Objects["scrollto"] = new function() {
	this.init = function(div) {

		var i, node;

		var main_toc_nodes = u.qsa("ul.toc li", div);
		for(i = 0; node = main_toc_nodes[i]; i++) {
			u.ce(node);
			node.clicked = function(event) {
				var id = this.url.split("#")[1];
				var to = u.qs("#"+id);
				u.bug("offset_y:" + parseInt(u.gcs(page, "padding-left")))
				u.scrollTo(window, {"node":to, "offset_x":parseInt(u.gcs(div, "padding-left")), "offset_y":100});
			}
		}


		var coord_nodes = u.qsa("ul.coords li", div);
		for(i = 0; node = coord_nodes[i]; i++) {
			u.ce(node);
			node.clicked = function(event) {

				if(u.hc(this, "top")) {
					u.scrollTo(window, {"x":0, "y": 0});
				}
				else if(u.hc(this, "middle")) {
					u.scrollTo(window, {"x":document.body.scrollWidth/2 - u.browserW()/2, "y": u.htmlH()/2 - u.browserH()/2});
				}
				else if(u.hc(this, "bottom")) {
					u.scrollTo(window, {"x":document.body.scrollWidth, "y": u.htmlH()});
				}

			}
		}


		var sub_toc_nodes = u.qsa(".scrollable .subtoc li");
		for(i = 0; node = sub_toc_nodes[i]; i++) {
			u.ce(node);
			node.clicked = function(event) {
				var id = this.url.split("#")[1];
				var to = u.qs("#"+id);

				u.scrollTo(window, {"node":to, "offset_x":parseInt(u.gcs(div, "padding-left")), "offset_y":100});
			}
		}
		
		window.scrollToCancelled = function() {
			u.bug("scrollToCancelled");
		}

		window.scrolledTo = function() {
			u.bug("scrolledTo");
		}
	}
}