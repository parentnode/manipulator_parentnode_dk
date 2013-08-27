<? $page_title = "Movement Events documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:docpage">
	<h1>Movements</h1>
	<p>Advanced events for drag and swipe handling. Includes overlap detection.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Events.drag">
				<div class="header">
					<h3>Util.Events.drag</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.drag</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.drag</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.drag(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">Mixed</span> <span class="var">boundaries</span>
									[, <span class="type">JSON</span> <span class="var">settings</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make node draggable, within boundaries.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to make draggable
								</div>
							</dd>
							<dt><span class="var">boundaries</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Array or Node to use as drag boundaries
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">Node</span></dt>
										<dd>Node used as boundaries</dd>
										<dt><span class="value">Array</span></dt>
										<dd>Array containing left, top, righ, bottom coordinates to be used as boundaries</dd>
									</dl>
								</div>
							</dd>
							<dt><span class="var">settings</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with drag-settings
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">strict</span></dt>
										<dd>Default true, Node will follow mouse strictly. If false, node will be projected to end coordinates based on drag speed.</dd>
										<dt><span class="value">elastica</span></dt>
										<dd>Elastic boundaries allowing you to drag node over boundaries and snapping back on drop</dd>
										<dt><span class="value">dropout</span></dt>
										<dd>Drop node if mouseout event occurs while dragging</dd>
										<dt><span class="value">show_bounds</span></dt>
										<dd>Show boundaries - for debugging your boundaries</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
						<p>Event callbacks to node.picked, node.moved, node.dropped and node.projected.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;node&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	var node = u.querySelector(".node");

	u.e.drag(node, scene);

	node.picked = function(event) {
		// invoked when node is picked
	}
	node.moved = function(event) {
		// invoked when node is moved
	}
	node.dropped = function(event) {
		// invoked when node is dropped
	}
&lt;/script&gt;</code>
							<p>Enable dragging of div.node inside div.scene.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>document.constructor</li>
								<li>document.constructor.toString</li>
								<li>String.match</li>
								<li>document.childNodes</li>
								<li>Math.abs</li>
								<li>Math.round</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.absoluteX</li>
								<li>Util.absoluteY</li>
								<li>Util.eventX</li>
								<li>Util.eventY</li>
								<li>Util.Events.addEvent</li>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.addMoveEvent</li>
								<li>Util.Events.addEndEvent</li>
								<li>Util.Events.addEvent</li>
								<li>Util.Events.resetNestedEvents</li>
								<li>Util.Events.overlap</li>
								<li>Util.Animation.translate</li>
								<li>Util.Animation.transition</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.swipe">
				<div class="header">
					<h3>Util.Events.swipe</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.swipe</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.swipe</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.swipe(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">Mixed</span> <span class="var">boundaries</span>
									[, <span class="type">JSON</span> <span class="var">settings</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Make node swipeable, within boundaries.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to make swipeable
								</div>
							</dd>
							<dt><span class="var">boundaries</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Array or Node to use as swipe boundaries
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">Node</span></dt>
										<dd>Node used as boundaries</dd>
										<dt><span class="value">Array</span></dt>
										<dd>Array containing left, top, righ, bottom coordinates to be used as boundaries</dd>
									</dl>
								</div>
							</dd>
							<dt><span class="var">settings</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with swipe-settings
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">elastica</span></dt>
										<dd>Elastic boundaries allowing you to drag node over boundaries and snapping back on drop</dd>
										<dt><span class="value">dropout</span></dt>
										<dd>Drop node if mouseout event occurs while dragging</dd>
										<dt><span class="value">show_bounds</span></dt>
										<dd>Show boundaries - for debugging your boundaries</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
						<p>Event callbacks to node.picked, node.moved, node.dropped, node.swipedUp, node.swipedDown, node.swipedRight and node.swipedLeft.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;node&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	var node = u.querySelector(".node");

	u.e.swipe(node, scene);

	node.swipedUp = function(event) {
		// invoked when node is picked
	}
	node.swipedDown = function(event) {
		// invoked when node is moved
	}
&lt;/script&gt;</code>
							<p>Enable swiping of div.node inside div.scene.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.Events.drag</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.resetDragEvents">
				<div class="header">
					<h3>Util.Events.resetDragEvents</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.resetDragEvents</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.resetDragEvents</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.resetDragEvents(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>_description_</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to reset drag events on
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.overlap">
				<div class="header">
					<h3>Util.Events.overlap</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.overlap</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.overlap</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.Events.overlap(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Mixed</span> <span class="var">boundaries</span> 
									[, <span class="type">Boolean</span> <span class="var">strict</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Detect overlap between node and boundaries. Boundaries can be other node or Array of coordinates. Use strict to detect partial or complete overlaps.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to detect overlap of
								</div>
							</dd>
							<dt><span class="var">boundaries</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Array or Node to use for overlap detection
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">Node</span></dt>
										<dd>Node used as boundaries</dd>
										<dt><span class="value">Array</span></dt>
										<dd>Array containing left, top, righ, bottom coordinates to be used as boundaries</dd>
									</dl>
								</div>
							</dd>
							<dt><span class="var">strict</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional true to detect complete overlap only. Default is false, detection partial overlap.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Boolean</span> true for overlap, false for no overlap</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.constructor</li>
								<li>document.constructor.toString</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="section files">
		<div class="header">
			<h2>Files</h2>
		</div>
		<div class="body">

			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<!-- specify main js file (like: u-dom.js) -->
					<li>u-events-movements.js</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li>none</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="section segments">
		<div class="header">
			<h2>Segment dependencies</h2>
		</div>
		<div class="body">
			<dl class="segments">
				<!-- specify which files are required for which segments -->
				<!-- add todo class if segment is not tested yet -->
				<dt>desktop</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_ie</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-animation-desktop_ie.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-animation-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-array-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-animation-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-array-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd>
					<span class="file">u-events-movements.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-animation.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>basic</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>