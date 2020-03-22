Util.Modules["request"] = new function() {
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
					// u.bug("response", response);


					u.rc(this, "waiting");

					if(this.div.responseHandlers[this.id]) {
						this.div.responseHandlers[this.id](this, response, request_id);
					}
					// error-error handling – test responders not set up correctly
					else {
						u.ac(this, "testfailed");
						this.innerHTML = "error-error - TEST ID: " + this.id + ", test responders not set up correctly";
						this.div.test_results["u.request ("+this.div.getTestData(this)+") "] = false;
					}
					this.div.performNextTest();
					return;

				}

				node.responseError = function(response, request_id) {
					// u.bug("error response:" + this.__url, response, this[request_id]);

					u.rc(this, "waiting");


					if(this.div.responseErrorHandlers[this.id]) {
						this.div.responseErrorHandlers[this.id](this, response, request_id);
					}
					// error-error handling – test responders not set up correctly
					else {
						u.ac(this, "testfailed");
						this.innerHTML = "error-error - test responders not set up correctly";
						this.div.test_results["u.request ("+this.div.getTestData(this)+") "] = false;
					}
					this.div.performNextTest();
					return;

				}

				node._span = u.qs("span", node);
				node.__url = node._span.innerHTML;
				node.__method = u.cv(node, "method");
				node.__data = u.f.getFormData(node, (u.cv(node, "send") ? ({"format":u.cv(node, "send")}) : ""));
				node.__async = u.cv(node, "async") == "false" ? false : true;
				node.__timeout = u.cv(node, "timeout") ? Number(u.cv(node, "timeout")) : false;
				node.__headers = u.cv(node, "headers");
				node.__response_type = u.cv(node, "responseType");
				node.__credentials = u.cv(node, "credentials");

				node.__redirect = u.cv(node, "redirect");



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
					// pass credentials flag to PHP, to enable setting appropriate CORS header for test
					if(obj(settings.data)) {
						settings.data.append("credentials", 1);
					}
					else {
						settings.data += "&credentials=1"
					}
				}
				if(node.__headers) {
					var header_sets = node.__headers.split(",");
					settings.headers = {};

					for(var i = 0; i < header_sets.length; i++) {
						var h = header_sets[i].split(":");
						settings.headers[h[0]] = h[1];
					}

				}

				// u.bug("request:" + node.__url, settings);
				u.request(node, node.__url, settings);

			}

		}



		div.responseHandlers = {};
		div.responseErrorHandlers = {};


		// Plain POST, response HTML
		div.responseHandlers["t0"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST JSON, response json
		div.responseHandlers["t10"] = function(node, response, request_id) {

			if(response.isJSON && 
				node[request_id].request_url.match(/.json/i) && 
				u.qs("input", node) &&
				response.test == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST params, response JSON
		div.responseHandlers["t20"] = function(node, response, request_id) {

			if(response.isJSON && 
				node[request_id].request_url.match(/.json/i) && 
				u.qs("input", node) &&
				response.test == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST params, response JSON, SYNCHRONOUS
		div.responseHandlers["t30"] = function(node, response, request_id) {

			if(response.isJSON && 
				node[request_id].request_url.match(/.json/i) && 
				u.qs("input", node) &&
				response.test == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST FormData, response HTML
		div.responseHandlers["t40"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, response HTML
		div.responseHandlers["t50"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, header content-type urlencoded
		div.responseHandlers["t60"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST JSON, header content-type JSON
		div.responseHandlers["t70"] = function(node, response, request_id) {

			if(response.isHTML &&
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, custom header
		div.responseHandlers["t80"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, multiple custom header
		div.responseHandlers["t90"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, timeout failed
		div.responseErrorHandlers["t100"] = function(node, response, request_id) {
			
			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to timeout";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, timeout passed
		div.responseHandlers["t110"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, no CORS, no credentials
		div.responseErrorHandlers["t120"] = function(node, response, request_id) {
			
			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to fail, XMLHTTPRequest outside domain";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, CORS allowed, with credentials
		div.responseHandlers["t130"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, CORS allowed, no credentials
		div.responseHandlers["t140"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, CORS allowed, with credentials, disallowed header
		div.responseErrorHandlers["t150"] = function(node, response, request_id) {
			
			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to fail, XMLHTTPRequest Preflight, with credentials BUT disallowed header outside domain";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, CORS allowed, no credentials, disallowed header
		div.responseErrorHandlers["t160"] = function(node, response, request_id) {
			
			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to fail, XMLHTTPRequest Preflight, no credentials BUT disallowed header outside domain";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, CORS allowed, with credentials, granted header
		div.responseHandlers["t170"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST JSON, CORS allowed, with credentials, granted header
		div.responseHandlers["t180"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST JSON, CORS allowed, no credentials, granted header
		div.responseHandlers["t190"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, responseType document
		div.responseHandlers["t200"] = function(node, response, request_id) {

			if(response.documentElement && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, responseType JSON
		div.responseHandlers["t210"] = function(node, response, request_id) {

			if(typeof(response) == "object" &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, responseType Blob
		div.responseHandlers["t220"] = function(node, response, request_id) {

			if(typeof(response) == "object" &&
				response.type.match(/^text\/html/i) 
			) {

				// read blob and inject html
				node.FileReader = new FileReader();
				node.FileReader.node = node;

				node.FileReader.addEventListener("loadend", function() {
					u.ac(this.node, "testpassed");
					this.node.innerHTML = this.result;
				});

				node.FileReader.addEventListener("error", function() {
					u.ac(this.node, "testfailed");
					this.node.innerHTML += " ERROR IN TEST ID: " + this.node.id;
				});
				node.FileReader.readAsText(response);
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain POST, responseType arraybuffer
		div.responseHandlers["t230"] = function(node, response, request_id) {

			if(typeof(response) == "object" &&
				response.byteLength == 55 
			) {

				var string = "";
				// convert arraybuffer to array
				var uInt8Array = new Uint8Array(response);
				for(i = 0; i < uInt8Array.length; i++) {
					// concatenate string
					string += String.fromCharCode(uInt8Array[i]);
				}

				u.ac(node, "testpassed");
				node.innerHTML = string;

			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain POST, Redirect
		div.responseHandlers["t240"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// Plain GET, response HTML
		div.responseHandlers["t1000"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain GET, response JSON
		div.responseHandlers["t1010"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain GET, response HTML, ASYNC
		div.responseHandlers["t1020"] = function(node, response, request_id) {

			if(response.isHTML && 
				u.qs(".test", response) && 
				u.qs(".test", response).innerHTML == u.qs("input", node).value
			) {

				u.ac(node, "testpassed");
				node.innerHTML = u.qs(".test", response).innerHTML;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain GET, response JSON, custom header
		div.responseHandlers["t1030"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// Plain GET, timeout failed
		div.responseErrorHandlers["t1040"] = function(node, response, request_id) {

			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to timeout";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}



		// SCRIPT, response JSON
		div.responseHandlers["t10000"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// SCRIPT with param, response JSON
		div.responseHandlers["t10010"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// SCRIPT with param, response JSON
		div.responseHandlers["t10020"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// SCRIPT with param, response JSON
		div.responseHandlers["t10030"] = function(node, response, request_id) {

			if(response.isJSON &&
				u.qs("input", node) &&
				response.test == u.qs("input", node).value 
			) {

				u.ac(node, "testpassed");
				node.innerHTML = response.test;
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// SCRIPT with param, response JSON
		div.responseErrorHandlers["t10040"] = function(node, response, request_id) {

			if(response.error && response.status === 0) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to timeout";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}

		// POST to 404
		div.responseErrorHandlers["t100000"] = function(node, response, request_id) {

			if(response.error && response.status === 404) {

				u.ac(node, "testpassed");
				node.innerHTML = "This request is supposed to timeout";
			}
			else {

				u.ac(node, "testfailed");
				node.innerHTML += " ERROR IN TEST ID: " + node.id;
			}

		}




		// Start test loop
		div.performNextTest();



	}

}
