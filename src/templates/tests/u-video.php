<style type="text/css">

	.videos li {font-size: 13px; display: block;}

	.videoplayer {position: relative; margin: 0 0 0 50px; border: 1px solid #000000; width: 720px; height: 360px;}
	.videoplayer video,
	.videoplayer object {width: 100%; height: 100%;}


	.controls {position: absolute; left: 0; bottom: 0; width: 100%;}
	.controls a {height: 23px; width: 100px; text-align: center; display: inline-block;}
	.controls .playpause {background: green;}
	.playing .controls .playpause {background: red;}
	.controls .ff {background: blue;}
	.controls .rw {background: yellow;}
	.controls .playpause:before {content: "play"; color: white;}
	.playing .controls .playpause:before {content: "pause";}
	.controls .ff:before {content: "ff";}
	.controls .rw:before {content: "rw";}
</style>

<script type="text/javascript">
// testing extended controls setup

	Util.Objects["test1"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer();
			div.player = u.ae(div, div.player);
			div.player.load("/media/video/video_1.mov", {"playpause":true});
			div.player.ended = function() {
				this.play();
			}
		}
	}


	Util.Objects["test2"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer({"playpause":true, "search":true});
			div.player = u.ae(div, div.player);
			div.player.load("/media/video/video_3.mov");
		}
	}


	Util.Objects["test3"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer({"playpause":true});
			div.player = u.ae(div, div.player);


			div.playlist = u.qsa(".videos li", div);

			div.playlist[0].player = div.player;
			u.ce(div.playlist[0]);
			div.playlist[0].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":false, "search":false});
			}

			div.playlist[1].player = div.player;
			u.ce(div.playlist[1]);
			div.playlist[1].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":true, "search":false});
			}

			div.playlist[2].player = div.player;
			u.ce(div.playlist[2]);
			div.playlist[2].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":true, "search":true});
			}

		}

	}


	Util.Objects["test4"] = new function() {
		this.init = function(scene) {

			scene.player = u.videoPlayer({"playpause":true, "search":true});
			u.ae(scene, scene.player);


			var progress = u.ae(scene.player, "div", {"class":"progress"});
			progress.player = scene.player;
			progress.player.progress = progress;

			var src_path = u.ae(scene.player, "div", {"class":"src_path"});
			src_path.player = scene.player;
			src_path.player.src_path = src_path;

			scene.player.playing = function(event) {
				this.src_path.innerHTML = this.video.src;
			}

			scene.player.timeupdate = function(event) {
				if(this.currentTime) {
					this.progress.innerHTML = u.period("m:s.u", {"seconds":this.currentTime}) + "/" + u.period("m:s.u", {"seconds":this.duration});
				}
			}

//			scene.player.loading = function() {u.bug("loading");}
//			scene.player.canplaythrough = function() {u.bug("canplaythrough");}
//			scene.player.playing = function() {u.bug("playing");}
//			scene.player.stalled = function() {u.bug("stalled");}
//			scene.player.ended = function() {u.bug("ended");}
//			scene.player.loadedmetadata = function() {u.bug("loadedmetadata");}
//			scene.player.loadeddata = function() {u.bug("loadeddata");}


			scene.playlist = u.qsa(".videos li", scene);
			for(i = 0; video = scene.playlist[i]; i++) {
				video.player = scene.player;
				u.ce(video);
				video.clicked = function() {
					this.player.loadAndPlay(this.url);
				}
			}

//			scene.playlist[0].clicked();
		}

	}

</script>

<div class="scene i:test">
	<h1>Video</h1>
	<p>Videotest requires interaction and observation :)</p>


	<hr />


	<div class="test1 i:test1">
		<h2>Looping video test</h2>
		<p>Creates looping player</p>
	</div>


	<hr />


	<div class="test2 i:test2">
		<h2>Simple video player test</h2>
		<p>Creates player with controls for play/pause/ff/rw</p>
	</div>


	<hr />


	<div class="test3 i:test3">
		<h2>Semi advanced video test</h2>
		<p>Creates player with playlist and different controls for different videos</p>

		<ul class="videos">
			<li><a href="/media/video/video_1.mp4">Video 1 (with no controls)</a></li>
			<li><a href="/media/video/video_2.mp4">Video 2 (with controls for play/pause)</a></li>
			<li><a href="/media/video/video_3.mp4">Video 3 (with controls for play/pause/ff/rw)</a></li>
		</ul>
	</div>


	<hr />


	<div class="test4 i:test4">
		<h2>Advanced video test</h2>
		<p>Creates player with playlist and custom callbacks</p>

		<ul class="videos">
			<li><a href="/media/video/video_1.mp4">Video 1</a></li>
			<li><a href="/media/video/video_2.mp4">Video 2</a></li>
			<li><a href="/media/video/video_3.mp4">Video 3</a></li>
		</ul>
	</div>


</div>

<div class="comments">Needs to be tested in IE 6</div>
