<style type="text/css">
	form.test1 {border: 1px solid red; margin-bottom: 20px;}
	form.test2 {border: 1px solid green; margin-bottom: 20px;}
	form.test3 {border: 1px solid blue; margin-bottom: 20px;}
	form.test4 {border: 1px solid orange; margin-bottom: 20px;}
</style>

<script type="text/javascript">

	u.bug_position = "fixed";

	Util.Objects["_test1"] = new function() {
		this.init = function(form) {

			u.f.init(form);

			// form.DOMsubmit();
			// form.submit();

			form.submitted = function(input) {
				// save params for test
				this._test_params = u.f.getParams(this);
//				u.bug("submitted:" + this.submitButton);
//				u.bug(u.f.getParams(this));
			}

			// form.changed = function(input) {
			// 	u.bug("form changed:" + u.nodeId(input) + ":" + input.val())
			// }
			// form.updated = function(input) {
			// 	u.bug("form updated:" + u.nodeId(input) + ":" + input.val())
			// }
			// form.focused = function(input) {
			// 	u.bug("form focused:" + u.nodeId(input))
			// }
			// form.blurred = function(input) {
			// 	u.bug("form blurred:" + u.nodeId(input))
			// }


			form.validationFailed = function(input) {
				// save callback for test
				this._test_validation_failed = true;
//				u.bug("validationFailed:" + u.nodeId(this));
			}

			form.fields["string_required"].val("");
			form.fields["string_required"].updated = function() {
				u.bug("string_required updated:" + this.val())
			}
			form.fields["string_required"].changed = function() {
				u.bug("string_required changed:" + this.val())
			}
			form.fields["string_required"].focused = function() {
				u.bug("string_required focused")
			}
			form.fields["string_required"].blurred = function() {
				u.bug("string_required blurred")
			}


			// Number
			form.fields["number_required"].val(123);
			form.fields["number_required"].updated = function() {
				u.bug("number_required updated:" + this.val())
			}
			form.fields["number_required"].changed = function() {
				u.bug("number_required changed:" + this.val())
			}
			form.fields["number_required"].focused = function() {
				u.bug("number_required focused")
			}
			form.fields["number_required"].blurred = function() {
				u.bug("number_required blurred")
			}


			// CHECKBOX
			// form.fields["checkbox_required"].val(true);
			// form.fields["checkbox_required"].updated = function() {
			// 	u.bug("checkbox_required updated:" + this.val())
			// }
			// form.fields["checkbox_required"].changed = function() {
			// 	u.bug("checkbox_required changed:" + this.val())
			// }
			// form.fields["checkbox_required"].focused = function() {
			// 	u.bug("checkbox_required focused")
			// }
			// form.fields["checkbox_required"].blurred = function() {
			// 	u.bug("checkbox_required blurred")
			// }


			// RADIO BUTTON
			form.fields["radio_required"].val();
			form.fields["radio_required"].updated = function(input) {
				u.bug("radio_required updated:" + this.val() + ", happeded on:" + u.nodeId(input) + ", this.used:" + this.used)
			}
			form.fields["radio_required"].changed = function(input) {
				u.bug("radio_required changed:" + this.val() + ", happeded on:" + u.nodeId(input))
			}
			form.fields["radio_required"].focused = function(input) {
				u.bug("radio_required focused:" + this.val() + ", happeded on:" + u.nodeId(input))
			}
			form.fields["radio_required"].blurred = function(input) {
				u.bug("radio_required blurred:" + this.val() + ", happeded on:" + u.nodeId(input))
			}


			// form.fields["select_required"].updated = function() {
			// 	u.bug("select_required updated:" + this.val() + ", this.used:" + this.used)
			// }
			// form.fields["select_required"].changed = function() {
			// 	u.bug("select_required changed:" + this.val())
			// }
			// form.fields["select_required"].focused = function() {
			// 	u.bug("select_required focused:" + this.val())
			// }
			// form.fields["select_required"].blurred = function() {
			// 	u.bug("select_required blurred:" + this.val())
			// }

			// form.fields["customfield_required"].updated = function() {
			// 	u.bug("customfield_required updated:" + this.val() + ", this.used:" + this.used)
			// }
			// form.fields["customfield_required"].changed = function() {
			// 	u.bug("customfield_required changed:" + this.val())
			// }
			// form.fields["customfield_required"].focused = function() {
			// 	u.bug("customfield_required focused:" + this.val())
			// }
			// form.fields["customfield_required"].blurred = function() {
			// 	u.bug("customfield_required blurred:" + this.val())
			// }

			
			form.actions["button_name"].clicked = function(event) {
//				u.bug("button clicked:" + u.nodeId(this));

				this.form.fields["string_required"].val("auto complete string");
				this.form.fields["email_required"].val("auto@complete.email");
				this.form.fields["text_required"].val("auto complete text");
				this.form.fields["select_required"].val("option_2");

				this.form.fields["number_required"].val(123.5);
				this.form.fields["tel_required"].val("+45 123-456");
				this.form.fields["integer_required"].val(123);
				this.form.fields["password_required"].val("password");

				this.form.fields["boolean_required"].val(true);
				this.form.fields["checkbox_required"].val(true);
				this.form.fields["radio_required"].val(true);

//				this.form.fields["customfield_required"].val("customfield");

				var params = u.f.getParams(this.form);
				u.request(this.form, "/ajax/showall.php", {"params":params, "method":"get"});
				u.bug("params:" + params)
				u.xInObject(params);

			}

			// var params = u.f.getParams(form);
			// u.bug("params:" + params)
			// u.xInObject(params);
			// submit form - should cause form.validationFailed and have as many errors as required fields
			//form.actions["submit_name"].clicked();
			// if(u.qsa(".field.error", form).length == u.qsa(".field.required", form).length && form._test_validation_failed) {
			// 	u.bug("Test1 form - first submit passed", "green");
			// }
			// else {
			// 	u.bug("Test1 form - failed on first submit", "red");
			// }


			// autocomplete fields
			//form.actions["button_name"].clicked();
			// submit again
			//form.actions["submit_name"].clicked();
			// if(u.qsa(".field.error", form).length == 0 && form._test_params) {
			// 	u.bug("Test1 form - second submit passed", "green");
			// }
			// else {
			// 	u.bug("Test1 form - failed on second submit", "red");
			// }

		}

	}

	Util.Objects["_test2"] = new function() {
		this.init = function(form) {

			u.f.init(form);

			// perform some tests
			form.submitted = function(input) {

				this._test_params = u.f.getParams(this, {"send_as":"json", "ignore_inputs":"ignored|alsoignored"});
				// u.bug("Params (ignored|alsoignored):" + u.f.getParams(this, {"ignore_inputs":"ignored|alsoignored"}));
				// u.bug("Params (alsoignored|ignored):" + u.f.getParams(this, {"ignore_inputs":"alsoignored|ignored"}));
				// 
				// u.bug("Params (alsoignored):" + u.f.getParams(this, {"ignore_inputs":"alsoignored"}));
				// u.bug("Params (ignored):" + u.f.getParams(this, {"ignore_inputs":"ignored"}));
			}

			form.actions["submit_name"].clicked();

			if(
				form._test_params &&
				form._test_params.test2_string1 == undefined &&
				form._test_params.test2_string2 == form.fields["test2_string2"].val() &&
				form._test_params.test2_string3 == form.fields["test2_string3"].val() &&
				form._test_params.test2_string4 == undefined &&
				form._test_params.test2_string5 == form.fields["test2_string5"].val()

				) {
					u.bug("Test2 form - submit passed", "green");
			}
			else {
				u.bug("Test2 form - submit failed", "red");
			}
			
		}
	}

	Util.Objects["_test3"] = new function() {
		this.init = function(form) {

			u.f.init(form);

			// only visual tests
			form.submitted = function(input) {}

		}
	}

	Util.Objects["_test4"] = new function() {
		this.init = function(form) {

			u.f.init(form);


			form.submitted = function(input) {

				this._test_params = u.f.getParams(this, {"send_as":"json"});

				// u.bug("Params:" + u.f.getParams(this));
				// u.bug("JSON:" + JSON.stringify(u.f.getParams(this, {"send_as":"json"})));

			}

			form.actions["submit_name"].clicked();

			if(
				form._test_params &&
				form._test_params.name == form.fields["name"].val() &&
				form._test_params.apps["app1"]["id"] == form.fields["apps[app1][id]"].val() &&
				form._test_params.apps["app1"]["name"] == form.fields["apps[app1][name]"].val() &&
				form._test_params.apps["app2"]["id"] == form.fields["apps[app2][id]"].val() &&
				form._test_params.apps["app2"]["test"] == undefined &&
				form._test_params.apps["app3"]["id"]["gas"]["hund"]["trold"] == form.fields["apps[app3][id][gas][hund][trold]"].val() &&
				form._test_params.apps["app4"] == form.fields["apps[app4]"].val()
				) {
					u.bug("Test4 form - submit passed", "green");
			}
			else {
				u.bug("Test4 form - submit failed", "red");
			}

		}
	}


	Util.Objects["individual"] = new function() {
		this.init = function(form) {
			u.f.init(form);
			form.submitted = function(input) {
				u.request(this, this.action, {"params": u.f.getParams(this), "method": "post"});
			}

			form.updated = function(iN) {
				u.bug("Form updated:" + u.nodeId(iN) + " = " + iN.val());
			}
			form.changed = function(iN) {
				u.bug("Form changed:" + u.nodeId(iN) + " = " + iN.val());
			}
		}
	}


	Util.Objects["combined"] = new function() {
		this.init = function(form) {
			u.f.init(form);
			form.submitted = function(input) {
				u.request(this, this.action, {"params": u.f.getParams(this), "method": "post"});
			}

			form.updated = function(iN) {
				u.bug("Form updated:" + u.nodeId(iN) + " = " + iN.val());
			}
			form.changed = function(iN) {
				u.bug("Form changed:" + u.nodeId(iN) + " = " + iN.val());
			}

			form.validationFailed = function(iN) {
				// save callback for test
				u.bug("validationFailed:" + u.nodeId(this));
			}

		}
	}

