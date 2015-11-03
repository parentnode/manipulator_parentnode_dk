<?php
$this->headerIncludes(array(
	"/js/tests/i-scrollto.js",
	"/css/tests/s-scrollto.css"
));
?>

<div class="scene i:scene">
	<h1>ScrollTo</h1>
	<p>
		Scroll to item 1-4, from different locations. 
		item 1-4 has an offset_y: 100px. Scrolling to result in top aligning with purple box 
		(except item 4, where page is not big enough).
	</p>
	<p>Scroll to top, middle and bottom.</p>

	<div class="tests i:scrollto">

		<ul class="coords">
			<li class="top"><a href="#header">To top/left</a></li>
			<li class="middle"><a href="#content">To middle</a></li>
			<li class="bottom"><a href="#footer">To bottom right</a></li>
		</ul>


		<ul class="toc">
			<li class="item1"><a href="#item1">To item1</a></li>
			<li class="item2"><a href="#item2">To item2</a></li>
			<li class="item3"><a href="#item3">To item3</a></li>
			<li class="item4"><a href="#item4">To item4</a></li>
		</ul>

		<ul class="scrollable">
			<li id="item1">
				<h2>Item 1</h2>

				<ul class="subtoc">
					<li class="item1"><a href="#item1">To item1</a></li>
					<li class="item2"><a href="#item2">To item2</a></li>
					<li class="item3"><a href="#item3">To item3</a></li>
					<li class="item4"><a href="#item4">To item4</a></li>
				</ul>
			</li>
			<li id="item2">
				<h2>Item 2</h2>

				<ul class="subtoc">
					<li class="item1"><a href="#item1">To item1</a></li>
					<li class="item2"><a href="#item2">To item2</a></li>
					<li class="item3"><a href="#item3">To item3</a></li>
					<li class="item4"><a href="#item4">To item4</a></li>
				</ul>
			</li>
			<li id="item3">
				<h2>Item 3</h2>

				<ul class="subtoc">
					<li class="item1"><a href="#item1">To item1</a></li>
					<li class="item2"><a href="#item2">To item2</a></li>
					<li class="item3"><a href="#item3">To item3</a></li>
					<li class="item4"><a href="#item4">To item4</a></li>
				</ul>
			</li>
			<li id="item4">
				<h2>Item 4</h2>

				<ul class="subtoc">
					<li class="item1"><a href="#item1">To item1</a></li>
					<li class="item2"><a href="#item2">To item2</a></li>
					<li class="item3"><a href="#item3">To item3</a></li>
					<li class="item4"><a href="#item4">To item4</a></li>
				</ul>
			</li>
		</ul>
	</div>

</div>
<div class="comments"></div>
