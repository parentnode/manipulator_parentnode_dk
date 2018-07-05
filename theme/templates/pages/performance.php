<script type="text/javascript" src="/js/externals/jquery-1.8.2.min.js"></script>
<script type="text/javascript">

		// inject 1000 divs in .n4 .m, add class, attach click event and trigger event, remove class and add other class

		var test_divs = 1050;


		function testNative() {

			var start_time = new Date().getTime();

			var wrapper = document.querySelector(".scene div.native");
			wrapper.querySelector(".testzone").innerHTML = "";

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

			node = wrapper.appendChild(document.createElement("div"));
			node.className = "status";
			node.innerHTML = "Native JS done: " + ((new Date().getTime())-start_time) + "ms";

			// test ended
		}


		function testManipulator() {

			var start_time = new Date().getTime();

			var wrapper = u.qs(".scene div.manipulator");
			u.qs(".testzone", wrapper).innerHTML = "";

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

			node = u.ae(wrapper, "div", {"class":"status", "html":"Manipulator done: " + ((new Date().getTime())-start_time) + "ms"});

			// test ended
		}


		function testjQuery() {

			var start_time = new Date().getTime();

			var wrapper = $(".scene div.jquery");
			$(".testzone", wrapper).html("");

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

			node = document.createElement("div");
			$(node).appendTo(wrapper).addClass("status").html("jQuery done: " + ((new Date().getTime())-start_time) + "ms");

			// test ended
		}
	
	</script>

<style type="text/css">
	.native, .manipulator, .jquery {padding-bottom: 30px;}
	.m {overflow: hidden;}
	.m .start {width: 10px; height: 10px; margin: 1px; float: left; background: red;}
	.m .done {width: 10px; height: 10px; margin: 1px; float: left; background: green; border-radius: 5px;}
	.status {margin: 5px 50px; background: blue; color: #ffffff; font-size: 13px; padding: 5px; border-radius: 5px;}
	.testzone {padding: 0 50px 20px;}
</style>
	
<div class="scene speed">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Performance</h1>

		<dl class="info">
			<dt class="published_at">Date published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="author">Martin Kæstel Nielsen</dd>
		</dl>
		<div itemprop="image" content="<?= SITE_URL ?>/img/logo.png"></div>

		<div class="articlebody" itemprop="articleBody">

			<h2>Speed and performance test, comparing Native JavaScript, Manipulator and jQuery.</h2>
			<p>
				This test injects 5 divs, <em>div.n1-5</em>, each containing one <em>div.m</em>.
				Then 1050 new divs are injected into <span class="htmltag">div.n1 div.m</span>, with two classes 
				<em>start</em> and <em>box0-1049</em>, 
				A click event is added and triggered, which then replaces class <em>start</em> with <em>done</em>.
				Finally the processing time in milliseconds is injected into a new div in the end of the list.
			</p>
			<p>
				Querying Nodes, manipulating classes, injecting HTML and adding events are probably the most
				reoccuring actions, handled by a library. These actions will have a considerable impact on
				how a library performs.
			</p>

			<hr />

			<div class="native">
				<h1>Native JavaScript</h1>

				<ul class="actions">
					<li class="starttest"><a class="button primary" onclick="testNative()">Do test</a></li>
				</ul>

				<div class="testzone"></div>
			</div>

			<div class="manipulator">
				<h1>Manipulator</h1>

				<ul class="actions">
					<li class="starttest"><a class="button primary" onclick="testManipulator()">Do test</a></li>
				</ul>

				<div class="testzone"></div>
			</div>

			<div class="jquery">
				<h1>jQuery</h1>

				<ul class="actions">
					<li class="starttest"><a class="button primary" onclick="testjQuery()">Do test</a></li>
				</ul>

				<div class="testzone"></div>
			</div>
		</div>
	</div>
</div>
