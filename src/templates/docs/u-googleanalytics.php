<div class="scene docpage i:docpage">
	<h1>Google Analytics</h1>
	<p>
		Automatic event tracking using Google Analytics.
	</p>
	<p>
		By making your GA account information available to Manipulator click, swipe, drag and navigation events are
		automatically sent to your Analytics account. To set up GA, add the following code to you JS, replacing our
		values with yours.
	</p>
	<code>u.ga_account = 'UA-49740096-1';
u.ga_domain = 'manipulator.parentnode.dk';</code>

	<p>
		Aside from built in tracking, shorthand functions are available for custom tracking.
	</p>


	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.stats.pageView">
				<div class="header">
					<h3>Util.stats.pageView</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stats.pageView</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.stats.pageView(
									<span class="type">String</span> <span class="var">url</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Registers pageView on you GA account</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">url</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> url of page view
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
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Util.stats.event">
				<div class="header">
					<h3>Util.stats.event</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.stats.event</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.stats.event(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">action</span> 
									[, <span class="type">String</span> <span class="var">label</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Registers event on you GA account</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node event occured on
								</div>
							</dd>
							<dt><span class="var">action</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> type of action causing event
								</div>
							</dd>
							<dt><span class="var">label</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> Additional label to identify event
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
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
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
					<li><span class="file">u-googleanalytics.js</span></li>
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
				<dd><span class="file">u-googleanalytics.js</span></dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">u-googleanalytics.js</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-googleanalytics.js</span></dd>

				<dt>tablet</dt>
				<dd><span class="file">u-googleanalytics.js</span></dd>

				<dt>tv</dt>
				<dd><span class="file">u-googleanalytics.js</span></dd>

				<dt>mobile_touch</dt>
				<dd><span class="file">u-googleanalytics.js</span></dd>
	
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
