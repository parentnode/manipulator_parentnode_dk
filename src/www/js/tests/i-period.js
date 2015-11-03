Util.Objects["period"] = new function() {
	this.init = function(div) {

		div.test_results = {};
		

		// u.bug(u.period("m:s.u", {"seconds":13.31809}))
		// u.bug(u.period("m:s.t", {"seconds":13.323}))
		// u.bug(u.period("D", {"years":2}))
		// u.bug(u.period("H", {"months":4}))
		// u.bug(u.period("D", {"months":5}))
		// u.bug(u.period("D", {"seconds":20130002342234.234}))
		// u.bug(u.period("h", {"seconds":20130002342234.234}))
		// u.bug(u.period("m", {"seconds":20130002342234.234}))
		// u.bug(u.period("s", {"seconds":20130002342234.234}))
		// u.bug(u.period("t", {"seconds":20130002342234.234}))
		// u.bug(u.period("D h:m:s.t", {"seconds":2013034.234}))
		// u.bug(u.period("y-o-D", {"days":2013}))


		if(u.period("m:s.u", {"seconds":13.31809}) == "00:13.318") {
			u.ae(div, "div", {"class":"correct", "html":'u.period("m:s.u", {"seconds":13.31809}): correct'});
			div.test_results["u.period-1"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.period("m:s.u", {"seconds":13.31809}): error'});
			div.test_results["u.period-1"] = false;
		}


		if(u.period("D h:m:s.u", {"seconds":2013034.2347}) == "23 07:10:34.235") {
			u.ae(div, "div", {"class":"correct", "html": 'u.period("D h:m:s.u", {"seconds":2013034.234}): correct'});
			div.test_results["u.period-2"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.period("D h:m:s.u", {"seconds":2013034.234}): error'});
			div.test_results["u.period-2"] = false;
		}


		if(u.period("D", {"years":2}) == 730) {
			u.ae(div, "div", {"class":"correct", "html":'u.period("D", {"years":2}): correct'});
			div.test_results["u.period-3"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.period("D", {"years":2}): error'});
			div.test_results["u.period-3"] = false;
		}


		if(u.period("H", {"months":4}) == 2920) {
			u.ae(div, "div", {"class":"correct", "html":'u.period("H", {"months":4}): correct'});
			div.test_results["u.period-4"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":'u.period("H", {"months":4}): error'});
			div.test_results["u.period-4"] = false;
		}


	}

}