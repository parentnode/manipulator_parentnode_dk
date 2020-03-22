Util.Modules["url"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		if(!location.search) {
			location.href = location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param";
		}
		else {
			// u.bug("test1:" + u.getVar("test1"));
			// u.bug("test2:" + u.getVar("test2"));
			// u.bug("test3:" + u.getVar("test3"));
			// 
			// u.bug("test1 with url:" + u.getVar("test1", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param"));
			// u.bug("test2 with url:" + u.getVar("test2", location.href + "?test1=get_this&test2=get_that"));
			// u.bug("test3 with url:" + u.getVar("test3", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param"));


			// Using location.search

			if(u.getVar("test1") == "get_this" 
				&& u.getVar("test2") == "get_that" 
				&& !u.getVar("test3")
			) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.getVar (location.href): correct"});
				div.test_results["u.url-location"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.getVar (location.href): error"});
				div.test_results["u.url-location"] = false;
			}



			// Passing string
			var parameter_string = "test1=get_this&test2=get_that#test1=fake_param&test3=fake_param";

			if(
				u.getVar("test1", parameter_string) == "get_this" 
				&& u.getVar("test1", "?" + parameter_string) == "get_this" 
				&& u.getVar("test1", location.href + "?" + parameter_string) == "get_this"
				&& u.getVar("test2", "?" + parameter_string) == "get_that" 
				&& !u.getVar("test3", location.href + "?" + parameter_string)
			) {
				u.ae(div, "div", {"class":"testpassed", "html":"u.getVar (string): correct"});
				div.test_results["u.url-string"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.getVar (string): error"});
				div.test_results["u.url-string"] = false;
			}
		}
	}
}