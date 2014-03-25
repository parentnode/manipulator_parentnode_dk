<script type="text/javascript" src="/js/externals/jquery-1.8.2.min.js"></script>
<script type="text/javascript">

		// inject 1000 divs in .n4 .m, add class, attach click event and trigger event, remove class and add other class

		var test_divs = 1050;


		function testNative() {
			var start_time = new Date().getTime();
			var wrapper = document.querySelector(".scene div.native");

			var i, node;
			for(i = 0; i < 5; i++) {
				node = wrapper.querySelector(".testzone").appendChild(document.createElement("div"));
				node.className = "n"+i;
				node = node.appendChild(document.createElement("div"));
				node.className = "m";
			}

			for(i = 0; i < test_divs; i++) {
				node = wrapper.querySelector(".n1 .m").appendChild(document.createElement("div"));
				node.className = "start box"+i;
				node.onclick = function() {
					this.className = this.className.replace("start", "done");
				}
				node.click();
			}

			var end_time = new Date().getTime();
			node = wrapper.querySelector(".n4 .m").appendChild(document.createElement("div"));
			node.className = "status";
			node.innerHTML = "Native JS done: " + (end_time-start_time) + "ms";
		}


		function testManipulator() {
			var start_time = new Date().getTime();
			var wrapper = u.qs(".scene div.manipulator");

			var i, node;
			for(i = 0; i < 5; i++) {
				u.ae(u.ae(u.qs(".testzone", wrapper), "div", {"class":"n"+i}), "div", {"class":"m"});
			}
			for(i = 0; i < test_divs; i++) {
				node = u.ae(u.qs(".n1 .m", wrapper), "div", {"class":"start box"+i});
				u.e.click(node);
				node.clicked = function(event) {
					u.tc(this, "start", "done", false);
				}
				node.clicked();
			}

			var end_time = new Date().getTime();
			node = u.ae(u.qs(".n4 .m", wrapper), "div", {"class":"status", "html":"Manipulator done: " + (end_time-start_time) + "ms"});
		}


		function testjQuery() {
			var start_time = new Date().getTime();
			var wrapper = $(".scene div.jquery");

			var i, node;
			for(i = 0; i < 5; i++) {
				$(".testzone", wrapper).append('<div class="n'+i+'"><div class="m"></div></div>');
			}

			for(i = 0; i < test_divs; i++) {
				node = document.createElement("div");
				node.clicked = function() {
					$(this).removeClass("start");
					$(this).addClass("done");
				}
				$(node).appendTo($(".n1 .m", wrapper)).addClass("start box"+i).bind("click", node.clicked);
				$(node).trigger("click");
			}

			var end_time = new Date().getTime();
			node = document.createElement("div");
			$(node).appendTo($(".n4 .m", wrapper)).addClass("status").html("jQuery done: " + (end_time-start_time) + "ms");
		}
	
	</script>

<style type="text/css">
	.m {overflow: hidden;}
	.m .start {width: 10px; height: 12px; margin: 1px; float: left; background: red;}
	.m .done {width: 10px; height: 12px; margin: 1px; float: left; background: green;}
	.m .status {height: 12px; margin: 1px; float: left; background: blue; color: #ffffff; font-size: 10px; padding: 0 5px;}
</style>
	
<div class="scene speed">

	<h1>Speed and performance test, comparing Native JS, Manipulator and jQuery</h1>
	<p>
		This test injects 5 divs, <em>div.n1-5</em>, each containing one <em>div.m</em>.
		The 1050 new divs are injected into <span class="htmltag">div.n1 div.m</span>, with two classes 
		<em>start</em> and <em>box0-1049</em>, 
		A click event is added and triggered, which then replaces class <em>start</em> with <em>done</em>.
		Finally the processing time in milliseconds is injected into a new div in the end of the list.
	</p>
	<p>
		Querying Nodes, manipulating classes, injecting HTML and adding events are probably the most
		reoccuring actions, handled by a library. These actions will have a considerable impact on
		how a library performs.
	</p>


	<div class="native">
		<h1>Native JS speed test</h1>
		<div class="starttest" onclick="testNative()">Do test</div>

		<div class="testzone"></div>
	</div>

	<div class="manipulator">
		<h1>Manipulator speed test</h1>
		<div class="starttest" onclick="testManipulator()">Do test</div>

		<div class="testzone"></div>
	</div>

	<div class="jquery">
		<h1>jQuery speed test</h1>
		<div class="starttest" onclick="testjQuery()">Do test</div>

		<div class="testzone"></div>
	</div>

</div>
