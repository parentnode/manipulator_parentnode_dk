Util.Objects["template"] = new function() {
	this.init = function(div) {

		u.bug_force = true;
//		u.bug_console_only = false;

		div.test_results = {};

		var object = [
			{
				"text":"Martin",
				"url":"/test/this/url",
				"alt":"Alt text",
				"image":"/img/test-350x350.jpg"
			},
			{
				"text":"Martin 2",
				"url":"/test/this/url2",
				"alt":"Alt text2",
				"image":"/img/test-400x250.png"
			},
			{
				"text":"Martin3",
				"url":"/test/this/url3",
				"alt":"Alt tex3t",
				"image":"/img/test-460x321.png"
			},
			{
				"text":"Martin4",
				"url":"/test/this/url4",
				"alt":"Alt text4",
				"image":"/img/test-640x360.png"
			}
		]

		var i, node;

		// create dom template
		var ul = u.ae(div, "ul");
		var template = u.ae(ul, "li", {"class":"template", "html":'<a href="{url}"><img src="{image}" alt="{alt}" />{text}</a>'})


		// get result nodes
		var nodes = u.template(template, object);

		// save return length for test after appending
		var nodes_length = nodes.length;

		// append to list
		while(nodes.length) {
			u.ae(ul, nodes[0], {"class":"test1"});
		}

		// check if it seems correct
		var control_children = u.qsa("li", ul);

		u.bug(control_children.length + ", " + u.qs("img", control_children[3]).src + ", " + nodes_length + ", " + u.text(control_children[2]))
		if(
			control_children.length == 5 && 
			nodes_length == 4 && 
			u.qs("img", control_children[1]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-460x321.png" &&
			u.text(control_children[2]) == "Martin 2"
		
		) {

			u.ae(div, "div", {"class":"testpassed", "html":"u.template (DOM template, no autoappend): correct"});
			div.test_results["u.template - 1"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (DOM template, no autoappend): error"});
			div.test_results["u.template - 1"] = false;
		}



		// test 2 - auto append
		var ul2 = u.ae(div, "ul");
		u.ac(template, "test2");

		// get appended result nodes
		var nodes = u.template(template, object, {"append":ul2});

		// check if it seems correct
		var control_children = u.qsa("li", ul2);
		if(
			control_children.length == 4 && 
			nodes.length == 4 && 
			u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[2]).src == location.protocol+"//" + document.domain + "/img/test-460x321.png" &&
			u.text(control_children[3]) == "Martin4"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template (DOM template, autoappend): correct"});
			div.test_results["u.template - 2"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (DOM template, autoappend): error"});
			div.test_results["u.template - 2"] = false;
		}



		// test 3 - virtual template and auto append
		var table = u.ae(div, "table", {"class":"test3"});

		// create virtual template
		var virtual_template = document.createElement("tr");
		virtual_template.innerHTML = '<td><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></td>';
		

		// get appended result nodes
		var nodes = u.template(virtual_template, object, {"append":table});

//		u.bug("table:" + table.innerHTML)
		// check if it seems correct
		var control_children = u.qsa("tr", table);

		u.bug(control_children.length + ", " + u.qs("img", control_children[3]).src + ", " + nodes_length)
		if(
			control_children.length == 4 && 
			nodes.length == 4 && 
			u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-640x360.png"

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template (Virtual template, autoappend): correct"});
			div.test_results["u.template - 3"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (Virtual template, autoappend): error"});
			div.test_results["u.template - 3"] = false;
		}


		// cleanup
		ul.parentNode.removeChild(ul);
		ul2.parentNode.removeChild(ul2);
		table.parentNode.removeChild(table);

	}
}