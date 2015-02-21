<div class="scene docpage i:docpage">
	<h1>Debugging</h1>
	<p>One hardly ever gets it right the first time.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.nodeId">
				<div class="header">
					<h3>Util.nodeId</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.nodeId</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = Util.nodeId(<span class="type">Node</span> <span class="var">node</span> [, <span class="type">Boolean</span> <span class="var">include_path</span> ]);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Identify node by looking for id, classname or nodename.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to identify
								</div>
							</dd>
							<dt><span class="var">include_path</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional, include node path in identification
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> node identification based on best available id for node.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.nodeId(u.qs("#content div"), 1);</code>
							<p>returns <script type="text/javascript">document.write(u.nodeId(u.qs("#content div"), 1));</script></p>
						</div>
						<div class="example">
							<code>u.nodeId(u.qs("#content div"));</code>
							<p>returns <script type="text/javascript">document.write(u.nodeId(u.qs("#content div")));</script></p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.bug">
				<div class="header">
					<h3>Util.bug</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.bug</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = Util.bug(
								<span class="type">String</span> <span class="var">message</span> 
								[, <span class="type">Number</span> <span class="var">corner</span>  
									[, <span class="type">String</span> <span class="var">color</span> ]
								]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Simple development debugging function which outputs message to screen in overlay attached to a 
							browser corner. Also outputs messages to console.log when available.
						</p>

						<h5>u.bug_force</h5>
						<p>
							Overlay is only injected in page if u.debugURL returns true. This can
							be overridden by setting <span class="var">u.bug_force = true;</span> in your script.
						</p>

						<h5>u.bug_console_only</h5>
						<p>
							Overlay is injected in page as default. This can
							be overridden by setting <span class="var">u.bug_console_only = true;</span> in your script.
						</p>

						<h5>u.bug_position</h5>
						<p>
							Default positioning of bug-message is <span class="value">absolute</span>. This can
							be overridden by setting u.bug_position = <span class="value">fixed|relative|static</span>
							in your script.
						</p>

						<h5>u.bug_bg</h5>
						<p>
							Default background color of bug-message is <span class="value">white</span>. This can
							be overridden by setting <span class="var">u.bug_bg = #ff0000;</span> (specifying whatever color you want)
							in your script.
						</p>

						<h5>u.bug_max_width</h5>
						<p>
							Default width of bug-message is <span class="value">auto</span>. This can
							be overridden by setting <span class="var">u.bug_max_width = 123;</span> (px will be added by u.bug)
							in your script.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">message</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> message to output to screen/console.
								</div>
							</dd>
							<dt><span class="var">corner</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> Optional, corner. Default top left. If <span class="var">corner</span> is not an Integer, parameter is assumed to contain <span class="var">color</span>.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">0-3</span></dt>
										<dd>Corner to attach message to, starting with top left corner continuing clockwise.</dd>
									</dl>
								</div>
							</dd>
							<dt><span class="var">color</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional, text-color. Default black.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span> Outputs message to screen.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.bug("hello world");</code>
							<p>outputs "hello world" in top left corner, using black text-color.</p>
						</div>
						<div class="example">
							<code>u.bug("hello world", 0, "red");</code>
							<p>outputs "hello world" in top left corner, using red text-color.</p>
						</div>
						<div class="example">
							<code>u.bug("hello world", 2);</code>
							<p>outputs "hello world" in bottom right corner, using black text-color.</p>
						</div>
						<div class="example">
							<code>u.bug("hello world", "green");</code>
							<p>outputs "hello world" in top left corner, using green text-color.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.replace</li>
								<li>typeof</li>
								<li>isNaN</li>
								<li>Node.innerHTML</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelector</li>
								<li>Util.debugURL</li>
								<li>Util.appendElement</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.xInObject">
				<div class="header">
					<h3>Util.xInObject</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.xInObject</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = Util.xInObject(
								<span class="type">Object</span> <span class="var">object</span>
								[, <span class="type">JSON</span> <span class="var">_options</span>]
							);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Output each index/value pair of <span class="var">object</span> using Util.bug.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">object</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Object</span> object to output
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for object debugging.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">return</span></dt>
										<dd>
											return debugging information as string instead of sending it to u.bug. Default false.
										</dd>
										<dt><span class="value">objects</span></dt>
										<dd>
											Explore nested objects by applying u.xInObject to nested objects (can cause infinite loops). Default false.
										</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span> Object content is outputted to screen via Util.bug</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.xInObject(document.body);</code>
							<p>Will output a looong list of all attributes, functions, constants, etc.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

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
								<li>Util.debugURL</li>
								<li>Util.nodeId</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.exception">
				<div class="header">
					<h3>Util.exception</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.exception</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = Util.exception(
								<span class="type">String</span> <span class="var">name</span>, 
								<span class="type">Object</span> <span class="var">arguments</span>,
								<span class="type">String</span> <span class="var">exception</span>
							);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Uses u.bug to generate standard exception output.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> The name of function exception occured in
								</div>
							</dd>
							<dt><span class="var">arguments</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Object</span> The arguments object from the function causing the exception
								</div>
							</dd>
							<dt><span class="var">exception</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> The exception message
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
							<h5>JavaScript</h5>
							<ul>
								<li>arguments.callee.caller</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>Util.bug</p>
							<p>Util.xInObject</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.debugURL">
				<div class="header">
					<h3>Util.debugURL</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.debugURL</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = Util.debugURL();</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Is the current url a test-url? Does it run on .local. The following functions only output 
							to screen or console if site is running on valid test-urls.
						</p>
						<p>To override the domain detection in other debugging functions, set <span class="var">u.bug_force = true;</span> in your script</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Boolean</span> Debug url returns true, else false.</p>
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
							<ul>
								<li>Sting.match</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>Nothing</p>
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
					<li>u-debug.js</li>
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
				<dd><span class="file">u-debug.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-debug.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-debug.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-debug.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-debug.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-debug.js</span></dd>
	
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
