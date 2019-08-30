<div class="scene docpage i:docpage">
	<h1>Sortable</h1>
	<p>Everything is supposed to be easy – even sorting stuff. Drag'n'sort.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.sortable">
				<div class="header">
					<h3>Util.sortable</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.sortable</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								Util.sortable(
									<span class="type">Node</span> <span class="var">scope</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span> ]
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Applying this method directly to a list (&lt;ul&gt;), will make it's children sortable. 
							Applying it to a scope containing several lists, will make each list a target and all
							their children sortable, freely between the targets.
						</p>
						<p>
							The <em>scope</em> node passed to Util.sortable, will be extended with some helper
							functions listed below.
						</p>
						<p>
							For additional accessibility, it applies a motion detection algorithm to your draggable elements, to ensure dragging only happens
							on purpose, and even features a "clickpick" option, to allow users to pick elements by clicking on them rather than dragging them.
						</p>
						<p>
							You can define targets and draggables, using css selectors.
						</p>
						<p>It can sort a single level or endlessly nested lists.</p>
						<p>It can sort from, to and between multiple sources.</p>
						<p>It can sort horizontal, vertical and multiline lists, with built-in customised overlap detection.</p>
						<p>
							You can set up callback receivers for when a draggable node is <em>picked</em>,
							<em>moved</em> and <em>dropped</em>.
						</p>
						<p>
							You'll be home before dinner.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> scope containing sortable nodes
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional rules for sorting
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">picked</span></dt>
										<dd>Name of callback function when element is picked (default picked)</dd>
										<dt><span class="value">moved</span></dt>
										<dd>Name of callback function when element is moved (default moved)</dd>
										<dt><span class="value">dropped</span></dt>
										<dd>Name of callback function when element is dropped (default dropped)</dd>

										<dt><span class="value">draggables</span></dt>
										<dd>CSS Selector for draggable nodes - only these will be draggable (default all first level LI's of target nodes)</dd>
										<dt><span class="value">targets</span></dt>
										<dd>CSS Selector for target nodes - you'll only be able to drag nodes to these elements (default all first level UL's in scope, unless scope is a UL)</dd>
										<dt><span class="value">layout</span></dt>
										<dd>Force vertical/horisontal/multiline interpretation of scope (default auto-detect)</dd>

										<dt><span class="value">allow_nesting</span></dt>
										<dd>Allow building nested structures when sorting nodes</dd>
										<dt><span class="value">allow_clickpick</span></dt>
										<dd>Allow picking a node by clicking on it, rather than dragging it.</dd>
										<dt><span class="value">sorting_disabled</span></dt>
										<dd>If set to true, sorting is disabled. Default = false.</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p><span class="type">Void</span></p>
					</div>

					<div class="callbacks">
						<h4>Callbacks</h4>
						<dl>
							<dt>scope.picked(node)</dt>
							<dd>when draggable node is picked</dd>
							<dt>scope.moved(node)</dt>
							<dd>when draggable node is moved</dd>
							<dt>scope.dropped(node)</dt>
							<dd>when draggable node is dropped</dd>
						</dl>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<div class="example">
							<p>Let's say we have an HTML structure like this:</p>
							<code>&lt;ul class=&quot;sort-me&quot;&gt;
	&lt;li&gt;Item 1&lt;/li&gt;
	&lt;li&gt;Item 2&lt;/li&gt;
	&lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;</code>
							<p>We can the apply u.sortable to the list like this:</p>
							<code>var ul_sort_me = u.querySelector("ui.sort-me");
