<div class="scene docpage i:docpage">
	<h1>Form</h1>
	<p>
		Advanced form controller and UI API. Grants you full control of the HTML form elements and enables you
		to build perfect form interfaces for your users.
	</p>
	<p>
		It includes a full spectrum type validation (string, number, integer, tel, email, text, select, radiobuttons, 
		checkbox, password, date, datetime, files, location and HTML editor), min and max values, patterns 
		and a neat "compare to" property, allowing you to easily create validated "re-type you email/password/string" 
		inputs.
	</p>
	<p>
		The form module adds and removes interaction (<em>hover</em>, <em>focus</em>) and validation (<em>correct</em>, 
		<em>error</em>, <em>default</em>) classes for your convenience and dispatches event 
		callbacks for any user interaction (<em>changed</em>, <em>updated</em>, <em>preSubmitted</em>, <em>submitted</em>, <em>resat</em>, <em>focused</em>,
		<em>blurred</em>, <em>validationPassed</em>, <em>validationFailed</em>) – you decide the level for control by defining the callback methods you need.
	</p>
	<p>
		The modular design and the helper methods allow you to customize form design and interaction responses to meet
		any design request.
	</p>
	<p>
		Util.Form is based on the <a href="https://templator.parentnode.dk/docs/form" target="_blank">Templator HTML Form syntax</a>, 
		ensuring full HTML fallback when no JavaScript is available.
	</p>
	<p>
		In Util.Form we are working with terms, such as <em>form</em> (the form or pseudo form), <em>field</em> (the div that
		wraps an input/label/hint collection), <em>inputs</em> (the actual HTML inputs) and <em>actions</em> (HTML buttons and links).
		In addition a <em>field</em> can (and should) contain a <em>help</em> element, with a <em>hint</em> and an <em>error</em> message.
		See <a href="https://templator.parentnode.dk/docs/form" target="_blank">Templator HTML Form</a> for more information.
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
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Initialize a form, extending it with realtime validation, state classes and event callbacks.
							An initialized form consists of a form, inputs and actions (buttons), 
							and provides some element collections to help you access any form component with ease.
						</p>
						<p>
							Initially a form input will have <em>used</em> state. Only inputs that have been interacted with
							will show <em>error</em> states, as the user should not be reprimanded for untouched required inputs.
							When user interacts with field, the <em>correct</em> state will be applied when validation passes.
							The <em>error</em> state will only be applied after an input has lost focus the first time OR when the
							form is submitted.
						</p>
						<p>
							Upon initialization all fields are bulk validated and a callback to <em>validationPassed</em>
							or <em>validationFailed</em> will be dispatched, if the form either failed or passed 
							validation. Note, a form with partially un-used inputs will not pass validation, nor necessarily
							fail validation. When initialization is complete a <em>ready</em> callback is dispatched for form.
						</p>
						<p>
							Any field can be made <em>required</em> simply by adding a <em>required</em> class to the field. 
							Upon validation the presence of the <em>required</em> class is checked, and you can switch between
							<em>required</em> and <em>not required</em> simply by adding or removing the class. In addition 
							a mix of classes and input attributes are used to provide additional validation information. See the
							<em>Input types</em> section below for more information.
						</p>
						<p>
							An <em>indicator</em> (*) element is automatically added to all fields. This should be hidden for 
							non-required fields using CSS. This is done so, because the field may change <em>required</em> state during
							interaction, and thus it is convenient that they are always injected.
						</p>
						<p>
							<em>Util.Form.init</em> can also be used on a partial form (a pseudo form), as any HTML node can be passed instead 
							of the actual outer form. This makes it extra useful in frameworks which dictate a global 
							form element (like .NET).
						</p>
						<p>
							<em>focus</em>, <em>hover</em>, <em>error</em>, <em>correct</em> and <em>default</em> classes are 
							added/removed from fields and inputs when their state changes, to allow you to easily add styling
							of the different input states.
						</p>

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
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON _options
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">validation</span></dt>
										<dd>Should the form inputs be validated. Default true.</dd>
										<dt><span class="value">focus_z</span></dt>
										<dd>Custom <em>zIndex</em> for focused fields. Default 50.</dd>

										<dt><span class="value">label_style</span></dt>
										<dd>Custom label style for inputs. See custom extensions below for more information.</dd>

										<dt><span class="value">callback_ready</span></dt>
										<dd>Name of callback method when form is ready. Default <em>ready</em>.</dd>
										<dt><span class="value">callback_submitted</span></dt>
										<dd>Name of callback method when form is submitted. Default <em>submitted</em>.</dd>
										<dt><span class="value">callback_pre_submitted</span></dt>
										<dd>Name of callback method before form is submitted. Default <em>preSubmitted</em>.</dd>
										<dt><span class="value">callback_resat</span></dt>
										<dd>Name of callback method when form is resat. Default <em>resat</em>.</dd>

										<dt><span class="value">callback_updated</span></dt>
										<dd>Name of callback method when form or input is updated. Default <em>updated</em>.</dd>
										<dt><span class="value">callback_changed</span></dt>
										<dd>Name of callback method when form or input is changed. Default <em>changed</em>.</dd>
										<dt><span class="value">callback_blurred</span></dt>
										<dd>Name of callback method when form or input is blurred. Default <em>blurred</em>.</dd>
										<dt><span class="value">callback_focused</span></dt>
										<dd>Name of callback method when form or input is focused. Default <em>focused</em>.</dd>

										<dt><span class="value">callback_validation_failed</span></dt>
										<dd>Name of callback method when form or input failed validation. Default <em>validationFailed</em>.</dd>
										<dt><span class="value">callback_validation_passed</span></dt>
										<dd>Name of callback method when form or input passed validation. Default <em>validationPassed</em>.</dd>


										<dt><span class="value">debug</span></dt>
										<dd>Output form element collections to console on initialization.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="properties">
						<h4>Extended properties</h4>
						<p>The form elements are indexed and made available on form, fields, inputs and actions as follows:</p>
						<h5>Form</h5>
						<dl>
							<dt>form.inputs</dt>
							<dd>Collection of inputs in form.</dd>
							<dt>form.actions</dt>
							<dd>
								Collection of named actions in form. If action doesn't have a name attribute, then then
								wrapping <span class="htmltag">li</span> classname will be used for naming action.
							</dd>
						</dl>

						<h5>Field</h5>
						<dl>
							<dt>field._form</dt>
							<dd>Reference to form or pseudo form. As the <em>form</em> property is reserved, we are using _form.</dd>
							<dt>field.input</dt>
							<dd>Reference to primary field input</dd>
							<dt>field.inputs</dt>
							<dd>Array of references to all field inputs for fields with multiple inputs, such as radiobuttons.</dd>
							<dt>field.label</dt>
							<dd>Reference to field's primary label.</dd>
							<dt>field.indicator</dt>
							<dd>
								Reference to field's required indicator. See custom extensions below for more information.
							</dd>
							<dt>field.help</dt>
							<dd>Reference to field help element.</dd>
							<dt>field.hint</dt>
							<dd>Reference to field hint element.</dd>
							<dt>field.error</dt>
							<dd>Reference to field error element.</dd>
							<dt>field.type</dt>
							<dd>String representation of field type.</dd>
						</dl>

						<h5>Input</h5>
						<dl>
							<dt>input._form</dt>
							<dd>Reference to form or pseudo form. As the <em>form</em> property is reserved, we are using _form.</dd>
							<dt>input.label</dt>
							<dd>Reference to input label (not available for hidden inputs).</dd>
							<dt>input.field</dt>
							<dd>Reference to input field (not available for hidden inputs).</dd>
						</dl>

						<h5>Action</h5>
						<dl>
							<dt>action._form</dt>
							<dd>Reference to form or pseudo form. As the <em>form</em> property is reserved, we are using _form.</dd>
						</dl>
					</div>

					<div class="methods">
						<h4>Extended methods</h4>
						<p>
							The form elements are extended with convenient helper methods to make form handling more
							consistent and cross type/browser safe.
						</p>

						<h5>Form</h5>
						<dl>
							<dt>form.submit</dt>
							<dd>
								Validate all fields and submit form if validation passes.
							</dd>
							<dt>form.DOMsubmit</dt>
							<dd>
								Perform a native form submit.
							</dd>
							<dt>form.reset</dt>
							<dd>
								Reset all fields to their initial state.
							</dd>
							<dt>form.DOMreset</dt>
							<dd>
								Perform a native form reset.
							</dd>
							<dt>form.getData</dt>
							<dd>
								Shorthand method for getting form data set. See Util.Form.getFormData below for details
								and note that when invoking this method directly on form, you should omit passing the form argument.
							</dd>
						</dl>

						<h5>Input</h5>
						<dl>
							<dt>input.val([value])</dt>
							<dd>
								Function to get/set input value. Works with all types of inputs. If value 
								is passed, value will be set for input. If no value is passed, current value will be 
								returned.
							</dd>
						</dl>
					</div>

					<div class="inputtypes">
						<h4>Input types</h4>
						<p>
							Util.Form comes with a range of default field/input types. The initialization of each field
							relies on the presence of a type class, as listed below. Any field can be made <em>required</em>
							simply by adding a <em>required</em> class to the field. Additional validation rules can be 
							specified using classVars or attributes on the input element as specified below.
						</p>
						<dl>
							<dt>string</dt>
							<dd>
								String input (input type="text"). Must be string. Optional min:[length] and max:[length] can be added as classVars on field. 
								Default min length is 1, default max length is 255.
								Regex pattern can be added using the pattern attribute.
								Add a <em>data-compare-to</em> attribute to input containing the name of other input, to require 
								both inputs to have same value. Useful for "re-type your xyz"-type fields.
							</dd>

							<dt>text</dt>
							<dd>
								Multiline text input (textarea). Must be string. Optional min:[length] and max:[length] can be added as classVars on field. 
								Default min length is 1, default max length is 10000000.
								Regex pattern can be added using the pattern attribute.
							 </dd>

							<dt>email</dt>
							<dd>
								Email input (input type="email"). Must be valid email syntax.
								Alternate regex pattern can be added using the pattern attribute.
								Add a <em>data-compare-to</em> attribute to input containing the name of other input, to require 
								both inputs to have same value. Useful for "re-type your email"-type fields.
							</dd>

							<dt>password</dt>
							<dd>
								Password input (input type="password"). Must be between 8 and 20 chars. 
								Optional min:[length] and max:[length] can be added as classVars on field.
								Regex pattern can be added using the pattern attribute.
								Add a <em>data-compare-to</em> attribute to input containing the name of other input, to require 
								both inputs to have same value. Useful for "re-type your password"-type fields.
							</dd>

							<dt>numeric</dt>
							<dd>
								Numeric input (input type="number"). Must be numeric (integer or decimal number). 
								Optional min:[value] and max:[value] can be added as classVars on field. Note that for 
								numeric inputs min and max refers to the numeric value, not the length of the input.
								Regex pattern can be added using the pattern attribute.
							</dd>

							<dt>integer</dt>
							<dd>
								Integer input (input type="number"). Must be integer. 
								Optional min:[value] and max:[value] can be added as classVars on field. Note that for 
								integer inputs min and max refers to the numeric value, not the length of the input.
							</dd>

							<dt>tel</dt>
							<dd>
								Phone input (input type="number"). Must be telephone (.-+ 0-9) and between 5 and 16 chars.
								Alternate regex pattern can be added using the pattern attribute.
								Add a <em>data-compare-to</em> attribute to input containing the name of other input, to require 
								both inputs to have same value. Useful for "re-type your phonenumber"-type fields.
							</dd>

							<dt>select</dt>
							<dd>
								Dropdown/Select input with multiple options (select).
							</dd>

							<dt>checkbox</dt>
							<dd>
								Checkbox input (input type="checkbox").
							</dd>

							<dt>radio_buttons</dt>
							<dd>
								Radiobutton input (input type="radio").
							</dd>

							<dt>date</dt>
							<dd>
								Date input (input type="date").
								Optional min:[date] and max:[date] can be added as classVars on field. Note that for 
								date inputs min and max refers to dates, not the length of the input.
								Regex pattern can be added using the pattern attribute.
							</dd>

							<dt>datetime</dt>
							<dd>
								Date AND time input (input type="datetime").
								Optional min:[date[time]] and max:[date[time]] can be added as classVars on field. Note that for 
								date inputs min and max refers to dates, not the length of the input. Time can be omitted when stating min 
								and max properties.
								Regex pattern can be added using the pattern attribute.
							</dd>

							<dt>files</dt>
							<dd>
								File upload (input type="file").
								Optional min:[count] and max:[count] can be added as classVars on field. Note that for 
								file inputs min and max refers to file count, not the length of the input. 
								Allowed files can be specified using the <em>accept</em> attribute on the input.
								Regex pattern can be added using the pattern attribute.
							</dd>

							<dt>location</dt>
							<dd>
								Location with geo coordinates and map-picker.
								This field consists of three inputs. One for the location name, one for latitude and
								one for longitude. All three must be valid if any of them are filled out.
								Note: This input type requires that you include u-form-field-location. Also remember
								to add your Google API key (u.gapi_key = #API_KEY#) to enable map-picker.
							</dd>

							<dt>html</dt>
							<dd>
								HTML editor with strict semantic formatting controls. This editor has been designed to
								prioritize SEO and design over "free form editing".
								Note: This input type requires that you include u-form-field-html. In addition the build-in file
								and media upload functionality, requires additional backend services (happily provided by Janitor).
							</dd>
						</dl>

					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<p>
							An extensive set of callback are dispatched to give you full control of form behaviour
							 – just declare the appropriate callback methods on either form, input or action.
						</p>
						<h5>Form</h5>
						<dl>
							<dt>form.focused(input)</dt>
							<dd>When form input gets focus.</dd>
							<dt>form.blurred(input)</dt>
							<dd>When form input loses focus.</dd>

							<dt>form.updated(input)</dt>
							<dd>When form input is updated.</dd>
							<dt>form.changed(input)</dt>
							<dd>When form input is changed.</dd>

							<dt>form.submitted(input)</dt>
							<dd>When form is submitted - if callback function is not declared, form will be submitted as regular HTML form.</dd>
							<dt>form.preSubmitted(input)</dt>
							<dd>Just before form submission is executed - last chance before sending data.</dd>
							<dt>form.resat(input)</dt>
							<dd>When form is reset.</dd>

							<dt>form.validationFailed(JSON errors)</dt>
							<dd>When form validation fails - sends errors object, containing names of all failed inputs.</dd>
							<dt>form.validationPassed()</dt>
							<dd>When form validation is passed - form contains no errors.</dd>
						</dl>

						<h5>Input</h5>
						<dl>
							<dt>input.updated(input)</dt>
							<dd>When input is updated.</dd>
							<dt>input.changed(input)</dt>
							<dd>When input is changed.</dd>

							<dt>input.focused(input)</dt>
							<dd>When input gets focus.</dd>
							<dt>input.blurred(input)</dt>
							<dd>When input loses focus.</dd>

							<dt>input.validationFailed()</dt>
							<dd>When input failed validation.</dd>
							<dt>input.validationPassed()</dt>
							<dd>When input passed validation.</dd>
						</dl>

						<h5>Action</h5>
						<dl>
							<dt>action.focused(action)</dt>
							<dd>When action gets focus.</dd>
							<dt>action.blurred(action)</dt>
							<dd>When action loses focus.</dd>
						</dl>
					</div>

					<div class="extensions">
						<h5>Extension modules</h5>
						<p>
							The default form behaviour can be modified by defining your own custom modifiers or initializers.
							This allows you to build new input types, custom validations, label styles/behaviours, hint positioning, HTML pre-processors
							as well as custom ways of compiling data on submit.
						</p>
						<p>
							Please refer to <em>u-form-custom.js</em> for examples.
						</p>
					</div>


					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;form name=&quot;test_form&quot; action=&quot;action&quot; method=&quot;get&quot;&gt;
	&lt;fieldset&gt;

		&lt;div class=&quot;field string required&quot;&gt;
			&lt;label for=&quot;input_string_id&quot;&gt;String, required&lt;/label&gt;
			&lt;input type=&quot;text&quot; name=&quot;string_required&quot; id=&quot;input_string_id&quot; pattern="[a-f]+" /&gt;
		&lt;/div&gt;

		&lt;div class=&quot;field integer required min:2 max:10&quot;&gt;
			&lt;label for=&quot;input_integer_id&quot;&gt;Integer, required&lt;/label&gt;
			&lt;input type=&quot;text&quot; name=&quot;integer_required&quot; id=&quot;input_integer_id&quot; /&gt;
		&lt;/div&gt;

	&lt;/fieldset&gt;

	&lt;ul class=&quot;actions&quot;&gt;
		&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;submit, name&quot; name=&quot;submit_name&quot; class=&quot;button&quot; /&gt;&lt;/li&gt;
	&lt;/ul&gt;

&lt;/form&gt;

&lt;script&gt;
	var form = u.querySelector("form");

	u.f.init(form);
	
	form.changed = function(input) {
		// callback for form changed (input has changed)
	}


	// returns input value
	form.inputs["string_required"].input.val();

	// set input value to "test"
	form.inputs["string_required"].input.val("test");


	form.inputs["string_required"].input.updated = function(input) {
		// callback for input value updated (input was updated)
	}

	form.actions["submit_name"].focused = function(action) {
		// callback for button focus
	}
	
	form.submitted = function(action) {
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

					<div class="dependencies">
						<h4>Dependencies</h4>

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
								<li>Util.applyStyles</li>
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
						<h4>Return values</h4>
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

					<div class="dependencies">
						<h4>Dependencies</h4>

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
