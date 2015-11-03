Util.Objects["audio1"] = new function() {
	this.init = function(div) {

		div.player = u.audioPlayer();
		div.player = u.ae(div, div.player);
		div.player.load("/media/audio/audio_2.mp3", {"playpause":true});

		// add label to buttons
		var bn_playpause = u.qs("div.controls a.playpause", div.player);
		u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
		u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

		div.player.ended = function() {
			this.play();
		}
	}
}


Util.Objects["audio2"] = new function() {
	this.init = function(div) {

		div.player = u.audioPlayer({"playpause":true, "search":true});

		div.player = u.ae(div, div.player);
		div.player.load("/media/audio/audio_1.mp3");

		var bn_playpause = u.qs("div.controls a.playpause", div.player);
		u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
		u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});

		var bn_ff = u.qs("div.controls a.ff", div.player);
		u.ae(bn_ff, "span", {"class":"ff", "html":"FF"});

		var bn_rw = u.qs("div.controls a.rw", div.player);
		u.ae(bn_rw, "span", {"class":"rw", "html":"RW"});
	}
}

Util.Objects["audio3"] = new function() {
	this.init = function(div) {

		div.player = u.audioPlayer({"playpause":true});
		div.player = u.ae(div, div.player);


		div.playlist = u.qsa(".actions li", div);

		div.playlist[0].player = div.player;
		u.ce(div.playlist[0]);
		div.playlist[0].clicked = function() {
			this.player.loadAndPlay(this.url, {"playpause":false, "search":false});

		}

		div.playlist[1].player = div.player;
		u.ce(div.playlist[1]);
		div.playlist[1].clicked = function() {
			this.player.loadAndPlay(this.url, {"playpause":true, "search":false});

			var bn_playpause = u.qs("div.controls a.playpause", this.player);
			u.ae(bn_playpause, "span", {"class":"play", "html":"play"});
			u.ae(bn_playpause, "span", {"class":"pause", "html":"pause"});
		}

	}

}
