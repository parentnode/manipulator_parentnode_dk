<? $page_title = "Forms tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	form.test1 {border: 1px solid red; margin-bottom: 20px;}
	form.test2 {border: 1px solid green; margin-bottom: 20px;}
	form.test3 {border: 1px solid blue; margin-bottom: 20px;}
	form.test4 {border: 1px solid orange; margin-bottom: 20px;}
</style>

<script type="text/javascript">

	u.bug_position = "fixed";

	Util.Objects["test1"] = new function() {
		this.init = function(form) {

			u.f.init(form);

			form.submitted = function(input) {
				// save params for test
				this._test_params = u.f.getParams(this);
//				u.bug("submitted:" + this.submitButton);
//				u.bug(u.f.getParams(this));
			}

			// form.changed = function(input) {
			// 	u.bug("changed:" + u.nodeId(input) + ":" + input.val())
			// }
			// form.updated = function(input) {
			// 	u.bug("updated:" + u.nodeId(input) + ":" + input.val())
			// }
			// form.focused = function(input) {
			// 	u.bug("focused:" + u.nodeId(input))
			// }
			// form.blurred = function(input) {
			// 	u.bug("blurred:" + u.nodeId(input))
			// }


			form.validationFailed = function(input) {
				// save callback for test
				this._test_validation_failed = true;
//				u.bug("validationFailed:" + u.nodeId(this));
			}

			// form.fields["string_required"].updated = function() {
			// 	u.bug("string_required updated:" + this.val())
			// }
			// form.fields["string_required"].changed = function() {
			// 	u.bug("string_required changed:" + this.val())
			// }
			// form.fields["string_required"].focused = function() {
			// 	u.bug("string_required focused")
			// }
			// form.fields["string_required"].blurred = function() {
			// 	u.bug("string_required blurred")
			// }

			form.fields["select_required"].updated = function() {
				u.bug("select_required updated:" + this.val() + ", this.used:" + this.used)
			}
			form.fields["select_required"].changed = function() {
				u.bug("select_required changed:" + this.val())
			}
			form.fields["select_required"].focused = function() {
				u.bug("select_required focused:" + this.val())
			}
			form.fields["select_required"].blurred = function() {
				u.bug("select_required blurred:" + this.val())
			}

			form.fields["customfield_required"].updated = function() {
				u.bug("customfield_required updated:" + this.val() + ", this.used:" + this.used)
			}
			form.fields["customfield_required"].changed = function() {
				u.bug("customfield_required changed:" + this.val())
			}
			form.fields["customfield_required"].focused = function() {
				u.bug("customfield_required focused:" + this.val())
			}
			form.fields["customfield_required"].blurred = function() {
				u.bug("customfield_required blurred:" + this.val())
			}

			
			form.actions["button_name"].clicked = function(event) {
//				u.bug("button clicked:" + u.nodeId(this));

				this.form.fields["string_required"].val("auto complete string");
				this.form.fields["email_required"].val("auto@complete.email");
				this.form.fields["text_required"].val("auto complete text");
				this.form.fields["select_required"].val("option_2");

				this.form.fields["numeric_required"].val(123.5);
				this.form.fields["tel_required"].val("+45 123-456");
				this.form.fields["integer_required"].val(123);
				this.form.fields["password_required"].val("password");

				this.form.fields["boolean_required"].val(true);
				this.form.fields["checkbox_required"].val(true);
				this.form.fields["radio_required"].val("true");

				this.form.fields["customfield_required"].val("customfield");

			}

			// submit form - should cause form.validationFailed and have as many errors as required fields
			form.actions["submit_name"].clicked();

			if(u.qsa(".field.error", form).length == u.qsa(".field.required", form).length && form._test_validation_failed) {
				u.bug("Test1 form - first submit passed", "green");
			}
			else {
				u.bug("Test1 form - failed on first submit", "red");
			}


			// autocomplete fields
			form.actions["button_name"].clicked();
			// submit again
			form.actions["submit_name"].clicked();
			if(u.qsa(".field.error", form).length == 0 && form._test_params) {
				u.bug("Test1 form - second submit passed", "green");
			}
			else {
				u.bug("Test1 form - failed on second submit", "red");
			}

		}

	}

	Util.Objects["test2"] = new function() {
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

	Util.Objects["test3"] = new function() {
		this.init = function(form) {

			u.f.init(form);

			// only visual tests
			form.submitted = function(input) {}

		}
	}


	Util.Objects["test4"] = new function() {
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
	
	
				// var json_test = {"test_1":"fisk","object":{"test_2":"fisk2","test_3":"fisk6"}};
				// u.bug(json_test.object.test_2)
				// 
				// var json_test = {
				//   "navn" : "Test navn",
				//   "apps" : [
				//     {
				//       "app1" : {
				//         "id" : "1",
				//         "navn" : "App 1"
				//       }
				//     },
				//     {
				//       "app2" : {
				//         "id" : "2",
				//         "navn" : "App 2"
				//       }
				//     }
				//   ]
				// };
				// 
				// u.bug(json_test.apps[0].app1.id)
	// //				var json_test = {"test_1":"fisk","object":{"test_2":"fisk2","test_3":"fisk6"}};
	// 				var json_test = new Object();
	// 				json_test.test_1 = "fisk";
	// 				json_test.array = new Object();
	// 				json_test.array.test_2 = "fisk2";
	// 				json_test.array.test_3 = "fisk6";
	// 
	// 				u.bug("1:object length:" + json_test.array.length);
	// 
	// 				u.bug("1:json_test##" + json_test.test_1 + "##" + json_test.array + "##" + json_test.array.test_2);
	// 				var json_string = JSON.stringify(json_test);
	// 				u.bug("1:json_string:" + json_string + ":" + json_string.array);
	// 				var json_obj = eval("("+json_string+")");
	// 				u.bug("1:json_obj:" + json_obj + ":" + json_obj.array + ":" + json_obj.array.test_2);
	// 
	// 				u.bug("------");


	//			var json_test = {"test_1":"fisk","array":[{"test_2":"fisk2"},{"test_3":"fisk6"}]};
				// var json_test = new Object();
				// json_test["test_1"] = "fisk";
				// json_test["apps"] = new Array();
				// json_test["apps"][0] = new Object()
				// json_test["apps"][0]["id"] = "fisk2";
				// json_test["apps"][0]["name"] = "fisk2";
				// json_test["apps"][15] = new Array()
				// json_test["apps"][15][0] = new Object()
				// 
				// json_test["apps"][15][0]["id"] = "fisk6";
				// json_test["apps"][15][0]["name"] = new Object()
				// json_test["apps"][15][0]["name"]["fus"] = "fisk6";

	//			json_test.array["100"] = "fisk6";

	//			u.bug("2:array length:" + json_test.apps.length);

	//			u.bug("2:json_test##" + json_test.test_1 + "##" + json_test.apps + "##" + json_test.apps["test_3"]);
				// var json_string = JSON.stringify(json_test);
				// u.bug("json_string:" + json_string);

	//			var json_obj = eval("("+json_string+")");
	//			u.bug("2:json_obj:" + json_obj + ":" + json_obj.apps + ":" + json_obj.apps["test_3"]);


</script>

<div class="scene">
	<h1>Form</h1>

	<form name="test1" action="#" method="get" class="i:test1 test1">
		<h2>Test 1 - Basic</h2>
		<p>Testing initialization, validation and callbacks.</p>

		<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
		<input type="hidden" name="hidden_input" value="hidden value" />

		<fieldset>

			<!-- STRING -->
			<div class="field string required">
				<label for="test1_string_required">String, required</label>
				<input type="text" name="string_required" id="test1_string_required" />
			</div>
			<div class="field string">
				<label for="test1_string_optional">String, optional</label>
				<input type="text" name="string_optional" id="test1_string_optional" />
			</div>

			<!-- EMAIL -->
			<div class="field email required">
				<label for="test1_email_required">Email, required</label>
				<input type="email" name="email_required" id="test1_email_required" />
			</div>
			<div class="field email">
				<label for="test1_email_optional">Email, optional</label>
				<input type="email" name="email_optional" id="test1_email_optional" />
			</div>

			<!-- NUMERIC -->
			<div class="field numeric required">
				<label for="test1_numeric_required">Numeric, required</label>
				<input type="number" name="numeric_required" id="test1_numeric_required" />
			</div>
			<div class="field numeric">
				<label for="test1_numeric_optional">Numeric, optional</label>
				<input type="number" name="numeric_optional" id="test1_numeric_optional" />
			</div>

			<!-- TEL -->
			<div class="field tel required">
				<label for="test1_tel_required">Telephone, required</label>
				<input type="number" name="tel_required" id="test1_tel_required" />
			</div>
			<div class="field tel">
				<label for="test1_tel_optional">Telephone, optional</label>
				<input type="number" name="tel_optional" id="test1_tel_optional" />
			</div>

			<!-- INTEGER -->
			<div class="field integer required">
				<label for="test1_integer_required">Integer, required</label>
				<input type="number" name="integer_required" id="test1_integer_required" />
			</div>
			<div class="field integer">
				<label for="test1_integer_optional">Integer, optional</label>
				<input type="number" name="integer_optional" id="test1_integer_optional" />
			</div>

			<!-- PASSWORD -->
			<div class="field password required">
				<label for="test1_password_required">Password, required</label>
				<input type="password" name="password_required" id="test1_password_required" />
			</div>
			<div class="field password">
				<label for="test1_password_optional">Password, optional</label>
				<input type="password" name="password_optional" id="test1_password_optional" />
			</div>

			<!-- SELECT -->
			<div class="field select required">
				<label for="test1_select_required">Select, required</label>
				<select name="select_required" id="test1_select_required">
					<option value="">-</option>
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
			</div>
			<div class="field select">
				<label for="test1_select_optional">Select, optional</label>
				<select name="select_optional" id="test1_select_optional">
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
			</div>

			<!-- TEXT -->
			<div class="field text required">
				<label for="test1_text_required">Text, required</label>
				<textarea name="text_required" id="test1_text_required"></textarea>
			</div>
			<div class="field text autoexpand">
				<label for="test1_text_optional">Text, optional, autoexpand</label>
				<textarea name="text_optional" id="test1_text_optional"></textarea>
			</div>

			<!-- BOOLEAN (simple_form version of checkbox) -->
			<div class="field boolean required">
				<!-- ALWAYS SEND CHECKED STATE? -->
				<input type="hidden" name="boolean_required" value="0" />
				<input type="checkbox" name="boolean_required" id="test1_boolean_required" value="true" />
				<label for="test1_boolean_required">Boolean, required</label>
			</div>
			<div class="field boolean">
				<!-- ALWAYS SEND CHECKED STATE? -->
				<input type="hidden" name="boolean_optional" value="0" />
				<input type="checkbox" name="boolean_optional" id="test1_boolean_optional" value="true" />
				<label for="test1_boolean_optional">Boolean, optional</label>
			</div>

			<!-- CHECKBOX -->
			<div class="field checkbox required">
				<input type="hidden" name="checkbox_required" value="0" />
				<input type="checkbox" name="checkbox_required" id="test1_checkbox_required" value="true" />
				<label for="test1_checkbox_required">Checkbox, required</label>
			</div>
			<div class="field checkbox">
				<input type="hidden" name="checkbox_optional" value="0" />
				<input type="checkbox" name="checkbox_optional" id="test1_checkbox_optional" value="true" />
				<label for="test1_checkbox_optional">Checkbox, optional</label>
			</div>

			<!-- RADIO BUTTONS -->
			<div class="field radio_buttons required">
				<label class="radio_buttons">Radio buttons, required</label>
				<div class="radio item">
					<input type="radio" value="false" name="radio_required" id="test1_radio_a_required" />
					<label for="test1_radio_a_required">False</label>
				</div>
				<div class="radio item">
					<input type="radio" value="true" name="radio_required" id="test1_radio_b_required" />
					<label for="test1_radio_b_required">True</label>
				</div>
			</div>
			<div class="field radio_buttons">
				<label class="radio_buttons required">Radio buttons, optional</label>
				<div class="radio item">
					<input type="radio" value="false" name="radio_optional" id="test1_radio_a_optional" />
					<label for="test1_radio_a_optional">False</label>
				</div>
				<div class="radio item">
					<input type="radio" value="true" name="radio_optional" id="test1_radio_b_optional" />
					<label for="test1_radio_b_optional">True</label>
				</div>
			</div>

			<!-- CUSTOM FIELD -->
			<div class="field string customfield required">
				<label for="test1_customfield_required">Customfield, required</label>
				<input type="text" name="customfield_required" id="test1_customfield_required" />
			</div>
			<div class="field string customfield">
				<label for="test1_customfield_optional">Customfield, optional</label>
				<input type="text" name="customfield_optional" id="test1_customfield_optional" />
			</div>

		</fieldset>

		<ul class="actions">
			<li><input type="button" value="buttonm name" name="button_name" class="button" /></li>
			<li><input type="button" value="button" class="button" /></li>
			<li><input type="submit" value="submit, name" name="submit_name" class="button" /></li>
			<li><input type="submit" value="submit" class="button" /></li>
			<li><input type="reset" value="reset, name" name="reset_name" class="button" /></li>
			<li><input type="reset" value="reset" class="button" /></li>
			<li><a href="#" class="button">a</a></li>
		</ul>

	</form>


	<form name="test2" action="#" method="post" class="i:test2 test2">
		<h2>Test 2</h2>
		<p>Testing input ignore</p>

		<input type="hidden" name="test2_hidden" value="test 2 hidden value" />
		<input type="hidden" name="test2_hidden_ignored" value="test 2 hidden value ignored" class="ignored" />

		<fieldset>

			<div class="field string">
				<label for="test2_string1">String 1, ignored</label>
				<input type="text" name="test2_string1" id="test2_string1" value="test2_string1 ignored" class="ignored" />
			</div>

			<div class="field string">
				<label for="test2_string2">String 2, notignored aignored ignoreda</label>
				<input type="text" name="test2_string2" id="test2_string2" value="test2_string2, notignored aignored ignoreda" class="notignored aignored ignoreda" />
			</div>

			<div class="field string">
				<label for="test2_string3">String 3, 2alsoignored alsoignored2</label>
				<input type="text" name="test2_string3" id="test2_string3" value="test2_string3, 2alsoignored alsoignored2" class="2alsoignored alsoignored2" />
			</div>

			<div class="field string">
				<label for="test2_string4">String 4, alsoignored</label>
				<input type="text" name="test2_string4" id="test2_string4" value="test2_string4, alsoignored" class="alsoignored" />
			</div>

			<div class="field string">
				<label for="test2_string5">String 5</label>
				<input type="text" name="test2_string5" id="test2_string5" value="test2_string5" />
			</div>

		</fieldset>

		<ul class="actions">
			<li><input type="submit" value="submit with name" name="submit_name" class="button" /></li>
			<li><input type="submit" value="submit without name" class="button" /></li>
		</ul>
	</form>


	<form name="test3" action="#" method="get" class="i:test3 test3">
		<h2>Test 3</h2>
		<p>Testing errors and hints.</p>

		<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
		<input type="hidden" name="hidden_input" value="hidden value" />

		<fieldset>

			<!-- STRING -->
			<div class="field string required" data-error="data-error string">
				<label for="test3_string_required">String, required</label>
				<input type="text" name="string_required" id="test3_string_required" />
				<div class="hint">Hint string</div>
			</div>

			<!-- EMAIL -->
			<div class="field email required">
				<label for="test3_email_required">Email, required</label>
				<input type="email" name="email_required" id="test3_email_required" />
				<div class="hint">Hint email</div>
				<div class="error">HTML error email</div>
			</div>

			<!-- SELECT -->
			<div class="field select required" data-error="data-error select">
				<label for="test3_select_required">Select, required</label>
				<select name="select_required" id="test3_select_required">
					<option value="">-</option>
					<option value="option_1">option 1</option>
					<option value="option_2">option 2</option>
				</select>
				<div class="hint">Hint select</div>
			</div>

			<!-- TEXT -->
			<div class="field text required">
				<label for="test3_text_required">Text, required</label>
				<textarea name="text_required" id="test3_text_required"></textarea>
				<div class="hint">Hint textarea</div>
				<div class="error">HTML error textarea</div>
			</div>

			<!-- CHECKBOX -->
			<div class="field checkbox required" data-error="data-error checkbox">
				<input type="hidden" name="checkbox_required" value="0" />
				<input type="checkbox" name="checkbox_required" id="test3_checkbox_required" value="true" />
				<label for="test3_checkbox_required">Checkbox, required</label>
				<div class="hint">Hint checkbox</div>
			</div>

			<!-- RADIO BUTTONS -->
			<div class="field radio_buttons required" data-error="data-error radio_buttons">
				<label class="radio_buttons">Radio buttons, required</label>
				<div class="radio item">
					<input type="radio" value="false" name="radio_required" id="test3_radio_a_required" />
					<label for="test3_radio_a_required">False</label>
				</div>
				<div class="radio item">
					<input type="radio" value="true" name="radio_required" id="test3_radio_b_required" />
					<label for="test3_radio_b_required">True</label>
				</div>
				<div class="hint">Hint radio_buttons</div>
			</div>

			<!-- CUSTOM FIELD -->
			<div class="field string customfield required" data-error="data-error customfield">
				<label for="test3_customfield_required">Customfield, required</label>
				<input type="text" name="customfield_required" id="test3_customfield_required" />
				<div class="hint">Hint customfield</div>
			</div>

		</fieldset>

		<ul class="actions">
			<li><input type="submit" value="submit, name" name="submit_name" class="button" /></li>
		</ul>

	</form>


	<form name="test4" action="#" method="post" class="i:test4 test4">
		<h2>Test 4</h2>
		<p>Testing send_as</p>

		<input type="hidden" name="hidden" value="hidden value" />
		<input type="hidden" name="hidden" value="hidden value ignored" class="ignoreinput" />

		<fieldset>

			<div class="field string">
				<label for="test4_name">Name</label>
				<input type="text" name="name" id="test4_name" value="Test name" />
			</div>

			<div class="field string">
				<label for="test4_apps_app1_id">apps[app1][id]</label>
				<input type="text" name="apps[app1][id]" id="test4_apps_app1_id" value="apps_app1_id" />
			</div>
			<div class="field string">
				<label for="test4_apps_app1_name">apps[app1][name]</label>
				<input type="text" name="apps[app1][name]" id="test4_apps_app1_name" value="apps_app1_name" />
			</div>

			<div class="field string">
				<label for="test4_apps_app2_id">apps[app2][id]</label>
				<input type="text" name="apps[app2][id]" id="test4_apps_app2_id" value="apps_app2_id" />
			</div>
			<div class="field string">
				<label for="test4_apps_app2_name">apps[app2][name]</label>
				<input type="text" name="apps[app2][name]" id="test4_apps_app2_name" value="apps_app2_name" />
			</div>

			<div class="field string">
				<label for="test4_apps_app3_name">apps[app3][name]</label>
				<input type="text" name="apps[app3][name]" id="test4_apps_app3_name" value="apps_app3_name" />
			</div>
			<div class="field string">
				<label for="test4_apps_app3_id_gas_kat_trold">apps[app3][id][gas][kat][trold]</label>
				<input type="text" name="apps[app3][id][gas][kat][trold]" id="test4_apps_app3_id_gas_kat_trold" value="apps_app3_id_gas_kat_trold" />
			</div>
			<div class="field string">
				<label for="test4_apps_app3_id_gas_hund_trold">apps[app3][id][gas][hund][trold]</label>
				<input type="text" name="apps[app3][id][gas][hund][trold]" id="test4_apps_app3_id_gas_hund_trold" value="apps_app3_id_gas_hund_trold" />
			</div>
			<div class="field string">
				<label for="test4_apps_app3_id_gas_hund_fisk">apps[app3][id][gas][hund][fisk]</label>
				<input type="text" name="apps[app3][id][gas][hund][fisk]" id="test4_apps_app3_id_gas_hund_fisk" value="apps_app3_id_gas_hund_fisk" />
			</div>
			<div class="field string">
				<label for="test4_apps_app3_id_gas_hund_torsk">apps[app3][id][gas][hund][torsk]</label>
				<input type="text" name="apps[app3][id][gas][hund][torsk]" id="test4_apps_app3_id_gas_hund_torsk" value="apps_app3_id_gas_hund_torsk" />
			</div>

			<div class="field string">
				<label for="test4_apps_app4">apps[app4]</label>
				<input type="text" name="apps[app4]" id="test4_apps_app4" value="apps_app4" />
			</div>

		</fieldset>

		<ul class="actions">
			<li><input type="submit" value="submit with name" name="submit_name" class="button" /></li>
			<li><input type="submit" value="submit without name" class="button" /></li>
		</ul>

	</form>

</div>

<div class="comments"></div>
