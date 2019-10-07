<?php
$this->headerIncludes(array(
	"/css/tests/s-form.css",
	"/assets/parentnode-skin-default/css/lib/".$this->segment(array("type" => "www"))."/s-form.css",
	"/js/tests/i-form-formats.js"
));
?>

<div class="scene i:scene">
	<h1>Form – data formats</h1>


	<div class="tests i:formFormats">
		<h2>Data formats test</h2>
		<p>Testing u.f.getFormData, with different data formats.</p>

		<form name="combined" action="#" method="get" class="combinedformats labelstyle:inject">

			<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
			<input type="hidden" name="hidden_input" value="hidden value" />


			<h3>Standard fields</h3>
			<fieldset class="standard">
				<div class="field string required">
					<label for="combined_string1_required">String, required</label>
					<input type="text" name="field[string][0]" id="combined_string1_required" value="" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field string">
					<label for="combined_string1">String</label>
					<input type="text" name="field[string][1]" id="combined_string1" value="text" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email1_required">Email, required</label>
					<input type="email" name="field[email][a]" id="combined_email1_required" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email2_required">Email, required</label>
					<input type="email" name="field[email][b]" id="combined_email2_required" value="martin" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email3_required">Email, required</label>
					<input type="email" name="field[email][c]" id="combined_email3_required" value="martin@think.dk" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>
			</fieldset>

		</form>
	</div>
 
</div>

<div class="comments"></div>
