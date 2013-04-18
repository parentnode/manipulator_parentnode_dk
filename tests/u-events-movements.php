<? $page_title = "Events, movements tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">

	div.drag {position: relative;}
	ul.info {padding: 0; margin: 20px 0;}
	ul.info li {padding: 3px;}


	/* FIXED */
	div.fixed {width: 50px; height: 200px; position: fixed; z-index: 5000; background: yellow; top: 100px; left: 50%; margin-left: 400px;}
	div.fixed div.handle {width: 50px; height: 50px; background: green;}


	/* MIXED */
	div.level1 {width: 720px; height: 500px; position: relative; background: red;}
	div.level2 {width: 400px; height: 400px; position: absolute; left: 60px; top: 50px; padding: 0px 100px; background: green;}
	div.level3 {width: 50px; height: 50px; padding: 175px 175px; background: blue; position: relative;}
	div.level4 {width: 50px; height: 50px; background: yellow;}

	ul.info li.level1 {background: red; color: white;}
	ul.info li.level2 {background: green; color: white;}
	ul.info li.level3 {background: blue; color: white;}
	ul.info li.level4 {background: yellow;}


	/* NESTED */
	#content div.nested_view {width: 200px; height: 200px; overflow: hidden;
		background: LawnGreen;
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	#content div.nested_view ul {width: 600px; height: 200px; margin: 0; padding: 0; list-style: none; font-size: 0;
		border-radius: 35px; overflow: hidden;
		background: Purple; 
	}
	#content div.nested_view ul li {width: 200px; height: 200px; display: inline-block; vertical-align: top; overflow: hidden;
		border-radius: 50px;
	}
	#content div.nested_view ul ul {height: 600px; width: 200px;}
	#content div.nested_view ul ul li {display: block; padding-top: 90px; height: 110px; text-align: center;
		border-radius: 100px;
	}
	#content div.nested_view ul ul.inner_a {
		background: Tomato;
	}
	#content div.nested_view ul ul.inner_a li {
		background: DeepSkyBlue;
	}
	#content div.nested_view ul ul.inner_b {
		background: PeachPuff;
	}
	#content div.nested_view ul ul.inner_b li {
		background: Brown;
	}
	#content div.nested_view ul ul.inner_c {
		background: DarkCyan;
	}
	#content div.nested_view ul ul.inner_c li {
		background: Aquamarine;
	}


	/* LINKS */
	div.links {position: relative; height: 50px; background: PapayaWhip;}

	div.link1 {width: 50px; height: 50px; background: pink; position: absolute; left: 0; top: 0;}
	div.link1 a {height: 50px; display: block; text-indent: -9999px;}
	div.link2 {width: 50px; height: 50px; background: orange; position: absolute; right: 0; top: 0;}
	div.link2 a {height: 50px; display: block;}

	ul.info li.links {background: PapayaWhip;}
	ul.info li.link1 {background: pink;}
	ul.info li.link2 {background: orange;}


	/* NODEBOUNDARIES */
	div.nodeboundaries {position: relative; height: 300px; background: Gainsboro;}
	div.drag_a1 {position: absolute; top: 0; left: 0; width: 50px; height: 50px; background: ForestGreen;}
	div.drag_a2 {position: absolute; top: 0; right: 0; width: 50px; height: 50px; background: LawnGreen;}
	div.drag_a3 {position: absolute; bottom: 0; right: 0; width: 50px; height: 50px; background: FireBrick;}
	div.drag_a4 {position: absolute; bottom: 0; left: 0; width: 50px; height: 50px; background: SkyBlue;}

	ul.info li.drag_a1 {background: ForestGreen; color: white;}
	ul.info li.drag_a2 {background: LawnGreen;}
	ul.info li.drag_a3 {background: FireBrick; color: white;}
	ul.info li.drag_a4 {background: SkyBlue;}


	/* ARRAYBOUNDARIES */
	div.arrayboundaries {position: relative; height: 300px; background: Bisque;}
	div.drag_b1 {position: absolute; top: 0; left: 0; width: 50px; height: 50px; background: DarkGoldenRod;}
	div.drag_b2 {position: absolute; top: 0; right: 0; width: 50px; height: 50px; background: Aqua;}
	div.drag_b3 {position: absolute; bottom: 0; right: 0; width: 50px; height: 50px; background: DarkSalmon;}
	div.drag_b4 {position: absolute; bottom: 0; left: 0; width: 50px; height: 50px; background: MidnightBlue;}

	ul.info li.drag_b1 {background: DarkGoldenRod; color: white;}
	ul.info li.drag_b2 {background: Aqua;}
	ul.info li.drag_b3 {background: DarkSalmon;}
	ul.info li.drag_b4 {background: MidnightBlue; color: white;}


	div.images {height: 300px;}

	/* SWIPE ON UL */
	ul.imagesul {width: 400px; height: 200px; position: relative; margin: 0 auto;}
	ul.imagesul li {position: absolute; top: 0; left: 0; width: 400px; height: 200px; border-radius: 15px; background-color: gray; border: 4px solid black; text-align: center;}

	/* SWIPE ON LI */
	ul.imagesli {width: 400px; height: 200px; position: relative; margin: 0 auto;}
	ul.imagesli li {position: absolute; top: 0; left: 0; width: 400px; height: 200px; border-radius: 15px; background-color: gray; border: 4px solid black; text-align: center;}

	/*.scene h2 {line-height: 1em;}*/
