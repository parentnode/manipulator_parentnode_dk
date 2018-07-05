Util.Objects["math"] = new function() {
	this.init = function(div) {


		div.test_results = {};

		// u.random
		if(u.random(1,10) >= 1 && u.random(1,10) <= 10) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.random: correct"});
			div.test_results["u.f.random"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.random: error"});
			div.test_results["u.f.random"] = false;
		}

		// u.numToHex
		if(u.numToHex(255) == "ff" && u.numToHex(47) == "2f") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.numToHex: correct"});
			div.test_results["u.f.numToHex"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.numToHex: error"});
			div.test_results["u.f.numToHex"] = false;
		}

		// u.hexToNum
		if(u.hexToNum("ff") == 255 && u.hexToNum("0F") == 15) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.hexToNum: correct"});
			div.test_results["u.f.hexToNum"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.hexToNum: error"});
			div.test_results["u.f.hexToNum"] = false;
		}

		// u.round
		if(u.round(0.123456, 2) == 0.12 && u.round(0.1234567, 5) == 0.12346) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.round: correct"});
			div.test_results["u.f.round"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.round: error"});
			div.test_results["u.f.round"] = false;
		}

	}

}