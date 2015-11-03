<div class="scene docpage i:docpage">
	<h1>Math</h1>
	<p>Math related functions and extended versions of normal Math functions.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.random">
				<div class="header">
					<h3>Util.random</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.random</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.random</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Number = 
								Util.random(
									<span class="type">Number</span> <span class="var">min</span>,
									<span class="type">Number</span> <span class="var">max</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Generate a random number between min and max (both included).
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">min</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> The min number that can be returned
								</div>
							</dd>
							<dt><span class="var">max</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> The max number that can be returned
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>A random number from the given min/max range</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.random(1,10);</code>
	
							<p>returns <span class="type">Number</span> between 1 and 10. Both included.</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Math.round</li>
								<li>Math.random</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.round">
				<div class="header">
					<h3>Util.round</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.round</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.round(
									<span class="type">Number</span> <span class="var">number</span>, 
									<span class="type">Integer</span> <span class="var">decimals</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Round <span class="var">number</span> to <span class="var">decimals</span></p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">number</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> number to round
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> rounded number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.round(0.1234567, 5);</code>
	
							<p>returns <span class="type">Number</span> 0.12346</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Math.pow</li>
								<li>Math.round</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.numToHex">
				<div class="header">
					<h3>Util.numToHex</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.numToHex</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Hex</span> = 
								Util.numToHex(
									<span class="type">Number</span> <span class="var">num</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Convert <span class="var">num</span> to Hex value</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">num</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> number to convert to Hex
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Hex</span> hex value of number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.numToHex(255);</code>
	
							<p>returns <span class="type">String</span> ff</p>
						</div>
						<div class="example">
							<code>Util.numToHex(47);</code>
	
							<p>returns <span class="type">String</span> 2f</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>Number.toString</li>
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

			<div class="function" id="Util.hexToNum">
				<div class="header">
					<h3>Util.hexToNum</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.hexToNum</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.hexToNum(
									<span class="type">Hex</span> <span class="var">hex</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Convert <span class="var">hex</span> to Numeric value</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">hex</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Hex</span> hex to convert to number
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> Numeric value of Hex</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.hexToNum("ff");</code>
	
							<p>returns <span class="type">String</span> 255</p>
						</div>
						<div class="example">
							<code>Util.hexToNum("2f");</code>
	
							<p>returns <span class="type">String</span> 47</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>parseInt</li>
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
					<li><span class="file">u-math.js</span></li>
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
				<dt>desktop_edge</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-.mathjs</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-math.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
