<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}


	div.demo {
		height: 20%;
		width: 20%;
		background: red;
		border: 1px solid green;

		transform: translate(50px, 50px) scale(2);
	}

</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {
			var div = u.qs("div.demo");

			u.tween(div, {
				duration: 100, vars:[
					{"height":200},
					{"opacity":0.5},
					{"top":200},
					{"float-edge":true},
					{"transform":"scale(1) translate(50px, 50px)"},
				]
			});

			console.log(div);

			var obj = {};
			u.tween(obj, {
				duration: 100, vars:[
					{"height":200},
					{"opacity":0.5},
					{"top":200},
				]
			});
			
			console.log(obj);
		}
	}

</script>

<div class="scene i:test">
	<h1>Tween</h1>

	<div class="demo"></div>

</div>
<div class="comments"></div>
