<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

	<div id="content">
		<h2>_docsname_</h2>

		<div class="section files">
			<div class="header">
				<h3>Files</h3>
			</div>
			<div class="body">

				<div class="files main">
					<h4>Main file</h4>
					<ul>
						<!-- specify main js file (like: u-dom.js) -->
						<li>u-.js</li>
					</ul>
				</div>

				<div class="files support">
					<h4>Segment support files</h4>
					<ul>
						<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
						<li>none</li>
					</ul>
				</div>

				<div class="files dependency">
					<h4>Dependency files</h4>
					<ul>
						<!-- specify segment support js files (like: u-string.js) -->
						<li>none</li>
					</ul>
				</div>

			</div>
		</div>

		<div class="section segments">
			<div class="header">
				<h3>Segment dependencies</h3>
			</div>
			<div class="body">
				<dl class="segments">
					<!-- specify which files are required for which segments -->
					<!-- add todo class if segment is not tested yet -->
					<dt>desktop</dt>
					<dd><span class="file">u-.js</span></dd>

					<dt>desktop_ie</dt>
					<dd><span class="file">u-.js</span></dd>

					<dt>desktop_light</dt>
					<dd><span class="file">u-.js</span></dd>

					<dt>tablet</dt>
					<dd><span class="file">u-.js</span></dd>

					<dt>tv</dt>
					<dd><span class="file">u-.js</span></dd>

					<dt>mobile_touch</dt>
					<dd><span class="file">u-.js</span></dd>
		
					<dt>mobile</dt>
					<dd>not tested</dd>
		
					<dt>mobile_light</dt>
					<dd>not tested</dd>

					<dt>basic</dt>
					<dd>not supported</dd>
				</dl>
			</div>
		</div>

		<div class="section functions">
			<div class="header">
				<h3>Functions</h3>
			</div>
			<div class="body">

				<div class="function">
					<div class="header">
						<h4>_functionname_</h4>
					</div>
					<div class="body">
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">_functionname_</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">_functionshorthand_</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">_returntype_</span> = _functionname_(<span class="type">String</span> <span class="var">format</span> [, <span class="type">Mixed</span> <span class="var">timestamp</span> ]);</dd>
						</dl>

						<div class="description">
							<h4>Description</h4>
							<p>_description_</p>
						</div>

						<div class="parameters">
							<h4>Parameters</h4>

							<dl class="parameters">
								<dt><span class="var">_var_</span></dt>
								<dd>
									<div class="summary">
										<span class="type">_type_</span> _summary_
									</div>
									<!-- optional details -->
									<div class="details">
										<!-- write parameter details -->
										<h5>Options</h5>
										<dl class="options">
											<!-- specific options -->
											<dt><span class="value">_value_</span></dt>
											<dd>_description_</dd>
										</dl>
									</div>
								</dd>
								<dt><span class="var">identifier</span></dt>
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

	</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>
