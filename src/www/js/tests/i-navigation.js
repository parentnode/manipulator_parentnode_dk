Util.Objects["navigation"] = new function() {
	this.init = function(div) {

		u.navigation();

		page.cN.div = div;
		page.test_location = u.qs(".location", div);


		page.cN.navigate = function(url) {
			if(url.match(/^http\:/)) {
				location.href = url;
			}
			else {
				page.test_location.innerHTML = "page.cN.navigate: " + url;
			}
		}

		div.navigate = function(url) {
			
			page.test_location.innerHTML = "div: " + url;
		}

		var links = u.qsa("ul.links li", div);
		for(i = 0; link = links[i]; i++) {
			u.ce(link, {"type":"link"});
		}

	}
}