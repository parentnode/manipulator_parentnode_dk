Util.Objects["history"] = new function() {
	this.init = function(div) {


		div._location = u.qs(".location", div);

		//
		div.navigate = function(url) {

			// popstate handling
			if(u.h.popstate) {
				history.pushState({}, url, url);
				this.updated(url);
			}
			// hash handling
			else {
				location.hash = u.h.getCleanUrl(url);
			}
		}
		//
		// 	u.bug("url:" + url)
		// //	this._location.innerHTML = u.h.getCleanUrl(url);
		//
		// 	// // popstate handling
		// 	// if(u.h.popstate) {
		// 	// 	history.pushState({}, url, url);
		// 	// 	div.updated(u.h.getCleanUrl(url));
		// 	// }
		// 	// // hash handling
		// 	// else {
		// 	// 	location.hash = u.h.getCleanUrl(url);
		// 	// }
		//
		// }

		var links = u.qsa("ul.links li", div);
		for(i = 0; link = links[i]; i++) {
			link.div = div;

			u.ce(link);
			link.clicked = function() {

				this.div.navigate(this.url);
			}
		}
		//
		//
		div.updated = function(url) {

			this._location.innerHTML = url;

		}

		
		u.h.catchEvent(div, div.updated);


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