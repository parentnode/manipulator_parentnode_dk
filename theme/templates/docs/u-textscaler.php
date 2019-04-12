<div class="scene docpage i:docpage">
	<h1>Textscaler</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.textscaler">
				<div class="header">
					<h3>Util.textscaler</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.textscaler</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.textscaler(
									<span class="type">Node</span> <span class="var">scope</span> 
									[, <span class="type">JSON</span> <span class="var">_settings</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Define text scaling on resizing.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> scope of text scaling rules
								</div>
							</dd>
							<dt><span class="var">_settings</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> text scaling rules, grouped by tags
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">unit</span></dt>
										<dd>Unit to use for font-size</dd>
										<dt><span class="value">min_size</span></dt>
										<dd>Minimum page width for scaling</dd>
										<dt><span class="value">min_width</span></dt>
										<dd>Minimum font-size (on min_size)</dd>
										<dt><span class="value">max_size</span></dt>
										<dd>Maximum page width for scaling</dd>
										<dt><span class="value">max_width</span></dt>
										<dd>Maximum font-size (on max_size)</dd>
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
							<code>u.textscaler(scene,{
	"h2":{
		"unit":"rem",
		"min_size":2,
		"min_width":200,
		"max_size":4,
		"max_width":1600
	},
	"p":{
		"unit":"px",
		"min_size":12,
		"min_width":800,
		"max_size":20,
		"max_width":1200
	},
});</code>
							<p>
								Scales <span class="htmltag">h2</span> from 2rem to 4rem between browser width 
								200px and 1600px and scales <span class="htmltag">p</span> from 12px to 20px
								between browser width 800px and 1200px.
							</p>

						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.setAttribute</li>
								<li>document.head</li>
								<li>document.createTextNode</li>
								<li>document.appendChild</li>
								<li>StyleSheet.insertRule</li>
								<li>cssRule.style.setProperty</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.randomString</li>
								<li>Util.Events.addEvent</li>
								<li>Util.browserW</li>
								<li>Util.Events.removeEvent</li>
								<li>Util.appendElement</li>
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
					<li><span class="file">u-textscaler.js</span></li>
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
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>not supported</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-textscaler.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-string.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not supported</dd>

				<dt>tv</dt>
				<dd>not tested</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
