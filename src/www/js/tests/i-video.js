	Util.Objects["video1"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer();
			div.player = u.ae(div, div.player);
			div.player.load("/media/video/video_1.mov", {"playpause":true});

			var bn_playpause = u.qs("div.controls a.playpause", div.player);
			u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
			u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

			div.player.ended = function() {
				this.play();
			}
		}
	}


	Util.Objects["video2"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer({"playpause":true, "search":true});
			div.player = u.ae(div, div.player);
			div.player.load("/media/video/video_3.mov");

			var bn_playpause = u.qs("div.controls a.playpause", div.player);
			u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
			u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

			var bn_ff = u.qs("div.controls a.ff", div.player);
			u.ae(bn_ff, "span", {"class":"ff", "html":"FF"});

			var bn_rw = u.qs("div.controls a.rw", div.player);
			u.ae(bn_rw, "span", {"class":"rw", "html":"RW"});
		}
	}


	Util.Objects["video3"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer({"playpause":true});
			div.player = u.ae(div, div.player);

			div.player.extendButtons = function() {
				if(!this._buttons_extended) {
					this._buttons_extended = true;

					var bn_playpause = u.qs("div.controls a.playpause", this);
					u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
					u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

					var bn_ff = u.qs("div.controls a.ff", this);
					u.ae(bn_ff, "span", {"class":"ff", "html":"FF"});

					var bn_rw = u.qs("div.controls a.rw", this);
					u.ae(bn_rw, "span", {"class":"rw", "html":"RW"});
				}
			}


			div.playlist = u.qsa(".videos li", div);

			div.playlist[0].player = div.player;
			u.ce(div.playlist[0]);
			div.playlist[0].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":false, "search":false});
				this.player.extendButtons();
			}

			div.playlist[1].player = div.player;
			u.ce(div.playlist[1]);
			div.playlist[1].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":true, "search":false});
				this.player.extendButtons();
			}

			div.playlist[2].player = div.player;
			u.ce(div.playlist[2]);
			div.playlist[2].clicked = function() {
				this.player.loadAndPlay(this.url, {"playpause":true, "search":true});
				this.player.extendButtons();
			}

		}

	}


	Util.Objects["video4"] = new function() {
		this.init = function(div) {

			div.player = u.videoPlayer({"playpause":true, "search":true});
			u.ae(div, div.player);

			div.player.extendButtons = function() {
				if(!this._buttons_extended) {
					this._buttons_extended = true;

					var bn_playpause = u.qs("div.controls a.playpause", this);
					u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
					u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

					var bn_ff = u.qs("div.controls a.ff", this);
					u.ae(bn_ff, "span", {"class":"ff", "html":"FF"});

					var bn_rw = u.qs("div.controls a.rw", this);
					u.ae(bn_rw, "span", {"class":"rw", "html":"RW"});
				}
			}


			var progress = u.ae(div.player, "div", {"class":"progress"});
			progress.player = div.player;
			progress.player.progress = progress;

			var src_path = u.ae(div.player, "div", {"class":"src_path"});
			src_path.player = div.player;
			src_path.player.src_path = src_path;

			div.player.playing = function(event) {
				this.src_path.innerHTML = this.video.src;
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
					this.player.loadAndPlay(this.url);
					this.player.extendButtons();

				}
			}

//			div.playlist[0].clicked();
		}

	}
