<? $page_title = "Preloader tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene ul {}
	.scene li {height: 10px; margin: 5px; background: gray;}
	.scene li.loading {background: orange;}
	.scene li.loaded {background: blue;}
	.scene .correct li.loaded {background: green;}
	.scene .error li.loaded {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {


			var preloader;
			preloader = u.preloader();
			preloader = u.ae(scene, preloader);

			u.ae(preloader, "h2", {"html":"Preloader with user-defined callback"});
			scene.callback = function(queue) {
				if(u.qsa("li.loaded", queue[0]._queue).length == u.qsa("li", queue[0]._queue).length) {
					u.ac(queue[0]._queue, "correct");
				}
				else {
					u.ac(queue[0]._queue, "error");
				}
			}
			u.preloader(scene, ["../img/test-350x350.jpg","../img/test-355x500.jpg","../img/test-400x250.png","../img/test-450x300.jpg","../img/test-720x576.jpg"], {"callback":scene.callback});

			u.ae(preloader, "h2", {"html":"Preloader with default callback"});
			scene.loaded = function(queue) {
				if(u.qsa("li.loaded", queue[0]._queue).length == u.qsa("li", queue[0]._queue).length) {
					u.ac(queue[0]._queue, "correct");
				}
				else {
					u.ac(queue[0]._queue, "error");
				}
			}
			u.preloader(scene, ["../img/test-460x321.png","../img/test-468x334.jpg","../img/test-640x360.png","../img/test-720x576.jpg"]);



			u.ae(preloader, "h2", {"html":"Image with size"});
			var node = u.ae(preloader, "div", {"class":"background"});
			node.loaded = function(queue) {
				u.as(this, "width", queue[0]._image.width+"px");
				u.as(this, "height", queue[0]._image.height+"px");
				u.as(this, "backgroundImage", "url("+ queue[0]._image.src+")");

				u.ac(queue[0]._queue, "correct");
			}
			u.preloader(node, ["../img/test-350x350.jpg"]);


						// 
						// var image = u.ae(scene, "div", {"class":"image"});
						// 
						// image.loaded = function(event) {
						// 	u.as(this, "backgroundImage", "url("+event.target.src+")");
						// }
						// u.i.load(image, "/documentation/img/test.jpg");
						// 
						// // image not found
						// var error_image = u.ae(scene, "div", {"class":"error_image"});
						// // should not set background
						// error_image.loaded = function(event) {
						// 	u.as(this, "backgroundImage", "url("+event.target.src+")");
						// }
						// error_image.failed = function(event) {
						// 	this.innerHTML = "Missing image";
						// }
						// u.i.load(error_image, "/documentation/img/non-existent.jpg");
			
		}
	}
</script>

<div class="scene i:test">
	<h1>Preloader</h1>



</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>