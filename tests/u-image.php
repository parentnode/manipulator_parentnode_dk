<? $page_title = "Image tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene div.image {width: 720px; height: 576px;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var image = u.ae(scene, "div", {"class":"image"});

			image.loaded = function(event) {
				u.as(this, "backgroundImage", "url("+event.target.src+")");
			}
			u.i.load(image, "/img/test.jpg");

			// image not found
			var error_image = u.ae(scene, "div", {"class":"error_image"});
			// should not set background
			error_image.loaded = function(event) {
				u.as(this, "backgroundImage", "url("+event.target.src+")");
			}
			error_image.failed = function(event) {
				this.innerHTML = "Missing image";
			}
			u.i.load(error_image, "/img/non-existent.jpg");

		}
	}
</script>

<div class="scene i:test">
	<h2>Image</h2>

	<p>Image test requires interaction and observation :)</p>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>