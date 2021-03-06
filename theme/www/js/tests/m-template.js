Util.Modules["template"] = new function() {
	this.init = function(div) {

		// u.bug_force = true;
		// u.bug_console_only = false;

		div.test_results = {};

		// templates
		var tem_string = 'string {text} string';
		var tem_string_pattern = 'string {pattern} string';

		var tem_string_json = '{"url":"{url}", "image":"{image}", "text":"{text}", "boolean":{boolean}, "number":{number}, "pattern":"{pattern}", "string_boolean":"{string_boolean}", "string_number":"{string_number}", "maybe_null":"{maybe_null}", "object":{object}}';
		var tem_string_json_quoted = '{"url":"{url}", "image":"{image}", "text":"{text}", "boolean":"{boolean}", "number":"{number}", "pattern":"{pattern}", "string_boolean":"{string_boolean}", "string_number":"{string_number}", "maybe_null":"{maybe_null}", "object":"{object}"}';
		var tem_object = {"url":"{url}", "image":"{image}", "text":"{text}", "boolean":"{boolean}", "number":"{number}", "pattern":"{pattern}", "string_boolean":"{string_boolean}", "string_number":"{string_number}", "maybe_null":"{maybe_null}", "object":"{object}"};

		var tem_string_html = '<li class="is_{boolean}"><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a><input type="text" value="{boolean}" pattern="{pattern}" /><span class="number">{number}</span><span class="string_number">{string_number}</span><span class="string_boolean">{string_boolean}</span><span class="maybe_null">{maybe_null}</span></li>';
		var tem_html = u.ae(document.createElement("ul"), "li", {"class":"template", "html":'<a href="{url}"><img src="{image}" alt="{alt}" />{text}</a><img src="{image_extra}" alt="extra" /><input type="text" value="{boolean}" pattern="{pattern}" /><span class="number">{number}</span><span class="string_number">{string_number}</span><span class="string_boolean">{string_boolean}</span><span class="maybe_null">{maybe_null}</span>'})

		var tem_string_html_table = '<tr><td><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></td><td><input type="text" value="{boolean}" pattern="{pattern}" /></td><td class="number">{number}</td><td class="string_number">{string_number}</td><td class="string_boolean">{string_boolean}</td><td class="maybe_null">{maybe_null}</td></tr>';

		// value sets
		var set_void_array = [];
		var set_void_object = {};
		var set_void_string = "";
		var set_string = "I'm bad content";
		var set_array_objects = [
			{
				"text":"Martin",
				"url":"/test/this/url",
				"alt":"Alt text",
				"image":"/img/test-350x350.jpg",
				"image_extra":"/img/test-400x250.png",
				"boolean":false,
				"number":1,
				"pattern":"\\d{4}",
				"string_boolean":"false",
				"string_number":"1",
				"maybe_null":null,
				"object": {
					"name":"object 1"
				}
			},
			{
				"text":'Martin "2"',
				"url":"/test/this/url2",
				"url_second":"/also/test/this/url2",
				"alt":"Alt text2",
				"image":"/img/test-400x250.png",
				"image_extra":"/img/test-350x350.jpg",
				"boolean":true,
				"number":2,
				"pattern":"[0-9\\/\\.\\-\\(\\)\\[\\]\\$]",
				"string_boolean":"true",
				"string_number":"2",
				"maybe_null":"Not null",
				"object": {
					"name":"object 2"
				}
			},
			{
				"text":"Martin \"3\"",
				"url":"/test/this/url3",
				"url_second":"/also/test/this/url3",
				"alt":"Alt text3",
				"image":"/img/test-460x321.png",
				"image_extra":"/img/test-640x360.png",
				"boolean":false,
				"number":3,
				"pattern":"\\d{4}",
				"string_boolean":"false",
				"string_number":"3",
				"maybe_null":"Not null",
				"object": {
					"name":"object \"3\""
				}
			},
			{
				"text":"Martin4",
				"url":"/test/this/url4",
				"url_second":"/also/test/this/url4",
				"alt":"Alt text4",
				"image":"/img/test-640x360.png",
				"image_extra":"/img/test-460x321.png",
				"boolean":true,
				"number":4,
				"pattern":"\\d{4}",
				"string_boolean":"true",
				"string_number":"4",
				"maybe_null":null,
				"object": {
					"name":"object 4"
				}
			},
			{
				"text":"Martin '5'",
				"url":"/test/this/url5",
				"url_second":"/also/test/this/url5",
				"alt":"Alt text5",
				"image":"/img/test-460x321.png",
				"image_extra":"/img/test-640x360.png",
				"boolean":false,
				"number":3,
				"pattern":"[A-Za-z\\.\\-]",
				"string_boolean":"false",
				"string_number":"5",
				"maybe_null":"Not null",
				"object": {
					"name":"object 5"
				}
			},

		];


		var i, node;
		var result;


		// STRING TEMPLATE

		result = u.template(tem_string, set_void_string);
		if(!result) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, \"\"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, \"\"): error"});
		}

		result = u.template(tem_string, set_void_object);
		if(!result) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, {}): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, {}): error"});
		}

		result = u.template(tem_string, set_void_array);
		if(!result) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, []): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, []): error"});
		}

		result = u.template(tem_string, set_string);
		if(!result) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, "+set_string+"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, "+set_string+"): error"});
		}

		result = u.template(tem_string, set_array_objects[0]);
		if(result == "string Martin string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, object): error"});
		}

		result = u.template(tem_string, set_array_objects[2]);
		if(result == "string Martin \"3\" string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, object): error"});
		}

		result = u.template(tem_string_pattern, set_array_objects[0]);
		if(result === "string \\d{4} string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, object): error"});
		}

		result = u.template(tem_string_pattern, set_array_objects[1]);
		if(result === "string [0-9\\/\\.\\-\\(\\)\\[\\]\\$] string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, object): error"});
		}

		result = u.template(tem_string, set_array_objects);
		if(result == "string Martin stringstring Martin \"2\" stringstring Martin \"3\" stringstring Martin4 stringstring Martin \'5\' string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, array of objects): error"});
		}

		result = u.template(tem_string_pattern, set_array_objects);
		if(result == "string \\d{4} stringstring [0-9\\/\\.\\-\\(\\)\\[\\]\\$] stringstring \\d{4} stringstring \\d{4} stringstring [A-Za-z\\.\\-] string") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(string, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(string, array of objects): error"});
		}



		// JSON STRING

		result = u.template(tem_string_json, set_void_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, \"\"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, \"\"): error"});
		}

		result = u.template(tem_string_json, set_void_object);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, {}): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, {}): error"});
		}

		result = u.template(tem_string_json, set_void_array);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, []): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, []): error"});
		}

		result = u.template(tem_string_json, set_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, "+set_string+"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, "+set_string+"): error"});
		}

		result = u.template(tem_string_json, set_array_objects[0]);
		if(typeof(result) == "object" && result.length == 1 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}"

		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, object): error"});
		}

		result = u.template(tem_string_json_quoted, set_array_objects[0]);
		if(typeof(result) == "object" && result.length == 1 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json_quoted, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json_quoted, object): error"});
		}

		result = u.template(tem_string_json_quoted, set_array_objects[2]);
		if(typeof(result) == "object" && result.length == 1 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin \"3\"" &&
			result[0].boolean === false &&
			result[0].number === 3 &&
			result[0].maybe_null === "Not null" &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "3" &&
			result[0].object.name === "object \"3\"" &&
			result[0].image === "/img/test-460x321.png" &&
			result[0].pattern === "\\d{4}"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json_quoted, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json_quoted, object): error"});
		}

		result = u.template(tem_string_json, set_array_objects);
		if(typeof(result) == "object" && result.length == 5 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}" &&

			result[1].text === "Martin \"2\"" &&
			result[1].boolean === true &&
			result[1].number === 2 &&
			result[1].maybe_null !== null &&
			result[1].string_boolean === "true" &&
			result[1].string_number === "2" &&
			result[1].object.name === "object 2" &&
			result[1].image === "/img/test-400x250.png" &&
			result[1].pattern === "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json, array of objects): error"});
		}

		result = u.template(tem_string_json_quoted, set_array_objects);
		if(typeof(result) == "object" && result.length == 5 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}" &&

			result[1].text === "Martin \"2\"" &&
			result[1].boolean === true &&
			result[1].number === 2 &&
			result[1].maybe_null !== null &&
			result[1].string_boolean === "true" &&
			result[1].string_number === "2" &&
			result[1].object.name === "object 2" &&
			result[1].image === "/img/test-400x250.png" &&
			result[1].pattern === "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_json_quoted, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_json_quoted, array of objects): error"});
		}



		// JSON OBJECT

		result = u.template(tem_object, set_void_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, \"\"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, \"\"): error"});
		}

		result = u.template(tem_object, set_void_object);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, {}): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, {}): error"});
		}

		result = u.template(tem_object, set_void_array);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, []): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, []): error"});
		}

		result = u.template(tem_object, set_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, "+set_string+"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, "+set_string+"): error"});
		}

		result = u.template(tem_object, set_array_objects[0]);
		if(typeof(result) == "object" && result.length == 1 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, object): error"});
		}

		result = u.template(tem_object, set_array_objects);
		if(typeof(result) == "object" && result.length == 5 && Object.keys(result[0]).length == 10 &&
			result[0].text === "Martin" &&
			result[0].boolean === false &&
			result[0].number === 1 &&
			result[0].maybe_null === null &&
			result[0].string_boolean === "false" &&
			result[0].string_number === "1" &&
			result[0].object.name === "object 1" &&
			result[0].image === "/img/test-350x350.jpg" &&
			result[0].pattern === "\\d{4}" &&

			result[1].text === "Martin \"2\"" &&
			result[1].boolean === true &&
			result[1].number === 2 &&
			result[1].maybe_null !== null &&
			result[1].string_boolean === "true" &&
			result[1].string_number === "2" &&
			result[1].object.name === "object 2" &&
			result[1].image === "/img/test-400x250.png" &&
			result[1].pattern === "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_object, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_object, array of objects): error"});
		}



		// HTML STRING

		result = u.template(tem_string_html, set_void_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, \"\"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, \"\"): error"});
		}

		result = u.template(tem_string_html, set_void_object);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, {}): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, {}): error"});
		}

		result = u.template(tem_string_html, set_void_array);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, []): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, []): error"});
		}

		result = u.template(tem_string_html, set_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, "+set_string+"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, "+set_string+"): error"});
		}

		result = u.template(tem_string_html, set_array_objects[0]);
		if(typeof(result) == "object" && result.length == 1 &&
			u.hc(result[0], "is_false") &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("input", result[0]).pattern == "\\d{4}" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("span.number", result[0])) === "1" &&
			u.text(u.qs("span.string_number", result[0])) === "1" &&
			u.text(u.qs("span.maybe_null", result[0])) === ""
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, object): error"});
		}

		result = u.template(tem_string_html, set_array_objects[1]);
		if(typeof(result) == "object" && result.length == 1 &&
			u.qs("input", result[0]).value == "true" &&
			u.qs("input", result[0]).pattern == "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-400x250.png" &&
			u.text(u.qs("a", result[0])) === "Martin \"2\"" &&
			u.text(u.qs("span.number", result[0])) === "2" &&
			u.text(u.qs("span.string_number", result[0])) === "2" &&
			u.text(u.qs("span.maybe_null", result[0])) === "Not null"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, object): error"});
		}

		result = u.template(tem_string_html, set_array_objects);
		if(typeof(result) == "object" && result.length == 5 &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("input", result[0]).pattern == "\\d{4}" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("span.number", result[0])) === "1" &&
			u.text(u.qs("span.string_number", result[0])) === "1" &&
			u.text(u.qs("span.maybe_null", result[0])) === ""

			&&

			u.qs("input", result[1]).value == "true" &&
			u.qs("input", result[1]).pattern == "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]" &&
			u.qs("img", result[1]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-400x250.png" &&
			u.text(u.qs("a", result[1])) === "Martin \"2\"" &&
			u.text(u.qs("span.number", result[1])) === "2" &&
			u.text(u.qs("span.string_number", result[1])) === "2" &&
			u.text(u.qs("span.maybe_null", result[1])) === "Not null"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, array of objects): error"});
		}



		// HTML OBJECT

		result = u.template(tem_html, set_void_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_html, \"\"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_html, \"\"): error"});
		}

		result = u.template(tem_html, set_void_object);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_html, {}): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_html, {}): error"});
		}

		result = u.template(tem_html, set_void_array);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_html, []): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_html, []): error"});
		}

		result = u.template(tem_html, set_string);
		if(typeof(result) == "object" && result.length === 0) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_html, "+set_string+"): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_html, "+set_string+"): error"});
		}

		result = u.template(tem_html, set_array_objects[0]);
		if(typeof(result) == "object" && result.length == 1 &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("input", result[0]).pattern == "\\d{4}" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("span.number", result[0])) === "1" &&
			u.text(u.qs("span.string_number", result[0])) === "1" &&
			u.text(u.qs("span.maybe_null", result[0])) === ""
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, object): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, object): error"});
		}

		result = u.template(tem_html, set_array_objects);
		if(typeof(result) == "object" && result.length == 5 &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("input", result[0]).pattern == "\\d{4}" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("span.number", result[0])) === "1" &&
			u.text(u.qs("span.string_number", result[0])) === "1" &&
			u.text(u.qs("span.maybe_null", result[0])) === ""

			&&

			u.qs("input", result[1]).value == "true" &&
			u.qs("input", result[1]).pattern == "[0-9\\/\\.\\-\\(\\)\\[\\]\\$]" &&
			u.qs("img", result[1]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-400x250.png" &&
			u.text(u.qs("a", result[1])) === "Martin \"2\"" &&
			u.text(u.qs("span.number", result[1])) === "2" &&
			u.text(u.qs("span.string_number", result[1])) === "2" &&
			u.text(u.qs("span.maybe_null", result[1])) === "Not null"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, array of objects): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, array of objects): error"});
		}



		// AUTO APPEND

		var ul = u.ae(div, "ul", {"class":"appendtest"});
		result = u.template(tem_html, set_array_objects, {"append":ul});
		if(typeof(result) == "object" && result.length == 5 &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("span.number", result[0])) === "1" &&
			u.text(u.qs("span.string_number", result[0])) === "1"

			&&

			u.qs("input", result[1]).value == "true" &&
			u.qs("img", result[1]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-400x250.png" &&
			u.text(u.qs("a", result[1])) === "Martin \"2\"" &&
			u.text(u.qs("span.number", result[1])) === "2" &&
			u.text(u.qs("span.string_number", result[1])) === "2"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html, array of objects, append to ul): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html, array of objects, append to ul): error"});
		}


		var table = u.ae(div, "table", {"class":"appendtest"});
		result = u.template(tem_string_html_table, set_array_objects, {"append":table});
		if(typeof(result) == "object" && result.length == 5 &&
			u.qs("input", result[0]).value == "false" &&
			u.qs("img", result[0]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-350x350.jpg" &&
			u.text(u.qs("a", result[0])) === "Martin" &&
			u.text(u.qs("td.number", result[0])) === "1" &&
			u.text(u.qs("td.string_number", result[0])) === "1"

			&&

			u.qs("input", result[1]).value == "true" &&
			u.qs("img", result[1]).src.replace(location.protocol+"//"+document.domain, "") == "/img/test-400x250.png" &&
			u.text(u.qs("a", result[1])) === "Martin \"2\"" &&
			u.text(u.qs("td.number", result[1])) === "2" &&
			u.text(u.qs("td.string_number", result[1])) === "2"
		) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.template(tem_string_html_table, array of objects, append to table): correct"});
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.template(tem_string_html_table, array of objects, append to table): error"});
		}

		// CLEAN UP
		ul.parentNode.removeChild(ul);
		table.parentNode.removeChild(table);

	}
}