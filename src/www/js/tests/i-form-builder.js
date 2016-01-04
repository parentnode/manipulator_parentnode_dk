Util.Objects["formbuilder"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var i, field, label, input, actions, action, inputs, labels, value, items;

		// u.bug_force = true;
		// u.bug_console_only = false;


		// build form
		var form = u.f.addForm(div, {"action":"#", "method":"post", "name":"test_form", "class":"test_form"});
		var fieldset = u.f.addFieldset(form, {"class":"fieldset"});

		u.f.addField(fieldset, {"type":"string", "name":"name_string", "label":"String", "value":"value_string", "class":"class_string", "required":true});

		u.f.addField(fieldset, {"type":"email", "name":"name_email", "label":"Email", "value":"value_email", "class":"class_email"});
		u.f.addField(fieldset, {"type":"password", "name":"name_password", "label":"Password", "value":"value_password", "class":"class_password"});
		u.f.addField(fieldset, {"type":"checkbox", "name":"name_checkbox", "label":"Checkbox", "value":"value_checkbox", "class":"class_checkbox"});
		u.f.addField(fieldset, {"type":"text", "name":"name_text", "label":"Text", "value":"value_text", "class":"class_text", "max":10});

		u.f.addField(fieldset, {"type":"select", "name":"name_select", "label":"Select", "value":"value_2", "class":"class_select", 
			"options":[
				{"text":"Option 1", "value":"value_1"},
				{"text":"Option 2", "value":"value_2"},
				{"text":"Option 3", "value":"value_3"},
			]
		});

		u.f.addField(fieldset, {"type":"radiobuttons", "name":"name_radiobuttons", "label":"Radiobuttons", "value":"value_2", "class":"class_radiobuttons", 
			"options":[
				{"text":"Option 1", "value":"value_1"},
				{"text":"Option 2", "value":"value_2"},
				{"text":"Option 3", "value":"value_3"},
			]
		});

		u.f.addField(fieldset, {"type":"files", "name":"name_files", "label":"Files", "class":"class_files"});

		var submit = u.f.addAction(form, {"type":"submit", "name":"name_submit", "value":"value_submit", "class":"class_submit"});
		var button = u.f.addAction(form, {"type":"button", "name":"name_button", "value":"value_button", "class":"class_button"});


		// start testing

		// u.f.addForm
		form = u.qs("form", div);
		if(
			form && 
			(form.action == (location.href+"#") || form.action ==  "#") && 
			form.method == "post" && 
			form.name == "test_form" && 
			form.className == "test_form"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addForm: correct"});
			div.test_results["u.f.addForm"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addForm: error"});
			div.test_results["u.f.addForm"] = false;
		}


		// u.f.addFieldset
		fieldset = u.qs("fieldset", form);
		if(fieldset && fieldset.className == "fieldset" && fieldset.parentNode == form) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addFieldset: correct"});
			div.test_results["u.f.addFieldset"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addFieldset: error"});
			div.test_results["u.f.addFieldset"] = false;
		}


		// u.f.addField - string
		field = u.qs("div.field.string", fieldset);
		label = u.qs("label", field);
		input = u.qs("input[type=text]", field);

		var input_string = {"input":input, "label":label, "field":field};

		if(field && label && input && 
			u.hc(field, "class_string") && 
			u.hc(field, "required") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ns(label) == input &&
			label.innerHTML == "String" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_string" &&
			input.value == "value_string"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (string): correct"});
			div.test_results["u.f.addField (string)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (string): error"});
			div.test_results["u.f.addField (string)"] = false;
		}


		// u.f.addField - email
		field = u.qs("div.field.email", fieldset);
		label = u.qs("label", field);
		// have to select by name attribute as older browsers won't set the HTML5 types
		input = u.qs("input[name=name_email]", field);

		var input_email = {"input":input, "label":label, "field":field};

		if(field && label && input &&
			u.hc(field, "class_email") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ns(label) == input &&
			label.innerHTML == "Email" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_email" &&
			input.value == "value_email"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (email): correct"});
			div.test_results["u.f.addField (email)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (email): error"});
			div.test_results["u.f.addField (email)"] = false;
		}


		// u.f.addField - password
		field = u.qs("div.field.password", fieldset);
		label = u.qs("label", field);
		// have to select by name attribute as older browsers won't set the HTML5 types
		input = u.qs("input[name=name_password]", field);

		var input_password = {"input":input, "label":label, "field":field};

		if(field && label && input &&
			u.hc(field, "class_password") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ns(label) == input &&
			label.innerHTML == "Password" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_password" &&
			input.value == "value_password"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (password): correct"});
			div.test_results["u.f.addField (password)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (password): error"});
			div.test_results["u.f.addField (password)"] = false;
		}


		// u.f.addField - checkbox
		field = u.qs("div.field.checkbox", fieldset);
		label = u.qs("label", field);
		input = u.qs("input[type=checkbox]", field);
