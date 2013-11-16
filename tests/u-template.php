<? $page_title = "Template tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			object = [
			
				{
					"text":"Martin",
					"url":"/test/this/url",
					"alt":"Alt text",
					"image":"/img/test-350x350.jpg"
				},
				{
					"text":"Martin 2",
					"url":"/test/this/url2",
					"alt":"Alt text2",
					"image":"/img/test-350x350.jpg"
				},
				{
					"text":"Martin3",
					"url":"/test/this/url3",
					"alt":"Alt tex3t",
					"image":"/img/test-350x350.jpg"
				},
				{
					"text":"Martin4",
					"url":"/test/this/url4",
					"alt":"Alt text4",
					"image":"/img/test-350x350.jpg"
				}
			]

			var template = u.qs(".template", scene);
			var list = u.qs("ul", scene);

			var nodes = u.template(template, object);
			while(nodes.length) {
				u.ae(list, nodes[0]);
			}
		}
	}
</script>

<div class="scene i:test">
	<h1>Template</h1>

	<ul class="test">
		<li class="template"><a href="{url}"><img src="{image}" alt="{alt}" /></a>{text}</li>
	</ul>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>