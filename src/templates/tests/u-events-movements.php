<?php
$this->headerIncludes(array(
	"/js/tests/i-events-movements.js",
	"/css/tests/s-events-movements.css"
));
?>

<div class="scene i:scene">
	<h1>Events, movements</h1>

	<div class="tests i:drag1 drag drag_fixed">
		<h2>1: Fixed node with drag</h2>

		<div class="fixed">
			<div class="handle"></div>
		</div>

		<ul class="info">
			<li class="handle">Green box on the right to be dragged inside fixed yellow element</li>
		</ul>
	</div>

	<hr />

	<div class="tests i:drag2 drag mixed">
		<h2>2: Mixed and Nested drag + click</h2>
		<p>Variations with different positioning</p>

		<div class="level1">
			<div class="level2">
				<div class="level3">
					<div class="level4"></div>
				</div>
			</div>
		</div>

		<ul class="info">
			<li class="level1">level1: click (also fire after down+move)</li>
			<li class="level2">level2: drag (boundary: .level1) + click (should not bubble, cancel on down+move) - abs positioned div</li>
			<li class="level3">level3: drag (boundary: .level2, strict=false) + click (should not bubble, cancel on down+move) - div with padding</li>
			<li class="level4">level4: drag (boundary: .level3, strict=false, elastica=200) + click (should not bubble, cancel on down+move) - empty div, in div with padding</li>
		</ul>

	</div>

	<hr />

	<div class="tests i:drag3 drag nested">
		<h2>3: Nested drags, horizontal inside vertical</h2>

		<div class="nested_view">
			<ul class="outer">
				<li>
					<ul class="inner_a">
						<li>Inner A 1</li>
						<li>Inner A 2</li>
						<li>Inner A 3</li>
					</ul>
				</li>
				<li>
					<ul class="inner_b">
						<li>Inner B 1</li>
						<li>Inner B 2</li>
						<li>Inner B 3</li>
					</ul>
				</li>
				<li>
					<ul class="inner_c">
						<li>Inner C 1</li>
						<li>Inner C 2</li>
						<li>Inner C 3</li>
					</ul>
				</li>
			</ul>
		</div>


		<ul class="info">
			<li class="outer">Outer: drag horisontal (Inner A - Inner C)</li>
			<li class="inner_a">Inner A: drag vertical Inner A 1 - Inner A 3</li>
			<li class="inner_b">Inner B: drag vertical Inner B 1 - Inner B 3</li>
			<li class="inner_c">Inner C: drag vertical Inner C 1 - Inner C 3</li>
		</ul>

	</div>

	<hr />

	<div class="tests i:drag4 drag links">
		<h2>4: Drag links</h2>

		<div class="links">
			<div class="link1">
				<a href="#">link1</a>
			</div>
			<div class="link2">
				<a href="#">link2</a>
			</div>
		</div>

		<ul class="info">
			<li class="links">links: boundary</li>
			<li class="link1">link: drag (boundary: .links) + click (should not bubble, cancel on move) - div->a, with text-indent</li>
			<li class="link2">link: drag (boundary: .links) + click (should not bubble, cancel on move) - div->a, without text-indent</li>
		</ul>
	</div>

	<hr />

	<div class="tests i:drag5 drag boundaries">

		<h2>5: Node as boundaries</h2>
		<p>Absolute positioned drags in each corner - testing correct conversion of positioning.</p>

		<div class="nodeboundaries">
			<div class="drag_a1"></div>
			<div class="drag_a2"></div>
			<div class="drag_a3"></div>
			<div class="drag_a4"></div>
		</div>

		<ul class="info">
			<li class="boundary_a">boundary</li>
			<li class="drag_a1">drag_a1: drag</li>
			<li class="drag_a2">drag_a2: drag</li>
			<li class="drag_a3">drag_a3: drag</li>
			<li class="drag_a4">drag_a4: drag</li>
		</ul>

	</div>

	<hr />

	<div class="tests i:drag6 drag boundaries">

		<h2>Array as boundaries</h2>
		<p>Absolute positioned drags in each corner - testing correct conversion of positioning.</p>

		<div class="arrayboundaries">
			<div class="drag_b1"></div>
			<div class="drag_b2"></div>
			<div class="drag_b3"></div>
			<div class="drag_b4"></div>
		</div>

		<ul class="info">
			<li class="boundary_b">boundary</li>
			<li class="drag_b1">drag_b1: drag</li>
			<li class="drag_b2">drag_b2: drag</li>
			<li class="drag_b3">drag_b3: drag</li>
			<li class="drag_b4">drag_b4: drag</li>
		</ul>
	</div>

	<hr />

	<div class="tests i:swipe1 swipe">
		<h2>Swipe on ul</h2>
		<p>UL controlling all movements</p>

		<div class="images">
			<ul class="imagesul">
				<li>swipe me left</li>
				<li>swipe me up</li>
				<li>swipe me right</li>
				<li>swipe me down</li>
			</ul>
		</div>
	</div>

	<hr />

	<div class="tests i:swipe2 swipe">

		<h2>Swipe on li</h2>
		<p>might perform better because of simpler move handler - only left/right</p>

		<div class="images">
			<ul class="imagesli">
				<li class="sw1">swipe me left</li>
				<li class="sw2">swipe me right</li>
				<li class="sw3">swipe me left</li>
				<li class="sw4">swipe me right</li>
			</ul>
		</div>
	</div>

</div>
<div class="comments"></div>