//		u.bug(u.hc(field, "class_checkbox") + ", " + (field.parentNode == fieldset) + ", " + (label.parentNode == field) + ", " + (input.parentNode == field) + ", " + (u.ps(label) == input) + ", " + (label.innerHTML) + ", " + (label.getAttribute("for") == input.id) + ", " + (input.name) + ", " + input.value)

		var input_checkbox = {"input":input, "label":label, "field":field};

		if(field && label && input &&
			u.hc(field, "class_checkbox") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ps(label) == input &&
			label.innerHTML == "Checkbox" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_checkbox" &&
			input.value == "value_checkbox"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (checkbox): correct"});
			div.test_results["u.f.addField (checkbox)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (checkbox): error"});
			div.test_results["u.f.addField (checkbox)"] = false;
		}


		// u.f.addField - text
		field = u.qs("div.field.text", fieldset);
		label = u.qs("label", field);
		input = u.qs("textarea", field);

		var input_text = {"input":input, "label":label, "field":field};

		if(field && label && input &&
			u.hc(field, "class_text") && 
			u.cv(field, "max") == 10 && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ns(label) == input &&
			label.innerHTML == "Text" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_text" &&
			input.value == "value_text"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (text): correct"});
			div.test_results["u.f.addField (text)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (text): error"});
			div.test_results["u.f.addField (text)"] = false;
		}


		// u.f.addField - select
		field = u.qs("div.field.select", fieldset);
		label = u.qs("label", field);
		input = u.qs("select", field);
		options = u.qsa("option", input);

		var input_select = {"input":input, "label":label, "field":field};

//		u.bug("input.selected_index:" + input.selectedIndex)

		if(field && label && input && options.length == 3 &&
			u.hc(field, "class_select") &&
			field.parentNode == fieldset &&
			label.parentNode == field &&
			input.parentNode == field &&
			u.ns(label) == input &&
			label.innerHTML == "Select" &&
			label.getAttribute("for") == input.id &&
			input.name == "name_select" &&
			input.options[input.selectedIndex].value == "value_2"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (select): correct"});
			div.test_results["u.f.addField (select)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (select): error"});
			div.test_results["u.f.addField (select)"] = false;
		}


		// u.f.addField - radiobuttons
		field = u.qs("div.field.radiobuttons", fieldset);
		labels = u.qsa("label", field);
		inputs = u.qsa("input", field);
		items = u.qsa("div.item", field);

		var input_radiobuttons = {"inputs":inputs, "labels":labels, "field":field};

		value = "";
		// find selected option manually
		for(i = 0; input = inputs[i]; i++) {
			if(input.checked) {
				value = input.value;
			}
		}
