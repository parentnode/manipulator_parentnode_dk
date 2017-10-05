<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

var iterations = 100;

function loopTest(id, div) {
	
	var i, result = 0;
	for(i = 0; i < iterations; i++) {
		result += u.o[id].run(div);
	}

	return result;
} 




Util.Objects["test_a"] = new function() {
	this.run = function(div) {

		u.nodeWithin(div.end_a, div.structure_a);
		u.nodeWithin(div.end_b, div.structure_a);
		u.nodeWithin(div.end_a, div.structure_b);
		u.nodeWithin(div.end_b, div.structure_b);
		u.nodeWithin(div.cross_a, div.structure_a);
		u.nodeWithin(div.cross_b, div.structure_a);
		u.nodeWithin(div.cross_a, div.structure_b);
		u.nodeWithin(div.cross_b, div.structure_b);
		u.nodeWithin(div.start_a, div.structure_a);
		u.nodeWithin(div.start_b, div.structure_a);
		u.nodeWithin(div.start_a, div.structure_b);
		u.nodeWithin(div.start_b, div.structure_b);

		return 1;
	}
}


Util.Objects["test_b"] = new function() {
	this.run = function(div) {

	}

}

Util.Objects["test_c"] = new function() {
	this.run = function(div) {

	}

}

Util.Objects["test_d"] = new function() {
	this.run = function(div) {

	}

}

Util.Objects["test_e"] = new function() {
	this.run = function(div) {


	}

}



Util.Objects["test"] = new function() {
	this.init = function(div) {
		var i, node;

		var injectinto = div;
		for(i = 0; i < 100; i++) {
			injectinto = u.ae(injectinto, "div", {"class":"a i"+i + (i%10 == 0 ? (" marker" + " "+u.randomString(8)) : "")});
		}
		div.structure_a = u.qs("div.a");
		div.end_a = u.qsa("div", div.structure_a)[98];
		div.cross_a = u.qsa("div.marker", div.structure_a)[6];
		div.start_a = u.qs("div.marker", div.structure_a);

		var injectinto = div;
		for(i = 0; i < 100; i++) {
			injectinto = u.ae(injectinto, "div", {"class":"b i"+i + (i%10 == 0 ? (" marker" + " "+u.randomString(8)) : "")});
		}
		div.structure_b = u.qs("div.b"); 
		div.end_b = u.qsa("div", div.structure_b)[98];
		div.cross_b = u.qsa("div.marker", div.structure_b)[6];
		div.start_b = u.qs("div.marker", div.structure_b);


		var t1 = new Date().getTime();

		var result = loopTest("test_a", div);

		var t2 = new Date().getTime();

		var result = loopTest("test_b", div);

		var t3 = new Date().getTime();

		var result = loopTest("test_c", div);

		var t4 = new Date().getTime();

		var result = loopTest("test_d", div);

		var t5 = new Date().getTime();

		var result = loopTest("test_e", div);

		var t6 = new Date().getTime();


		
		u.ae(div, "div", {"class":"test", "html":"identifier class selection ("+iterations+" loops): " + (t2-t1) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"N/A ("+iterations+" loops): " + (t3-t2) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"N/A ("+iterations+" loops): " + (t4-t3) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"N/A ("+iterations+" loops): " + (t5-t4) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"N/A ("+iterations+" loops): " + (t6-t5) + "ms"})
	}

}
</script>

<div class="scene">
	<h1>For loop test</h1>
	<p>Testing different scope detection methods (to figure out if one node is inside another)</p>

	<div class="tests i:test">
		
	</div>
</div>
<div class="comments"></div>
