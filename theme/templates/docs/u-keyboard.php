<div class="scene docpage i:docpage">
	<h1>Util.Keyboard</h1>
	<p>
		Keyboard shortcut handler object for easy mapping of keyboard combinations with buttons, 
		links or JavaScript functions.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.keyboard.addKey">
				<div class="header">
					<h3>Util.Keyboard.addKey</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Keyboard.addKey</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.k.addKey</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Keyboard.addKey(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">key</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Add a keyboard shortcut, with default callback to node.clicked. Optional custom callback
							and metakey (CMD or CTRL) requirement. As default metakey is required.
						</p>
						<p>
							Custom 'ESC' shortcut for [ESC]-key - does not require metakey.
						</p>
						<p>
							Shortcut can be assigned multiple times to different nodes and/or callbacks.
						</p>
						<p>
							Hidden or removed nodes are not executed and automatically removed from shortcuts queue.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to map shortcut to
								</div>
							</dd>
							<dt><span class="var">key</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> shortcut key 
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional shortcut options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">callback</span></dt>
										<dd>Custom callback function name</dd>
										<dt><span class="value">metakey</span></dt>
										<dd>Is metakey required, default true</dd>
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
							<code>u.k.addKey(scene, "k");</code>
							<p>Will invoke scene.clicked when k+cmd/ctrl is pressed.</p>
						</div>
						<div class="example">
							<code>u.k.addKey(scene, "k", {"metakey":false});</code>
							<p>Will invoke scene.clicked when k is pressed.</p>
						</div>
						<div class="example">
							<code>u.k.addKey(scene, "ESC", {"callback":"escaped"});</code>
							<p>Will invoke scene.escaped when [ESC] is pressed.</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
								<li>String.fromCharCode</li>
								
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.nodeWithin</li>
								<li>Util.Events.addEvent</li>
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
					<li><span class="file">u-keyboard.js</span></li>
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

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<dt>desktop_edge</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-keyboard.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
