Util.Modules["string"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		if(1 && "cutString") {

			// u.cutString
			var cutStringText = "This function will cut the string to the number of letter you'd like";
			if(u.cutString(cutStringText, 10) == "This fu...") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.cutString: correct"});
				div.test_results["u.cutString"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.cutString: error"});
				div.test_results["u.cutString"] = false;
			}

		}

		if(1 && "prefix") {

			// u.prefix
			if(u.prefix("F", 5, "-") == "----F" && u.prefix(10, 2) == "10" && u.prefix(1, 5) == "00001") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.prefix: correct"});
				div.test_results["u.prefix"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.prefix: error"});
				div.test_results["u.prefix"] = false;
			}

		}

		if(1 && "randomString") {

			// u.randomString
			if(u.randomString(10).length == 10) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.randomString: correct"});
				div.test_results["u.randomString"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.randomString: error"});
				div.test_results["u.randomString"] = false;
			}

		}

		if(1 && "uuid") {

			// u.uuid
			if(u.uuid().length == 36 && u.uuid().toString().match(/-/g).length == 4) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.uuid: correct"});
				div.test_results["u.uuid"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.uuid: error"});
				div.test_results["u.uuid"] = false;
			}

		}

		if(1 && "eitherOr") {

			// u.eitherOr
			if(u.eitherOr(0, "zero") == 0 && u.eitherOr(null, "zero") == "zero" && u.eitherOr("", "zero") == "" && u.eitherOr(undefined, "zero") == "zero" && u.eitherOr("test", "zero") == "test" && u.eitherOr({}, "zero") != "zero") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.eitherOr: correct"});
				div.test_results["u.eitherOr"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.eitherOr: error"});
				div.test_results["u.eitherOr"] = false;
			}

		}

		if(1 && "normalize") {

			// normalize
			var test_normalize = "hej æøå og ö ô Ä Ö%&€# med hest på";
			if(u.normalize(test_normalize) == "hej aeoeaa og o o A O percentandEUR# med hest paa") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.normalize: correct"});
				div.test_results["u.trim"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.normalize: error"});
				div.test_results["u.trim"] = false;
			}

		}

		if(1 && "superNormalize") {

			// superNormalize
			var test_normalize = "hej æøå og ö ô Ä Ö%&€# med hest  på";
			if(u.superNormalize(test_normalize) == "hej-aeoeaa-og-o-o-a-o-percentandeur-med-hest-paa") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.superNormalize: correct"});
				div.test_results["u.trim"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.superNormalize: error"});
				div.test_results["u.trim"] = false;
			}

		}

		if(1 && "stripTags") {

			// stripTags
			var test_strip_tags_1 = "hej <a href=''>æøå</a> og ö ô Ä Ö%&€# med hest  på";
			var test_strip_tags_2 = '<strong>København</strong> er så <a href="/">lækker</a>';
			if(
				u.stripTags(test_strip_tags_1) == "hej æøå og ö ô Ä Ö%&€# med hest  på" &&
				u.stripTags(test_strip_tags_2) == "København er så lækker"
			) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.stripTags: correct"});
				div.test_results["u.trim"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.stripTags: error"});
				div.test_results["u.trim"] = false;
			}

		}

		if(1 && "ucfirst") {

			// ucfirst
			var test_string = "test string";
			if(u.ucfirst(test_string) == "Test string") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.ucfirst: correct"});
				div.test_results["u.ucfirst"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.ucfirst: error"});
				div.test_results["u.ucfirst"] = false;
			}

		}

		if(1 && "lcfirst") {

			// lcfirst
			var test_string = "TEST STRING";
			if(u.lcfirst(test_string) == "tEST STRING") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.lcfirst: correct"});
				div.test_results["u.lcfirst"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.lcfirst: error"});
				div.test_results["u.lcfirst"] = false;
			}

		}

		if(1 && "isStringJSON") {

			// isStringJSON
			var test_string = '{"test":"hest"}';
			if(u.isStringJSON(test_string) && u.isStringJSON(test_string).test == "hest") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.isStringJSON: correct"});
				div.test_results["u.isStringJSON"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.isStringJSON: error"});
				div.test_results["u.isStringJSON"] = false;
			}

		}

		if(1 && "isStringHTML") {

			// isStringHTML
			var test_string = '<div class="test">hest</div>';
			if(u.isStringHTML(test_string) && u.qs(".test", u.isStringHTML(test_string)).innerHTML == "hest") {
				u.ae(div, "div", {"class":"testpassed", "html":"u.isStringHTML: correct"});
				div.test_results["u.isStringHTML"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.isStringHTML: error"});
				div.test_results["u.isStringHTML"] = false;
			}

		}

		if(1 && "trim") {

			// trim
			var test_trim = "\n	test string		\n";
			if(test_trim.trim() == "test string") {
				u.ae(div, "div", {"class":"testpassed", "html":"string.trim: correct"});
				div.test_results["u.trim"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"string.trim: error"});
				div.test_results["u.trim"] = false;
			}

		}


		if(1 && "substr") {

			// substr
			var test_substr = "test string";
			if(test_substr.substr(-2) == "ng" && test_substr.substr(2, 4) == "st s") {
				u.ae(div, "div", {"class":"testpassed", "html":"string.substr: correct"});
				div.test_results["u.substr"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"string.substr: error"});
				div.test_results["u.substr"] = false;
			}

		}


	}

}