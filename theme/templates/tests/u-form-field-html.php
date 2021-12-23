<?php
$this->headerIncludes(array(
	"/css/tests/s-form.css",
	"/assets/parentnode-skin-default/css/lib/".$this->segment(array("type" => "www"))."/s-form.css",
	"/assets/parentnode-skin-default/css/optionals/lib/".$this->segment(array("type" => "www"))."/s-form-field-html.css",
	"/js/tests/m-form-field-html.js",
));
?>

<div class="scene i:scene">
	<h1>Form (HTML field)</h1>

	<div class="tests i:formFieldHTML">
		<h2>Test HTML field interaction.</h2>
		<p>
			For testing of interaction, validation and layout.
		</p>


		<form action="#/1" method="get" class="html labelstyle:inject">
			<h3>HTML Editor</h3>
			<fieldset>
				<div class="field html required tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download,png,jpg,vimeo,youtube"
					data-media-add="#"
					data-media-delete="#"
					data-file-add="#"
					data-file-delete="#"
				>
					<label for="solo_html_required">HTML, required</label>
					<textarea name="html_required" id="solo_html_required"></textarea>
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field html tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download,png,jpg,vimeo,youtube max:300"
					data-media-add="#"
					data-media-delete="#"
					data-file-add="#"
					data-file-delete="#"
				>
					<label for="solo_html_optional">HTML, optional (max 300 chars)</label>
					<textarea name="html_optional" id="solo_html_optional"></textarea>
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
			</fieldset>

			<ul class="actions">
				<li><input type="submit" value="submit" name="submit_name" class="button primary" /></li>
				<li><input type="reset" value="reset" name="reset_name" class="button secondary" /></li>
			</ul>
		</form>

	</div>

</div>

<div class="comments"></div>
