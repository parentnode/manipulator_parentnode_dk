<?php
$this->headerIncludes(array(
	"/js/tests/i-media.js",
	"/css/tests/s-media.css"
));
?>

<div class="scene i:scene">
	<h1>Media - Video and audio</h1>

<? if(preg_match("/desktop_light|mobile_light|seo/", $this->segment(array("type" => "dev")))): ?>
	<p class="nosupport">NOT SUPPORTED in <?= $this->segment(array("type" => "dev")) ?></p>
<? else: ?>

	<p>Video and audio player test requires interaction and observation :)</p>


	<hr />


	<div class="tests i:mediaAutoplay">
		<h2>"autoplay playsinline" test</h2>
		<p>
			Creates inline autoplaying player, which is supported on some mobile devices. Test should 
			show whether the current browser/settings support inline autoplay or <strong>muted</strong> autoplay. 
			The autoplay result should reflect what the browser is doing (playing/not playing, sound/no sound).
		</p>
	</div>


	<hr />


	<div class="tests i:medialoop">
		<h2>Looping video test</h2>
		<p>Creates looping player</p>
	</div>


	<hr />


	<div class="tests i:mediacontrols">
		<h2>Simple video player test</h2>
		<p>Creates player with controls for play/pause/ff/rw</p>
	</div>


	<hr />


	<div class="tests i:mediamulticontrols">
		<h2>Semi advanced video test</h2>
		<p>Creates player with playlist and different controls for different videos</p>

		<ul class="videos">
			<li><a href="/media/video/video_1.mp4">Video 1 (with no controls)</a></li>
			<li><a href="/media/video/video_2.mp4">Video 2 (with controls for play/pause)</a></li>
			<li><a href="/media/video/video_3.mp4">Video 3 (with controls for play/pause/ff/rw)</a></li>
		</ul>
	</div>


	<hr />


	<div class="tests i:mediafull">
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
