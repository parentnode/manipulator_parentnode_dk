<?php
$this->headerIncludes(array(
	"/js/tests/i-video.js",
	"/css/tests/s-video.css"
));
?>

<div class="scene i:scene">
	<h1>Video</h1>

<? if(preg_match("/desktop_light|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<p>Videotest requires interaction and observation :)</p>


	<hr />


	<div class="tests i:video1">
		<h2>Looping video test</h2>
		<p>Creates looping player</p>
	</div>


	<hr />


	<div class="tests i:video2">
		<h2>Simple video player test</h2>
		<p>Creates player with controls for play/pause/ff/rw</p>
	</div>


	<hr />


	<div class="tests i:video3">
		<h2>Semi advanced video test</h2>
		<p>Creates player with playlist and different controls for different videos</p>

		<ul class="videos">
			<li><a href="/media/video/video_1.mp4">Video 1 (with no controls)</a></li>
			<li><a href="/media/video/video_2.mp4">Video 2 (with controls for play/pause)</a></li>
			<li><a href="/media/video/video_3.mp4">Video 3 (with controls for play/pause/ff/rw)</a></li>
		</ul>
	</div>


	<hr />


	<div class="tests i:video4">
		<h2>Advanced video test</h2>
		<p>Creates player with playlist and custom callbacks</p>

		<ul class="videos">
			<li><a href="/media/video/video_1.mp4">Video 1</a></li>
			<li><a href="/media/video/video_2.mp4">Video 2</a></li>
			<li><a href="/media/video/video_3.mp4">Video 3</a></li>
		</ul>
	</div>

<? endif;?>

</div>

<div class="comments">
	<p>Video desktop_light support in BETA</p>
</div>
