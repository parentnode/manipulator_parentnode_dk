<div class="scene docpage i:docpage">
	<h1>History</h1>
	<p>
		Browser history manipulation for Ajax based navigation. Using navigator.History object with pushState 
		and popState where supported. Falls back to Hash and onHashChange, and implements a timerbased HashChange
		detection for IE7+IE6 support.
	</p>
	<p>
		The History object can be used in conjunction with the <a href="/docs/u-navigation">Navigation</a> module for easy implementation.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.History.catchEvent">
				<div class="header">
					<h3>Util.History.catchEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.History.catchEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.h.catchEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.History.catchEvent(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">Function</span> <span class="var">callback</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Catches popstate/hashchange and directs event to <span class="var">callback</span> function 
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
							<dt><span class="var">callback</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> Callback function to notify of event
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
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>setInterval</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.History.getCleanHash</li>
								<li>Util.History.getCleanUrl</li>
							</ul>
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
						<h4>Returns</h4>
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
						<h4>Uses</h4>

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
						<h4>Returns</h4>
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
						<h4>Uses</h4>

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

	<div class="section files">
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

	<div class="section segments">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-history.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-history.js</span></dd>
	
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
