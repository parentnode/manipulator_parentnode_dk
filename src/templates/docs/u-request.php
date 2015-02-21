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
									<span class="type">Node</span> <span class="var">node</span>
									<span class="type">String</span> <span class="var">url</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make a server request using XMLHttpRequest with GET, POST, PUT or PATCH or &lt;script&gt; injection in &lt;head&gt;.</p>
						<p>Responses are validated using Util.isStringJSON and Util.isStringHTML before being returned to callback function.</p>
						<p>
							Makes callback to node.response(response, [request_id]) when valid response is received. Declare this function
							on <span class="var">node</span> to receive callback. <span class="var">response</span> parameter will
							be DOM- or JSON-object, or text-string. DOM-object has response.isHTML variable declared. JSON-object has
							response.isJSON variable declared.
						</p>
						<p>
							Makes callback to node.responseError(request) if request fails - on security exceptions, page not found or server error. 
							Declare this function on <span class="var">node</span> to receive callback. <span class="var">request</span>
							is the XMLHTTPRequest object used to attempt the request. If error is exception, the exception can be found in
							request.exception.
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
											POST, GET, PUT, PATCH, SCRIPT - default GET. SCRIPT causes a script injection in &lt;head&gt;
											and responder must wrap result in callback function, which is appended to url as <span class="var">callback</span>
										</dd>
										<dt><span class="value">params</span></dt>
										<dd>
											Parameters to send. Can be string of parameters or JSON-object with variables.
											If GET or SCRIPT request, JSON object is automatically converted to string of parameters and 
											appended to url. When using POST, PUT or PATCH the JSON object will be sent as a JSON-string.
										</dd>
										<dt><span class="value">async</span></dt>
										<dd>Send async - default false. Does not apply to SCRIPT injection.</dd>
										<dt><span class="value">headers</span></dt>
										<dd>
											JSON object containing additional headers to include in request.<br />Note: Safari 4 converts all 
											custom header names to Propercase, turning "test" into "Test" and "content-text" into "Content-Text". IE 6-8 
											lowercases them. This cannot be altered and receiving scripts should be aware of this difference
											if depending on custom headers.<br />
											Headers cannot be used with SCRIPT injection.
										</dd>
										<dt><span class="value">callback</span></dt>
										<dd>Response callback function name, default: response</dd>
										<dt><span class="value">jsonp_callback</span></dt>
										<dd>Jsonp requests callback function name parameter, default: callback</dd>

									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
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
							<code>var node = u.qs("#content");
node.response = function(response) {
	var name = response.name;
}
u.request(node, "/json");</code>
							<p>Makes GET request to /json and gets the name variable from the received JSON-object.</p>
						</div>

						<div class="example">
							<code>var node = u.qs("#content");
node.response = function(response) {
	var name = response.name;
}
u.request(node, "/jsonp", {"method":"SCRIPT"});</code>
							<p>Makes SCRIPT injection request to /jsonp and gets the name variable from the received JSON-object.</p>
						</div>

						<div class="example">
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

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>XMLHttpRequest/ActiveXObject</li>
								<li>String.match</li>
								<li>String.trim</li>
								<li>String.substr</li>
								<li>try ... catch</li>
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
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.isStringJSON">
				<div class="header">
					<h3>Util.isStringJSON</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.isStringJSON</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.isStringJSON</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.isStringJSON(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Checks if string contains JSON object. If string contains JSON, JSON-object is returned, and object.isJSON is added to object.</p>
						<p>Note: This test is automatically performed on all request responses before being returned to callback function.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">String</span></dt>
							<dd>
								<div class="summary">
									<span class="type">string</span> string to validate for JSON content
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Mixed</span> JSON object if found, else <span class="value">false</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.isStringJSON('{"name":"manipulator"}');</code>
							<p>Returns JSON object.</p>
						</div>

						<div class="example">
							<code>Util.isStringJSON('manipulator');</code>
							<p>Returns <span class="value">false</span>.</p>
						</div>

					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.substr</li>
								<li>String.trim</li>
								<li>String.match</li>
								<li>try ... catch</li>
								<li>JSON.parse</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.isStringHTML">
				<div class="header">
					<h3>Util.isStringHTML</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.isStringHTML</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.isStringHTML</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.isStringHTML(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Checks if string contains DOM object, also knows as HTML. If string contains HTML, DOM-object is returned, and object.isHTML is added to object.</p>
						<p>Note: This test is automatically performed on all request responses before being returned to callback function.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">String</span></dt>
							<dd>
								<div class="summary">
									<span class="type">string</span> string to validate for HTML content
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Mixed</span> DOM object if found, else <span class="value">false</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">					
							<code>Util.isStringHTML('&lt;div class=&quot;scene&quot;&gt;manipulator&lt;/div&gt;');</code>
							<p>Returns HTML object.</p>
						</div>

						<div class="example">
							<code>Util.isStringHTML('{"name":"manipulator"}');</code>
							<p>Returns <span class="value">false</span>.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.substr</li>
								<li>String.trim</li>
								<li>String.match</li>
								<li>try ... catch</li>
								<li>document.createElement</li>
								<li>document.childNodes</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
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
				<dt>desktop</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
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
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>

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

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-request.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-string.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>basic</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>
</div>
