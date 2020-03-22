Util.Modules["cookie"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var cookie_value1 = "value:_-./æøå";
		var cookie_value2 = "-./æøåvalue:_";
		var cookie_value3 = "-./ævalue:_øå";
		var cookie_value4 = "-.alu/æøåve:_";


		var regex_xStorage = new RegExp(cookie_value1);
		var regex_cookie = new RegExp(encodeURIComponent(cookie_value1));

		// Real old school cookies

		// save test cookie
		u.saveCookie("test", cookie_value1, {force:true});

		// set cookie on root to validate path settings are handled correctly
		u.saveCookie("test", cookie_value2, {path:"/", force:true});

		// save cookie
		if(regex_cookie.test(document.cookie)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveCookie (forced): correct"});
			div.test_results["u.saveCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.saveCookie (forced): error"});
			div.test_results["u.saveCookie"] = false;
		}


		// get cookie
		if(u.getCookie("test") == cookie_value1) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.getCookie (forced): correct"});
			div.test_results["u.getCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.getCookie (forced): error"});
			div.test_results["u.getCookie"] = false;
		}


		// delete cookie path cookie
		u.deleteCookie("test");
		// should get root cookie
		var root_cookie = u.getCookie("test");

		// delete root cookie
		u.deleteCookie("test", {"path":"/"});
		// should not have any value
		var no_cookie = u.getCookie("test");
		
		if(root_cookie == cookie_value2 && !no_cookie) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.deleteCookie (forced): correct"});
			div.test_results["u.deleteCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.deleteCookie (forced): error"});
			div.test_results["u.deleteCookie"] = false;
		}


		// localStorage "cookie"
		// save test cookie
		u.saveCookie("test", cookie_value1, {"expires":false});
		// saved cookie
		if(typeof(window.localStorage) == "object" && regex_xStorage.test(window.localStorage.test)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveCookie (localStorage/cookie): correct"});
			div.test_results["u.saveCookie"] = true;
		}
		else if(typeof(window.localStorage) != "object" && regex_cookie.test(document.cookie)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveCookie (localStorage/cookie): correct - fallback to cookie"});
			div.test_results["u.saveCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.saveCookie (localStorage/cookie): error"});
			div.test_results["u.saveCookie"] = false;
		}

		// get cookie
		if(u.getCookie("test") == cookie_value1) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.getCookie (localStorage/cookie): correct"});
			div.test_results["u.getCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.getCookie (localStorage/cookie): error"});
			div.test_results["u.getCookie"] = false;
		}

		// delete cookie
		u.deleteCookie("test");
		if(!u.getCookie("test")) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.deleteCookie (localStorage/cookie): correct"});
			div.test_results["u.deleteCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.deleteCookie (localStorage/cookie): error"});
			div.test_results["u.deleteCookie"] = false;
		}



		// sessionStorage "cookie"
		// save test cookie
		u.saveCookie("test", cookie_value1);

		// save cookie
		if(typeof(window.sessionStorage) == "object" && regex_xStorage.test(window.sessionStorage.test)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveCookie (sessionStorage/cookie): correct"});
			div.test_results["u.saveCookie"] = true;
		}
		else if(typeof(window.sessionStorage) != "object" && regex_cookie.test(document.cookie)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveCookie (sessionStorage/cookie): correct - fallback to cookie"});
			div.test_results["u.saveCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.saveCookie (sessionStorage/cookie): error"});
			div.test_results["u.saveCookie"] = false;
		}

		// get cookie
		if(u.getCookie("test") == cookie_value1) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.getCookie (sessionStorage/cookie): correct"});
			div.test_results["u.getCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.getCookie (sessionStorage/cookie): error"});
			div.test_results["u.getCookie"] = false;
		}


		// delete cookie
		u.deleteCookie("test");
		if(!u.getCookie("test")) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.deleteCookie (sessionStorage/cookie): correct"});
			div.test_results["u.deleteCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.deleteCookie (sessionStorage/cookie): error"});
			div.test_results["u.deleteCookie"] = false;
		}





		// node cookies
		var node_class = u.ae(page.cN, "div", {"class":"i:node node id:1234"});
		var node_id = u.ae(page.cN, "div", {"id":"nodeCookieTest"});
		var node = u.ae(page.cN, "div");

		// delete all node cookies
		u.deleteCookie("man_mem", {"path":"/"});

		// saveNodeCookie
		u.saveNodeCookie(node_class, "test", cookie_value1);
		u.saveNodeCookie(node_class, "test", cookie_value2);
		u.saveNodeCookie(node_class, "testtest", cookie_value1);
		u.saveNodeCookie(node_id, "test", cookie_value3);
		u.saveNodeCookie(node, "test", cookie_value4);

		var man_mem_cookie = JSON.parse(u.getCookie("man_mem"));
		if(man_mem_cookie["DIV#content DIV.i:node.node.id:1234"] && man_mem_cookie["DIV#content DIV.i:node.node.id:1234"]["test"] == cookie_value2 && man_mem_cookie["DIV#nodeCookieTest"].test == cookie_value3 && man_mem_cookie["DIV#content DIV"].test == cookie_value4) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.saveNodeCookie: correct"});
			div.test_results["u.saveNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.saveNodeCookie: error"});
			div.test_results["u.saveNodeCookie"] = false;
		}


		// getNodeCookie
		if(u.getNodeCookie(node_class, "test") == cookie_value2 && u.getNodeCookie(node_id, "test") == cookie_value3 && u.getNodeCookie(node, "test") == cookie_value4) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.getNodeCookie: correct"});
			div.test_results["u.getNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.getNodeCookie: error"});
			div.test_results["u.getNodeCookie"] = false;
		}


		// deleteNodeCookie
		u.deleteNodeCookie(node_class, "test");
		u.deleteNodeCookie(node_id);
		if(!u.getNodeCookie(node_class, "test") && u.getNodeCookie(node_class).testtest == cookie_value1 && !u.getNodeCookie(node_id) && u.getNodeCookie(node, "test") == cookie_value4) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.deleteNodeCookie: correct"});
			div.test_results["u.deleteNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.deleteNodeCookie: error"});
			div.test_results["u.deleteNodeCookie"] = false;
		}

		// clean up
		u.deleteNodeCookie(node_class);
		u.deleteNodeCookie(node_id);
		u.deleteNodeCookie(node);


	}

}