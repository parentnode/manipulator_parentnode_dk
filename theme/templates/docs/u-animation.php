<div class="scene docpage i:docpage">
	<h1>Animation</h1>
	<p>
		Using CSS3 transitions to do your animation is by far the best way, - you get better performance and less code. However
		the lack of support in older browsers makes the decision to use transitions less obvious. That is why the animation
		model of Manipulator is made to mimic the CSS3 transitions syntax, while providing fallback for older browsers.
	</p>
	<p>
		Just add your transition, using the shorthand function and state your change. Declare a callback function to be notified when
		transition has ended.
	</p>
	<p class="note">
		Animation support for desktop_light browsers has been disabled because the development overhead exceeded the actual
		value. Animations are still supported in IE9.
	</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.Animation.transition">
				<div class="header">
					<h3>Util.Animation.transition</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.transition</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.transition(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">transition</span>
									<span class="type">Mixed</span> <span class="var">custom_callback</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Set CSS3 transition for node, with timer-based fallback for browsers with no CSS transition support. 
							Declare node.transitioned to receive callback, when transition is done. Transitions and default callback
							are automatically removed when done.
						</p>
						<p>
							The transition duration in milliseconds, is stored in node.duration.
						</p>
						<p>
							Optionally pass a <span class="var">custom_callback</span> parameter with a function reference or name of function
							to be invoked on node when transition is done.
						</p>
						<p>
							Automatically adds vendor prefix (like Moz, webkit, ms or O).
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to apply transition to
								</div>
							</dd>
							<dt><span class="var">transition</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> transition to apply to node
								</div>
							</dd>
							<dt><span class="var">custom_callback</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> Optional custom function reference or name of function to be 
									executed when transition is done.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	scene.transitioned = function() {
		// executed when the transition is done
	}

	u.a.transition(scene, "all 1s ease-in");
	u.a.translate(scene, 100, 100);
&lt;/script&gt;</code>
							<p>
								Set a "all 1s ease-in"-transition on div.scene and then moving it 100px down and 100px right. When transition is done 
								the optional node.transitioned function is invoked.
							</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>try ... catch</li>
								<li>String.match</li>
								<li>parseFloat</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
								<li>Util.Events.addEvent</li>
								<li>Util.Animation.transitionEndEventName</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.translate">
				<div class="header">
					<h3>Util.Animation.translate</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.translate</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.translate(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Integer</span> <span class="var">x</span>,
									<span class="type">Integer</span> <span class="var">y</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>CSS3 translate node to new coordinates x,y.</p>
						<p>
							Translation of nodes will be done with CSS3 when supported by browser, and fall back to
							absolute positioning. When using absolute positioning values will automatically be corrected to 
							work on already absolute positioned nodes.
						</p>
						<p>
							Uses translate3d if browser supports it, because it is hardware accelerated by more browsers.
						</p>
						<p>
							A translated node stores its translate values in node._x and node._y.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to translate
								</div>
							</dd>
							<dt><span class="var">x</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> x-coordinate to translate to.
								</div>
							</dd>
							<dt><span class="var">y</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> y-coordinate to translate to.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.translate(scene, 0, 100);
&lt;/script&gt;</code>
							<p>Translate div.scene to new coordinates, x=0px and y=100px.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
								<li>Util.Animation.support3d</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.rotate">
				<div class="header">
					<h3>Util.Animation.rotate</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.rotate</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.rotate(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">Integer</span> <span class="var">deg</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>CSS3 rotate node to new angle.</p>
						<p>
							Only supported in CSS3 capable browsers.
						</p>
						<p>
							NO fallback to IE filters or likewise. The reasoning is as follows: Old browsers perform 
							advanced tasks poorly, and filters tend to create havoc in conjunction with standards, such as webfonts.
							If you want to use filters, do so specifically - in your own code.
						</p>
						<p>
							A rotated node, stores its rotate angle in node._rotation.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to rotate
								</div>
							</dd>
							<dt><span class="var">deg</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> degrees to rotate node to.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.rotate(scene, 100);
&lt;/script&gt;</code>
							<p>Rotate div.scene 100 degrees clockwise.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.scale">
				<div class="header">
					<h3>Util.Animation.scale</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.scale</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.scale(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">Number</span> <span class="var">scale</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>CSS3 scale node to new dimension.</p>
						<p>
							Only supported in CSS3 capable browsers.
						</p>
						<p>
							NO fallback to IE filters or likewise. The reasoning is as follows: Old browsers perform 
							advanced tasks poorly, and filters tend to create havoc in conjunction with standards, such as webfonts.
							If you want to use filters, do so specifically - in your own code.
						</p>
						<p>
							A scaled node, stores its current scaling in node._scale.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to translate
								</div>
							</dd>
							<dt><span class="var">scale</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> value to scale node to.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.scale(scene, 0.5);
&lt;/script&gt;</code>
							<p>Scale scene to half size.</p>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.scale(scene, 2);
&lt;/script&gt;</code>
							<p>Scale div.scene to double size.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.opacity">
				<div class="header">
					<h3>Util.Animation.opacity</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.opacity</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.Animation.opacity(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Number</span> <span class="var">opacity</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set opacity for node.</p>
						<p>
							Setting opacity of nodes will be done with CSS3 when supported by browser, and fall back to
							setting visibility (visible/hidden) in older browsers. NO fallback to IE filters, due to webfont
							incompatibility.
						</p>
						<p>
							A node with opacity, stores its current opacity value in node._opacity.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to set opacity on
								</div>
							</dd>
							<dt><span class="var">opacity</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Number</span> new opacity (0-1).
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.opacity(scene, 0.5);
&lt;/script&gt;</code>
							<p>Make div.scene semi-transparent.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.width">
				<div class="header">
					<h3>Util.Animation.width</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.width</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.width(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Integer</span> <span class="var">width</span>
								);
							</dd>
						</dl>
					</div>

					
					<div class="description">
						<h4>Description</h4>
						<p>Set width of node, and handle fallback timer-based transition if required.</p>
						<p>
							Stores latest width in node._width.
						</p>
					</div>
					

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to set width on.
								</div>
							</dd>
							<dt><span class="var">width</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> new width of node.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.width(scene, 200);
&lt;/script&gt;</code>
							<p>Set width of div.scene to 200px.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.applyStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.heigth">
				<div class="header">
					<h3>Util.Animation.height</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.height</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.height(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Integer</span> <span class="var">height</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set height of node, and handle fallback timer-based transition if required.</p>
						<p>
							Stores latest height in node._height.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to set height on
								</div>
							</dd>
							<dt><span class="var">height</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> new height of node.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.height(scene, 200);
&lt;/script&gt;</code>
							<p>Set height of div.scene to 200px.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Animation.vendor</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.bgPos">
				<div class="header">
					<h3>Util.Animation.bgPos</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.bgPos</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.bgPos(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Integer</span> <span class="var">x</span>
									<span class="type">Integer</span> <span class="var">y</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set background-position of node, and handle fallback timer-based transition if required.</p>
						<p>
							Stores latest background-position in node._bg_x and node._bg_y.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node change background-position on
								</div>
							</dd>
							<dt><span class="var">x</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> new x-coordinate of background.
								</div>
							</dd>
							<dt><span class="var">y</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> new y-coordinate of background.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.bgPos(scene, 200, 200);
&lt;/script&gt;</code>
							<p>Set background-position: 200px 200px; on div.scene</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Animation.vendor</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.Animation.bgColor">
				<div class="header">
					<h3>Util.Animation.bgColor</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.bgColor</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.bgColor(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">color</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set background-color of node, and handle fallback timer-based transition if required.</p>
						<p>
							Stores latest background-color in node._bg_color.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to change background-color of
								</div>
							</dd>
							<dt><span class="var">color</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> new HEX background-color of node.
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
							<code>&lt;div class=&quot;scene&quot;&gt;&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.a.bgColor(scene, #0000ff);
&lt;/script&gt;</code>
							<p>Set background-color: #0000ff; on div.scene</p>
						</div>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Animation.vendor</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<!--div class="function" id="Util.Animation.requestAnimationFrame">
				<div class="header">
					<h3>Util.Animation.requestAnimationFrame</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.requestAnimationFrame</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.Animation.requestAnimationFrame(
									<span class="type">Node</span> <span class="var">node</span>,
									<span class="type">String</span> <span class="var">callback</span>,
									<span class="type">Integer</span> <span class="var">duration</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Request animation frame <span class="var">callback</span> to <span class="var">node</span>, for the specified <span class="var">duration</span>.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to make callback to
								</div>
							</dd>
							<dt><span class="var">callback</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Name of callback function
								</div>
							</dd>
							<dt><span class="var">duration</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> Duration of animation frame in milliseconds
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
						<p>No examples.</p>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Object.keys</li>
								<li>Date</li>
								<li>eval</li>
								<li>for ... in</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.vendorProperty</li>
								<li>Util.Timer.setTimer</li>
								<li>Util.randomString</li>
							</ul>
						</div>

					</div>

				</div>
			</div-->

			<!--div class="function" id="Util.Animation.cancelAnimationFrame">
				<div class="header">
					<h3>Util.Animation.cancelAnimationFrame</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.cancelAnimationFrame</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.cancelAnimationFrame(
									<span class="type">String</span> <span class="var">id</span>,
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Cancels animation frame with <span class="var">id</span> (id is returned when requesting animation frame).</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">id</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> id of animation frame
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
						<p>No examples.</p>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>none</p>
						</div>

					</div>

				</div>
			</div-->

			<div class="function" id="Util.Animation.support3d">
				<div class="header">
					<h3>Util.Animation.support3d</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.support3d</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.a.support3d</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.Animation.support3d();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Check for CSS3 3D-translation support. 3D-translation is hardware accelerated in more browsers, so it 
							makes a good choice even for 2D-translations. The u.a.translate function of this library automatically
							uses 3D-translations if available.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Boolean</span> Whether the browser supports CSS3 3D translations.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.removeChild</li>
								<li>try ... catch</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>Util.getComputedStyle</li>
								<li>Util.appendElement</li>
								<li>Util.applyStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<!--div class="function" id="Util.Animation.origin">
				<div class="header">
					<h3>Util.Animation.origin</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.Animation.origin</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.Animation.origin(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Integer</span> <span class="var">x</span>,
									<span class="type">Integer</span> <span class="var">y</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Set CSS3 TransformOrigin to new coordinates x,y.</p>
						<p>
							New origin is saved in node._origin_x and node._origin_y.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to change TransformOrigin of
								</div>
							</dd>
							<dt><span class="var">x</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> x-coordinate.
								</div>
							</dd>
							<dt><span class="var">y</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Integer</span> y-coordinate.
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
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>none</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Animation.vendor</li>
								<li>Util.Animation.support3d</li>
							</ul>
						</div>

					</div>

				</div>
			</div-->

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
					<!-- specify main js file (like: u-dom.js) -->
					<li><span class="file">u-animation.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li><span class="file">u-animation-desktop_ie9.js</span></li>
					<!--li><span class="file">u-animation-desktop_light.js</span></li-->
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
					<span class="file">u-animation.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-math.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-animation.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-math.js</span>
				</dd>

				<dt>desktop</dt>
				<dd>
					<span class="file">u-animation.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-math.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-animation.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-math.js</span>
				</dd>
				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-animation.js</span> + 
					<span class="file">u-animation-desktop_ie9.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_ie10.js</span> +
					<span class="file">u-math.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>not supported</dd>
				<!--dd>
					<span class="file">u-animation.js</span> + 
					<span class="file">u-animation-desktop_light.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-math.js</span>
				</dd-->

				<dt>tablet</dt>
				<dd>
					<span class="file">u-animation.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-math.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-animation.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-math.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-animation.js</span> +
					<span class="file">u-events.js</span> +
					<span class="file">u-math.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not tested</dd>
	
				<dt>mobile_light</dt>
				<dd>not supported</dd>

				<dt>tv</dt>
				<dd>not tested</dd>
				<!--dd>
					<span class="file">u-animation.js</span> + 
					<span class="file">u-animation-desktop_light.js</span> +
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-desktop_light.js</span> + 
					<span class="file">u-dom.js</span> +
					<span class="file">u-dom-desktop_light.js</span> +
					<span class="file">u-geometry.js</span> +
					<span class="file">u-math.js</span>
				</dd-->

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
