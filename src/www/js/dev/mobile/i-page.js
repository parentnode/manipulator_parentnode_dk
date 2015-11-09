u.bug_force = true;
u.bug_console_only = true;

Util.Objects["page"] = new function() {
	this.init = function(page) {

		// header reference
		page.hN = u.qs("#header");
		page.hN.service = u.qs(".servicenavigation", page.hN);

		// add logo to navigation
		page.logo = u.ie(page.hN, "a", {"class":"logo", "href":"/", "html":u.eitherOr(u.site_name, "Frontpage")});

		// content reference
		page.cN = u.qs("#content", page);

		// navigation reference
		page.nN = u.qs("#navigation", page);
		page.nN = u.ie(page.hN, page.nN);

		// footer reference
		page.fN = u.qs("#footer");
		// move li to #header .servicenavigation
		page.fN.service = u.qs(".servicenavigation", page.fN);


		// global resize handler 
		page.resized = function() {
			u.bug("resized")

			// adjust content height
			this.calc_height = u.browserH();
			this.calc_width = u.browserW();
			this.available_height = this.calc_height - page.hN.offsetHeight - page.fN.offsetHeight;

			u.as(page.cN, "min-height", "auto", false);
			if(page.available_height >= page.cN.offsetHeight) {
				u.as(page.cN, "minHeight", page.available_height+"px", false);
			}

			// forward resize event to current scene
			if(page.cN && page.cN.scene && typeof(page.cN.scene.resized) == "function") {
				page.cN.scene.resized();
			}

		}

		// global scroll handler 
		page.scrolled = function() {

			// forward scroll event to current scene
			if(page.cN && page.cN.scene && typeof(page.cN.scene.scrolled) == "function") {
				page.cN.scene.scrolled();
			}

		}

		// global orientationchange handler 
		page.orientationchanged = function() {

			// forward orientationchange event to current scene
			if(page.cN && page.cN.scene && typeof(page.cN.scene.orientationchanged) == "function") {
				page.cN.scene.orientationchanged();
			}
		}
		

		page.error = function(event) {
			alert("JavaScript error occured:\n\n" + event.message);
			return false;
		}


		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
//				u.bug("page ready")

			// page is ready to be shown - only initalize if not already shown
			if(!u.hc(this, "ready")) {

				// page is ready
				u.addClass(this, "ready");

				// set resize handler
				u.e.addEvent(window, "resize", page.resized);
				// set scroll handler
				u.e.addEvent(window, "scroll", page.scrolled);
				// set orientation change handler
				u.e.addEvent(window, "orientationchange", page.orientationchanged);


				// set error handler
				u.e.addEvent(window, "error", page.error);


				this.resized();

			}
		}


		// ready to start page builing process
		page.ready();

	}
}

u.e.addDOMReadyEvent(u.init);