</script>

<div class="scene">
	<h1>Form</h1>


	<h2>Type validation</h2>
	<p>
		For individual testing of validation and layout.
	</p>test1 optional

	<h3>String</h3>
	<form action="#" method="get" class="i:individual string labelstyle:inject">
		<fieldset>
			<div class="field string required">
				<label for="solo_string_required">String, required</label>
				<input type="text" name="string_required" id="solo_string_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field string">
				<label for="solo_string_optional">String, optional</label>
				<input type="text" name="string_optional" id="solo_string_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Email</h3>
	<form action="#" method="get" class="i:individual email labelstyle:inject">
		<fieldset>
			<div class="field email required">
				<label for="solo_email_required">Email, required</label>
				<input type="email" name="email_required" id="solo_email_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field email">
				<label for="solo_email_optional">Email, optional</label>
				<input type="email" name="email_optional" id="solo_email_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Number</h3>
	<form action="#" method="get" class="i:individual number labelstyle:inject">
		<fieldset>
			<div class="field number required">
				<label for="solo_number_required">Number, required</label>
				<input type="number" name="number_required" id="solo_number_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field number">
				<label for="solo_number_optional">Number, optional</label>
				<input type="number" name="number_optional" id="solo_number_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Tel</h3>
	<form action="#" method="get" class="i:individual tel labelstyle:inject">
		<fieldset>
			<div class="field tel required">
				<label for="solo_tel_required">Telephone, required</label>
				<input type="tel" name="tel_required" id="solo_tel_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>
			<div class="field tel">
				<label for="solo_tel_optional">Telephone, optional</label>
				<input type="number" name="tel_optional" id="solo_tel_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Integer</h3>
	<form action="#" method="get" class="i:individual number labelstyle:inject">
		<fieldset>
			<div class="field integer required">
				<label for="solo_integer_required">Integer, required</label>
				<input type="number" name="integer_required" id="solo_integer_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field integer">
				<label for="solo_integer_optional">Integer, optional</label>
				<input type="number" name="integer_optional" id="solo_integer_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Password</h3>
	<form action="#" method="get" class="i:individual password labelstyle:inject">
		<fieldset>
			<div class="field password required">
				<label for="solo_password_required">Password, required</label>
				<input type="password" name="password_required" id="solo_password_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field password">
				<label for="solo_password_optional">Password, optional</label>
				<input type="password" name="password_optional" id="solo_password_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Date</h3>
	<form action="#" method="get" class="i:individual date labelstyle:inject">
		<fieldset>
			<div class="field date required">
				<label for="solo_date_required">Date, required</label>
				<input type="date" name="date_required" id="solo_date_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field date">
				<label for="solo_date_optional">Date, optional</label>
				<input type="date" name="date_optional" id="solo_date_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Datetime</h3>
	<form action="#" method="get" class="i:individual datetime labelstyle:inject">
		<fieldset>
			<div class="field datetime required">
				<label for="solo_datetime_required">Datetime, required</label>
				<input type="datetime" name="datetime_required" id="solo_datetime_required" />
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field datetime">
				<label for="solo_datetime_optional">Datetime, optional</label>
				<input type="datetime" name="datetime_optional" id="solo_datetime_optional" />
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Select</h3>
	<form action="#" method="get" class="i:individual select labelstyle:inject">
		<fieldset>
			<div class="field select required">
				<label for="solo_select_required">Select, required</label>
				<select name="select_required" id="solo_select_required">
					<option value="">-</option>
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field select">
				<label for="solo_select_optional">Select, optional</label>
				<select name="select_optional" id="solo_select_optional">
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Text</h3>
	<form action="#" method="get" class="i:individual text labelstyle:inject">
		<fieldset>
			<div class="field text required">
				<label for="solo_text_required">Text, required</label>
				<textarea name="text_required" id="solo_text_required"></textarea>
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field text autoexpand">
				<label for="solo_text_optional">Text, optional, autoexpand</label>
				<textarea name="text_optional" id="solo_text_optional"></textarea>
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Checkbox</h3>
	<form action="#" method="get" class="i:individual checkbox labelstyle:inject">
		<fieldset>
			<div class="field checkbox required">
				<input type="hidden" name="checkbox_required" value="0" />
				<input type="checkbox" name="checkbox_required" id="solo_checkbox_required" value="true" />
				<label for="solo_checkbox_required">Checkbox, required</label>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>
			<div class="field checkbox">
				<input type="hidden" name="checkbox_optional" value="0" />
				<input type="checkbox" name="checkbox_optional" id="solo_checkbox_optional" value="true" />
				<label for="solo_checkbox_optional">Checkbox, optional</label>
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Radio buttons</h3>
	<form action="#" method="get" class="i:individual radio labelstyle:inject">
		<fieldset>
			<div class="field radiobuttons required">
				<label>Radio buttons, required</label>
				<div class="item">
					<input type="radio" value="true" name="radio_required" id="solo_radio_a_required" />
					<label for="solo_radio_a_required">True</label>
				</div>
				<div class="item">
					<input type="radio" value="false" name="radio_required" id="solo_radio_b_required" />
					<label for="solo_radio_b_required">False</label>
				</div>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>
			<div class="field radiobuttons">
				<label class="buttons required">Radio buttons, optional</label>
				<div class="item">
					<input type="radio" value="true" name="radio_optional" id="solo_radio_a_optional" />
					<label for="solo_radio_a_optional">True</label>
				</div>
				<div class="item">
					<input type="radio" value="false" name="radio_optional" id="solo_radio_b_optional" />
					<label for="solo_radio_b_optional">False</label>
				</div>
			</div>
		</fieldset>
	</form>

	<hr />

	<h3>Files</h3>
	<form action="#" method="get" class="i:individual files labelstyle:inject">
		<fieldset>
			<div class="field files required">
				<label for="solo_input_mediae_required">Files, required</label>
				<input type="file" name="media_required[]" id="solo_input_mediae_required" />
				<div class="help">
					<div class="hint">Add image here. Use png or jpg in any proportion.</div>
					<div class="error">File does not fit requirements.</div>
				</div>
			</div>
			<div class="field files">
				<label for="solo_input_media_optional">Files, optional</label>
				<input type="file" name="media_optional[]" id="solo_input_media_optional" />
				<div class="help">
					<div class="hint">Add image here. Use png or jpg in any proportion.</div>
					<div class="error">File does not fit requirements.</div>
				</div>
			</div>
		</fieldset>
	</form>


	<hr />


	<h2>Custom fields</h2>


	<h3>Geolocation</h3>
	<form action="#" method="get" class="i:individual geolocation labelstyle:inject">
		<fieldset>

			<div class="field location required">
				<div class="location">
					<label for="solo_input_location_required">Location, required</label>
					<input type="text" class="location" id="solo_input_location_required" name="location_required" />
				</div>
				<div class="latitude">
					<label for="solo_input_latitude_required">Latitude</label>
					<input type="text" class="latitude" id="solo_input_latitude_required" name="latitude_required" />
				</div>
				<div class="longitude">
					<label for="solo_input_longitude_required">Longitude</label>
					<input type="text" class="longitude" id="solo_input_longitude_required" name="longitude_required" />
				</div>
				<div class="help">
					<div class="hint">Name and Geo coordinates of location</div>
					<div class="error">Name and Geo coordinates must be filled out</div>
				</div>
			</div>
			<div class="field location">
				<div class="location">
					<label for="solo_input_location_optional">Location, optional</label>
					<input type="text" class="location" id="solo_input_location_optional" name="location_optional" />
				</div>
				<div class="latitude">
					<label for="solo_input_latitude_optional">Latitude</label>
					<input type="text" class="latitude" id="solo_input_latitude_optional" name="latitude_optional" />
				</div>
				<div class="longitude">
					<label for="solo_input_longitude_optional">Longitude</label>
					<input type="text" class="longitude" id="solo_input_longitude_optional" name="longitude_optional" />
				</div>
			</div>

		</fieldset>
	</form>


	<hr />

	<h3>HTML Editor</h3>
	<form action="#" method="get" class="i:individual html labelstyle:inject">
		<fieldset>
			<div class="field html required tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download">
				<label for="solo_html_required">HTML, required</label>
				<textarea name="html_required" id="solo_html_required"></textarea>
				<div class="help">
					<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
				</div>
			</div>
			<div class="field html tags:p,h1,h2,h3,h4,h5,h6,code">
				<label for="solo_html_optional">HTML, optional</label>
				<textarea name="html_optional" id="solo_html_optional"></textarea>
			</div>
		</fieldset>
	</form>


	<hr />


	<h2>Combined Test</h2>
	<p>Testing initialization, validation and callbacks in combination.</p>

	<form name="combined" action="#" method="get" class="i:combined combined labelstyle:inject">

		<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
		<input type="hidden" name="hidden_input" value="hidden value" />


		<h3>Standard fields</h3>
		<fieldset>
			<div class="field string required">
				<label for="combined_string_required">String, required</label>
				<input type="text" name="string_required" id="combined_string_required" />
				<div class="help">
					<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field email required">
				<label for="combined_email_required">Email, required</label>
				<input type="email" name="email_required" id="combined_email_required" />
				<div class="help">
					<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field number required">
				<label for="combined_number_required">Number, required</label>
				<input type="number" name="number_required" id="combined_number_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field tel required">
				<label for="combined_tel_required">Telephone, required</label>
				<input type="tel" name="tel_required" id="combined_tel_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field integer required">
				<label for="combined_integer_required">Integer, required</label>
				<input type="number" name="integer_required" id="combined_integer_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field password required">
				<label for="combined_password_required">Password, required</label>
				<input type="password" name="password_required" id="combined_password_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field date required">
				<label for="combined_date_required">Date, required</label>
				<input type="date" name="date_required" id="combined_date_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field datetime required">
				<label for="combined_datetime_required">Datetime, required</label>
				<input type="datetime" name="datetime_required" id="combined_datetime_required" />
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field select required">
				<label for="combined_select_required">Select, required</label>
				<select name="select_required" id="combined_select_required">
					<option value="">-</option>
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field text required">
				<label for="combined_text_required">Text, required</label>
				<textarea name="text_required" id="combined_text_required"></textarea>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field checkbox required">
				<input type="hidden" name="checkbox_required" value="0" />
				<input type="checkbox" name="checkbox_required" id="combined_checkbox_required" value="true" />
				<label for="combined_checkbox_required">Checkbox, required</label>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field radiobuttons required">
				<label>Radio buttons, required</label>
				<div class="item">
					<input type="radio" value="true" name="radio_required" id="combined_radio_a_required" />
					<label for="combined_radio_a_required">True</label>
				</div>
				<div class="item">
					<input type="radio" value="false" name="radio_required" id="combined_radio_b_required" />
					<label for="combined_radio_b_required">False</label>
				</div>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<div class="field files required">
				<label for="input_mediae_required">Files, required</label>
				<input type="file" name="media_required[]" id="input_mediae_required" />
				<div class="help">
					<div class="hint">Add image here. Use png or jpg in any proportion.</div>
					<div class="error">File does not fit requirements.</div>
				</div>
			</div>
		</fieldset>


		<hr />


		<ul class="actions">
			<li><input type="button" value="buttonm name" name="button_name" class="button" /></li>
			<li><input type="button" value="button" class="button" /></li>
			<li><input type="submit" value="submit, name" name="submit_name" class="button" /></li>
			<li><input type="submit" value="submit" class="button" /></li>
			<li><input type="reset" value="reset, name" name="reset_name" class="button" /></li>
			<li><input type="reset" value="reset" class="button" /></li>
			<li><a href="#" class="button">a</a></li>
		</ul>


		<hr />


		<h3>Custom fields</h3>
		<fieldset>
			<h4>HTML Editor</h4>
			<div class="field html required tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download">
				<label for="combined_html_required">HTML, required</label>
				<textarea name="html_required" id="combined_html_required"></textarea>
				<div class="help">
					<div class="hint">hint</div>
					<div class="error">error</div>
				</div>
			</div>

			<h4>Geolocation</h4>
			<div class="field location required">
				<div class="location">
					<label for="input_location_required">Location, required</label>
					<input type="text" class="location" id="input_location_required" value="Ginestra" name="location_required" />
				</div>
				<div class="latitude">
					<label for="input_latitude_required">Latitude</label>
					<input type="text" class="latitude" id="input_latitude_required" value="41.2617" name="latitude_required" />
				</div>
				<div class="longitude">
					<label for="input_longitude_required">Longitude</label>
					<input type="text" class="longitude" id="input_longitude_required" value="" name="longitude_required" />
				</div>
				<div class="help">
					<div class="hint">Name and Geo coordinates of location</div>
					<div class="error">Name and Geo coordinates must be filled out</div>
				</div>
			</div>
		</fieldset>

	</form>

</div>

<div class="comments"></div>
