<div class="scene docpage i:docpage">
	<h1>Init</h1>
	<p>
		Manipulator is designed to utilize the object nature of the DOM. Your HTML-page is already a wellformed
		object structure, and Util.init provides a simple way to extend your HTML nodes to meet the design and 
		functionality requirements.
	</p>
	<p>
		By adding initializer-classes to appropriate nodes, those nodes will be extended, if your current segment code
		contains a matching Manipulator-module. Otherwise it will be ignored. This behavior allows you to seamlessly apply 
		different interfaces and functionality for different <a href="http://detector.parentnode.dk/docs/segments" target="_blank">Detector segments</a> - IE. a desktop segment may look and work different 
		than a mobile segment.
	</p>
	<p>
		This is how you create a Manipulator Object:
	</p>
	<code>Util.Objects[&quot;object_name&quot;] = new Function() {
	this.init = function(node) {

		// extend your node here

	}
}</code>

	<p>
		Apply your initializer classes to your HTML and call Util.init when needed, to create the site experience you want. Ie.
		call Util.init on load, to extend all nodes at the same time, or more specifically invoke scopes of your page
		as they become relevant.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.init">
				<div class="header">
					<h3>Util.init</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.init</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.init</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.init(
									[<span class="type">Node</span> <span class="var">scope</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Manipulator object initializer. Finds all nodes in scope, with classname <span class="value">i:[objectname]</span> 
							and invokes Util.Objects[objectname].init(node) if available.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Optional initialization scope. Default document.
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
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header i:header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	Util.init();
&lt;/script&gt;</code>
								<p>Finds div.header and invokes Util.Objects["header"].init(div.header), if it exists.</p> 
							</code>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.getElements</li>
								<li>Util.classVar</li>
								<li>Util.removeClass</li>
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
					<li>u-init.js</li>
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
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop_edge</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-init.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>
</div>
