u.bug_console_only = false;
u.bug_force = true;

Util.Objects["page"] = new function() {
	this.init = function(page) {

// 		window.page = page;
//
//
// 		// header reference
// 		page.hN = u.qs("#header");
// 		page.hN.service = u.qs(".servicenavigation", page.hN);
//
//
// 		// content reference
// 		page.cN = u.qs("#content", page);
//
//
// 		// navigation reference
// 		page.nN = u.qs("#navigation", page);
// 		page.nN = u.ie(page.hN, page.nN);
//
//
// 		// footer reference
// 		page.fN = u.qs("#footer");
// 		page.fN.service = u.qs(".servicenavigation", page.fN);
//
//
// 		// LOGO
// 		// add logo to navigation
// 		page.logo = u.ie(page.hN, "a", {"class":"logo", "html":"/", "html":u.eitherOr(u.site_name, "Frontpage")});
//
//
// 		// global resize handler
// 		page.resized = function() {
// 			u.bug("page resized")
//
// 			// adjust content height
// 			page.browser_h = u.browserH();
// 			page.browser_w = u.browserW();
// 			page.available_height = page.browser_h - page.hN.offsetHeight - page.fN.offsetHeight;
//
// 			u.as(page.cN, "min-height", "auto", false);
// 			if(page.available_height >= page.cN.offsetHeight) {
// 				u.as(page.cN, "minHeight", page.available_height+"px", false);
// 			}
//
// 			// forward resize event to current scene
// 			if(page.cN && page.cN.scene && typeof(page.cN.scene.resized) == "function") {
// 				page.cN.scene.resized();
// 			}
//
// 		}
//
// 		// global scroll handler
// 		page.scrolled = function() {
//
// 			page.scrolled_y = u.scrollY();
//
// 			// forward scroll event to current scene
// 			if(page.cN && page.cN.scene && typeof(page.cN.scene.scrolled) == "function") {
// 				page.cN.scene.scrolled();
// 			}
//
// 		}
//
//
// 		// Page is ready - called from several places, evaluates when page is ready to be shown
// 		page.ready = function() {
// //			u.bug("page ready")
//
// 			// page is ready to be shown - only initalize if not already shown
// 			if(!this.is_ready) {
//
// 				// page is ready
// 				this.is_ready = true;
//
// 				// set resize handler
// 				u.e.addEvent(window, "resize", page.resized);
// 				// set scroll handler
// 				u.e.addEvent(window, "scroll", page.scrolled);
//
// 				this.resized();
//
// 			}
// 		}
//
//
// 		// ready to start page builing process
// 		page.ready();

	}
}

u.e.addDOMReadyEvent(u.init);

