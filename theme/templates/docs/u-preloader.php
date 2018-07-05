<div class="scene docpage i:docpage">
	<h1>Preloader</h1>
	<p>Loadbalanced image preloader, with queue</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.preloader">
				<div class="header">
					<h3>Util.preloader</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.preloader</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.preloader(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Array</span> <span class="var">files</span>
									[, <span class="type">JSON</span> <span class="var">options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Loads array of images and makes callback to node.loaded, when loading is done.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to notify when loading is done
								</div>
							</dd>
							<dt><span class="var">files</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Array</span> Array of files to load
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional options for load process
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">loaded</span></dt>
										<dd>Callback function name of loaded callback.</dd>
										<dt><span class="value">loading</span></dt>
										<dd>Callback function name of loading callback.</dd>
										<dt><span class="value">waiting</span></dt>
										<dd>Callback function name of waiting callback.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl>
							<dt>node.waiting()</dt>
							<dd>when using several queues, and you are waiting in line</dd>
							<dt>node.loading()</dt>
							<dd>when your queue starts loading</dd>
							<dt>node.loaded(queue)</dt>
							<dd>when you queue is loaded. The returned queue is an array of images loaded.</dd>
						</dl>

					</div>


					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var node = u.qs(".scene");
u.preloader(node, ["file.jpg", "file2.jpg", "file3.jpg"]);</code>
							<p>Will make callback to node.loaded when all three images are loaded.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>new Date()</li>
								<li>typeof</li>
								<li>document.createElement</li>
								<li>new Image()</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
								<li>Util.appendElement</li>
								<li>Util.addClass</li>
								<li>Util.removeClass</li>
								<li>Util.querySelector</li>
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
					<li>u-preloader.js</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li>u-preloader-desktop_light.js</li>
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
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span> + 
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span> + 
					<span class="file">u-events.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-preloader-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-dekstop_light.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-events.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-preloader.js</span> + 
					<span class="file">u-preloader-desktop_light.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-dekstop_light.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
