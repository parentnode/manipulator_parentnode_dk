var time = new Date().getTime();

Util.Modules["init"] = new function() {
	this.init = function(div) {

		div.test_results = {};


		load_time = new Date().getTime();


		if(!div.initialized) {
			div.initialized = true;
			var init_div = u.qs("div.init.error", div)
			init_div.parentNode.removeChild(init_div);

			u.ae(div, "div", {"class":"testpassed", "html":"Initialized: "+(load_time - time)});
			div.test_results["u.init"] = true;

		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"Multiple initializations"});
			div.test_results["u.init"] = false;
		}

	}

}
