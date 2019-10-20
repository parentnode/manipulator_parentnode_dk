Util.Objects["renderview"] = new function() {
	this.init = function(div) {

		u.bug("init renderview", div);

		var view1 = u.renderView({
			template_url: {url: "renderview/template.html"},
			data_url: {url:"/ajax/renderview/data.json", data: {}},
			template_path: "/ajax/",
			target: div,
		});


		var view2 = u.renderView({
			template_url: {url: "renderview/template.html"},
			data_url: {url:"/ajax/renderview/data.json", data: {}},
			template_path: "/ajax/",
			target: div,
		});
		view2.templateRendered = function() {
			u.bug("yay – rendered");

			// avoid endless loop
			delete this.templateRendered;

			this.update({data:{"name":"Peter", "description":"I'm also here"}});
		}



		var view3 = u.renderView({
			template_url: {url: "renderview/template.html"},
			data: {"name":"Søren", "description":"Hey, I'm here"},
			template_path: "/ajax/",
			target: div,
		});

	}
}