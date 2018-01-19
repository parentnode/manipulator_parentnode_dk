Util.Objects["request"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		//u.bug_console_only = false;
		// do one test at the time - making this many requests simultaneous will freeze most browsers and test will fail
		div.performNextTest = function() {


			var node = u.qs("div.waiting", this);
			if(node) {

				node.div = this;

				node.response = function(response, request_id) {
					// u.bug("response:" + this.url);
					// console.log(response);
//					console.log(this[request_id])
	//				console.log(this)
					// u.bug("request_id:" + request_id);
					// u.bug("this[request_id].request_url:" + this[request_id].request_url);
	//				console.log(u.qs("input", this))
	//				return;

					u.rc(this, "waiting");

					// catch timeout response on request that should not time out
					if(this.timeout && !u.qs("input", this)) {

						u.ac(this, "testfailed");
						this.innerHTML += " - async:" + u.cv(this, "async") + " - method:" + u.cv(this, "method") + " - send:" + u.cv(this, "send") + " - timeout:" + u.cv(this, "timeout") + " - responded twice";

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = false;

					}
					else if(!this.shouldtimeout && response.isHTML && !this[request_id].request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = u.qs(".test", response).innerHTML

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
					}
					else if(!this.shouldtimeout && response.isJSON && this[request_id].request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = response.test;

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
					}
					else {

						u.bug("error:" + response.isJSON + ":" + this[request_id].request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

						u.ac(this, "testfailed");
						this.innerHTML += " - async:" + u.cv(this, "async") + " - method:" + u.cv(this, "method") + " - send:" + u.cv(this, "send") + " - timeout:" + u.cv(this, "timeout") + " - request invalid";

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = false;
					}

					this.div.performNextTest();
				}

				node.responseError = function(response, request_id) {
					// u.bug("error response:" + this.url)
					// console.log(response)

					u.rc(this, "waiting");

					// console.log(this[request_id])
					// console.log(this)

					if(this.shouldfail) {
						u.ac(this, "testpassed");
						this.innerHTML = "This request is supposed to fail, XMLHTTPRequest outside domain";

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = true;
					}
					else if(this.shouldtimeout) {
						u.ac(this, "testpassed");
						this.innerHTML = "This request is supposed to timeout";

						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+", "+this.timeout+") "] = true;
					}
					else {
						u.ac(this, "testfailed");
						div.test_results["u.request ("+this.url+", "+this.method+", "+typeof(this.params)+", "+typeof(this.headers)+", "+this.async+") "] = false;
						
						if(response.exception) {
							this.innerHTML = " EXCEPTION: " + response.exception;
						}
						else {
							this.innerHTML = (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
						}
					}

					this.div.performNextTest();
				}

				node._span = u.qs("span", node);
				node.__url = node._span.innerHTML;
				node.__method = u.cv(node, "method");
				node.__data = u.f.getParams(node, (u.cv(node, "send") ? ({"send_as":u.cv(node, "send")}) : ""));
				node.__async = u.cv(node, "async") == "false" ? false : true;
				node.__timeout = u.cv(node, "timeout") ? Number(u.cv(node, "timeout")) : false;
				node.__headers = u.cv(node, "headers");
				node.__credentials = u.cv(node, "credentials");

				node.shouldfail = u.cv(node, "shouldfail");
				node.shouldtimeout = u.cv(node, "shouldtimeout");
				node.shouldnottimeout = (node.timeout && !node.shouldtimeout);


				var settings = {};
				if(node.__method) {
					settings.method = node.__method;
				}
				if(node.__data) {
					settings.data = node.__data;
				}
				if(typeof(node.__async) !== "undefined") {
					settings.async = node.__async;
				}
				if(node.__timeout) {
					settings.timeout = node.__timeout;
				}
				if(node.__credentials) {
					settings.credentials = node.__credentials;
				}
				if(node.__headers) {
					var h = node.__headers.split(":");
					if(h.length > 1) {
						settings.headers = {};
						settings.headers[h[0]] = h[1];
					}
				}

//				u.bug("request:" + node.__url);
//				console.log(settings);
				u.request(node, node.__url, settings);

			}

		}

		div.performNextTest();

	}

}
