<?php
$this->headerIncludes(array(
	"/css/tests/s-form.css",
	"/assets/parentnode-skin-default/css/lib/".$this->segment(array("type" => "www"))."/s-form.css",
	"/js/tests/m-form-combined.js"
));
?>

<div class="scene i:scene">
	<h1>Form (Combined)</h1>


	<div class="tests i:formCombined">
		<h2>Combined test of all input types in one form</h2>
		<p>Testing initialization, validation and callbacks in combination.</p>


		<form name="combined" action="#" method="get" class="combined labelstyle:inject">

			<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
			<input type="hidden" name="hidden_input" value="hidden value" />


			<h3>Standard fields</h3>
			<fieldset class="standard">
				<div class="field example required">
					<label for="combined_example_required">Example, required</label>
					<input type="text" name="example_required" id="combined_example_required" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field string required">
					<label for="combined_string_required">String, required</label>
					<input type="text" name="string_required" id="combined_string_required" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email_required">Email, required</label>
					<input type="email" name="email_required" id="combined_email_required" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email2_required">Email, required</label>
					<input type="email" name="email2_required" id="combined_email2_required" value="martin" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field email required">
					<label for="combined_email3_required">Email, required</label>
					<input type="email" name="email3_required" id="combined_email3_required" value="martin@think.dk" />
					<div class="help">
						<div class="hint">hint Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field number required">
					<label for="combined_number_required">Number, required</label>
					<input type="number" name="number_required" id="combined_number_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field tel required">
					<label for="combined_tel_required">Telephone, required</label>
					<input type="tel" name="tel_required" id="combined_tel_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field integer required">
					<label for="combined_integer_required">Integer, required</label>
					<input type="number" name="integer_required" id="combined_integer_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field password required">
					<label for="combined_password_required">Password, required</label>
					<input type="password" name="password_required" id="combined_password_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field date required">
					<label for="combined_date_required">Date, required (YYYY-MM-DD)</label>
					<input type="date" name="date_required" id="combined_date_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field datetime required">
					<label for="combined_datetime_required">Datetime, required (YYYY-MM-DD HH:MM)</label>
					<input type="datetime" name="datetime_required" id="combined_datetime_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field select required">
					<label for="combined_select_required">Select, required</label>
					<select name="select_required" id="combined_select_required">
						<option value="">-</option>
						<option value="option_1">option 1</option>
						<option value="option_2">option 2</option>
					</select>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field text autoexpand required">
					<label for="combined_text_required">Text, required</label>
					<textarea name="text_required" id="combined_text_required"></textarea>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field checkbox required">
					<input type="hidden" name="checkbox_required" value="0" />
					<input type="checkbox" name="checkbox_required" id="combined_checkbox_required" value="true" />
					<label for="combined_checkbox_required">Checkbox, required</label>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field radiobuttons required">
					<label>Radio buttons, required</label>
					<div class="item">
						<input type="radio" value="true" name="radio_required" id="combined_radio_a_required" />
						<label for="combined_radio_a_required">True</label>
					</div>
					<div class="item">
						<input type="radio" value="false" name="radio_required" id="combined_radio_b_required" />
						<label for="combined_radio_b_required">False</label>
					</div>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field files required">
					<label for="input_mediae_required">Files, required</label>
					<input type="file" name="media_required[]" multiple="multiple" id="input_mediae_required" />
					<div class="help">
						<div class="hint">Add image here. Use png or jpg in any proportion.</div>
						<div class="error">File does not fit requirements.</div>
					</div>
				</div>
			</fieldset>


			<h3>Custom fields</h3>
			<fieldset class="custom">

				<h4>Tags</h4>
				<div class="field tags required">
					<label for="combined_tags_required">Tags, required</label>
					<input type="text" name="tags_required" id="combined_tags_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<h4>Prices</h4>
				<div class="field prices required">
					<label for="combined_prices_required">Prices, required</label>
					<input type="text" name="prices_required" id="combined_prices_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<h4>HTML Editor</h4>
				<div class="field html required tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download,png,jpg,vimeo,youtube"
					data-media-add="#"
					data-media-delete="#"
					data-file-add="#"
					data-file-delete="#"
				>
					<label for="combined_html_required">HTML, required</label>
					<textarea name="html_required" id="combined_html_required"></textarea>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<h4>Geolocation</h4>
				<div class="field location required">
					<div class="location">
						<label for="input_location_required">Location, required</label>
						<input type="text" class="location" id="input_location_required" value="Ginestra" name="location_required" />
					</div>
					<div class="latitude">
						<label for="input_latitude_required">Latitude</label>
						<input type="text" class="latitude" id="input_latitude_required" value="41.2617" name="latitude_required" />
					</div>
					<div class="longitude">
						<label for="input_longitude_required">Longitude</label>
						<input type="text" class="longitude" id="input_longitude_required" value="" name="longitude_required" />
					</div>
					<div class="help">
						<div class="hint">Name and Geo coordinates of location</div>
						<div class="error">Name and Geo coordinates must be filled out</div>
					</div>
				</div>
			</fieldset>

			<ul class="actions">
				<li><input type="submit" value="submit, name, primary" name="submit_name" class="button primary" /></li>
				<li><input type="submit" value="submit, primary" class="button primary" /></li>
			</ul>
			<ul class="actions">
				<li><input type="button" value="button name" name="button_name" class="button" /></li>
				<li><input type="button" value="button" class="button" /></li>
			</ul>
			<ul class="actions">
				<li><input type="reset" value="reset, name, secondary" name="reset_name" class="button secondary" /></li>
				<li><input type="reset" value="reset, secondary" class="button secondary" /></li>
			</ul>
			<ul class="actions">
				<li><a href="#" class="button">a default</a></li>
				<li><a href="#" class="button primary">a primary</a></li>
			</ul>

		</form>

	</div>

</div>

<div class="comments"></div>
