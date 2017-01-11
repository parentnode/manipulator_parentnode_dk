
Util.Objects["formIndividual"] = new function() {
	this.init = function(div) {

//		u.bug_console_only = false;


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
			for(x in form.fields) {
				if(u.hc(form.fields[x].field, "required")) {
					var field_required = form.fields[x].field;
				}
				else {
					var field = form.fields[x].field;
				}
			}

			form.submitted = function(input) {

				var params = u.f.getParams(this, {"send_as":"json"});
				for(x in this.fields) {
					if(this.fields[x].val() != params[x]) {
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
					this.addDebug("input failed: value=" + this.fields[x].val().replace(/</g, "&lt;").replace(/>/g, "&gt;") + ", field:" + u.nodeId(this.fields[x]));
				}
			}

			form.updated = function(iN) {
				this.addDebug("form.updated:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			form.changed = function(iN) {
				this.addDebug("form.changed:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}

			field.updated = function(iN) {
				iN._form.addDebug("field.updated:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			field.changed = function(iN) {
				iN._form.addDebug("field.changed:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			field_required.updated = function(iN) {
				iN._form.addDebug("required field.updated:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			field_required.changed = function(iN) {
				iN._form.addDebug("required field.changed:" + u.nodeId(iN) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}

		}

	}
}


Util.Objects["formCombined"] = new function() {
	this.init = function(div) {

		var form = u.qs("form", div);

		form.debug = u.ae(form, "div", {"class":"debug"});
		form.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		u.f.init(form);
		form.submitted = function(input) {

			var params = u.f.getParams(this, {"send_as":"json"});
			for(x in this.fields) {
				if(this.fields[x].val() != params[x]) {
					this.addDebug("form.submitted: error");
				}
			}

			this.addDebug("form.submitted: correct");
		}

		form.updated = function(iN) {
			this.addDebug("form.updated:" + u.nodeId(iN) + " = " + iN.val());
		}
		form.changed = function(iN) {
			this.addDebug("form.changed:" + u.nodeId(iN) + " = " + iN.val());
		}

		form.validationPassed = function() {
			this.addDebug("form.validationPassed");
		}
		form.validationFailed = function(iNs) {
			this.addDebug("form.validationFailed:" + iNs);
			for(x in iNs) {
				this.addDebug("input failed: value=" + this.fields[x].val() + ", field:" + u.nodeId(this.fields[x]));
			}
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




