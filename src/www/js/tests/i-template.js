Util.Objects["template"] = new function() {
	this.init = function(div) {

		// u.bug_force = true;
		// u.bug_console_only = false;

		div.test_results = {};

		var object = [
			{
				"text":"Martin",
				"url":"/test/this/url",
				"alt":"Alt text",
				"image":"/img/test-350x350.jpg",
				"image_extra":"/img/test-400x250.png"
			},
			{
				"text":'Martin "2"',
				"url":"/test/this/url2",
				"url_second":"/also/test/this/url2",
				"alt":"Alt text2",
				"image":"/img/test-400x250.png",
				"image_extra":"/img/test-350x350.jpg"
			},
			{
				"text":"Martin3",
				"url":"/test/this/url3",
				"url_second":"/also/test/this/url3",
				"alt":"Alt tex3t",
				"image":"/img/test-460x321.png",
				"image_extra":"/img/test-640x360.png"
			},
			{
				"text":"Martin4",
				"url":"/test/this/url4",
				"url_second":"/also/test/this/url4",
				"alt":"Alt text4",
				"image":"/img/test-640x360.png",
				"image_extra":"/img/test-460x321.png"
			}
		]

		var i, node;

		// create dom template
		var ul = u.ae(div, "ul", {"class":"test1"});
		var template = u.ae(ul, "li", {"class":"template", "html":'<a href="{url}"><img src="{image}" alt="{alt}" />{text}</a><img src="{image_extra}" alt="extra" />'})

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
		var images_1 = u.qsa("img", control_children[1]);
		// u.bug("test:" + (u.text(control_children[2]) == "Martin \\\"2\\\""));
//		u.bug(control_children.length + ", " + u.qs("img", control_children[3]).src + ", " + u.qs("img", control_children[1]).src + ", " + nodes_length + ", " + u.text(control_children[2]))
		if(
			control_children.length == 5 &&
			nodes_length == 4 &&
			u.qsa("img", control_children[1])[0].src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qsa("img", control_children[1])[1].src == location.protocol+"//" + document.domain + "/img/test-400x250.png" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-460x321.png" &&
			u.text(control_children[2]) == "Martin \\\"2\\\""

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
		var ul2 = u.ae(div, "ul", {"class":"test2"});
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



		// test 3 - using u.template on JSON string and then HTML string with the result of JSON string
		var ul3 = u.ae(div, "ul", {"class":"test3"});

		var virtual_json = '{"url_json":"{url}", "image_json":"{image}", "text_json":"{text}"}';
		// get new JSON object
		var json = u.template(virtual_json, object);

		// create virtual template
		var virtual_template = '<li><a href="{url_json}"><img src="{image_json}" alt="{alt}" />{text_json}</a></li>';

		// get appended result nodes
		var nodes = u.template(virtual_template, json, {"append":ul3});

		// check if it seems correct
		var control_children = u.qsa("li", ul3);
//		u.bug(control_children.length + ", " + u.qs("img", control_children[3]).src + ", " + nodes.length)
		if(
			control_children.length == 4 &&
			nodes.length == 4 &&
			u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-640x360.png"

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template (First JSON String, then HTML String template, autoappend): correct"});
			div.test_results["u.template - 3"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (First JSON String, then HTML String template, autoappend): error"});
			div.test_results["u.template - 3"] = false;
		}


		// test 4 - using u.template on JSON object and then HTML string with the result of JSON object translation
		var ul4 = u.ae(div, "ul", {"class":"test4"});

		var real_json = {"url_real":"{url}", "image_real":"{image}", "text_real":"{text}"};
		// get new JSON object
		var json = u.template(real_json, object);

		// create virtual template
		var virtual_template = '<li><a href="{url_real}"><img src="{image_real}" alt="{alt}" />{text_real}</a></li>';

		// get appended result nodes
		var nodes = u.template(virtual_template, json, {"append":ul4});

		// check if it seems correct
		var control_children = u.qsa("li", ul4);
//		u.bug(control_children.length + ", " + u.qs("img", control_children[3]).src + ", " + nodes.length)
		if(
			control_children.length == 4 &&
			nodes.length == 4 &&
			u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-640x360.png"

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template (First JSON, then HTML String template, autoappend): correct"});
			div.test_results["u.template - 4"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (First JSON, then HTML String template, autoappend): error"});
			div.test_results["u.template - 4"] = false;
		}





		// test 5 - string template and auto append (on tabæe)
		var table = u.ae(div, "table", {"class":"test5"});

		// IE requires table_body
		var table_body = u.ae(table, "tbody");

		// create virtual template
		var virtual_template = '<tr><td><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></td></tr>';


		// get appended result nodes
		var nodes = u.template(virtual_template, object, {"append":table_body});


		// check if it seems correct
		var control_children = u.qsa("tr", table_body);

		u.bug("table:" + control_children.length + ", " + u.qs("img", control_children[0]).src + ", " + u.qs("img", control_children[3]).src + ", " + nodes.length + ", " + (u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg") + ", "+ (u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-640x360.png"))
		if(
			control_children.length == 4 &&
			nodes.length == 4 &&
			u.qs("img", control_children[0]).src == location.protocol+"//" + document.domain + "/img/test-350x350.jpg" &&
			u.qs("img", control_children[3]).src == location.protocol+"//" + document.domain + "/img/test-640x360.png"

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template (Table + string template, autoappend): correct"});
			div.test_results["u.template - 5"] = true;
		}
		// error
		else {

			u.ae(div, "div", {"class":"testfailed", "html":"u.template (Table + string template, autoappend): error"});
			div.test_results["u.template - 5"] = false;
		}


		// cleanup
		ul.parentNode.removeChild(ul);
		ul2.parentNode.removeChild(ul2);
		ul3.parentNode.removeChild(ul3);
		ul4.parentNode.removeChild(ul4);
		table.parentNode.removeChild(table);

	}
}