<div class="scene docpage i:docpage">
	<h1>Media player for Video and Audio</h1>
	<p>
		HTML5 video and audio player with fallback to Flash/Native video player.
	</p>
	<p>
		The player supports .mp4, .ogv, .3gp and .mov for video and .mp3, .ogg and .wav for audio. 
	</p>
	<p>
		It automatically changes the extension of the request url to
		fit your browser support. For example, if you load a .mov in Firefox, Safari and Chrome, the file extension will 
		switch to .mp4, while in older Firefox' it will switch to .ogv.
	</p>
	<p>
		It comes with and extensive set of methods and callbacks,
		and allows you to easily implement a video player in your webpage and customize interaction to your specific needs.
	</p>
	<p>
		The player has an optional controller panel with Play/Pause/FF/RW buttons, ready for your custom layout.
	</p>

	<p>
		It also supports autoplay detection for inline and muted inline playback on iOS and Android.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.videoPlayer">
				<div class="header">
					<h3>Util.videoPlayer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.videoPlayer</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node videoPlayer</span> = 
								Util.videoPlayer(
									[<span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Returns video player node, extended with controller methods and event callbacks.
							This is just a shorthand version of u.mediaPlayer({type:"video"}). See
							<a href="#Util.mediaPlayer">Util.mediaPlayer</a> for parameter and callback documentation.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options as specified for u.mediaPlayer.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">node</span> <span class="htmltag">DIV.videoplayer</span> (videoPlayer) containing 
							<span class="htmltag">video</span>.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.videoPlayer();</code>
							<p>Returns simple <span class="htmltag">div.videoplayer</span>.</p>
						</div>

						<div class="example">
							<code>var player = u.videoPlayer({muted:true, controls:{"playpause":true}});</code>
							<p>Returns <span class="value">muted</span> <span class="htmltag">div.videoplayer</span> with Play/Pause button.</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.mediaPlayer</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

			<div class="function" id="Util.audioPlayer">
				<div class="header">
					<h3>Util.audioPlayer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.audioPlayer</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node audioPlayer</span> = 
								Util.audioPlayer(
									[<span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Return audio player node, extended with controller methods and event callbacks.
							This is just a shorthand version of u.mediaPlayer({type:"audio"}). See
							<a href="#Util.mediaPlayer">Util.mediaPlayer</a> for parameter and callback documentation.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options as specified for u.mediaPlayer.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">node</span> <span class="htmltag">DIV.audioplayer</span> (audioPlayer) containing 
							<span class="htmltag">audio</span>.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.audioPlayer();</code>
							<p>Returns simple <span class="htmltag">div.audioplayer</span></p>
						</div>

						<div class="example">
							<code>var player = u.audioPlayer({muted:true, controls:{"playpause":true}});</code>
							<p>Return <span class="value">muted</span> <span class="htmltag">div.audioplayer</span> with Play/Pause button</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.mediaPlayer</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

			<div class="function" id="Util.mediaPlayer">
				<div class="header">
					<h3>Util.mediaPlayer</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.mediaPlayer</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node mediaPlayer</span> = 
								Util.mediaPlayer(
									[<span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Return media player node (audio/video), extended with controller methods and event callbacks.</p>
						<p>
							Autoplay detection will be performed and make callback to node.ready when result is ready. This
							will make two variables available on the player, <span class="var">node.can_autoplay</span> and 
							<span class="var">node.can_autoplay_muted</span> so you can deal with browser conditions appropriately.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for player and controls.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">type</span></dt>
										<dd>Type of player - default <span class="value">video</span></dd>

										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">loop</span></dt>
										<dd>Set initial loop state - default false</dd>

										<dt><span class="value">muted</span></dt>
										<dd>Set initial muted state - default false</dd>

										<dt><span class="value">playsinline</span></dt>
										<dd>Set initial playsinline state - default false</dd>

										<dt><span class="value">crossorigin</span></dt>
										<dd>Set initial crossorigin state for CORS - default <span class="value">anonymous</span></dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward. Default: 2s.</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind. Default: 2s.</dd>


										<dt><span class="value">controls</span></dt>
										<dd>Set controls state - default false. Set to true for native controls, or specify custom controls in controls object.</dd>

										<dt><span class="value">controls.playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">controls.play</span></dt>
										<dd>Inject custom controls div with Playbutton</dd>

										<dt><span class="value">controls.pause</span></dt>
										<dd>Inject custom controls div with Pause button</dd>

										<dt><span class="value">controls.stop</span></dt>
										<dd>Inject custom controls div with Stop button</dd>

										<dt><span class="value">controls.search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>


										<!--dt><span class="value">zoom</span></dt>
										<dd>Inject custom controls div with Zoom/Fullscreen button</dd-->

										<!--dt><span class="value">volume</span></dt>
										<dd>Inject custom controls div with volume button</dd-->
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">node</span> <span class="htmltag">DIV.audioplayer</span> containing 
							<span class="htmltag">audio</span>-tag or <span class="type">node</span> <span class="htmltag">DIV.videoplayer</span> containing 
							<span class="htmltag">video</span>-tag.
						</p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl>
							<dt>player.ready(event)</dt>
							<dd>when autoplay detection is done.</dd>
							<dt>player.loading(event)</dt>
							<dd>when data is loading</dd>
							<dt>player.canplaythrough(event)</dt>
							<dd>when enough data is loaded to perform uninterrupted playback</dd>
							<dt>player.playing(event)</dt>
							<dd>when playback is begun</dd>
							<dt>player.paused(event)</dt>
							<dd>when playback is paused</dd>
							<dt>player.stalled(event)</dt>
							<dd>when playback is stalling</dd>
							<dt>player.error(event)</dt>
							<dd>On playback error</dd>
							<dt>player.ended(event)</dt>
							<dd>when playback has ended</dd>
							<dt>player.loadedmetadata(event)</dt>
							<dd>when metadata is loaded (duration, title, etc.)</dd>
							<dt>player.loadeddata(event)</dt>
							<dd>when entire source is loaded</dd>
							<dt>player.timeupdate(event)</dt>
							<dd>when playback time is updated</dd>	
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.player();</code>
							<p>Returns simple <span class="htmltag">div.videoplayer</span></p>
						</div>

						<div class="example">
							<code>var player = u.mediaPlayer({controls:{"playpause":true}});</code>
							<p>Return <span class="htmltag">div.videoplayer</span> with Play/Pause button.</p>
						</div>

						<div class="example">
							<code>var player = u.mediaPlayer({type:"audio", controls:{"playpause":true}});</code>
							<p>Return <span class="htmltag">div.audioplayer</span> with Play/Pause button.</p>
						</div>
						<div class="example">
							<code>var player = u.mediaPlayer({type:"video", muted:true, playsinline:true, autoplay:true, controls:{"play":true, "stop":true}});</code>
							<p>
								Returns muted inline autoplaying <span class="htmltag">div.videoplayer</span> with a 
								Play and a Stop button, that works in modern tablet and smartphone browsers.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.removeChild</li>
								<li>document.removeAttribute</li>
								<li>document.setAttribute</li>
								<li>String.match</li>
								<li>String.replace</li>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.addClass</li>
								<li>Util.removeClass</li>
								<li>Util.hasClass</li>
								<li>Util.appendElement</li>
								<li>Util.Events.addEvent</li>
								<li>Util.Events.removeEvent</li>
								<li>Util.randomString</li>
								<li>Util.applyStyles</li>
								<li>Util.Animation.transition</li>
							</ul>
						</div>

					</div>

				</div>

			</div>

			<div class="function" id="mediaPlayer.load">
				<div class="header">
					<h3>mediaPlayer.load</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.load</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.load(
									<span class="type">String</span> <span class="var">src</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Load src into media player. Source is automatically changed to format supported by browser.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">src</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> media src to load
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for player and controls.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">loop</span></dt>
										<dd>Set initial loop state - default false</dd>

										<dt><span class="value">muted</span></dt>
										<dd>Set initial muted state - default false</dd>

										<dt><span class="value">playsinline</span></dt>
										<dd>Set initial playsinline state - default false</dd>

										<dt><span class="value">crossorigin</span></dt>
										<dd>Set initial crossorigin state for CORS - default <span class="value">anonymous</span></dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward. Default: 2s.</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind. Default: 2s.</dd>


										<dt><span class="value">controls</span></dt>
										<dd>Set controls state - default false. Set to true for native controls, or specify custom controls in controls object.</dd>

										<dt><span class="value">controls.playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">controls.play</span></dt>
										<dd>Inject custom controls div with Playbutton</dd>

										<dt><span class="value">controls.pause</span></dt>
										<dd>Inject custom controls div with Pause button</dd>

										<dt><span class="value">controls.stop</span></dt>
										<dd>Inject custom controls div with Stop button</dd>

										<dt><span class="value">controls.search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>

										<!--dt><span class="value">zoom</span></dt>
										<dd>Inject custom controls div with Zoom/Fullscreen button</dd-->

										<!--dt><span class="value">volume</span></dt>
										<dd>Inject custom controls div with volume button</dd-->
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.mediaPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/assets/video/1.mp4");</code>
							<p>Injects video into <span class="htmltag">div.scene</span> and loads "/assets/media_1.mp4", without beginning playback.</p>
						</div>
						<div class="example">
							<code>var player = u.videoPlayer();
var scene = u.querySelector(".scene");
u.appendElement(scene, player);
player.ready = function() {
	if(this.can_autoplay) {
		this.load("/assets/video/1.mov", {autoplay:true, playsinline:true});
	}
	else if(this.can_autoplay_muted) {
		this.load("/assets/video/1.mov", {muted:true, autoplay:true, playsinline:true});
	}
	else {
		alert("Sustainable living. We applaud it.");
	}
}</code>
							<p>Injects media into <span class="htmltag">div.scene</span> and waits for autoplay detection to make callback to ready, 
								before deciding what to do. If autoplay is supported, it loads "/assets/video/1.mov", and starts playback immediately.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.hasClass</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.play">
				<div class="header">
					<h3>mediaPlayer.play</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.play</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Promise</span> = 
								mediaPlayer.play(
									<span class="type">Number</span> <span class="var">position</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Play currently loaded src at beginning or specified position.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">src</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> position in seconds
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Promise</span> returned by audio.play or video.play.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.mediaPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/assets/video/1.mov");
player.play(1);
</code>
							<p>
								Injects video into <span class="htmltag">div.scene</span> and loads "/assets/video/1.mov", 
								starts playback at 1sec.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.hasClass</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.loadAndPlay">
				<div class="header">
					<h3>mediaPlayer.loadAndPlay</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.loadAndPlay</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.loadAndPlay(
									<span class="type">String</span> <span class="var">src</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Load src into media player. Source is automatically changed to format supported by browser.
							Playback is begun as soon as canplaythrough event occurs.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">src</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> media src to load
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for player and controls.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">position</span></dt>
										<dd>Set initial playback position - default 0</dd>

										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">loop</span></dt>
										<dd>Set initial loop state - default false</dd>

										<dt><span class="value">muted</span></dt>
										<dd>Set initial muted state - default false</dd>

										<dt><span class="value">playsinline</span></dt>
										<dd>Set initial playsinline state - default false</dd>

										<dt><span class="value">crossorigin</span></dt>
										<dd>Set initial crossorigin state for CORS - default <span class="value">anonymous</span></dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward. Default: 2s.</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind. Default: 2s.</dd>


										<dt><span class="value">controls</span></dt>
										<dd>Set controls state - default false. Set to true for native controls, or specify custom controls in controls object.</dd>

										<dt><span class="value">controls.playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">controls.play</span></dt>
										<dd>Inject custom controls div with Playbutton</dd>

										<dt><span class="value">controls.pause</span></dt>
										<dd>Inject custom controls div with Pause button</dd>

										<dt><span class="value">controls.stop</span></dt>
										<dd>Inject custom controls div with Stop button</dd>

										<dt><span class="value">controls.search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>

										<!--dt><span class="value">zoom</span></dt>
										<dd>Inject custom controls div with Zoom/Fullscreen button</dd-->

										<!--dt><span class="value">volume</span></dt>
										<dd>Inject custom controls div with volume button</dd-->
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Promise</span> returned by audio.play or video.play.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.mediaPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.loadAndPlay("/assets/video/1.mov");</code>
							<p>
								Injects video into <span class="htmltag">div.scene</span> loads "/assets/video/1.mov", 
								and begins playback when canplaythrough event occurs.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.hasClass</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.pause">
				<div class="header">
					<h3>mediaPlayer.pause</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.pause</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.pause();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Pause current playback but stay at current position.</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.mediaPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/media/media_1.mov");
player.play(1);
player.pause();
</code>
							<p>
								Injects video into <span class="htmltag">div.scene</span> and loads "/media/media/media_1.mov", 
								starts playback at 1sec, and padependencies immidately.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.hasClass</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.stop">
				<div class="header">
					<h3>mediaPlayer.stop</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.stop</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.stop();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Pause current playback and returns to postion 0.</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.mediaPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/media/media_1.mov");
player.play(1);
player.stop();
</code>
							<p>
								Injects media into <span class="htmltag">div.scene</span> and loads "/media/media/media_1.mov", 
								starts playback at 1sec, and stops immidately, returning to position 0.
							</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>typeof</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.hasClass</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.ff">
				<div class="header">
					<h3>mediaPlayer.ff</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.ff</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.ff();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Fast forward through media, in steps of ff_skip (default 2 secs).</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="mediaPlayer.rw">
				<div class="header">
					<h3>mediaPlayer.rw</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">mediaPlayer.rw</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								mediaPlayer.rw();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Rewinds through media, in steps of rw_skip (default 2 secs).</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

	<div class="section includefiles">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<li>u-media.js</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li>beta-u-media-desktop_light.js</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="section segmentsupport">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<dt>desktop_edge</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_light - BETA</dt>
				<dd>
					<span class="file">beta-u-media-desktop_light.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-media.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>
	
				<dt>mobile - BETA</dt>
				<dd>
					<span class="file">beta-u-media-desktop_light.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv - BETA</dt>
				<dd>
					<span class="file">beta-u-media-desktop_light.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
