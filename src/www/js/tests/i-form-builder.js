Util.Objects["formbuilder"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var field, label, input, actions, action;


		// build form
		var form = u.f.addForm(div, {"action":"#", "method":"post", "name":"test_form", "class":"test_form"});
		var fieldset = u.f.addFieldset(form, {"class":"fieldset"});

		u.f.addField(fieldset, {"type":"string", "name":"name_string", "label":"String", "value":"value_string", "class":"class_string", "max":10});
		u.f.addField(fieldset, {"type":"email", "name":"name_email", "label":"Email", "value":"value_email", "class":"class_email"});
		u.f.addField(fieldset, {"type":"checkbox", "name":"name_checkbox", "label":"Checkbox", "value":"value_checkbox", "class":"class_checkbox"});
		u.f.addField(fieldset, {"type":"text", "name":"name_text", "label":"Text", "value":"value_text", "class":"class_text"});

		u.f.addAction(form, {"type":"submit", "name":"name_submit", "value":"value_submit", "class":"class_submit"});
		u.f.addAction(form, {"type":"button", "name":"name_button", "value":"value_button", "class":"class_button"});


		// start testing

		// u.f.addForm
		form = u.qs("form", div);
		if(form && form.action == (location.href+"#") && form.method == "post" && form.name == "test_form" && form.className == "test_form") {
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
		if(field && label && input && 
			u.hc(field, "class_string") && 
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


		// u.f.addField - checkbox
		field = u.qs("div.field.checkbox", fieldset);
		label = u.qs("label", field);
		input = u.qs("input[type=checkbox]", field);
		if(field && label && input &&
			u.hc(field, "class_checkbox") && 
			field.parentNode == fieldset && 
			label.parentNode == field && 
			input.parentNode == field && 
			u.ps(label) == input &&
			label.innerHTML == "Checkbox" && 
			label.getAttribute("for") == input.id && 
			input.name == "name_checkbox" &&
			input.value == "true"
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
		if(field && label && input &&
			u.hc(field, "class_text") && 
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


		// cleanup
		form.parentNode.removeChild(form);

	}
}