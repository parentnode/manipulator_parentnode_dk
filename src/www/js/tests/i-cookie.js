Util.Objects["cookie"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var cookie_value1 = "value:_-./æøå";
		var cookie_value2 = "-./æøåvalue:_";
		var cookie_value3 = "-./ævalue:_øå";
		var cookie_value4 = "-.alu/æøåve:_";


		// save test cookie
		u.saveCookie("test", cookie_value1);
		var regex = new RegExp(encodeURIComponent(cookie_value1));

		// set cookie on root to validate path settings are handled correctly
		u.saveCookie("test", cookie_value2, {"path":"/"});


		// save cookie
		if(regex.test(document.cookie)) {
			u.ae(div, "div", {"class":"correct", "html":"u.saveCookie: correct"});
			div.test_results["u.saveCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.saveCookie: error"});
			div.test_results["u.saveCookie"] = false;
		}


		// get cookie
		if(u.getCookie("test") == cookie_value1) {
			u.ae(div, "div", {"class":"correct", "html":"u.getCookie: correct"});
			div.test_results["u.getCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.getCookie: error"});
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
			u.ae(div, "div", {"class":"correct", "html":"u.deleteCookie: correct"});
			div.test_results["u.deleteCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.deleteCookie: error"});
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
		if(man_mem_cookie["DIV#content DIV.i:node node id:1234"]["test"] == cookie_value2 && man_mem_cookie["DIV#nodeCookieTest"].test == cookie_value3 && man_mem_cookie["DIV#content DIV"].test == cookie_value4) {
			u.ae(div, "div", {"class":"correct", "html":"u.saveNodeCookie: correct"});
			div.test_results["u.saveNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.saveNodeCookie: error"});
			div.test_results["u.saveNodeCookie"] = false;
		}


		// getNodeCookie
		if(u.getNodeCookie(node_class, "test") == cookie_value2 && u.getNodeCookie(node_id, "test") == cookie_value3 && u.getNodeCookie(node, "test") == cookie_value4) {
			u.ae(div, "div", {"class":"correct", "html":"u.getNodeCookie: correct"});
			div.test_results["u.getNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.getNodeCookie: error"});
			div.test_results["u.getNodeCookie"] = false;
		}


		// deleteNodeCookie
		u.deleteNodeCookie(node_class, "test");
		u.deleteNodeCookie(node_id);
		if(!u.getNodeCookie(node_class, "test") && u.getNodeCookie(node_class).testtest == cookie_value1 && !u.getNodeCookie(node_id) && u.getNodeCookie(node, "test") == cookie_value4) {
			u.ae(div, "div", {"class":"correct", "html":"u.deleteNodeCookie: correct"});
			div.test_results["u.deleteNodeCookie"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.deleteNodeCookie: error"});
			div.test_results["u.deleteNodeCookie"] = false;
		}

		// clean up
		u.deleteNodeCookie(node_class);
		u.deleteNodeCookie(node_id);
		u.deleteNodeCookie(node);


	}

}