Util.Objects["formIndividual"] = new function() {
	this.init = function(div) {


		div.IdInput = function(iN, label) {

			if(iN.field.type == "files") {
				iN._form.addDebug(label + ": " + (iN.nodeName+"->"+iN.name) + " = " + (
					function(iN) {
						var files = iN.val();
						var string = ""; 
						for(var i = 0; i < files.length; i++){
							string += (string ? ", " : "") + files[i].name};
							return string;
						}
				)(iN));
			}
			else if(iN.field.type == "html") {
				iN._form.addDebug(label + ": " + (iN.nodeName+"->"+iN.name) + " = " + iN.val().replace(/</g, "&lt;").replace(/>/g, "&gt;"));
			}
			else {
				iN._form.addDebug(label + ": " + (iN.nodeName+"->"+iN.name) + " = " + iN.val());
			}
			
		}


		var forms = u.qsa("form", div);
		var form, i;
		for(i = 0; form = forms[i]; i++) {


			form.div = div;

			form.debug = u.ae(form, "div", {"class":"debug"});
			form.addDebug = function(message) {
				this.debug.innerHTML += message + "<br>";
				this.debug.scrollTop = this.debug.scrollTop + 25;
			}


			u.f.init(form);


			form.ready = function() {
				this.addDebug("form.ready");
			}

			form.preSubmitted = function(iN) {
				this.addDebug("form.preSubmitted");
			}

			form.submitted = function(iN) {

				this.addDebug("form.submitted by: " + (iN.nodeName+"->"+iN.name));

				var data = this.getData({"format":"object"});
				for(x in this.inputs) {
					if(this.inputs[x].val() != data[x] && (this.inputs[x].val() || data[x])) {
						this.div.IdInput(this.inputs[x], " - form.submitted ERROR");
					}
					else if(data[x] !== undefined) {
						this.div.IdInput(this.inputs[x], " - form.submitted CORRECT");
					}
				}
			}


			form.resat = function() {
				this.addDebug("form.resat");
			}

			// Callback from both inputs and buttons
			form.focused = function(iN) {
				if((!iN.type && iN.nodeName !== "TEXTAREA") || iN.type.match(/button|submit|reset/)) {
					this.addDebug("form.focused by button: " + (iN.nodeName+"->"+iN.name));
				}
				else {
					this.div.IdInput(iN, "form.focused by input");
				}
			}
			// Callback from both inputs and buttons
			form.blurred = function(iN) {
				if((!iN.type && iN.nodeName !== "TEXTAREA") || iN.type.match(/button|submit|reset/)) {
					this.addDebug("form.focused by button: " + (iN.nodeName+"->"+iN.name));
				}
				else {
					this.div.IdInput(iN, "form.blurred by input");
				}
			}

			form.updated = function(iN) {
				this.div.IdInput(iN, "form.updated by");
			}
			form.changed = function(iN) {
				this.div.IdInput(iN, "form.changed by");
			}

			form.validationPassed = function() {
				this.addDebug("form.validationPassed");
			}
			form.validationFailed = function(iNs) {
				this.addDebug("form.validationFailed:");
				for(x in iNs) {
					this.div.IdInput(this.inputs[x], " - input failed validation");
				}
			}


			for(input in form.inputs) {

				if(form.inputs[input].field) {
					form.inputs[input].updated = function() {
						this._form.addDebug("input.updated: " + this.name);
					}
					form.inputs[input].changed = function() {
						this._form.addDebug("input.changed:" + this.name);
					}
					form.inputs[input].blurred = function() {
						this._form.addDebug("input.blurred: " + this.name);
					}
					form.inputs[input].focused = function() {
						this._form.addDebug("input.focused:" + this.name);
					}
					form.inputs[input].inputValidationPassed = function() {
						this._form.addDebug("input.inputValidationPassed:" + this.name);
					}
					form.inputs[input].inputValidationFailed = function() {
						this._form.addDebug("input.inputValidationFailed:" + this.name);
					}
				}
			}

		}

	}
}
