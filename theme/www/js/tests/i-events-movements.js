Util.Objects["drag1"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		var drag = u.qs("div.drag", div);

		// FIXED
		var fixed = u.qs("div.fixed", div);
		var handle = u.qs("div.fixed .handle", div);
		handle.div = div;

		u.e.drag(handle, fixed);
		handle.picked = function(event) {
			this.div.addDebug("handle picked");
		}
		handle.moved = function(event) {
			var progress = this._y / (fixed.offsetHeight - this.offsetHeight);
			var offset = Math.round((u.htmlH() - u.browserH()) * progress);
			window.scrollTo(0, offset);
			this.div.addDebug("handle moved");
		}
		handle.dropped = function(event) {
			this.div.addDebug("handle dropped");
		}
		u.e.addEvent(window, "scroll", function() {
			u.a.translate(handle, 0, Math.round((fixed.offsetHeight - handle.offsetHeight) * (u.scrollY() / (u.htmlH() - u.browserH()))))
		});
	}
}


Util.Objects["drag2"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}

		// MIXED
		var level1 = u.qs("div.level1", div);
		level1.div = div;

		var level2 = u.qs("div.level2", div);
		level2.div = div;

		var level3 = u.qs("div.level3", div);
		level3.div = div;

		var level4 = u.qs("div.level4", div);
		level4.div = div;


		u.e.click(level1);
		level1.clicked = function(event) {
			this.div.addDebug("level1 clicked");
		}


		u.e.drag(level2, level1);
		level2.picked = function(event) {
			this.div.addDebug("level2 picked");
		}
		level2.moved = function(event) {
//			this.div.addDebug("level2 moved");
		}
		level2.dropped = function(event) {
			this.div.addDebug("level2 dropped");
		}
		u.e.click(level2);
		level2.clicked = function(event) {
			this.div.addDebug("level2 clicked");
		}


		u.e.click(level3);
		level3.clicked = function(event) {
			this.div.addDebug("level3 clicked");
		}
		u.e.drag(level3, level2, {"strict":false});
		level3.picked = function(event) {
			this.div.addDebug("level3 picked");
		}
		level3.moved = function(event) {
//			this.div.addDebug("level3 moved");
		}
		level3.dropped = function(event) {
			this.div.addDebug("level3 dropped");
		}


		u.e.click(level4);
		level4.clicked = function(event) {
			this.div.addDebug("level4 clicked");
		}
		u.e.drag(level4, level3, {"strict":false,"elastica":100});
		level4.picked = function(event) {
			this.div.addDebug("level4 picked");
		}
		level4.moved = function(event) {
//			this.div.addDebug("level4 moved");
		}
		level4.dropped = function(event) {
			this.div.addDebug("level4 dropped");
		}
	}

}


Util.Objects["drag3"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		// NESTED
		var nested_outer = u.qs("ul.outer", div);
		nested_outer.div = div;

		var nested_inner_a = u.qs("ul.inner_a", div);
		nested_inner_a.div = div;

		var nested_inner_b = u.qs("ul.inner_b", div);
		nested_inner_b.div = div;

		var nested_inner_c = u.qs("ul.inner_c", div);
		nested_inner_c.div = div;

		u.e.swipe(nested_outer, [-400, 0, 600, 200], {"strict":false, "elastica":100});

		nested_outer.nodes = u.cn(nested_outer);
		nested_outer.current_index = 0;
		nested_outer.picked = function(event) {
			u.e.resetEvents(nested_inner_a);
			u.e.resetEvents(nested_inner_b);
			u.e.resetEvents(nested_inner_c);
			this.div.addDebug("Outer: picked");
		}
		nested_outer.swipedLeft = function(event) {
			this.current_index = Math.abs(Math.floor(this._x/this.nodes[0].offsetWidth));
			var new_x = this.current_index * this.nodes[0].offsetWidth;
			u.a.transition(this, "all 0.4s linear");
			u.a.translate(this, -(new_x), 0);
			this.div.addDebug("Outer: swipedLeft");
		}
		nested_outer.swipedRight = function(event) {
			this.current_index = Math.abs(Math.ceil(this._x/this.nodes[0].offsetWidth));
			var new_x = this.current_index * this.nodes[0].offsetWidth;
			u.a.transition(this, "all 0.4s linear");
			u.a.translate(this, -(new_x), 0);
			this.div.addDebug("Over: swipedRight");
		}
		nested_outer.dropped = function(event) {
			this.div.addDebug("Outer: dropped");
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
			this.current_index = Math.abs(Math.floor(this._y/this.nodes[0].offsetHeight));
			var new_y = this.current_index * this.nodes[0].offsetHeight;
			u.a.transition(this, "all 0.4s linear");
			u.a.translate(this, 0, -(new_y));
			this.div.addDebug(this.className+ ": swipedUp");
		}
		nested_inner_a.swipedDown = nested_inner_b.swipedDown = nested_inner_c.swipedDown = function(event) {
			this.current_index = Math.abs(Math.ceil(this._y/this.nodes[0].offsetHeight));
			var new_y = this.current_index * this.nodes[0].offsetHeight;
			u.a.transition(this, "all 0.4s linear");
			u.a.translate(this, 0, -(new_y));
			this.div.addDebug(this.className+ ": swipedDown");
		}
	}
}


