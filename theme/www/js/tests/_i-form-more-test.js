Util.Objects["formIndividual"] = new function() {
	this.init = function(div) {


		var forms = u.qsa("form", div);
		var form, i;
		for(i = 0; form = forms[i]; i++) {

			form.debug = u.ae(form, "div", {"class":"debug"});
			form.addDebug = function(message) {
				this.debug.innerHTML += message + "<br>";
				this.debug.scrollTop = this.debug.scrollTop + 25;
			}




			u.f.init(form);

			// get field reference
			for(x in form.inputs) {
				if(u.hc(form.inputs[x].field, "required")) {
					var field_required = form.inputs[x].field;
				}
				else {
					var field = form.inputs[x].field;
				}
			}

			form.submitted = function(input) {

				var params = u.f.getParams(this, {"send_as":"json"});
				for(x in this.inputs) {
					if(this.inputs[x].val() != params[x]) {
						this.addDebug("form.submitted: error");
					}
				}

				this.addDebug("form.submitted: correct");

			}

			form.validationPassed = function() {
				this.addDebug("form.validationPassed");
			}
			form.validationFailed = function(iNs) {
				this.addDebug("form.validationFailed:" + iNs);
				for(x in iNs) {
					this.addDebug("input failed: value=" + this.inputs[x].val().replace(/</g, "&lt;").replace(/>/g, "&gt;") + ", field:" + u.nodeId(this.inputs[x]));
				}
			}

			form.updated = function(iN) {
				this.addDebug("form.updated:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			form.changed = function(iN) {
				this.addDebug("form.changed:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}



			// field.updated = function(iN) {
			// 	iN._form.addDebug("field.updated:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			// }
			// field.changed = function(iN) {
			// 	iN._form.addDebug("field.changed:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			// }
			// field_required.updated = function(iN) {
			// 	iN._form.addDebug("required field.updated:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			// }
			// field_required.changed = function(iN) {
			// 	iN._form.addDebug("required field.changed:" + iN.className + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			// }

		}

	}
}




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

			form.inputs["string_required"].val("");
			form.inputs["string_required"].updated = function() {
				u.bug("string_required updated:" + this.val())
			}
			form.inputs["string_required"].changed = function() {
				u.bug("string_required changed:" + this.val())
			}
			form.inputs["string_required"].focused = function() {
				u.bug("string_required focused")
			}
			form.inputs["string_required"].blurred = function() {
				u.bug("string_required blurred")
			}


			// Number
			form.inputs["number_required"].val(123);
			form.inputs["number_required"].updated = function() {
				u.bug("number_required updated:" + this.val())
			}
			form.inputs["number_required"].changed = function() {
				u.bug("number_required changed:" + this.val())
			}
			form.inputs["number_required"].focused = function() {
				u.bug("number_required focused")
			}
			form.inputs["number_required"].blurred = function() {
				u.bug("number_required blurred")
			}


			// CHECKBOX
			// form.inputs["checkbox_required"].val(true);
			// form.inputs["checkbox_required"].updated = function() {
			// 	u.bug("checkbox_required updated:" + this.val())
			// }
			// form.inputs["checkbox_required"].changed = function() {
			// 	u.bug("checkbox_required changed:" + this.val())
			// }
			// form.inputs["checkbox_required"].focused = function() {
			// 	u.bug("checkbox_required focused")
			// }
			// form.inputs["checkbox_required"].blurred = function() {
			// 	u.bug("checkbox_required blurred")
			// }


			// RADIO BUTTON
			form.inputs["radio_required"].val();
			form.inputs["radio_required"].updated = function(input) {
				u.bug("radio_required updated:" + this.val() + ", happeded on:" + u.nodeId(input) + ", this.used:" + this.used)
			}
			form.inputs["radio_required"].changed = function(input) {
				u.bug("radio_required changed:" + this.val() + ", happeded on:" + u.nodeId(input))
			}
			form.inputs["radio_required"].focused = function(input) {
				u.bug("radio_required focused:" + this.val() + ", happeded on:" + u.nodeId(input))
			}
			form.inputs["radio_required"].blurred = function(input) {
				u.bug("radio_required blurred:" + this.val() + ", happeded on:" + u.nodeId(input))
			}


			// form.inputs["select_required"].updated = function() {
			// 	u.bug("select_required updated:" + this.val() + ", this.used:" + this.used)
			// }
			// form.inputs["select_required"].changed = function() {
			// 	u.bug("select_required changed:" + this.val())
			// }
			// form.inputs["select_required"].focused = function() {
			// 	u.bug("select_required focused:" + this.val())
			// }
			// form.inputs["select_required"].blurred = function() {
			// 	u.bug("select_required blurred:" + this.val())
			// }

			// form.inputs["customfield_required"].updated = function() {
			// 	u.bug("customfield_required updated:" + this.val() + ", this.used:" + this.used)
			// }
			// form.inputs["customfield_required"].changed = function() {
			// 	u.bug("customfield_required changed:" + this.val())
			// }
			// form.inputs["customfield_required"].focused = function() {
			// 	u.bug("customfield_required focused:" + this.val())
			// }
			// form.inputs["customfield_required"].blurred = function() {
			// 	u.bug("customfield_required blurred:" + this.val())
			// }

			
			form.actions["button_name"].clicked = function(event) {
//				u.bug("button clicked:" + u.nodeId(this));

				this.form.inputs["string_required"].val("auto complete string");
				this.form.inputs["email_required"].val("auto@complete.email");
				this.form.inputs["text_required"].val("auto complete text");
				this.form.inputs["select_required"].val("option_2");

				this.form.inputs["number_required"].val(123.5);
				this.form.inputs["tel_required"].val("+45 123-456");
				this.form.inputs["integer_required"].val(123);
				this.form.inputs["password_required"].val("password");

				this.form.inputs["boolean_required"].val(true);
				this.form.inputs["checkbox_required"].val(true);
				this.form.inputs["radio_required"].val(true);

//				this.form.inputs["customfield_required"].val("customfield");

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
				form._test_params.test2_string2 == form.inputs["test2_string2"].val() &&
				form._test_params.test2_string3 == form.inputs["test2_string3"].val() &&
				form._test_params.test2_string4 == undefined &&
				form._test_params.test2_string5 == form.inputs["test2_string5"].val()

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
				form._test_params.name == form.inputs["name"].val() &&
				form._test_params.apps["app1"]["id"] == form.inputs["apps[app1][id]"].val() &&
				form._test_params.apps["app1"]["name"] == form.inputs["apps[app1][name]"].val() &&
				form._test_params.apps["app2"]["id"] == form.inputs["apps[app2][id]"].val() &&
				form._test_params.apps["app2"]["test"] == undefined &&
				form._test_params.apps["app3"]["id"]["gas"]["hund"]["trold"] == form.inputs["apps[app3][id][gas][hund][trold]"].val() &&
				form._test_params.apps["app4"] == form.inputs["apps[app4]"].val()
				) {
					u.bug("Test4 form - submit passed", "green");
			}
			else {
				u.bug("Test4 form - submit failed", "red");
			}

		}
	}




