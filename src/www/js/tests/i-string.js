Util.Objects["string"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		// u.cutString
		var cutStringText = "This function will cut the string to the number of letter you'd like";
		if(u.cutString(cutStringText, 10) == "This fu...") {
			u.ae(div, "div", {"class":"correct", "html":"u.cutString: correct"});
			div.test_results["u.cutString"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.cutString: error"});
			div.test_results["u.cutString"] = false;
		}

		// u.prefix
		if(u.prefix("F", 5, "-") == "----F" && u.prefix(10, 2) == "10" && u.prefix(1, 5) == "00001") {
			u.ae(div, "div", {"class":"correct", "html":"u.prefix: correct"});
			div.test_results["u.prefix"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.prefix: error"});
			div.test_results["u.prefix"] = false;
		}

		// u.randomString
		if(u.randomString(10).length == 10) {
			u.ae(div, "div", {"class":"correct", "html":"u.randomString: correct"});
			div.test_results["u.randomString"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.randomString: error"});
			div.test_results["u.randomString"] = false;
		}

		// u.uuid
		if(u.uuid().length == 36 && u.uuid().toString().match(/-/g).length == 4) {
			u.ae(div, "div", {"class":"correct", "html":"u.uuid: correct"});
			div.test_results["u.uuid"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.uuid: error"});
			div.test_results["u.uuid"] = false;
		}

		// u.eitherOr
		if(u.eitherOr(0, "zero") == 0 && u.eitherOr(null, "zero") == "zero" && u.eitherOr("", "zero") == "" && u.eitherOr(undefined, "zero") == "zero" && u.eitherOr("test", "zero") == "test" && u.eitherOr({}, "zero") != "zero") {
			u.ae(div, "div", {"class":"correct", "html":"u.eitherOr: correct"});
			div.test_results["u.eitherOr"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.eitherOr: error"});
			div.test_results["u.eitherOr"] = false;
		}

		// u.stringOr
		// if(u.stringOr("", "zero") == "" && u.stringOr(0, "zero") == 0 && u.stringOr(null, "zero") == "zero" && u.stringOr(undefined, "zero") == "zero") {
		// 	u.ae(div, "div", ({"class":"correct"})).innerHTML = "stringOr: correct";
		// }
		// else {
		// 	u.ae(div, "div", ({"class":"error"})).innerHTML = "stringOr: error";
		// }


		// trim
		var test_trim = "\n	test string		\n";
		if(test_trim.trim() == "test string") {
			u.ae(div, "div", {"class":"correct", "html":"u.trim: correct"});
			div.test_results["u.trim"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.trim: error"});
			div.test_results["u.trim"] = false;
		}

		// substr
		var test_substr = "test string";
		if(test_substr.substr(-2) == "ng" && test_substr.substr(2, 4) == "st s") {
			u.ae(div, "div", {"class":"correct", "html":"u.substr: correct"});
			div.test_results["u.substr"] = true;
		}
		else {
			u.ae(div, "div", {"class":"error", "html":"u.substr: error"});
			div.test_results["u.substr"] = false;
		}

	}

}