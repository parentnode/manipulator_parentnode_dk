<? $page_title = "Geometry documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docpage">
	<h1>Geometry</h1>
	<p>Positions, sizes and offsets.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.absoluteX">
				<div class="header">
					<h3>Util.absoluteX</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.absoluteX</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.absX</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.absoluteX(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get absolute x coordinate of Node, relative to top/left corner of page.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get absolute x coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> absolute x coordinate in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.offsetParent</li>
								<li>document.offsetLeft</li>
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

			<div class="function" id="Util.absoluteY">
				<div class="header">
					<h3>Util.absoluteY</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.absoluteY</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.absY</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.absoluteY(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get absolute y coordinate of Node, relative to top/left corner of page.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get absolute x coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> absolute y coordinate in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.offsetParent</li>
								<li>document.offsetTop</li>
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

			<div class="function" id="Util.relativeX">
				<div class="header">
					<h3>Util.relativeX</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.relativeX</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.relX</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.relativeX(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get relative x coordinate of Node, relative to first relative/absolute node. This is the value you can 
							use to position a node absolute, to keep it in the same place. Why? If you want to absolutely position 
							a static node.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get relative x coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> relative x coordinate in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.offsetParent</li>
								<li>document.offsetLeft</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.relativeY">
				<div class="header">
					<h3>Util.relativeY</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.relativeY</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.relY</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.relativeY(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get relative y coordinate of Node, relative to first relative/absolute node. This is the value you can 
							use to position a node absolute, to keep it in the same place. Why? If you want to absolutely position 
							a static node.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get relative y coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> relative y coordinate in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.offsetParent</li>
								<li>document.offsetTop</li>
								<li>String.match</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.actualWidth">
				<div class="header">
					<h3>Util.actualWidth</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.actualWidth</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.actualW</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.actualWidth(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get the actual width of node - meaning the CSS width, excluding padding. Not to be confused with offsetWidth.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get width of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> actual width of node in pixels.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>parseInt</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.actualHeight">
				<div class="header">
					<h3>Util.actualHeight</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.actualHeight</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.actualH</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.actualHeight(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get the actual height of node - meaning the CSS height, excluding padding. Not to be confused with offsetHeight.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get height of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> actual height of node in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>parseInt</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.eventX">
				<div class="header">
					<h3>Util.eventX</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.eventX</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.eventX</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.eventX(
									<span class="type">Event</span> <span class="var">event</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get absolute x coordinate of event.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">event</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Event</span> event to get x coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> x coordinate of event</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>event.targetTouches</li>
								<li>event.pageX</li>
								<li>event.clientX</li>
								<li>document.documentElement.scrollLeft</li>
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

			<div class="function" id="Util.eventY">
				<div class="header">
					<h3>Util.eventY</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.eventY</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.eventY</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.eventY(
									<span class="type">Event</span> <span class="var">event</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get absolute y coordinate of event.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">event</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Event</span> event to get y coordinate of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> y coordinate of event</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>event.targetTouches</li>
								<li>event.pageY</li>
								<li>event.clientY</li>
								<li>document.documentElement.scrollTop</li>
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

			<div class="function" id="Util.browserWidth">
				<div class="header">
					<h3>Util.browserWidth</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.browserWidth</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.browserW</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.browserWidth();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get inner width of browser window</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> width of browser window in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.documentElement.clientWidth</li>
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

			<div class="function" id="Util.browserHeight">
				<div class="header">
					<h3>Util.browserHeight</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.browserHeight</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.browserH</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.browserHeight();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get inner height of browser window</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> height of browser window in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>document.documentElement.clientHeight</li>
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

			<div class="function" id="Util.htmlWidth">
				<div class="header">
					<h3>Util.htmlWidth</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.htmlWidth</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.htmlW</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.htmlWidth();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get width of HTML document in pixels. Basically this is the width of document.body, including margin.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> width of HTML document, including margin.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>parseInt</li>
								<li>document.body.offsetWidth</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.htmlHeight">
				<div class="header">
					<h3>Util.htmlHeight</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.htmlHeight</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.htmlH</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.htmlHeight();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get height of HTML document in pixels. Basically this is the height of document.body, including margin.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> height of HTML document, including margin.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>parseInt</li>
								<li>document.body.offsetWidth</li>
							</ul>
						</div>

						<div class="jes">
							<!-- list JES functions used by function -->
							<h5>JES</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>

				</div>
			</div>




			<div class="function" id="Util.pageScrollX">
				<div class="header">
					<h3>Util.pageScrollX</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.pageScrollX</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.scrollX</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.pageScrollX();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get vertical (x) scroll offset in pixels - how much has the page been scrolled sideways.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> x scroll offset in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>window.pageYOffset</li>
								<li>document.documentElement.scrollLeft</li>
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

			<div class="function" id="Util.pageScrollY">
				<div class="header">
					<h3>Util.pageScrollY</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.pageScrollY</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.scrollY</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Number</span> = 
								Util.pageScrollY();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Get horisontal (y) scroll offset in pixels - how much has the page been scrolled down.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Number</span> y scroll offset in pixels</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>none</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>window.pageYOffset</li>
								<li>document.documentElement.scrollLeft</li>
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
					<li><span class="file">u-geometry.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<!-- specify segment support js files (like: u-dom-desktop_light.js) -->
					<li><span class="file">u-geometry-desktop_ligth.js</span></li>
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
				<dd><span class="file">u-geometry.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-geometry.js</span></dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-geometry-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-geometry.js</span></dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-geometry-desktop_light.js</span>
				</dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-geometry.js</span></dd>
	
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

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>