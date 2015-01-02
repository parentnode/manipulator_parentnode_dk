
<script type="text/javascript" src="/js/externals/sylvester.js"></script>
<style type="text/css">
	.scene {position: relative; height: 1000px;}
	.scene .block {margin: 0 0 5px;}
	.block {display: inline-block; vertical-align: top; width: 50px; height: 50px; background: #ff0000; margin-right: 10px;
		*display: block;
	}


	.aniframe {position: relative;}

	.bgpos {background-image: url(/img/test-720x576.jpg); background-position: 0 0;}

	.linear {top: 0;}
	.easeIn {top: 55px;}
	.easeOut {top: 110px;}
	.easeInOut {top: 165px;}

	.correct {background: green;}
	.error {background: red;}

	/* Border stuff */
	.scene .border {width: 200px; height: 0px; background: grey; margin-bottom:100px; position: relative;
		border-right:3px solid #000;
		border-left:3px solid #000;
	}
	#content .scene .border span {position: absolute; width:0px; height: 3px; display: none;}
	#content .scene .border span.one {display: block; width: 0px; left:50%; background-color:#000; position: absolute;}
	#content .scene .border span.three {bottom: 0; left: 0; background-color:#000; width:0;}
	#content .scene .border span.four {bottom: 0; right: 0; background-color:#000; width:0;}
	#content .scene .border h1 {color:#000; font-size:24px; font-family: Helvetica, Arial, Verdana; text-align:center; position:absolute; padding:100px 64px 10px 64px; display:none;}

	/* Matrix stuff */
	.death_star {height:400px; position: relative; display: block; border:1px solid;}
	.death_star #darth_vader {width:200px; height:200px; background:green; }
</style>

<script type="text/javascript">
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

	Util.Objects["1test"] = new function() {
		this.init = function(scene) {

//		alert("segment:" + u.segment());
//			alert("test")
			var div;

			div = u.qs(".block.translate", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.translate(div, 200, 200);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.rotate", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.rotate(div, 45);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.scale", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.scale(div, 1.5);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.opacity", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.setOpacity(div, .5);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.width", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.setWidth(div, 100);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.height", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.setHeight(div, 25);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.bgpos", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.setBgPos(div, -200, -100);
			div.transitioned = function(event) {this.innerHTML += ": DONE";}

			div = u.qs(".block.bgcolor", scene);
			u.a.transition(div, "all 1s ease-in");
			u.a.setBgColor(div, "#0000ff");
			div.transitioned = function(event) {this.innerHTML += ": DONE";}


			/* 
			Animate borders of div 

			<----- ----->
			|			|
			|			|
			-----> <-----
			
			*/
			var div_border = u.qs(".border", scene);
			div_border.span1 = u.qs(".one", div_border);
			div_border.span3 = u.qs(".three", div_border);
			div_border.span4 = u.qs(".four", div_border);
			div_border.h1 = u.qs("h1", div_border);

			// When creating span's dynamicly the animations dosen't kick start. fix it.
			//div_border.span1 = u.ae(div_border, "span", {"class":"one"});
			//div_border.span3 = u.ae(div_border, "span", {"class":"three"});
			//div_border.span4 = u.ae(div_border, "span", {"class":"four"});

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
			//var node = u.qs("#darth_vader", scene);
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

			var node = u.qs("#darth_vader", scene);
			

			
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
</script>

<div class="scene i:test">
	<h1>Animation</h1>

	<div class="aniframe">Aniframetest</div>

	<!--div class="death_star">
		<div id="darth_vader"></div>
	</div-->
	<div class="border">
		<span class="one"></span>
		<span class="three"></span>
		<span class="four"></span>
		<h1>Button</h1>
	</div>

	<div class="block translate">translate</div>
	<div class="block rotate">rotate</div>
	<div class="block scale">scale</div>

	<div class="block opacity">opacity</div>
	<div class="block width">width</div>
	<div class="block height">height</div>

	<div class="block bgpos">bgpos</div>

	<div class="block bgcolor">bgcolor</div>

	<!--div class="block linear"></div>
	<div class="block easeIn"></div>
	<div class="block easeOut"></div>
	<div class="block easeInOut"></div-->

</div>
<div class="comments">
	
</div>
