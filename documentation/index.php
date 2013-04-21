<? $page_title = "Documentation" ?>
<? $body_class = "docs" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<div class="scene i:docsindex">

	<div class="c">
		<div class="c300">

			<h1>Library documentation</h1>
			<ul class="tools">
				<li><a class="nofollow" href="#library_files" rel="nofollow">Goto files</a></li>
			</ul>
			<p>Documentation of utilities and tools in the JES JavaScript library.</p>

			<div class="promotion i:search"></div>

			<div class="promotion">
				<h3><a href="/tests/">Tests</a></h3>
				<p>If you want to test any of the library component in you current browser, you can use the internal test documents to do so.</p>
			</div>


			<div class="notes">
				<h3>Notes</h3>
				<p>Align function names - and figure out whether to use sub-objects or not. Form and some other "objects" might be modules in stead?</p>

				<p>
					Util.saveCookie<br />
					Util.getCookie<br />
					Util.deleteCookie<br />
					Util.saveNodeCookie<br />
					Util.getNodeCookie<br />
					Util.deleteNodeCookie<br />


					Util.date<br />

					Util.debugURL<br />
					Util.nodeId<br />
					Util.bug<br />
					Util.xInObject<br />

					Util.querySelector - u.qs<br />
					Util.querySelectorAll - u.qsa<br />
					Util.getElement - u.ge<br />
					Util.getElements - u.ges<br />
					Util.parentNode - u.pn<br />
					Util.previousSibling - u.ps<br />
					Util.nextSibling - u.ns<br />
					Util.childNodes - u.cn<br />
					Util.appendElement - u.ae<br />
					Util.insertElement - u.ie<br />
					Util.wrapElement - u.we<br />
					Util.textContent - u.text<br />

					Util.clickableElement - u.ce (Util.link)<br />

					Util.classVar - u.cv (Util.getIJ)<br />

					Util.setClass - u.sc<br />
					Util.addClass - u.ac<br />
					Util.removeClass - u.rc<br />
					Util.toggleClass - u.tc<br />
					Util.hasClass - u.hc<br />
					Util.applyStyle - u.as<br />
					Util.getComputedStyle - u.gcs<br />


					Util.flashDetection<br />
					Util.flash<br />


					Util.absoluteX - u.absX<br />
					Util.absoluteY - u.absY<br />
					Util.relativeX - u.relX<br />
					Util.relativeY - u.relY<br />
					Util.actualWidth - u.actualW<br />
					Util.actualHeight - u.actualH<br />
					Util.eventX<br />
					Util.eventY<br />
					Util.browserWidth - u.browserW<br />
					Util.browserHeight - u.browserH<br />
					Util.htmlWidth = u.htmlW<br />
					Util.htmlHeight = u.htmlH<br />
					Util.pageScrollX = u.scrollX<br />
					Util.pageScrollY = u.scrollY<br />


					Util.init<br />


					Util.popup<br />


					Util.Request<br />
					Util.isStringJSON<br />
					Util.isStringHTML<br />


					Util.cutString<br />
					Util.random<br />
					Util.randomString<br />
					Util.uuid<br />
					Util.stringOr<br />


					Util.browser<br />
					Util.system<br />
					Util.support<br />


					Util.getVar<br />


					Util.Animation.support<br />
					Util.Animation.support3d<br />
					Util.Animation.variant<br />
					Util.Animation.transition<br />
					Util.Animation.translate<br />
					Util.Animation.rotate<br />
					Util.Animation.scale<br />
					Util.Animation.setOpacity<br />
					Util.Animation.setWidth<br />
					Util.Animation.setHeight<br />
					Util.Animation.setBgPos<br />
					Util.Animation.setBgColor<br />


					Util.Events.kill<br />

					Util.Events.addStartEvent<br />
					Util.Events.removeStartEvent<br />
					Util.Events.addMoveEvent<br />
					Util.Events.removeMoveEvent<br />
					Util.Events.addEndEvent<br />
					Util.Events.removeEndEvent<br />

					Util.Events.resetClickEvents<br />
					Util.Events.resetEvents<br />
					Util.Events.resetNestedEvents<br />

					Util.Events.hold<br />
					Util.Events.click<br />
					Util.Events.dblclick<br />


					Util.Events.resetDragEvents<br />
					Util.Events.overlap<br />
					Util.Events.drag<br />
					Util.Events.swipe<br />


					Util.Form.init<br />
					Util.Form.validate<br />
					Util.Form.activate<br />
					Util.Form.isDefault<br />
					Util.Form.fieldCorrect<br />
					Util.Form.fieldError<br />
					Util.Form.getParams<br />

				</p>

			</div>

		</div>
		<div class="c100" id="library_files">

			<h2>Library files</h2>
			<ul class="library">
				<li>
					<h3><a href="u-animation">Animation</a></h3>
					<p>CSS3 transitions with fallback.</p>
				</li>
				<li>
					<h3><a href="u-array">Arrays</a></h3>
					<p>Array prototypes for older browsers</p>
				</li>
				<li>
					<h3><a href="u-audio">Audio - BETA</a></h3>
					<p>BETA: Audio player</p>
				</li>
				<li>
					<h3><a href="u-cookie">Cookie</a></h3>
					<p>Cookie handling.</p>
				</li>
				<li>
					<h3><a href="u-date">Date</a></h3>
					<p>Date formatting.</p>
				</li>
				<li>
					<h3><a href="u-debug">Debug</a></h3>
					<p>Debugging tools.</p>
				</li>
				<li>
					<h3><a href="u-dom">DOM</a></h3>
					<p>DOM query- and manipulation.</p>
				</li>
				<li>
					<h3><a href="u-events">Events</a></h3>
					<p>Add/remove events and basic event shorthands for Click, Hold, Dblclick.</p>
				</li>
				<li>
					<h3><a href="u-events-movements">Events, Movements</a></h3>
					<p>Movement events. Drag, Swipe.</p>
				</li>
				<li>
					<h3><a href="u-events-browser">Events, Browser</a></h3>
					<p>Browser events. DOM ready, Onload.</p>
				</li>
				<li>
					<h3><a href="u-flash">Flash</a></h3>
					<p>Flash object and detection</p>
				</li>
				<li>
					<h3><a href="u-form">Form</a></h3>
					<p>In progress: Form extension</p>
				</li>
				<li>
					<h3><a href="u-geometry">Geometry</a></h3>
					<p>Positioning, sizes and offsets</p>
				</li>
				<li>
					<h3><a href="u-googleanalytics">Google Analytics - BETA</a></h3>
					<p>In progress: Built-in Google Analytics tracking</p>
				</li>
				<li>
					<h3><a href="u-init">Init</a></h3>
					<p>JES module initializer</p>
				</li>
				<li>
					<h3><a href="u-math">Math</a></h3>
					<p>Math based functions</p>
				</li>
				<li>
					<h3><a href="u-period">Period</a></h3>
					<p>Time period formatting</p>
				</li>
				<li>
					<h3><a href="u-popup">Popup</a></h3>
					<p>Oldschool popups, for oldschool websites.</p>
				</li>
				<li>
					<h3><a href="u-preloader">Preloader - BETA</a></h3>
					<p>In progress: formerly known as Image - image loader</p>
				</li>
				<li>
					<h3><a href="u-request">Request</a></h3>
					<p>POST, GET, PUT, PATCH and Script injection - server requests with response validation.</p>
				</li>
				<li>
					<h3><a href="u-string">String</a></h3>
					<p>String manipulation and random key generation.</p>
				</li>
				<li>
					<h3><a href="u-system">System</a></h3>
					<p>System and browser information</p>
				</li>
				<li>
					<h3><a href="u-timer">Timer</a></h3>
					<p>Timeouts and intervals.</p>
				</li>
				<li>
					<h3><a href="u-url">URL</a></h3>
					<p>Read GET params from URL.</p>
				</li>
				<li>
					<h3><a href="u-video">Video - BETA</a></h3>
					<p>In progress: Video player</p>
				</li>
			</ul>
		</div>

	</div>
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>