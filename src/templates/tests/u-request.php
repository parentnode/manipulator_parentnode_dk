<style type="text/css">
	.scene div {margin: 0 0 5px; padding: 2px 5px;}
	.correct {background: green; color: white;}

	.error {background: red; color: white;}
	#content .scene .error span {color: white;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(node) {
//			alert("test")

			node._span = u.qs("span", node);

			node.response = function(response, request_id) {
				if(response.isHTML && !this[request_id].request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = u.qs(".test", response).innerHTML
				}
				else if(response.isJSON && this[request_id].request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = response.test;
				}
				else {

					u.bug("error:" + response.isJSON + ":" + this.request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

					u.ac(this, "error");
					this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
				}
			}
			node.responseError = function(response) {
				u.ac(this, "error");

				if(response.exception) {
					this.innerHTML += " EXCEPTION: " + response.exception;
				}
				else {
					this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
				}
			}


			var method = u.cv(node, "method");
			var params = u.f.getParams(node, (u.cv(node, "send") ? ({"send_as":u.cv(node, "send")}) : ""));
			var async = u.cv(node, "async");
			var headers = u.cv(node, "headers");

			var settings = {};
			if(method) {
				settings.method = method;
			}
			if(params) {
				settings.params = params;
			}
			if(async) {
				settings.async = async;
			}
			if(headers) {
				var h = headers.split(":");
				if(h.length > 1) {
					settings.headers = {};
					settings.headers[h[0]] = h[1];
				}
			}

			u.request(node, node._span.innerHTML, settings);


		}

	}

	Util.Objects["special"] = new function() {
		this.init = function(node) {


			node._span = u.qs("span", node);

			node.response = function(response, request_id) {
				if(response.isHTML && !this[request_id].request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = u.qs(".test", response).innerHTML
				}
				else if(response.isJSON && this[request_id].request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = response.test;
				}
				else {

					u.bug("error:" + response.isJSON + ":" + this[request_id].request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

					u.ac(this, "error");
					this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
				}
			}
			node.responseError = function(response) {
				u.ac(this, "correct");
				u.ac(this._span, "correct");

				if(response.exception) {
					this.innerHTML += " EXCEPTION: " + response.exception;
				}
				else {
					this.innerHTML += "This request is supposed to fail, XMLHTTPRequest outside domain";
				}
			}


			var method = u.cv(node, "method");
			var params = u.f.getParams(node, (u.cv(node, "send") ? ({"send_as":u.cv(node, "send")}) : ""));
			var async = u.cv(node, "async");
			var headers = u.cv(node, "headers");

			var settings = {};
			if(method) {
				settings.method = method;
			}
			if(params) {
				settings.params = params;
			}
			if(async) {
				settings.async = async;
			}
			if(headers) {
				var h = headers.split(":");
				if(h.length > 1) {
					settings.headers = {};
					settings.headers[h[0]] = h[1];
				}
			}

			u.request(node, node._span.innerHTML, settings);


		}

	}


	Util.Objects["headers"] = new function() {
		this.init = function(node) {


			node._span = u.qs("span", node);

			node.response = function(response) {
				if(response.isHTML && !this.request_url.match(/\.json/i) && u.qs(".test", response) && u.qs(".test", response).innerHTML == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = u.qs(".test", response).innerHTML
				}
				else if(response.isJSON && this.request_url.match(/.json/i) && response.test == u.qs("input", this).value) {
					u.ac(this, "correct");
					this.innerHTML = response.test;
				}
				else {

					u.bug("error:" + response.isJSON + ":" + this.request_url.match(/.json/i) + ":" + response.test + ":" + u.qs("input", this).value);

					u.ac(this, "error");
					this.innerHTML += (u.cv(this, "async") ? " - async " : " - ") + u.cv(this, "method") + " request invalid";
				}
			}
			node.responseError = function(response) {
				u.ac(this, "correct");

				if(response.exception) {
					this.innerHTML += " EXCEPTION: " + response.exception;
				}
				else {
					this.innerHTML += "This request is supposed to fail, XMLHTTPRequest outside domain";
				}
			}


			var method = u.cv(node, "method");
			var params = u.f.getParams(node, (u.cv(node, "send") ? ({"send_as":u.cv(node, "send")}) : ""));
			var async = u.cv(node, "async");
			var headers = u.cv(node, "headers");

			var settings = {};
			if(method) {
				settings.method = method;
			}
			if(params) {
				settings.params = params;
			}
			if(async) {
				settings.async = async;
			}
			if(headers) {
				var h = headers.split(":");
				if(h.length > 1) {
					settings.headers = {};
					settings.headers[h[0]] = h[1];
				}
			}

			u.request(node, node._span.innerHTML, settings);


		}

	}
</script>

<div class="scene">
	<h1>Request</h1>

	<form name="test" action="" method="">

		<div class="i:test method:post">
			<input type="hidden" name="test" value="POST, to HTML: correct" />
			<span>/ajax/post.php</span>
		</div>


		<div class="i:test method:post send:json">
			<input type="hidden" name="test" value="POST, to JSON, send JSON: correct" />
			<span>/ajax/post_json.json.php</span>
		</div>

		<div class="i:test method:post async:true">
			<input type="hidden" name="test" value="POST, to JSON, async: correct" />
			<span>/ajax/post.json.php</span>
		</div>
		<div class="i:test method:post async:true">
			<input type="hidden" name="test" value="POST, to HTML, async: correct" />
			<span>/ajax/post.php</span>
		</div>

		<div class="i:test method:post async:true headers:TeSt:Value">
			<input type="hidden" name="test" value="POST, to HTML, async, headers: correct" />
			<input type="hidden" name="headers" value="TeSt,Value" />
			<span>/ajax/post_headers.php</span>
		</div>


		<div class="i:test method:get">
			<input type="hidden" name="test" value="GET, to JSON: correct" />
			<span>/ajax/get.json.php?test=error</span>
		</div>
		<div class="i:test method:get">
			<input type="hidden" name="test" value="GET, to HTML: correct" />
			<span>/ajax/get.php</span>
		</div>
		<div class="i:test method:get async:true">
			<input type="hidden" name="test" value="GET, to JSON, async: correct" />
			<span>/ajax/get.json.php</span>
		</div>

		<div class="i:test method:get async:true headers:Content:valuE">
			<input type="hidden" name="test" value="GET, to JSON, async, headers: correct" />
			<input type="hidden" name="headers" value="Content,valuE" />
			<span>/ajax/get_headers.json.php</span>
		</div>


		<div class="i:test method:script">
			<input type="hidden" name="test" value="SCRIPT, to JSONP" />
			<span>/ajax/script.jsonp.php</span>
		</div>

		<div class="i:test method:script">
			<input type="hidden" name="test" value="SCRIPT, param URL, to JSONP" />
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>

		<div class="i:test method:script send:json">
			<input type="hidden" name="test" value="SCRIPT, param URL, send JSON, to JSONP" />
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>

		<div class="i:test method:script">
			<input type="hidden" name="test" value="SCRIPT, to JSONP outside domain: correct" />
			<span>http://manipulator.parentnode.dk/ajax/script.jsonp.php</span>
		</div>


		<div class="i:special method:post">
			<input type="hidden" name="test" value="POST, outside domain: correct" />
			<span>http://manipulator.parentnode.dk/ajax/post.php</span>
		</div>

	</form>
</div>

<div class="comments">
</div>
