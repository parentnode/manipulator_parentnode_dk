<style type="text/css">
	.correct {background: green;}
	.error {background: red;}
	.scope_1 {margin-bottom: 20px;}
	.scope_2 {margin-bottom: 20px;}
	.scope_3 {margin-bottom: 20px;}
	.gridmaster {overflow: hidden;}
	.gridmaster li.item {opacity: 0;}
	.gridmaster li.item .text {position: absolute; top: 0; left: 0; width: 100%; height: 100%;}
	.gridmaster li.item .media {overflow: hidden; position: relative;}
	.gridmaster li.item img {width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 4;}
	.gridmaster li.item .videoplayer {width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 5;}
	.gridmaster li.item .videoplayer .controls {width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 5;}
	.gridmaster li.item .videoplayer .controls .playpause {display: block; width: 100%; font-size: 20px; text-align: center;}
	.gridmaster li.item .videoplayer .controls .playpause:before {content: "play";}
	.gridmaster li.item .videoplayer.playing .controls .playpause:before {content: "pause";}
	.gridmaster li.item video {width: 100%; height: 100%;}
</style>

<script type="text/javascript">


	var grid_1 = {
		"nodes":[
			{
				"proportion": 2/1,
				"width": 12.5
			}
		]
	}

	Util.Modules["test1"] = new function() {

		this.init = function(scene) {

			var list = u.qs("ul", scene);
			var gm = u.gridMaster(list);
			
			gm.prepareNode = function(node) {
			
				node._item_id = u.cv(node, "item_id");
				node._image = u.cv(node, "image");
				node._video = u.cv(node, "video");

				// get image src for gridmaster
				if(node._image) {
					node.gm_image_src = "/images/"+node._item_id+"/300x."+node._image;
				}
				// get image src for gridmaster
				if(node._video) {
					node.gm_video_src = "/videos/"+node._item_id+"/300x."+node._video;
				}

				// append text to wrapper in correct order
				node.gm_text_mask = u.ae(node, "div", {"class":"text"});
				var h2 = u.qs("h2", node);
				u.ae(node.gm_text_mask, h2);
			}
			gm.buildNode = function(node) {}

			gm.prepare(grid_1);
			gm.build();
		}
	}


	var grid_2 = {
		"calc_base": 33.33,
		"nodes":[
			{
				"proportion": 2/1,
				"width": 33.33
			},
			{
				"proportion": 4/1,
				"width": 66.66
			},
			{
				"proportion": 4/1,
				"width": 66.66
			},
			{
				"proportion": 2/1,
				"width": 33.33
			}			
		]
	}

	Util.Modules["test2"] = new function() {

		this.init = function(scene) {

			var list = u.qs("ul", scene);
			var gm = u.gridMaster(list, {"video_controls":true});
			
			gm.prepareNode = function(node) {
			
				node._item_id = u.cv(node, "item_id");
				node._image = u.cv(node, "image");
				node._video = u.cv(node, "video");

				// get image src for gridmaster
				if(node._image) {
					node.gm_image_src = "/images/"+node._item_id+"/300x."+node._image;
				}
				// get image src for gridmaster
				if(node._video) {
					node.gm_video_src = "/videos/"+node._item_id+"/300x."+node._video;
				}

				// append text to wrapper in correct order
				node.gm_text_mask = u.ae(node, "div", {"class":"text"});
				var h2 = u.qs("h2", node);
				u.ae(node.gm_text_mask, h2);
			}

			gm.buildNode = function(node) {}

			gm.prepare(grid_2);
			gm.build();
		}
	}


	var grid_3 = {
		"nodes":[
			{
				"proportion": 2/1,
				"width": 33.33
			},
			{
				"inject": "li",
				"class": "item",
				"prepare": "prepareBlank",
				"build": "buildBlank",
				"resize": "resizeBlank",
				"proportion": 2/1,
				"width": 33.33
			}
		]
	}

	Util.Modules["test3"] = new function() {

		this.init = function(scene) {

			var list = u.qs("ul", scene);
			var gm = u.gridMaster(list);

			gm.prepareBlank = function(node) {
//				u.bug("blank, do nothing")
			}
			gm.buildBlank = function(node) {
//				u.bug("blank build, do nothing")
			}
			gm.resizeBlank = function(node, calc_width) {
				u.as(node, "width", Math.ceil(node.gm_grid_width * calc_width) + "px", false);
				u.as(node, "height", (Math.floor(node.offsetWidth / node.gm_grid_proportion)) + "px", false);
			}
			
			gm.prepareNode = function(node) {
			
				node._item_id = u.cv(node, "item_id");
				node._image = u.cv(node, "image");
				node._video = u.cv(node, "video");

				// get image src for gridmaster
				if(node._image) {
					node.gm_image_src = "/images/"+node._item_id+"/300x."+node._image;
				}
				// get image src for gridmaster
				if(node._video) {
					node.gm_video_src = "/videos/"+node._item_id+"/300x."+node._video;
				}

				// append text to wrapper in correct order
				var h2 = u.qs("h2", node);
				if(h2) {
					node.gm_text_mask = u.ae(node, "div", {"class":"text"});
					u.ae(node.gm_text_mask, h2);
				}
			}
			gm.buildNode = function(node) {}


			gm.prepare(grid_3);
			gm.build();
		}
	}

</script>

<div class="scene">
	<h1>Gridmaster</h1>

	<div class="scope_1 i:test1">
		<ul>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg video:mp4">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
		</ul>
	</div>

	<div class="scope_2 i:test2">
		<ul>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg video:mp4">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
		</ul>
	</div>

	<div class="scope_3 i:test3">
		<ul>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
			<li class="item item_id:1 image:png">
				<h2>First item</h2>
			</li>
			<li class="item item_id:2 image:jpg video:mp4">
				<h2>Second item</h2>
			</li>
			<li class="item item_id:3 image:png">
				<h2>Third item</h2>
			</li>
			<li class="item item_id:4 image:jpg">
				<h2>Forth item</h2>
			</li>
		</ul>
	</div>

</div>
<div class="comments"></div>
