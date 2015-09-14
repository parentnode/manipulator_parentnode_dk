<style type="text/css">
	.level1 {width: 720px; height: 450px; position: relative; background: red;}
	.level2 {width: 420px; height: 230px; position: absolute; left: 100px; top: 50px; padding: 50px 50px; background: green;}
	.level3 {width: 220px; height: 120px; padding: 50px 100px; background: blue;}
	.level4 {width: 120px; height: 30px; padding: 30px 50px; background: yellow;}
	.testlink {width: 100px; height: 50px; background: orange; position: absolute; right: 0; top: 0;}
	.testlink a {height: 50px; display: block; text-indent: -9999px;}
	.testlink.over {background: blue;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			u.bug_force = true;
			u.bug_console_only = false;

			var level1 = u.qs(".level1");
			var level2 = u.qs(".level2");
			var level3 = u.qs(".level3");
			var level4 = u.qs(".level4");

			var link = u.qs(".testlink");

			u.e.hover(link, {"delay":1000});
			link.over = function(event) {
				u.ac(this, "over");
				u.bug("link over");
			}
			link.out = function(event) {
				u.rc(this, "over");
				u.bug("link out:" + event);
			}

			u.ce(link);
			link.clicked = function(event) {
				u.bug("link clicked");
			}
			link.moved = function(event) {
				u.bug("link moved:" + this.current_x + ", " + this.current_xps);
			}
			link.inputStarted = function(event) {
				u.bug("link inputStarted");
			}
			link.clickCancelled = function(event) {
				u.bug("link clickCancelled");
			}


			u.e.click(level1);
			level1.clicked = function(event) {
				u.bug("level1 clicked");
			}

			u.e.hold(level2);
			level2.held = function(event) {
				u.bug("level2 held");
				// reset events in children, because hold can be invoked from any child
				u.e.resetNestedEvents(u.qs(".level4"));
			}

			u.e.dblclick(level2);
			level2.dblclicked = function(event) {
				u.bug("level2 dblclicked");
			}

			u.e.click(level2);
			level2.clicked = function(event) {
				u.bug("level2 clicked");
			}

			u.e.click(level3);
			level3.clicked = function(event) {
				u.bug("level3 clicked");
			}

			u.e.click(level4);
			level4.clicked = function(event) {
				u.bug("level4 clicked");
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>Events</h1>
	<p>
		Test is based on a set of nested divs, each with it's own click event. 
		Click on each div and track the events outputted to the screen. No click, hold or dblclick
		should envoke anything except the exact action. No bubbling can occur.
	</p>


	<div class="level1">Level 1, click-event
		<div class="level2">Level 2, click-, hold-, dblclick-event
			<div class="level3">Level 3, click-even
				<div class="level4">Level 4, click-event</div>
			</div>
		</div>
	</div>

	<div class="testlink">
		<a href="#">link hover</a>
	</div>


</div>
<div class="comments"></div>