Util.Objects["drag4"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}

		// LINKS
		var links = u.qs("div.links", div);
		links.div = div;

		var link1 = u.qs("div.link1", div);
		link1.div = div;

		var link2 = u.qs("div.link2", div);
		link2.div = div;

		u.ce(link1);
		link1.clicked = function(event) {
			this.div.addDebug("link1: clicked");
		}
		u.e.drag(link1, links);
		link1.picked = function(event) {
			this.div.addDebug("link1: picked");
		}
		link1.moved = function(event) {
//			this.div.addDebug("link1: moved");
		}
		link1.dropped = function(event) {
			this.div.addDebug("link1: dropped");
		}


		u.ce(link2);
		link2.clicked = function(event) {
			this.div.addDebug("link2: clicked");
		}
		link2.inputStarted = function(event) {
			this.div.addDebug("link2: inputStarted");
		}
		link2.clickedCancelled = function(event) {
			this.div.addDebug("link2: clickCancelled");
		}

		u.e.drag(link2, links);
		link2.picked = function(event) {
			this.div.addDebug("link2: picked");
		}
		link2.moved = function(event) {
//			this.div.addDebug("link2: moved");
		}
		link2.dropped = function(event) {
			this.div.addDebug("link2: dropped");
		}

	}

}



Util.Objects["drag5"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		// NODE BOUNDARIES
		var nodeboundaries = u.qs("div.nodeboundaries", div);
		var drag_a1 = u.qs("div.drag_a1", div);
		drag_a1.div = div;

		var drag_a2 = u.qs("div.drag_a2", div);
		drag_a2.div = div;

		var drag_a3 = u.qs("div.drag_a3", div);
		drag_a3.div = div;

		var drag_a4 = u.qs("div.drag_a4", div);
		drag_a4.div = div;

		u.e.drag(drag_a1, nodeboundaries, {"strict":false});
		u.e.drag(drag_a2, nodeboundaries, {"strict":false});
		u.e.drag(drag_a3, nodeboundaries, {"strict":false});
		u.e.drag(drag_a4, nodeboundaries, {"strict":false});

		drag_a1.picked = drag_a2.picked = drag_a3.picked = drag_a4.picked = function(event) {
			u.as(this, "zIndex", 10);
			this.div.addDebug(this.className + ": picked");
		}
		drag_a1.moved = drag_a2.moved = drag_a3.moved = drag_a4.moved = function(event) {
//				u.bug("drag_a1 moved")
		}
		drag_a1.dropped = drag_a2.dropped = drag_a3.dropped = drag_a4.dropped = function(event) {
			u.as(this, "zIndex", 1);
			this.div.addDebug(this.className + ": dropped");
		}

	}
}


