//http://stackoverflow.com/questions/14275249/how-can-i-animate-a-progressive-drawing-of-svg-path


	// easing tests
	function linear(time, duration){
		return time / duration;
	}
	function easeIn(time, duration){
		return Math.pow(time / duration, 3);
	}
	function easeOut(time, duration){
		return 1 - Math.pow(1 - (time / duration), 3);
	}
	function easeInOut(time, duration){
		if(time > (duration / 2)) {
			return easeOut(time, duration);
		}
		return easeIn(time, duration);
	}


	Util.Objects["borders-"] = new function() {
		this.init = function(div_border) {


			/* 
			Animate borders of div 

			<----- ----->
			|			|
			|			|
			-----> <-----
			
			*/

			div_border.span1 = u.qs(".one", div_border);
			div_border.span3 = u.qs(".three", div_border);
			div_border.span4 = u.qs(".four", div_border);
			div_border.h1 = u.qs("h1", div_border);

			div_border.span1.transitioned = function(event) {
				u.bug("span1 done");
				u.a.transition(this, "none");
				
				// height box
				u.a.transition(div_border, "all 0.4s ease-out");
				u.a.setHeight(div_border, 60);
			}
			
			div_border.transitioned = function(event) {
				
				u.a.transition(this, "none");
				
				u.bug("new height");
				u.as(div_border.span3, "display", "block");
				u.a.transition(div_border.span3, "all 350ms ease-out");
				u.a.setWidth(div_border.span3, 100);
			
				
				u.as(div_border.span4, "display", "block");
				u.a.transition(div_border.span4, "all 350ms ease-out");
				u.a.setWidth(div_border.span4, 100);
			}
			div_border.span4.transitioned = function(event) {
				u.a.transition(this, "none");
				
				//u.bug("ALL DONE!");

				// clean up?
				u.as(div_border, "border", "3px solid #000", true);
				u.as(div_border, "height", "54px", true);
				u.as(div_border, "overflow", "hidden", true);
				div_border.span1.parentNode.removeChild(div_border.span1);
				div_border.span3.parentNode.removeChild(div_border.span3);
				div_border.span4.parentNode.removeChild(div_border.span4);
				
				// show button content, h1
				u.as(div_border.h1, "display", "block", true);
				u.a.transition(div_border.h1, "all 300ms ease-in-out");
				u.as(div_border.h1, "paddingTop", "10px", true);
			}
			
			// initial line
			u.a.transition(div_border.span1, "all 300ms ease-out");
			u.a.setWidth(div_border.span1, 200);
			u.as(div_border.span1, "left", "0px", true);
		}
	}



	Util.Objects["simulation"] = new function() {

		this.init = function(scene) {

			u.a.support3d();

			u.a.translate(u.qs(".block.translate3d", scene), 300, 300)
			scene.distance = 800;
			scene.duration = 2000;

			scene.iterations = 20;
			scene.iteration = 1;

			scene.block_li = u.qs(".block.linear", scene);
			scene.block_ei = u.qs(".block.easeIn", scene);
			scene.block_eo = u.qs(".block.easeOut", scene);
			scene.block_eio = u.qs(".block.easeInOut", scene);

			scene.move = function() {
//				u.bug("easeOut:" + this.iteration + "," + this.iterations + ":" + easeOut(this.iteration, this.iterations))

				u.as(this.block_li, "left", linear(this.iteration, this.iterations) * this.distance+"px");
				u.as(this.block_ei, "left", easeIn(this.iteration, this.iterations) * this.distance+"px");
				u.as(this.block_eo, "left", easeOut(this.iteration, this.iterations) * this.distance+"px");

				u.as(this.block_eio, "left", easeInOut(this.iteration, this.iterations) * this.distance+"px");

				this.iteration++
			}

			for(var i = scene.iteration; i <= scene.iterations; i++) {
				u.t.setTimer(scene, scene.move, (scene.duration / scene.iterations) * i);
			}
//			u.bug("easeOut:" + easeOut())

		}

	}

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

//			alert("te")
//			u.bug(document.body.style.MozTransform + ", " + document.body.style.mozTransform)

