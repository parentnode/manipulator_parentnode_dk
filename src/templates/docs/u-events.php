<div class="scene docpage i:docpage">
	<h1>Events</h1>
	<p>
		The Manipulator-event model, has been designed to be as close to regular JavaScript event-handling as possible. Keeping close to
		the actual standard (JavaScript), you can easily make your own adjustments and/or detours, without inventing new events. So why not just use
		regular JavaScript events? Well, because we still need to be able to support older browsers seamlessly, and when it comes to advanced
		event handling, with possibly many different event listeners on the same node, it makes sense to encapsulate some
		functionality in a shorthand function.
	</p>
	<p>
		Manipulator only adds the event listeners it requires at any given time. IE, to catch a click-event, it only applies a mousedown-event
		to the node. When the mousedown event occurs, it adds the mouseup event. When the mouseup event occurs, it resets the applied 
		listeners. This way you always have as few event listeners as possible applied at any given time.
	</p>
	<p>
		Manipulator automatically detects touch-event support and applies events appropriately. It even supports dual events on
		devices with both touch and mouse input. Manipulator also has seamless fallback to browsers using attachEvent.
	</p>
	<p>
		For <em>window</em> and <em>browser</em> events, see the <a href="/docs/u-events-browser">Browser events documentation</a>.
		For <em>drag</em> and <em>swipe</em> events, see the <a href="/docs/u-events-movements">Movements documentation</a>.
	</p>


	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Events.hold">
				<div class="header">
					<h3>Util.Events.hold</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.hold</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.hold</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.hold(
									<span class="type">Node</span> <span class="var">node</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add hold event listener to node. Declare node.held function to receive callback on Event occurrence. A hold-event occurs after 750ms.</p>
						<p>
							If your scripts are using the Manipulator Google Analytics module, the hold-event will be registered 
							automatically (see Parameters for options).
						</p>
						<p> On touch capable devices drag/move will always cancel hold, because it is considered scrolling.
							On mouse capable devices mouseout will cancel the hold.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add hold event listener to.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional event settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">eventCategory</span></dt>
										<dd>Category label for tracking. Default: Uncategorized</dd>
										<dt><span class="value">eventAction</span></dt>
										<dd>Action label for tracking. Default: Held</dd>
										<dt><span class="value">eventLabel</span></dt>
										<dd>Additional label for tracking. Default: event.target.url or small except of node content</dd>
										<dt><span class="value">eventValue</span></dt>
										<dd>Value label for tracking. Default: Null</dd>
										<dt><span class="value">nonInteraction</span></dt>
										<dd>nonInteraction value for tracking. Default: false</dd>
										<dt><span class="value">hitCallback</span></dt>
										<dd>Callback for successful tracking. Default: null</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl class="callbacks">
							<dt>node.held(event)</dt>
							<dd>when held event occurs</dd>
							<dt>node.inputStarted(event)</dt>
							<dd>when mousedown or touchstart event occurs</dd>
							<dt>node.moved(event)</dt>
							<dd>when movement occurs after mousedown or touchstart</dd>
							<dt>node.clickCancelled(event)</dt>
							<dd>when dblclick event listener is cancelled</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.e.hold(node);

node.held = function(event) {
	// do what you want
}</code>
						</div>
						<div class="example">
							<p>With tracking eventCategory:</p>
							<code>u.e.hold(node, {"eventCategory":"Holding"});

node.held = function(event) {
	// do what you want
}</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.resetNestedEvents</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.click">
				<div class="header">
					<h3>Util.Events.click</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.click</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.click</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.click(
									<span class="type">Node</span> <span class="var">node</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add a click event listener using either mouse- or touchevents depending on device support (Autodetected).</p>
						<p>Invokes callback to node.clicked when click event occurs, if node.clicked exists.</p>
						<p>If your scripts are using the Manipulator Google Analytics module, the click-event will be registered automatically (see Parameters for options).</p>
						<p>
							If your clickable node is inside a draggable node, dragging the node will prevent the node.clicked callback. On
							touch capable devices drag/move will always cancel click because it is considered scrolling.
							On mouse capable devices mouseout will cancel the click.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add click eventlistener to.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional event settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">eventCategory</span></dt>
										<dd>Category label for tracking. Default: Uncategorized</dd>
										<dt><span class="value">eventAction</span></dt>
										<dd>Action label for tracking. Default: Clicked</dd>
										<dt><span class="value">eventLabel</span></dt>
										<dd>Additional label for tracking. Default: event.target.url or small except of node content</dd>
										<dt><span class="value">eventValue</span></dt>
										<dd>Value label for tracking. Default: Null</dd>
										<dt><span class="value">nonInteraction</span></dt>
										<dd>nonInteraction value for tracking. Default: false</dd>
										<dt><span class="value">hitCallback</span></dt>
										<dd>Callback for successful tracking. Default: null</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl class="callbacks">
							<dt>node.clicked(event)</dt>
							<dd>when click event occurs</dd>
							<dt>node.inputStarted(event)</dt>
							<dd>when mousedown or touchstart event occurs</dd>
							<dt>node.moved(event)</dt>
							<dd>when movement occurs after mousedown or touchstart</dd>
							<dt>node.clickCancelled(event)</dt>
							<dd>when dblclick event listener is cancelled</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.e.click(node);

node.clicked = function(event) {
	// do what you want
}</code>
						</div>
						<div class="example">
							<p>With tracking eventCategory:</p>
							<code>u.e.click(node, {"eventCategory":"Clicking"});

node.clicked = function(event) {
	// do what you want
}</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.resetNestedEvents</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.dblclick">
				<div class="header">
					<h3>Util.Events.dblclick</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.dblclick</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.dblclick</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.dblclick(
									<span class="type">Node</span> <span class="var">node</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add a dblclick event listener using either mouse- or touchevents depending on device support (Autodetected).</p>
						<p>Invokes callback to node.dblclicked when dblclick event occurs, if node.dblclicked exists.</p>
						<p>If your scripts are using the Manipulator Google Analytics module, the dblclick-event will be registered automatically (see Parameters for options).</p>
						<p>
							If your clickable node is inside a draggable node, dragging the node will prevent the 
							node.dblclicked callback. On touch capable devices drag/move will always cancel dblclick 
							because it is considered scrolling. On mouse capable devices mouseout will cancel the dblclick.
						</p>
						<p class="note">As of now, the dblclick-event does not work in IE8 and older because they require a specific dblclick event.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add dblclick event listener to.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional event settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">eventCategory</span></dt>
										<dd>Category label for tracking. Default: Uncategorized</dd>
										<dt><span class="value">eventAction</span></dt>
										<dd>Action label for tracking. Default: DblClicked</dd>
										<dt><span class="value">eventLabel</span></dt>
										<dd>Additional label for tracking. Default: event.target.url or small except of node content</dd>
										<dt><span class="value">eventValue</span></dt>
										<dd>Value label for tracking. Default: Null</dd>
										<dt><span class="value">nonInteraction</span></dt>
										<dd>nonInteraction value for tracking. Default: false</dd>
										<dt><span class="value">hitCallback</span></dt>
										<dd>Callback for successful tracking. Default: null</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl class="callbacks">
							<dt>node.dblclicked(event)</dt>
							<dd>when doubleclick event occurs</dd>
							<dt>node.inputStarted(event)</dt>
							<dd>when mousedown or touchstart event occurs</dd>
							<dt>node.moved(event)</dt>
							<dd>when movement occurs after mousedown or touchstart</dd>
							<dt>node.clickCancelled(event)</dt>
							<dd>when dblclick event listener is cancelled</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.e.dblclick(node);

node.dblclicked = function(event) {
	// do what you want
}</code>
						</div>
						<div class="example">
							<p>With tracking eventCategory:</p>
							<code>u.e.dblclick(node, {"eventCategory":"DblClicking"});

node.dblclicked = function(event) {
	// do what you want
}</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.resetNestedEvents</li>
								<li>Util.Timer.valid</li>
								<li>Util.Timer.setTimer</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.hover">
				<div class="header">
					<h3>Util.Events.hover</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.hover</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.hover</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.hover(
									<span class="type">Node</span> <span class="var">node</span>
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add hover event listeners using either mouse- or touchevents depending on device support (Autodetected).</p>
						<p>Invokes callback to node.over and node.out when true event occurs.</p>
						<p>
							Out events occuring due to mouse passing over childnodes are ignored.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add hover event listener to.
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional options for hover
								</div>
								<!-- optional details -->
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">delay</span></dt>
										<dd>out-event delay - stalling out event.</dd>
										<dt><span class="value">over</span></dt>
										<dd>Callback function name of over callback. Default is <span class="value">over</span>.</dd>
										<dt><span class="value">out</span></dt>
										<dd>Callback function name of out callback. Default is <span class="value">out</span>.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl class="callbacks">
							<dt>node.over(event)</dt>
							<dd>when mouseover or touchstart event occurs</dd>
							<dt>node.out(event)</dt>
							<dd>when mouseout or touchend event occurs</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.e.hover(node);

node.over = function(event) {
	// pointer has entered node
}
node.out = function(event) {
	// pointer has left node
}</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addOverEvent</li>
								<li>Util.Events.addOutEvent</li>
								<li>Util.Timer.setTimer</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.kill">
				<div class="header">
					<h3>Util.Events.kill</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.kill</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.kill</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.kill(
									<span class="type">Event</span> <span class="var">event</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Prevent default action, propagation, event bubbling. In other words - kill the event.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">event</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Event</span> Event to kill
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

						<div class="example">
							<code>node.clicked = function(event) {
	u.e.kill(event);
}</code>
						<p>Stops event from bubbling to parent elements.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>event.preventDefault</li>
								<li>event.stopPropagation</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.addEvent">
				<div class="header">
					<h3>Util.Events.addEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.addEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.addEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.addEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">type</span>,
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add eventlistener for <span class="var">type</span>-event to <span class="var">node</span>, and apply <span class="var">action</span> as event handler.</p>
						<p>Action will be executed on <span class="var">node</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add eventlistener to
								</div>
							</dd>
							<dt><span class="var">type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> type of event listener (click, mouseover, scroll, etc.)
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on event occurrence
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

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;

	var header = u.querySelector(".header");
	header.mousemoved = function(event) {
		// function body
	}

	u.e.addEvent(header, mousemove, header.mousemoved);
&lt;/script&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>try ... catch</li>
								<li>document.addEventListener</li>
								<li>document.attachEvent</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.removeEvent">
				<div class="header">
					<h3>Util.Events.removeEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.removeEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">Util.Events.removeEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.removeEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">type</span>,
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Remove eventlistener with <span class="var">action</span> for <span class="var">type</span>-event from <span class="var">node</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to remove eventlistener from
								</div>
							</dd>
							<dt><span class="var">type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> type of event listener (click, mouseover, scroll, etc.)
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to be removed from stack
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

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;

	var header = u.querySelector(".header");
	header.mousemoved = function(event) {
		// function body
	}

	u.e.removeEvent(header, mousemove, header.mousemoved);
&lt;/script&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>try ... catch</li>
								<li>document.removeEventListener</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.addStartEvent">
				<div class="header">
					<h3>Util.Events.addStartEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.addStartEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.addStartEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.addStartEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Cross-input listener for start event, adding start eventlistener (mousedown or touchstart).</p>
						<p>Action will be executed on <span class="var">node</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to add start input eventlistener to
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on node when event occurs
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

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;

	var header = u.querySelector(".header");
	header.inputstarted = function(event) {
		// function body
	}

	u.e.addStartEvent(header, header.inputstarted);
&lt;/script&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.removeStartEvent">
				<div class="header">
					<h3>Util.Events.removeStartEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.removeStartEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.removeStartEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.removeStartEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Remove input start eventlistener.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to remove start input eventlistener from
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to be removed from stack
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.addMoveEvent">
				<div class="header">
					<h3>Util.Events.addMoveEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.addMoveEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.addMoveEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.addMoveEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Cross-input listener for move event, adding move eventlistener (mousemove or touchmove).</p>
						<p>Action will be executed on <span class="var">node</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to add move input eventlistener to
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on node when event occurs
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.removeMoveEvent">
				<div class="header">
					<h3>Util.Events.removeMoveEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.removeMoveEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.removeMoveEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.removeMoveEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Remove input move eventlistener.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to remove move input eventlistener from
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to be removed from stack
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.addEndEvent">
				<div class="header">
					<h3>Util.Events.addEndEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.addEndEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.addEndEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.addEndEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Cross-input listener for end event, adding end eventlistener (mouseup or touchend).</p>
						<p>Action will be executed on <span class="var">node</span>.</p>
						<p>
							If mouse capable device and node.snapback function is declared, node.snapback will be
							called on mouseout.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to add end input eventlistener to
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to execute on node when event occurs
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.addEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.removeEndEvent">
				<div class="header">
					<h3>Util.Events.removeEndEvent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.removeEndEvent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.removeEndEvent</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.removeEndEvent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Function</span> <span class="var">action</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Remove input end eventlistener.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> to remove end input eventlistener from
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Function</span> function to be removed from stack
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.resetClickEvents">
				<div class="header">
					<h3>Util.Events.resetClickEvents</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.resetClickEvents</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.resetClickEvents</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.resetClickEvents(
									<span class="type">Node</span> <span class="var">node</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Reset all click-related events on node, returning them to their initial state. You can use this on nodes
							with multiple click-handlers if you need an advanced level of event handling.
						</p>
						<p>
							Most basic event handling and cancellation is automatically handled by the existing functions - this 
							function is only relevant in edge case scenarios.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to reset click-events on.
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.timer.resetTimer</li>
								<li>Util.Events.removeEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.resetEvents">
				<div class="header">
					<h3>Util.Events.resetEvents</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.resetEvents</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.resetEvents</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.resetEvents(
									<span class="type">Node</span> <span class="var">node</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Reset all events on node, returning them to their initial state. You can use this on nodes
							with multiple event-handler if you need an advanced level of event handling
						</p>
						<p>
							Most basic event handling and cancellation is automatically handled by the existing functions - this 
							function is only relevant in edge case scenarios.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to reset events on.
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.resetClickEvents</li>
								<li>Util.Events.resetDragEvents</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Events.resetEvents">
				<div class="header">
					<h3>Util.Events.resetNestedEvents</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Events.resetNestedEvents</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.e.resetNestedEvents</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Events.resetNestedEvents(
									<span class="type">Node</span> <span class="var">node</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Reset all events on node and parentNodes, returning them to their initial state. You can use this on nodes
							with multiple nested event-handlers, to make sure only the correct event surfaces.
						</p>
						<p>
							Most basic event handling and cancellation is automatically handled by the existing functions - this 
							function is only relevant in edge case scenarios.
						</p>
						<p>
							For example, if you have a list, with draggable nodes, and inside each node is a clickable 
							child. If a mousedown occurs, it can be the start of either a click or a drag. If a mousemove event
							occurs before a mouseup, you want to reset the click listener, to avoid a click from happening
							when the mouseup occurs.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> child node to start nested reset on.
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
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.resetEvents</li>
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
					<li><span class="file">u-events.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li><span class="file">u-events-desktop_light.js</span></li>
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
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-array-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-events.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-geometry.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> +
					<span class="file">u-timer.js</span> +
					<span class="file">u-dom.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-string.js</span> +
					<span class="file">u-array-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
