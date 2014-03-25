<style type="text/css">
	.scene {position: relative;}
	.toc {font-size: 0;}

	.toc li {display: inline-block; vertical-align: top; padding: 10px 20px;}

	#content .scrollable {padding: 0; margin: 0;}
	.scrollable > li {height: 400px; position: relative; display: block;}

	.scrollable > li#item1 {background: red;}
	.scrollable > li#item2 {background: blue;}
	.scrollable > li#item3 {background: green;}
	.scrollable > li#item4 {background: yellow;}

	.scrollable > li .toc {position: absolute; top: 0; right: 0;}


</style>



<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			// window._scrollHandler = function() {
			// 	u.bug("scroll")
			// }
			// u.e.click(window);
			// window.clicked = function() {
			// 	if(window.scroll_on) {
			// 		window.scroll_on = false;
			// 		u.e.removeEvent(window, "scroll", window._scrollHandler);
			// 	}
			// 	else {
			// 		window.scroll_on = true;
			// 		u.e.addEvent(window, "scroll", window._scrollHandler);
			// 	}
			// }





			var i, node;

			var main_toc_nodes = u.qsa(".scene > .toc li");
			for(i = 0; node = main_toc_nodes[i]; i++) {
//				u.bug("node:" + node)
				u.ce(node);
				node.clicked = function(event) {
					var id = this.url.split("#")[1];
					var to = u.qs("#"+id);

//					u.bug(u.nodeId(to));
					u.scrollTo(to, {"offset_y":100});
				}

//				u.a.setHeight(node, u.browserH());
			}


			var sub_toc_nodes = u.qsa(".scrollable .toc li");
			for(i = 0; node = sub_toc_nodes[i]; i++) {
//				u.bug("node:" + node)
				u.ce(node);
				node.clicked = function(event) {
					var id = this.url.split("#")[1];
					var to = u.qs("#"+id);

//					u.bug(u.nodeId(to));
					u.scrollTo(to, {"offset_y":100});
				}

//				u.a.setHeight(node, u.browserH());
			}
		}
	}
</script>

<div class="scene i:test">
	<h1>ScrollTo</h1>

	<ul class="toc">
		<li class="item1"><a href="#item1">To item1</a></li>
		<li class="item2"><a href="#item2">To item2</a></li>
		<li class="item3"><a href="#item3">To item3</a></li>
		<li class="item4"><a href="#item4">To item4</a></li>
	</ul>

	<ul class="scrollable">
		<li id="item1">
			<h2>Item 1</h2>

			<ul class="toc">
				<li class="item1"><a href="#item1">To item1</a></li>
				<li class="item2"><a href="#item2">To item2</a></li>
				<li class="item3"><a href="#item3">To item3</a></li>
				<li class="item4"><a href="#item4">To item4</a></li>
			</ul>
		</li>
		<li id="item2">
			<h2>Item 2</h2>

			<ul class="toc">
				<li class="item1"><a href="#item1">To item1</a></li>
				<li class="item2"><a href="#item2">To item2</a></li>
				<li class="item3"><a href="#item3">To item3</a></li>
				<li class="item4"><a href="#item4">To item4</a></li>
			</ul>
		</li>
		<li id="item3">
			<h2>Item 3</h2>

			<ul class="toc">
				<li class="item1"><a href="#item1">To item1</a></li>
				<li class="item2"><a href="#item2">To item2</a></li>
				<li class="item3"><a href="#item3">To item3</a></li>
				<li class="item4"><a href="#item4">To item4</a></li>
			</ul>
		</li>
		<li id="item4">
			<h2>Item 4</h2>

			<ul class="toc">
				<li class="item1"><a href="#item1">To item1</a></li>
				<li class="item2"><a href="#item2">To item2</a></li>
				<li class="item3"><a href="#item3">To item3</a></li>
				<li class="item4"><a href="#item4">To item4</a></li>
			</ul>
		</li>
	</ul>

</div>
<div class="comments">
	
	
</div>
