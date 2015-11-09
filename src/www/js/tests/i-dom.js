Util.Objects["dom"] = new function() {
	this.init = function(div) {

		div.test_results = {};

		var node, nodes, wrap_node;


		// querySelector
		if(u.qs("#qstest > h3 span").innerHTML == "querySelector") {
			u.ac(u.qs("#qstest"), "testpassed");
			u.qs("#qstest").innerHTML = "u.qs: correct";
			div.test_results["u.qs"] = true;
		}
		else {
			u.ac(u.qs("#qstest"), "testpassed");
			div.test_results["u.qs"] = false;
		}


		// querySelectorAll
		if(u.qsa("#content #qstest, #content .qsatest").length == 2) {
			u.ac(u.qsa("#content #qstest, #content .qsatest")[1], "testpassed");
			u.qsa("#content #qstest, #content .qsatest")[1].innerHTML = "u.qsa: correct";
			div.test_results["u.qsa"] = true;
		}
		else {
			u.ac(u.qs(".qsatest"), "testfailed");
			div.test_results["u.qsa"] = false;
		}


		// getElement
		if(u.ge("type:1", div).innerHTML == "getElement") {
			u.ge("type:1", div).parentNode.className = "testpassed";
			u.ge("type:1", div).parentNode.innerHTML = "u.ge: correct";
			div.test_results["u.ge"] = true;
		}
		else {
			u.ac(u.qs(".getest"), "testfailed");
			div.test_results["u.ge"] = false;
		}


		// getElements
		nodes = u.ges("type\:[3-4]", div)
		if(nodes.length == 2) {
			nodes[0].className = "testpassed";
			nodes[0].innerHTML = "u.ges: correct";
			div.test_results["u.ges"] = true;
		}
		else {
			u.ac(u.qs(".gestest"), "testfailed");
			div.test_results["u.ges"] = false;
		}


		// parent node
		var pn_span = u.qs(".parentnode ul li span", div);
		if(
			"li" == u.nodeId(u.pn(pn_span)).toLowerCase() &&
			"ul.u2" == u.nodeId(u.pn(pn_span, {"exclude":"li"})).toLowerCase() &&
			"ul.u1" == u.nodeId(u.pn(pn_span, {"include":"ul.u1"})).toLowerCase() &&
			u.pn(pn_span, {"include":"div"}).className == "parentnode"
			
		) {
			u.pn(u.qs(".parentnode ul li span", div), {"include":"div"}).innerHTML = "u.pn: correct";
			u.ac(u.qs("div.parentnode"), "testpassed");
			div.test_results["u.pn"] = true;
		}
		else {
			u.ac(u.qs("div.parentnode"), "testfailed");
			div.test_results["u.pn"] = false;
		}


		// ns + ps
		// nextSibling
		var ns_li = u.qs("div.ns .start", div);
		var ns_div = u.qs("div.ns div.c1", div);
		if(
			"li.nons" == u.nodeId(u.ns(ns_li)).toLowerCase() &&
			"li.jens" == u.nodeId(u.ns(ns_li, {"exclude":".nons"})).toLowerCase() &&
			"li.end" == u.nodeId(u.ns(ns_li, {"exclude":".nons","include":".end"})).toLowerCase() &&
			"span.c1" == u.nodeId(u.ns(ns_div)).toLowerCase() &&
			"span.c2" == u.nodeId(u.ns(ns_div, {"include":".c2"})).toLowerCase() &&
			"div.c2" == u.nodeId(u.ns(ns_div, {"exclude":"span"})).toLowerCase() &&
			"span.c2" == u.nodeId(u.ns(ns_div, {"include":"span.c2"})).toLowerCase()
		) {
			u.ac(u.qs("div.ns"), "testpassed");
			u.qs("div.ns").innerHTML = "u.ns: correct";
			div.test_results["u.ns"] = true;
		}
		else {
			u.ac(u.qs("div.ns"), "testfailed");
			div.test_results["u.ns"] = false;
		}


		// previousSibling
		var ps_li = u.qs("div.ps .start", div);
		var ps_div = u.qs("div.ps div.c2", div);
		if(
			"li.nops" == u.nodeId(u.ps(ps_li)).toLowerCase() &&
			"li.jeps" == u.nodeId(u.ps(ps_li, {"exclude":".nops"})).toLowerCase() &&
			"li.end" == u.nodeId(u.ps(ps_li, {"exclude":".nops","include":".end"})).toLowerCase() &&
			"span.c2" == u.nodeId(u.ps(ps_div)).toLowerCase() &&
			"span.c1" == u.nodeId(u.ps(ps_div, {"include":".c1"})).toLowerCase() &&
			"div.c1" == u.nodeId(u.ps(ps_div, {"exclude":"span"})).toLowerCase() &&
			"ul" == u.nodeId(u.ps(ps_div, {"exclude":"span,div"})).toLowerCase() &&
			"span.c1" == u.nodeId(u.ps(ps_div, {"include":"span.c1"})).toLowerCase()
		) {
			u.qs("div.ps").innerHTML = "u.ps: correct";
			u.ac(u.qs("div.ps"), "testpassed");
			div.test_results["u.ps"] = true;
		}
		else {
			u.ac(u.qs("div.ps"), "testfailed");
			div.test_results["u.ps"] = false;
		}


		// childNodes
		node = u.qs("div.cn", div);
		if(
			u.cn(node, {"include":"span"}).length == 3 &&
			u.cn(node, {"include":".c1"}).length == 2 &&
			u.cn(node, {"include":"div.c1"}).length == 1 &&
			u.cn(node, {"exclude":"span"}).length == 4 &&
			u.cn(node, {"exclude":"span.c1"}).length == 6
		) {
			u.qs("div.cn").innerHTML = "u.cn: correct";
			u.ac(u.qs("div.cn"), "testpassed");
			div.test_results["u.cn"] = true;
		}
		else {
			u.ac(u.qs("div.cn"), "testfailed");
			div.test_results["u.cn"] = false;
		}


		// appendElement
		node = u.ae(div, "div", {"class":"testpassed", "html":"u.ae: "});
		if(node == u.qsa("div", div)[u.qsa("div", div).length-1]) {
			node.innerHTML += "correct";
			div.test_results["u.ae"] = true;
		}
		else {
			node.className = "error";
			div.test_results["u.ae"] = false;
		}


		// insertElement
		node = u.ie(div, "div", {"class":"testfailed", "html":"u.ie: "});
		if(node == u.qs("div", div)) {
			u.ae(div, node, {"class":"testpassed"});
			node.innerHTML += "correct";
			div.test_results["u.ie"] = true;
		}
		else {
			div.test_results["u.ie"] = false;
		}


		// wrap element
		node = u.ae(div, "div", {"class":"testfailed", "html":"u.we: error"});
		wrap_node = u.we(node, "div", {"class":"testpassed"});
		node = u.qs("div", wrap_node);
		node.className = "";
		if(node.parentNode == wrap_node && node.innerHTML == "u.we: error") {
			node.innerHTML = "u.we: correct";
			div.test_results["u.we"] = true;
		}
		else {
			div.test_results["u.we"] = false;
		}


		// wrap content
		node = u.ae(div, "div", {"class":"wc"});
		u.ae(node, "div", {"class":"testfailed", "html":"u.wc: error"});
		wrap_node = u.wc(node, "div", {"class":"testpassed"});
		if(wrap_node.parentNode == node && wrap_node.childNodes.length == 1) {
			wrap_node.innerHTML = "u.wc: correct";
			node.className = "testpassed";
			div.test_results["u.wc"] = true;
		}
		else {
			div.test_results["u.wc"] = false;
		}


		// node.textContent
		var text = u.text(u.qs(".textcontent", div));
		if(text.trim() == "node.textContent") {
			u.ae(div, u.qs(".textcontent", div), {"class":"testpassed", "html":"u.text: correct"})
			div.test_results["u.text"] = true;
		}
		else {
			div.test_results["u.text"] = false;
		}


		// clickableElement
		node = u.qs(".ce", div);
		u.ce(node);
		if(!u.qs("a", node).href && node.url == "http://index/") {
			node.innerHTML = "u.ce: correct";
			u.ac(node, "testpassed");
			div.test_results["u.ce"] = true;
		}
		else {
			u.ac(node, "testfailed");
			div.test_results["u.ce"] = false;
		}


		// classVar
		if(u.cv(u.qs("#qstest"), "type") == "cv") {
			u.ae(div, "div", {"class":"testpassed", "html":"u.cv: correct"});
			div.test_results["u.cv"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.cv: error"});
			div.test_results["u.cv"] = false;
		}


		// setClass
		node = u.ae(div, "div", {"html":"u.sc: error"});
		node.className = "before";
		var old_class = u.setClass(node, "test_headline");
		if(node.className == "test_headline") {
			u.ae(div, node, {"class":"testpassed", "html":"u.sc: correct"});
			div.test_results["u.sc"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.sc: error"});
			div.test_results["u.sc"] = false;
		}


		// hasClass
		node = u.ae(div, "div", {"html":"u.hc: error"});
		node.className = "test_headline type1";
		if(
			u.hc(node, "headline") == false && 
			u.hc(node, "test|headline") == false && 
			u.hc(node, "test_headline|fisk") == true && 
			u.hc(node, "test_headline") == true && 
			u.hc(node, "test_headline2") == false && 
			u.hc(node, "2test_headline") == false && 
			u.hc(node, "type[0-1]") == true
		) {
			u.ae(div, node, {"class":"testpassed", "html":"u.hc: correct"});
			div.test_results["u.hc"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.hc: error"});
			div.test_results["u.hc"] = false;
		}


		// addClass
		node = u.ae(div, "div", {"html":"u.ac: error"});
		node.className = "test_headline";
		u.addClass(node, "headline:example");
		u.addClass(node, "headline");
		u.addClass(node, "headline");
		if(node.className == "test_headline headline:example headline") {
			u.ae(div, node, {"class":"testpassed", "html":"u.ac: correct"});
			div.test_results["u.ac"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.ac: error"});
			div.test_results["u.ac"] = false;
		}


		// removeClass
		node = u.ae(div, "div", {"html":"u.rc: error"});
		node.className = "test_headline test:1 headline headline:example test:2 test:3 bye farewell later headline";
		u.removeClass(node, "headline");
		u.removeClass(node, "bye|farewell|later");
		u.removeClass(node, "test\:[0-2]+");
		if(node.className == "test_headline headline:example test:3") {
			u.ae(div, node, {"class":"testpassed", "html":"u.rc: correct"});
			div.test_results["u.rc"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.rc: error"});
			div.test_results["u.rc"] = false;
		}


		// toggleClass
		node = u.ae(div, "div", {"html":"u.tc: error"});
		node.className = "test_headline";
		u.toggleClass(node, "test_headline", old_class);
		if(node.className == old_class) {
			u.ae(div, node, {"class":"testpassed", "html":"u.tc: correct"});
			div.test_results["u.tc"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.tc: error"});
			div.test_results["u.tc"] = false;
		}


		// applyStyle
		node = u.ae(div, "div", {"html":"u.as: error"});
		var org_display = node.style.display;
		node.style.display == "block";
		u.as(node, "display", "none");
		if(node.style.display == "none") {
			u.as(node, "display", org_display);
			u.ae(div, node, {"class":"testpassed", "html":"u.as: correct"});
			div.test_results["u.ass"] = true;
		}
		else {
			node.style.display = org_display;
			u.ae(div, node, {"class":"testfailed", "html":"u.as: error"});
			div.test_results["u.as"] = false;
		}


		// applyStyles
		node = u.ae(div, "div", {"html":"u.ass: error"});
		var org_display = node.style.display;
		node.style.display == "block";
		u.ass(node, {"display":"inline", "width":"100px"});
		if(node.style.display == "inline" && node.style.width == "100px") {
			u.ass(node, {"display":"block", "width":"auto"});
			u.ae(div, node, {"class":"testpassed", "html":"u.ass: correct"});
			div.test_results["u.ass"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"u.ass: error"});
			div.test_results["u.ass"] = false;
		}


		// getComputedStyle
		var gcs_node = u.ae(div, "div");
		u.as(gcs_node, "backgroundColor", "#ff0000");
		u.as(gcs_node, "height", "1px");
		if(u.gcs(gcs_node, "background-color") == "#ff0000" || u.gcs(gcs_node, "background-color") == "rgb(255, 0, 0)" && u.gcs(gcs_node, "height") == "1px") {
			gcs_node.parentNode.removeChild(gcs_node);
			u.ae(div, "div", {"class":"testpassed", "html":"u.gcs: correct"});
			div.test_results["u.gcs"] = true;
		}
		else {
			gcs_node.parentNode.removeChild(gcs_node);
			u.ae(div, "div", {"class":"testfailed", "html":"u.gcs: error"});
			div.test_results["u.gcs"] = false;
		}


		// hasFixedParent
		var hfp_node = u.ae(div, "div");
		var hfp_child = u.ae(hfp_node, "div");
		u.as(hfp_node, "position", "fixed");
		if(u.hfp(hfp_child) && !u.hfp(hfp_node)) {
			hfp_node.parentNode.removeChild(hfp_node);
			u.ae(div, "div", {"class":"testpassed", "html":"u.hasFixedParent: correct"});
			div.test_results["u.hasFixedParent"] = true;
		}
		else {
			hfp_node.parentNode.removeChild(hfp_node);
			u.ae(div, "div", {"class":"testfailed", "html":"hasFixedParent: error"});
			div.test_results["u.hasFixedParent"] = false;
		}


		// nodeWithin
		node = u.ae(div, "div", {"html":"u.nodeWithin: error"});
		if(u.nodeWithin(node, div) && !u.nodeWithin(div, node)) {
			u.ae(div, node, {"class":"testpassed", "html":"u.nodeWithin: correct"});
			div.test_results["u.nodeWithin"] = true;
		}
		else {
			u.ae(div, node, {"class":"testfailed", "html":"nodeWithin: error"});
			div.test_results["u.nodeWithin"] = false;
		}

		page.resized();

		// inNodeList


	}

}