u.sortable(ul_sort_me);</code>
							<p>
								Now <em>Item 1</em>, <em>Item 2</em> and <em>Item 3</em> can be dragged around and rearranged in the list. 
								To receive callbacks on <em>picked</em>, <em>moved</em> and <em>dropped</em>, you
								simply register receivers like this:
							</p>
							<code>ul_sort_me.picked = function(node) {
	// node is the picked node
	// Whatever needs to be done on picked
}
ul_sort_me.moved = function(node) {
	// node is the moved node
	// Whatever needs to be done on moved
}
ul_sort_me.dropped = function(node) {
	// node is the dropped node
	// Whatever needs to be done on dropped
}</code>

						</div>

						<div class="example">
							<p>See the test page for a <a href="/tests/u-sortable">more implementations and use cases</a>.</p>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<!-- list javascript functions used by function -->
							<h5>JavaScript</h5>
							<ul>
								<li>switch ... case</li>
								<li>for ... in</li>
								<li>document.createElement</li>
								<li>document.appendChild</li>
								<li>document.insertBefore</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelectorAll</li>
								<li>Util.querySelector</li>
								<li>Util.appendElement</li>
								<li>Util.getComputedStyle</li>
								<li>Util.applyStyles</li>
								<li>Util.classVar</li>
								<li>Util.absoluteY</li>
								<li>Util.absoluteX</li>
								<li>Util.eventX</li>
								<li>Util.eventY</li>

								<li>Util.Events.kill</li>
								<li>Util.Events.removeWindowEndEvent</li>
								<li>Util.Events.removeWindowMoveEvent</li>
								<li>Util.Events.addStartEvent</li>
								<li>Util.Events.addWindowMoveEvent</li>
								<li>Util.Events.addWindowEndEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.getNodeOrder">
				<div class="header">
					<h3>scope.getNodeOrder</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.getNodeOrder</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Array</span> = 
								scope.getNodeOrder();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a <em>getNodeOrder</em> method. It returns an ordered
							Array of the sortable nodes.
						</p>
						<p>
							Nodes in the structure will be identified by a ClassVar if available (defaults to <em>item_id</em> values).
							If a matching ClassVar is not present on the node, the node reference will be returned as
							the id.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">class_var</span></dt>
										<dd>ClassVar identifier to be used to identify nodes. Default: item_id</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">Array</span> containing ordered node ClassVars values or node references.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Let's say we have an HTML structure like this:</p>
							<code>&lt;ul class=&quot;sort-me&quot;&gt;
	&lt;li class=&quot;item_id:1&quot;&gt;&lt;span&gt;Item 1&lt;/span&gt;&lt;/li&gt;
	&lt;li class=&quot;item_id:2&quot;&gt;&lt;span&gt;Item 2&lt;/span&gt;&lt;/li&gt;
	&lt;li class=&quot;item_id:3&quot;&gt;&lt;span&gt;Item 3&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
							<p>We can the apply u.sortable to the list and get the node order like this:</p>
							<code>var ul_sort_me = u.querySelector("ui.sort-me");
u.sortable(ul_sort_me);

var structure = ul_sort_me.getNodeOrder();</code>
							<p>Structure would then contain:</p>
							<code>["1", "2", "3"]</code>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch...case</li>
								<li>for...in</li>
								<li>Array.push</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.classVar</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.getNodeRelations">
				<div class="header">
					<h3>scope.getNodeRelations</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.getNodeRelations</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Array</span> = 
								scope.getNodeRelations();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a <em>getNodeRelations</em> method. It returns the 
							structure of the sortable nodes in an ordered Array of Objects, each containing id or node reference,
							position and relation information.
						</p>
						<p>
							Nodes and relations in the structure will be identified by a ClassVar if available (defaults to <em>item_id</em> values).
							If a matching ClassVar is not present on the node, the node reference will be returned as
							the id and relation properties.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional settings
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">class_var</span></dt>
										<dd>ClassVar identifier to be used to identify nodes. Default: item_id</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">Array</span> containing ordered Objects, again each containing information
							about ClassVar value or node reference, position and relation.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Let's say we have an HTML structure like this:</p>
							<code>&lt;div class=&quot;sort-me&quot;&gt;
	&lt;ul class=&quot;sort-me&quot;&gt;
		&lt;li class=&quot;item_id:1&quot;&gt;&lt;span&gt;Item 1&lt;/span&gt;&lt;/li&gt;
		&lt;li class=&quot;item_id:2&quot;&gt;&lt;span&gt;Item 2&lt;/span&gt;&lt;/li&gt;
		&lt;li class=&quot;item_id:3&quot;&gt;&lt;span&gt;Item 3&lt;/span&gt;
			&lt;ul class=&quot;sort-me&quot;&gt;
				&lt;li class=&quot;item_id:4&quot;&gt;&lt;span&gt;Item 4&lt;/span&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code>
							<p>We can the apply u.sortable to the list and get the node relations like this:</p>
							<code>var div_sort_me = u.querySelector("div.sort-me");
