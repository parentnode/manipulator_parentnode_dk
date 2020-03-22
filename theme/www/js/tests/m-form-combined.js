Util.Modules["formCombined"] = new function() {
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

		var form = u.qs("form", div);

		form.div = div;


		form.debug = u.ae(form, "div", {"class":"debug"});
		form.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}

		// Make debug output sticky
		form.scrolled = function() {
			var abs_y = u.absY(this);
			if(
				abs_y - (page.browser_h / 2) < page.scrolled_y 
				&& 
				abs_y + ((this.offsetHeight + (this._is_released ? 0 : this.debug.offsetHeight))) - page.browser_h > page.scrolled_y
			) {
				if(this._is_released) {
					u.ac(this, "fixed");
					this._is_released = false;
				}
			}
			else {
				if(!this._is_released) {
					this._is_released = true;
					u.rc(this, "fixed");
				}
			}
		}
		u.e.addWindowEvent(form, "scroll", form.scrolled);
		// Apply intial scroll calculation
		form.scrolled();


		u.f.init(form);

		form.ready = function() {
			this.addDebug("form.ready");
		}

		form.preSubmitted = function(iN) {
			this.addDebug("form.preSubmitted");
		}

		form.submitted = function(iN) {

			this.addDebug("form.submitted by:" + (iN.nodeName+"->"+iN.name));

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

		form.focused = function(iN) {
			if((!iN.type && iN.nodeName !== "TEXTAREA") || iN.type.match(/button|submit|reset/)) {
				this.addDebug("form.focused by button: " + (iN.nodeName+"->"+iN.name));
			}
			else {
				this.div.IdInput(iN, "form.focused by input");
			}
		}
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
				form.inputs[input].validationPassed = function() {
					this._form.addDebug("input.validationPassed:" + this.name);
				}
				form.inputs[input].validationFailed = function() {
					this._form.addDebug("input.validationFailed:" + this.name);
				}
			}
		}

	}
}
