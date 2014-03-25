<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

var a = 0;
var b = 1;


var i2 = 0;
var speed = {
	test2: function(test) {
		if(a == b || Math.pow(33, 3) > Math.sqrt(777)) {
			return i2++;
		}
	}
}

var i1 = 0;
function test1() {
	if(a == b || Math.pow(33, 3) > Math.sqrt(777)) {
		return i1++;
		
	}
}

var i3 = 0;
var test3 = function() {
	if(a == b || Math.pow(33, 3) > Math.sqrt(777)) {
		return i3++;
	}
}

	Util.Objects["test"] = new function() {

		this.iterations = 100000;

		this.init = function(scene) {
			var i;

			var t1 = new Date().getTime();

			for(i = 0; i < this.iterations; i++) {
				test1();
			}

			var t2 = new Date().getTime();

			for(i = 0; i < this.iterations; i++) {
				speed.test2();
			}

			var t3 = new Date().getTime();

			for(i = 0; i < this.iterations; i++) {
				test3();
			}

			var t4 = new Date().getTime();

			u.bug("1:" + (t2-t1))
			u.bug("2:" + (t3-t2))
			u.bug("3:" + (t4-t3))
		}



	}
</script>

<div class="scene i:test">
	<h1>Functions speed test</h1>
	<p>Testing different types of function declaration</p>


</div>
<div class="comments"></div>