//			u.bug("Vendor:" + u.a.vendor("Transform") + ", " + u.a.vendor()+"Transform" + ", " + u.a.vendor("requestAnimationFrame"))

			scene.a_ids = [];
			var bn = u.qs(".aniframe", scene);
			u.ce(bn);
			bn.clicked = function() {


				this.transitioned = function() {
					// u.a.transition(this, "all linear 150ms");
					// u.a.translate(this, 100, 50);
				}
				u.a.to(this, "all linear 150ms", {"left":"100px", "top":"300px", "fontSize": "100px"});

				u.bug("Start animation");
//				scene.a_ids.push(u.a.requestAnimationFrame(scene, "animate", 150));

			}
			
			scene.animate = function(time) {

				u.bug("Animate time:" + time)

				// if(time > 250) {
				// 	u.bug("Animate done")
				// 	u.a.cancelAnimationFrame(this.a_ids.shift());
				//
				//
				// 	// if(this.repeat < 2) {
				// 	// 	u.bug("Restart animation:" + this.repeat);
				// 	// 	this.repeat++;
				// 	// 	this.a_id = u.a.requestAnimationFrame(this, "animate");
				// 	// 	u.bug("this.a_id:" + scene.a_id)
				// 	// }
				// }

	//				u.bug("time:" + time);
			}



		}
	}


