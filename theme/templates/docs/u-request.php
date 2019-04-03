<div class="scene docpage i:docpage">
	<h1>Request</h1>
	<p>XMLHTTPRequest with appropriate fallback, response validation and callback.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.request">
				<div class="header">
					<h3>Util.request</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>

						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.request</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.request</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.request(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">String</span> <span class="var">url</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make a server request using XMLHttpRequest with GET, POST, PUT or PATCH or &lt;script&gt; injection in &lt;head&gt;.</p>
						<p>Response is validated before being returned to callback function, to make sure response callback always receives something useful.</p>
						<p>
							Makes callback to node.response(response, request_id) when valid response is received. Declare this function
							on <span class="var">node</span> to receive callback. <span class="var">response</span> parameter will
							be DOM- or JSON-object, or text-string. DOM-object has <span class="var">response.isHTML</span> variable declared. JSON-object has
							<span class="var">response.isJSON</span> variable declared, to make testing for response type easier.
						</p>
						<p>
							Makes callback to node.responseError(response, request_id) if request fails - on security exceptions, page not found, timeout or server error. 
							Declare this function on <span class="var">node</span> to receive callback. If node.responseError is not declared, 
							response error will be returned to node.response.
						</p>
						<p>
							A request object, containing all request settings, is mapped to <span class="var">node[request_id]</span>. This object
							will also contain information about exceptions and if timeout occurred.
						</p>
						<p>
							See <a href="/docs/u-form#Util.Form.getParams">Util.Form.getParams</a> to know more about retrieving values from a form.
						</p>

					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to attach request to. Response callback will be made to this node.
								</div>
							</dd>
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url to make request to.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional - additional request settings.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">method</span></dt>
										<dd>
											POST, GET, PUT, PATCH, SCRIPT - default GET. SCRIPT cadependencies a script injection in &lt;head&gt;
											and responder must wrap result in callback function, which is appended to url as <span class="var">callback</span>.
											Default: <span class="value">GET</span>.
										</dd>
										<dt><span class="value">data</span></dt>
										<dd>
											Parameters to send. Can be string of parameters or JSON-object with variables.
											If GET or SCRIPT request, JSON object is automatically converted to string of parameters and 
											appended to url. When using POST, PUT or PATCH a JSON object will be sent as a JSON-string.
										</dd>
										<dt><span class="value">async</span></dt>
										<dd>Send async - default <span class="value">true</span>. Does not apply to SCRIPT injection.</dd>
										<dt><span class="value">timeout</span></dt>
										<dd>Add timeout to request - default <span class="value">none</span>. Does not apply to synchronous requests.</dd>
										<dt><span class="value">headers</span></dt>
										<dd>
											JSON object containing additional headers to include in request.<br />Note: Safari 4 converts all 
											custom header names to Propercase, turning "test" into "Test" and "content-text" into "Content-Text". IE 6-8 
											lowercases them. This cannot be altered and receiving scripts should be aware of this difference
											if depending on custom headers.<br />
											Headers cannot be used with SCRIPT injection.
										</dd>
										<dt><span class="value">credentials</span></dt>
										<dd>Make the request with credentials, default <span class="value">false</span></dd>
										<dt><span class="value">responseType</span></dt>
										<dd>Set responseType for request, default <span class="value">text</span></dd>

										<dt><span class="value">callback</span></dt>
										<dd>Response callback function name, default: <span class="value">response</span></dd>
										<dt><span class="value">error_callback</span></dt>
										<dd>Response error callback function name, default: <span class="value">responseError</span></dd>

										<dt><span class="value">jsonp_callback</span></dt>
										<dd>
											Jsonp requests callback function name parameter. Appended to request in case receiving
											end does not use default callback parameter. Default: callback.
										</dd>

									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl>
							<dt>node.response(response [, request_id])</dt>
							<dd>when response is received</dd>
							<dt>node.responseError(response)</dt>
							<dd>if request fails</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<h5>JSON GET Request</h5>
							<code>var node = u.qs("#content");
node.response = function(response) {
	var name = response.name;
}
u.request(node, "/json-url");</code>
							<p>Makes GET request to /json and gets the name variable from the received JSON-object.</p>
						</div>

						<div class="example">
							<h5>Post Request with parameters</h5>
							<code>var node = u.qs("#content");
node.response = function(response) {
	alert(response);
}
u.request(node, "/post-url", {"method":"post", "data":"name=martin"});</code>
							<p>Makes POST request to /post and alerts the the response string.</p>
						</div>

						<div class="example">
							<h5>Post Request with headers</h5>
							<code>var node = u.qs("#content");
node.response = function(response) {
	alert(response);
}
u.request(node, "/post-url", {"method":"post", "headers":{"Accept":"application/json"});</code>
							<p>Makes POST request to /post and sends header Accept=application/json.</p>
						</div>

						<div class="example">
							<h5>GET Request with custom callback</h5>
							<code>var node = u.qs("#content");
node.customCallback = function(response) {
	alert(response);
}
u.request(node, "/get-url", {"callback":"customCallback");</code>
							<p>Makes GET request to /get and returns <span class="var">response</span> to node.customCallback.</p>
						</div>

						<div class="example">
							<h5>Make a SCRIPT injection for a JSONP Request</h5>
							<code>var node = u.qs("#content");
node.response = function(response) {
	var name = response.name;
}
u.request(node, "/jsonp-url", {"method":"SCRIPT"});</code>
							<p>Makes SCRIPT injection request to /jsonp and gets the name variable from the received JSON-object.</p>
						</div>

						<div class="example">
							<h5>Catching a response error</h5>
							<code>var node = u.qs("#content");
node.responseError = function(request) {
	if(response.exception) {
		alert(response.exception);
	}
	else {
		alert(response.status);
	}
}
u.request(node, "http://someotherdomain.com/jsonp", {"method":"POST"});</code>
							<p>Makes POST request to other domain (not allowed), and alerts the exception.</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>XMLHttpRequest/ActiveXObject</li>
								<li>String.match</li>
								<li>String.replace</li>
								<li>String.trim</li>
								<li>String.substr</li>
								<li>try ... catch</li>
								<li>Number</li>
								<li>Number.toString</li>
								<li>JSON.parse</li>
								<li>JSON.stringify</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelector</li>
								<li>Util.appendElement</li>
								<li>Util.randomString</li>
								<li>Util.isStringHTML</li>
								<li>Util.isStringJSON</li>
								<li>Util.Timer</li>
								<li>Util.Events</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="section includefiles">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<li><span class="file">u-request.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li><span class="file">u-request-desktop_light.js</span></li>
				</ul>
			</div>

		</div>
	</div>

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop_edge</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span> + 
					<span class="file">u-string.js</span>
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span> + 
					<span class="file">u-string.js</span>
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-request-desktop_light.js</span> +
					<span class="file">u-array-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
					<span class="file">u-events.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>tablet_lignt</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-request-desktop_light.js</span> +
					<span class="file">u-array-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>
</div>
