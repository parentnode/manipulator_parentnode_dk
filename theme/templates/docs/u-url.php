<div class="scene docpage i:docpage">
	<h1>URL</h1>
	<p>Read GET parameters from URL.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.getVar">
				<div class="header">
					<h3>Util.getVar</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getVar</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.getVar</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.getVar(
									<span class="type">String</span> <span class="var">param</span> 
									[, <span class="type">String</span> <span class="var">url</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Read GET parameter from url - making GET parameters easily available for JavaScript</p>
						<p>
							Reads parameter from location.search as default, but can also take specific url parameter, 
							if you want to read param from other url-string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">param</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> parameter to find in URL
								</div>
							</dd>
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional url - default location.search.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> value of param, or empty string if not found.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp</li>
								<li>String.match</li>
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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-url.js</span></li>
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
				<dd><span class="file">u-url.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-url.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-url.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