Util.Objects["more_old_stuff"] = new function() {
	this.init = function(old_div) {


		/* NEW APPLY STYLE */
		var applyStyles = function(node, options) {
			// additional info passed to function as JSON object
			if(typeof(options) == "object") {
				var argument;
				for(argument in options) {
					node.style[argument] = options[argument];
				}
			}
		}
		//var node = u.qs("#darth_vader", parent_div);
		//applyStyles(node, 1, {"width": "50px", "top": "100px", "background-color": "#ff00ff", "opacity": "0.5"});


		// var animate = function(node, time, easing, delay, options) {
		// 	u.a.transition(node, "all "+time+"s "+easing+" "+delay+"s");
		// 	if(typeof(options) == "object") {
		// 		var argument;
		// 		for(argument in options) {
		// 			node.style[argument] = options[argument];
		// 		}
		// 	}
		// }
		// animate(node, 1, "ease-in-out", 0, {
		// 	"width": "50px",
		// 	"background-color": "#ff00ff",
		// 	"opacity": "0.5",
		// 	"-webkit-transform": "translate3d(400px, 30px, 0px)"
		// });


		/*

		Animation values:
			x
			y
			z
			width
			height
			background
			opacity
			rotate
			scale

			ease|linear|ease-in|ease-out|ease-in-out|cubic-bezier()|initial|inherit;
			origin / transformOrigin
			

		*/
		
		
		var animateTo = function(node, time, easing, delay, options) {
			//u.bug("animateTo");
			//animate(node, 1, "ease-in-out", 0, {"width": "200px"})
			//u.bug("node:  "+ node)
			// u.bug("node:  "+ time)
			// u.bug("node:  "+ easing)
			// u.bug("node:  "+ delay)
			// u.bug("node:  "+ options)


			//u.a.transition(node, "all "+time+"s "+easing+" "+delay+"s");
			if(typeof(options) == "object") {
				var argument;
				for(argument in options) {
					node.style[argument] = options[argument];
				}
			}
		}
		var animate = function(node, time, easing, delay, options) {
			u.bug("animate");
			
			/*
			TODO:
				move easing to options (default is "ease-in-out", always set default if not exists)
				move delay to options
				check for vendor prefix before adding css

				callback events that could trigger sequence
			*/
			
			//u.a.transition(node, "all "+time+"s "+easing+" "+delay+"s");
			this._node = node;
			this._duration = time;
			this._delay = delay;
			this._easing = easing;
			this._options = options;
			this._transition = "all "+time+"s "+easing+" "+delay+"s";
			
			//node.style = options;

			// additional info passed to function as JSON object
			// if(typeof(options) == "object") {
			// 	var argument;
			// 	for(argument in options) {

			// 		node.style[argument] = options[argument];
			// 		// switch(argument) {
			// 		// 	// create callbacks that will trigger next animation
			// 		// 	case "callback"				: callback				= options[argument]; break;
			// 		// 	case "callback_min_delay"	: callback_min_delay	= options[argument]; break;
			// 		// 	// apply styling
			// 		// 	default "apply css here"
			// 		// }

			// 	}
			// }
		}
		var sequence = function(node, options) {
			// u.bug("sequence");
			// u.bug("node: " + node);
			// u.bug("animation: " + options);

			var duration;
			var delay;
			var transitions = [];
			var curr_trans = 0;

			var i, anim;
			for (i = 0; anim = options[i]; i++) {
				u.bug(anim);

				// set total duration
				if (anim._time > duration) {
					duration = anim._time;
				}
				// set initial delay
				if (i == 0 && anim._delay) {
					delay = anim._delay;
				}
				
				transitions.push(anim._transition);

			}

			
		

			//u.a.transition(node, "all "+time+"s "+easing+" "+delay+"s");
			// node.transitioned = function() {
			// 	curr_trans++;
			// 	animateTo(transitions[curr_trans]);
				
			// }
			animateTo(transitions[curr_trans]);


			


		}

		var node = u.qs("#darth_vader", parent_div);
		

		
		// var createObj = function(node, options) {

		// 	var transitions = [];
		// 	var curr_trans = 0;
		// 	console.log(options);
		// 	if(typeof(options) == "object") {
		// 		var i, argument;
		// 		//for(i = 0; argument = options[i]; i++) {
		// 		for(argument in options) {
		// 			var opt = options[argument];
		// 			var y = 0; 
		// 			for(arg in opt) {


		// 				//node.style[argument] = options[argument];
						
		// 				if (arg == "time" && !this._time) {
		// 					this._total_time = opt[arg];
		// 				}
		// 				if (arg == "delay" && !this._delay) {
		// 					this._delay = opt[arg];
		// 				}
		// 				this.total_amount = i;

		// 				u.bug("arg: " + arg);
						
		// 				u.bug("arg[opt]: " + opt[arg]);
						
		// 				u.bug("_total_time: " + this._total_time);
		// 				u.bug("_delay: " + this._delay);
		// 				//u.bug("total_amount: " + y);
		// 				// switch(argument) {
		// 				// 	// create callbacks that will trigger next animation
		// 				// 	case "callback"				: callback				= options[argument]; break;
		// 				// 	case "callback_min_delay"	: callback_min_delay	= options[argument]; break;
		// 				// 	// apply styling
		// 				// 	default "apply css here"
		// 				// }
		// 				y++;
		// 			}
		// 		}
		// 	}
		// }
			
		/*
		TODO:
			move easing to options (default is "ease-in-out", always set default if not exists)
			move delay to options
			check for vendor prefix before adding css

			callback events that could trigger sequence
		*/
		
		//u.a.transition(node, "all "+time+"s "+easing+" "+delay+"s");
		// this._node = node;
		// this._duration = time;
		// this._delay = delay;
		// this._easing = easing;
		// this._options = options;
		// this._transition = "all "+time+"s "+easing+" "+delay+"s";
		
		
		var animate = function() {
			this.alive = true;
			u.bug("alive:  " + this.alive);
			animate._total_time = 0;
			animate._options = {};
			this._do = function(node, _time, options, _delay) {

				//u.bug(argument);
				animate._options += options;
				animate._total_time += _time + _delay;
				u.bug("total_time: " + animate._total_time)

			}
			this._run = function() {
				this.running = "running";
				u.bug("i'm:  " + this.running);
				
				u.bug("total_time:  " + animate._total_time);
				u.bug("options:  " + animate._options);
				//var i, opt;
				for(opt in animate._options) {
					u.bug("really?  " + opt);

					// if(typeof(animate._options) == "object") {
					// 	var argument;
					// 	//u.bug("really?  " + animate._options);
					// 	for(argument in animate._options) {

					// 		u.bug("css property: " + argument);
					// 		u.bug("css value: " + animate._options[argument]);
					// 		// switch(argument) {
					// 		// 	case "load_callback"		: this._load_callback			= options[argument]; break;
					// 		// 	case "autoplay"				: this._autoplay				= options[argument]; break;
					// 		// }
							
					// 	}
					// }
				}

				
			}
		}

		var olle = new animate();
		olle._do(node, 1, {"top": "200px", "width": "50px"}, 1);
		olle._do(node, 1, {"left": "100px", "width": "109px", "padding": "20px"}, 1);
		olle._run();

		// animate(node, 1, "ease-in-out", 1, {
		// 	"width": "100px",
		// 	"height": "60px",
		// 	"background-color": "#0000ff",
		// 	"opacity": "1",
		// 	"-webkit-transform": "translate3d(700px, 0px, 0px)"
		// });
		// animate(node, 1, "ease-in-out", 0, {
		// 	"-webkit-transform": "matrix(1,0,0,1,470,-6)"
		// });

		/*

		scale 		0 -> 1   : length 10s  : start 0s
		rotation 	0 -> 90  : length 4s   : start 2s
		x 			0 -> 50  : length 4s   : start 4s


		*/


		/*
			Matrix 3D Test
		*/
		var matrix = function() {
			u.bug("boom");
			var deg2rad, everyFrame, rotateX, rotateY, rotateZ, scale;
			deg2rad = Math.PI / 180;
			rotateX = 0;
			rotateY = 0;
			rotateZ = 0;
			scale = 1;

			
			everyFrame = setInterval(function() {
				var rotationXMatrix, rotationYMatrix, rotationZMatrix, s, scaleMatrix, transformationMatrix, translationMatrix;
				rotationXMatrix = $M([[1, 0, 0, 0], [0, Math.cos(rotateX * deg2rad), Math.sin(-rotateX * deg2rad), 0], [0, Math.sin(rotateX * deg2rad), Math.cos(rotateX * deg2rad), 0], [0, 0, 0, 1]]);
				rotationYMatrix = $M([[Math.cos(rotateY * deg2rad), 0, Math.sin(rotateY * deg2rad), 0], [0, 1, 0, 0], [Math.sin(-rotateY * deg2rad), 0, Math.cos(rotateY * deg2rad), 0], [0, 0, 0, 1]]);
				rotationZMatrix = $M([[Math.cos(rotateZ * deg2rad), Math.sin(-rotateZ * deg2rad), 0, 0], [Math.sin(rotateZ * deg2rad), Math.cos(rotateZ * deg2rad), 0, 0], [0, 0, 1, 0], [0, 0, 0, 1]]);
				s = scale;
				scaleMatrix = $M([[s, 0, 0, 0], [0, s, 0, 0], [0, 0, s, 0], [0, 0, 0, 1]]);
				translationMatrix = $M([[1, 0, 0, 0], [0, 1, 0, 0], [0, 0, 1, 0], [Math.sin(rotateX * deg2rad) * 250 + 250, Math.sin(rotateY * deg2rad) * 150 + 150, 0, 1]]);
				transformationMatrix = rotationXMatrix.x(rotationYMatrix).x(rotationZMatrix).x(scaleMatrix).x(translationMatrix);
				s = "matrix3d(";
				s += transformationMatrix.e(1, 1).toFixed(10) + "," + transformationMatrix.e(1, 2).toFixed(10) + "," + transformationMatrix.e(1, 3) + "," + transformationMatrix.e(1, 4).toFixed(10) + ",";
				s += transformationMatrix.e(2, 1).toFixed(10) + "," + transformationMatrix.e(2, 2).toFixed(10) + "," + transformationMatrix.e(2, 3) + "," + transformationMatrix.e(2, 4).toFixed(10) + ",";
				s += transformationMatrix.e(3, 1).toFixed(10) + "," + transformationMatrix.e(3, 2).toFixed(10) + "," + transformationMatrix.e(3, 3) + "," + transformationMatrix.e(3, 4).toFixed(10) + ",";
				s += transformationMatrix.e(4, 1).toFixed(10) + "," + transformationMatrix.e(4, 2).toFixed(10) + "," + transformationMatrix.e(4, 3) + "," + transformationMatrix.e(4, 4).toFixed(10);
				s += ")";
				document.getElementById('darth_vader').style['-webkit-transform'] = s;
				rotateX -= 0.5;
				rotateY -= 1;
				rotateZ -= 0.5;
				return (scale = Math.abs(Math.sin(rotateZ * deg2rad) * 0.9));
			}, 1000 / 50);


			return null;
		};
		//matrix();
	}

}


