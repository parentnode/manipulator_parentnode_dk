Util.Modules["history"] = new function() {
	this.init = function(div) {


		page._location_1 = u.qs(".l1.location", div);
		page._location_2 = u.qs(".l2.location", div);
		page._location_3 = u.qs(".l3.location", div);
		page._location_4 = u.qs(".l4.location", div);


		var links = u.qsa("ul.links li", div);
		for(i = 0; link = links[i]; i++) {
			link.div = div;

			u.ce(link);
			link.clicked = function() {

				u.h.navigate(this.url);
			}
		}


		// Test multiple callback methods
		div.updated = function(url) {

			page._location_2.innerHTML = url;
		}
		page.updated = function(url) {

			page._location_1.innerHTML = url;
		}
		div.navigated = function(url) {

			page._location_3.innerHTML = url;
		}
		div.removed = function(url) {

			page._location_4.innerHTML = url;
		}

		
		u.h.addEvent(page, {"callback":"updated"});
		u.h.addEvent(div, {"callback":"updated"});
		u.h.addEvent(div, {"callback":"navigated"});

		u.h.addEvent(div, {"callback":"removed"});
		u.h.removeEvent(div, {"callback":"removed"});




		u.ae(div, "h2", {"html":"Helper methods"});

		// u.h.getCleanUrl
		var url = location.protocol +"//"+document.domain + "/tests/u-history";
		if(
			u.h.getCleanUrl("http://somedomain.dk/thank/you") == "http://somedomain.dk/thank/you" && 
			u.h.getCleanUrl(url, 1) == "/tests" && 
			u.h.getCleanUrl(url) == "/tests/u-history" &&
			u.h.getCleanUrl(url+"#hashsomething") == "/tests/u-history" &&
			u.h.getCleanUrl(url+"?param=something") == "/tests/u-history?param=something"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.h.getCleanUrl: correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.h.getCleanUrl: error"});
		}


		// u.h.getCleanHash
		if(
			u.h.getCleanHash("#/thank/you") == "/thank/you" && 
			u.h.getCleanHash("#/thank/you", 1) == "/thank" && 
			u.h.getCleanHash("#thank/you/for/crap") == "thank/you/for/crap"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.h.getCleanHash: correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.h.getCleanHash: error"});
		}


	}

}