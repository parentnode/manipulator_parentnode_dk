Util.Objects["system"] = new function() {
	this.init = function(div) {


		div.test_results = {};

		var current_browser = false;

		// show current useragent
		u.ae(div, "h2", {"html":"UserAgent"});
		u.ae(div, "p", {"html":navigator.userAgent});


		// Model detection
		u.ae(div, "h2", {"html":"Model"});
		u.ae(div, "p", {"html":"Only the correct browser should be green"});

		// ie
		if(u.browser("ie") && u.browser("IE") && u.browser("explorer")) {
			u.ae(div, "div", {"class":"correct", "html":"IE: correct ("+u.browser("ie")+")"});
			current_browser = "ie";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"IE: error ("+u.browser("ie")+")"});
		}

		// Firefox
		if(u.browser("Firefox") && u.browser("Gecko")) {
			u.ae(div, "div", {"class":"correct", "html":"Firefox: correct ("+u.browser("Firefox")+")"});
			current_browser = "Firefox";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Firefox: error ("+u.browser("Firefox")+")"});
		}

		// webkit
		if(u.browser("Webkit")) {
			u.ae(div, "div", {"class":"correct", "html":"Webkit: correct ("+u.browser("Webkit")+")"});
			current_browser = "Webkit";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Webkit: error ("+u.browser("Webkit")+")"});
		}

		// Safari
		if(u.browser("Safari")) {
			u.ae(div, "div", {"class":"correct", "html":"Safari: correct ("+u.browser("Safari")+")"});
			current_browser = "Safari";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Safari: error ("+u.browser("Safari")+")"});
		}

		// chrome
		if(u.browser("Chrome")) {
			u.ae(div, "div", {"class":"correct", "html":"Chrome: correct ("+u.browser("Chrome")+")"});
			current_browser = "Chrome";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Chrome: error ("+u.browser("Chrome")+")"});
		}

		// opera
		if(u.browser("Opera")) {
			u.ae(div, "div", {"class":"correct", "html":"Opera: correct ("+u.browser("Opera")+")"});
			current_browser = "Opera";
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Opera: error ("+u.browser("Opera")+")"});
		}


		if(current_browser) {


			// version detection
			u.ae(div, "h2", {"html":"Version"});

			u.ae(div, "div", {"class":"correct", "html":"Current browser model detected: " + current_browser});
			div.test_results["u.browser"] = true;


			if(u.browser(current_browser, u.browser(current_browser))) {
				u.ae(div, "div", {"class":"correct", "html":"Version "+u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version "+u.browser(current_browser)});
			}

			// >= (greater than or equal)
			if(u.browser(current_browser, ">=" + u.browser(current_browser) )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " >= " + u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " >= " + u.browser(current_browser)});
			}

			// <= (less than or equal)
			if(u.browser(current_browser, "<=" + u.browser(current_browser) )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " <= " + u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " <= " + u.browser(current_browser)});
			}



			// testing against lower version
			var lower_version = u.browser(current_browser) - Math.ceil(u.browser(current_browser) / 4);

			// > (greater than)
			if(u.browser(current_browser, ">" + lower_version )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " > " + lower_version});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " > " + lower_version + ": error"});
			}

			// < (less than)
			if(!u.browser(current_browser, "<" + lower_version )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " !< " + lower_version});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " < " + lower_version + ": error"});
			}



			// testing against higher version
			var higher_version = Number(u.browser(current_browser)) + Math.ceil(u.browser(current_browser) / 4);

			// < (less than)
			if(u.browser(current_browser, "<" + higher_version )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " < " + higher_version});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " < " + higher_version + ": error"});
			}

			// > (greater than)
			if(!u.browser(current_browser, ">" + higher_version )) {
				u.ae(div, "div", {"class":"correct", "html":"Version " + u.browser(current_browser) + " !> " + higher_version});
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"Version " + u.browser(current_browser) + " > " + higher_version + ": error"});
			}


		}
		// current browser not detected
		else {

			u.ae(div, "div", {"class":"error", "html":'Current browser NOT detected'});
			div.test_results["u.browser"] = false;

		}



		// System detection
		// u.system
		u.ae(div, "h2", {"html":"System"});
		u.ae(div, "p", {"html":"Only the correct system should be green"});

		// Windows
		if(u.system("windows")) {
			u.ae(div, "div", {"class":"correct", "html":"Windows system: correct ("+u.system("windows")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Windows system: error ("+u.system("windows")+")"});
		}

		// Mac
		if(u.system("mac")) {
			u.ae(div, "div", {"class":"correct", "html":"Mac system: correct ("+u.system("mac")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Mac system: error ("+u.system("mac")+")"});
		}

		// Android
		if(u.system("android")) {
			u.ae(div, "div", {"class":"correct", "html":"Android system: correct ("+u.system("android")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Android system: error ("+u.system("android")+")"});
		}

		// Linux
		if(u.system("linux")) {
			u.ae(div, "div", {"class":"correct", "html":"Linux system: correct ("+u.system("linux")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Linux system: error ("+u.system("linux")+")"});
		}

		// iOS
		if(u.system("ios")) {
			u.ae(div, "div", {"class":"correct", "html":"iOS system: correct ("+u.system("ios")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"iOS system: error ("+u.system("ios")+")"});
		}



		// Feature detection
		u.ae(div, "h2", {"html":"Feature support"});

		div.opacitySupport = function() {
			if(
				u.browser("ie", ">=9") ||
				u.browser("firefox", ">=2") ||
				u.browser("chrome", ">=4") ||
				u.browser("safari", ">=3") ||
				u.browser("opera", ">=10")
			) {
				return true;
			}
			return false;
		}

		div.transformSupport = function() {
			if(
				u.browser("ie", ">=9") ||
				u.browser("firefox", ">=4") ||
				u.browser("chrome", ">=4") ||
				u.browser("safari", ">=3") ||
				u.browser("opera", ">=11")
			) {
				return true;
			}
			return false;
		}

		div.transitionSupport = function() {
			if(
				u.browser("ie", ">=10") ||
				u.browser("firefox", ">=4") ||
				u.browser("chrome", ">=4") ||
				u.browser("safari", ">=3") ||
				u.browser("opera", ">=11")
			) {
				return true;
			}
			return false;
		}

		// u.support
		if(u.support("opacity") && div.opacitySupport()) {
			u.ae(div, "div", {"class":"correct", "html":"Opacity support: correct ("+u.support("opacity")+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Opacity support: error ("+u.support("opacity")+")"});
		}

		if(u.support(u.a.vendor("Transform")) && div.transformSupport()) {
			u.ae(div, "div", {"class":"correct", "html":"Transform support: correct ("+u.support(u.a.vendor("Transform"))+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Transform support: error ("+u.support(u.a.vendor("Transform"))+")"});
		}

		if(u.support(u.a.vendor("Transition")) && div.transitionSupport()) {
			u.ae(div, "div", {"class":"correct", "html":"Transition support: correct ("+u.support(u.a.vendor("Transition"))+")"});
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"Transition support: error ("+u.support(u.a.vendor("Transition"))+")"});
		}


	}

}