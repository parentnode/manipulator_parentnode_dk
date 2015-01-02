<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			// STATIC SVG

			var svg = u.svg({
				"node":scene,
				"width":300,
				"height":300,
				"shapes":[
					{
						"type": "circle",
						"class": "blob_white",
						"cx": 110,
						"cy": 110,
						"r": 100,
						"fill": "#00ff00"
					},
					{
						"type": "ellipse",
						"class": "shadow",
						"cx": 110,
						"cy": 110,
						"rx": 55,
						"ry": 100,
						"fill": "#000000"
					},
					{
						"type": "circle",
						"class": "blob_red",
						"cx": 50,
						"cy": 50,
						"r": 25,
						"fill": "#d20014"
					},
					{
						"type": "path",
						"class": "path_1",
						"d": "M50,60 180,60 50,180",
						"stroke": "#ffff00",
						"stroke-width":2,
						"fill":"none"
					},
					{
						"type": "line",
						"class": "line_1",
						"x1": "50",
						"y1": "50",
						"x2": "180",
						"y2": "50",
						"stroke": "#00ffff"
					}

				]

			});

			u.svgShape(svg, {
				"type": "circle",
				"class": "blob_blue",
				"cx": 210,
				"cy": 210,
				"r": 50,
				"fill": "#0000ff"
			});


			// ANIMATED SVG

			// counter - how many iterations
			page.svg_drawings = 0;

			//
			var svg_drawing = u.svg({
				"node":scene,
				"class":"sharing",
				"width":500,
				"height":500,
				"shapes":[
					{
						"type": "circle",
						"class": "share",
						"cx": 5,
						"cy": 250,
						"r": 5,
						"stroke": "#00ff00",
						"fill": "#ff0000"
					}
				]
			});

			// add first line
			// var line = u.svgShape(svg_drawing, {
			// 	"type": "line",
			// 	"stroke-width": 1,
			// 	"stroke": "#00ff00",
			// 	"x1": 5,
			// 	"y1": 250,
			// 	"x2": 20,
			// 	"y2": 250
			// });


			scene.drawCircle = function(svg, cx, cy) {

				var circle = u.svgShape(svg, {
					"type": "circle",
					"fill": "#cc0000",
					"stroke-width": 2,
					"stroke": "#00cc00",
					"cx": cx,
					"cy": cy,
					"r":  1,
				});
				circle.svg = svg;

				var new_radius = u.random(2, 6);
				circle.transitioned = svg._circle_transitioned;
				u.a.to(circle, "all linear 50ms", {"r":new_radius});
				
				return circle;
			}

			scene.drawLine = function(svg, x1, y1) {
				u.bug("scene.drawLine:" + x1 + ", " + y1);

				var x2, y2;

				if(y1 < 250) {
					x2 = x1 + u.random(15, 30);
					y2 = y1 + u.random(-80, 50);
				}
				else {
					x2 = x1 + u.random(15, 30);
					y2 = y1 + u.random(-50, 80);
				}

					u.bug("x2:" + x2 + " , y2:" + y2)

				if(x2 < 490 && y2 > 10 && y2 < 490) {
					
					var line = u.svgShape(svg, {
						"type": "line",
						"stroke-width": 1,
						"stroke": "#00cc00",
						"x1": x1,
						"y1": y1,
						"x2": x1,
						"y2": y1
					});

					u.ie(svg, line);
					line.svg = svg;

					u.bug("x2:" + x2 + " , y2:" + y2)

					line.transitioned = svg._line_transitioned;
					u.a.to(line, "all linear 50ms", {"x2": x2, "y2": y2});

					return line;
					
				}

// 				var line = u.svgShape(svg, {
// 					"type": "line",
// 					"stroke-width": 2,
// 					"stroke": "#00cc00",
// 					"x1": x1,
// 					"y1": y1,
// 					"x2": x1,
// 					"y2": y1
// 				});
//
// 				u.ie(svg, line);
// 				line.svg = svg;
//
// //					u.bug("x2:" + x2 + " , y2:" + y2)
//
// 				line.transitioned = svg._line_transitioned;
// 				u.a.to(line, "all linear 100ms", {"x2": x2, "y2": y2});

				return false;
			}

//			u.bug("node:" + svg_drawing.node)

			svg_drawing._line_transitioned = function() {
				u.bug("line done:" + u.nodeId(this));

				var key = u.randomString(4);
				u.bug("do circle:" + key)
				var cx = Number(this.getAttribute("x2"));
				var cy = Number(this.getAttribute("y2"));
				var circle = this.svg.node.drawCircle(this.svg, cx, cy);
				circle.id = key;


			}

			svg_drawing._circle_transitioned = function() {
				u.bug("circle done:" + u.nodeId(this));

				page.svg_drawings++;

				if(page.svg_drawings < 300) {

					var x1 = Number(this.getAttribute("cx"));
					var y1 = Number(this.getAttribute("cy"));
					var r = Number(this.getAttribute("r"));
//					u.bug("x1:" + x1 + " , y1:" + y1)

					var key = u.randomString(4);
					u.bug("do line:" + key)

					if(r > 5 && page.svg_drawings < 4) {
						var line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}

						var key = u.randomString(4);
						u.bug("do line 2:" + key)

						line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}

						var key = u.randomString(4);
						u.bug("do line 3:" + key)

						line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}
						
					}
					else if(r > 5) {
						var line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}

						var key = u.randomString(4);
						u.bug("do line 2:" + key)

						line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}
						
					}
					else if(r >= 3 || page.svg_drawings < 10) {
						var line = this.svg.node.drawLine(this.svg, x1, y1, (x1+1), (y1+1));
						if(line) {
							line.id = key;
						}
					}
				}

			}


			var x1 = 5;
			var x2 = 20;
			var y1 = 250;
			var y2 = 250;

//			var line = scene.drawLine(svg_drawing, x1, y1, x2, y2);

			// add first line
			var line = u.svgShape(svg_drawing, {
				"type": "line",
				"stroke-width": 2,
				"stroke": "#00cc00",
				"x1": x1,
				"y1": y1,
				"x2": x2,
				"y2": y2
			});

			u.ie(svg_drawing, line);
			line.svg = svg;
			line.svg = svg_drawing;
			line.id = "first";

			var button = u.svgShape(svg_drawing, {
				"type": "rect",
				"class": "share",
				"x": 0,
				"y": 230,
				"width": 40,
				"height": 40,
				"stroke": "#00ffff",
				"fill": "transparent"
			});
			

			// animate first line

//			x2 = x2+u.random(10, 25);

//			line._x2 = x2;
			button.scene = scene;
			button.hovered = function() {
				
				if(!this.scene.first_circle) {
					u.bug("first circle:" + x2);
					this.scene.first_circle = this.scene.drawCircle(svg_drawing, x2, y2);
				}
				else {
					u.bug("base line:");
					this.scene.drawLine(svg_drawing, u.a.getInitialValue(this.scene.first_circle, "cx"), u.a.getInitialValue(this.scene.first_circle, "cy"));
				}

				// this.transitioned = svg_drawing._line_transitioned;
				// u.a.to(this, "all linear 50ms", {"x2":x2});
			}
			u.e.addEvent(button, "mouseover", button.hovered);

		}
	}

</script>

<div class="scene i:test">
	<h1>SVG creation</h1>



</div>
<div class="comments"></div>
