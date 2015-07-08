<style type="text/css">
	.scene {position: relative;}


	.scene .correct,
	.scene .error {margin: 0 0 5px; padding: 0 10px;}

	.scene .correct {background: green !important; color: #ffffff;}
	.scene .error {background: red !important;}



	/* CALLBACKS */
	.scene div.callbacks {padding: 20px 0; border-bottom: 1px solid #888888; margin: 20px 0 30px;}
	.scene div.callbacks .e1,
	.scene div.callbacks .e2 {padding: 0 50px 10px;}



	/* BASICS */
	.scene div.basics {padding: 20px 0; border-bottom: 1px solid #888888; margin: 20px 0 30px;}
	.scene div.basics .block {display: inline-block; vertical-align: top; width: 50px; height: 50px; background: #ff0000; margin: 0 10px 10px 0; padding: 0; font-size: 12px; color: #ffffff;
		*display: block;
	}
	.scene div.basics .block.done {background-color: green;}
	.scene div.basics .block.bgpos {background-image: url(/img/test-720x576.jpg); background-position: 0 0;}

</style>

<script type="text/javascript">


Util.Objects["basics1"] = new function() {
	this.init = function(basics_div) {
		u.bug("init basics");

		basics_div.div_translate = u.qs(".block.translate", basics_div);
//		u.a.to(basics_div.div_translate, "all 1s ease-in", {"left":"600px", "top": "-20px"});

//		u.a.to(basics_div.div_translate, "all 1s ease-in", {"transform: translateX":600, "transform: translateY": -20});
		basics_div.div_translate.transitioned = function(event) {this.innerHTML += ": DONE"; u.ac(this, "done");}

	}
}

Util.Objects["callbacks1"] = new function() {
	this.init = function(callback_div) {
		u.bug("init callbacks");

		callback_div.h2 = u.qs("h2", callback_div);
		callback_div.e1 = u.qs(".e1", callback_div);
		callback_div.e2 = u.qs(".e2", callback_div);

	}
}




Util.Objects["svgs"] = new function() {
	this.init = function(svgs_div) {
		u.bug("init svgs");

		svgs_div.svg_wrapper = u.qs(".svg", svgs_div);

		svgs_div.svg = u.svg({
			"node":svgs_div.svg_wrapper,
			"width":300,
			"height":300,
			"shapes":[
				{
					"type": "circle",
					"class": "circle",
					"cx": 110,
					"cy": 110,
					"r": 100,
					"fill": "#00ff00"
				},
				{
					"type": "ellipse",
					"class": "ellipse",
					"cx": 110,
					"cy": 110,
					"rx": 55,
					"ry": 100,
					"fill": "#000000"
				},
				{
					"type": "path",
					"class": "path",
					"d": "M50,60 180,60 50,180",
					"stroke": "#ffff00",
					"stroke-width":2,
					"fill":"none"
				},
				{
					"type": "line",
					"class": "line",
					"x1": "50",
					"y1": "50",
					"x2": "180",
					"y2": "50",
					"stroke": "#00ffff"
				}
			]
		});
		
		var circle = u.qs("circle", svgs_div.svg);
		
		circle.transitioned = function() {
			u.bug("mini")
			u.a.to(circle, "all 15s linear", {"r":300});
		}
		u.a.to(circle, "all 15s linear", {"r":10});

	}
}


</script>

<div class="scene">
	<h1>Animation to</h1>

	<!--div class="basics i:basics">
		<h2>Basics</h2>
		<p>For testing basic CSS3 transforms</p>
		<div class="block translate">translate</div>
		<div class="block rotate">rotate</div>
		<div class="block scale">scale</div>
		<div class="block opacity">opacity</div>
		<div class="block width">width</div>
		<div class="block height">height</div>
		<div class="block bgpos">bgpos</div>
		<div class="block bgcolor">bgcolor</div>
	</div-->

	<!--div class="callbacks i:callbacks">
		<h2>Callbacks</h2>
		<p>For testing callback loops</p>
		<div class="e1">chained callback</div>
		<div class="e2">chained callback with multiple transitions (not finished)</div>
	</div-->

	<div class="svgs i:svgs">
		<h2>SVGs</h2>
		<p>For testing svgs transitions</p>
		<div class="svg"></div>
	</div>

</div>
<div class="comments"></div>
