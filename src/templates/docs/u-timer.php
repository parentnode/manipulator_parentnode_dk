<div class="scene docpage i:docpage">
	<h1>Timer</h1>
	<p>Timers and intervals. Easy.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Timer.setTimer">
				<div class="header">
					<h3>Util.Timer.setTimer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.setTimer</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.setTimer</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.Timer.setTimer(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function|String</span> <span class="var">action</span>,
									<span class="type">Number</span> <span class="var">timeout</span>
									[, <span class="type">Mixed</span> <span class="var">param</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set timer, based on setTimeout, but action is executed as node.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to execute action on
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function|String</span> Function or name of function to execute on timeout
								</div>
							</dd>
							<dt><span class="var">timeout</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> timeout in milliseconds
								</div>
							</dd>
							<dt><span class="var">param</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Optional parameter to pass to callback when timeout occurs.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> timer_id, which can be used to reset timer.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<h5>Plain timer - action as string (lowest memory footprint)</h5>
							<code>var node = u.qs("#node");
node.timerDone = function() {
	// timer done
}
u.t.setTimer(node, "timerDone", 500);</code>
							<p>Returns timer_id.</p>
						</div>
						<div class="example">
							<h5>Plain timer - function reference</h5>
							<code>var node = u.qs("#node");
node.timerDone = function() {
	// timer done
}
u.t.setTimer(node, node.timerDone, 500);</code>
							<p>Returns timer_id.</p>
						</div>
						<div class="example">
							<h5>Plain timer - inline function</h5>
							<code>var node = u.qs("#node");
u.t.setTimer(node, function() {
	// timer done
}, 500);</code>
							<p>Returns timer_id.</p>
						</div>
						<div class="example">
							<h5>Passing parameter</h5>
							<code>var node = u.qs("#node");
node.timerDone = function(string) {
	
	// timer done
	alert(string);
}
u.t.setTimer(node, node.timerDone, 500, "hello");</code>
							<p>Returns timer_id.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>setTimeout</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Timer.resetTimer">
				<div class="header">
					<h3>Util.Timer.resetTimer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.resetTimer</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.resetTimer</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Timer.resetTimer(
									<span class="type">Number</span> <span class="var">id</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Reset timer, using clearTimeout. Prevent it from executing action.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">id</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> timer id to reset
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
						<div class="example">
							<code>node.timer_id = u.t.setTimer(node, callbackFunction, 500);
u.t.resetTimer(node.timer_id);</code>
							<p>Timer never fires because of timer reset.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>clearTimeout</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Timer.resetTimer">
				<div class="header">
					<h3>Util.Timer.resetAllTimers</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.resetAllTimers</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.resetAllTimers</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Timer.resetAllTimers();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Reset all timers.</p>
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
						
						<div class="example">
							<code>node.timer_id = u.t.setTimer(node, callbackFunction, 500);
u.t.resetTimer(node.timer_id);</code>
							<p>Timer never fires because of timer reset.</p>
						</div>

					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Timer.resetTimer</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Timer.setInterval">
				<div class="header">
					<h3>Util.Timer.setInterval</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.setInterval</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.setInterval</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.Timer.setInterval(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>,
									<span class="type">Number</span> <span class="var">timeout</span>
									[, <span class="type">Mixed</span> <span class="var">param</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set interval, based on setInterval, but action is executed as node.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to execute action on
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> Function to execute on timeout
								</div>
							</dd>
							<dt><span class="var">timeout</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> timeout in milliseconds
								</div>
							</dd>
							<dt><span class="var">param</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Optional parameter to pass to callback when timeout occurs.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> interval_id, which can be used to reset interval.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<code>var node = u.qs("#node");
node.intervalDone = function() {
	// done, again and again...
}
u.t.setInterval(node, node.intervalDone, 500);</code>
							<p>Returns interval_id.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>setInterval</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Timer.resetInterval">
				<div class="header">
					<h3>Util.Timer.resetInterval</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.resetInterval</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.resetInterval</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Timer.resetInterval(
									<span class="type">Number</span> <span class="var">id</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Reset interval, using clearInterval. Prevent it from executing action.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">id</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> interval id to reset
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
						<code>var interval_id = u.t.setInterval(node, callbackFunction, 500);
u.t.resetInterval(interval_id);</code>
						<p>callbackFunction never trigered, we reset interval.</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>clearInterval</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Timer.resetAllIntervals">
				<div class="header">
					<h3>Util.Timer.resetAllIntervals</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Timer.resetAllIntervals</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.t.resetAllIntervals</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Timer.resetAllIntervals();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Reset all intervals.</p>
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
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Timer.resetInterval</li>
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
					<li><span class="file">u-timer.js</span></li>
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

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd><span class="file">u-timer.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-timer.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-timer.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-timer.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-timer.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-timer.js</span></dd>
	
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
