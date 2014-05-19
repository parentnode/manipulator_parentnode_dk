<div class="scene docpage i:docpage">
	<h1>Browser events</h1>


	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.addDOMReadyEvent">
				<div class="header">
					<h3>Util.addDOMReadyEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.addDOMReadyEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.addDOMReadyEvent(
									<span class="type">Function</span> <span class="var">action</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Add DOM Ready event. Uses DOMContentLoaded if supported by browser, or falls back to 
							regular document.onload event. <span class="var">action</span> is executed on window object.
						</p>
						<p class="note">
							When using dom-ready with webfonts - the line-height will update after dom-ready (when the fonts load) and
							this my have an impact on absolute positioning. This can be partly minimized by always stating line-heights in the CSS- but rendering widths may still change
							paragraph heights.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on event
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
								<li>eval</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
								<li>Util.Events.removeEvent</li>
								<li>Util.randomString</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.addOnloadEvent">
				<div class="header">
					<h3>Util.addOnloadEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.addOnloadEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.addOnloadEvent(
									<span class="type">Function</span> <span class="var">action</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add document.onload event handler. <span class="var">action</span> is executed on window object.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on event
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
								<li>eval</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
								<li>Util.Events.removeEvent</li>
								<li>Util.randomString</li>
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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-events-browser.js</span></li>
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
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-string.js</span>
				</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-events-browser.js</span> +
					<span class="file">u-events.js</span> +
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
