<? $page_title = "Audio tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css"></style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			scene.player = u.audioPlayer(scene);

		}
	}

	function play(src) {
		u.qs(".scene").player.loadAndPlay(src);
	}
</script>

<div class="scene i:test">
	<h1>audio</h1>

	

</div>
<div class="comments">
	<a onclick="play('/documentation/media/audio/test-1.mp3');">load and play test-1</a><br />
	<a onclick="play('/documentation/media/audio/test-2.mp3');">load and play test-2</a><br />
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>