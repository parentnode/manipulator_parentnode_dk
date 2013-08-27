<? $page_title = "Flash documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:docpage">
	<h1>Flash</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.flashDetection">
				<div class="header">
					<h3>Util.flashDetection</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.flashDetection</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.flashDetection</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.flashDetection(
									<span class="type">String|Integer</span> <span class="var">version</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Detects if the browser has Flash support.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String|Integer</span> Optional version requirement
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">Integer</span></dt>
										<dd>Specific version to check for</dd>
										<dt><span class="value">String</span></dt>
										<dd>Version scope to check for, ie. "&lt;=8" checks for flash version less than or equal to 8.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Boolean</span> whether the browser has a valid flash plugin</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;script&gt;
	u.flashDetection();
&lt;/script&gt;</code>
							<p>Returns true if the browser has a flash plugin of any version.</p>
						</div>
						<div class="example">
							<code>&lt;script&gt;
	u.flashDetection(8);
&lt;/script&gt;</code>
							<p>Returns true if the browser has flash plugin, version 8.</p>
						</div>
						<div class="example">
							<code>&lt;script&gt;
	u.flashDetection("<=8");
&lt;/script&gt;</code>
							<p>Returns true if the browser has flash plugin, less or equal to version 8.</p>
						</div>
						<div class="example">
							<code>&lt;script&gt;
	u.flashDetection(">8");
&lt;/script&gt;</code>
							<p>Returns true if the browser has flash plugin, higher than version 8.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>isNaN</li>
								<li>String.match</li>
								<li>eval</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.flash">
				<div class="header">
					<h3>Util.flash</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.flash</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.flash</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.flash(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">url</span> 
									[, <span class="type">JSON</span> <span class="var">settings</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create a flash object and inject it as firstChild in <span class="var">node</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to inject flash object into
								</div>
							</dd>
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> path to .swf file
								</div>
							</dd>
							<dt><span class="var">settings</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with flash object settings
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">id</span></dt>
										<dd>id attribute of flash object - default is auto generated</dd>
										<dt><span class="value">width</span></dt>
										<dd>width attribute of flash object - default <span class="value">100%</span></dd>
										<dt><span class="value">height</span></dt>
										<dd>height attribute of flash object - default <span class="value">100%</span></dd>
										<dt><span class="value">background</span></dt>
										<dd>background attribute of flash object - default <span class="value">transparent</span></dd>
										<dt><span class="value">allowScriptAccess</span></dt>
										<dd>allowScriptAccess attribute of flash object - default <span class="value">always</span></dd>
										<dt><span class="value">menu</span></dt>
										<dd>menu attribute of flash object - default <span class="value">false</span></dd>
										<dt><span class="value">scale</span></dt>
										<dd>scale attribute of flash object - default <span class="value">showall</span></dd>
										<dt><span class="value">wmode</span></dt>
										<dd>wmode attribute of flash object - default <span class="value">transparent</span></dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> flash object node</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.qs(".scene");
	u.flash(scene, "/flash.swf");
&lt;/script&gt;</code>
							<p>Returns the object node injected into div.scene</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>Date</li>
								<li>document.createElement</li>
								<li>document.insertBefore</li>
								<li>switch ... case</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.explorer</li>
								<li>Util.querySelector</li>
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
					<li><span class="file">u-flash.js</span></li>
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
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-flash.js</span> +
					<span class="file">u-system.js</span> +
					<span class="file">u-dom.js</span>
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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>