Util.Modules["debug"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		// save u.bug settings
		var pre_bug_console_only = u.bug_console_only;
		var pre_bug_force = u.bug_force;
		u.bug_console_only = false;
		u.bug_force = true;


		var message_1 = "message 1";
		var message_2 = "message 2";
		var message_3 = "message 3";



		// u.debug
		u.bug(message_1, 1, "green");
		u.bug(message_1);
		u.bug(message_2, "red");
		u.bug(message_3, 2, "blue");
		var debug_0 = u.qsa(".debug_0 div");
		var debug_1 = u.qsa(".debug_1 div");
		var debug_2 = u.qsa(".debug_2 div");
		if(debug_0.length == 2 && debug_0[1].innerHTML == message_2 && debug_1[0].innerHTML == message_1 && debug_2[0].innerHTML == message_3) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.bug: correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.bug: error"});
		}



		// u.xInObject
		u.xInObject({"class":"fisk", "node":"frø"});
		var debug_0 = u.qsa(".debug_0 div");
		if(
			debug_0.length == 3 && 
			(
				debug_0[2].innerHTML == "--- start object ---\nclass=fisk\nnode=frø\n--- end object ---\n" ||
				// IE >= 8 will out output the \n
				debug_0[2].innerHTML == "--- start object --- class=fisk node=frø --- end object --- "
			)
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.xInObject: correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.xInObject: error"});
		}


		// u.nodeId
		if(u.nodeId(page, 1) == "BODY.tests->DIV#page" && u.nodeId(page) == "DIV#page" && u.nodeId(page.cN, 1) == "BODY.tests->DIV#page->DIV#content") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.nodeId: correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.nodeId: error"});
		}


		// clean up
		u.qs(".debug_0").parentNode.removeChild(u.qs(".debug_0"));
		u.qs(".debug_1").parentNode.removeChild(u.qs(".debug_1"));
		u.qs(".debug_2").parentNode.removeChild(u.qs(".debug_2"));

		// restore u.bug settings
		u.bug_console_only = pre_bug_console_only;
		u.bug_force = pre_bug_force;

	}
}
