<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docpage">
	<h1>String</h1>
	<p>String manipulation and unique key generation.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.cutString">
				<div class="header">
					<h3>Util.cutString</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.cutString</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.cutString</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String = 
								Util.cutString(
									<span class="type">String</span> <span class="var">string</span>,
									<span class="type">Number</span> <span class="var">length</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Will cut <span class="var">string</span> to <span class="var">length</span>. Will end the string with "..."
							if string is longer than length. Compensates for entities (&amp;quot;, &amp;aelig;, etc.) when calculating string length.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> string to cut
								</div>
							</dd>
							<dt><span class="var">length</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> length of the string you want returned
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>The cut string.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var string = "This function will cut the string to the number of letters want";
u.cutString(string, 10);</code>
							<p>returns <span class="type">String</span> with text: "This fu..."</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>String.indexOf</li>
								<li>String.substring</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

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

						<div class="jes">
							<h5>JES</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.randomKey">
				<div class="header">
					<h3>Util.randomKey</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.randomKey</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.randomKey</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.randomKey(
									[<span class="type">Number</span> <span class="var">length</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Will return a random key consisting of lowercase letters and/or numbers. If no length is specified, 8 is the default length.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">length</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional. The length of the random key.
								</div>
							</dd>
			
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>A random key consisting of lowercase letters and/or numbers</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.randomKey(10);</code>
	
							<p>returns <span class="type">String</span> like cc65epfpsq</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.split</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>u.random</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.randomString">
				<div class="header">
					<h3>Util.randomString</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.randomString</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.randomString</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.randomString(
									[<span class="type">Number</span> <span class="var">length</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Will generate a random string consisting of uppercase and lowercase letters. If no length is specified, 8 is the default length.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">length</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> Optional. The length of the random string
								</div>
							</dd>
			
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>A random string consisting of letters</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.randomString(10);</code>
	
							<p>returns <span class="type">String</span> like mFrHGruzzo</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.split</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<ul>
								<li>u.random</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.uuid">
				<div class="header">
					<h3>Util.uuid</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.uuid</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.uuid</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.uuid();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Will generate a UUID version 4 string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>none</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>A unique UUID string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.uuid();</code>
	
							<p>returns <span class="type">String</span> like 75376fed-e97e-44a6-94fe-b9f75e850859</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.split</li>
								<li>Array.join</li>
								<li>Math.random</li>
							</ul>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.stringOr">
				<div class="header">
					<h3>Util.stringOr</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stringOr</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.stringOr</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.stringOr(
									<span class="type">String</span> <span class="var">string</span>,
									<span class="type">String</span> <span class="var">replacement</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if string is not <span class="value">undefined</span> or <span class="value">null</span>. If string is valid, returns it. If not, returns replacement instead of string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to check value of
								</div>
							</dd>
							<dt><span class="var">replacement</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to return if value is not valid
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Either string (if not undefined or null) or replacement</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.stringOr(0, "zero");</code>
	
							<p>returns 0</p>
						</div>
						<div class="example">
							<code>u.stringOr(, "zero");</code>
	
							<p>returns zero</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="jes">
							<h5>JES</h5>
							<p>none</p>
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
					<li><span class="file">u-string.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li><span class="file">u-string-desktop_light.js</span></li>
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
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-string.js</span> + 
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-string.js</span></dd>
	
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