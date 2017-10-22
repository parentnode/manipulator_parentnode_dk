Util.Objects["mediaAutoplay"] = new function() {
	this.init = function(div) {

		div.player = u.videoPlayer({
			autoplay:true,
			playsinline:true,
		});
		div.player = u.ae(div, div.player);
		div.player.div = div;


		div.player.ready = function() {

			u.ae(this.div, "div", {html:"Autoplay:" + this.can_autoplay});
			u.ae(this.div, "div", {html:"Autoplay, muted:" + this.can_autoplay_muted});


			if(this.can_autoplay) {
				div.player.load("/media/video/video_1.mov");
			}
			else if(this.can_autoplay_muted) {
				div.player.load("/media/video/video_1.mov", {"muted":true});
			}
			else {
				console.log("cannot autoplay")
			}
		}

	}
}

// looping player
Util.Objects["medialoop"] = new function() {
	this.init = function(div) {

		div.player = u.videoPlayer({loop: true, controls:{play:true, pause:true}});

		div.player = u.ae(div, div.player);
		div.player.load("/media/video/video_1.mov");

		div.player.ended = function() {
			this.play();
		}
	}
}


Util.Objects["mediacontrols"] = new function() {
	this.init = function(div) {

		div.player = u.videoPlayer({controls:{"playpause":true, "search":true}});
		div.player = u.ae(div, div.player);
		div.player.load("/media/video/video_3.mov");

	}
}


Util.Objects["mediamulticontrols"] = new function() {
	this.init = function(div) {

		div.player = u.videoPlayer({controls:{"playpause":true}});
		div.player = u.ae(div, div.player);


		div.playlist = u.qsa(".videos li", div);

		div.playlist[0].player = div.player;
		u.ce(div.playlist[0]);
		div.playlist[0].clicked = function() {
			this.player.loadAndPlay(this.url, {controls:false});
		}

		div.playlist[1].player = div.player;
		u.ce(div.playlist[1]);
		div.playlist[1].clicked = function() {
			this.player.loadAndPlay(this.url, {controls:{"playpause":true, "search":false}});
		}

		div.playlist[2].player = div.player;
		u.ce(div.playlist[2]);
		div.playlist[2].clicked = function() {
			this.player.loadAndPlay(this.url, {controls:{"playpause":true, "search":true}});
		}

	}

}


Util.Objects["mediafull"] = new function() {
	this.init = function(div) {

		div.player = u.videoPlayer();
		u.ae(div, div.player);


		var progress = u.ae(div.player, "div", {"class":"progress"});
		progress.player = div.player;
		progress.player.progress = progress;

		var src_path = u.ae(div.player, "div", {"class":"src_path"});
		src_path.player = div.player;
		src_path.player.src_path = src_path;

		div.player.playing = function(event) {
			this.src_path.innerHTML = this.media.src;
		}

		div.player.timeupdate = function(event) {
			if(this.currentTime) {
				this.progress.innerHTML = u.period("m:s.u", {"seconds":this.currentTime}) + "/" + u.period("m:s.u", {"seconds":this.duration});
			}
		}

//			div.player.loading = function() {u.bug("loading");}
//			div.player.canplaythrough = function() {u.bug("canplaythrough");}
//			div.player.playing = function() {u.bug("playing");}
//			div.player.stalled = function() {u.bug("stalled");}
//			div.player.ended = function() {u.bug("ended");}
//			div.player.loadedmetadata = function() {u.bug("loadedmetadata");}
//			div.player.loadeddata = function() {u.bug("loadeddata");}


		div.playlist = u.qsa(".videos li", div);
		for(i = 0; video = div.playlist[i]; i++) {
			video.player = div.player;
			u.ce(video);
			video.clicked = function() {
				this.player.loadAndPlay(this.url, {controls:{"playpause":true, "search":true}});
			}
		}

//			div.playlist[0].clicked();
	}

}
