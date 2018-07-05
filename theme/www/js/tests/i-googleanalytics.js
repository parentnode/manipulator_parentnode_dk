// enable tracking on dev domains
u.ga_domain = 'auto';

Util.Objects["googleanalytics"] = new function() {
	this.init = function(div) {


		var tests = u.ae(div, "div", {"class":"tests"});



		// u.ce
		var bn_event_ce1 = u.ae(tests, "div", {"id":"bn_event_ce1", "html":'<a href="/ce1">click (category: TEST CLICKING - u.ce, label: /front)</a>', "class":"test"});
		u.ce(bn_event_ce1, {"eventCategory":"TEST CLICKING - u.ce", "hitCallback":function() {u.ac(u.qs("#bn_event_ce1"), "testpassed")}});

		var bn_event_ce2 = u.ae(tests, "a", {"id":"bn_event_ce2", "href":"/ce2", "html":"click (category: TEST CLICKING - u.ce, label: /front)", "class":"test"});
		u.ce(bn_event_ce2, {"eventCategory":"TEST CLICKING - u.ce", "hitCallback":function() {u.ac(u.qs("#bn_event_ce2"), "testpassed")}});



		// u.e.clicks with different event details
		var bn_event_click1 = u.ae(tests, "div", {"id":"bn_event_click1", "html":"click (category: TEST CLICKING - u.e.click)", "class":"test"});
		u.e.click(bn_event_click1, {"eventCategory":"TEST CLICKING - u.e.click", "hitCallback":function() {u.ac(u.qs("#bn_event_click1"), "testpassed")}});

		var bn_event_click2 = u.ae(tests, "div", {"id":"bn_event_click2", "html":"click (category: [default: Uncategorized])", "class":"test"});
		u.e.click(bn_event_click2, {"hitCallback":function() {u.ac(u.qs("#bn_event_click2"), "testpassed")}});



		// Hold
		var bn_event_hold = u.ae(tests, "div", {"id":"bn_event_hold", "html":"hold (category: TEST HOLDING - u.e.hold)", "class":"test"});
		u.e.hold(bn_event_hold, {"eventCategory":"TEST HOLDING - u.e.hold", "hitCallback":function() {u.ac(u.qs("#bn_event_hold"), "testpassed")}});



		// DblClick
		var bn_event_dbl = u.ae(tests, "div", {"id":"bn_event_dbl", "html":"dblclick (category: TEST DBLCLICKING - u.e.dblclick)", "class":"test"});
		u.e.dblclick(bn_event_dbl, {"eventCategory":"TEST DBLCLICKING - u.e.dblclick", "hitCallback":function() {u.ac(u.qs("#bn_event_dbl"), "testpassed")}});



		// Drop (drag)
		var bn_event_drop = u.ae(tests, "div", {"id":"bn_event_drop", "class":"test"});
		var bn_event_drop_drag = u.ae(bn_event_drop, "span", {"html":"drag text (category: TEST DROPPING - u.e.drag)"});
		u.e.drag(bn_event_drop_drag, bn_event_drop, {"eventCategory":"TEST DROPPING - u.e.drag", "hitCallback":function() {u.ac(u.qs("#bn_event_drop"), "testpassed")}});



		// Swipe
		var bn_event_swipe = u.ae(tests, "div", {"id":"bn_event_swipe", "html":"swipe in area (category: TEST SWIPING - u.e.swipe)", "class":"test"});
		u.e.swipe(bn_event_swipe, bn_event_swipe, {"eventCategory":"TEST SWIPING - u.e.swipe", "hitCallback":function() {
			var node = u.qs("#bn_event_swipe");
			if(node.sw_left && node.sw_right && node.sw_up && node.sw_down) {
				u.ac(node, "testpassed");
			}
		}});
		bn_event_swipe.swipedLeft = function() {this.sw_left = true; this.innerHTML += "<br>SwipedLeft"};
		bn_event_swipe.swipedRight = function() {this.sw_right = true; this.innerHTML += "<br>SwipedRight"};
		bn_event_swipe.swipedUp = function() {this.sw_up = true; this.innerHTML += "<br>SwipedUp"};
		bn_event_swipe.swipedDown = function() {this.sw_down = true; this.innerHTML += "<br>SwipedDown"};


	}

}
