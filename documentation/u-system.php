<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docpage">
	<h1>System</h1>

	<p>Make simpler u.browser()?</p>
	<p>Use version syntax from u.flashDetection</p>

	<div class="section">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function">
				<div class="header">
					<h3>Util.explorer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.explorer</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.explorer([<span class="type">Number</span> <span class="var">version</span><span class="type">String</span> <span class="var">scope</span>])</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if IE browser is used. Can check for version also.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span>Optional. The number of version you're looking for
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>Optional. Bigger or less option
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not IE. If IE it will return the version number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.explorer(8, ">")
	
							returns <span class="type">String</span> 9.0 if you're in a IE 9
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function">
				<div class="header">
					<h3>Util.safari</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.safari</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.safari([<span class="type">Number</span> <span class="var">version</span><span class="type">String</span> <span class="var">scope</span>])</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if Safari browser is used. Can check for version also.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span>Optional. The number of version you're looking for
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>Optional. Bigger or less option
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not Safari. If Safari it will return the version number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.safari(5, ">")
	
							returns <span class="type">String</span> 5.0 if you're in a Safari 5
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function">
				<div class="header">
					<h3>Util.webkit</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.explorer</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.explorer([<span class="type">Number</span> <span class="var">version</span><span class="type">String</span> <span class="var">scope</span>])</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if IE browser is used. Can check for version also.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span>Optional. The number of version you're looking for
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>Optional. Bigger or less option
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not IE. If IE it will return the version number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.explorer(8, ">")
	
							returns <span class="type">String</span> 9.0 if you're in a IE 9
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			
			<div class="function">
				<div class="header">
					<h3>Util.firefox</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.firefox</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.firefox([<span class="type">Number</span> <span class="var">version</span><span class="type">String</span> <span class="var">scope</span>])</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if Firefox browser is used. Can check for version also.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">version</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span>Optional. The number of version you're looking for
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>Optional. Bigger or less option
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not Firefox. If Firefox it will return the version number</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.firefox(8, ">")
	
							returns <span class="type">String</span> 11.0 if you're in a Firefox 11
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			
			<div class="function">
				<div class="header">
					<h3>Util.opera</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.opera</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.opera()</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if Opera browser is used.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							None
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not Opera. True if Opera</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.opera()
	
							returns <span class="type">String</span> True if you're in an Opera browser
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>


			<div class="function">
				<div class="header">
					<h3>Util.windows</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.windows</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.windows()</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if running on Windows 
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							None
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not running on Windows. True if running on Windows</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.windows()
	
							returns <span class="type">String</span> True if you're using Windows
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			
			
			<div class="function">
				<div class="header">
					<h3>Util.osx</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.osx</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">none</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">Util.osx()</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if running OS X
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							None
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>False if not running OS X. True if running OS X</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							u.osx()
	
							returns <span class="type">String</span> True if you're running OS X
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>None</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>none</li>
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
					<li><span class="file">u-system.js</span></li>
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
				<dd><span class="file">u-system.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-system.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-system.js</span></dd>
	
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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>