<? $page_title = "Preloader documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docpage">
	<h1>Image - maybe renamed to preloader, since it is basically just an image-preloader</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function">
				<div class="header">
					<h3>Util.Image.load</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Image.load</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.i.load</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Image.load(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">url</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Loads image and makes callback to node.loaded, when loading is done.</p>
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

	<div class="section files">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<!-- specify main js file (like: u-dom.js) -->
					<li>u-.js</li>
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

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>