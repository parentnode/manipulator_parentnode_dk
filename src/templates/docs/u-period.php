<div class="scene docpage i:docpage">
	<h1>Period</h1>
	<p>
		Somewhat of an odd feature. Converting a timespan into chunks.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.period">
				<div class="header">
					<h3>Util.period</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.period</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.period(
									<span class="type">String</span> <span class="var">format</span> 
									[, <span class="type">JSON</span> <span class="var">time</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Format time in a readable manner or convert time formats.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">format</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Format setting for output
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">y</span></dt>
										<dd>Total years: 0 - infinity - NOT IMPLEMENTED</dd>
										<dt><span class="value">n</span></dt>
										<dd>Months split by years: 0 - 11 - NOT IMPLEMENTED</dd>
										<dt><span class="value">o</span></dt>
										<dd>Months split by years, with leading zeros: 00 - 11 - NOT IMPLEMENTED</dd>
										<dt><span class="value">O</span></dt>
										<dd>Total months: 0 - infinity - NOT IMPLEMENTED</dd>
										<dt><span class="value">w</span></dt>
										<dd>Weeks split by months: 0 - 4 - NOT IMPLEMENTED</dd>
										<dt><span class="value">W</span></dt>
										<dd>Total weeks: 0 - infinity - NOT IMPLEMENTED</dd>

										<dt><span class="value">c</span></dt>
										<dd>Days split by months: 0 - 30 - NOT IMPLEMENTED</dd>
										<dt><span class="value">d</span></dt>
										<dd>Days split by months, with leading zeros: 00 - 30 - NOT IMPLEMENTED</dd>
										<dt><span class="value">e</span></dt>
										<dd>Days split by weeks, with leading zeros: 0 - 6 - NOT IMPLEMENTED</dd>

										<dt><span class="value">D</span></dt>
										<dd>Total days: 0 - infinity</dd>

										<dt><span class="value">h</span></dt>
										<dd>Hours split by days, with leading zeros: 00 - 23</dd>
										<dt><span class="value">H</span></dt>
										<dd>Total hours: 0 - infinity</dd>
										<dt><span class="value">l</span></dt>
										<dd>Minutes split by hours: 0 - 59</dd>
										<dt><span class="value">m</span></dt>
										<dd>Minutes split by hours, with leading zeros: 00 - 59</dd>
										<dt><span class="value">M</span></dt>
										<dd>Total minutes: 0 - infinity</dd>

										<dt><span class="value">r</span></dt>
										<dd>Seconds split by minutes: 0 - 59</dd>
										<dt><span class="value">s</span></dt>
										<dd>Seconds split by minutes, with leading zeros: 00 - 59</dd>
										<dt><span class="value">S</span></dt>
										<dd>Total seconds: 0 - infinity</dd>

										<dt><span class="value">t</span></dt>
										<dd>Deciseconds, 1 digit: 0 - 9</dd>
										<dt><span class="value">T</span></dt>
										<dd>Centiseconds, 2 digits, with leading zeros: 00 - 99</dd>
										<dt><span class="value">u</span></dt>
										<dd>Milliseconds, 3 digits, with leading zeros: 000 - 999</dd>
										<dt><span class="value">U</span></dt>
										<dd>Total milliseconds: 0 - infinity</dd>
									</dl>
								</div>
							</dd>
							<dt><span class="var">time</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with time argument
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<p>One rules out the other, last entry counts.</p>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">seconds</span></dt>
										<dd>time in seconds</dd>
										<dt><span class="value">milliseconds</span></dt>
										<dd>time in milliseconds</dd>
										<dt><span class="value">minutes</span></dt>
										<dd>time in minutes</dd>
										<dt><span class="value">hours</span></dt>
										<dd>time in hours</dd>
										<dt><span class="value">days</span></dt>
										<dd>time in days</dd>
										<dt><span class="value">months</span></dt>
										<dd>time in months</dd>
										<dt><span class="value">years</span></dt>
										<dd>time in years</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> Formatted time string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.period("m:s.u", {"seconds":13.31809});</code>
							<p>Returns <script type="text/javascript">document.write(u.period("m:s.u", {"seconds":13.31809}));</script></p>
						</div>
						<div class="example">
							<code>u.period("D h:m:s.u", {"seconds":2013034.2347});</code>
							<p>Returns <script type="text/javascript">document.write(u.period("D h:m:s.u", {"seconds":2013034.2347}));</script></p>
						</div>
						<div class="example">
							<code>u.period("D", {"years":2});</code>
							<p>Returns <script type="text/javascript">document.write(u.period("D", {"years":2}));</script></p>
						</div>
						<div class="example">
							<code>u.period("H", {"months":4});</code>
							<p>Returns <script type="text/javascript">document.write(u.period("H", {"months":4}));</script></p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>Switch ... case</li>
								<li>Math.floor</li>
								<li>Math.round</li>
								<li>String.replace</li>
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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-period.js</span></li>
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
				<dd><span class="file">u-period.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-period.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-period.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-period.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-period.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-period.js</span></dd>
	
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
