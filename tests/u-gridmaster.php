<? $page_title = "tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
	.scope {}
	.gridmaster {}
</style>

<script type="text/javascript">


	var grid = {
		"nodes":[
			{
				"proportion": 1/2,
			}
		]
	}



	Util.Objects["test"] = new function() {

		this.init = function(scene) {

			var list = u.qs("ul", scene);
			var gm = u.gridMaster(list);

			gm.prepareNode = function(node) {

				node._item_id = u.cv(node, "item_id");
				node._format = u.cv(node, "format");

				node._image_src = "/images/"+node._item_id+"/image/300x."+node._format;

				node._image_mask = u.ae(node, "div", {"class":"image"});
				node._text_mask = u.ae(node, "div", {"class":"text"});
			}

			gm.buildNode = function(node) {
				var h2 = u.qs("h2", node);

				// append to wrapper in correct order
				u.ae(node._text_mask, h2);
			}

			gm.prepare(grid);

			gm.build();
			
		}
	}

</script>

<div class="scene i:test">
	<h1>Gridmaster</h1>

	<div class="scope">
		<ul>
			<li class="item item_id:1 format:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 format:jpg">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 format:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 format:jpg">
				<h2>Forth item</h2>
			</li>
		</ul>
	</div>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>