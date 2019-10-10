	Util.Objects["formOneButtonForm"] = new function() {
		this.init = function(scene) {


			// If statements provide collapsing and disabling

			if(1 && "simple, applied to form with html, returns json") {

				var form = u.qs(".simple_form_html_json", scene);
				form.div_test = u.pn(form, {"include":"div.test"});
				form.div_result = u.ae(form.div_test, "div", {"class":"testwaiting", "html": "simple_form_data_json: waiting"});

				u.o.oneButtonForm.init(form);

				form.confirmed = function(response) {
					// u.bug("confirmed response", response);

					if(response.isJSON && response["csrf-token"] && response.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = response.test + ": correct";
					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				form.submit();
			}

			if(1 && "Simple, applied to form, embedded HTML, custom response function") {

				var form = u.qs(".simple_form_html_custom_function_json", scene);
				form.div_test = u.pn(form, {"include":"div.test"});
				form.div_result = u.ae(form.div_test, "div", {"class":"testwaiting", "html": "simple_form_data_json: waiting"});

				u.o.oneButtonForm.init(form);

				form.customConfirmed = function(response) {
					// u.bug("confirmed response", response);

					if(response.isJSON && response["csrf-token"] && response.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = response.test + ": correct";
					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				form.submit();
			}

			if(1 && "Simple, applied to form, data properties") {

				var form = u.qs(".simple_form_data_json", scene);
				form.div_test = u.pn(form, {"include":"div.test"});
				form.div_result = u.ae(form.div_test, "div", {"class":"testwaiting", "html": "simple_form_data_json: waiting"});

				u.o.oneButtonForm.init(form);

				form.confirmed = function(response) {
					// u.bug("confirmed response", response);

					if(response.isJSON && response["csrf-token"] && response.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = response.test + ": correct";
 					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				form.submit();
			}

			if(1 && "simple, applied to div with html, returns json") {

				var div = u.qs(".simple_div_html_json", scene);
				div.div_test = u.pn(div, {"include":"div.test"});
				div.div_result = u.ae(div.div_test, "div", {"class":"testwaiting", "html": "simple_div_html_json: waiting"});

				u.o.oneButtonForm.init(div);

				div.confirmed = function(response) {
					// u.bug("confirmed response", response);

					if(response.isJSON && response["csrf-token"] && response.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = response.test + ": correct";
 					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				div._ob_form.submit();
			}

			if(1 && "simple, applied to li with html, returns json") {

				var li = u.qs(".simple_li_html_json", scene);
				li.div_test = u.pn(li, {"include":"div.test"});
				li.div_result = u.ae(li.div_test, "div", {"class":"testwaiting", "html": "simple_li_html_json: waiting"});

				u.o.oneButtonForm.init(li);

				li.confirmed = function(response) {
					// u.bug("confirmed response", response);

					if(response.isJSON && response["csrf-token"] && response.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = response.test + ": correct";
 					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				li._ob_form.submit();
			}


			if(1 && "simple, applied to form with html, returns html") {

				var form = u.qs(".simple_div_html_html", scene);
				form.div_test = u.pn(form, {"include":"div.test"});
				form.div_result = u.ae(form.div_test, "div", {"class":"testwaiting", "html": "simple_div_html_html: waiting"});

				u.o.oneButtonForm.init(form);

				form.confirmed = function(response) {
					// u.bug("confirmed response", response, response.firstChild.innerHTML);

					var json = JSON.parse(response.firstChild.innerHTML);
					if(response.isHTML && json["csrf-token"] && json.test) {
						u.sc(this.div_result, "testpassed");
						this.div_result.innerHTML = json.test + ": correct";
					}
					else {
						u.sc(this.div_result, "testfailed");
						this.div_result.innerHTML = this.div_result.innerHTML.replace("waiting", "error");
					}
				}

				form.submit();
			}

		}

	}