//		u.bug("value:" + value + ", " + (labels.length == 4) + ", "+ (inputs.length == 3) + ", " + (labels[0].parentNode == field) + ", " + (labels[0].parentNode == field))

		if(field && labels.length == 4 && inputs.length == 3 &&
			u.hc(field, "class_radiobuttons") &&
			field.parentNode == fieldset &&
			labels[0].parentNode == field &&
			inputs[0].parentNode == items[0] &&
			inputs[1].parentNode == items[1] &&
			inputs[2].parentNode == items[2] &&
			u.ps(labels[1]) == inputs[0] &&
			u.ps(labels[2]) == inputs[1] &&
			u.ps(labels[3]) == inputs[2] &&
			labels[0].innerHTML == "Radiobuttons" &&
			labels[1].getAttribute("for") == inputs[0].id &&
			labels[2].getAttribute("for") == inputs[1].id &&
			labels[3].getAttribute("for") == inputs[2].id &&
			inputs[0].name == "name_radiobuttons" &&
			inputs[1].name == "name_radiobuttons" &&
			inputs[2].name == "name_radiobuttons" &&
			value == "value_2"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (radiobuttons): correct"});
			div.test_results["u.f.addField (radiobuttons)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (radiobuttons): error"});
			div.test_results["u.f.addField (radiobuttons)"] = false;
		}



		// u.f.addField - text
		field = u.qs("div.field.files", fieldset);
		label = u.qs("label", field);
		input = u.qs("input", field);

		var input_files = {"input":input, "label":label, "field":field};

		if(field && label && input &&
			u.hc(field, "class_files") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ns(label) == input &&
			label.innerHTML == "Files" && 
			input.getAttribute("type") == "file" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_files"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addField (files): correct"});
			div.test_results["u.f.addField (files)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addField (files): error"});
			div.test_results["u.f.addField (files)"] = false;
		}


		// TODO
		// also missing tests for these types
		// field_type == "integer" || field_type == "date" || field_type == "datetime"



		// actions
		actions = u.qsa("ul.actions", form);
		if(actions.length == 1 && actions[0].parentNode == form) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addAction (ul): correct"});
			div.test_results["u.f.addAction (ul)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addAction (ul): error"});
			div.test_results["u.f.addAction (ul)"] = false;
		}


		// u.f.addAction - submit
		action = u.qs("li.name_submit", actions[0]);
		input = u.qs("input[type=submit]", action);
		if(action && input &&
			u.hc(input, "class_submit") && 
			input.parentNode == action && 
			action.parentNode == actions[0] &&
			input.name == "name_submit" &&
			input.value == "value_submit"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addAction (li + submit): correct"});
			div.test_results["u.f.addAction (li + submit)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addAction (li + submit): error"});
			div.test_results["u.f.addAction (li + submit)"] = false;
		}


		// u.f.addAction - button
		action = u.qs("li.name_button", actions[0]);
		input = u.qs("input[type=button]", action);
		if(action && input &&
			u.hc(input, "class_button") && 
			input.parentNode == action && 
			action.parentNode == actions[0] &&
			input.name == "name_button" &&
			input.value == "value_button"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.addAction (li + button): correct"});
			div.test_results["u.f.addAction (li + button)"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.addAction (li + button): error"});
			div.test_results["u.f.addAction (li + button)"] = false;
		}


		// test initialization of JS-form
		u.f.init(form);

		// set focus+blur on email field to test error class
		form.fields["name_email"].focus();
		form.fields["name_email"].blur();

		form.fields["name_text"].focus();
		form.fields["name_text"].blur();
		form.fields["name_text"].val("value_text_too_long");

		form.fields["name_checkbox"].val("value_checkbox");


		u.bug("focus:" + form.fields["name_checkbox"].val())

//		u.bug(form.fields["name_string"] + ", " + form.fields["name_password"]._label);

		if(
			form.fields["name_string"] == input_string.input &&
			form.fields["name_string"].field == input_string.field &&
			form.fields["name_string"]._label == input_string.label &&
			form.fields["name_string"].val() == "value_string" &&

			form.fields["name_email"] == input_email.input &&
			form.fields["name_email"].field == input_email.field &&
			form.fields["name_email"]._label == input_email.label &&
			form.fields["name_email"].val() == "value_email" &&
			u.hc(input_email.field, "error") &&

			form.fields["name_password"] == input_password.input &&
			form.fields["name_password"].field == input_password.field &&
			form.fields["name_password"]._label == input_password.label &&
			form.fields["name_password"].val() == "value_password" &&


			form.fields["name_checkbox"] == input_checkbox.input &&
			form.fields["name_checkbox"].field == input_checkbox.field &&
			form.fields["name_checkbox"]._label == input_checkbox.label &&
			form.fields["name_checkbox"].val() == "value_checkbox" &&

			form.fields["name_text"] == input_text.input &&
			form.fields["name_text"].field == input_text.field &&
			form.fields["name_text"]._label == input_text.label &&
			form.fields["name_text"].val() == "value_text_too_long" &&
			u.hc(input_text.field, "error") &&


			form.fields["name_select"] == input_select.input &&
			form.fields["name_select"].field == input_select.field &&
			form.fields["name_select"]._label == input_select.label &&
			form.fields["name_select"].val() == "value_2" &&

			form.fields["name_radiobuttons"].field._inputs[0] == input_radiobuttons.inputs[0] &&
			form.fields["name_radiobuttons"].field == input_radiobuttons.field &&
			form.fields["name_radiobuttons"]._label == input_radiobuttons.labels[1] &&
			form.fields["name_radiobuttons"].field._inputs[0]._label == input_radiobuttons.labels[1] &&
			form.fields["name_radiobuttons"].val() == "value_2" &&

			form.fields["name_files"] == input_files.input &&
			form.fields["name_files"].field == input_files.field &&
			form.fields["name_files"]._label == input_files.label &&

			form.actions["name_submit"] == submit &&
			form.actions["name_button"] == button

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.f.init: correct"});
			div.test_results["u.f.init"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.f.init: error"});
			div.test_results["u.f.init"] = false;
		}


		// cleanup
		form.parentNode.removeChild(form);

	}
}