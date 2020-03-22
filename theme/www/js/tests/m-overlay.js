Util.Modules["overlay"] = new function() {
	this.init = function(div) {

		// Default overlay
		var no_params = u.qs("li.default", div);
		u.ce(no_params);

		no_params.clicked = function() {
			u.overlay();
		}

		// Small overlay (300px)
		var small = u.qs("li.small", div);
		u.ce(small);

		small.clicked = function() {
			u.overlay({title:"small", width:300, height:300});
		}

		// Large overlay (600px)
		var large = u.qs("li.large", div);
		u.ce(large);

		large.clicked = function() {
			u.overlay({title:"large", width:600, height:600});
		}

		// Overlay with no drag
		var no_drag = u.qs("li.nodrag", div);
		u.ce(no_drag);

		no_drag.clicked = function() {
			u.overlay({"title":"No drag", "drag":false, "class":"nodrag"});
		}

		// Overflow unset width and height
		var overflow = u.qs("li.overflow", div);
		u.ce(overflow);

		overflow.clicked = function() {
			var overlay = u.overlay({"title":"Overflow"});
			var overflow = u.ae(overlay.div_content, "div", {class:"overflow"});
			overflow.innerHTML = "Content"
		}

		// Overflow unset width and height
		var overflow_autoheight = u.qs("li.overflow_autoheight", div);
		u.ce(overflow_autoheight);

		overflow_autoheight.clicked = function() {
			var overlay = u.overlay({"title":"Overflow with content_scroll", "content_scroll":true});
			var overflow = u.ae(overlay.div_content, "div", {class:"overflow"});
			overflow.innerHTML = "Content"
		}

	}
}