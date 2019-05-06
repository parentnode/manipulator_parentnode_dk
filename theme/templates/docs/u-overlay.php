<div class="scene docpage i:docpage">
	<h1>Overlay</h1>
	<p>
		Inject a customizable overlay.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.overlay">
				<div class="header">
					<h3>Util.overlay</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.overlay</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.overlay(
									[<span class="type">JSON</span> <span class="var">_options</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							This function will inject html, with variable functionality.
						</p>
						<p>
							Styling should be done on a project by project basis and as such, 
							there comes no pre-defined styling with the injected overlays.
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
										<dt><span class="value">Title</span></dt>
										<dd>
											 Text in overlay header. default: "Overlay"
										</dd>
										<dt><span class="value">Drag</span></dt>
										<dd>
											 Enable or disable drag on header. default: true
										</dd>
										<dt><span class="value">Class</span></dt>
										<dd>
											 Add classes to overlay div.
										</dd>
										<dt><span class="value">Width</span></dt>
										<dd>
											 Set width. default: 400
										</dd>
										<dt><span class="value">Height</span></dt>
										<dd>
											Set height. default: 400
										</dd>
										<dt><span class="value">content_scroll</span></dt>
										<dd>
											 Adds a "content_scroll" class to overlay which functionality needs to be implemented
											 in css. <br /> default: false
										</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Node</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Creating an overlay</p>
							<code>
var button = u.qs(".button");

button.clicked = function() {
	u.overlay({"title":"Hello world!"});
}

u.ce(button);
							</code>
						</div>

					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Number</li>
								<li>document.removeChild</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
								<li>Util.applyStyles</li>
								<li>Util.applyStyle</li>
								<li>Util.Events.addWindowEvent</li>
								<li>Util.Events.drag</li>
								<li>Util.getComputedStyle</li>
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
					<li><span class="file">u-overlay.js</span></li>
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
				<dt>desktop</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> +  <span class="file">u-dom.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> + <span class="file">u-dom.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> + <span class="file">u-dom.js</span> + <span class="file">u-dom_ie.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> + <span class="file">u-dom.js</span> + <span class="file">u-dom_ie.js</span></dd>

				<dt>desktop_light</dt>
				<dd>Not supported</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> + <span class="file">u-dom.js</span></dd>

				<dt>tablet_light</dt>
				<dd>Not supported</dd>

				<dt>tv</dt>
				<dd>Not tested</dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-events-browser.js</span> + <span class="file">u-events-movements.js</span> + <span class="file">u-dom.js</span></dd>
	
				<dt>mobile</dt>
				<dd>Not supported</dd>
	
				<dt>mobile_light</dt>
				<dd>Not supported</dd>
			</dl>
		</div>
	</div>

</div>
