<? $page_title = "Sortable tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.sortable {list-style: none;}
	.sortable li {padding: 10px; margin: 1px; border: 1px solid red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var list = u.qs(".sortable", scene);
			u.s.sortable(list);

			list.picked = function(event) {}
			list.moved = function(event) {}
			list.dropped = function(event) {}

		}

	}
</script>

<div class="scene i:test">
	<h1>Sortable</h1>
	<p>Needs to be updated!!!</p>


	<ul class="sortable">
		<li>test 1</li>
		<li>test 2</li>
		<li>test 3</li>
	</ul>

</div>
<div class="comments">
	
	
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>