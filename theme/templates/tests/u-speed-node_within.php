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


u.nodeWithin_1 = u.nw = function(node, scope) {

	if(scope != node) {

		var node_key = u.randomString(8);
	//	var scope_key = u.randomString(8);
		node.classList.add(node_key);
		scope.classList.add(node_key);
		// u.ac(node, node_key);
		// u.ac(scope, scope_key);

		if(u.qs("."+node_key+" ."+node_key)) {

			node.classList.remove(node_key);
			scope.classList.remove(node_key);
			// u.rc(node, node_key);
			// u.rc(scope, scope_key);

			return true;
		}

		node.classList.remove(node_key);
		scope.classList.remove(node_key);

	}
	// u.rc(node, node_key);
	// u.rc(scope, scope_key);
	return false;
}


u.nodeWithin_2 = function(node, scope) {
	if(scope != node) {
		var nodes = scope.getElementsByTagName("*");
		var i;
		for(i = 0; i < nodes.length; i++) {
			if(nodes[i] == node) {
				return true;
			}
		}
		return false;
	}
}

u.nodeWithin_3 = function(node, scope) {
	if(scope != node) {
		var nodes = u.qsa("*", scope);
		var i;
		for(i = 0; i < nodes.length; i++) {
			if(nodes[i] == node) {
				return true;
			}
		}
		return false;
	}
}

u.nodeWithin_4 = function(node, scope) {
	if(scope != node) {
		while(node != null) {
			if(node == scope) {
				return true;
			}
			node = node.parentNode;
		}
	}
	return false;
}
u.nodeWithin_5 = function(node, scope) {
	if(scope != node) {
		if(scope.contains(node)) {
			return true
		}
	}
	return false;
}


Util.Objects["test_a"] = new function() {
	this.run = function(div) {

		if(
			(
				u.nodeWithin_1(div.end_a, div.structure_a) &&
				u.nodeWithin_1(div.end_b, div.structure_b) &&
				u.nodeWithin_1(div.cross_a, div.structure_a) &&
				u.nodeWithin_1(div.cross_b, div.structure_b) &&
				u.nodeWithin_1(div.start_a, div.structure_a) &&
				u.nodeWithin_1(div.start_b, div.structure_b) &&
				u.nodeWithin_1(div.cross_b, div.start_b) &&
				u.nodeWithin_1(div.end_a, div.cross_a)
			)
			&&
			(
				!u.nodeWithin_1(div.end_b, div.structure_a) &&
				!u.nodeWithin_1(div.end_a, div.structure_b) &&
				!u.nodeWithin_1(div.cross_b, div.structure_a) &&
				!u.nodeWithin_1(div.cross_a, div.structure_b) &&
				!u.nodeWithin_1(div.start_b, div.structure_a) &&
				!u.nodeWithin_1(div.start_a, div.structure_b) &&
				!u.nodeWithin_1(div.cross_a, div.end_b) &&
				!u.nodeWithin_1(div.start_b, div.cross_b) &&
				!u.nodeWithin_1(div.start_a, div.cross_a)
			)
		) {
			return 1;
		}

		return 0;

	}
}

Util.Objects["test_b"] = new function() {
	this.run = function(div) {

		if(
			(
				u.nodeWithin_2(div.end_a, div.structure_a) &&
				u.nodeWithin_2(div.end_b, div.structure_b) &&
				u.nodeWithin_2(div.cross_a, div.structure_a) &&
				u.nodeWithin_2(div.cross_b, div.structure_b) &&
				u.nodeWithin_2(div.start_a, div.structure_a) &&
				u.nodeWithin_2(div.start_b, div.structure_b) &&
				u.nodeWithin_2(div.cross_b, div.start_b) &&
				u.nodeWithin_2(div.end_a, div.cross_a)
			)
			&&
			(
				!u.nodeWithin_2(div.end_b, div.structure_a) &&
				!u.nodeWithin_2(div.end_a, div.structure_b) &&
				!u.nodeWithin_2(div.cross_b, div.structure_a) &&
				!u.nodeWithin_2(div.cross_a, div.structure_b) &&
				!u.nodeWithin_2(div.start_b, div.structure_a) &&
				!u.nodeWithin_2(div.start_a, div.structure_b) &&
				!u.nodeWithin_2(div.cross_a, div.end_b) &&
				!u.nodeWithin_2(div.start_b, div.cross_b) &&
				!u.nodeWithin_2(div.start_a, div.cross_a)
			)
		) {
			return 1;
		}

		return 0;
		
	}
}

Util.Objects["test_c"] = new function() {
	this.run = function(div) {

		if(
			(
				u.nodeWithin_3(div.end_a, div.structure_a) &&
				u.nodeWithin_3(div.end_b, div.structure_b) &&
				u.nodeWithin_3(div.cross_a, div.structure_a) &&
				u.nodeWithin_3(div.cross_b, div.structure_b) &&
				u.nodeWithin_3(div.start_a, div.structure_a) &&
				u.nodeWithin_3(div.start_b, div.structure_b) &&
				u.nodeWithin_3(div.cross_b, div.start_b) &&
				u.nodeWithin_3(div.end_a, div.cross_a)
			)
			&&
			(
				!u.nodeWithin_3(div.end_b, div.structure_a) &&
				!u.nodeWithin_3(div.end_a, div.structure_b) &&
				!u.nodeWithin_3(div.cross_b, div.structure_a) &&
				!u.nodeWithin_3(div.cross_a, div.structure_b) &&
				!u.nodeWithin_3(div.start_b, div.structure_a) &&
				!u.nodeWithin_3(div.start_a, div.structure_b) &&
				!u.nodeWithin_3(div.cross_a, div.end_b) &&
				!u.nodeWithin_3(div.start_b, div.cross_b) &&
				!u.nodeWithin_3(div.start_a, div.cross_a)
			)
		) {
			return 1;
		}

		return 0;

	}
}

