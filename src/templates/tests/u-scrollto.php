<style type="text/css">
	body {overflow: auto;}

	.scene {position: relative;}
	.toc {font-size: 0;}
	.toc li {display: inline-block; vertical-align: top; padding: 10px 20px; margin-right: 10px; border-radius: 10px; border: 1px solid black;}

	#content .scene .coords {z-index: 10; position: fixed; top: 100px; right: 50px; background-color: rgba(255, 0, 255, 0.8); padding-top: 15px;}

	#content .scene .scrollable {padding: 0; margin: 0;}
	#content .scene .scrollable > li {height: 400px; position: relative; display: block;}

	#content .scrollable > li#item1 {background: red;}
	#content .scrollable > li#item2 {background: blue; margin-left: 400px; width: 100%;}
	#content .scrollable > li#item3 {background: green;}
	#content .scrollable > li#item4 {background: black;}

	#content .scrollable > li .toc {position: absolute; top: 15px; right: 0;}
	#content .scrollable > li .toc li a {color: #ffffff;}

</style>



<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var i, node;

			var main_toc_nodes = u.qsa(".scene > .toc li");
			for(i = 0; node = main_toc_nodes[i]; i++) {
				u.ce(node);
				node.clicked = function(event) {
					var id = this.url.split("#")[1];
					var to = u.qs("#"+id);

					u.scrollTo({"node":to, "offset_y":100});
				}
			}


			var coord_nodes = u.qsa(".scene > .coords li");
			for(i = 0; node = coord_nodes[i]; i++) {
				u.ce(node);
				node.clicked = function(event) {

					if(u.hc(this, "top")) {
						u.scrollTo({"x":0, "y": 0});
					}
					else if(u.hc(this, "middle")) {
						u.scrollTo({"x":u.htmlW()/2 - u.browserW()/2, "y": u.htmlH()/2 - u.browserH()/2});
					}
					else if(u.hc(this, "bottom")) {
						u.scrollTo({"x":u.htmlW(), "y": u.htmlH()});
					}

				}
			}


			var sub_toc_nodes = u.qsa(".scrollable .toc li");
			for(i = 0; node = sub_toc_nodes[i]; i++) {
				u.ce(node);
				node.clicked = function(event) {
					var id = this.url.split("#")[1];
					var to = u.qs("#"+id);

					u.scrollTo({"node":to, "offset_y":100});
				}
			}
		}
	}

</script>

<div class="scene i:test">
	<h1>ScrollTo</h1>
	<p>
		Scroll to item 1-4, from different locations. 
		item 1-4 has an offset_y: 100px. Scrolling to result in top aligning with purple box 
		(except item 4, where page is not big enough).
	</p>
	<p>Scroll to top, middle and bottom.</p>

	<ul class="coords">
		<li class="top"><a href="#header">To top/left</a></li>
		<li class="middle"><a href="#content">To middle</a></li>
		<li class="bottom"><a href="#footer">To bottom right</a></li>
	</ul>


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
