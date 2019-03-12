<div class="scene docpage i:docpage">
	<h1>History</h1>
	<h2>Browser History manipulation for Ajax based websites.</h2>
	<p>
		A History API allowing you to add eventListners to and force updates of the browser History and Location. 
	</p>
	<p>
		Using navigator.History object with pushState 
		and popState where supported. Falls back to Hash and onHashChange, and implements a timerbased HashChange
		detection for IE7+IE6 support.
	</p>
	<p>
		The History object can be used in conjunction with the 
		<a href="/docs/u-navigation">Navigation</a> module for a full scale ajax navigation model.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.History.addEvent">
				<div class="header">
					<h3>Util.History.addEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.addEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.History.addEvent(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Catches popstate/hashchange and directs event to <span class="type">callback</span> function 
							on <span class="var">node</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to notify of event
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional - additional settings.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">callback</span></dt>
										<dd>
											 Callback function name. Default: node.navigated.
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

					<div class="examples">
						<h4>Examples</h4>
						<h5>Default implementation</h5>
						<div class="example">
							<code>var node = u.qs("#content");
node.navigate = function(url) {
	// invoked when browser Location is changed
}
u.h.addEvent(node);</code>
							<p>Simplest setup to catch all changes to Browser location.</p>
						</div>
						<div class="example">
							<h5>With custom callback</h5>
							<code>var node = u.qs("#content");
node.urlChanged = function(url) {
	// invoked when browser Location is changed
}
u.h.addEvent(node, {"callback":"urlChanged"});</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>setInterval</li>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
								<li>window.onhashchange</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.History.removeEvent">
				<div class="header">
					<h3>Util.History.removeEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.removeEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.History.removeEvent(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Removed popstate/hashchange eventListener from <span class="var">node</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node eventListener was previously attatched to
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional - additional settings.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">callback</span></dt>
										<dd>
											 Callback function name used previously.
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

					<div class="examples">
						<h4>Examples</h4>
						<h5>Default</h5>
						<div class="example">
							<code>var node = u.qs("#content");
u.h.removeEvent(node);</code>
							<p>Simplest way remove an previously attatched eventListener.</p>
						</div>
						<div class="example">
							<h5>With custom callback</h5>
							<code>var node = u.qs("#content");
u.h.removeEvent(node, {"callback":"urlChanged"});</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.History.navigate">
				<div class="header">
					<h3>Util.History.navigate</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.navigate</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.History.navigate(
									<span class="type">String</span> <span class="var">url</span> 
									[, <span class="type">Node</span> <span class="var">node</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Force browser Location update and invoke all registered eventlisteners, passing the new location url.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url to 
								</div>
							</dd>
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node associated with the change 
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<h5>Default</h5>
						<div class="example">
							<code>u.h.navigate("http://manipulator.parentnode.dk");</code>
							<p>Simplest way to update the Browser location and invoke all eventlisteners.</p>
						</div>
						<div class="example">
							<h5>With assiciated node</h5>
							<code>var node = u.qs("#content");
u.h.navigate("http://manipulator.parentnode.dk", node);</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>history.replaceState</li>
								<li>location.hash</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.History.callback</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.History.callback">
				<div class="header">
					<h3>Util.History.callback</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.callback</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.History.callback(
									<span class="type">String</span> <span class="var">url</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Invoke all registered eventlisteners without updating the browser Location.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url to forward to eventListeners
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<h5>Default</h5>
						<div class="example">
							<code>u.h.callback("http://manipulator.parentnode.dk");</code>
							<p>Tell all eventListeners that current url is http://manipulator.parentnode.dk.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.History.getCleanUrl">
				<div class="header">
					<h3>Util.History.getCleanUrl</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.getCleanUrl</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.h.getCleanUrl</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.History.getCleanUrl(
									<span class="type">String</span> <span class="var">string</span> 
									[, <span class="type">Integer</span> <span class="var">levels</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get clean url from string containing url, removing requesting domain and any HASH value.
							Can be used to with the levels parameter to only get a limited depth path.
						</p>
						<p>Primarily a support function of general History functionality</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String containing url to clean
								</div>
							</dd>
							<dt><span class="var">levels</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> Optional path levels to include
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">String</span> Clean url</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;script&gt;
	u.h.getCleanUrl("http://manipulator.parentnode.dk/wishful/thinking#hash");
&lt;/script&gt;</code>
							<p>Returns /wishful/thinking</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.replace</li>
								<li>location.protocol</li>
								<li>document.domain</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.History.getCleanHash">
				<div class="header">
					<h3>Util.History.getCleanHash</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.getCleanHash</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.h.getCleanHash</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.History.getCleanHash(
									<span class="type">String</span> <span class="var">string</span> 
									[, <span class="type">Integer</span> <span class="var">levels</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get clean url from location.hash containing url. Can be used to with the 
							levels parameter to only get a limited depth path.
						</p>
						<p>Primarily a support function of general History functionality</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> HASH string to be cleaned
								</div>
							</dd>
							<dt><span class="var">levels</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> Optional path levels to include
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">String</span> Clean HASH value</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;script&gt;
	u.h.getCleanHash("#/hash/is/not/all/bad", 2);
&lt;/script&gt;</code>
							<p>Returns /hash/is</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-history.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li>none</li>
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
				<dt>desktop_edge</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-history.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
