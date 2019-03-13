<div class="scene docpage i:docpage">
	<h1>Navigation</h1>
	<h2>Ajax Navigation controller</h2>
	<p>
		This is the extended Navigation controller, customized for the Manipulator <a href="http://templator.parentnode.dk">Templator</a> Model. 
		This page/flow controller is designed for full rendering control.
	</p>
	<p>
		Uses Util.History for browser History and Location control. 
		Seamless fallback to location.hash and Legacy translation between #/ and real url paths for support
		for links shared between different generation browsers.
	</p>
	<p>
		In default implementation it is composed of a <span class="htmltag">div#page</span> containing a <span class="htmltag">div#header</span>, 
		a <span class="htmltag">div#footer</span> and a <span class="htmltag">div#content</span>. In the 
		<span class="htmltag">div#content</span> we place our individual page content in a 
		<span class="htmltag">div.scene</span>. When using an AJAX enabled navigation the Manipulator Navigation 
		module forwards popstate and HASH changes to either <span class="htmltag">div#content</span> or
		<span class="htmltag">div.scene</span> depending on the url fragments. First level changes is redirected to
		<span class="htmltag">div#content</span>, all others to <span class="htmltag">div.scene</span>.
	</p>
	<p>
		The module can also be used with custom callback and node.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.navigation">
				<div class="header">
					<h3>Util.navigation</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.navigation</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.navigation(
									<span class="type">JSON</span> <span class="var">_options</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Enables AJAX based navigation request routing, sending first level url changes to page.cN.navigate
							and all other url changes to page.cN.scene.navigate.
						</p>
						<p>
							Invoking Util.navigation() adds a flow controller and page.navigate(url) function to your MMM. It
							also looks for exiting HASH markers (links shared from older browsers) to initiate desired page state.
						</p>
						<p>
							All AJAX links enabled with Util.clickableElement will automatically be forwarded to page.navigate
							to complete the internal navigation cycle.
						</p>
						<p>
							Any link routed through page.navigate will automatically be registered as pageViews if the 
							Google Analytics module is enabled.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
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
											 Callback function name. Default: page.cN.navigate and page.cN.scene.navigate
										</dd>
										<dt><span class="value">node</span></dt>
										<dd>
											 Callback node. default: page
										</dd>
										<dt><span class="value">scope</span></dt>
										<dd>
											 Initialization scope on setup.
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
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>location.href</li>
								<li>location.hash</li>
								<li>String.match</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.history</li>
								<li>Util.init</li>
								<li>Util.timer</li>
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
					<li><span class="file">u-navigation.js</span></li>
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
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-navigation.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-navigation.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
