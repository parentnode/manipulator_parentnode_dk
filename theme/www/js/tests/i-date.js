Util.Objects["date"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		// u.bug(u.date("Y-m-d"));
		// u.bug(u.date("Y-m-d", 1331809993423));
		// u.bug(u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"));
		// u.bug(u.date("Y-m-d", "Thu Mar 12 2012 12:13:36 GMT+0100 (CET)"));


		if(u.date("Y-m-d", 1331809993423) == "2012-03-15") {
			u.ae(div, "div", {"class":"testpassed", "html":'u.date("Y-m-d", 1331809993423): correct'});
			div.test_results["u.date 1"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":'u.date("Y-m-d", 1331809993423): error'});
			div.test_results["u.date 1"] = false;
		}


		if(u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012") == "2012-03-10") {
			u.ae(div, "div", {"class":"testpassed", "html":'u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"): correct'});
			div.test_results["u.date 2"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":'u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"): error'});
			div.test_results["u.date 2"] = false;
		}


		if(u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)") == "2012-03-12") {
			u.ae(div, "div", {"class":"testpassed", "html":'u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)"): correct'});
			div.test_results["u.date 3"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":'u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)"): error'});
			div.test_results["u.date 3"] = false;
		}


		if(u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]) == "Mar 15, 2012") {
			u.ae(div, "div", {"class":"testpassed", "html":'u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]): correct'});
			div.test_results["u.date 4"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":'u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]): error'});
			div.test_results["u.date 4"] = false;
		}


	}

}