<div class="scene docsindex i:docsindex">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="name">Documentation</h1>

		<dl class="info">
			<dt class="published_at">Date published</dt>
			<dd class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></dd>
			<dt class="author">Author</dt>
			<dd class="author" itemprop="author">Martin Kæstel Nielsen</dd>
		</dl>

		<div class="articlebody" itemprop="articleBody">
			<ul class="actions">
				<li><a class="nofollow" href="#library_files" rel="nofollow">Goto files</a></li>
			</ul>

			<p>
				This documentation cover utilities and tools of the Manipulator JavaScript library as well as 
				<a href="/docs/u-objects">Initializer Objects</a> for the 
				<a href="http://modulator.parentnode.dk">Modulator markup model</a>. While utilities and tools are used 
				to perform general JavaScript routines and HTML manipulation, the Initializer Objects cover HTML Node 
				extenders, Page and flow controllers.
			</p>

			<div class="search"></div>

			<div class="files">

				<h2>Library Index</h2>
				<ul class="library">
					<li>
						<h3><a href="/docs/u-animation">Animation</a></h3>
						<p>CSS3 transitions with fallback.</p>
					</li>
					<li>
						<h3><a href="/docs/u-array">Arrays</a></h3>
						<p>Array prototypes for older browsers</p>
					</li>
					<li>
						<h3><a href="/docs/u-audio">Audio - BETA</a></h3>
						<p>BETA: Audio player</p>
					</li>
					<li>
						<h3><a href="/docs/u-cookie">Cookie</a></h3>
						<p>Cookie handling.</p>
					</li>
					<li>
						<h3><a href="/docs/u-date">Date</a></h3>
						<p>Date formatting.</p>
					</li>
					<li>
						<h3><a href="/docs/u-debug">Debug</a></h3>
						<p>Debugging tools.</p>
					</li>
					<li>
						<h3><a href="/docs/u-dom">DOM</a></h3>
						<p>DOM query- and manipulation.</p>
					</li>
					<li>
						<h3><a href="/docs/u-events">Events</a></h3>
						<p>Add/remove events and basic event shorthands for Click, Hold, Dblclick.</p>
					</li>
					<li>
						<h3><a href="/docs/u-events-movements">Events, Movements</a></h3>
						<p>Movement events. Drag, Swipe.</p>
					</li>
					<li>
						<h3><a href="/docs/u-events-browser">Events, Browser</a></h3>
						<p>Browser events. DOM ready, Onload.</p>
					</li>
					<li>
						<h3><a href="/docs/u-flash">Flash</a></h3>
						<p>Flash object and detection</p>
					</li>
					<li>
						<h3><a href="/docs/u-form">Form</a></h3>
						<p>In progress: Form extension</p>
					</li>
					<li>
						<h3><a href="/docs/u-geometry">Geometry</a></h3>
						<p>Positioning, sizes and offsets</p>
					</li>
					<li>
						<h3><a href="/docs/u-googleanalytics">Google Analytics</a></h3>
						<p>In progress: Built-in Google Analytics tracking</p>
					</li>
					<li>
						<h3><a href="/docs/u-history">History</a></h3>
						<p>Browser history for Ajax based navigation</p>
					</li>
					<li>
						<h3><a href="/docs/u-init">Init</a></h3>
						<p>Manipulator module initializer</p>
					</li>
					<li>
						<h3><a href="/docs/u-objects">Initializer Objects</a></h3>
						<p>Manipulator HTML node extensions and flow controllers</p>
					</li>
					<li>
						<h3><a href="/docs/u-math">Math</a></h3>
						<p>Math based functions</p>
					</li>
					<li>
						<h3><a href="/docs/u-navigation">Navigation</a></h3>
						<p>Ajax navigation controller</p>
					</li>
					<li>
						<h3><a href="/docs/u-period">Period</a></h3>
						<p>Time period formatting</p>
					</li>
					<li>
						<h3><a href="/docs/u-popup">Popup</a></h3>
						<p>Oldschool popups, for oldschool websites.</p>
					</li>
					<li>
						<h3><a href="/docs/u-preloader">Preloader</a></h3>
						<p>Loadbalanced image preloader</p>
					</li>
					<li>
						<h3><a href="/docs/u-request">Request</a></h3>
						<p>POST, GET, PUT, PATCH and Script injection - server requests with response validation.</p>
					</li>
					<li>
						<h3><a href="/docs/u-string">String</a></h3>
						<p>String manipulation and random key generation.</p>
					</li>
					<li>
						<h3><a href="/docs/u-system">System</a></h3>
						<p>System and browser information</p>
					</li>
					<li>
						<h3><a href="/docs/u-timer">Timer</a></h3>
						<p>Timeouts and intervals.</p>
					</li>
					<li>
						<h3><a href="/docs/u-url">URL</a></h3>
						<p>Read GET params from URL.</p>
					</li>
					<li>
						<h3><a href="/docs/u-video">Video - BETA</a></h3>
						<p>In progress: Video player</p>
					</li>
				</ul>
			</div>

			<div class="browsersupport">
				<h2>Browser support</h2>
				<p>Manipulator supports the following browsers and more:</p>
				<ul>
					<li>Chrome 1+</li>
					<li>Safari 1+</li>
					<li>Firefox 1+</li>
					<li>Firefox Mobile 1+</li>
					<li>Mobile WebKit (iPad 1+, iPhone 1+, Android 1+, Blackberry 7+, Symbian 9+)</li>
					<li>Internet Explorer 6+</li>
					<li>Webkit 413+</li>
					<li>Mobile Internet Explorer 7+</li>
					<li>Opera 8+</li>
				</ul>
			</div>

			<div class="tests">
				<h3><a href="/tests/">Test the modules</a></h3>
				<p>If you want to test any of the library component in you current browser, you can use the internal test documents to do so.</p>
			</div>
		</div>
	</div>

</div>
