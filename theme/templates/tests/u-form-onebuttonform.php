<?php
$this->headerIncludes(array(
	"/js/tests/i-form-onebuttonform.js",
	"/js/manipulator/src/beta-u-form-onebuttonform.js",
	"/css/tests/s-form-onebuttonform.css"
));
?>

<div class="scene i:scene">
	<h1>Form - oneButtonForm</h1>
	<h2>A form with one button and hidden inputs – a confirm style one button form</h2>

	<div class="tests i:formOneButtonForm">

		<div class="test">
			<form action="/ajax/form-onebuttonform.json.php" method="post" class="simple_form_html_json">
				<input type="hidden" name="csrf-token" value="674a3522-81ab-40cc-881d-f548dbbe17dc" />
				<input type="hidden" name="test" value="Simple, applied to form, embedded HTML, returns json" />
				<input type="submit" value="Submit" name="confirm" class="button" />
			</form>
		</div>

		<div class="test">
			<form action="/ajax/form-onebuttonform.json.php" method="post" class="simple_form_html_custom_function_json" data-success-function="customConfirmed">
				<input type="hidden" name="csrf-token" value="674a3522-81ab-40cc-881d-f548dbbe17dc" />
				<input type="hidden" name="test" value="Simple, applied to form, embedded HTML, custom response function, returns json" />
				<input type="submit" value="Submit" name="confirm" class="button" />
			</form>
		</div>

		<div class="test">
			<form action="/ajax/form-onebuttonform.json.php" method="post" class="simple_form_data_json"
				data-csrf-token="674a3522-81ab-40cc-881d-f548dbbe17dc"
				data-inputs='{"test":"Simple, applied to form, data properties, returns json"}'
			></form>
		</div>

		<div class="test">
			<div class="simple_div_html_json">
				<form action="/ajax/form-onebuttonform.json.php" method="post">
					<input type="hidden" name="csrf-token" value="674a3522-81ab-40cc-881d-f548dbbe17dc" />
					<input type="hidden" name="test" value="Simple, applied to div, embedded HTML, returns json" />
					<input type="submit" value="Submit" name="confirm" class="button" />
				</form>
			</div>
		</div>

		<div class="test">
			<ul class="actions">
				<li class="simple_li_html_json">
					<form action="/ajax/form-onebuttonform.json.php" method="post">
						<input type="hidden" name="csrf-token" value="674a3522-81ab-40cc-881d-f548dbbe17dc" />
						<input type="hidden" name="test" value="Simple, applied to li, embedded HTML, returns json" />
						<input type="submit" value="Submit" name="confirm" class="button" />
					</form>
				</li>
			</ul>
		</div>

		<div class="test">
			<form action="/ajax/form-onebuttonform.html.php" method="post" class="simple_div_html_html">
				<input type="hidden" name="csrf-token" value="674a3522-81ab-40cc-881d-f548dbbe17dc" />
				<input type="hidden" name="test" value="Simple, applied to div, embedded HTML, returns HTML" />
				<input type="submit" value="Submit" name="confirm" class="button" />
			</form>
		</div>

<!--li class="duplicate" data-confirm-value="Confirm" data-success-function="duplicated"><form action="/janitor/tests/duplicate/2377" method="post" enctype="application/x-www-form-urlencoded" novalidate="novalidate">
</form>
</li-->


	</div>

</div>

<div class="comments">
	<p>Success location cannot be auto-tested as it will cause an endless loop</p>
	
</div>
