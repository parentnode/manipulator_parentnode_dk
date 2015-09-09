<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
	img {height: 25px; display: inline-block; vertical-align: top;}
	.template {display: none;}
	ul {margin-bottom: 20px;}
	ul li {margin-bottom: 5px;}
	table {margin: 0 50px;}
	
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var object = [
			
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
					"image":"/img/test-400x250.png"
				},
				{
					"text":"Martin3",
					"url":"/test/this/url3",
					"alt":"Alt tex3t",
					"image":"/img/test-460x321.png"
				},
				{
					"text":"Martin4",
					"url":"/test/this/url4",
					"alt":"Alt text4",
					"image":"/img/test-640x360.png"
				}
			]

			var i, node;

			// get template from ul.test1
			var template = u.qs(".template", scene);


			// test 1 - manual append
			var list1 = u.qs("ul.test1", scene);

			// get result nodes
			var nodes = u.template(template, object);
			// save return length for test after appending
			var nodes_length = nodes.length;

			// append to list
			while(nodes.length) {
				u.ae(list1, nodes[0], {"class":"test1"});
			}

			// check if it seems correct
			var control_children = u.qsa("li", list1);
			if(control_children.length == 5 && nodes_length == 4 && u.qs("img", control_children[1]).src == "http://" + document.domain + "/img/test-350x350.jpg") {
				for(i = 0; node = control_children[i]; i++) {
					if(!u.hc(node, "template")) {
						u.ac(node, "correct");
					}
				}
			}


			// test 2 - auto append
			var list2 = u.qs("ul.test2", scene);
			u.ac(template, "test2");

			// get appended result nodes
			var nodes = u.template(template, object, {"append":list2});

			// check if it seems correct
			var control_children = u.qsa("li", list2);
			if(control_children.length == 4 && nodes.length == 4 && u.qs("img", control_children[0]).src == "http://" + document.domain + "/img/test-350x350.jpg") {
				for(i = 0; node = control_children[i]; i++) {
					u.ac(node, "correct");
				}
			}


			// test 3 - virtual template and auto append
			var table = u.ae(scene, "table", {"class":"test3"});

			// create virtual template
			var virtual_template = document.createElement("tr");
			virtual_template.innerHTML = '<td><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></td>';

			// get appended result nodes
			var nodes = u.template(virtual_template, object, {"append":table});

			// check if it seems correct
			var control_children = u.qsa("tr", table);
			if(control_children.length == 4 && nodes.length == 4 && u.qs("img", control_children[0]).src == "http://" + document.domain + "/img/test-350x350.jpg") {
				for(i = 0; node = control_children[i]; i++) {
					u.ac(node, "correct");
				}
			}

		}
	}
</script>

<div class="scene i:test">
	<h1>Template</h1>

	<ul class="test1">
		<li class="template"><a href="{url}"><img src="{image}" alt="{alt}" />{text}</a></li>
	</ul>

	<ul class="test2"></ul>


</div>
<div class="comments"></div>
