Util.Objects["events"] = new function() {
	this.init = function(div) {


		// NESTED LINK TEST

		var level1 = u.qs(".level1");
		level1.div = div;

		var level2 = u.qs(".level2");
		level2.div = div;

		var level3 = u.qs(".level3");
		level3.div = div;

		var level4 = u.qs(".level4");
		level4.div = div;

		div.debug_1 = u.ae(div, "div", {"class":"debug"});
		div.insertBefore(div.debug_1, u.ns(level1));

		div.addDebug = function(target, message) {
			this[target].innerHTML += message + "<br>";
			this[target].scrollTop = this[target].scrollTop + 25;
		}

		u.e.click(level1);
		level1.clicked = function(event) {
			u.rc(this, "inputStarted");
			this.div.addDebug("debug_1", "level1 clicked");
		}


		u.e.hold(level2);
		level2.held = function(event) {
			this.div.addDebug("debug_1", "level2 held");
			// reset events in children, because hold can be invoked from any child
			u.e.resetNestedEvents(u.qs(".level4"));
		}

		u.e.dblclick(level2);
		level2.dblclicked = function(event) {
			this.div.addDebug("debug_1", "level2 dblclicked");
		}

		u.e.click(level2);
		level2.clicked = function(event) {
			this.div.addDebug("debug_1", "level2 clicked");
		}

		u.e.click(level3);
		level3.clicked = function(event) {
			this.div.addDebug("debug_1", "level3 clicked");
		}

		u.e.click(level4);
		level4.clicked = function(event) {
			this.div.addDebug("debug_1", "level4 clicked");
		}


		// EXTENDED LINK TEST

		var link = u.qs(".testlink");
		link.div = div;
		div.debug_2 = u.ae(div, "div", {"class":"debug"});

		u.e.hover(link, {"delay":1000});
		link.over = function(event) {
			u.ac(this, "over");
			this.div.addDebug("debug_2", "link over");
		}
		link.out = function(event) {
			u.rc(this, "over");
			this.div.addDebug("debug_2", "link out");
		}

		u.ce(link);
		link.clicked = function(event) {
			this.div.addDebug("debug_2", "link clicked");
		}
		link.moved = function(event) {
			this.div.addDebug("debug_2", "link moved:"+ this.current_x + ", " + this.current_xps);
		}
		link.inputStarted = function(event) {
			this.div.addDebug("debug_2", "level1 inputStarted");
		}
		link.clickCancelled = function(event) {
			this.div.addDebug("debug_2", "level1 clickCancelled");
		}

	}

}