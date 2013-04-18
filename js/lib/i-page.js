Util.Objects["page"] = new function() {
	this.init = function(page) {

		u.bug_force = true;

		// MAIN ELEMENTS
		// header element
		page.hN = u.qs("#header", page);
		page.hN.page = page;
		// content element
		page.cN = u.qs("#content", page);
		page.cN.page = page;

		// navigation element
		page.nN = u.qs("#navigation", page);
		if(page.nN) {
			// move navigation in front of content node in the DOM
			page.nN = page.hN.appendChild(page.nN);
			page.nN.page = page;
		}

		// footer element
		page.fN = u.qs("#footer", page);
		page.fN.page = page;
	}
}

u.e.addDOMReadyEvent(u.init);
