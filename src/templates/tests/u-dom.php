<style type="text/css">
	.scene > div {margin: 0 0 5px;}
	.error {background: red;}
	.correct {background: green; color: #ffffff;}
/*	div.wc div.correct {color: yellow;} */
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var node;

			// querySelector
			if(u.qs("#qstest > h3 span").innerHTML == "querySelector") {
				u.qs("#qstest").innerHTML = "querySelector: correct";
			}
			// querySelectorAll
			if(u.qsa("#content #qstest, #content .qsatest").length == 2) {
				u.qsa("#content #qstest, #content .qsatest")[1].innerHTML = "querySelectorAll: correct";
			}

			// ge + ges
			// getElement
			if(u.ge("type:1").innerHTML == "getElement") {
				u.ge("type:1").innerHTML = "getElement: correct";
				u.ge("type:1", scene).parentNode.className = "correct";
				u.ac(u.ge("type:1", scene), "correct");
			}
			// getElements
			if(u.ges("type\:[1-2]", scene).length == 2) {
				u.ges("type\:[1-2]")[1].innerHTML = "getElements: correct";
			}

			// parent node
			pn_span = u.qs(".parentnode ul li span", scene);
			// u.bug("li" == u.nodeId(u.pn(pn_span)).toLowerCase())
			// u.bug(u.pn(pn_span, {"include":"div"}).className == "parentnode correct");
			if(
				"li" == u.nodeId(u.pn(pn_span)).toLowerCase() &&
				"ul.u2" == u.nodeId(u.pn(pn_span, {"exclude":"li"})).toLowerCase() &&
				"ul.u1" == u.nodeId(u.pn(pn_span, {"include":"ul.u1"})).toLowerCase() &&
				u.pn(pn_span, {"include":"div"}).className == "parentnode correct"
				
			) {
				u.pn(u.qs(".parentnode ul li span", scene), {"include":"div"}).innerHTML = "u.parentNode: correct";
			}



			// ns + ps
			// nextSibling
			ns_li = u.qs("div.ns .start", scene);
			ns_div = u.qs("div.ns div.c1", scene);
			// u.bug("li.nons" + u.nodeId(u.ns(ns_li)).toLowerCase());
			// u.bug("li.jens" + u.nodeId(u.ns(ns_li, {"exclude":".nons"})).toLowerCase());
			// u.bug("li.end" + u.nodeId(u.ns(ns_li, {"exclude":".nons","include":".end"})).toLowerCase());
			// u.bug("span.c1" + u.nodeId(u.ns(ns_div)).toLowerCase());
			// u.bug("span.c2" + u.nodeId(u.ns(ns_div, {"include":".c2"})).toLowerCase());
			// u.bug("div.c2" + u.nodeId(u.ns(ns_div, {"exclude":"span"})).toLowerCase());
			// u.bug("span.c2" + u.nodeId(u.ns(ns_div, {"include":"span.c2"})).toLowerCase());
			if(
				"li.nons" == u.nodeId(u.ns(ns_li)).toLowerCase() &&
				"li.jens" == u.nodeId(u.ns(ns_li, {"exclude":".nons"})).toLowerCase() &&
				"li.end" == u.nodeId(u.ns(ns_li, {"exclude":".nons","include":".end"})).toLowerCase() &&
				"span.c1" == u.nodeId(u.ns(ns_div)).toLowerCase() &&
				"span.c2" == u.nodeId(u.ns(ns_div, {"include":".c2"})).toLowerCase() &&
				"div.c2" == u.nodeId(u.ns(ns_div, {"exclude":"span"})).toLowerCase() &&
				"span.c2" == u.nodeId(u.ns(ns_div, {"include":"span.c2"})).toLowerCase()			
			
			) {
				u.qs("div.ns").innerHTML = "nextSibling: correct";
			}


			// previousSibling
			ps_li = u.qs("div.ps .start", scene);
			ps_div = u.qs("div.ps div.c2", scene);
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
				u.qs("div.ps").innerHTML = "previousSibling: correct";
			}


			// childNodes
			cn_node = u.qs("div.cn", scene);
			// u.bug(u.cn(cn_node, {"include":"span"}).length);
			// u.bug(u.cn(cn_node, {"include":".c1"}).length);
			// u.bug(u.cn(cn_node, {"include":"div.c1"}).length);
			// u.bug(u.cn(cn_node, {"exclude":"span"}).length);
			// u.bug(u.cn(cn_node, {"exclude":"span.c1"}).length);
			if(
				u.cn(cn_node, {"include":"span"}).length == 3 &&
				u.cn(cn_node, {"include":".c1"}).length == 2 &&
				u.cn(cn_node, {"include":"div.c1"}).length == 1 &&
				u.cn(cn_node, {"exclude":"span"}).length == 4 &&
				u.cn(cn_node, {"exclude":"span.c1"}).length == 6
				
			) {

				u.qs("div.cn").innerHTML = "childNodes: correct";

			}



			// appendElement
			u.ae(scene, "div", {"class":"correct", "html":"append element: correct"});

			// insertElement
			node = u.ie(scene, "div", {"class":"error", "html":"insert element"});
			if(node == u.qs("div", scene)) {
				u.ae(scene, node, {"class":"correct"});
			}

			// wrap element
			node = u.ae(scene, "div", {"class":"error", "html":"wrapElement error"});
			u.we(node, "div", {"class":"correct"}).innerHTML = "wrapElement: correct";


			// wrap content
			node = u.ae(scene, "div", {"class":"wc correct"});
			u.ae(node, "div", {"class":"error", "html":"wrapContent error"});
			u.wc(node, "div", {"class":"correct"}).innerHTML = "wrapContent: correct";


			// node.textContent
			var text = u.text(u.qs(".textcontent", scene));
			if(text.trim() == "node.textContent") {
				u.ae(scene, u.qs(".textcontent", scene), {"class":"correct", "html":"textContent correct"})
			}


			// clickableElement
			node = u.qs(".ce", scene);
			u.ce(node);
			if(!u.qs("a", node).href && node.url == "http://index/") {
				node.innerHTML = "clickableElement: correct";
			}


			// classVar
			if(u.cv(u.qs("#qstest"), "type") == "cv") {
				u.ae(scene, "div", {"class":"correct", "html":"classVar: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"classVar: error"});
			}


			// u.sc, u.ac, u.rc, u.tc, u.hc
			// setClass
			u.qs("h1", scene).className = "before";
			var old_class = u.setClass(u.qs("h1", scene), "test_headline");
			if(u.qs("h1", scene).className == "test_headline") {
				u.ae(scene, "div", {"class":"correct", "html":"setClass: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"setClass: error"});
			}

			// hasClass
			u.qs("h1", scene).className = "test_headline type1";
			if(
				u.hc(u.qs("h1", scene), "headline") == false && 
				u.hc(u.qs("h1", scene), "test|headline") == false && 
				u.hc(u.qs("h1", scene), "test_headline|fisk") == true && 
				u.hc(u.qs("h1", scene), "test_headline") == true && 
				u.hc(u.qs("h1", scene), "test_headline2") == false && 
				u.hc(u.qs("h1", scene), "2test_headline") == false && 
				u.hc(u.qs("h1", scene), "type[0-1]") == true
				) {
				u.ae(scene, "div", {"class":"correct", "html":"hasClass: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"hasClass: error"});
			}

			// addClass
			u.qs("h1", scene).className = "test_headline";
			u.addClass(u.qs("h1", scene), "headline:example");
			u.addClass(u.qs("h1", scene), "headline");
			u.addClass(u.qs("h1", scene), "headline");
			if(u.qs("h1", scene).className == "test_headline headline:example headline") {
				u.ae(scene, "div", {"class":"correct", "html":"addedClass: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"addedClass: error"});
			}

			// removeClass
			u.qs("h1", scene).className = "test_headline test:1 headline headline:example test:2 test:3 bye farewell later headline";
			u.removeClass(u.qs("h1", scene), "headline");
			u.removeClass(u.qs("h1", scene), "bye|farewell|later");
			u.removeClass(u.qs("h1", scene), "test\:[0-2]+");
			if(u.qs("h1", scene).className == "test_headline headline:example test:3") {
				u.ae(scene, "div", {"class":"correct", "html":"removeClass: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"removeClass: error"});
			}

			// toggleClass
			u.qs("h1", scene).className = "test_headline";
			u.toggleClass(u.qs("h1", scene), "test_headline", old_class);
			if(u.qs("h1", scene).className == old_class) {
				u.ae(scene, "div", {"class":"correct", "html":"toggleClass: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"toggleClass: error"});
			}



			//as, ass & gcs
			// applyStyle
			var org_display = u.qs("h1", scene).style.display;
			u.qs("h1", scene).style.display == "block";
			u.as(u.qs("h1", scene), "display", "none");
			if(u.qs("h1", scene).style.display == "none") {
				u.as(u.qs("h1", scene), "display", org_display);
				u.ae(scene, "div", {"class":"correct", "html":"addStyle: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"addStyle: error"});
			}


			var org_display = u.qs("h1", scene).style.display;
			u.qs("h1", scene).style.display == "block";
			u.ass(u.qs("h1", scene), {"display":"inline", "width":"100px"});
			if(u.qs("h1", scene).style.display == "inline" && u.qs("h1", scene).style.width == "100px") {
				u.ass(u.qs("h1", scene), {"display":"block", "width":"auto"});
				u.ae(scene, "div", {"class":"correct", "html":"addStyles: correct"});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":"addStyles: error"});
			}



			// getComputedStyle
			var gcs_node = u.ae(scene, "div");
			u.as(gcs_node, "backgroundColor", "#ff0000");
			u.as(gcs_node, "height", "1px");
			if(u.gcs(gcs_node, "background-color") == "#ff0000" || u.gcs(gcs_node, "background-color") == "rgb(255, 0, 0)" && u.gcs(gcs_node, "height") == "1px") {
				gcs_node.parentNode.removeChild(gcs_node);
				u.ae(scene, "div", {"class":"correct", "html":"getComputedStyle: correct"});
			}
			else {
				gcs_node.parentNode.removeChild(gcs_node);
				u.ae(scene, "div", {"class":"error", "html":"getComputedStyle: error"});
			}


			// hasFixedParent
			var hfp_node = u.ae(scene, "div");
			var hfp_child = u.ae(hfp_node, "div");
			u.as(hfp_node, "position", "fixed");
			if(u.hfp(hfp_child) && !u.hfp(hfp_node)) {
				hfp_node.parentNode.removeChild(hfp_node);
				u.ae(scene, "div", {"class":"correct", "html":"hasFixedParent: correct"});
			}
			else {
				hfp_node.parentNode.removeChild(hfp_node);
				u.ae(scene, "div", {"class":"error", "html":"hasFixedParent: error"});
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>DOM</h1>

	<div id="qstest" class="correct type:cv othertype:notcv"><h3 class="error"><span>querySelector</span> error</h3></div>
	<div class="qsatest correct"><span class="error">querySelectorAll</span></div>
	<div class="error"><div class="type:1">getElement</div></div>
	<div class="type:2 correct"><span class="error">getElements</span></div>
	<div class="parentnode correct"><ul class="u1"><li><ul class="u2"><li><span class="error">parentNode</span></li></ul></li></ul></div>

	<div class="ns correct">
		<ul>
			<li class="start"><span class="error">nextSibling</span></li>
			<li class="nons"></li>
			<li class="jens"></li>
			<li class="end"></li>
		</ul>
		<div class="c1"></div>
		<span class="c1"></span>
		<span class="c2"></span>
		<div class="c2"></div>
	</div>
	<div class="ps correct">
		<ul>
			<li class="end"><span class="error">previousSibling</span></li>
			<li class="jeps"></li>
			<li class="nops"></li>
			<li class="start"></li>
		</ul>
		<div class="c1"></div>
		<span class="c1"></span>
		<span class="c2"></span>
		<div class="c2"></div>
	</div>

	<div class="cn correct">
		<div class="error">childNodes</div>
		<a class="error"><span>childNodes</span></a>
		<span class="error">childNodes</span>
		<div class="c1"></div>
		<span class="c1"></span>
		<span class="c2"></span>
		<div class="c2"></div>
	</div>
	<div class="textcontent">
		<!-- COMMENT -->
		<span class="error">node.textContent</span>
	</div>
	<div class="ce correct">
		<a href="http://index/" class="error">Index</a>
	</div>
</div>

<div class="comments">
	<p>u.gcs: Firefox+webkit will return the computed value in px, regardless of how it is specified.</p>
	<p>u.gcs: Firefox+webkit will return bg-color as rgb(), regardless of how it is specified.</p>
</div>
