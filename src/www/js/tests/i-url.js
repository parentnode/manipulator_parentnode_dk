Util.Objects["url"] = new function() {
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

			if(u.getVar("test1") == "get_this" 
				&& u.getVar("test2") == "get_that" 
				&& !u.getVar("test3")

				&& u.getVar("test1", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param") == "get_this" 
				&& u.getVar("test2", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param") == "get_that" 
				&& !u.getVar("test3", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param")
			) {
				u.ae(div, "div", {"class":"correct", "html":"u.getVar: correct"});
				div.test_results["u.browser"] = true;
			}
			else {
				u.ae(div, "div", {"class":"error", "html":"u.getVar: error"});
				div.test_results["u.url"] = false;
			}
		}
	}
}