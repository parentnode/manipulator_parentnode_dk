<div class="scene docpage i:docpage">
	<h1>Form builder</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Form.addForm">
				<div class="header">
					<h3>Util.Form.addForm</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.addForm</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node Form</span> = 
								Util.Form.addForm(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create HTML form, append it to node, and return it.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to append form to
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> JSON object with form options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">name</span></dt>
										<dd>Form name</dd>
										<dt><span class="value">action</span></dt>
										<dd>Form action</dd>
										<dt><span class="value">method</span></dt>
										<dd>Form method</dd>
										<dt><span class="value">class</span></dt>
										<dd>Form class</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> Newly created form</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Form.addFieldset">
				<div class="header">
					<h3>Util.Form.addFieldset</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.addFieldset</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node Fieldset</span> = 
								Util.Form.addFieldset(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create HTML fieldset, append it to node, and return it.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to append form to
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> Newly created fieldset</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Form.addField">
				<div class="header">
					<h3>Util.Form.addField</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.addField</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node Field</span> = 
								Util.Form.addField(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create HTML div.field (input wrapped in div), append it to node, and return it.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to append field to
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> JSON object with field options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">label</span></dt>
										<dd>Input label</dd>
										<dt><span class="value">name</span></dt>
										<dd>Input name</dd>
										<dt><span class="value">value</span></dt>
										<dd>Input value</dd>
										<dt><span class="value">type</span></dt>
										<dd>Input type</dd>
										<dt><span class="value">class</span></dt>
										<dd>Input class</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> Newly created field</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Form.addAction">
				<div class="header">
					<h3>Util.Form.addAction</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.addAction</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node Form</span> = 
								Util.Form.addAction(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Create HTML action (button), append it to node, and return it.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to append action to
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> JSON object with form options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">name</span></dt>
										<dd>Action name</dd>
										<dt><span class="value">type</span></dt>
										<dd>Action type</dd>
										<dt><span class="value">value</span></dt>
										<dd>Action value</dd>
										<dt><span class="value">class</span></dt>
										<dd>Action class</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Node</span> Newly created Action</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.appendElement</li>
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
					<li><span class="file">u-form-builder.js</span></li>
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
				<dt>desktop</dt>
				<dd><span class="file">u-form-builder.js</span></dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-form-builder.js</span> +
					<span class="file">u-dom.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-form-builder.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-form-builder.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-form-builder.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-form-builder.js</span></dd>
	
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
