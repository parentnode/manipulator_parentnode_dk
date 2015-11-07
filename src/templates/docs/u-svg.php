<div class="scene docpage i:docpage">
	<h1>SVG</h1>
	<p>
		Create SVG with JavaScript.
	</p>
	<p>
		The point of these SVG functions is to maintain a syntax as close to regular SVG syntax and still
		be able to animate the SVG properties.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.svg">
				<div class="header">
					<h3>Util.svg</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.svg</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">svg</span> = 
								Util.svg(
									<span class="type">JSON</span> <span class="var">svg_object</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create a SVG with an optional number of shapes.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">svg_object</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Object containing SVG details and shapes.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">node</span></dt>
										<dd>Optional node to add SVG to.</dd>
										<dt><span class="value">width</span></dt>
										<dd>Width of SVG.</dd>
										<dt><span class="value">height</span></dt>
										<dd>Height of SVG.</dd>
										<dt><span class="value">shapes</span></dt>
										<dd>Optional Array of shape objects to add to SVG. See Util.svgShape documentation for shape object syntax.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> SVG</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var svg = u.svg({
	"node":scene,
	"width":200,
	"height":200,
	"shapes":[
		{
			"type": "circle",
			"class": "red",
			"cx": 100,
			"cy": 100,
			"r": 50,
			"fill": "#ff0000"
		}
	]
});</code>
							<p>Creates 200x200 px SVG with 50 px radius circle using red fill.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElementNS</li>
								<li>svg.setAttributeNS</li>
								<li>svg.cloneNode</li>
								<li>document.appendChild</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.svgShape">
				<div class="header">
					<h3>Util.svgShape</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.svgShape</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">svgshape</span> = 
								Util.svgShape(
									<span class="type">SVG</span> <span class="var">svg</span> 
									<span class="type">JSON</span> <span class="var">svg_object</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add a SVG Shape to SVG.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">svg</span></dt>
							<dd>
								<div class="summary">
									<span class="type">SVG</span> SVG Object to add shape to.
								</div>
							</dd>
							<dt><span class="var">svg_object</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Object containing SVG details and shapes.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">type</span></dt>
										<dd>Type of shape to add to SVG (line, circle, path, rect, etc).</dd>
										<dt><span class="value">class</span></dt>
										<dd>CSS class of shape.</dd>
										<dt><span class="value">[svg property]</span></dt>
										<dd>Any valid SVG property for SVG shape (cx, x1, x, fill, stroke, etc).</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> SVG</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var shape = u.svg(svg, 
	{
		"type": "circle",
		"class": "red",
		"cx": 100,
		"cy": 100,
		"r": 50,
		"fill": "#ff0000"
	}
);</code>
							<p>Adds 50 px radius circle using red fill to svg.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElementNS</li>
								<li>svg.setAttributeNS</li>
								<li>svg.cloneNode</li>
								<li>document.appendChild</li>
							</ul>
						</div>

						<div class="manipulator">
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
					<li><span class="file">u-svg.js</span></li>
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
					<span class="file">u-svg.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>not supported</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-svg.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not supported</dd>

				<dt>tv</dt>
				<dd>not supported</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