</style>
<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {
//			u.bug_position = "fixed";

			var drag = u.qs("div.drag", scene);

			// FIXED
			var fixed = u.qs("div.fixed", scene);
			var handle = u.qs("div.fixed .handle", scene);
			u.e.drag(handle, fixed);
			handle.picked = function(event) {
//				u.bug("handle picked")
			}
			handle.moved = function(event) {
				var progress = this._y / (fixed.offsetHeight - this.offsetHeight);
				var offset = Math.round((u.htmlH() - u.browserH()) * progress);
				window.scrollTo(0, offset);
			}
			handle.dropped = function(event) {
//				u.bug("handle dropped")
			}
			u.e.addEvent(window, "scroll", function() {
					u.a.translate(handle, 0, Math.round((fixed.offsetHeight - handle.offsetHeight) * (u.scrollY() / (u.htmlH() - u.browserH()))))
				}
			);


			// MIXED
			var level1 = u.qs("div.level1", scene);
			var level2 = u.qs("div.level2", scene);
			var level3 = u.qs("div.level3", scene);
			var level4 = u.qs("div.level4", scene);

			u.e.click(level1);
			level1.clicked = function(event) {
				u.bug("level1 clicked")
			}

			u.e.drag(level2, level1);
			level2.picked = function(event) {
//				u.bug("level 2 picked")
			}
			level2.moved = function(event) {
//				u.bug("level 2 moved")
			}
			level2.dropped = function(event) {
//				u.bug("level 2 dropped")
			}

			u.e.click(level2);
			level2.clicked = function(event) {
				u.bug("level2 clicked")
			}

			u.e.click(level3);
			level3.clicked = function(event) {
				u.bug("level3 clicked")
			}

			u.e.drag(level3, level2, {"strict":false});
			level3.picked = function(event) {
//				u.bug("level 3 picked")
			}
			level3.moved = function(event) {
//				u.bug("level 3 moved")
			}
			level3.dropped = function(event) {
//				u.bug("level 3 dropped")
			}

			u.e.click(level4);
			level4.clicked = function(event) {
				u.bug("level4 clicked")
			}

			u.e.drag(level4, level3, {"strict":false,"elastica":100});
			level4.picked = function(event) {
//				u.bug("level 4 picked")
			}
			level4.moved = function(event) {
//				u.bug("level 4 moved")
			}
			level4.dropped = function(event) {
//				u.bug("level 4 dropped")
			}

			// NESTED
			var nested_outer = u.qs("ul.outer", scene);
			var nested_inner_a = u.qs("ul.inner_a", scene);
			var nested_inner_b = u.qs("ul.inner_b", scene);
			var nested_inner_c = u.qs("ul.inner_c", scene);

			u.e.swipe(nested_outer, [-400, 0, 600, 200], {"strict":false, "elastica":100});

			nested_outer.nodes = u.cn(nested_outer);
			nested_outer.current_index = 0;
			nested_outer.picked = function(event) {
				u.e.resetEvents(nested_inner_a);
				u.e.resetEvents(nested_inner_b);
				u.e.resetEvents(nested_inner_c);
			}
			nested_outer.swipedLeft = function(event) {
				this.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
				}
				this.current_index = Math.abs(Math.floor(this._x/this.nodes[0].offsetWidth));
				var new_x = this.current_index * this.nodes[0].offsetWidth;
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, -(new_x), 0);
//				u.bug("nested_outer swipedLeft")
			}
			nested_outer.swipedRight = function(event) {
				this.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
				}
				this.current_index = Math.abs(Math.ceil(this._x/this.nodes[0].offsetWidth));
				var new_x = this.current_index * this.nodes[0].offsetWidth;
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, -(new_x), 0);
//				u.bug("nested_outer swipedRight")
			}

			u.e.swipe(nested_inner_a, [0, -400, 200, 600], {"strict":false, "elastica":100});
			nested_inner_a.nodes = u.cn(nested_inner_a);
			nested_inner_a.current_index = 0;

			u.e.swipe(nested_inner_b, [0, -400, 200, 600], {"strict":false, "elastica":100});
			nested_inner_b.nodes = u.cn(nested_inner_b);
			nested_inner_b.current_index = 0;

			u.e.swipe(nested_inner_c, [0, -400, 200, 600], {"strict":false, "elastica":100});
			nested_inner_c.nodes = u.cn(nested_inner_c);
			nested_inner_c.current_index = 0;


			nested_inner_a.swipedUp = nested_inner_b.swipedUp = nested_inner_c.swipedUp = function(event) {
				this.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
				}
				this.current_index = Math.abs(Math.floor(this._y/this.nodes[0].offsetHeight));
				var new_y = this.current_index * this.nodes[0].offsetHeight;
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, 0, -(new_y));
//				u.bug("imagesul swipedUp")
			}
			nested_inner_a.swipedDown = nested_inner_b.swipedDown = nested_inner_c.swipedDown = function(event) {
				this.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
				}
				this.current_index = Math.abs(Math.ceil(this._y/this.nodes[0].offsetHeight));
				var new_y = this.current_index * this.nodes[0].offsetHeight;
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, 0, -(new_y));
//				u.bug("imagesul swipedDown")
			}


			// LINKS
			var links = u.qs("div.links", scene);
			var link1 = u.qs("div.link1", scene);
			var link2 = u.qs("div.link2", scene);

			u.link(link1);
			link1.clicked = function(event) {
				u.bug("link1 clicked")
			}
			u.e.drag(link1, links);
			link1.picked = function(event) {
//				u.bug("link1 picked")
			}
			link1.moved = function(event) {
//				u.bug("link1 moved")
			}
			link1.dropped = function(event) {
//				u.bug("link1 dropped")
			}

			u.link(link2);
			link2.clicked = function(event) {
				u.bug("link2 clicked")
			}
			u.e.drag(link2, links);
			link2.picked = function(event) {
//				u.bug("link2 picked")
			}
			link2.moved = function(event) {
//				u.bug("link2 moved")
			}
			link2.dropped = function(event) {
//				u.bug("link2 dropped")
			}


			// NODE BOUNDARIES
			var nodeboundaries = u.qs("div.nodeboundaries", scene);
			var drag_a1 = u.qs("div.drag_a1", scene);
			var drag_a2 = u.qs("div.drag_a2", scene);
			var drag_a3 = u.qs("div.drag_a3", scene);
			var drag_a4 = u.qs("div.drag_a4", scene);

			u.e.drag(drag_a1, nodeboundaries, {"strict":false});
			drag_a1.picked = function(event) {
//				u.bug("drag_a1 picked")
			}
			drag_a1.moved = function(event) {
//				u.bug("drag_a1 moved")
			}
			drag_a1.dropped = function(event) {
//				u.bug("drag_a1 dropped")
			}

			u.e.drag(drag_a2, nodeboundaries, {"strict":false});
			drag_a2.picked = function(event) {
//				u.bug("drag_a2 picked")
			}
			drag_a2.moved = function(event) {
//				u.bug("drag_a2 moved")
			}
			drag_a2.dropped = function(event) {
//				u.bug("drag_a2 dropped")
			}

			u.e.drag(drag_a3, nodeboundaries, {"strict":false});
			drag_a3.picked = function(event) {
//				u.bug("drag_a3 picked")
			}
			drag_a3.moved = function(event) {
//				u.bug("drag_a3 moved")
			}
			drag_a3.dropped = function(event) {
//				u.bug("drag_a3 dropped")
			}

			u.e.drag(drag_a4, nodeboundaries, {"strict":false});
			drag_a4.picked = function(event) {
//				u.bug("drag_a4 picked")
			}
			drag_a4.moved = function(event) {
//				u.bug("drag_a4 moved")
			}
			drag_a4.dropped = function(event) {
//				u.bug("drag_a4 dropped")
			}


			// ARRAY BOUNDARIES
			var arrayboundaries = u.qs("div.arrayboundaries", scene);
			var drag_b1 = u.qs("div.drag_b1", scene);
			var drag_b2 = u.qs("div.drag_b2", scene);
			var drag_b3 = u.qs("div.drag_b3", scene);
			var drag_b4 = u.qs("div.drag_b4", scene);

			u.e.drag(drag_b1, [0, 0, arrayboundaries.offsetWidth, arrayboundaries.offsetHeight], {"strict":false});
			drag_b1.picked = function(event) {
//				u.bug("drag_b1 picked")
			}
			drag_b1.moved = function(event) {
//				u.bug("drag_b1 moved")
			}
			drag_b1.dropped = function(event) {
//				u.bug("drag_b1 dropped")
			}

			u.e.drag(drag_b2, [-(arrayboundaries.offsetWidth - drag_b2.offsetWidth), 0, drag_b2.offsetWidth, arrayboundaries.offsetHeight], {"strict":false});
			drag_b2.picked = function(event) {
//				u.bug("drag_b2 picked")
			}
			drag_b2.moved = function(event) {
//				u.bug("drag_b2 moved")
			}
			drag_b2.dropped = function(event) {
//				u.bug("drag_b2 dropped")
			}

			u.e.drag(drag_b3, [-(arrayboundaries.offsetWidth - drag_b2.offsetWidth), -(arrayboundaries.offsetHeight - drag_b2.offsetHeight), drag_b2.offsetWidth, drag_b2.offsetHeight], {"strict":false});
			drag_b3.picked = function(event) {
//				u.bug("drag_b3 picked")
			}
			drag_b3.moved = function(event) {
//				u.bug("drag_b3 moved")
			}
			drag_b3.dropped = function(event) {
//				u.bug("drag_b3 dropped")
			}

			u.e.drag(drag_b4, [0, -(arrayboundaries.offsetHeight - drag_b2.offsetHeight), arrayboundaries.offsetWidth, drag_b2.offsetHeight], {"strict":false});
			drag_b4.picked = function(event) {
//				u.bug("drag_b4 picked")
			}
			drag_b4.moved = function(event) {
//				u.bug("drag_b4 moved")
			}
			drag_b4.dropped = function(event) {
//				u.bug("drag_b4 dropped")
			}


			// SWIPES
			var images_ul = u.qs("ul.imagesul", scene);
			u.e.swipe(images_ul, images_ul);

			var nodes = u.qsa("li", images_ul);
			for(i = 0; node = nodes[i]; i++) {
				u.as(node, "zIndex", 4000-i);
			}

			images_ul.picked = function(event) {
//				u.bug("imagesul picked")
			}
			images_ul.moved = function(event) {
				if(this.swiped && this.swiped.match("up|down")) {
					u.a.translate(u.qs("li", this), 0, this.current_y)
				}
				else if(this.swiped && this.swiped.match("left|right")) {
					u.a.translate(u.qs("li", this), this.current_x, 0)
				}
//				u.bug("imagesul moved")
			}
			images_ul.dropped = function(event) {
//				u.bug("imagesul dropped")
			}
			images_ul.swipedLeft = function(event) {
				var li = u.qs("li", this);
				li.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(li, "all 0.4s linear");
				u.a.translate(li, -this.offsetWidth, 0)
//				u.bug("imagesul swipedLeft")
			}
			images_ul.swipedRight = function(event) {
				var li = u.qs("li", this);
				li.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(li, "all 0.4s linear");
				u.a.translate(li, this.offsetWidth, 0)
//				u.bug("imagesul swipedRight")
			}
			images_ul.swipedUp = function(event) {
				var li = u.qs("li", this);
				li.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(li, "all 0.4s linear");
				u.a.translate(li, 0, -this.offsetHeight)
//				u.bug("imagesul swipedUp")
			}
			images_ul.swipedDown = function(event) {
				var li = u.qs("li", this);
				li.transitioned = function() {
					this.transitioned = null;
					u.a.transition(this, "none");
					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(li, "all 0.4s linear");
				u.a.translate(li, 0, this.offsetHeight)
//				u.bug("imagesul swipedDown")
			}



			var images_li = u.qs("ul.imagesli", scene);
			var nodes = u.qsa("li", images_li);
			for(i = 0; node = nodes[i]; i++) {
				u.as(node, "zIndex", 4000-i);

				u.e.swipe(node, [-node.offsetWidth, 0, node.offsetWidth*2, node.offsetHeight]);

				node.picked = function(event) {
//					u.bug("imagesli picked")
				}
				node.moved = function(event) {
//					u.bug("imagesli moved")
				}
				node.dropped = function(event) {
//					u.bug("imagesli dropped")
				}
				node.swipedLeft = function(event) {
					this.transitioned = function() {
						this.transitioned = null;
						u.a.transition(this, "none");
						u.as(this, "zIndex", u.gcs(this, "z-index")-4);
						this.parentNode.appendChild(this);
						u.a.translate(this, 0, 0);
					}
					u.a.transition(this, "all 0.4s linear");
					u.a.translate(this, -this.offsetWidth, 0)
	//				u.bug("imagesli swipedLeft")
				}
				node.swipedRight = function(event) {
					this.transitioned = function() {
						this.transitioned = null;
						u.a.transition(this, "none");
						u.as(this, "zIndex", u.gcs(this, "z-index")-4);
						this.parentNode.appendChild(this);
						u.a.translate(this, 0, 0);
					}
					u.a.transition(this, "all 0.4s linear");
					u.a.translate(this, this.offsetWidth, 0)
	//				u.bug("imagesli swipedRight")
				}
			}

		}

	}
