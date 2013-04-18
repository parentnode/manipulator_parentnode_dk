<? $page_title = "Video tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene {width: 960px; height: 540px;}
	.videoplayer {padding-top: 30px; position: relative;}
	.videoplayer video {width: 720px; height: 360px;}

	.videos li {display: inline;}

	.controls {position: absolute; left: 0; top: 0;}
	.controls a {height: 20px; width: 100px; text-align: center; display: inline-block;}
	.controls .playpause {background: green;}
	.playing .controls .playpause {background: red;}
	.controls .ff {background: blue;}
	.controls .rw {background: yellow;}

	.controls .playpause:before {content: "play";}
	.controls .ff:before {content: "ff";}
	.controls .rw:before {content: "rw";}
	.playing .controls .playpause:before {content: "pause";}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			scene.player = u.videoPlayer(scene);


			// player controls
			scene.player.controls = u.ae(scene.player, "div", {"class":"controls"});

			// set up playback controls
			var playpause = u.ae(scene.player.controls, "a", {"class":"playpause"});
			playpause.player = scene.player;
			u.e.click(playpause);
			playpause.clicked = function(event) {
				this.player.togglePlay();
			}

			var rw = u.ae(scene.player.controls, "a", {"class":"rw"});
			rw.player = scene.player;
			rw.mousedowned = function(event) {
//				u.bug("down")
				this.t_rw = u.t.setTimer(this, this.mousedowned, 500);
				this.player.rw();
			}
			u.e.addEvent(rw, "mousedown", rw.mousedowned);
			rw.mouseupped = function(event) {
//				u.bug("up")
				u.t.resetTimer(this.t_rw);
			}
			u.e.addEvent(rw, "mouseup", rw.mouseupped);
			u.e.addEvent(rw, "mouseout", rw.mouseupped);


			var ff = u.ae(scene.player.controls, "a", {"class":"ff"});
			ff.player = scene.player;
			ff.mousedowned = function(event) {
//				u.bug("down")
				this.t_ff = u.t.setTimer(this, this.mousedowned, 500);
				this.player.ff();
			}
			u.e.addStartEvent(ff, ff.mousedowned);
			ff.mouseupped = function(event) {
//				u.bug("up")
				u.t.resetTimer(this.t_ff);
			}
			u.e.addEndEvent(ff, ff.mouseupped);
			u.e.addEvent(ff, "mouseout", ff.mouseupped);


			var playback_info = u.ae(scene.player.controls, "a", {"class":"playback_info"});
			playback_info.player = scene.player;
			playback_info.player.playback_info = playback_info;
			scene.player.timeupdate = function(event) {
				if(this.currentTime) {
					this.playback_info.innerHTML = u.period("m:s.u", {"seconds":this.currentTime}) + "/" + u.period("m:s.u", {"seconds":this.duration});
				}
			}

//			scene.player.loading = function() {u.bug("loading");}
//			scene.player.canplaythrough = function() {u.bug("canplaythrough");}
//			scene.player.playing = function() {u.bug("playing");}
//			scene.player.stalled = function() {u.bug("stalled");}
//			scene.player.ended = function() {u.bug("ended");}
//			scene.player.loadedmetadata = function() {u.bug("loadedmetadata");}
//			scene.player.loadeddata = function() {u.bug("loadeddata");}


			// hide controls
			scene.player.hideControls = function() {
				// reset timer to avoid double actions
				this.t_controls = u.t.resetTimer(this.t_controls);

				u.a.transition(this.controls, "all 0.3s ease-out");
				u.a.setOpacity(this.controls, 0);
			}
			// show controls
			scene.player.showControls = function() {
				// reset timer to keep visible
				if(this.t_controls) {
					this.t_controls = u.t.resetTimer(this.t_controls);
				}
				// fade up
				else {
					u.a.transition(this.controls, "all 0.5s ease-out");
					u.a.setOpacity(this.controls, 1);
				}

				// auto hide after 1 sec of inactivity
				this.t_controls = u.t.setTimer(this, this.hideControls, 1500);
			}
			// enable controls on mousemove
			//u.e.addEvent(player, "mousemove", player.showControls);


			scene.playlist = u.qsa(".videos li", scene);
			for(i = 0; video = scene.playlist[i]; i++) {
				video.player = scene.player;
				u.link(video);
				video.clicked = function() {
					this.player.loadAndPlay(this.url);
				}
			}

			scene.playlist[0].clicked();
		}

	}


//	var obj = u.flash(document.createElement("div"), "/documentation/media/flash/videoplayer.swf")	
	
</script>

<div class="scene i:test">
	<h2>Video</h2>
	<p>Videotest requires interaction and observation :)</p>
	
	<ul class="videos">
		<li><a href="/media/video/video_1.mp4">Video 1</a></li>
		<li><a href="/media/video/video_2.mp4">Video 2</a></li>
	</ul>
</div>

<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>