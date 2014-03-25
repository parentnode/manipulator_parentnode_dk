<? $page_title = "System documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:docpage">
	<h1>System</h1>
	<p>Browser information for now.</p>
	<p>
		Preferably the detection is based purely on features specific to certain browsers and versions, to avoid unintended results
		with user-spoofed useragents. However, collecting this information is very time consuming and the ability to detect in spite of
		userAgent spoofing may vary.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.browser">
				<div class="header">
					<h3>Util.browser</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.browser</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.browser</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Mixed =
								Util.browser(
									<span class="type">String</span> <span class="var">model</span>
									[,<span class="type">Mixed</span> <span class="var">version</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Detect if browser matches a specific model and optional version scope.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">model</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> name of browser to check for
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">ie</span></dt>
										<dd>Internet Explorer</dd>
										<dt><span class="value">explorer</span></dt>
										<dd>Internet Explorer</dd>
										<dt><span class="value">firefox</span></dt>
										<dd>Firefox</dd>
										<dt><span class="value">gecko</span></dt>
										<dd>Firefox</dd>
										<dt><span class="value">webkit</span></dt>
										<dd>webkit based</dd>
										<dt><span class="value">chrome</span></dt>
										<dd>Chrome</dd>
										<dt><span class="value">safari</span></dt>
										<dd>Safari (or webkit based, not Chrome)</dd>
										<dt><span class="value">opera</span></dt>
										<dd>Opera</dd>
									</dl>
								</div>
								
							</dd>
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span>Optional. Version number or scope as <span class="value">6</span>, <span class="value">&lt;6</span>, <span class="value">&gt;12</span> etc.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							If scope is stated, function returns boolean (true for match, false for mismatch), 
							if only model is stated function returns version on match, false on mismatch.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.browser("ie", ">8");</code>
	
							<p>returns true if browser is IE and version greater than 8, else false</p>
						</div>
						<div class="example">
							<code>u.browser("firefox");</code>
	
							<p>returns version of Firefox if browser is Firefox, else false</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>navigator</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.support">
				<div class="header">
					<h3>Util.support</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.support</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.support(
									<span class="type">String</span> <span class="var">property</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Check if browser has support for CSS <span class="var">property</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">property</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> CSS property to check support for
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Boolean</span> Whether the browser supports the CSS-property.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<code>u.support("opacity");</code>
	
							<p>returns true if browser supports opacity, else false</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.documentElement</li>
								<li>String.replace</li>
								<li>String.toUpperCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function">
				<div class="header">
					<h3>Util.system - To be implemented</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.system</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.system</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Mixed = Util.system()</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p></p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>none</li>
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
					<li><span class="file">u-system.js</span></li>
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
				<dt>desktop</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-system.js</span></dd>
	
				<dt>mobile</dt>
				<dd class="todo">not tested</dd>
	
				<dt>mobile_light</dt>
				<dd class="todo">not tested</dd>

				<dt>basic</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>