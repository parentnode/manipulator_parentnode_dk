Util.Objects["library"] = new function() {
	this.init = function(scene) {
		var i, file;

		// move files to other side of text
		scene.file_div = u.qs("#library_files", scene);
		u.ie(scene.file_div.parentNode, scene.file_div);

		scene.files = u.qsa("li", scene.file_div);

		// TODO: insert HOLD variant for touch devices
		if(u.e.event_pref == "mouse") {
			scene.files._mouseover = function(event) {
				u.ac(this, "hover");
				u.as(this.hint, "display", "block");
				u.a.translate(this.hint, this.offsetWidth, (this.offsetHeight-this.hint.offsetHeight)/2);
			}
			scene.files._mouseout = function(event) {
				u.rc(this, "hover");
				u.as(this.hint, "display", "none");
				u.a.translate(this.hint, 0, 0);
			}
		}

		for(i = 0; file = scene.files[i]; i++) {
			file.hint = u.qs("p", file);
			u.e.addEvent(file, "mouseover", scene.files._mouseover);
			u.e.addEvent(file, "mouseout", scene.files._mouseout);

			file.clicked = function(event) {
				location.href = this.url;
			}
			u.ce(file);
		}

	}
}

Util.Objects["search"] = new function() {
	this.init = function(div) {

		u.ac(div, "search");
		div.h2 = u.ae(div, "h2", {"html":"Search documentation"});
		div.field = u.ae(div, "div", {"class":"field text"});
		div.iN = u.ae(div.field, "input", {"type":"input", "class":"text"});

		div.iN._default_value = "search term of minimum 3 chars";
		div.iN.value = div.iN._default_value;
		u.ac(div.iN, "default");

		div.iN.div = div;

		div.iN._autocomplete = function() {
			var i, file, func;

			// start search
			u.ac(this.div, "loading");

			// content needs to be indexed
			if(!this.results) {

				this.results = u.ae(this.div, "div", {"class":"results"});
				this._files = u.qsa("#library_files li");

				for(i = 0; file = this._files[i]; i++) {

					file.search_div = this.div;
					file.Response = function(response) {
						var i, func;
						var functions = u.qsa(".functions .function", response);
						for(i = 0; func = functions[i]; i++) {
							func._file = this;
							func = this.search_div.iN.results.appendChild(func);

							u.e.click(func);
							func.clicked = function(event) {
								location.href = this._file.url + "#" + this.id;
							}

							func._over = function(event) {
								u.ac(this._file, "hover");
								u.ac(this, "hover");
							}
							func._out = function(event) {
								u.rc(this._file, "hover");
								u.rc(this, "hover");
							}
							// searchable areas
							func._definition = u.qs(".definition", func);
							func._description = u.qs(".description", func);
							u.as(func, "display", "none");
							u.e.addEvent(func, "mouseover", func._over);
							u.e.addEvent(func, "mouseout", func._out);
						}
					}

					u.Request(file, file.url);
				}
			}


			// perform search
			for(i = 0; func = this.results.childNodes[i]; i++) {
				if(this.value.length > 2 && (escape(u.text(func._definition).toLowerCase()).match(escape(this.value.toLowerCase())) || escape(u.text(func._description).toLowerCase()).match(escape(this.value.toLowerCase())))) {
					u.as(func, "display", "block");
				}
				else {
					u.as(func, "display", "none");
				}
			}

			// done
			u.rc(this.div, "loading");

		}

		div.iN._keyup = function(event) {
			// reset existing timer
			u.t.resetTimer(this.t_autocomplete);
			this.t_autocomplete = u.t.setTimer(this, this._autocomplete, 300);
		}

		div.iN._focused = function(event) {
			u.rc(this, "default");
			if(this.value == this._default_value) {
				this.value = "";
			}
			u.e.addEvent(this, "keyup", this._keyup)
		}
		div.iN._blurred = function(event) {
			if(this.value == "") {
				u.ac(this, "default");
				this.value = this._default_value;
			}
			u.t.resetTimer(this.t_autocomplete);
			u.e.removeEvent(this, "keyup", this._keyup)
		}

		u.e.addEvent(div.iN, "focus", div.iN._focused);
		u.e.addEvent(div.iN, "blur", div.iN._blurred);

	}
}