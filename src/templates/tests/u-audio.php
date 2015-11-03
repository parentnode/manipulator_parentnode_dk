<?php
$this->headerIncludes(array(
	"/js/tests/i-audio.js",
	"/css/tests/s-audio.css"
));
?>

<div class="scene i:scene">
	<h1>Audio</h1>
	<p>Audiotest requires interaction and observation :)</p>

	<hr />

	<div class="tests i:audio1">
		<h2>Looping audio test</h2>
		<p>Creates looping player</p>
		
	</div>

	<hr />

	<div class="tests i:audio2">
		<h2>Simple audio player test</h2>
		<p>Creates player with controls for play/pause/ff/rw</p>
		
	</div>

	<hr />

	<div class="tests i:audio3">
		<h2>Semi advanced audio test</h2>
		<p>Creates player with playlist and different controls for different audios</p>

		<ul class="actions">
			<li><a href="/media/audio/audio_2.mp3" class="button primary">Audio 1 (with no controls)</a></li>
			<li><a href="/media/audio/audio_1.mp3" class="button primary">Audio 2 (with play/pause)</a></li>
		</ul>

	</div>

</div>

<div class="comments"></div>