Util.Objects["drag6"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		// ARRAY BOUNDARIES
		var arrayboundaries = u.qs("div.arrayboundaries", div);
		var drag_b1 = u.qs("div.drag_b1", div);
		drag_b1.div = div;

		var drag_b2 = u.qs("div.drag_b2", div);
		drag_b2.div = div;

		var drag_b3 = u.qs("div.drag_b3", div);
		drag_b3.div = div;

		var drag_b4 = u.qs("div.drag_b4", div);
		drag_b4.div = div;

		u.e.drag(drag_b1, [0, 0, arrayboundaries.offsetWidth, arrayboundaries.offsetHeight], {"strict":false});
		u.e.drag(drag_b2, [-(arrayboundaries.offsetWidth - drag_b2.offsetWidth), 0, drag_b2.offsetWidth, arrayboundaries.offsetHeight], {"strict":false});
		u.e.drag(drag_b3, [-(arrayboundaries.offsetWidth - drag_b2.offsetWidth), -(arrayboundaries.offsetHeight - drag_b2.offsetHeight), drag_b2.offsetWidth, drag_b2.offsetHeight], {"strict":false});
		u.e.drag(drag_b4, [0, -(arrayboundaries.offsetHeight - drag_b2.offsetHeight), arrayboundaries.offsetWidth, drag_b2.offsetHeight], {"strict":false});

		drag_b1.picked = drag_b2.picked = drag_b3.picked = drag_b4.picked = function(event) {
			u.as(this, "zIndex", 10);
			this.div.addDebug(this.className + ": picked");
		}
		drag_b1.moved = drag_b2.moved = drag_b3.moved = drag_b4.moved = function(event) {
//				u.bug("drag_b1 moved")
		}
		drag_b1.dropped = drag_b2.dropped = drag_b3.dropped = drag_b4.dropped = function(event) {
			u.as(this, "zIndex", 1);
			this.div.addDebug(this.className + ": dropped");
		}

	}

}



Util.Objects["swipe1"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		// SWIPES
		var images_ul = u.qs("ul.imagesul", div);
		images_ul.div = div;

		u.e.swipe(images_ul, images_ul);

		var nodes = u.qsa("li", images_ul);
		for(i = 0; node = nodes[i]; i++) {
			u.as(node, "zIndex", 4000-i);
		}

		images_ul.picked = function(event) {
			this.div.addDebug("imagesul: picked");
		}
		images_ul.moved = function(event) {
			if(this.swiped && this.swiped.match("up|down")) {
				u.a.translate(u.qs("li", this), 0, this.current_y);
			}
			else if(this.swiped && this.swiped.match("left|right")) {
				u.a.translate(u.qs("li", this), this.current_x, 0);
			}
//			u.bug("imagesul moved")
		}
		images_ul.dropped = function(event) {
			this.div.addDebug("imagesul: dropped");
		}
		images_ul.swipedLeft = function(event) {
			var li = u.qs("li", this);
			li.transitioned = function() {

				u.as(this, "zIndex", u.gcs(this, "z-index")-4);
				this.parentNode.appendChild(this);
				u.a.translate(this, 0, 0);
			}
			u.a.transition(li, "all 0.4s linear");
			u.a.translate(li, -this.offsetWidth, 0);
			this.div.addDebug("imagesul: swipedLeft");
		}

		images_ul.swipedRight = function(event) {
			var li = u.qs("li", this);
			li.transitioned = function() {

				u.as(this, "zIndex", u.gcs(this, "z-index")-4);
				this.parentNode.appendChild(this);
				u.a.translate(this, 0, 0);
			}
			u.a.transition(li, "all 0.4s linear");
			u.a.translate(li, this.offsetWidth, 0);
			this.div.addDebug("imagesul: swipedRight");
		}
		images_ul.swipedUp = function(event) {
			var li = u.qs("li", this);
			li.transitioned = function() {

				u.as(this, "zIndex", u.gcs(this, "z-index")-4);
				this.parentNode.appendChild(this);
				u.a.translate(this, 0, 0);
			}
			u.a.transition(li, "all 0.4s linear");
			u.a.translate(li, 0, -this.offsetHeight)
			this.div.addDebug("imagesul: swipedUp");
		}
		images_ul.swipedDown = function(event) {
			var li = u.qs("li", this);
			li.transitioned = function() {

				u.as(this, "zIndex", u.gcs(this, "z-index")-4);
				this.parentNode.appendChild(this);
				u.a.translate(this, 0, 0);
			}
			u.a.transition(li, "all 0.4s linear");
			u.a.translate(li, 0, this.offsetHeight)
			this.div.addDebug("imagesul: swipedDown");
		}
	}
}


