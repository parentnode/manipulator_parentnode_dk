<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			u.textscaler(scene,{
				"h2":{
					"unit":"rem",
					"min_size":1,
					"min_width":200,
					"max_size":3,
					"max_width":1600
				},
				"h3":{
					"unit":"rem",
					"min_size":1,
					"min_width":600,
					"max_size":6,
					"max_width":1200
				},
				"p":{
					"unit":"rem",
					"min_size":1,
					"min_width":800,
					"max_size":1.5,
					"max_width":1200
				},
			})
		}
	}

</script>

<div class="scene i:test">
	<h1>Textscaler</h1>

	<h2>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
		eiusmod tempor incididunt ut labore et dolore magna aliqua.
	</h2>
	<h3>Ut enim ad minim veniam</h3>
	<p>
		Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

</div>
<div class="comments"></div>
