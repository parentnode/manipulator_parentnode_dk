<?php
$this->headerIncludes(array(
	"/js/tests/i-sortable.js",
	"/css/tests/s-sortable.css"
));
?>

<div class="scene i:scene">
	<h1>Sortable</h1>
	<p>Sortable lists in various shades and colors.</p>

	<div class="tests i:sortable">
		<h2>Simple one level</h2>
		<div class="simple">
			<ul class="sortable">
				<li>test 1</li>
				<li>test 2</li>
				<li>test 3</li>
			</ul>
		</div>


		<h2>Complex with multiple sources and targets</h2>
		<div class="complex">
			<p>Drag and drop</p>
			<ul class="sortable target t1">
				<li class="draggable t1 l1">ul1 -> 1</li>
				<li class="draggable t1 l2">ul1 -> 2</li>
				<li class="draggable t1 l3">ul1 -> 3</li>
			</ul>
			<ul class="sortable target t2">
				<li class="draggable t2 l1">ul2 -> 1</li>
				<li class="draggable t2 l2">ul2 -> 2</li>
				<li class="draggable t2 l3">ul2 -> 3</li>
			</ul>
			<hr>
			<p>Drag <strong>from</strong> this, but cannot drag <strong>to</strong> this</p>
			<ul class="sortable t3">
				<li class="draggable t3 l1">ul3 -> 1</li>
				<li class="draggable t3 l2">ul3 -> 2</li>
				<li class="draggable t3 l3">ul3 -> 3</li>
			</ul>
			<hr>
			<p>Inactive elements</p>
			<ul class="sortable t4">
				<li class="t4 l1">ul4 -> 1</li>
				<li class="t4 l2">ul4 -> 2</li>
				<li class="t4 l3">ul4 -> 3</li>
			</ul>
		</div>


		<h2>BETA TESTING: Nested structure</h2>
		<div class="nested">
			<ul class="sortable target t1">
				<li class="draggable t1 l1">
					<h3>ul1 -> 1</h3>
					<ul class="sortable target t2">
						<li class="draggable t2 l1">ul2 -> 1</li>
						<li class="draggable t2 l2">ul2 -> 2</li>
						<li class="draggable t2 l3">ul2 -> 3</li>
					</ul>
				</li>
				<li class="draggable t1 l2">
					<h3>ul1 -> 2</h3></li>
				<li class="draggable t1 l3">
					<h3>ul1 -> 3</h3>
					<ul class="sortable t4">
						<li class="t4 l1">ul4 -> 1</li>
						<li class="t4 l2">ul4 -> 2</li>
						<li class="t4 l3">ul4 -> 3</li>
					</ul>
				</li>
			</ul>
			<hr>
			<ul class="sortable t3">
				<li class="draggable t3 l1"><h3>ul3 -> 1</h3></li>
				<li class="draggable t3 l2">ul3 -> 2</li>
				<li class="draggable t3 l3">ul3 -> 3</li>
			</ul>
		</div>
	</div>

</div>
<div class="comments"></div>
