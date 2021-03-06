<div class="scene docpage i:docpage">
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
						<h4>Return values</h4>
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
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>String.indexOf</li>
								<li>String.substring</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
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
						<h4>Return values</h4>
						<p>A random string consisting of letters</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.randomString(10);</code>
	
							<p>returns <span class="type">String</span> like mFrHGruzzo</p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.split</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
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
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>A unique UUID string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.uuid();</code>
	
							<p>returns <span class="type">String</span> like 75376fed-e97e-44a6-94fe-b9f75e850859</p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.split</li>
								<li>Array.join</li>
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

			<div class="function" id="Util.prefix">
				<div class="header">
					<h3>Util.prefix</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.prefix</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.prefix(
									<span class="type">String</span> <span class="var">string</span>,
									<span class="type">Number</span> <span class="var">length</span>,
									[<span class="type">String</span> <span class="var">prefix</span>]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Pad <span class="var">string</span> to <span class="var">length</span> using <span class="var">prefix</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to be padded
								</div>
							</dd>
							<dt><span class="var">length</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> length to pad string to
								</div>
							</dd>
							<dt><span class="var">prefix</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Optional. String to use as prefix padding. Default "0".
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>A string padded to length using prefix</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.prefix(1, 2);</code>
	
							<p>returns <span class="type">String</span> 01</p>
						</div>
						<div class="example">
							<code>Util.prefix("F", 5, "-");</code>
	
							<p>returns <span class="type">String</span> ----F</p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>.toString</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.eitherOr">
				<div class="header">
					<h3>Util.eitherOr</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.eitherOr</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.eitherOr(
									<span class="type">Mixed</span> <span class="var">either</span>,
									<span class="type">Mixed</span> <span class="var">or</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if <span class="var">either</span> is not <span class="value">undefined</span> or <span class="value">null</span>. If <span class="var">either</span> is valid, return it. If not, returns <span class="var">or</span> instead.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">either</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Object/String to check
								</div>
							</dd>
							<dt><span class="var">or</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Object/String to return if <span class="var">either</span> is not valid
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Either <span class="var">either</span> (if not undefined or null) or <span class="var">or</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.eitherOr(0, "zero");</code>
	
							<p>returns 0</p>
						</div>
						<div class="example">
							<code>u.eitherOr(, "zero");</code>
	
							<p>returns zero</p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.upperCaseFirst">
				<div class="header">
					<h3>Util.upperCaseFirst</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.upperCaseFirst</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ucfirst</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.upperCaseFirst(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make first letter in word uppercase</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> string to perform case conversion on
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">String</span> string with first letter in uppercase</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.ucfirst("martin")</code>
							<p>Returns "Martin"</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.toUpperCase</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.lowerCaseFirst">
				<div class="header">
					<h3>Util.lowerCaseFirst</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.lowerCaseFirst</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.lcfirst</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.lowerCaseFirst(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make first letter in word lowercase</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> string to perform case conversion on
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">String</span> string with first letter in lowercase</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.lcfirst("ParentNode")</code>
							<p>Returns "parentNode"</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.toLowerCase</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.normalize">
				<div class="header">
					<h3>Util.normalize</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.normalize</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.normalize(string);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Normalizes string by replacing known special chars with a-z equivalent, ie. Æ becomes AE.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to normalize
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Normalized string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.normalize("København er så lækker");</code>
							<p>returns <span class="value">Koebenhavn er saa laekker</span></p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>RegExp</p>
							<p>String.replace</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.superNormalize">
				<div class="header">
					<h3>Util.superNormalize</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.superNormalize</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.superNormalize(string);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Normalizes string with u.normalize and then lowercasing and replacing any special chars and spaces with - (hyphens). Removes any double or trailing 
							hyphens before returning string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to superNormalize
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Normalized string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.superNormalize("København er så lækker");</code>
							<p>returns <span class="value">koebenhavn-er-saa-laekker</span></p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.toLowerCase</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>u.normalize</li>
								<li>u.stripTags</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.stripTags">
				<div class="header">
					<h3>Util.stripTags</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stripTags</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.stripTags(string);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Remove any HTML tags from string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to strip tags from
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>String without any HTML tags</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.stripTags("<strong>København</strong> er så <a href="/">lækker</a>");</code>
							<p>returns <span class="value">København er så lækker</span></p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>u.text</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.pluralize">
				<div class="header">
					<h3>Util.pluralize</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.pluralize</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.pluralize(count, singular, plural);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Pluralize quantity descriptive string, based on count value.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">count</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> Quantity used to determine singular/plural.
								</div>
							</dd>
							<dt><span class="var">singular</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to use in singular case. 
								</div>
							</dd>
							<dt><span class="var">plural</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to use in plural case. 
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Quantity specific string, pluralized if needed.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.pluralize(hodependencies.length, "house", "hodependencies");</code>
	
							<p>If hodependencies.length is 1, then it returns <span class="value">1 house</span>. If hodependencies.length is 2, it returns <span class="value">2 hodependencies</span>.</p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.isStringJSON">
				<div class="header">
					<h3>Util.isStringJSON</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.isStringJSON</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.isStringJSON</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.isStringJSON(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Checks if string contains JSON object. If string contains JSON, JSON-object is returned, and object.isJSON is added to object.</p>
						<p>Note: This test is automatically performed on all request responses before being returned to callback function.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">String</span></dt>
							<dd>
								<div class="summary">
									<span class="type">string</span> string to validate for JSON content
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Mixed</span> JSON object if found, else <span class="value">false</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>Util.isStringJSON('{"name":"manipulator"}');</code>
							<p>Returns JSON object.</p>
						</div>

						<div class="example">
							<code>Util.isStringJSON('manipulator');</code>
							<p>Returns <span class="value">false</span>.</p>
						</div>

					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.substr</li>
								<li>String.trim</li>
								<li>String.match</li>
								<li>try ... catch</li>
								<li>JSON.parse</li>
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

			<div class="function" id="Util.isStringHTML">
				<div class="header">
					<h3>Util.isStringHTML</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.isStringHTML</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.isStringHTML</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.isStringHTML(
									<span class="type">String</span> <span class="var">string</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Checks if string contains DOM object, also knows as HTML. If string contains HTML, DOM-object is returned, and object.isHTML is added to object.</p>
						<p>Note: This test is automatically performed on all request responses before being returned to callback function.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">String</span></dt>
							<dd>
								<div class="summary">
									<span class="type">string</span> string to validate for HTML content
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Mixed</span> DOM object if found, else <span class="value">false</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">					
							<code>Util.isStringHTML('&lt;div class=&quot;scene&quot;&gt;manipulator&lt;/div&gt;');</code>
							<p>Returns HTML object.</p>
						</div>

						<div class="example">
							<code>Util.isStringHTML('{"name":"manipulator"}');</code>
							<p>Returns <span class="value">false</span>.</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>String.substr</li>
								<li>String.trim</li>
								<li>String.match</li>
								<li>try ... catch</li>
								<li>document.createElement</li>
								<li>document.childNodes</li>
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


			<!--div class="function" id="Util.stringOr">
				<div class="header">
					<h3>Util.stringOr</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stringOr</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								Util.stringOr(
									<span class="type">Mixed</span> <span class="var">string</span>,
									<span class="type">Mixed</span> <span class="var">or</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Checks if <span class="var">string</span> is not <span class="value">undefined</span>, 
							<span class="value">null</span> or <span class="value">false</span>. If 
							<span class="var">string</span> is valid, return it. If not, returns 
							<span class="var">or</span> instead.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">string</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Object/String to check
								</div>
							</dd>
							<dt><span class="var">or</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Object/String to return if <span class="var">string</span> is not valid
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Either <span class="var">string</span> or <span class="var">or</span></p>
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
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div-->

			<div class="function" id="String.trim">
				<div class="header">
					<h3>String.trim</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">String.trim</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								String.trim();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							String trim support for older browsers. Removes whitespace, newlines and tabs from either end of string.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Trimmed string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>("	test \n").trim();</code>
	
							<p>returns <span class="value">test</span></p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>String.replace</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="String.substr">
				<div class="header">
					<h3>String.substr</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">String.substr</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">String =
								String.substr(from, length);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							String.substr support in older browsers, primarily correcting faulty implementation in IE8 and older.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">from</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> Starting point for substring. Negative value to state starting point from end of string.
								</div>
							</dd>
							<dt><span class="var">length</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> Optional length of substring
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>Substring of string</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>("string").substr(-3, 2);</code>
	
							<p>returns <span class="value">in</span></p>
						</div>
						<div class="example">
							<code>("string").substr(4);</code>
	
							<p>returns <span class="value">ng</span></p>
						</div>
					</div>
				
					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>String.substring</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
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

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<dt>desktop_edge</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-string.js</span> + 
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-string.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-string.js</span></dd>
	
				<dt>mobile</dt>
				<dd class="todo">not tested</dd>
	
				<dt>mobile_light</dt>
				<dd class="todo">not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-string.js</span> +
					<span class="file">u-string-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