u.sortable(div_sort_me, {allow_nesting: true});

var structure = div_sort_me.getNodeRelations();</code>
							<p>Structure would then contain:</p>
							<code>[
	{
		"id":"1",
		"relation":0,
		"position":1
	},
	{
		"id":"2",
		"relation":0,
		"position":2
	},
	{
		"id":"3",
		"relation":0,
		"position":3
	},
	{
		"id":"4",
		"relation":"3",
		"position":1
	}
]</code>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>switch...case</li>
								<li>for...in</li>
								<li>Array.push</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.inNodeList</li>
								<li>Util.classVar</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.getNodePositionInList">
				<div class="header">
					<h3>scope.getNodePositionInList</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.getNodePositionInList</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Integer</span> = 
								scope.getNodePositionInList(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a <em>getNodePositionInList</em> method. It returns the
							current position of the node in the containing list.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to get position of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">Interger</span> position in list, starting with 1.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Let's say we have an HTML structure like this:</p>
							<code>&lt;ul class=&quot;sort-me&quot;&gt;
	&lt;li class=&quot;item_1&quot;&gt;&lt;span&gt;Item 1&lt;/span&gt;&lt;/li&gt;
	&lt;li class=&quot;item_2&quot;&gt;&lt;span&gt;Item 2&lt;/span&gt;&lt;/li&gt;
	&lt;li class=&quot;item_3&quot;&gt;&lt;span&gt;Item 3&lt;/span&gt;&lt;/li&gt;
&lt;/ul&gt;</code>
							<p>We can the apply u.sortable to the list and get the position of an element like this:</p>
							<code>var ul_sort_me = u.querySelector("ui.sort-me");
u.sortable(ul_sort_me);

var item_2 = u.querySelector("li.item_2", ul_sort_me);

var position = ul_sort_me.getNodePositionInList(item_2);</code>
							<p>Position would then be:</p>
							<code>2</code>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>while</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.previousSibling</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.getNodeRelation">
				<div class="header">
					<h3>scope.getNodeRelation</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.getNodeRelation</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String|Node</span> = 
								scope.getNodeRelation(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with a <em>getNodeRelation</em> method. It returns the
							current relation of the node. If node is on root level, relation will be 0. If node is nested
							under another node, the ClassVar value of the container, or the container reference if no ClassVar
							value is present.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to get relation of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Return values</h4>
						<p>
							<span class="type">String|Node</span> relation of node in list, starting with 0 for root level.
							ClassVar or node reference of container for nested nodes.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<p>Let's say we have an HTML structure like this:</p>
							<code>&lt;div class=&quot;sort-me&quot;&gt;
	&lt;ul class=&quot;sort-me&quot;&gt;
		&lt;li class=&quot;item_1 item_id:1&quot;&gt;&lt;span&gt;Item 1&lt;/span&gt;&lt;/li&gt;
		&lt;li class=&quot;item_2 item_id:2&quot;&gt;&lt;span&gt;Item 2&lt;/span&gt;&lt;/li&gt;
		&lt;li class=&quot;item_3 item_id:3&quot;&gt;&lt;span&gt;Item 3&lt;/span&gt;
			&lt;ul class=&quot;sort-me&quot;&gt;
				&lt;li class=&quot;item_4 item_id:4&quot;&gt;&lt;span&gt;Item 4&lt;/span&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code>
							<p>We can the apply u.sortable to the list and get the relation of an element like this:</p>
							<code>var div_sort_me = u.querySelector("div.sort-me");
u.sortable(div_sort_me, {allow_nesting: true});

var item_4 = u.querySelector("li.item_4", div_sort_me);

var relation = div_sort_me.getNodeRelation(item_4);</code>
							<p>Relation would then be:</p>
							<code>3</code>
						</div>
					</div>

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.inNodeList</li>
								<li>Util.classVar</li>
								<li>Util.parentNode</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.resetSortableEvents">
				<div class="header">
					<h3>scope.resetSortableEvents</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.resetSortableEvents</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								scope.resetSortableEvents(
									<span class="type">Node</span> <span class="var">node</span> 
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with an <em>resetSortableEvents</em> method. It can be used to
							restore the event chain of a draggable node, ie. if you also have a click eventlistner inside a draggable
							node, and you don't want the <em>click</em> to also invoke a <em>pick</em>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to reset event listeners of
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

					<div class="dependencies">
						<h4>Dependencies</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeMoveEvent</li>
								<li>Util.Events.removeEndEvent</li>
								<li>Util.Events.removeOverEvent</li>
								<li>Util.Events.removeWindowMoveEvent</li>
								<li>Util.Events.removeWindowEndEvent</li>
								<li>Util.Events.removeOutEvent</li>
							</ul>
						</div>

					</div>

				</div>
			</div>
			
			<div class="function" id="scope.detectSortableLayout">
				<div class="header">
					<h3>scope.detectSortableLayout</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.detectSortableLayout</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								scope.detectSortableLayout();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with an <em>detectSortableLayout</em> method. It inspects each
							of your targets and evaluates target layout to be either <em>horizontal</em>, <em>vertical</em> or
							<em>multiline</em>. This can be used to update the internal target layouts, should these change during
							use.
						</p>
						<p>
							The individual target layout is used to decide which overlap detection method to use, when
							you drag nodes around.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
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
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.childNodes</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.updateDraggables">
				<div class="header">
					<h3>scope.updateDraggables</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.updateDraggables</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								scope.updateDraggables();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with an <em>updateDraggables</em> method. It allows you to
							update the internal draggables list of your scope. This can be used if new draggables are added programatically
							or if existing ones are removed.
						</p>
						<p>
							This method will re-initialize all draggables – and de-initalize any element no longer
							present in the draggables list.
						</p> 
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
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
								<li>Array.prototype.slice</li>
								<li>String.toLowerCase</li>
								<li>Function.prototype.call</li>
								<li>Array.concat</li>
								<li>parseInt</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.Events.removeStartEvent</li>
								<li>Util.Events.removeOverEvent</li>
								<li>Util.Events.addStartEvent</li>
								<li>Util.querySelector</li>
								<li>Util.getComputedStyle</li>
								<li>Util.childNodes</li>
							</ul>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="scope.updateTargets">
				<div class="header">
					<h3>scope.updateTargets</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">scope.updateTargets</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">void</span> = 
								scope.updateTargets();
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Scope node is automatically extended with an <em>updateTargets</em> method. It allows you to
							update the internal target list of your scope. This can be used if new targets are added programatically,
							or if existing ones are removed.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
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
								<li>Array.prototype.slice</li>
								<li>String.toLowerCase</li>
								<li>Function.prototype.call</li>
								<li>Array.push</li>
								<li>Array.unshift</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.elementMatches</li>
								<li>Util.querySelectorAll</li>
								<li>Util.parentNode</li>
								<li>Util.contains</li>
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
					<li><span class="file">u-sortable.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li>none</li>
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

				<dt>desktop</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_ie11</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>not supported</dd>

				<dt>tablet</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>tablet_light</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>

				<dt>smartphone</dt>
				<dd>
					<span class="file">u-sortable.js</span> + 
					<span class="file">u-dom.js</span> + 
					<span class="file">u-geometry.js</span> + 
					<span class="file">u-events.js</span> + 
					<span class="file">u-events-browser.js</span>
				</dd>
	
				<dt>mobile</dt>
				<dd>not supported</dd>
	
				<dt>mobile_light</dt>
				<dd>not supported</dd>

				<dt>tv</dt>
				<dd>not tested</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
