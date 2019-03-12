<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

var iterations = 10000;
var object_count = 1000;
var objects = [];


Util.Objects["test_a"] = new function() {
	this.run = function() {

		var i, node, test = 0;
		for(i = 0; node = objects[i]; i++) {

			if(node.a != node.b) {
				test += (Math.pow(33, 3) * Math.sqrt(777)) / 10000;
			}

		}

		return test;
	}

}


Util.Objects["test_b"] = new function() {
	this.run = function() {

		var i, node, test = 0;
		for(i = 0; i < objects.length; i++) {
			node = objects[i];

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}
			
		}

		return test;
	}

}

Util.Objects["test_c"] = new function() {
	this.run = function() {

		var i, test = 0;
		for(i = 0; i < objects.length; i++) {

			if(objects[i].a != objects[i].b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}
			
		}

		return test;
	}

}

Util.Objects["test_d"] = new function() {
	this.run = function() {

		var i, l = objects.length; test = 0;
		for(i = 0; i < l; i++) {

			if(objects[i].a != objects[i].b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}
			
		}

		return test;
	}

}

Util.Objects["test_e"] = new function() {
	this.run = function() {

		var i, node, test = 0;
		for(i in objects) {

			node = objects[i];

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}
			
		}

		return test;
	}

}

Util.Objects["test_f"] = new function() {
	this.run = function() {

		var test = 0;
		for(var i = 0, l = objects.length; i < l; i++) {

			var node = objects[i];

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}

		}

		return test;
	}

}

Util.Objects["test_g"] = new function() {
	this.run = function() {

		var test = 0;
		objects.forEach(function(node) {

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}

			
		});

		return test;
	}

}

Util.Objects["test_h"] = new function() {
	this.run = function() {

		var test = 0;
		var i = 0;
		while(node = objects[i++]) {

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}

		};

		return test;
	}

}



function loopTest(id) {
	
	var i, result = 0;
	for(i = 0; i < iterations; i++) {
		result += u.o[id].run();
	}
	console.log("id:" + id + ", " + result);
	return result;
} 


Util.Objects["test"] = new function() {
	this.init = function(div) {
		var i, node;

		// prepare test object
		for(i = 0; i < object_count; i++) {
			objects.push({"a":1, "b":2});
		}
		


		var t1 = new Date().getTime();

		var result = loopTest("test_a");

		var t2 = new Date().getTime();

		var result = loopTest("test_b");

		var t3 = new Date().getTime();

		var result = loopTest("test_c");

		var t4 = new Date().getTime();

		var result = loopTest("test_d");

		var t5 = new Date().getTime();

		var result = loopTest("test_e");

		var t6 = new Date().getTime();

		var result = loopTest("test_f");

		var t7 = new Date().getTime();

		var result = loopTest("test_g");

		var t8 = new Date().getTime();

		var result = loopTest("test_h");

		var t9 = new Date().getTime();


		
		u.ae(div, "div", {"class":"test", "html":"Auto assignment ("+object_count+" objects, "+iterations+" loops): " + (t2-t1) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"Manual assignment ("+object_count+" objects, "+iterations+" loops): " + (t3-t2) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"No assignment ("+object_count+" objects, "+iterations+" loops): " + (t4-t3) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"No assignment, but lenght assignment ("+object_count+" objects, "+iterations+" loops): " + (t5-t4) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"for ... in ("+object_count+" objects, "+iterations+" loops): " + (t6-t5) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"all var in for ("+object_count+" objects, "+iterations+" loops): " + (t7-t6) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"foreach ("+object_count+" objects, "+iterations+" loops): " + (t8-t7) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"while ("+object_count+" objects, "+iterations+" loops): " + (t9-t8) + "ms"})

	}

}
</script>

<div class="scene">
	<h1>For loop test</h1>
	<p>Testing different types of for loop declaration</p>

	<div class="tests i:test">
		
	</div>
</div>
<div class="comments"></div>
