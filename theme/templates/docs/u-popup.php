<div class="scene docpage i:docpage">
	<h1>Popup</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.popup">
				<div class="header">
					<h3>Util.popup</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.popup</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.popup</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Window</span> = 
								Util.popup(
									<span class="type">String</span> <span class="var">url</span> 
									[, <span class="type">JSON</span> <span class="var">settings</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create a popup-window, centered on the screen, and return reference to the new window.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url to open in popup window
								</div>
							</dd>
							<dt><span class="var">settings</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> popup window settings
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">name</span></dt>
										<dd>Name of popup window - default timestamp based name</dd>
										<dt><span class="value">width</span></dt>
										<dd>Width of popup window - default 330px</dd>
										<dt><span class="value">height</span></dt>
										<dd>Height of popup window - default 150px</dd>
										<dt><span class="value">extra</span></dt>
										<dd>Extra popup settings string to set additional popup settings, default scrollbars visible</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Window</span> reference to new popup window</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.popup("test.html", {"name":"popup","width":400, "height":300});</code>
							<p>Opens popup with name <span class="value">popup</span>, 400px wide and 300px high.
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>Date</li>
								<li>window.open</li>
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
					<li><span class="file">u-popup.js</span></li>
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
				<dd><span class="file">u-popup.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-popup.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-popup.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