//	u.xInObject(document.body);
</script>

<div class="scene i:test">
	<h1>Events, movements</h1>

	<div class="drag">
		<h3>Fixed node with drag</h3>

		<div class="fixed">
			<div class="handle"></div>
		</div>

		<ul class="info">
			<li class="handle">handle: to be dragged inside fixed element</li>
		</ul>
	</div>

	<div class="drag">
		<h3>Mixed and Nested drag variations, with different positioning</h3>
		<div class="level1">
			<div class="level2">
				<div class="level3">
					<div class="level4"></div>
				</div>
			</div>
		</div>

		<ul class="info">
			<li class="level1">level1: click (also fire after down+move)</li>
			<li class="level2">level2: drag (boundary: .level1) + click (should not bubble, cancel on down+move) - abs positioned div</li>
			<li class="level3">level3: drag (boundary: .level2, strict=false) + click (should not bubble, cancel on down+move) - div with padding</li>
			<li class="level4">level4: drag (boundary: .level3, strict=false, elastica=200) + click (should not bubble, cancel on down+move) - empty div, in div with padding</li>
		</ul>

	</div>

	<div class="drag">
		<h3>Nested drags, horizontal inside vertical</h3>

		<div class="nested_view">
			<ul class="outer">
				<li>
					<ul class="inner_a">
						<li>Inner A 1</li>
						<li>Inner A 2</li>
						<li>Inner A 3</li>
					</ul>
				</li>
				<li>
					<ul class="inner_b">
						<li>Inner B 1</li>
						<li>Inner B 2</li>
						<li>Inner B 3</li>
					</ul>
				</li>
				<li>
					<ul class="inner_c">
						<li>Inner C 1</li>
						<li>Inner C 2</li>
						<li>Inner C 3</li>
					</ul>
				</li>
			</ul>
		</div>


		<ul class="info">
			<li class="level1">level1: click (also fire after down+move)</li>
			<li class="level2">level2: drag (boundary: .level1) + click (should not bubble, cancel on down+move) - abs positioned div</li>
			<li class="level3">level3: drag (boundary: .level2, strict=false) + click (should not bubble, cancel on down+move) - div with padding</li>
			<li class="level4">level4: drag (boundary: .level3, strict=false, elastica=200) + click (should not bubble, cancel on down+move) - empty div, in div with padding</li>
		</ul>

	</div>


	<div class="drag">
		<h3>Drag links</h3>

		<div class="links">
			<div class="link1">
				<a href="#">link1</a>
			</div>
			<div class="link2">
				<a href="#">link2</a>
			</div>
		</div>

		<ul class="info">
			<li class="links">links: boundary</li>
			<li class="link1">link: drag (boundary: .links) + click (should not bubble, cancel on move) - div->a, with text-indent</li>
			<li class="link2">link: drag (boundary: .links) + click (should not bubble, cancel on move) - div->a, without text-indent</li>
		</ul>
	</div>

	<div class="drag">

		<h3>Node as boundaries, absolute positioned drags in each corner - testing correct conversion of positioning.</h3>
		<div class="nodeboundaries">
			<div class="drag_a1"></div>
			<div class="drag_a2"></div>
			<div class="drag_a3"></div>
			<div class="drag_a4"></div>
		</div>

		<ul class="info">
			<li class="drag_a1">drag_a1: drag (boundary: .nodeboundaries) - top left</li>
			<li class="drag_a2">drag_a2: drag (boundary: .nodeboundaries) - top right</li>
			<li class="drag_a3">drag_a3: drag (boundary: .nodeboundaries) - bottom right</li>
			<li class="drag_a4">drag_a4: drag (boundary: .nodeboundaries) - bottom left</li>
		</ul>

	</div>
	<div class="drag">

		<h3>Array as boundaries, absolute positioned drags in each corner - testing correct conversion of positioning.</h3>
		<div class="arrayboundaries">
			<div class="drag_b1"></div>
			<div class="drag_b2"></div>
			<div class="drag_b3"></div>
			<div class="drag_b4"></div>
		</div>

		<ul class="info">
			<li class="drag_b1">drag_b1: drag (boundary: Array) - top left</li>
			<li class="drag_b2">drag_b2: drag (boundary: Array) - top right</li>
			<li class="drag_b3">drag_b3: drag (boundary: Array) - bottom right</li>
			<li class="drag_b4">drag_b4: drag (boundary: Array) - bottom left</li>
		</ul>
	</div>

	<div class="swipe">
		<h3>Swipe on ul</h3>
		<div class="images">
			<ul class="imagesul">
				<li>swipe me left</li>
				<li>swipe me up</li>
				<li>swipe me right</li>
				<li>swipe me down</li>
			</ul>
		</div>

		<h3>Swipe on li (might perform better because of simpler move handler, only left/right)</h3>
		<ul class="imagesli">
			<li>swipe me left</li>
			<li>swipe me right</li>
			<li>swipe me left</li>
			<li>swipe me right</li>
		</ul>

	</div>

</div>
<div class="comments">
	
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>