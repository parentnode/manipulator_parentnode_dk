<div class="scene docpage i:docpage">
	<h1>fontsReady</h1>
	<p>
		Font chack and preloader with callbacks
	</p>	

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.fontsReady">
				<div class="header">
					<h3>Util.fontsReady</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.fontsReady</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.fontsReady(
									<span class="type">Node|String|JSON</span> <span class="var">template</span> 
									, <span class="type">JSON</span> <span class="var">json</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							If HTML (node or string) is passed as template, it creates HTML nodes from <span class="var">json</span> 
							based on <span class="var">template</span>. 
						</p>
						<p>
							If JSON (Object or string) is passed as template, it creates new Array of JSON Object 
							from <span class="var">json</span> based on <span class="var">template</span>. 
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">template</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> HTML node to be used as template.
								</div>
							</dd>
							<dt><span class="var">template</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>Text, HTML or JSON string to be used as template.
								</div>
							</dd>
							<dt><span class="var">template</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> JSON object to be used as template.
								</div>
							</dd>
							<dt><span class="var">json</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Array of JSON objects to use as values.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional options for parsing
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">append</span></dt>
										<dd>Node to append results to</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							<span class="type">ChildNodes|Array|JSON</span> 
							If HTML is passed as <span class="template">template</span> it returns list of created nodes as ChildNodes reference or Array of nodes if the 
							<span class="var">append</span> option is used to append nodes automatically.
							If JSON is passed as <span class="template">template</span> it returns Array of JSON Objects.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<h5>HTML templating, Simplest usage</h5>
							<code>&lt;ul&gt;
	&lt;li class="template"&gt;
		&lt;h3&gt;{name}&lt;/h3&gt;
		&lt;p&gt;{description}&lt;/p&gt;
		&lt;a href="{url}">link&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;script&gt;
	var data = [
		{
			"name":"Manipulator",
			"description":"JavaScript framework",
			"url":"http://manipulator.parentnode.dk"
		},
		{
			"name":"Detector",
			"description":"Device detection"
			"url":"http://detector.parentnode.dk"
		}
	];
	var template = u.qs("li.template");
	var nodes = u.template(template, data);
&lt;/script&gt;</code>
							<p>Returns nodeList with 2 html nodes, shown below:</p>
							<code>&lt;li&gt;
	&lt;h3&gt;Manipulator&lt;/h3&gt;
	&lt;p&gt;JavaScript framework&lt;/p&gt;
	&lt;a href="http://manipulator.parentnode.dk">link&lt;/a&gt;
&lt;/li&gt;
&lt;li&gt;
	&lt;h3&gt;Detector&lt;/h3&gt;
	&lt;p&gt;Device detection&lt;/p&gt;
	&lt;a href="http://detector.parentnode.dk">link&lt;/a&gt;
&lt;/li&gt;</code>
						</div>
						<div class="example">
							<h5>With automatic appending</h5>
							<code>&lt;ul&gt;
	&lt;li class="template"&gt;
		&lt;h3&gt;{name}&lt;/h3&gt;
		&lt;p&gt;{description}&lt;/p&gt;
		&lt;a href="{url}">link&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;
&lt;script&gt;
	var data = [
		{
			"name":"Manipulator",
			"description":"JavaScript framework",
			"url":"http://manipulator.parentnode.dk"
		},
		{
			"name":"Detector",
			"description":"Device detection"
			"url":"http://detector.parentnode.dk"
		}
	];
	var list = u.qs("ul");
	var template = u.qs("li.template");
	var nodes = u.template(template, data, {"append":list});
&lt;/script&gt;</code>
							<p>Adds two new nodes to the UL, making the ul look like:</p>
							<code>&lt;ul&gt;
	&lt;li class="template"&gt;
		&lt;h3&gt;{name}&lt;/h3&gt;
		&lt;p&gt;{description}&lt;/p&gt;
		&lt;a href="{url}">link&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;h3&gt;Manipulator&lt;/h3&gt;
		&lt;p&gt;JavaScript framework&lt;/p&gt;
		&lt;a href="http://manipulator.parentnode.dk">link&lt;/a&gt;
	&lt;/li&gt;
	&lt;li&gt;
		&lt;h3&gt;Detector&lt;/h3&gt;
		&lt;p&gt;Device detection&lt;/p&gt;
		&lt;a href="http://detector.parentnode.dk">link&lt;/a&gt;
	&lt;/li&gt;
&lt;/ul&gt;</code>
						</div>


						<div class="example">
							<h5>JSON conversion</h5>
							<code>var template = {
	"name":{res1},
	"description":{res2},
	"url":{res3}
};

var data = [
	{
		"res1":"Manipulator",
		"res2":"JavaScript framework",
		"res3":"http://manipulator.parentnode.dk"
		"meta":{
			"key":"{1231-BFED-12312-21231}",
			"signature":"Xew-12345"
		},
	},
	{
		"res1":"Detector",
		"res2":"Device detection"
		"res3":"http://detector.parentnode.dk"
		"meta":{
			"key":"{1231-BFED-12312-21231}",
			"signature":"Xew-12345"
		},
	}
];

var new_json = u.template(template, data);
</code>
							<p>Returns lean JSON object with custom keys:</p>
							<code>[
	{
		"name":"Manipulator",
		"description":"JavaScript framework",
		"url":"http://manipulator.parentnode.dk"
	},
	{
		"name":"Detector",
		"description":"Device detection"
		"url":"http://detector.parentnode.dk"
	}
];</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>document.createElement</li>
								<li>Node.cloneNode</li>
								<li>Node.appendChild</li>
								<li>decodeURIComponent</li>
								<li>String.replace</li>
								<li>String.toLowerCase</li>
								<li>Array.push</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>None</li>
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
					<li><span class="file">u-fontsready.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li><span class="file">u-timer.js</span></li>
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
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-fontsready.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not supported</dd>

				<dt>tv</dt>
				<dd><span class="file">u-fontsready.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
