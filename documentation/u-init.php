<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docpage">
	<h1>Init</h1>

	Notes:
	When using dom-ready with webfonts - the line-height will update after dom-ready (when the fonts load) and
	this my have an impact on absolute positioning. This can be solved by always stating line-heights in the CSS.

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function">
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
							<dd class="syntax"><span class="type">_returntype_</span> = _functionname_(<span class="type">String</span> <span class="var">format</span> [, <span class="type">Mixed</span> <span class="var">timestamp</span> ]);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Format UNIX timestamp or reformat datetime string.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">format</span></dt>
							<dd>
								<div class="summary">
									<span class="type">_type_</span> _summary_
								</div>
							</dd>
							<dd>
								<div class="summary">
									<span class="type">_type_</span> _summary_
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">_type_</span> _returnsummary_</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>_function_</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>_function_</li>
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

	<div class="section segments">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd><span class="file">u-init.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-init.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-init.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-init.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-init.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-init.js</span></dd>
	
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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>