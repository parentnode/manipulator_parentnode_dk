<?php
$this->headerIncludes(array(
	"/js/tests/m-events.js",
	"/css/tests/s-events.css"
));
?>

<div class="scene i:scene">
	<h1>Events</h1>

	<div class="tests i:events">

		<h2>Simple click test (right/left click)</h2>
		<p>
			Click and rightclick the purple box – a small panel will occur with info, indicating how the 
			interaction was registered. Note: all interaction starts with one inputStarted, followed by one clicked/rightclicked. 
			If ONE interaction causes TWO click events to occur, you have found an error.
		</p>
		<p>
			Extended test: Push mouse button down on the purple box, and then move mouse outside the 
			purple area before letting go of the button. That should effectively cancel the click/rightclick event.
		</p>
		<div class="click_me">click me</div>

		<hr />

		<h2>Nested click and hold events</h2>
		<p>
			Test is based on a set of nested divs, each with it's own click event. 
			Click on each div and track the events outputted to the screen. No click, hold or dblclick
			should envoke anything except the exact action. No bubbling can occur.
		</p>
		<div class="level1"><span>Level 1, click-event</span>
			<div class="level2"><span>Level 2, click-, hold-, dblclick-event</span>
				<div class="level3"><span>Level 3, click-event</span>
					<div class="level4"><span>Level 4, click-event</span></div>
				</div>
			</div>
		</div>

		<hr />

		<h2>Hover and extended click events</h2>
		<p>
			Over, out, inputStarted, click, moved, clickCancelled. MouseOut has a delay of 1000ms.
		</p>
		<div class="testlink">
			<a href="#">link hover</a>
		</div>
	</div>

</div>
<div class="comments"></div>