Util.Objects["swipe2"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		var images_li = u.qs("ul.imagesli", div);
		var nodes = u.qsa("li", images_li);
		for(i = 0; node = nodes[i]; i++) {
			u.as(node, "zIndex", 4000-i);
			node.div = div;

			u.e.swipe(node, [-node.offsetWidth, 0, node.offsetWidth*2, node.offsetHeight]);

			node.picked = function(event) {
				this.div.addDebug(this.className + ": picked");
			}
			node.moved = function(event) {
//				this.div.addDebug(this.className + ": moved");
			}
			node.dropped = function(event) {
				this.div.addDebug(this.className + ": dropped");
			}
			node.swipedLeft = function(event) {
				this.transitioned = function() {

					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, -this.offsetWidth, 0)
				this.div.addDebug(this.className + ": swipedLeft");
			}
			node.swipedRight = function(event) {
				this.transitioned = function() {

					u.as(this, "zIndex", u.gcs(this, "z-index")-4);
					this.parentNode.appendChild(this);
					u.a.translate(this, 0, 0);
				}
				u.a.transition(this, "all 0.4s linear");
				u.a.translate(this, this.offsetWidth, 0)
				this.div.addDebug(this.className + ": swipedRight");
			}
		}

	}

}



Util.Objects["dynamic"] = new function() {
	this.init = function(div) {

		div.debug = u.ae(div, "div", {"class":"debug"});
		div.addDebug = function(message) {
			this.debug.innerHTML += message + "<br>";
			this.debug.scrollTop = this.debug.scrollTop + 25;
		}


		// ARRAY BOUNDARIES
		div.boundary = u.qs("div.boundary", div);

		div.dragme = u.qs("div.dragme", div);
		div.dragme.div = div;

		var portrait = u.qs("li.portrait", div);
		portrait.div = div;
		u.ce(portrait);
		portrait.clicked = function() {
			u.ac(this.div.boundary, "portrait");

			u.rc(this.div.boundary, "landscape");
			u.rc(this.div.boundary, "all");

			u.e.setDragBoundaries(this.div.dragme, this.div.boundary);
			u.e.setDragPosition(this.div.dragme, 0, 0);
		}

		var landscape = u.qs("li.landscape", div);
		landscape.div = div;
		u.ce(landscape);
		landscape.clicked = function() {
			u.ac(this.div.boundary, "landscape");

			u.rc(this.div.boundary, "portrait");
			u.rc(this.div.boundary, "all");

			u.e.setDragBoundaries(this.div.dragme, this.div.boundary);
			u.e.setDragPosition(this.div.dragme, 0, 0);
		}

		var all = u.qs("li.all", div);
		all.div = div;
		u.ce(all);
		all.clicked = function() {
			u.ac(this.div.boundary, "all");

			u.rc(this.div.boundary, "landscape");
			u.rc(this.div.boundary, "portrait");
			
			u.e.setDragBoundaries(this.div.dragme, this.div.boundary);
			u.e.setDragPosition(this.div.dragme, 0, 0);
		}

		var no = u.qs("li.no", div);
		no.div = div;
		u.ce(no);
		no.clicked = function() {
			u.rc(this.div.boundary, "landscape");
			u.rc(this.div.boundary, "portrait");
			u.rc(this.div.boundary, "all");

			u.e.setDragBoundaries(this.div.dragme, this.div.boundary);
			u.e.setDragPosition(this.div.dragme, 0, 0);
		}


		div.dragme.ready = function(event) {
			this.div.addDebug(this.className + ": ready ("+this._x+", "+this._y+")");
		}

		div.dragme.picked = function(event) {
			this.div.addDebug(this.className + ": picked");
		}
		div.dragme.moved = function(event) {
			this.div.addDebug(this.className + ": moved ("+this._x+", "+this._y+")");
		}
		div.dragme.dropped = function(event) {
			this.div.addDebug(this.className + ": dropped");
		}

		// u.e.drag(div.dragme, [0, div.boundary.offsetHeight - div.dragme.offsetHeight, div.boundary.offsetWidth, div.boundary.offsetHeight], {"strict":false});

		u.e.drag(div.dragme, div.boundary, {"strict":false, "overflow":"scroll"});

	}

}