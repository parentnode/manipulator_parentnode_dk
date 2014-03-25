<? $page_title = "Audio tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

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
	<a onclick="play('/media/audio/audio_1.mp3');">load and play 1</a><br />
	<a onclick="play('/media/audio/audio_2.mp3');">load and play 2</a><br />
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>