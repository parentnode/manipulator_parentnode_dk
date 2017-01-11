Util.Objects["request"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		//u.bug_console_only = false;

		var tests = u.qsa("div.test", div);
		var i, node;
		for(i = 0; node = tests[i]; i++) {

			node.response = function(response, request_id) {
				u.bug("response:" + this.url)
				if(response.isHTML && !this[request_id].request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
					u.ac(this, "testpassed");
					this.innerHTML = u.qs(".test", response).innerHTML

					div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
				}
				else if(response.isJSON && this[request_id].request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
					u.ac(this, "testpassed");
					this.innerHTML = response.test;

					div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
				}
				else {

					u.bug("error:" + response.isJSON + ":" + this.request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

					u.ac(this, "testfailed");
					this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";

					div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = false;
				}
			}
			node.responseError = function(response) {
				u.bug("error response:" + this.url)

				if(!this.shouldfail) {
					u.ac(this, "testfailed");
					div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = false;

					if(response.exception) {
						this.innerHTML += " EXCEPTION: " + response.exception;
					}
					else {
						this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
					}
				}
				else {
					u.ac(this, "testpassed");
					this.innerHTML += "This request is supposed to fail, XMLHTTPRequest outside domain";

					div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
				}
			}

			node._span = u.qs("span", node);
			node.url = node._span.innerHTML;
			node.method = u.cv(node, "method");
			node.data = u.f.getParams(node, (u.cv(node, "send") ? ({"send_as":u.cv(node, "send")}) : ""));
			node.async = u.cv(node, "async");
			node.headers = u.cv(node, "headers");
			node.shouldfail = u.cv(node, "shouldfail");

			var settings = {};
			if(node.method) {
				settings.method = node.method;
			}
			if(node.data) {
				settings.data = node.data;
			}
			if(node.async) {
				settings.async = node.async;
			}
			if(node.headers) {
				var h = node.headers.split(":");
				if(h.length > 1) {
					settings.headers = {};
					settings.headers[h[0]] = h[1];
				}
			}

			u.bug("request:" + node.url)
			u.request(node, node.url, settings);
		}

	}

}
