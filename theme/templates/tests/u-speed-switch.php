<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

var iterations = 10000;
var object_count = 1000;
var objects = [];



var test1, test3, test2;
test1 = test2 || false;
test2 = test1 || null;
test3 = test2 || "fisk";

test1 = false || "false is false";
test2 = null || "null is false";
test3 = undefined || "undefined is false";
test4 = 0 || "0 is false";
test5 = "" || "\"\" is false";
test6 = "string" || "\"string\" is false";

console.log("test1:" + test1);
console.log("test2:" + test2);
console.log("test3:" + test3);
console.log("test4:" + test4);
console.log("test5:" + test5);
console.log("test6:" + test6);



// TODO: REST IS COPIED DIRECTLY FROM FORLOOP-TEST

Util.Modules["test_a"] = new function() {
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


Util.Modules["test_b"] = new function() {
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

Util.Modules["test_c"] = new function() {
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

Util.Modules["test_d"] = new function() {
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

Util.Modules["test_e"] = new function() {
	this.run = function() {

		var i, node, test = 0;
		for(node in objects) {

			if(node.a != node.b) {
				test += Math.pow(33, 3) * Math.sqrt(777)/10000;
			}
			
		}

		return test;
	}

}

Util.Modules["test_f"] = new function() {
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


function loopTest(id) {
	
	var i, result = 0;
	for(i = 0; i < iterations; i++) {
		result += u.o[id].run();
	}

	return result;
} 


Util.Modules["test"] = new function() {
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


		
		u.ae(div, "div", {"class":"test", "html":"Auto assignment ("+object_count+" objects, "+iterations+" loops): " + (t2-t1) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"Manual assignment ("+object_count+" objects, "+iterations+" loops): " + (t3-t2) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"No assignment ("+object_count+" objects, "+iterations+" loops): " + (t4-t3) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"No assignment, but lenght assignment ("+object_count+" objects, "+iterations+" loops): " + (t5-t4) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"for ... in ("+object_count+" objects, "+iterations+" loops): " + (t6-t5) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"all var in for ("+object_count+" objects, "+iterations+" loops): " + (t7-t6) + "ms"})
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
