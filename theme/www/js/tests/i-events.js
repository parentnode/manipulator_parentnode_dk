Util.Objects["events"] = new function() {
	this.init = function(div) {


		div.addDebug = function(target, message) {
			this[target].innerHTML += message + "<br>";
			this[target].scrollTop = this[target].scrollTop + 25;
		}


		// SIMPLE CLICK

		var simple = u.qs(".click_me");
		simple.div = div;

		div.debug_1 = u.ae(div, "div", {"class":"debug"});
		div.insertBefore(div.debug_1, u.ns(simple));


		u.e.click(simple);
		u.e.rightclick(simple);
		simple.inputStarted = function(event) {
			this.div.addDebug("debug_1", "simple inputStarted");
		}
		simple.clicked = function(event) {
			this.div.addDebug("debug_1", "simple clicked");
		}
		simple.rightclicked = function(event) {
			// u.e.kill(event);
			this.div.addDebug("debug_1", "simple rightclicked");
		}
		simple.moved = function(event) {
			this.div.addDebug("debug_1", "simple moved");
		}
		simple.clickCancelled = function(event) {
			this.div.addDebug("debug_1", "simple clickCancelled");
		}


		// NESTED LINK TEST

		var level1 = u.qs(".level1");
		level1.div = div;

		var level2 = u.qs(".level2");
		level2.div = div;

		var level3 = u.qs(".level3");
		level3.div = div;

		var level4 = u.qs(".level4");
		level4.div = div;

		div.debug_2 = u.ae(div, "div", {"class":"debug"});
		div.insertBefore(div.debug_2, u.ns(level1));


		u.e.click(level1);
		level1.clicked = function(event) {
			u.rc(this, "inputStarted");
			this.div.addDebug("debug_2", "level1 clicked");
		}


		u.e.hold(level2);
		level2.held = function(event) {
			this.div.addDebug("debug_2", "level2 held");
			// reset events in children, because hold can be invoked from any child
			u.e.resetNestedEvents(u.qs(".level4"));
		}

		u.e.dblclick(level2);
		level2.dblclicked = function(event) {
			this.div.addDebug("debug_2", "level2 dblclicked");
		}

		u.e.click(level2);
		level2.clicked = function(event) {
			this.div.addDebug("debug_2", "level2 clicked");
		}

		u.e.click(level3);
		level3.clicked = function(event) {
			this.div.addDebug("debug_2", "level3 clicked");
		}

		u.e.click(level4);
		level4.clicked = function(event) {
			this.div.addDebug("debug_2", "level4 clicked");
		}


		// EXTENDED LINK TEST

		var link = u.qs(".testlink");
		link.div = div;
		div.debug_3 = u.ae(div, "div", {"class":"debug"});

		u.e.hover(link, {"delay":1000});
		link.over = function(event) {
			u.ac(this, "over");
			this.div.addDebug("debug_3", "link over");
		}
		link.out = function(event) {
			u.rc(this, "over");
			this.div.addDebug("debug_3", "link out");
		}

		u.ce(link);
		link.clicked = function(event) {
			this.div.addDebug("debug_3", "link clicked");
		}
		link.moved = function(event) {
			this.div.addDebug("debug_3", "link moved:"+ this.current_x + ", " + this.current_xps);
		}
		link.inputStarted = function(event) {
			this.div.addDebug("debug_3", "level1 inputStarted");
		}
		link.clickCancelled = function(event) {
			this.div.addDebug("debug_3", "level1 clickCancelled");
		}

	}

}