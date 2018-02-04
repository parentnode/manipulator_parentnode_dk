Util.Objects["request"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		// collect test data for test_results array
		div.getTestData = function(node) {
			var test_data_part = [];
			test_data_part.push("url=" + node.__url);
			test_data_part.push("method=" + node.__method);
			test_data_part.push("async=" + node.__async);
			node.__data ? test_data_part.push("data="+typeof(node.__data)) : "";
			node.__headers ? test_data_part.push("headers="+typeof(node.__headers)) : "";
			node.__response_type ? test_data_part.push("responseType="+node.__response_type) : "";
			node.__credentials ? test_data_part.push("credentials="+node.__credentials) : "";
			node.__timeout ? test_data_part.push("timeout="+node.__timeout) : "";

			return test_data_part.join(", ");
		}
		//u.bug_console_only = false;
		// do one test at the time - making this many requests simultaneous will freeze most browsers and test will fail
		div.performNextTest = function() {


			var node = u.qs("div.waiting", this);
			if(node) {

				node.div = this;

				node.response = function(response, request_id) {
					// u.bug("response:" + this.__url);
					// console.log(response);
					// console.log(typeof(response));
					// console.log(this[request_id])
					// u.bug("request_id:" + request_id);
					// u.bug("this[request_id].request_url:" + this[request_id].request_url);
	//				console.log(u.qs("input", this))
	//				return;

					u.rc(this, "waiting");

					// catch timeout response on request that should not time out
					if(this.timeout && !u.qs("input", this)) {

						u.ac(this, "testfailed");
						this.innerHTML += " - async:" + u.cv(this, "async") + " - method:" + u.cv(this, "method") + " - send:" + u.cv(this, "send") + " - timeout:" + u.cv(this, "timeout") + " - responded twice";

						div.test_results["u.request ("+div.getTestData(this)+") "] = false;

					}
					// responseText html
					else if(!this.shouldtimeout && response.isHTML && !this[request_id].request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = u.qs(".test", response).innerHTML

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					// responseText json
					else if(!this.shouldtimeout && response.isJSON && this[request_id].request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = response.test;

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					// responseType document
					else if(!this.shouldtimeout && this.__response_type == "document" && !this[request_id].request_url.match(/\.json/i) && response.documentElement && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = u.qs(".test", response).innerHTML

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					// responseType json
					else if(!this.shouldtimeout && this.__response_type == "json" && this[request_id].request_url.match(/\.json/i) && typeof(response) == "object" && response.test == u.qs("input", this).value) {
						u.ac(this, "testpassed");
						this.innerHTML = response.test;

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					// responseType blob
					else if(!this.shouldtimeout && this.__response_type == "blob" && this[request_id].request_url.match(/\.blob/i) && typeof(response) == "object" && response.type == "text/html") {

						// read blob and inject html
						this.FileReader = new FileReader();
						this.FileReader.node = this;
						this.FileReader.addEventListener("loadend", function() {
							this.node.innerHTML = this.result;
							u.ac(this.node, "testpassed");
						});
						this.FileReader.readAsText(response);

						div.test_results["u.request ("+div.getTestData(this)+")"] = true;
					}
					// responseType arraybuffer
					else if(!this.shouldtimeout && this.__response_type == "arraybuffer" && this[request_id].request_url.match(/\.arraybuffer/i) && typeof(response) == "object") {

						var string = "";
						// convert arraybuffer to array
						var uInt8Array = new Uint8Array(response);
						for(i = 0; i < uInt8Array.length; i++) {
							// concatenate string
							string += String.fromCharCode(uInt8Array[i]);
						}

						this.innerHTML = string;
						u.ac(this, "testpassed");

						div.test_results["u.request ("+div.getTestData(this)+")"] = true;
					}
					else {

						u.bug("error:" + response.isJSON + ":" + this[request_id].request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

						u.ac(this, "testfailed");
						this.innerHTML += " - async:" + u.cv(this, "async") + " - method:" + u.cv(this, "method") + " - send:" + u.cv(this, "send") + " - timeout:" + u.cv(this, "timeout") + " - request invalid";

						div.test_results["u.request ("+div.getTestData(this)+") "] = false;
					}

					this.div.performNextTest();
				}

				node.responseError = function(response, request_id) {
					u.bug("error response:" + this.__url)
					console.log(response)

					u.rc(this, "waiting");

					// console.log(this[request_id])
					// console.log(this)

					if(this.shouldfail) {

						if(response.status == 404 && this.__url.match(/\.404/i)) {
							u.ac(this, "testpassed");
							this.innerHTML = "Requesting non-existing page, returns error 404";
						}
						else if(response.status === 0 && this.__url.match(/^http/) && !this.__credentials) {
							u.ac(this, "testpassed");
							this.innerHTML = "This request is supposed to fail, XMLHTTPRequest outside domain: ";
						}

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					else if(this.shouldtimeout) {
						u.ac(this, "testpassed");
						this.innerHTML = "This request is supposed to timeout";

						div.test_results["u.request ("+div.getTestData(this)+") "] = true;
					}
					else {
						u.ac(this, "testfailed");
						div.test_results["u.request ("+div.getTestData(this)+") "] = false;
						
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
				node.__response_type = u.cv(node, "responseType");
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
				if(node.__response_type) {
					settings.responseType = node.__response_type;
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
