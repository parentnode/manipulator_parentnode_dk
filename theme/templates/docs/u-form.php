<div class="scene docpage i:docpage">
	<h1>Form</h1>
	<p>
		Advanced form controller and API. Grants full control of the HTML form elements.
	</p>
	<p>
		Full type validation, and event callbacks for any user interaction.
	</p>
	<p>
		Helper methods to customize form design and interaction responses.
	</p>
	<p>
		Util.Form is based on the <a href="http://templator.parentnode.dk/docs/form" target="_blank">Templator HTML Form syntax</a>, 
		ensuring full HTML fallback when no JavaScript is available.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Form.init">
				<div class="header">
					<h3>Util.Form.init</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.init</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.f.init</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Form.init(
									<span class="type">Node</span> <span class="var">form</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Initialize form, extending it with realtime validation, state classes and event callbacks.
							An initialized form consists of a form, fields (inputs etc.) and actions (buttons), 
							and provides some collections to help you access any form component with ease.
						</p>
						<p>
							Can also be used on partial form, if wrapping node is passed instead of outer form. This makes
							it extra useful in frameworks which dictate a global form element (like .NET).
						</p>
						<p>
							"focus", "error" and "correct" classes are added/removed from field and input when state changes.
						</p>

						<h5>Form</h5>
						<dl>
							<dt>form.fields</dt>
							<dd>Collection of fields in form.</dd>
							<dt>form.actions</dt>
							<dd>Collection of named actions in form.</dd>
						</dl>

						<h5>Field</h5>
						<dl>
							<dt>field._input</dt>
							<dd>Reference to field input/inputs</dd>
							<dt>field._hint</dt>
							<dd>Reference to field hint</dd>
							<dt>field._error</dt>
							<dd>Reference to field error</dd>
						</dl>

						<h5>Input</h5>
						<dl>
							<dt>input._label</dt>
							<dd>Reference to input label</dd>
							<dt>input.field</dt>
							<dd>Reference to input field</dd>
							<dt>input.val(optional value)</dt>
							<dd>
								Function to get/set input value. Works with all types of fields. If value 
								is passed, value will be set. If no value is passed, current value will be 
								returned.
							</dd>
						</dl>

						<h5>Action</h5>
						<dl>
							<dt>action._input</dt>
							<dd>Reference to action input/a</dd>
						</dl>


						<p>Util.Form comes with a range of default field types:</p>
						<dl>
							<dt>string</dt>
							<dd>Input type="text". Must be string. Optional min:length, max:length and pattern:regexp classes to specify min and max length and pattern of string.</dd>

							<dt>text</dt>
							<dd>Textarea. Must be string. Optional min:length, max:length and pattern:regexp classes to specify min and max length and pattern of string.</dd>

							<dt>email</dt>
							<dd>Input type="email". Must be valid email syntax.</dd>

							<dt>password</dt>
							<dd>Input type="password". Must be between 8 and 20 chars. Optional min:length, max:length and pattern:regexp classes to specify min and max length and pattern of string.</dd>

							<dt>numeric</dt>
							<dd>Input type="number". Must be numeric. Optional min:length, max:length and pattern:regexp classes to specify min and max length and pattern of string.</dd>

							<dt>integer</dt>
							<dd>Input type="number". Must be integer. Optional min:length, max:length and pattern:regexp classes to specify min and max length and pattern of string.</dd>

							<dt>tel</dt>
							<dd>Input type="number". Must be telephone (.-+ 0-9) and between 5 and 16 chars.</dd>

							<dt>select</dt>
							<dd>Select field with options.</dd>

							<dt>checkbox</dt>
							<dd>Input type="checkbox".</dd>

							<dt>radio_buttons</dt>
							<dd>Input type="radio".</dd>
						</dl>

						<p>Can be extended with custom input-initializations and -validations as well as custom ways of sending data.</p>

					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">form</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Form to initialize
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
							<dt>form.focused(input)</dt>
							<dd>when form gets focus</dd>
							<dt>form.blurred(input)</dt>
							<dd>when form loses focus</dd>
							<dt>form.updated(input)</dt>
							<dd>when form is updated</dd>
							<dt>form.changed(input)</dt>
							<dd>when form is changed</dd>

							<dt>form.submitted(input)</dt>
							<dd>when form is submitted - if callback function is not declared, form will be submitted as regular HTML form.</dd>

							<dt>form.validationFailed(JSON errors)</dt>
							<dd>when form validation fails - sends errors object, containing names of all failed inputs</dd>

							<dt>form.validationPassed()</dt>
							<dd>when form validation is passed - form contains no errors</dd>

							<dt>input.updated</dt>
							<dd>when input is updated</dd>
							<dt>input.changed</dt>
							<dd>when input is changed</dd>
							<dt>input.focused</dt>
							<dd>when input gets focus</dd>
							<dt>input.blurred</dt>
							<dd>when input loses focus</dd>
							<dt>input.validationFailed</dt>
							<dd>when input failes validation</dd>

							<dt>action.focused</dt>
							<dd>when action gets focus</dd>
							<dt>action.blurred</dt>
							<dd>when action loses focus</dd>
	
						</dl>
					</div>


					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;form name=&quot;test_form&quot; action=&quot;action&quot; method=&quot;get&quot;&gt;
	&lt;fieldset&gt;

		&lt;div class=&quot;field string required&quot;&gt;
			&lt;label for=&quot;input_id&quot;&gt;String, required&lt;/label&gt;
			&lt;input type=&quot;text&quot; name=&quot;string_required&quot; id=&quot;input_id&quot; /&gt;
		&lt;/div&gt;

	&lt;/fieldset&gt;

	&lt;ul class=&quot;actions&quot;&gt;
		&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;submit, name&quot; name=&quot;submit_name&quot; class=&quot;button&quot; /&gt;&lt;/li&gt;
	&lt;/ul&gt;

&lt;/form&gt;

&lt;script&gt;
	var form = u.querySelector("form");

	u.f.init(form);
	
	form.changed = function() {
		// callback for form changed
	}


	// returns input value
	form.fields["string_required"]._input.val();

	// set input value to "test"
	form.fields["string_required"]._input.val("test");


	form.fields["string_required"]._input.updated = function() {
		// callback for input value updated
	}

	form.actions["submit_name"].focused = function() {
		// callback for button focus
	}
	
	form.submitted = function() {
		// callback for form submit
	}

	form.validationFailed = function(errors) {
		// callback for failed form validation 
	}

	form.validationPassed = function() {
		// callback for passed form validation 
	}

&lt;/script&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>String.replace</li>
								<li>String.match</li>
								<li>Switch ... case</li>
								<li>parseInt</li>
								<li>Event.keyCode</li>
								<li>document.parentNode</li>
								<li>document.setAttribute</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.browser</li>
								<li>Util.querySelector</li>
								<li>Util.querySelectorAll</li>
								<li>Util.appendElement</li>
								<li>Util.hasClass</li>
								<li>Util.addClass</li>
								<li>Util.removeClass</li>
								<li>Util.applyStyle</li>
								<li>Util.getComputedStyle</li>
								<li>Util.clickableElement</li>
								<li>Util.Event.kill</li>
								<li>Util.Event.addEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>


			<div class="function" id="Util.Form.getParams">
				<div class="header">
					<h3>Util.Form.getParams</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Form.getParams</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Mixed</span> = 
								Util.Form.getParams(
									<span class="type">Node</span> <span class="var">form</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get name/value pairs from all inputs in <span class="var">form</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">form</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to use as form scope. Can be form or just plain HTML node.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON _options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">send_as</span></dt>
										<dd>Define type of returned object. Default to regular GET string. Optional formdata, JSON, Object or custom type offered through u.f.customSend[send_as].</dd>
										<dt><span class="value">ignore_inputs</span></dt>
										<dd>Input classes to be ignored when collecting data</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Mixed</span> Default GET string, otherwise object as specified in send_as setting.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;form name=&quot;test_form&quot; action=&quot;action&quot; method=&quot;get&quot;&gt;
	&lt;fieldset&gt;

		&lt;div class=&quot;field string required&quot;&gt;
			&lt;label for=&quot;input1_id&quot;&gt;String, required&lt;/label&gt;
			&lt;input type=&quot;text&quot; name=&quot;string_required&quot; id=&quot;input1_id&quot; value=&quot;test1&quot; /&gt;
		&lt;/div&gt;
		&lt;div class=&quot;field string required&quot;&gt;
			&lt;label for=&quot;input2_id&quot;&gt;String, required&lt;/label&gt;
			&lt;input type=&quot;text&quot; name=&quot;string_not_required&quot; id=&quot;input2_id&quot; value=&quot;test2&quot; /&gt;
		&lt;/div&gt;

	&lt;/fieldset&gt;
&lt;/form&gt;

&lt;script&gt;
	var form = u.querySelector("form");
	u.f.getParams(form);
&lt;/script&gt;</code>
							<p>Returns string_required=test1&amp;string_not_required=test2

						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>typeof</li>
								<li>Switch ... case</li>
								<li>encodeURIComponent</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelectorAll</li>
								<li>Util.hasClass</li>
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
					<li><span class="file">u-form.js</span></li>
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
				<dt>desktop_edge</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>desktop_ie9</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-form.js</span></dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd><span class="file">u-form.js</span></dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>