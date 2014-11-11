<style type="text/css">
	.simple {padding: 0 0 30px; border-bottom: 1px solid #000000; margin: 0 0 30px;}
	.complex {border-bottom: 1px solid #000000; margin: 0 0 30px;}
	.sortable {list-style: none;}
	.sortable li {padding: 10px; margin: 1px; border: 1px solid #dedede; color: #dedede;}
	.simple li,
	.sortable li.draggable {color: red; border: 1px solid red; cursor: move;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var scope = u.qs(".simple .sortable", scene);
			u.sortable(scope);

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}


			var scope = u.qs(".complex", scene);
			u.sortable(scope, {"targets":"target", "draggables":"draggable"});

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}


			var scope = u.qs(".nested", scene);
			u.sortable(scope, {"targets":"target", "draggables":"draggable", "allow_nesting":true});

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
//				u.bug("moved")
			}
			scope.dropped = function(event) {
				u.bug("dropped")
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>Sortable</h1>
	<p>Needs to be updated!!!</p>


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
		<h3>drag and drop</h3>
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
		<h3>Drag from this, but cannot drag to this</h3>
		<ul class="sortable t3">
			<li class="draggable t3 l1">ul3 -> 1</li>
			<li class="draggable t3 l2">ul3 -> 2</li>
			<li class="draggable t3 l3">ul3 -> 3</li>
		</ul>
		<hr>
		<h3>inactive elements</h3>
		<ul class="sortable t4">
			<li class="t4 l1">ul4 -> 1</li>
			<li class="t4 l2">ul4 -> 2</li>
			<li class="t4 l3">ul4 -> 3</li>
		</ul>
	</div>


	<h2>Nested structure</h2>
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
<div class="comments">
	
	
</div>
