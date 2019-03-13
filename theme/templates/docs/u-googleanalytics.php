<div class="scene docpage i:docpage">
	<h1>Google Analytics</h1>
	<p>
		Automatic event tracking using Google Analytics.
	</p>
	<p>
		By making your GA account information available to Manipulator, you get automatic pageview and event tracking. 
		To set up Google Analytics, just add the following code to you JS (replacing our values with your own) and make sure these variables are
		loaded before the u-googleanalytics.js module.
	</p>
		
	<code>u.ga_account = 'UA-49740096-1';
u.ga_domain = 'manipulator.parentnode.dk';</code>

	<p>Or to include tracking in test environments:</p>

	<code>u.ga_account = 'UA-49740096-1';
u.ga_domain = 'auto';</code>


	<p>
		Aside from the automatic tracking, shorthand functions are available for custom tracking.
		To find out more about the customization options for automatic pageview and event tracking, search for <em>Analytics</em> 
		on the <a href="/docs">documentation main page</a>.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.stats.pageView">
				<div class="header">
					<h3>Util.stats.pageView</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stats.pageView</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.stats.pageView(
									<span class="type">String</span> <span class="var">url</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Registers pageView on you Google Analytics account</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url of page view
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
						<div class="example">
							<code>u.stats.pageView('<?= SITE_URL ?>');</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>googleanalytics.js (Universal tracker)</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.stats.event">
				<div class="header">
					<h3>Util.stats.event</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stats.event</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.stats.event(
									<span class="type">Node</span> <span class="var">node</span>, 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Registers event on you Google Analytics account</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node event occured on
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional event settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">event</span></dt>
										<dd>Event leading to event tracking.</dd>
										<dt><span class="value">eventCategory</span></dt>
										<dd>Category label for tracking. Default: Uncategorized</dd>
										<dt><span class="value">eventAction</span></dt>
										<dd>Action label for tracking. Default: event.type or Unknown</dd>
										<dt><span class="value">eventLabel</span></dt>
										<dd>Additional label for tracking. Default: event.target.url or small except of node content</dd>
										<dt><span class="value">eventValue</span></dt>
										<dd>Value label for tracking. Default: Null</dd>
										<dt><span class="value">nonInteraction</span></dt>
										<dd>nonInteraction value for tracking. Default: false</dd>
										<dt><span class="value">hitCallback</span></dt>
										<dd>Callback for successful tracking. Default: null</dd>
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
						<div class="example">
							<code>u.stats.event(node, {"eventCategory":"Video", "eventAction":"Play"});</code>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>for ... in</li>
								<li>switch ... case</li>
								<li>googleanalytics.js (Universal tracker)</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.text</li>
								<li>Util.cutString</li>
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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-googleanalytics.js</span></li>
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
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop_edge</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-googleanalytics.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
