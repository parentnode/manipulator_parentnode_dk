<? $page_title = "Sortable tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.simple {padding: 0 0 30px; border-bottom: 1px solid #000000; margin: 0 0 30px;}
	.sortable {list-style: none;}
	.sortable li {padding: 10px; margin: 1px; border: 1px solid red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var list = u.qs(".simple .sortable", scene);
			u.s.sortable(list);

			list.picked = function(event) {}
			list.moved = function(event) {}
			list.dropped = function(event) {}


			var scope = u.qs(".complex", scene);
			u.sortable(scope, {"targets":".target", "draggables":".draggable"});

			scope.picked = function(event) {
				u.bug("picked")
			}
			scope.moved = function(event) {
				u.bug("moved")
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


	<div class="simple">
		<ul class="sortable">
			<li>test 1</li>
			<li>test 2</li>
			<li>test 3</li>
		</ul>
	</div>

	<div class="complex">
		<ul class="sortable target t1">
			<li class="draggable l1">test 1</li>
			<li class="draggable l2">test 2</li>
			<li class="draggable l3">test 3</li>
		</ul>
		<ul class="sortable target t2">
			<li class="draggable l4">test 4</li>
			<li class="draggable l5">test 5</li>
			<li class="draggable l6">test 6</li>
		</ul>
		<hr>
		<ul class="sortable">
			<li class="draggable l7">test 7</li>
			<li class="draggable l8">test 8</li>
			<li class="draggable l9">test 9</li>
		</ul>
	</div>

</div>
<div class="comments">
	
	
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>