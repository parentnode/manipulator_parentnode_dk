<div class="scene docpage i:docpage">
	<h1>Date</h1>
	<p>Format your dates easily.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.date">
				<div class="header">
					<h3>Util.date</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>

						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.date</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">
								<span class="type">String</span> = Util.date(
								<span class="type">String</span> <span class="var">format</span> 
								[, <span class="type">Mixed</span> <span class="var">timestamp</span> 
								[, <span class="type">Array</span> <span class="var">months</span>]
								]);
							</dd>
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
									<span class="type">String</span> date/time format
								</div>
								<div class="details">

									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">d</span></dt>
										<dd>Day of the month, 2 digits with leading zeros: 01 to 31</dd>

										<dt><span class="value">j</span></dt>
										<dd>Day of the month without leading zeros: 1 to 31</dd>

										<dt><span class="value">m</span></dt>
										<dd>Numeric representation of a month, with leading zeros: 01 through 12</dd>

										<dt><span class="value">n</span></dt>
										<dd>Numeric representation of a month, without leading zeros: 1 through 12</dd>

										<dt><span class="value">F</span></dt>
										<dd>Full month string, given as array</dd>

										<dt><span class="value">Y</span></dt>
										<dd>Full numeric representation of a year, 4 digits</dd>

										<dt><span class="value">G</span></dt>
										<dd>24-hour format of an hour without leading zeros: 0 through 23</dd>

										<dt><span class="value">H</span></dt>
										<dd>24-hour format of an hour with leading zeros 00 through 23</dd>

										<dt><span class="value">i</span></dt>
										<dd>Minutes with leading zeros 00 to 59</dd>

										<dt><span class="value">s</span></dt>
										<dd>Seconds, with leading zeros	00 through 59</dd>
									</dl>
								</div>
							</dd>
			
							<dt><span class="var">timestamp</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String/Number</span> Optional, unix timestamp in milliseconds since 1970 or valid Date-string. If <span class="var">timestamp</span> is omitted, current time is used.
								</div>
							</dd>
							<dt><span class="var">months</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Array</span> Optional, Array with months. If <span class="var">months</span> is omitted, the &quot;F&quot;-character cannot be used.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> Formatted datetime string.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<code>u.date("Y-m-d H:i:s");</code>
							<p>returns <script type="text/javascript">document.write(u.date("Y-m-d H:i:s"));</script></p>
						</div>
						<div class="example">
							<code>u.date("Y-m-d", 1331809993423);</code>
							<p>returns <script type="text/javascript">document.write(u.date("Y-m-d", 1331809993423));</script></p>
						</div>
						<div class="example">
							<code>u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)");</code>
							<p>returns <script type="text/javascript">document.write(u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)"));</script></p>
						</div>
						<div class="example">
							<code>u.date("j/n", "Sat Mar 10 17:58:43 +0000 2012");</code>
							<p>returns <script type="text/javascript">document.write(u.date("j/n", "Sat Mar 10 17:58:43 +0000 2012"));</script></p>
						</div>
						<div class="example">
							<code>u.date("F d, Y", false, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);</code>
							<p>returns <script type="text/javascript">document.write(u.date("F d, Y", false, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]));</script></p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>String.replace</li>
								<li>Array.slice</li>
								<li>Date</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>Nothing</p>
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
					<li><span class="file">u-date.js</span></li>
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
				<dd><span class="file">u-date.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-date.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-date.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-date.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-date.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-date.js</span></dd>
	
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
