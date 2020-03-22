Util.Modules["formFormats"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var form = u.qs("form", div);
		form.div = div;

		form.ready = function() {


			// DEFAULT (FormData)
			var data = this.getData();
			if((obj(data) || fun(data)) 
				&& data.get("hidden_input") == "hidden value"
				&& data.get("field[email][b]") === "martin" 
				&& data.get("field[email][c]") === "martin@think.dk"
				&& data.get("field[string][0]") === "" 
				&& data.get("field[string][1]") === "text"
			) {
				var test = u.ae(div, "div", {"class":"testpassed", "html":"u.f.getFormData(): correct"});
				div.test_results["u.getFormData-format-formdata"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.f.getFormData(): error"});
				div.test_results["u.getFormData-format-formdata"] = false;
			}


			// FORMDATA
			var data = this.getData({format:"formdata"});
			if((obj(data) || fun(data)) 
				&& data.get("hidden_input") == "hidden value"
				&& data.get("field[email][b]") === "martin" 
				&& data.get("field[email][c]") === "martin@think.dk"
				&& data.get("field[string][0]") === "" 
				&& data.get("field[string][1]") === "text"
			) {
				var test = u.ae(div, "div", {"class":"testpassed", "html":"u.f.getFormData({format:\"formdata\"}): correct"});
				div.test_results["u.getFormData-format-formdata"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.f.getFormData({format:\"formdata\"}): error"});
				div.test_results["u.getFormData-format-formdata"] = false;
			}


			// PARAMS
			var data = this.getData({format:"params"});

			if(str(data) 
				&& u.getVar("hidden_input", data) == "hidden value"
				&& u.getVar("field[email][b]", data) === "martin" 
				&& u.getVar("field[email][c]", data) === "martin@think.dk"
				&& u.getVar("field[string][0]", data) === "" 
				&& u.getVar("field[string][1]", data) === "text"
			) {
				var test = u.ae(div, "div", {"class":"testpassed", "html":"u.f.getFormData(format:\"params\"}): correct"});
				div.test_results["u.getFormData-format-params"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.f.getFormData(format:\"params\"}): error"});
				div.test_results["u.getFormData-format-params"] = false;
			}


			// OBJECT
			var data = this.getData({format:"object"});

			if(obj(data) 
				&& data.hidden_input == "hidden value" 
				&& data["field[email][b]"] == "martin" 
				&& data["field[email][c]"] === "martin@think.dk"
				&& data["field[string][0]"] === "" 
				&& data["field[string][1]"] === "text"
			) {
				var test = u.ae(div, "div", {"class":"testpassed", "html":"u.f.getFormData({format:\"object\"}): correct"});
				div.test_results["u.getFormData-format-object"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.f.getFormData({format:\"object\"}): error"});
				div.test_results["u.getFormData-format-object"] = false;
			}


			// JSON
			var data = this.getData({format:"json"});

			if(obj(data) && data.hidden_input == "hidden value" && data.field
				&& data.field.email && Object.keys(data.field.email).length === 3 && data.field.email.b === "martin" && data.field.email.c === "martin@think.dk"
				&& data.field.string && Object.keys(data.field.string).length == 2 && data.field.string[0] === "" && data.field.string[1] === "text"
			) {
				var test = u.ae(div, "div", {"class":"testpassed", "html":"u.f.getFormData({format:\"json\"}): correct"});
				div.test_results["u.getFormData-format-json"] = true;
			}
			else {
				u.ae(div, "div", {"class":"testfailed", "html":"u.f.getFormData({format:\"json\"}): error"});
				div.test_results["u.getFormData-format-json"] = false;
			}

		}

		u.f.init(form);

	}
}


