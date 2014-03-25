<? $page_title = "Array documentation" ?>
<? $body_class = "docs docpage" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<div class="scene i:docpage">
	<h1>Array</h1>
	<p>Filling out the gap in older Array implementations.</p>

	<div class="section functions">
		<div class="header">
			<h2>Functions</h2>
		</div>
		<div class="body">

			<div class="function" id="Array.push">
				<div class="header">
					<h3>Array.push</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.push</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax">
								<span class="type">Integer</span> = Array.push(
									<span class="type">String</span> <span type="var">value</span>
								);
							</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add value to end of Array.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><em>value</em></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> String to add to end of Array
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Integer</span> new length of Array</p>
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
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Array.pop">
				<div class="header">
					<h3>Array.pop</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.pop</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = Array.pop();</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Pops the last element off Array.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> value of last index in Array</p>
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
							<p>Nothing</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Array.reverse">
				<div class="header">
					<h3>Array.reverse</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.reverse</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Array</span> = Array.reverse();</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Reverses order of Array.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Array</span> Array in new order</p>
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
							<p>Nothing</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>

					</div>

				</div>
			</div>

			<div class="function" id="Array.unshift">
				<div class="header">
					<h3>Array.unshift</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.unshift</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Integer</span> = Array.unshift(<span class="type">String</span> <span class="var">value</span>);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Add value to beginning of Array.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">value</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> value to add to beginning Array
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Integer</span> new length of Array</p>
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
								<li>Array.push</li>
								<li>Array.reverse</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>
					</div>

				</div>
			</div>

			<div class="function" id="Array.shift">
				<div class="header">
					<h3>Array.shift</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.shift</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">String</span> = Array.shift();</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Removes first index of Array.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>
						<p>No parameters</p>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">String</span> value of first index of Array</p>
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
							<p>Nothing</p>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<p>Nothing</p>
						</div>
					</div>

				</div>
			</div>

			<div class="function" id="Array.indexOf">
				<div class="header">
					<h3>Array.indexOf</h3>
				</div>
				<div class="body">

					<div class="definition">
						<h4>Definition</h4>
						<dl class="definition">
							<dt class="name">Name</dt>
							<dd class="name">Array.indexOf</dd>
							<dt class="syntax">Syntax</dt>
							<dd class="syntax"><span class="type">Integer</span> = Array.indexOf(<span class="type">String</span> <span class="var">value</span>);</dd>
						</dl>
					</div>

					<div class="description">
						<h4>Description</h4>
						<p>Does Array contain value.</p>
					</div>

					<div class="parameters">
						<h4>Parameters</h4>

						<dl class="parameters">
							<dt><span class="var">value</span></dt>
							<dd>
								<div class="summary">
									<span class="type">String</span> value to look for in Array
								</div>
							</dd>
						</dl>
					</div>

					<div class="return">
						<h4>Returns</h4>
						<p><span class="type">Integer</span> index of value or -1 if not found</p>
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
								<li>none</li>
							</ul>
						</div>

						<div class="manipulator">
							<!-- list manipulator functions used by function -->
							<h5>Manipulator</h5>
							<ul>
								<li>none</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<div class="section files">
		<div class="header">
			<h2>files</h2>
		</div>
		<div class="body">
			<div class="files main">
				<h3>Main file</h3>
				<ul>
					<li>none</li>
				</ul>
			</div>

			<div class="files support">
				<h3>Segment support files</h3>
				<ul>
					<li><span class="file">u-array-desktop_light.js</span></li>
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
				<dt>desktop</dt>
				<dd>No include required</dd>

				<dt>desktop_ie</dt>
				<dd><span class="file">No include required</span></dd>

				<dt>desktop_light</dt>
				<dd><span class="file">u-array-desktop_light.js</span></dd>

				<dt>tablet</dt>
				<dd>No include required</dd>

				<dt>tv</dt>
				<dd><span class="file">u-array-desktop_light.js</span></dd>

				<dt>mobile_touch</dt>
				<dd>No include required</dd>
	
				<dt>mobile</dt>
				<dd class="todo">not tested</dd>
	
				<dt>mobile_light</dt>
				<dd class="todo">not tested</dd>

				<dt>basic</dt>
				<dd>not supported</dd>
			</dl>
		</div>
	</div>

</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>