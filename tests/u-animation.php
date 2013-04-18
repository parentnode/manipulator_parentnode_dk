<? $page_title = "Animation tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene {position: relative; height: 400px;}
	.scene div {margin: 0 0 5px;}
	.block {display: inline-block; vertical-align: top; width: 50px; height: 50px; background: red; margin-right: 10px;}

	.bgpos {background-image: url(/documentation/img/test.jpg); background-position: 0 0;}

	.linear {top: 0;}
	.easeIn {top: 55px;}
	.easeOut {top: 110px;}
	.easeInOut {top: 165px;}

	.correct {background: green;}
	.error {background: red;}
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

		}

	}
</script>

<div class="scene i:test">
	<h2>Animation - module in development</h2>

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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>