	Util.Objects["geometry"] = new function() {
		this.init = function(div) {

			div.test_results = {};

			var div_a = u.ae(document.body, "div", {"class":"div_a"});
			var div_b = u.ae(div_a, "div", {"class":"div_b"});


			// u.absX
			if(u.absX(div_b) == 300 && u.absX(div_a) == 250) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.absX: correct"});
				div.test_results["u.absX"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.absX: error"});
				div.test_results["u.absX"] = false;
			}


			// u.absY
			if(u.absY(div_b) == 355 && u.absY(div_a) == 300) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.absY: correct"});
				div.test_results["u.absY"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.absY: error"});
				div.test_results["u.absY"] = false;
			}


			// u.relX
			if(u.relX(div_b) == 50 && u.relX(div_a) == 250) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.relX: correct"});
				div.test_results["u.relX"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.relX: error"});
				div.test_results["u.relX"] = false;
			}


			// u.relY
			if(u.relY(div_b) == 55 && u.relY(div_a) == 300) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.relY: correct"});
				div.test_results["u.relY"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.relY: error"});
				div.test_results["u.relY"] = false;
			}


			// u.actualW
			if(u.actualW(div_b) == 100 && u.actualW(div_a) == 120) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.actualW: correct"});
				div.test_results["u.actualW"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.actualW: error"});
				div.test_results["u.actualW"] = false;
			}


			// u.actualH
			if(u.actualH(div_b) == 50 && u.actualH(div_a) == 70) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.actualH: correct"});
				div.test_results["u.actualH"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.actualH: error"});
				div.test_results["u.actualH"] = false;
			}


			var fake_event = {"clientX":50, "pageX":100, "clientY":125, "pageY":200};

			// u.eventX
			// Old IEs only have clientX/Y - which needs to be combined with scroll position to get pageX
			// add scrolling to perform test correctly
			u.as(document.body, "width", 6000+"px");
			u.as(document.body, "height", 6000+"px");
			window.scrollTo(50, 75);
			if(u.eventX(fake_event) == 100) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.eventX: correct"});
				div.test_results["u.eventX"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.eventX: error"});
				div.test_results["u.eventX"] = false;
			}
			u.as(document.body, "width", "auto");
			u.as(document.body, "height", "auto");
			window.scrollTo(0, 0);


			// u.eventX and u.eventY
			// Old IEs only have clientX/Y - which needs to be combined with scroll position to get pageX
			// add scrolling to perform test correctly
			u.as(document.body, "width", 6000+"px");
			u.as(document.body, "height", 6000+"px");
			window.scrollTo(50, 75);

			// u.eventX
			if(u.eventX(fake_event) == 100) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.eventX: correct"});
				div.test_results["u.eventX"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.eventX: error"});
				div.test_results["u.eventX"] = false;
			}


			// u.eventY
			if(u.eventY(fake_event) == 200) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.eventY: correct"});
				div.test_results["u.eventY"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.eventY: error"});
				div.test_results["u.eventY"] = false;
			}

			// restore browser
			u.as(document.body, "width", "auto");
			u.as(document.body, "height", "auto");
			window.scrollTo(0, 0);


			// u.browserW
			var browser_w;
			if(document.documentElement.clientWidth) {
				browser_w = document.documentElement.clientWidth;
			}
			else if(window.innerWidth) {
				browser_w = window.innerWidth;
			}
			else if(document.body.clientWidth) {
				browser_w = document.body.clientWidth;
			}
			if(u.browserW() == browser_w) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.browserW: correct"});
				div.test_results["u.browserW"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.browserW: error"});
				div.test_results["u.browserW"] = false;
			}


			// u.browserH
			var browser_h;
			if(document.documentElement.clientHeight) {
				browser_h = document.documentElement.clientHeight;
			}
			else if(window.innerHeight) {
				browser_h = window.innerHeight;
			}
			else if(document.body.clientHeight) {
				browser_h = document.body.clientHeight;
			}
			if(u.browserH() == browser_h) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.browserH: correct"});
				div.test_results["u.browserH"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.browserH: error"});
				div.test_results["u.browserH"] = false;
			}


			// u.htmlW
			var html_w = 50;
			u.as(document.body, "width", html_w+"px");
			if(u.htmlW() == html_w) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.htmlW: correct"});
				div.test_results["u.htmlW"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.htmlW: error"});
				div.test_results["u.htmlW"] = false;
			}
			u.as(document.body, "width", "auto");


			// u.htmlH
			var html_h = 75;
			u.as(document.body, "height", html_h+"px");
			if(u.htmlH() == html_h) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.htmlH: correct"});
				div.test_results["u.htmlH"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.htmlH: error"});
				div.test_results["u.htmlH"] = false;
			}
			u.as(document.body, "height", "auto");



			// u.scrollX
			// u.scrollY
			u.ass(document.body, {"width": 6000+"px", "height": 6000+"px"});


			div.scroll_x = 175;
			div.scroll_y = 75;
			window.scrollTo(div.scroll_x, div.scroll_y);


			// some phones take a little time to update the internal scrolling values
			// run the check with small delay
			div.check_scrolling = function() {

				// scroll_x
				if(u.scrollX() == this.scroll_x) {
					u.ae(this, "div", {"class":"testpassed", "html":"u.scrollX: correct"});
					this.test_results["u.scrollX"] = true;
				}
				else {
					u.ae(this, "div", {"class":"testfailed", "html":"u.scrollX: error"});
					this.test_results["u.scrollX"] = false;
				}

				// scroll_y
				if(u.scrollY() == this.scroll_y) {
					u.ae(this, "div", {"class":"testpassed", "html":"u.scrollY: correct"});
					this.test_results["u.scrollY"] = true;
				}
				else {
					u.ae(this, "div", {"class":"testfailed", "html":"u.scrollY: error"});
					this.test_results["u.scrollY"] = false;
				}

				// return document to original state
				u.ass(document.body, {"height": "auto", "width": "auto"});
				window.scrollTo(0, 0);

			}

			u.t.setTimer(div, div.check_scrolling, 200);



			// Cleanup
			div_a.parentNode.removeChild(div_a);

		}
	}