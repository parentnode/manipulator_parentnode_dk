<div class="scene docpage i:docpage">
	<h1>DOM</h1>
	<p>DOM query and manipulation tools.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Util.querySelector">
				<div class="header">
					<h3>Util.querySelector</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.querySelector</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.qs</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.querySelector(
									<span class="type">String</span> <span class="var">query</span> 
									[, <span class="type">Node</span> <span class="var">scope</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Shorthand for document.querySelector.</p>
						<p>
							Returns the first matching element within the <span class="var">scope</span>. 
							Returns <span class="type">null</span> if no match is found.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">query</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> CSS style selector.
								</div>
							</dd>
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Optional, any given node could be used as scope. Default is document.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns matching node.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.querySelector("#content");</code>
							<p>returns <span class="type">Node</span> with id=content</p>
						</div>
						<div class="example">
							<code>u.querySelector("#content .link", content_node);</code>
							<p>returns <span class="type">Node</span> with classname=link, within content_node.</p>
						</div>
						<div class="example">
							<code>var content_node = u.querySelector("#content");
u.querySelector(".link", content_node);</code>
							<p>
								returns <span class="type">Node</span> with classname=link, within content_node. 
								Using scope on repeated queries will make the query faster, as you limit the required 
								DOM-traversing.
							</p>
						</div>

					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.querySelector</li>
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

			<div class="function" id="Util.querySelectorAll">
				<div class="header">
					<h3>Util.querySelectorAll</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.querySelectorAll</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.qsa</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">NodeList</span> = 
								Util.querySelectorAll(
									<span class="type">String</span> <span class="var">query</span> 
									[, <span class="type">Node</span> <span class="var">scope</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Shorthand for document.querySelectorAll.</p>
						<p>
							Returns a list of the elements within the document which match the specified group of selectors. 
							The object returned is a <span class="type">NodeList</span>. 
							Returns an empty <span class="type">NodeList</span> if no matches are found.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">query</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> CSS style selector.
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Optional, any given node could be used as scope. Default is document.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns a <span class="type">NodeList</span> containing the nodes that match the specified group of selectors.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>u.querySelectorAll("#content .test");</code>
							<p>returns <span class="type">NodeList</span> containing all nodes with classnames=test</p>
						</div>

						<div class="example">
							<code>var list_node = u.querySelector("ul.list");
u.querySelectorAll("li.item", list_node);</code>
							<p>returns <span class="type">NodeList</span> containing all nodes with classnames=item</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.querySelectorAll</li>
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

			<div class="function" id="Util.getElement">
				<div class="header">
					<h3>Util.getElement</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getElement</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ge</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.getElement(
									<span class="type">String</span> <span class="var">identifier</span> 
									[, <span class="type">Node</span> <span class="var">scope</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get node by id/class/tag prioritized in this order<br/>
							Returns by elementById if any matches else first node with matching classname from scope
							If still no matches, looks for first node with tagname from scope<br/>
						</p>
						<p>Can be used to query nodes using regular expressions.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">identifier</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> node id, classname or tagname. Can also be specified using regular-expression syntax.
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Optional, any given node can be used as scope
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>First Node which matches the identifier</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;div&quot;&gt;&lt;/div&gt;
	&lt;div id=&quot;div&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
							
&lt;script&gt;u.getElement("div");&lt;/script&gt;</code>
							<p>returns <span class="type">Node</span> with id=div</p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;div&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;u.getElement("div");&lt;/script&gt;</code>
							<p>returns <span class="type">Node</span> with class=div</p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;u.getElement("div");&lt;/script&gt;</code>
							<p>returns <span class="type">Node</span> with class=scene</p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;content2&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content1&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;u.getElement("content[0-1]*");&lt;/script&gt;</code>
							<p>returns <span class="type">Node</span> with class=content1</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.getElementById</li>
								<li>document.getElementsByTagName</li>
								<li>RegExp.test</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.getElements">
				<div class="header">
					<h3>Util.getElements</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getElements</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ges</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Array</span> = 
								Util.getElements(
									<span class="type">String</span> <span class="var">identifier</span>
									[, <span class="type">Node</span> <span class="var">scope</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get elements (class/tag)<br/>
							Returns all elements with matching classname from scope<br/>
							If no matches, return nodes with tagname from scope<br/>
						</p>
						<p>Can be used to query nodes using regular expressions.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">identifier</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span>  node id, classname or tagname. Can also be specified using regular-expression syntax.
								</div>
							</dd>
			
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Optional, any given node can be used as scope
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							Returns all elements with matching classname from scope<br/>
							If no matches, return elements with tagname from scope
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;content2&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content1&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;u.getElement("content[0-2]*");&lt;/script&gt;</code>
							<p>returns <span class="type">Array</span> containing Nodes with class=content1 and class="content2"</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.getElementsByTagName</li>
								<li>RegExp.test</li>
								<li>Array.push</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.parentNode">
				<div class="header">
					<h3>Util.parentNode</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.parentNode</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.pn</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.parentNode(
									<span class="type">Node</span> <span class="var">node</span>
									[, <span class="type">JSON</span> <span class="var">_options</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get first parentNode of node or first parent matching <span class="var">_options</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to get parentNode of.
								</div>
							</dd>
			
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional filters to include/exclude specific elements.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">exclude</span></dt>
										<dd>CSS-selector to exclude as parent node.</dd>
										<dt><span class="value">include</span></dt>
										<dd>CSS-selector to include as parent node.</dd>
									</dl>
								</div>

							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>The parentNode of node, matching node_type if specified</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;ul class=&quot;list&quot;&gt;
		&lt;li class=&quot;item&quot;&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;script&gt;
	var item = u.querySelector(".scene .item");
	u.parentNode(item, {"include":"div"});
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">div.scene</span></p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;ul class=&quot;list&quot;&gt;
		&lt;li class=&quot;item&quot;&gt;
			&lt;ul class=&quot;list&quot;&gt;
				&lt;li class=&quot;inner&quot;&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;script&gt;
	var item = u.querySelector(".scene span");
	u.parentNode(item, {"exclude":"li.inner", "include":"li"});
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">li.item</span></p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.toLowerCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.previousSibling">
				<div class="header">
					<h3>Util.previousSibling</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.previousSibling</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ps</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.previousSibling(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get previous sibling, not counting text nodes as siblings and matching <span class="var">_options</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to find previous sibling of.
								</div>
							</dd>

							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional filters to include/exclude specific elements.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">exclude</span></dt>
										<dd>CSS-selector to exclude as sibling node.</dd>
										<dt><span class="value">include</span></dt>
										<dd>CSS-selector to include as sibling node.</dd>
									</dl>
								</div>

							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns previous sibling or false if none is found</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var footer = u.querySelector(".footer");
	u.previousSibling(footer);
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">div.content</span></p>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var footer = u.querySelector(".footer");
	u.previousSibling(footer, {"exclude":"content"});
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">div.header</span></p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>String.toLowerCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.nextSibling">
				<div class="header">
					<h3>Util.nextSibling</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.nextSibling</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ns</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.nextSibling(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get next sibling, not counting text nodes as siblings and matching <span class="var">_options</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to find next sibling of
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional filters to include/exclude specific elements.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">exclude</span></dt>
										<dd>CSS-selector to exclude as sibling node.</dd>
										<dt><span class="value">include</span></dt>
										<dd>CSS-selector to include as sibling node.</dd>
									</dl>
								</div>

							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns next sibling or false if none found</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.nextSibling(header);
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">div.content</span></p>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.nextSibling(header, {"exclude":".content"});
&lt;/script&gt;</code>
							<p>Returns Node <span class="htmltag">div.footer</span></p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>String.match</li>
								<li>String.toLowerCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.childNodes">
				<div class="header">
					<h3>Util.childNodes</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.childNodes</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.cn</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.childNodes(
									<span class="type">Node</span> <span class="var">node</span> 
									[, <span class="type">JSON</span> <span class="var">_options</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get childNodes of node, not counting text nodes and matching <span class="var">_options</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to find childNodes of
								</div>
							</dd>
							<dt><span class="var">_options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional filters to include/exclude specific elements.
								</div>
								<div class="details">
									<h5>Options</h5>
									<dl class="options">
										<dt><span class="value">exclude</span></dt>
										<dd>CSS-selector to exclude as childnode node.</dd>
										<dt><span class="value">include</span></dt>
										<dd>CSS-selector to include as childnode node.</dd>
									</dl>
								</div>

							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns Array of childNodes or false if none found</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;content&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.childNodes(scene, {"exclude":".header"});
&lt;/script&gt;</code>
							<p>returns <span class="type">Array</span> two Nodes <span class="htmltag">div.content</span> and <span class="htmltag">div.footer</span>.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.childNodes</li>
								<li>Array.push</li>
								<li>String.match</li>
								<li>String.toLowerCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.appendElement">
				<div class="header">
					<h3>Util.appendElement</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.appendElement</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ae</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.appendElement(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Mixed</span> <span class="var">node_type</span> 
									[, <span class="type">Object</span> <span class="var">attributes</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Appends <span class="var">node_type</span> to <span class="var">node</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to append childNode to
								</div>
							</dd>

							<dt><span class="var">node_type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> type of node you want to add, or an existing node
								</div>
							</dd>
			
							<dt><span class="var">attributes</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with attributes like target, class, id etc. to be added to new node.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">class</span></dt>
										<dd>Add className to node</dd>
										<dt><span class="value">id</span></dt>
										<dd>Add id to node</dd>
										<dt><span class="value">html</span></dt>
										<dd>Add innerHTML to node</dd>
										<dt><span class="value">href</span></dt>
										<dd>Add href to node</dd>
										<dt><span class="value">target</span></dt>
										<dd>Add target to node</dd>
										<dt><span class="value">type</span></dt>
										<dd>Add type to node</dd>
										<dt><span class="value">src</span></dt>
										<dd>Add src to node</dd>
										<dt><span class="value">alt</span></dt>
										<dd>Add alt to node</dd>
										<dt><span class="value">title</span></dt>
										<dd>Add title to node</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns the added <span class="type">Node</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.appendElement(header, "div", {"class":"new","html":"innerHTML"});
&lt;/script&gt;</code>
	
							<p>returns <span class="type">Node</span> div.new in the following structure</p>

							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;
		&lt;div class=&quot;new&quot;&gt;innerHTML&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

						<div class="example">
							<p>Can also be used to restructure html.</p>
							<code>var header = u.querySelector("#header");
var nav = u.querySelector("#navigation");
u.ae(header, nav);</code>
							<p>This moves #navigation into #header. #navigation will be added as last child of #header</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.appendChild</li>
								<li>typeof()</li>
								<li>try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.insertElement">
				<div class="header">
					<h3>Util.insertElement</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.insertElement</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ie</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.insertElement(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">Mixed</span> <span class="var">node_type</span> 
									[, <span class="type">JSON</span> <span class="var">attributes</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Inserts <span class="var">node_type</span> in beginning of <span class="var">node</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to insert childNode into
								</div>
							</dd>

							<dt><span class="var">node_type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Mixed</span> type of node you want to add, or an existing node
								</div>
							</dd>
			
							<dt><span class="var">attributes</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with attributes like target, class, id etc. to be added to new node.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">class</span></dt>
										<dd>Add className to node</dd>
										<dt><span class="value">id</span></dt>
										<dd>Add id to node</dd>
										<dt><span class="value">html</span></dt>
										<dd>Add innerHTML to node</dd>
										<dt><span class="value">href</span></dt>
										<dd>Add href to node</dd>
										<dt><span class="value">target</span></dt>
										<dd>Add target to node</dd>
										<dt><span class="value">type</span></dt>
										<dd>Add type to node</dd>
										<dt><span class="value">src</span></dt>
										<dd>Add src to node</dd>
										<dt><span class="value">alt</span></dt>
										<dd>Add alt to node</dd>
										<dt><span class="value">title</span></dt>
										<dd>Add title to node</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Returns the inserted <span class="type">Node</span></p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.insertElement(scene, "div", {"class":"new","html":"innerHTML"});
&lt;/script&gt;</code>

							<p>returns <span class="type">Node</span> div.new in the following structure</p>

							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;new&quot;&gt;innerHTML&lt;/div&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

						<div class="example">
							<p>Can also be used to restructure html.</p>
							<code>var header = u.querySelector("#header");
var nav = u.querySelector("#navigation");
u.ie(header, nav);</code>
							<p>This moves #navigation into #header. #navigation will be added as first child of #header</p>
						</div>
					</div>
				
					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.insertBefore</li>
								<li>typeof()</li>
								<li>try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.wrapElement">
				<div class="header">
					<h3>Util.wrapElement</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.wrapElement</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.we</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.wrapElement(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">node_type</span> 
									[, <span class="type">JSON</span> <span class="var">attributes</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Wrap <span class="var">node</span> with <span class="var">node_type</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to wrap
								</div>
							</dd>

							<dt><span class="var">node_type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> <span class="var">node_type</span> of wrapping <span class="type">Node</span>
								</div>
							</dd>

							<dt><span class="var">attributes</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with attributes like target, class, id etc. to be added to new node.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">class</span></dt>
										<dd>Add className to wrapping node</dd>
										<dt><span class="value">id</span></dt>
										<dd>Add id to wrapping node</dd>
										<dt><span class="value">href</span></dt>
										<dd>Add href to wrapping node</dd>
										<dt><span class="value">target</span></dt>
										<dd>Add target to wrapping node</dd>
										<dt><span class="value">title</span></dt>
										<dd>Add title to wrapping node</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							The wrapping <span class="type">Node</span>
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.wrapElement(header, "div", {"class":"wrapper"});
&lt;/script&gt;</code>

							<p>returns <span class="type">Node</span> div.wrapper in the following structure</p>

							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;wrapper&quot;&gt;
		&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.insertBefore</li>
								<li>document.appendBefore</li>
								<li>Node.setAttribute</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.wrapContent">
				<div class="header">
					<h3>Util.wrapContent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.wrapContent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.wc</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.wrapContent(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">node_type</span> 
									[, <span class="type">JSON</span> <span class="var">attributes</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Wrap content of <span class="var">node</span> in <span class="var">node_type</span>
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to wrap content of
								</div>
							</dd>

							<dt><span class="var">node_type</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> <span class="var">node_type</span> of wrapping <span class="type">Node</span>
								</div>
							</dd>

							<dt><span class="var">attributes</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with attributes like target, class, id etc. to be added to new node.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">class</span></dt>
										<dd>Add className to wrapping node</dd>
										<dt><span class="value">id</span></dt>
										<dd>Add id to wrapping node</dd>
										<dt><span class="value">href</span></dt>
										<dd>Add href to wrapping node</dd>
										<dt><span class="value">target</span></dt>
										<dd>Add target to wrapping node</dd>
										<dt><span class="value">title</span></dt>
										<dd>Add title to wrapping node</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							The wrapping <span class="type">Node</span>
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var scene = u.querySelector(".scene");
	u.wrapContent(scene, "div", {"class":"wrapper"});
&lt;/script&gt;</code>

							<p>returns <span class="type">Node</span> div.wrapper in the following structure</p>

							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;wrapper&quot;&gt;
		&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
		&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.createElement</li>
								<li>document.appendBefore</li>
								<li>Node.setAttribute</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.textContent">
				<div class="header">
					<h3>Util.textContent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.textContent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.text</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.textContent(
									<span class="type">Node</span> <span class="var">node</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get textContent of Node, with fallback to innerText or regular expression in older browsers.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> node to get textContent of
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							The textContent of the node - equivalent to node.textContent.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;textcontent&quot;&gt;
	&lt;!-- COMMENT --&gt;
	&lt;span&gt;node.textContent&lt;/span&gt;
&lt;/div&gt;

&lt;script&gt;
	var div = u.querySelector(".textcontent");
	u.textContent(div).trim();
&lt;/script&gt;</code>
							<p>Returns <span class="value">node.textContent</span>.</p>
						</div>

					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>node.textContent</li>
								<li>node.innerText</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.clickableElement">
				<div class="header">
					<h3>Util.clickableElement</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.clickableElement</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ce</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Node</span> = 
								Util.clickableElement(
									<span class="type">Node</span> <span class="var">node</span>,
									[, <span class="type">JSON</span> <span class="var">options</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Make <span class="type">node</span> clickable - adding click event (if Events module is included), and removing href 
							from first <span class="htmltag">a</span> found within <span class="type">node</span> (or optionally in <span class="type">options.use</span>). 
							Value of <span class="attribute">href</span> is stored in 
							node.url. It applies <span class="value">link</span> class to node if it contains <span class="domnode">a</span> otherwise 
							<span class="value">clickable</span> class is added.
						</p>
						<p>
							You would typically use this to expand the clickable area in a list, where the actual link is nested
							within the <span class="domnode">li</span>, but you want the entire <span class="domnode">li</span> to be clickable.
						</p>
						<p>
							You can automate click handling by defining a <span class="var">type</span> in the 
							<span class="var">options</span> parameter. Default is to not handle the click event.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to make clickable.
								</div>
							</dd>
							<dt><span class="var">options</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Optional, JSON object with options for click handling.
								</div>
								<div class="details">
									<!-- write parameter details -->
									<h5>Options</h5>
									<dl class="options">
										<!-- specific options -->
										<dt><span class="value">type</span></dt>
										<dd>
											<span class="value">link</span><br />
											Add click handler to redirect to url.
											Detects CMD/CTRL key, sending url to new tab/window. Detects page.navigate
											function to redirect url to ajax navigation controller.
										</dd>
										<dt><span class="value">use</span></dt>
										<dd>
											<span class="value">HTML tag</span> to look for link in
										</dd>
									</dl>
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>The node</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;h1&gt;&lt;a href=&quot;index&quot;&gt;Index&lt;/a&gt;&lt;/h1&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.clickableElement(header);
&lt;/script&gt;</code>

							<p>
								returns <span class="type">node</span> where node.url = "index", with applied click event listener, 
								in the following structure:
							</p>

							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header link&quot;&gt;&lt;h1&gt;&lt;a&gt;Index&lt;/a&gt;&lt;/h1&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;
		&lt;h1&gt;&lt;a href=&quot;index&quot;&gt;Index&lt;/a&gt;&lt;/h1&gt;
		&lt;h2&gt;&lt;a href=&quot;default&quot;&gt;Index&lt;/a&gt;&lt;/h2&gt;
	&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.clickableElement(header, {"use":"h2"});
&lt;/script&gt;</code>

							<p>
								returns <span class="type">node</span> where node.url = "default", with applied click event listener
							</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.getAttribute</li>
								<li>document.removeAttribute</li>
								<li>String.toLowerCase</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.querySelector</li>
								<li>Util.addClass</li>
								<li>Util.Events.click</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.classVar">
				<div class="header">
					<h3>Util.classVar</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.classVar</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.cv</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.classVar(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">var_name</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get classVar value from <span class="var">node</span>.
						</p>
						<p>
							ClassVars are used to add variables to HTML nodes via the class attribute. This method has been choosen
							to avoid obscuring the HTML with unsupported attributes and/or tags. The composition is 
							<span class="var">var_name</span>:<span class="var">value</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get classVar from
								</div>
							</dd>

							<dt><span class="var">var_name</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> var_name to get value part of.
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>The value of classVar var_name if it exists, else false.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;ul&gt;
		&lt;li class=&quot;id:81&quot;&gt;item&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;script&gt;
	var li = u.querySelector("li");
	u.classVar(li, "id");
&lt;/script&gt;</code>
	 						<p>Returns "81" which is the value of the classVar "id" on the <span class="domnode">LI</span></p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp</li>
								<li>String.match</li>
								<li>String.replace</li>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.setClass">
				<div class="header">
					<h3>Util.setClass</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.setClass</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.sc</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.setClass(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">classname</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Set className of <span class="var">node</span>. Deletes all other classNames for <span class="var">node</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> Node to set class on.
								</div>
							</dd>
							<dt><span class="var">classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> the new classname for the element
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>ClassName before update</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var footer = u.querySelector(".footer");
	u.setClass(footer, "bottom");
&lt;/script&gt;</code>
<p>Returns "footer" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.hasClass">
				<div class="header">
					<h3>Util.hasClass</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.hasClass</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.hc</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.hasClass(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">classname</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Check if an element has a given classname. Can use Regular Expression syntax.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to check
								</div>
							</dd>

							<dt><span class="var">classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> classname to checked for existence of
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							<span class="var">true</span> if the element has the classname, <span class="var">false</span> if  not
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header extra&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.hasClass(header, "extra");
&lt;/script&gt;</code>
							<p>Returns true</p>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header extra&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.hasClass(header, "ex");
&lt;/script&gt;</code>
							<p>Returns false</p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header type1&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.hasClass(header, "type[0-3]");
&lt;/script&gt;</code>
							<p>Returns true</p>
						</div>
						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header type1&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.hasClass(header, "type2|type3");
&lt;/script&gt;</code>
							<p>Returns false</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp.test</li>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.addClass">
				<div class="header">
					<h3>Util.addClass</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.addClass</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ac</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.addClass(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">classname</span>
									[, <span class="type">Boolean</span> <span class="var">dom_update</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Add className to node, if it does not already exist, then updates DOM. 
						</p>
						<p>
							DOM is automatically updated as default, because that is the only way to ensure the effects 
							will be seen instantaneous.
							Set <span class="var">dom_update</span> to <span class="value">false</span> if DOM does not need to be 
							updated after adding class - ie. if you add classes to many nodes at the same time and DOM only 
							needs to be updated in the end. This increased speed manyfold.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to add classname to
								</div>
							</dd>
							<dt><span class="var">classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> classname to be added
								</div>
							</dd>
							<dt><span class="var">dom_update</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional DOM update, Default true.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>node className after new <span class="var">classame</span> has been added</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.addClass(header, "extra");
&lt;/script&gt;</code>
							<p>Returns "header extra" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header extra&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp.test</li>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.removeClass">
				<div class="header">
					<h3>Util.removeClass</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.removeClass</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.rc</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.removeClass(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">classname</span> 
									[, <span class="type">Boolean</span> <span class="var">dom_update</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Remove all instances of the classname from node. Can use Regular expressions.
						</p>
						<p>
							DOM is automatically updated as default, because that is the only way to ensure the effects will be seen instantaneous.
							Set <span class="var">dom_update</span> to <span class="value">false</span> if DOM does not need to be 
							updated after removing class - ie. if you remove classes from many nodes at the same time and DOM only 
							needs to be updated in the end. This increased speed manyfold.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to remove classname from
								</div>
							</dd>
							<dt><span class="var">classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> the classname to be removed
								</div>
							</dd>
							<dt><span class="var">dom_update</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional DOM update, Default true.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>The new className of node, after <span class="var">classame</span> has been removed</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header type1&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.removeClass(header, "type[0-5]");
&lt;/script&gt;</code>
							<p>Returns "header" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header redundant redundant&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.removeClass(header, "redundant");
&lt;/script&gt;</code>
							<p>Returns "header" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp.test</li>
								<li>String.replace</li>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>None</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.toggleClass">
				<div class="header">
					<h3>Util.toggleClass</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.toggleClass</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.tc</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.toggleClass(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">classname</span>
									[, <span class="type">String</span> <span class="var">_classname</span>]
									[, <span class="type">Boolean</span> <span class="var">dom_update</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Toggles <span class="var">classame</span> on node. If <span class="var">classame</span> exists, 
							it will be removed. If <span class="var">classame</span> does not exist, it will be added. 
							If <span class="var">_classame</span> is given, the function will toggle the two classnames, 
							adding/removing based on existence of <span class="var">classame</span>/<span class="var">_classame</span>.
						</p>
						<p>
							DOM is automatically updated as default, when classes have been toggled, because that is the only way 
							to ensure the effects will be seen instantaneous.
							Set <span class="var">dom_update</span> to <span class="value">false</span> if DOM does not need to be 
							updated after toggling class - ie. if you toggle classes on many nodes at the same time and DOM only 
							needs to be updated in the end. This increased speed manyfold.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to toggle classname on
								</div>
							</dd>
							<dt><span class="var">classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> classname to be added/removed from node
								</div>
							</dd>
							<dt><span class="var">_classname</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> secondary classname to add/remove.
								</div>
							</dd>
							<dt><span class="var">dom_update</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional DOM update, Default true.
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>Node classname after toggling classes.</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header on&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.toggleClass(header, "on");
&lt;/script&gt;</code>
							<p>Returns "header" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header on&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.toggleClass(header, "on", "off");
&lt;/script&gt;</code>
							<p>Returns "header off" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header off&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header off&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.toggleClass(header, "on", "off");
&lt;/script&gt;</code>
							<p>Returns "header on" and updates the HTML to:</p>
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header on&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;bottom&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>RegExp.test</li>
								<li>Try ... catch</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.addClass</li>
								<li>Util.removeClass</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.applyStyle">
				<div class="header">
					<h3>Util.applyStyle</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.applyStyle</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.as</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.applyStyle(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">property</span>, 
									<span class="type">String</span> <span class="var">value</span>
									[, <span class="type">Boolean</span> <span class="var">dom_update</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Adds style <span class="var">property</span> to <span class="var">node</span>. Basically this is just 
							a shorthand function for setting: node.style.property = value - with automatic vendor prefixing and 
							update the DOM (default).
						</p>
						<p>
							DOM is automatically updated as default, because that is the only way 
							to ensure the effects will be seen instantaneous.
							Set <span class="var">dom_update</span> to <span class="value">false</span> if DOM does not need to be 
							updated after applying style property - ie. if you apply style properties on many nodes at the same time and DOM only 
							needs to be updated in the end. This increased speed manyfold.
						</p>
						<p>
							If you need to animate style property, use Util.Animation equivalent, which can translate
							applied transition to timed execution for fallback.
						</p>
						<p>
							It uses u.vendorProperty to ensure correct vendor prefix is added to the property.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to apply style property to
								</div>
							</dd>

							<dt><span class="var">property</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> the CSS style property to apply
								</div>
							</dd>

							<dt><span class="var">value</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> the value of the style property
								</div>
							</dd>
							<dt><span class="var">dom_update</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional DOM update, Default true.
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							Void - does not return anything, because it is impossible to tell if browser executed the update the given
							property as expected.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.applyStyle(header, "display", "none");
&lt;/script&gt;</code>
							<p>Adds style attribute, style=&quot;display: none;&quot; to div.header, thus hiding it.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.vendorProperty</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.applyStyles">
				<div class="header">
					<h3>Util.applyStyles</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.applyStyles</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.ass</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Void</span> = 
								Util.applyStyles(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">JSON</span> <span class="var">styles</span>, 
									[, <span class="type">Boolean</span> <span class="var">dom_update</span>]
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Adds style <span class="var">properties</span> to <span class="var">node</span>. Basically this is just 
							a shorthand for setting multiple node.style.property = value at once, but it also, as default, updates the DOM.
						</p>
						<p>
							DOM is automatically updated as default, because that is the only way 
							to ensure the effects will be seen instantaneous.
							Set <span class="var">dom_update</span> to <span class="value">false</span> if DOM does not need to be 
							updated after applying style property - ie. if you apply style properties on many nodes at the same time and DOM only 
							needs to be updated in the end. This increased speed manyfold.
						</p>
						<p>
							If you need to animate style property, use Util.Animation equivalent, which can translate
							applied transition to timed execution for fallback.
						</p>
						<p>
							It uses u.vendorProperty to ensure correct vendor prefix is added to the property.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to apply style property to
								</div>
							</dd>

							<dt><span class="var">styles</span></dt>
							<dd>
								<div class="summary">
									<span class="type">JSON</span> Object containing proporty:value pairs to be applied to node
								</div>
							</dd>

							<dt><span class="var">dom_update</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Boolean</span> Optional DOM update, Default true.
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							Void - does not return anything, because it is impossible to tell if browser supports the given 
							styles.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.applyStyle(header, {"display":"inlin", "color":"red"});
&lt;/script&gt;</code>
							<p>Adds style attribute, style=&quot;inline: none; color: red;&quot; to div.header.</p>
						</div>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>None</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.vendorProperty</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.getComputedStyle">
				<div class="header">
					<h3>Util.getComputedStyle</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.getComputedStyle</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.gcs</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = 
								Util.getComputedStyle(
									<span class="type">Node</span> <span class="var">node</span>, 
									<span class="type">String</span> <span class="var">property</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Get computed style value for css property.
						</p>
						<p>
							Accepts both JS and CSS syntax properties. Ie: backgroundImage or background-image.
							It uses u.vendorProperty to ensure correct vendor prefix is added to the property.
						</p>
						<p>
							Note: Some older browsers returns the specified value, whereas newer browser return the computed value, 
							ie. widths specified with % will be returned as px, and backgrounds will be returned as rgb().
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get property from
								</div>
							</dd>

							<dt><span class="var">property</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> the property to get computed value of
								</div>
							</dd>

						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							The value of the specified property.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>

						<div class="example">
							<code>&lt;div class=&quot;scene&quot;&gt;
	&lt;div class=&quot;header&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;footer&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
	var header = u.querySelector(".header");
	u.getComputedStyle(header, "display");
&lt;/script&gt;</code>
							<p>Returns the CSS display property of div.header.</p>
						</div>

					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>window.getComputedStyle</li>
								<li>String.replace</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.vendorProperty</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.hasFixedParent">
				<div class="header">
					<h3>Util.hasFixedParent</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.hasFixedParent</dd>
							<dt class="shorthand">Shorthand</dt>
							<dd class="shorthand">u.hfp</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.hasFixedParent(
									<span class="type">Node</span> <span class="var">node</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Check if <span class="var">node</span> has position: fixed parent. Fixed nodes needs to be 
							handled differently when using drag'n'drop or other dynamic repositioning.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to get property from
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							True if <span class="var">node</span> has fixed parent - or false if not.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>document.parentNode</li>
								<li>document.nodeName</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>Util.getComputedStyle</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.contains">
				<div class="header">
					<h3>Util.contains</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.contains</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.contains(
									<span class="type">Node</span> <span class="var">scope</span>,
									<span class="type">Node</span> <span class="var">node</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Check if <span class="var">node</span> is within (is a child of) <span class="var">scope</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> scope to check if node is inside
								</div>
							</dd>
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to check
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							True if <span class="var">node</span> is a child of <span class="var">scope</span> - or false if not.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<ul>
								<li>Node.contains</li>
							</ul>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>

					</div>
				</div>
			</div>

			<div class="function" id="Util.containsOrIs">
				<div class="header">
					<h3>Util.containsOrIs</h3>
				</div>
				<div class="body">
					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Util.containsOrIs</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Boolean</span> = 
								Util.containsOrIs(
									<span class="type">Node</span> <span class="var">scope</span>,
									<span class="type">Node</span> <span class="var">node</span>
								)
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>
							Check if <span class="var">node</span> is OR is within (is a child of) <span class="var">scope</span>.
						</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<dl class="parameters">
							<dt><span class="var">scope</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> scope to check if node is inside
								</div>
							</dd>
							<dt><span class="var">node</span></dt>
							<dd>
								<div class="summary">
									<span class="type">Node</span> node to check
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p>
							True if <span class="var">node</span> is same node or a child of <span class="var">scope</span> - or false if not.
						</p>
					</div>

					<div class="examples">
						<h4>Examples</h4>
						<p>No examples</p>
					</div>

					<div class="uses">
						<h4>Uses</h4>

						<div class="javascript">
							<h5>JavaScript</h5>
							<p>Nothing</p>
						</div>

						<div class="manipulator">
							<h5>Manipulator</h5>
							<ul>
								<li>u.contains</li>
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
					<li><span class="file">u-dom.js</span></li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li><span class="file">u-dom-desktop_ie10.js</span></li>
					<li><span class="file">u-dom-desktop_light.js</span></li>
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
				<dd><span class="file">u-dom.js</span></dd>

				<dt>desktop_ie11</dt>
				<dd><span class="file">u-dom.js</span></dd>

				<dt>desktop</dt>
				<dd><span class="file">u-dom.js</span></dd>

				<dt>desktop_ie10</dt>
				<dd>
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie10.js</span>
				</dd>

				<dt>desktop_ie9</dt>
				<dd>
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_ie10.js</span>
				</dd>

				<dt>desktop_light</dt>
				<dd>
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>tablet</dt>
				<dd><span class="file">u-dom.js</span></dd>

				<dt>tablet_light</dt>
				<dd><span class="file">u-dom.js</span></dd>

				<dt>smartphone</dt>
				<dd><span class="file">u-dom.js</span></dd>
	
				<dt>mobile</dt>
				<dd class="todo">not tested</dd>
	
				<dt>mobile_light</dt>
				<dd class="todo">not tested</dd>

				<dt>tv</dt>
				<dd>
					<span class="file">u-dom.js</span> + 
					<span class="file">u-dom-desktop_light.js</span>
				</dd>

				<dt>seo</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>
