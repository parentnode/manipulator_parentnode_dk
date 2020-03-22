<?php
$this->headerIncludes(array(
	"/js/tests/m-sortable.js",
	"/css/tests/s-sortable.css"
));
?>

<div class="scene i:scene">
	<h1>Sortable</h1>

<? if(preg_match("/desktop_light|mobile|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<p>Sortable lists in various shades and colors.</p>

	<div class="tests i:sortable">


		<h2>Simple one level – vertical</h2>
		<div class="test interactive simple_vertical">
			<p>Vertical overlap detection - top, bottom</p>
			<ul class="sortable">
				<li><ul><li>test 1</li></ul></li>
				<li><span class="drag">drag here</span> - <span>test 2</span></li>
				<li><span>test 3</span></li>
			</ul>
		</div>



		<h2>Simple one level – horizontal</h2>
		<div class="test interactive simple_horizontal">
			<p>Horizontal overlap detection - left, right</p>
			<ul class="sortable">
				<li><ul><li>test 1</li></ul></li>
				<li><span class="drag">drag here</span> - <span>test 2</span></li>
				<li><span>test 3</span></li>
			</ul>
		</div>



		<h2>Simple one level – multiline</h2>
		<div class="test interactive simple_multiline">
			<p>Multiline overlap detection - left, right, top, bottom</p>
			<ul class="sortable">
				<li class="item_id:test-1">test 1 variable width</li>
				<li class="item_id:test-2">test 2</li>
				<li class="item_id:test-3">test 3 extra long element that is a real challenge</li>
				<li class="item_id:test-4">test 4</li>
				<li class="item_id:test-5">medium test 5</li>
				<li class="item_id:test-6">test 6</li>
				<li class="item_id:test-7">test 7</li>
				<li class="item_id:test-8">test 8</li>
			</ul>
		</div>



		<h2>Outer scope – horizontal</h2>
		<div class="test interactive outer_horizontal">
			<p>You can drag between the lists.</p>
			<h3>List 1</h3>
			<ul class="sortable">
				<li><ul><li>test 1</li></ul></li>
				<li><span class="drag">drag here</span> - <span>test 2</span></li>
				<li><span>test 3</span></li>
			</ul>
			<h3>List 2</h3>
			<ul class="sortable">
				<li><ul><li>test 1</li></ul></li>
				<li><span class="drag">drag here</span> - <span>test 2</span></li>
				<li><span>test 3</span></li>
			</ul>
		</div>



		<h2>Simple – add/remove</h2>
		<div class="test interactive simple_add_remove">
			<p>You can sort nodes inside same list</p>
			<ul class="sortable">
				<li><ul><li>test 1</li></ul></li>
				<li><span class="drag">drag here</span> - <span>test 2</span></li>
				<li><span>test 3</span></li>
			</ul>

			<p>You can add or remove random elements – and they should become active/passive acoordingly.</p>
			<ul class="actions">
				<li class="add"><a class="button">Add element</a></li>
				<li class="remove"><a class="button">Remove element</a></li>
			</ul>

			<p>You cannot drag from or to this list</p>
			<ul class="passive">
				<li>test 4</li>
				<li>medium test 5</li>
				<li>test 6</li>
			</ul>
		</div>



		<h2>Complex - multiple, speciefic draggables and targets</h2>
		<div class="test interactive complex_multi_target">
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

			<p>Drag <strong>from</strong> this, but cannot drag <strong>to</strong> this</p>
			<ul class="sortable t3">
				<li class="draggable t3 l1">ul3 -> 1</li>
				<li class="draggable t3 l2">ul3 -> 2</li>
				<li class="draggable t3 l3">ul3 -> 3</li>
			</ul>

			<p>Inactive elements</p>
			<ul class="passive t4">
				<li class="t4 l1">ul4 -> 1</li>
				<li class="t4 l2">ul4 -> 2</li>
				<li class="t4 l3">ul4 -> 3</li>
			</ul>
		</div>



		<h2>Complex - Nested structure, CSS Version 1</h2>
		<div class="test interactive complex_nested_css1">
			<p>Drag and drop</p>
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
					<h3>ul1 -> 2</h3>
				</li>
				<li class="draggable t1 l3">
					<h3>ul1 -> 3</h3>
					<p>Passive list, is fixed to ul1 -> 3</p>
					<ul class="passive t4">
						<li class="t4 l1">ul4 -> 1</li>
						<li class="t4 l2">ul4 -> 2</li>
						<li class="t4 l3">ul4 -> 3</li>
					</ul>
				</li>
			</ul>

			<p>Drag <strong>from</strong> this, but cannot drag <strong>to</strong> this</p>
			<ul class="sortable t3">
				<li class="draggable t3 l1"><h3>ul3 -> 1</h3></li>
				<li class="draggable t3 l2">ul3 -> 2</li>
				<li class="draggable t3 l3">ul3 -> 3</li>
			</ul>
		</div>



		<h2>Complex - Nested structure, CSS Version 2</h2>
		<div class="test interactive complex_nested_css2">
			<p>Drag and drop - allow pick and drop by click</p>
			<ul class="sortable target t1">
				<li class="draggable t1 l1 item_id:ul1-1">
					<h3>ul1 -> 1</h3>
					<ul class="sortable target t2">
						<li class="draggable t2 l1 item_id:ul2-1"><h3>ul2 -> 1</h3></li>
						<li class="draggable t2 l2 item_id:ul2-2"><h3>ul2 -> 2</h3></li>
						<li class="draggable t2 l3 item_id:ul2-3"><h3>ul2 -> 3</h3></li>
					</ul>
				</li>
				<li class="draggable t1 l2 item_id:ul1-2">
					<h3>ul1 -> 2</h3>
				</li>
				<li class="draggable t1 l3 item_id:ul1-3">
					<h3>ul1 -> 3</h3>
				</li>
			</ul>

			<p>Drag <strong>from</strong> this, but cannot drag <strong>to</strong> this</p>
			<ul class="sortable t3">
				<li class="draggable t3 l1 item_id:ul3-1"><h3>ul3 -> 1</h3></li>
				<li class="draggable t3 l2 item_id:ul3-2"><h3>ul3 -> 2</h3></li>
				<li class="draggable t3 l3 item_id:ul3-3"><h3>ul3 -> 3</h3></li>
			</ul>
		</div>


		<h2>Scope helpers</h2>
		<div class="test node-order">
			<ul class="sort-me">
				<li class="item_id:1"><span>Item 1</span></li>
				<li class="item_id:2"><span>Item 2</span></li>
				<li class="item_id:3"><span>Item 3</span></li>
			</ul>
		</div>

		<div class="test node-relations">
			<ul class="sort-me">
				<li class="item_id:1"><span>Item 1</span></li>
				<li class="item_id:2"><span>Item 2</span></li>
				<li class="item_id:3"><span>Item 3</span>
					<ul class="sort-me">
						<li class="item_id:4"><span>Item 4</span></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="test node-position">
			<ul class="sort-me">
				<li class="item_1"><span>Item 1</span></li>
				<li class="item_2"><span>Item 2</span></li>
				<li class="item_3"><span>Item 3</span></li>
			</ul>
		</div>

		<div class="test node-relation">
			<ul class="sort-me">
				<li class="item_1 item_id:1"><span>Item 1</span></li>
				<li class="item_2 item_id:2"><span>Item 2</span></li>
				<li class="item_3 item_id:3"><span>Item 3</span>
					<ul class="sort-me">
						<li class="item_4 item_id:4"><span>Item 4</span></li>
					</ul>
				</li>
			</ul>
		</div>

	</div>


<? endif;?>

</div>
<div class="comments"></div>