Util.Objects["svganimation"] = new function() {

	this.init = function(div) {



		// ANIMATED SVG

		// counter - how many iterations
		page.svg_drawings = 0;

		//
		var svg_drawing = u.svg({
			"node":div,
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


		div.drawCircle = function(svg, cx, cy) {

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

		div.drawLine = function(svg, x1, y1) {
			u.bug("div.drawLine:" + x1 + ", " + y1);

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

//			var line = div.drawLine(svg_drawing, x1, y1, x2, y2);

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
		button.div = div;
		button.hovered = function() {
			
			if(!this.div.first_circle) {
				u.bug("first circle:" + x2);
				this.div.first_circle = this.div.drawCircle(svg_drawing, x2, y2);
			}
			else {
				u.bug("base line:");
				this.div.drawLine(svg_drawing, u.a.getInitialValue(this.div.first_circle, "cx"), u.a.getInitialValue(this.div.first_circle, "cy"));
			}

			// this.transitioned = svg_drawing._line_transitioned;
			// u.a.to(this, "all linear 50ms", {"x2":x2});
		}
		u.e.addEvent(button, "mouseover", button.hovered);

	}
}


// TODO - enable multiple transitions (perhaps isolated to u.a.to)
// will have consequences for all fallback implementations
// syntax like:

// u.a.transition(this, ["scale 0.2s ease-out", "opacity 0.3s ease-in 2s"], ["step_s2", "step_o2"]);
//