Util.Objects["test_d"] = new function() {
	this.run = function(div) {

		if(
			(
				u.nodeWithin_4(div.end_a, div.structure_a) &&
				u.nodeWithin_4(div.end_b, div.structure_b) &&
				u.nodeWithin_4(div.cross_a, div.structure_a) &&
				u.nodeWithin_4(div.cross_b, div.structure_b) &&
				u.nodeWithin_4(div.start_a, div.structure_a) &&
				u.nodeWithin_4(div.start_b, div.structure_b) &&
				u.nodeWithin_4(div.cross_b, div.start_b) &&
				u.nodeWithin_4(div.end_a, div.cross_a)
			)
			&&
			(
				!u.nodeWithin_4(div.end_b, div.structure_a) &&
				!u.nodeWithin_4(div.end_a, div.structure_b) &&
				!u.nodeWithin_4(div.cross_b, div.structure_a) &&
				!u.nodeWithin_4(div.cross_a, div.structure_b) &&
				!u.nodeWithin_4(div.start_b, div.structure_a) &&
				!u.nodeWithin_4(div.start_a, div.structure_b) &&
				!u.nodeWithin_4(div.cross_a, div.end_b) &&
				!u.nodeWithin_4(div.start_b, div.cross_b) &&
				!u.nodeWithin_4(div.start_a, div.cross_a)
			)
		) {
			return 1;
		}

		return 0;

	}
}

Util.Objects["test_e"] = new function() {
	this.run = function(div) {

		if(
			(
				u.nodeWithin_5(div.end_a, div.structure_a) &&
				u.nodeWithin_5(div.end_b, div.structure_b) &&
				u.nodeWithin_5(div.cross_a, div.structure_a) &&
				u.nodeWithin_5(div.cross_b, div.structure_b) &&
				u.nodeWithin_5(div.start_a, div.structure_a) &&
				u.nodeWithin_5(div.start_b, div.structure_b) &&
				u.nodeWithin_5(div.cross_b, div.start_b) &&
				u.nodeWithin_5(div.end_a, div.cross_a)
			)
			&&
			(
				!u.nodeWithin_5(div.end_b, div.structure_a) &&
				!u.nodeWithin_5(div.end_a, div.structure_b) &&
				!u.nodeWithin_5(div.cross_b, div.structure_a) &&
				!u.nodeWithin_5(div.cross_a, div.structure_b) &&
				!u.nodeWithin_5(div.start_b, div.structure_a) &&
				!u.nodeWithin_5(div.start_a, div.structure_b) &&
				!u.nodeWithin_5(div.cross_a, div.end_b) &&
				!u.nodeWithin_5(div.start_b, div.cross_b) &&
				!u.nodeWithin_5(div.start_a, div.cross_a)
			)
		) {
			return 1;
		}

		return 0;

	}
}



Util.Objects["test"] = new function() {
	this.init = function(div) {
		var i, node;

		var injectinto = div;
		for(i = 0; i < 500; i++) {
			injectinto = u.ae(injectinto, "div", {"class":"a i"+i + (i%10 == 0 ? (" marker" + " "+u.randomString(8)) : "")});
		}
		div.structure_a = u.qs("div.a");
		div.end_a = u.qsa("div", div.structure_a)[498];
		div.cross_a = u.qsa("div.marker", div.structure_a)[25];
		div.start_a = u.qs("div.marker", div.structure_a);

		var injectinto = div;
		for(i = 0; i < 1000; i++) {
			injectinto = u.ae(injectinto, "div", {"class":"b i"+i + (i%10 == 0 ? (" marker" + " "+u.randomString(8)) : "")});
		}
		div.structure_b = u.qs("div.b"); 
		div.end_b = u.qsa("div", div.structure_b)[498];
		div.cross_b = u.qsa("div.marker", div.structure_b)[25];
		div.start_b = u.qs("div.marker", div.structure_b);


		var t1 = new Date().getTime();

		var result1 = loopTest("test_a", div);

		var t2 = new Date().getTime();

		var result2 = loopTest("test_b", div);

		var t3 = new Date().getTime();

		var result3 = loopTest("test_c", div);

		var t4 = new Date().getTime();

		var result4 = loopTest("test_d", div);

		var t5 = new Date().getTime();

		var result5 = loopTest("test_e", div);

		var t6 = new Date().getTime();

		u.bug("::" + document.body.contains(document.body));

		
		u.ae(div, "div", {"class":"test", "html":"identifier class selection ("+iterations+" loops, result: "+result1+"): " + (t2-t1) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"getElementsByTagName ("+iterations+" loops, result: "+result2+"): " + (t3-t2) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"u.qsa ("+iterations+" loops, result: "+result3+"): " + (t4-t3) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"while parent ("+iterations+" loops, result: "+result4+"): " + (t5-t4) + "ms"})
		u.ae(div, "div", {"class":"test", "html":"Node.contains (new native function) ("+iterations+" loops, result: "+result5+"): " + (t6-t5) + "ms"})
	}

}
</script>

<div class="scene">
	<h1>u.nodeWithin test</h1>
	<p>Testing different scope detection methods (to figure out if one node is inside another)</p>

	<div class="tests i:test">
		
	</div>
</div>
<div class="comments"></div>
