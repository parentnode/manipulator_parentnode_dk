Util.Objects["dom"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var node, nodes, wrap_node, svg;


		// querySelector
		if(u.querySelector("#qstest > h3 span").innerHTML == "querySelector") {
			u.addClass(u.querySelector("#qstest"), "testpassed");
			u.querySelector("#qstest").innerHTML = "u.querySelector: correct";
			div.test_results["u.querySelector"] = true;
		}
		else {
			u.addClass(u.querySelector("#qstest"), "testpassed");
			div.test_results["u.querySelector"] = false;
		}


		// querySelectorAll
		if(u.querySelectorAll("#content #qstest, #content .qsatest").length == 2) {
			u.addClass(u.querySelectorAll("#content #qstest, #content .qsatest")[1], "testpassed");
			u.querySelectorAll("#content #qstest, #content .qsatest")[1].innerHTML = "u.querySelectorAll: correct";
			div.test_results["u.querySelectorAll"] = true;
		}
		else {
			u.addClass(u.querySelector(".qsatest"), "testfailed");
			div.test_results["u.querySelectorAll"] = false;
		}


		// getElement
		if(u.getElement("type:1", div).innerHTML == "getElement") {
			u.getElement("type:1", div).parentNode.className = "testpassed";
			u.getElement("type:1", div).parentNode.innerHTML = "u.getElement: correct";
			div.test_results["u.getElement"] = true;
		}
		else {
			u.addClass(u.querySelector(".getest"), "testfailed");
			div.test_results["u.getElement"] = false;
		}


		// getElements
		nodes = u.getElements("type\:[3-4]", div)
		if(nodes.length == 2) {
			nodes[0].className = "testpassed";
			nodes[0].innerHTML = "u.getElements: correct";
			div.test_results["u.getElements"] = true;
		}
		else {
			u.addClass(u.querySelector(".gestest"), "testfailed");
			div.test_results["u.getElements"] = false;
		}


		// parent node
		var pn_span = u.querySelector(".parentnode ul li span", div);
		if(
			(u.parentNode(pn_span).className == "" && u.parentNode(pn_span) == pn_span.parentNode) &&
			(u.parentNode(pn_span, {"exclude":"li"}).className == "u2" && u.parentNode(pn_span, {"exclude":"li"}) == pn_span.parentNode.parentNode) &&
			(u.parentNode(pn_span, {"include":"ul.u1"}).className == "u1" && u.parentNode(pn_span, {"include":"ul.u1"}) == pn_span.parentNode.parentNode.parentNode.parentNode) &&
			u.parentNode(pn_span, {"include":"div"}).className == "parentnode"
			
		) {
			u.parentNode(u.querySelector(".parentnode ul li span", div), {"include":"div"}).innerHTML = "u.parentNode: correct";
			u.addClass(u.querySelector("div.parentnode"), "testpassed");
			div.test_results["u.parentNode"] = true;
		}
		else {
			u.addClass(u.querySelector("div.parentnode"), "testfailed");
			div.test_results["u.parentNode"] = false;
		}


		// ns + ps
		// nextSibling
		var ns_li = u.querySelector("div.ns .start", div);
		var ns_div = u.querySelector("div.ns div.c1", div);
		if(
			u.nextSibling(ns_li).className == "nons" &&
			u.nextSibling(ns_li, {"exclude":".nons"}).className == "jens" &&
			u.nextSibling(ns_li, {"exclude":".nons","include":".end"}).className == "end" &&
			(u.nextSibling(ns_div).className == "c1" && u.nextSibling(ns_div).nodeName.toLowerCase() == "span") &&
			(u.nextSibling(ns_div, {"include":".c2"}).className == "c2" && u.nextSibling(ns_div, {"include":".c2"}).nodeName.toLowerCase() == "span") &&
			(u.nextSibling(ns_div, {"exclude":"span"}).className == "c2" && u.nextSibling(ns_div, {"exclude":"span"}).nodeName.toLowerCase() == "div") &&
			(u.nextSibling(ns_div, {"include":"span.c2"}).className == "c2" && u.nextSibling(ns_div, {"include":"span.c2"}).nodeName.toLowerCase() == "span")
		) {
			u.addClass(u.querySelector("div.ns"), "testpassed");
			u.querySelector("div.ns").innerHTML = "u.nextSibling: correct";
			div.test_results["u.nextSibling"] = true;
		}
		else {
			u.addClass(u.querySelector("div.ns"), "testfailed");
			div.test_results["u.nextSibling"] = false;
		}


		// previousSibling
		var ps_li = u.querySelector("div.ps .start", div);
		var ps_div = u.querySelector("div.ps div.c2", div);
		if(
			(u.previousSibling(ps_li).className == "nops" && u.previousSibling(ps_li).nodeName.toLowerCase() == "li") &&
			(u.previousSibling(ps_li, {"exclude":".nops"}).className == "jeps" && u.previousSibling(ps_li, {"exclude":".nops"}).nodeName.toLowerCase() == "li") &&
			(u.previousSibling(ps_li, {"exclude":".nops","include":".end"}).className == "end" && u.previousSibling(ps_li, {"exclude":".nops","include":".end"}).nodeName.toLowerCase() == "li") &&
			(u.previousSibling(ps_div).className == "c2" && u.previousSibling(ps_div).nodeName.toLowerCase() == "span") &&
			(u.previousSibling(ps_div, {"include":".c1"}).className == "c1" && u.previousSibling(ps_div, {"include":".c1"}).nodeName.toLowerCase() == "span") &&
			(u.previousSibling(ps_div, {"exclude":"span"}).className == "c1" && u.previousSibling(ps_div, {"exclude":"span"}).nodeName.toLowerCase() == "div") &&
			(u.previousSibling(ps_div, {"exclude":"span,div"}).className == "" && u.previousSibling(ps_div, {"exclude":"span,div"}).nodeName.toLowerCase() == "ul") &&
			(u.previousSibling(ps_div, {"include":"span.c1"}).className == "c1" && u.previousSibling(ps_div, {"include":"span.c1"}).nodeName.toLowerCase() == "span")
		) {
			u.querySelector("div.ps").innerHTML = "u.previousSibling: correct";
			u.addClass(u.querySelector("div.ps"), "testpassed");
			div.test_results["u.previousSibling"] = true;
		}
		else {
			u.addClass(u.querySelector("div.ps"), "testfailed");
			div.test_results["u.previousSibling"] = false;
		}


		// childNodes
		node = u.querySelector("div.cn", div);
		if(
			u.childNodes(node, {"include":"span"}).length == 3 &&
			u.childNodes(node, {"include":".c1"}).length == 2 &&
			u.childNodes(node, {"include":"div.c1"}).length == 1 &&
			u.childNodes(node, {"exclude":"span"}).length == 4 &&
			u.childNodes(node, {"exclude":"span.c1"}).length == 6
		) {
			u.querySelector("div.cn").innerHTML = "u.childNodes: correct";
			u.addClass(u.querySelector("div.cn"), "testpassed");
			div.test_results["u.childNodes"] = true;
		}
		else {
			u.addClass(u.querySelector("div.cn"), "testfailed");
			div.test_results["u.childNodes"] = false;
		}


		// appendElement
		node = u.appendElement(div, "div", {"class":"testpassed", "html":"u.appendElement: "});
		if(node == u.querySelectorAll("div", div)[u.querySelectorAll("div", div).length-1]) {
			node.innerHTML += "correct";
			div.test_results["u.appendElement"] = true;
		}
		else {
			node.className = "error";
			div.test_results["u.appendElement"] = false;
		}


		// insertElement
		node = u.insertElement(div, "div", {"class":"testfailed", "html":"u.insertElement: "});
		if(node == u.querySelector("div", div)) {
			u.appendElement(div, node, {"class":"testpassed"});
			node.innerHTML += "correct";
			div.test_results["u.insertElement"] = true;
		}
		else {
			div.test_results["u.insertElement"] = false;
		}


		// wrap element
		node = u.appendElement(div, "div", {"class":"testfailed", "html":"u.wrapElement: error"});
		wrap_node = u.wrapElement(node, "div", {"class":"testpassed"});
		node = u.querySelector("div", wrap_node);
		node.className = "";
		if(node.parentNode == wrap_node && node.innerHTML == "u.wrapElement: error") {
			node.innerHTML = "u.wrapElement: correct";
			div.test_results["u.wrapElement"] = true;
		}
		else {
			div.test_results["u.wrapElement"] = false;
		}


		// wrap content
		node = u.appendElement(div, "div", {"class":"wc"});
		u.appendElement(node, "div", {"class":"testfailed", "html":"u.wrapContent: error"});
		wrap_node = u.wrapContent(node, "div", {"class":"testpassed"});
		if(wrap_node.parentNode == node && wrap_node.childNodes.length == 1) {
			wrap_node.innerHTML = "u.wrapContent: correct";
			node.className = "testpassed";
			div.test_results["u.wrapContent"] = true;
		}
		else {
			div.test_results["u.wrapContent"] = false;
		}


		// node.textContent
		var text = u.text(u.querySelector(".textcontent", div));
		if(text.trim() == "node.textContent") {
			u.appendElement(div, u.querySelector(".textcontent", div), {"class":"testpassed", "html":"u.text: correct"})
			div.test_results["u.text"] = true;
		}
		else {
			div.test_results["u.text"] = false;
		}


		// clickableElement
		node = u.querySelector(".ce", div);
		u.clickableElement(node);
		if(!u.querySelector("a", node).href && node.url == "http://index/") {
			node.innerHTML = "u.clickableElement: correct";
			u.addClass(node, "testpassed");
			div.test_results["u.clickableElement"] = true;
		}
		else {
			u.addClass(node, "testfailed");
			div.test_results["u.clickableElement"] = false;
		}


		// classVar
		if(u.classVar(u.querySelector("#qstest"), "type") == "cv") {
			u.appendElement(div, "div", {"class":"testpassed", "html":"u.classVar: correct"});
			div.test_results["u.classVar"] = true;
		}
		else {
			u.appendElement(div, "div", {"class":"testfailed", "html":"u.classVar: error"});
			div.test_results["u.classVar"] = false;
		}


		// setClass
		node = u.appendElement(div, "div", {"html":"u.setClass: error"});
		node.className = "before";
		svg = u.appendElement(div, "svg");

		var old_html_class = u.setClass(node, "test_headline");
		var old_svg_class = u.setClass(svg, "before");

		if(node.className == "test_headline" && (typeof(SVGElement) == "undefined" || svg.className.baseVal == "before")) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.setClass: correct"});
			div.test_results["u.setClass"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.setClass: error"});
			div.test_results["u.setClass"] = false;
		}


		// hasClass
		node = u.appendElement(div, "div", {"html":"u.hasClass: error"});
		node.className = "test_headline type1";
		svg.className.baseVal = "test_headline type1";

		if(
			(u.hasClass(svg, "test_headline") == true || typeof(SVGElement) == "undefined") && 
			(u.hasClass(svg, "headline") == false || typeof(SVGElement) == "undefined") && 
			(u.hasClass(svg, "type[0-1]") == true || typeof(SVGElement) == "undefined") && 
			(u.hasClass(svg, "type[2-9]") == false || typeof(SVGElement) == "undefined") && 

			u.hasClass(node, "headline") == false && 
			u.hasClass(node, "test|headline") == false && 
			u.hasClass(node, "test_headline|fisk") == true && 
			u.hasClass(node, "test_headline") == true && 
			u.hasClass(node, "test_headline2") == false && 
			u.hasClass(node, "2test_headline") == false && 
			u.hasClass(node, "test|type[0-1]") == true &&
			u.hasClass(node, "type[0-1]") == true &&
			u.hasClass(node, "type[2-9]") == false
		) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.hasClass: correct"});
			div.test_results["u.hasClass"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.hasClass: error"});
			div.test_results["u.hasClass"] = false;
		}


		// addClass
		node = u.appendElement(div, "div", {"html":"u.addClass: error"});
		node.className = "test_headline";
		u.addClass(node, "headline:example");
		u.addClass(node, "headline");
		u.addClass(node, "headline");

		u.addClass(svg, "test");
		u.addClass(svg, "test1");
		// u.addClass(svg, "hej");

		if(node.className == "test_headline headline:example headline" && (typeof(SVGElement) == "undefined" || svg.className.baseVal == "test_headline type1 test test1")) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.addClass: correct"});
			div.test_results["u.addClass"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.addClass: error"});
			div.test_results["u.addClass"] = false;
		}


		// removeClass
		node = u.appendElement(div, "div", {"html":"u.removeClass: error"});
		node.className = "test_headline test:1 test headline headline:example test:2 test:3 test1 bye farewell later headline my:test";
		u.removeClass(node, "headline");
		u.removeClass(node, "bye|test|farewell|later");
		u.removeClass(node, "test\:[0-2]+");

		u.removeClass(svg, "test[0-1]+");
		u.removeClass(svg, "type[2-9]");

		if(node.className == "test_headline headline:example test:3 test1 my:test" && (typeof(SVGElement) == "undefined" || svg.className.baseVal == "test_headline type1 test")) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.removeClass: correct"});
			div.test_results["u.removeClass"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.removeClass: error"});
			div.test_results["u.removeClass"] = false;
		}


		// toggleClass
		node = u.appendElement(div, "div", {"html":"u.toggleClass: error"});
		node.className = "test_headline";
		svg.className.baseVal = "test_headline";

		u.toggleClass(node, "test_headline", old_html_class);
		u.toggleClass(svg, "test_headline", old_svg_class);
		if(node.className == old_html_class && (typeof(SVGElement) == "undefined" || svg.className.baseVal == old_svg_class)) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.toggleClass: correct"});
			div.test_results["u.toggleClass"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.toggleClass: error"});
			div.test_results["u.toggleClass"] = false;
		}

		// Clean up after svg test
		svg.parentNode.removeChild(svg);


		// applyStyle
		node = u.appendElement(div, "div", {"html":"u.applyStyle: error"});
		var org_display = node.style.display;
		node.style.display == "block";
		u.as(node, "display", "none");
		if(node.style.display == "none") {
			u.as(node, "display", org_display);
			u.appendElement(div, node, {"class":"testpassed", "html":"u.applyStyle: correct"});
			div.test_results["u.applyStyle"] = true;
		}
		else {
			node.style.display = org_display;
			u.appendElement(div, node, {"class":"testfailed", "html":"u.applyStyle: error"});
			div.test_results["u.applyStyle"] = false;
		}


		// applyStyles
		node = u.appendElement(div, "div", {"html":"u.applyStyles: error"});
		var org_display = node.style.display;
		node.style.display == "block";
		u.ass(node, {"display":"inline", "width":"100px"});
		if(node.style.display == "inline" && node.style.width == "100px") {
			u.ass(node, {"display":"block", "width":"auto"});
			u.appendElement(div, node, {"class":"testpassed", "html":"u.applyStyles: correct"});
			div.test_results["u.applyStyles"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.applyStyles: error"});
			div.test_results["u.applyStyles"] = false;
		}


		// getComputedStyle
		var gcs_node = u.appendElement(div, "div");
		u.as(gcs_node, "backgroundColor", "#ff0000");
		u.as(gcs_node, "height", "1px");
		if(u.gcs(gcs_node, "background-color") == "#ff0000" || u.gcs(gcs_node, "background-color") == "rgb(255, 0, 0)" && u.gcs(gcs_node, "height") == "1px") {
			gcs_node.parentNode.removeChild(gcs_node);
			u.appendElement(div, "div", {"class":"testpassed", "html":"u.getComputedStyle: correct"});
			div.test_results["u.getComputedStyle"] = true;
		}
		else {
			gcs_node.parentNode.removeChild(gcs_node);
			u.appendElement(div, "div", {"class":"testfailed", "html":"u.getComputedStyle: error"});
			div.test_results["u.getComputedStyle"] = false;
		}


		// hasFixedParent
		var hfp_node = u.appendElement(div, "div");
		var hfp_child = u.appendElement(hfp_node, "div");
		u.as(hfp_node, "position", "fixed");
		if(u.hfp(hfp_child) && !u.hfp(hfp_node)) {
			hfp_node.parentNode.removeChild(hfp_node);
			u.appendElement(div, "div", {"class":"testpassed", "html":"u.hasFixedParent: correct"});
			div.test_results["u.hasFixedParent"] = true;
		}
		else {
			hfp_node.parentNode.removeChild(hfp_node);
			u.appendElement(div, "div", {"class":"testfailed", "html":"hasFixedParent: error"});
			div.test_results["u.hasFixedParent"] = false;
		}


		// contains
		node = u.appendElement(div, "div", {"html":"u.contains: error"});
		if(u.contains(node, div) && !u.contains(div, node)) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.contains: correct"});
			div.test_results["u.nw"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.contains: error"});
			div.test_results["u.nw"] = false;
		}


		// containsOrIs
		node = u.appendElement(div, "div", {"html":"u.containsOrIs: error"});
		if(u.containsOrIs(node, div) && !u.containsOrIs(div, node) && u.containsOrIs(div, div)) {
			u.appendElement(div, node, {"class":"testpassed", "html":"u.containsOrIs: correct"});
			div.test_results["u.nw"] = true;
		}
		else {
			u.appendElement(div, node, {"class":"testfailed", "html":"u.containsOrIs: error"});
			div.test_results["u.nw"] = false;
		}


		// inNodeList


	}

}