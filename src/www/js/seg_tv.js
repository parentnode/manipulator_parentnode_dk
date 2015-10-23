/*
Manipulator v0.9 Copyright 2015 http://manipulator.parentnode.dk
js-merged @ 2015-10-23 01:14:29
*/

/*seg_tv_include.js*/

/*seg_tv_include.js*/


/*i-documentation-desktop_light.js*/
Util.Objects["docpage"] = new function() {
	this.init = function(scene) {
		var i, func;
		var header, body;
		var sections = u.qsa(".section", scene);
		var functions = u.qsa(".function", scene);
		for(i = 0; func = functions[i]; i++) {
			func._header = u.qs(".header", func);
			func._header._func = func;
			func._body = u.qs(".body", func);
			u.as(func._body, "display", "none");
			func._body._func = func;
			u.e.click(func._header);
			func._header.clicked = function(event) {
				if(u.hc(this._func, "open")) {
					u.deleteNodeCookie(this._func, "state");
					u.as(this._func._body, "display", "none");
					u.rc(this._func, "open");
				}
				else {
					u.saveNodeCookie(this._func, "state", "open");
					u.as(this._func._body, "display", "block");
					u.ac(this._func, "open");
				}
			}
			if(u.getNodeCookie(func, "state") == "open") {
				func._header.clicked();
			}
		}
		if(location.hash) {
			var selected_function = u.ge(location.hash.replace("#", ""))
			if(selected_function) {
				if(!u.hc(selected_function, "open")) {
					selected_function._header.clicked();
				}
				window.scrollTo(0, u.absY(selected_function));
			}
		}
		scene._files = u.qs("div.includefiles", scene);
		if(scene._files) {
			scene._files._header = u.qs("div.header", scene._files);
			scene._files._header._files = scene._files;
			scene._files._body = u.qs("div.body", scene._files);
			u.as(scene._files._body, "display", "none");
			scene._files._body._files = scene._files;
			u.e.click(scene._files._header);
			scene._files._header.clicked = function(event) {
				if(u.hc(this._files, "open")) {
				u.as(this._files._body, "display", "none");
					u.rc(this._files, "open");
				}
				else {
					u.as(this._files._body, "display", "block");
					u.ac(this._files, "open");
				}
			}
		}
		scene._segments = u.qs("div.segmentsupport", scene);
		if(scene._segments) {
			scene._segments._header = u.qs("div.header", scene._segments);
			scene._segments._header._segments = scene._segments;
			scene._segments._body = u.qs("div.body", scene._segments);
			u.as(scene._segments._body, "display", "none");
			scene._segments._body._segments = scene._segments;
			u.e.click(scene._segments._header);
			scene._segments._header.clicked = function(event) {
				if(u.hc(this._segments, "open")) {
				u.as(this._segments._body, "display", "none");
					u.rc(this._segments, "open");
				}
				else {
					u.as(this._segments._body, "display", "block");
					u.ac(this._segments, "open");
				}
			}
		}
	}
}
