<?php
$this->headerIncludes(array(
	"/css/tests/s-form.css",
	"http://parentnode.dk/css/global/".$this->segment(array("type" => "www"))."/s-form-".$this->segment(array("type" => "www")).".css",
	"/js/tests/i-form.js"
));
?>

<div class="scene i:scene">
	<h1>Form</h1>

	<div class="tests i:formIndividual">
		<h2>Type validation</h2>
		<p>
			For individual testing of validation and layout.
		</p>

		<form action="#" method="get" class="string labelstyle:inject">
			<h3>String</h3>
			<fieldset>
				<div class="field string required">
					<label for="solo_string_required">String, required</label>
					<input type="text" name="string_required" id="solo_string_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field string">
					<label for="solo_string_optional">String, optional</label>
					<input type="text" name="string_optional" id="solo_string_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="email labelstyle:inject">
			<h3>Email</h3>
			<fieldset>
				<div class="field email required">
					<label for="solo_email_required">Email, required</label>
					<input type="email" name="email_required" id="solo_email_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field email">
					<label for="solo_email_optional">Email, optional</label>
					<input type="email" name="email_optional" id="solo_email_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="number labelstyle:inject">
			<h3>Number</h3>
			<fieldset>
				<div class="field number required">
					<label for="solo_number_required">Number, required</label>
					<input type="number" name="number_required" id="solo_number_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field number">
					<label for="solo_number_optional">Number, optional</label>
					<input type="number" name="number_optional" id="solo_number_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="tel labelstyle:inject">
			<h3>Tel</h3>
			<fieldset>
				<div class="field tel required">
					<label for="solo_tel_required">Telephone, required</label>
					<input type="tel" name="tel_required" id="solo_tel_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>
				<div class="field tel">
					<label for="solo_tel_optional">Telephone, optional</label>
					<input type="number" name="tel_optional" id="solo_tel_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="number labelstyle:inject">
			<h3>Integer</h3>
			<fieldset>
				<div class="field integer required">
					<label for="solo_integer_required">Integer, required</label>
					<input type="number" name="integer_required" id="solo_integer_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field integer">
					<label for="solo_integer_optional">Integer, optional</label>
					<input type="number" name="integer_optional" id="solo_integer_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="password labelstyle:inject">
			<h3>Password</h3>
			<fieldset>
				<div class="field password required">
					<label for="solo_password_required">Password, required</label>
					<input type="password" name="password_required" id="solo_password_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field password">
					<label for="solo_password_optional">Password, optional</label>
					<input type="password" name="password_optional" id="solo_password_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="date labelstyle:inject">
			<h3>Date</h3>
			<fieldset>
				<div class="field date required">
					<label for="solo_date_required">Date, required</label>
					<input type="date" name="date_required" id="solo_date_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field date">
					<label for="solo_date_optional">Date, optional</label>
					<input type="date" name="date_optional" id="solo_date_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="datetime labelstyle:inject">
			<h3>Datetime</h3>
			<fieldset>
				<div class="field datetime required">
					<label for="solo_datetime_required">Datetime, required</label>
					<input type="datetime" name="datetime_required" id="solo_datetime_required" />
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field datetime">
					<label for="solo_datetime_optional">Datetime, optional</label>
					<input type="datetime" name="datetime_optional" id="solo_datetime_optional" />
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="select labelstyle:inject">
			<h3>Select</h3>
			<fieldset>
				<div class="field select required">
					<label for="solo_select_required">Select, required</label>
					<select name="select_required" id="solo_select_required">
						<option value="">-</option>
						<option value="option_1">option 1</option>
						<option value="option_2">option 2</option>
					</select>
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field select">
					<label for="solo_select_optional">Select, optional</label>
					<select name="select_optional" id="solo_select_optional">
						<option value="option_1">option 1</option>
						<option value="option_2">option 2</option>
					</select>
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="text labelstyle:inject">
			<h3>Text</h3>
			<fieldset>
				<div class="field text required">
					<label for="solo_text_required">Text, required</label>
					<textarea name="text_required" id="solo_text_required"></textarea>
					<div class="help">
						<div class="hint">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
						<div class="error">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
					</div>
				</div>
				<div class="field text autoexpand">
					<label for="solo_text_optional">Text, optional, autoexpand</label>
					<textarea name="text_optional" id="solo_text_optional"></textarea>
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="checkbox labelstyle:inject">
			<h3>Checkbox</h3>
			<fieldset>
				<div class="field checkbox required">
					<input type="hidden" name="checkbox_required" value="0" />
					<input type="checkbox" name="checkbox_required" id="solo_checkbox_required" value="true" />
					<label for="solo_checkbox_required">Checkbox, required</label>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>
				<div class="field checkbox">
					<input type="hidden" name="checkbox_optional" value="0" />
					<input type="checkbox" name="checkbox_optional" id="solo_checkbox_optional" value="true" />
					<label for="solo_checkbox_optional">Checkbox, optional</label>
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="radio labelstyle:inject">
			<h3>Radio buttons</h3>
			<fieldset>
				<div class="field radiobuttons required">
					<label>Radio buttons, required</label>
					<div class="item">
						<input type="radio" value="true" name="radio_required" id="solo_radio_a_required" />
						<label for="solo_radio_a_required">True</label>
					</div>
					<div class="item">
						<input type="radio" value="false" name="radio_required" id="solo_radio_b_required" />
						<label for="solo_radio_b_required">False</label>
					</div>
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>
				<div class="field radiobuttons">
					<label class="buttons required">Radio buttons, optional</label>
					<div class="item">
						<input type="radio" value="true" name="radio_optional" id="solo_radio_a_optional" />
						<label for="solo_radio_a_optional">True</label>
					</div>
					<div class="item">
						<input type="radio" value="false" name="radio_optional" id="solo_radio_b_optional" />
						<label for="solo_radio_b_optional">False</label>
					</div>
				</div>
			</fieldset>
		</form>

		<form action="#" method="get" class="files labelstyle:inject">
			<h3>Files</h3>
			<fieldset>
				<div class="field files required">
					<label for="solo_input_mediae_required">Files, required</label>
					<input type="file" name="media_required[]" id="solo_input_mediae_required" />
					<div class="help">
						<div class="hint">Add image here. Use png or jpg in any proportion.</div>
						<div class="error">File does not fit requirements.</div>
					</div>
				</div>
				<div class="field files">
					<label for="solo_input_media_optional">Files, optional</label>
					<input type="file" name="media_optional[]" id="solo_input_media_optional" />
					<div class="help">
						<div class="hint">Add image here. Use png or jpg in any proportion.</div>
						<div class="error">File does not fit requirements.</div>
					</div>
				</div>
			</fieldset>
		</form>


		<h2>Custom fields</h2>

		<form action="#" method="get" class="geolocation labelstyle:inject">
			<h3>Geolocation</h3>
			<fieldset>

				<div class="field location required">
					<div class="location">
						<label for="solo_input_location_required">Location, required</label>
						<input type="text" class="location" id="solo_input_location_required" name="location_required" />
					</div>
					<div class="latitude">
						<label for="solo_input_latitude_required">Latitude</label>
						<input type="text" class="latitude" id="solo_input_latitude_required" name="latitude_required" />
					</div>
					<div class="longitude">
						<label for="solo_input_longitude_required">Longitude</label>
						<input type="text" class="longitude" id="solo_input_longitude_required" name="longitude_required" />
					</div>
					<div class="help">
						<div class="hint">Name and Geo coordinates of location</div>
						<div class="error">Name and Geo coordinates must be filled out</div>
					</div>
				</div>
				<div class="field location">
					<div class="location">
						<label for="solo_input_location_optional">Location, optional</label>
						<input type="text" class="location" id="solo_input_location_optional" name="location_optional" />
					</div>
					<div class="latitude">
						<label for="solo_input_latitude_optional">Latitude</label>
						<input type="text" class="latitude" id="solo_input_latitude_optional" name="latitude_optional" />
					</div>
					<div class="longitude">
						<label for="solo_input_longitude_optional">Longitude</label>
						<input type="text" class="longitude" id="solo_input_longitude_optional" name="longitude_optional" />
					</div>
				</div>

			</fieldset>
		</form>


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
				<div class="field html tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download,png,jpg,vimeo,youtube"
					data-media-add="#"
					data-media-delete="#"
					data-file-add="#"
					data-file-delete="#"
				>
					<label for="solo_html_optional">HTML, optional</label>
					<textarea name="html_optional" id="solo_html_optional"></textarea>
				</div>
			</fieldset>
		</form>

	</div>


	<div class="tests i:formCombined">
		<h2>Combined Test</h2>
		<p>Testing initialization, validation and callbacks in combination.</p>

		<form name="combined" action="#" method="get" class="combined labelstyle:inject">

			<input type="hidden" name="hidden_ignored" value="hidden value" class="ignoreinput" />
			<input type="hidden" name="hidden_input" value="hidden value" />


			<h3>Standard fields</h3>
			<fieldset>
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
					<label for="combined_date_required">Date, required</label>
					<input type="date" name="date_required" id="combined_date_required" />
					<div class="help">
						<div class="hint">hint</div>
						<div class="error">error</div>
					</div>
				</div>

				<div class="field datetime required">
					<label for="combined_datetime_required">Datetime, required</label>
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

				<div class="field text required">
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
					<input type="file" name="media_required[]" id="input_mediae_required" />
					<div class="help">
						<div class="hint">Add image here. Use png or jpg in any proportion.</div>
						<div class="error">File does not fit requirements.</div>
					</div>
				</div>
			</fieldset>

			<h3>Custom fields</h3>
			<fieldset>
				<h4>HTML Editor</h4>
				<div class="field html required tags:p,h1,h2,h3,h4,h5,h6,code,ol,ul,download">
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
