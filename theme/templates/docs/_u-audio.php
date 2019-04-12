<div class="scene docpage i:docpage">
	<h1>Audio</h1>
	<p>
		HTML5 audio player with fallback to Flash/Native audio player.
	</p>
	<p>
		The audio player supports .mp3, .ogg, and .wav and changes the extension of the request-url automatically to
		fit your browser. For example, if you load a .mp3 in Firefox, the file extension with switch to .ogg. In Safari it
		will remain as .mp3.
	</p>
	<p>
		It comes with and extensive set of methods and callbacks,
		and allows you to easily implement a audio player in your webpage and customize interaction to your specific needs.
	</p>
	<p>
		The audio player has an optional controller panel with Play/Pause/FF/RW buttons, ready for your custom layout.
	</p>


	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

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
						<p>Return audio player node, extended with controller methods and event callbacks.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for click handling.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">controls</span></dt>
										<dd>Set native controls state - default false</dd>

										<dt><span class="value">playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind</dd>

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
							<span class="type">node</span> <span class="htmltag">DIV.audioplayer</span> (audioPlayer) containing 
							<span class="htmltag">audio</span> or <span class="htmltag">object</span> with fallback
							flash player.
						</p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl>
							<dt>audioPlayer.loading(event)</dt>
							<dd>when data is loading</dd>
							<dt>audioPlayer.canplaythrough(event)</dt>
							<dd>when enough data is loaded to perform uninterrupted playback</dd>
							<dt>audioPlayer.playing(event)</dt>
							<dd>when playback is begun</dd>
							<dt>audioPlayer.paused(event)</dt>
							<dd>when playback is paused</dd>
							<dt>audioPlayer.stalled(event)</dt>
							<dd>when playback is stalling</dd>

							<dt>audioPlayer.ended(event)</dt>
							<dd>when playback has ended</dd>
							<dt>audioPlayer.loadedmetadata(event)</dt>
							<dd>when metadata is loaded (duration, title, etc.)</dd>
							<dt>audioPlayer.loadeddata(event)</dt>
							<dd>when entire source is loaded</dd>
							<dt>audioPlayer.timeupdate(event)</dt>
							<dd>when position is updated</dd>	
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.audioPlayer();</code>
							<p>Returns simple <span class="htmltag">div.audioplayer</span></p>
						</div>

						<div class="example">
							<code>var player = u.audioPlayer({"playpause":true});</code>
							<p>Return <span class="htmltag">div.audioplayer</span> with Play/Pause button</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.removeChild</li>
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
							</ul>
						</div>

					</div>

				</div>

			</div>

			<div class="function" id="audioPlayer.load">
				<div class="header">
					<h3>audioPlayer.load</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.load</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.load(
									<span class="type">String</span> <span class="var">src</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Load src into audio player. Source is automatically changed to format supported by browser.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">src</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> audio src to load
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for click handling.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">controls</span></dt>
										<dd>Set native controls state - default false</dd>

										<dt><span class="value">playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind</dd>

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
							<code>var player = u.audioPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/audio/audio_1.mp3");</code>
							<p>Injects audio into <span class="htmltag">div.scene</span> and loads "/media/audio/audio_1.mp3", without beginning playback.</p>
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

			<div class="function" id="audioPlayer.play">
				<div class="header">
					<h3>audioPlayer.play</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.play</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.play(
									<span class="type">Number</span> <span class="var">position</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Play currently loaded src at specified position or beginning.</p>
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
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>var player = u.audioPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/audio/audio_1.mp3");
player.play(1);
</code>
							<p>
								Injects audio into <span class="htmltag">div.scene</span> and loads "/media/audio/audio_1.mp3", 
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

			<div class="function" id="audioPlayer.loadAndPlay">
				<div class="header">
					<h3>audioPlayer.loadAndPlay</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.loadAndPlay</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.loadAndPlay(
									<span class="type">String</span> <span class="var">src</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Load src into audio player. Source is automatically changed to format supported by browser.
							Playback is begun as soon as canplaythrough event occurs.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">src</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> audio src to load
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for click handling.
								</div>
								<!-- optional details -->
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">position</span></dt>
										<dd>Set initial playback position - default 0</dd>

										<dt><span class="value">autoplay</span></dt>
										<dd>Set initial autoplay state - default false</dd>

										<dt><span class="value">controls</span></dt>
										<dd>Set native controls state - default false</dd>

										<dt><span class="value">playpause</span></dt>
										<dd>Inject custom controls div with Play/Pause button</dd>

										<dt><span class="value">search</span></dt>
										<dd>Inject custom controls div with FF/RW buttons</dd>

										<dt><span class="value">ff_skip</span></dt>
										<dd>Time in seconds to skip ahead for Fast Forward</dd>

										<dt><span class="value">rw_skip</span></dt>
										<dd>Time in seconds to jump back for Rewind</dd>

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
							<code>var player = u.audioPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.loadAndPlay("/media/audio/audio_1.mp3");</code>
							<p>
								Injects audio into <span class="htmltag">div.scene</span> loads "/media/audio/audio_1.mp3", 
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

			<div class="function" id="audioPlayer.pause">
				<div class="header">
					<h3>audioPlayer.pause</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.pause</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.pause();
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
							<code>var player = u.audioPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/audio/audio_1.mp3");
player.play(1);
player.pause();
</code>
							<p>
								Injects audio into <span class="htmltag">div.scene</span> and loads "/media/audio/audio_1.mp3", 
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

			<div class="function" id="audioPlayer.stop">
				<div class="header">
					<h3>audioPlayer.stop</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.stop</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.stop();
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
							<code>var player = u.audioPlayer();
var scene = u.qs(".scene");
u.ae(scene, player);
player.load("/media/audio/audio_1.mp3");
player.play(1);
player.stop();
</code>
							<p>
								Injects audio into <span class="htmltag">div.scene</span> and loads "/media/audio/audio_1.mp3", 
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

			<div class="function" id="audioPlayer.ff">
				<div class="header">
					<h3>audioPlayer.ff</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.ff</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.ff();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Fast forward through audio, in steps of ff_skip (default 2 secs).</p>
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

			<div class="function" id="audioPlayer.rw">
				<div class="header">
					<h3>audioPlayer.rw</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">audioPlayer.rw</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								audioPlayer.rw();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Rewinds through audio, in steps of rw_skip (default 2 secs).</p>
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
					<li>u-audio.js</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li>beta-u-audio-desktop_light.js</li>
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
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-timer.js</span>
				</dd>

				<dt>desktop_light - BETA</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">beta-u-audio-desktop_light.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-timer.js</span>
				</dd>
	
				<dt>mobile - BETA</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">beta-u-audio-desktop_light.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv - BETA</dt>
				<dd>
					<span class="file">u-audio.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-dom.js</span> + 
					<span class="file">u-timer.js</span> +
					<span class="file">beta-u-audio-desktop_light.js</span> +
					<span class="file">u-string.js</span> + 
					<span class="file">u-flash.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
