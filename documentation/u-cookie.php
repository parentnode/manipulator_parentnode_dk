<? $page_title = "Cookie documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:docpage">
	<h1>Cookie</h1>
	<p>Basic cookie functions. Get, save, eat.</p>
	<p>
		In addition to regular cookies, JES includes a simple way of mapping a cookie to a DOM node, allowing you to
		create a sort of Node memory, ie. if you want to remember the state of a node (open, closed, selected, entered text).
		These cookies are called nodeCookies.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.saveCookie">
				<div class="header">
					<h3>Util.saveCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.saveCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">
								<span class="type">Void</span> = Util.saveCookie(
								<span class="type">String</span> <span class="var">name</span>, 
								<span class="type">String</span> <span class="var">value</span> 
								[, <span class="type">JSON</span> <span class="var">options</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Save cookie. Use session cookies as default. Use options to set expiry and path.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie name
								</div>
							</dd>
							<dt><span class="var">value</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie value
								</div>
							</dd>
							<dt><span class="var">option</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Additional cookie options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">path</span></dt>
										<dd>
											path to save cookie with - default is current path 
										</dd>
										<dt><span class="value">expiry</span></dt>
										<dd>
											Expiry date like, "Tue, 05-Apr-2020 05:00:00 GMT"
										</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.saveCookie("cookie", "Chocolate Chip");</code>
							<p>Saves cookie=Chocolate%20Chip as session cookie</p>
						</div>
						<div class="example">
							<code>u.saveCookie("cookie", "Oatmeal", {"expiry":"Tue, 05-Apr-2020 05:00:00 GMT"});</code>
							<p>Saves cookie=Oatmeal as permanent cookie, with expiry Tue, 05-Apr-2020 05:00:00 GMT</p>
						</div>
						<div class="example">
							<code>u.saveCookie("cookie", "Oatmeal", {"expiry":true});</code>
							<p>Saves cookie=Oatmeal as permanent cookie, with expiry Mon, 04-Apr-2020 05:00:00 GMT</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>encodeURIComponent</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.getCookie">
				<div class="header">
					<h3>Util.getCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.getCookie(
									<span class="type">String</span> <span class="var">name</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get cookie.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie name
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> Cookie value for <span class="var">name</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.getCookie("cookie");</code>
							<p>Returns value for "cookie".</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>encodeURIComponent</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.deleteCookie">
				<div class="header">
					<h3>Util.deleteCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.deleteCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.deleteCookie(
									<span class="type">String</span> <span class="var">name</span>
									[, <span class="type">JSON</span> <span class="var">options</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Delete cookie by setting empty value and expire date 01.01.1970.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie name
								</div>
							</dd>
							<dt><span class="var">option</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Additional cookie options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">path</span></dt>
										<dd>
											path to save cookie with - default is current path 
										</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.deleteCookie("cookie");</code>
							<p>Deletes cookie named "cookie"</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>encodeURIComponent</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.saveNodeCookie">
				<div class="header">
					<h3>Util.saveNodeCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.saveNodeCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.saveNodeCookie(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">name</span>, 
									<span class="type">String</span> <span class="var">value</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Save cookie with node reference. Uses session cookies. Node reference is an autogenerated string, based on ID, nodeName, name attribute or className.</p>
						<p>Node cookies are saved with path=/;</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to map cookie to
								</div>
							</dd>
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie name
								</div>
							</dd>
							<dt><span class="var">value</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Cookie value
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>JSON.parse</li>
								<li>JSON.stringify</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>Util.cookieReference</li>
								<li>Util.saveCookie</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.getNodeCookie">
				<div class="header">
					<h3>Util.getNodeCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getNodeCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.getNodeCookie(
									<span class="type">Node</span> <span class="var">node</span>, 
									[<span class="type">String</span> <span class="var">name</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get cookie with node reference.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to get referenced cookie of
								</div>
							</dd>
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional Cookie name
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>If <span class="var">name</span> is passed to function it returns <span class="type">String</span> <span class="var">node</span> referenced cookie value for <span class="var">name</span>.</p>
						<p>If no <span class="var">name</span> is passed to function it returns <span class="type">JSON</span> <span class="var">node</span> referenced cookie object.</p>
						<p>If no matching cookie is found, it returns false.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>JSON.parse</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>Util.cookieReference</li>
								<li>Util.getCookie</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.deleteNodeCookie">
				<div class="header">
					<h3>Util.deleteNodeCookie</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.deleteNodeCookie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.deleteNodeCookie(
									<span class="type">Node</span> <span class="var">node</span>, 
									[<span class="type">String</span> <span class="var">name</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Delete node referenced cookie object, or specific value.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to get referenced cookie of
								</div>
							</dd>
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional Cookie name
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>JSON.parse</li>
								<li>JSON.stringify</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>Util.cookieReference</li>
								<li>Util.getCookie</li>
								<li>Util.saveCookie</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
	<div class="section files">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<li>u-cookie.js</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li>none</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="section segments">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd><span class="file">u-cookie.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-cookie.js</span></dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-cookie.js</span> +
					<span class="file">u-json-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-cookie.js</span></dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-cookie.js</span> +
					<span class="file">u-json-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-cookie.js</span></dd>
	
				<dt>mobile</dt>
				<dd class="todo">not tested</dd>
	
				<dt>mobile_light</dt>
				<dd class="todo">not tested</dd>

				<dt>basic</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

	

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>