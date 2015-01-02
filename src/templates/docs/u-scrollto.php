<div class="scene docpage i:docpage">
	<h1>ScrollTo</h1>
	<p>
		Animated native scrolling to node or coordinate.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.scrollTo">
				<div class="header">
					<h3>Util.scrollTo</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.scrollTo</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.scrollTo(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">JSON</span> <span class="var">_options</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Scroll node to position of <span class="htmltag">node</span> or specified x,y coordinate.</p>
						<p>Cancels scroll animation if user attempts to scroll midway.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to scroll
								</div>
							</dd>
							<dt><span class="var">_option</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Options for scrolling
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">callback</span></dt>
										<dd>Name of callback function on successful scroll (default: scrolledTo)</dd>
										<dt><span class="value">callback_cancelled</span></dt>
										<dd>Name of callback function on cancelled scroll (default: scrolledToCancelled)</dd>
										<dt><span class="value">node</span></dt>
										<dd>Node to scroll to</dd>
										<dt><span class="value">x</span></dt>
										<dd>X coordinate to scroll to</dd>
										<dt><span class="value">y</span></dt>
										<dd>Y coordinate to scroll to</dd>
										<dt><span class="value">offset_x</span></dt>
										<dd>Offset for vertical scrolling</dd>
										<dt><span class="value">offset_y</span></dt>
										<dd>Offset for horisontal scrolling</dd>
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
							<dt>window.scrolledTo(event)</dt>
							<dd>when scrolling is done successfully</dd>
							<dt>window.scrolledToCancelled(event)</dt>
							<dd>If scrolling was interupted</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header on&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var footer = u.querySelector(".footer");
	u.scrollTo({"node":footer, "offset_y":100);
&lt;/script&gt;</code>
							<p>Scrolls to "footer" -100px.</p>
						</div>
						<div class="example">
							<p><a href="/tests/u-scrollto">See the test page for extended example</a>.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>for ... in</li>
								<li>case ... switch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.scrollX</li>
								<li>Util.scrollY</li>
								<li>Util.absX</li>
								<li>Util.absY</li>
								<li>Util.setTimer</li>
								<li>Util.resetTimer</li>
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
					<li><span class="file">u-scrollto.js</span></li>
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
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
					<span class="file">u-geometry-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
					<span class="file">u-geometry-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-scrollto.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
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
