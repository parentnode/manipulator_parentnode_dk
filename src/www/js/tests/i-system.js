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

		// edge
		if(u.browser("edge")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Edge: correct ("+u.browser("edge")+")"});
			current_browser = "ie";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Edge: error ("+u.browser("edge")+")"});
		}

		// ie
		if(u.browser("ie") && u.browser("IE") && u.browser("explorer")) {
			u.ae(div, "div", {"class":"testpassed", "html":"IE: correct ("+u.browser("ie")+")"});
			current_browser = "ie";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"IE: error ("+u.browser("ie")+")"});
		}

		// Firefox
		if(u.browser("Firefox") && u.browser("Gecko")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Firefox: correct ("+u.browser("Firefox")+")"});
			current_browser = "Firefox";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Firefox: error ("+u.browser("Firefox")+")"});
		}

		// webkit
		if(u.browser("Webkit")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Webkit: correct ("+u.browser("Webkit")+")"});
			current_browser = "Webkit";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Webkit: error ("+u.browser("Webkit")+")"});
		}

		// Safari
		if(u.browser("Safari")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Safari: correct ("+u.browser("Safari")+")"});
			current_browser = "Safari";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Safari: error ("+u.browser("Safari")+")"});
		}

		// chrome
		if(u.browser("Chrome")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Chrome: correct ("+u.browser("Chrome")+")"});
			current_browser = "Chrome";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Chrome: error ("+u.browser("Chrome")+")"});
		}

		// opera
		if(u.browser("Opera")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Opera: correct ("+u.browser("Opera")+")"});
			current_browser = "Opera";
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Opera: error ("+u.browser("Opera")+")"});
		}


		if(current_browser) {


			// version detection
			u.ae(div, "h2", {"html":"Version"});

			u.ae(div, "div", {"class":"testpassed", "html":"Current browser model detected: " + current_browser});
			div.test_results["u.browser"] = true;


			if(u.browser(current_browser, u.browser(current_browser))) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version "+u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version "+u.browser(current_browser)});
			}

			// >= (greater than or equal)
			if(u.browser(current_browser, ">=" + u.browser(current_browser) )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " >= " + u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " >= " + u.browser(current_browser)});
			}

			// <= (less than or equal)
			if(u.browser(current_browser, "<=" + u.browser(current_browser) )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " <= " + u.browser(current_browser)});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " <= " + u.browser(current_browser)});
			}



			// testing against lower version
			var lower_version = u.browser(current_browser) - Math.ceil(u.browser(current_browser) / 4);

			// > (greater than)
			if(u.browser(current_browser, ">" + lower_version )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " > " + lower_version});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " > " + lower_version + ": error"});
			}

			// < (less than)
			if(!u.browser(current_browser, "<" + lower_version )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " !< " + lower_version});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " < " + lower_version + ": error"});
			}



			// testing against higher version
			var higher_version = Number(u.browser(current_browser)) + Math.ceil(u.browser(current_browser) / 4);

			// < (less than)
			if(u.browser(current_browser, "<" + higher_version )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " < " + higher_version});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " < " + higher_version + ": error"});
			}

			// > (greater than)
			if(!u.browser(current_browser, ">" + higher_version )) {
				u.ae(div, "div", {"class":"testpassed", "html":"Version " + u.browser(current_browser) + " !> " + higher_version});
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"Version " + u.browser(current_browser) + " > " + higher_version + ": error"});
			}


		}
		// current browser not detected
		else {

			u.ae(div, "div", {"class":"testfailed", "html":'Current browser NOT detected'});
			div.test_results["u.browser"] = false;

		}



		// System detection
		// u.system
		u.ae(div, "h2", {"html":"System"});
		u.ae(div, "p", {"html":"Only the correct system should be green"});

		// Windows
		if(u.system("windows")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Windows system: correct ("+u.system("windows")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Windows system: error ("+u.system("windows")+")"});
		}

		// Mac
		if(u.system("mac")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Mac system: correct ("+u.system("mac")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Mac system: error ("+u.system("mac")+")"});
		}

		// Android
		if(u.system("android")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Android system: correct ("+u.system("android")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Android system: error ("+u.system("android")+")"});
		}

		// Linux
		if(u.system("linux")) {
			u.ae(div, "div", {"class":"testpassed", "html":"Linux system: correct ("+u.system("linux")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Linux system: error ("+u.system("linux")+")"});
		}

		// iOS
		if(u.system("ios")) {
			u.ae(div, "div", {"class":"testpassed", "html":"iOS system: correct ("+u.system("ios")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"iOS system: error ("+u.system("ios")+")"});
		}



		// Feature detection
		u.ae(div, "h2", {"html":"Feature support"});

		div.opacitySupport = function() {
			if(
				u.browser("edge", ">=12") ||
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

		div.borderRadiusSupport = function() {
			if(
				u.browser("edge", ">=12") ||
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
				u.browser("edge", ">=12") ||
				u.browser("ie", ">=9") ||
				u.browser("firefox", ">=3.5") ||
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
				u.browser("edge", ">=12") ||
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
		// opacity
		if(u.support("opacity") && div.opacitySupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Opacity support: correct ("+u.support("opacity")+")"});
		}
		else if(!u.support("opacity") && !div.opacitySupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Opacity support: correct (no support)"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Opacity support: error ("+u.support("opacity")+")"});
		}

		// borderRadius
		if(u.support("border-radius") && u.support("borderRadius") && u.support("-webkit-border-radius") && u.support("MozBorderRadius") && div.borderRadiusSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"borderRadius support: correct ("+u.support("border-radius")+")"});
		}
		else if(!u.support("border-radius") && !div.borderRadiusSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"borderRadius support: correct (no support)"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"borderRadius support: error ("+u.support("opacity")+")"});
		}

		// Transform
		if(u.support("transform") && div.transformSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Transform support: correct ("+u.support("transform")+")"});
		}
		else if(!u.support("transform") && !div.transformSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Transform support: correct (no support)"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Transform support: error ("+u.support("transform")+")"});
		}

		// Transition
		if(u.support("transition") && div.transitionSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Transition support: correct ("+u.support("Transition")+")"});
		}
		else if(!u.support("transition") && !div.transitionSupport()) {
			u.ae(div, "div", {"class":"testpassed", "html":"Transition support: correct (no support)"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Transition support: error ("+u.support("Transition")+")"});
		}


		// vendor tools
		u.ae(div, "h2", {"html":"Vendor tools"});
		// vendorPrefix
		if(
			(u.vendorPrefix() == "webkit" && u.browser("webkit")) ||
			(u.vendorPrefix() == "Moz" && u.browser("firefox")) ||
			(u.vendorPrefix() == "ms" && u.browser("ie,edge")) ||
			(u.vendorPrefix() == "O" && u.browser("opera")) ||
			(!u.vendorPrefix())
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.vendorPrefix: correct ("+u.vendorPrefix()+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.vendorPrefix: error ("+u.vendorPrefix()+")"});
		}

		// vendorProperty
		if(u.vendorProperty("border-radius").match(/^(webkitB|MozB|OB|msB|b)orderRadius$/)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.vendorProperty(border-radius): correct ("+u.vendorProperty("border-radius")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.vendorProperty(border-radius): error ("+u.vendorProperty("border-radius")+")"});
		}

		if(u.vendorProperty("transform").match(/^(webkitT|MozT|OT|msT|t)ransform$/)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.vendorProperty(transform): correct ("+u.vendorProperty("transform")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.vendorProperty(transform): error ("+u.vendorProperty("transform")+")"});
		}

		if(u.vendorProperty("user-select").match(/^(webkitU|MozU|OU|msU|U)serSelect$/)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.vendorProperty(user-select): correct ("+u.vendorProperty("user-select")+")"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.vendorProperty(user-select): error ("+u.vendorProperty("user-select")+")"});
		}


	}

}