<style type="text/css">

	.audios li {font-size: 13px; display: block;}

	.audioplayer {position: relative; margin: 0 0 0 50px; border: 1px solid #000000; width: 720px; height: 23px;}
	.audioplayer video,
	.audioplayer object {width: 100%; height: 100%;}


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

	Util.Objects["test1"] = new function() {
		this.init = function(div) {

			div.player = u.audioPlayer();
			div.player = u.ae(div, div.player);
			div.player.load("/media/audio/audio_2.mp3", {"playpause":true});
			div.player.ended = function() {
				this.play();
			}
		}
	}


	Util.Objects["test2"] = new function() {
		this.init = function(div) {

			div.player = u.audioPlayer({"playpause":true, "search":true});
			div.player = u.ae(div, div.player);
			div.player.load("/media/audio/audio_1.mp3");
		}
	}

	Util.Objects["test3"] = new function() {
		this.init = function(div) {

			div.player = u.audioPlayer({"playpause":true});
			div.player = u.ae(div, div.player);


			div.playlist = u.qsa(".audios li", div);

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

		}

	}

</script>

<div class="scene i:test">
	<h1>Audio</h1>
	<p>Audiotest requires interaction and observation :)</p>


	<hr />


	<div class="test1 i:test1">
		<h2>Looping audio test</h2>
		<p>Creates looping player</p>
	</div>


	<hr />


	<div class="test2 i:test2">
		<h2>Simple audio player test</h2>
		<p>Creates player with controls for play/pause/ff/rw</p>
	</div>


	<hr />


	<div class="test3 i:test3">
		<h2>Semi advanced audio test</h2>
		<p>Creates player with playlist and different controls for different audios</p>

		<ul class="audios">
			<li><a href="/media/audio/audio_2.mp3">Audio 1 (with no controls)</a></li>
			<li><a href="/media/audio/audio_1.mp3">Audio 2 (with controls for play/pause)</a></li>
		</ul>
	</div>

</div>

<div class="comments"></div>
