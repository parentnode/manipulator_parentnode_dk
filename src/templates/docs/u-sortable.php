<div class="scene docpage i:docpage">
	<h1>Sortable</h1>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.sortable">
				<div class="header">
					<h3>Util.sortable</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.sortable</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								Util.sortable(
									<span class="type">Node</span> <span class="var">scope</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Makes all or specific nodes in scope sortable, with callbacks on pick, move and drop.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> scope containing sortable nodes
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional rules for sorting
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">picked</span></dt>
										<dd>Name of callback function when element is picked (default picked)</dd>
										<dt><span class="value">moved</span></dt>
										<dd>Name of callback function when element is moved (default moved)</dd>
										<dt><span class="value">dropped</span></dt>
										<dd>Name of callback function when element is dropped (default dropped)</dd>

										<dt><span class="value">draggables</span></dt>
										<dd>Classname on draggable nodes - only these will be draggable (default all li's)</dd>
										<dt><span class="value">targets</span></dt>
										<dd>Classname on target nodes - you'll only be able to drag nodes to these elements (default first UL in scope)</dd>
										<dt><span class="value">layout</span></dt>
										<dd>Force vertical/horisontal interpretation of scope (default auto-detect)</dd>

										<dt><span class="value">allow_nesting</span></dt>
										<dd>Allow building nested structures when sorting nodes</dd>
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
							<dt>scope.picked(event)</dt>
							<dd>when draggable node is picked</dd>
							<dt>scope.moved(event)</dt>
							<dd>when draggable node is moved</dd>
							<dt>scope.dropped(event)</dt>
							<dd>when draggable node is dropped</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<p><a href="/tests/u-sortable">See the test page for various implementations</a>.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>switch ... case</li>
								<li>for ... in</li>
								<li>document.createElement</li>
								<li>document.appendChild</li>
								<li>document.insertBefore</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelectorAll</li>
								<li>Util.querySelector</li>
								<li>Util.appendElement</li>
								<li>Util.getComputedStyle</li>
								<li>Util.applyStyle</li>
								<li>Util.classVar</li>
								<li>Util.actualHeight</li>
								<li>Util.absoluteY</li>
								<li>Util.absoluteX</li>
								<li>Util.eventX</li>
								<li>Util.eventY</li>

								<li>Util.Events.kill</li>
								<li>Util.Events.removeWindowEndEvent</li>
								<li>Util.Events.removeWindowMoveEvent</li>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.addWindowMoveEvent</li>
								<li>Util.Events.addWindowEndEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.getStructure">
				<div class="header">
					<h3>scope.getStructure</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.getStructure</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								scope.getStructure();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a getStructure method. It returns the 
							structure of the sortable nodes in an Array.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>scope.getRelation</li>
								<li>scope.getPositionInList</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.disableNodeDrag">
				<div class="header">
					<h3>scope.disableNodeDrag</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.disableNodeDrag</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								Util.sortable(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a disableNodeDrag method. It allows you to
							disable dragging on a specific node.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to disable drag on
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeStartEvent</li>
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
					<li><span class="file">u-sortable.js</span></li>
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
				<dt>desktop</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_light.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-geometry-desktop_light.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_light.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-geometry-desktop_light.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
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
