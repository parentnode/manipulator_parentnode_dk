<?php
$this->headerIncludes(array(
	"/js/tests/i-request.js"
));
?>

<div class="scene i:scene">
	<h1>Request</h1>

	<div class="tests i:request method:post">

		<div class="test method:post">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test method:post send:json">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, send JSON: correct" />
			</form>
			<span>/ajax/post_json.json.php</span>
		</div>

		<div class="test method:post async:true">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, async: correct" />
			</form>
			<span>/ajax/post.json.php</span>
		</div>

		<div class="test method:post async:false">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, sync: correct" />
			</form>
			<span>/ajax/post.json.php</span>
		</div>

		<div class="test method:post async:true send:formdata">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST FormData, to HTML, async, send formdata: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test method:post async:true">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test method:post async:true headers:Content-Type:JSON">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async: correct, content-type header: JSON" />
				<input type="hidden" name="headers" value="Content-Type,JSON" />
			</form>
			<span>/ajax/post_headers_content_type.php</span>
		</div>

		<div class="test method:post async:true headers:TeSt:Value">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async, headers: correct" />
				<input type="hidden" name="headers" value="TeSt,Value" />
			</form>
			<span>/ajax/post_headers.php</span>
		</div>

		<div class="test method:get">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON: correct" />
			</form>
			<span>/ajax/get.json.php?test=error</span>
		</div>

		<div class="test method:get">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to HTML: correct" />
			</form>
			<span>/ajax/get.php</span>
		</div>

		<div class="test method:get async:true">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON, async: correct" />
			</form>
			<span>/ajax/get.json.php</span>
		</div>

		<div class="test method:get async:true headers:Content:valuE">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON, async, headers: correct" />
				<input type="hidden" name="headers" value="Content,valuE" />
			</form>
			<span>/ajax/get_headers.json.php</span>
		</div>

		<div class="test method:script">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php</span>
		</div>

		<div class="test method:script">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, param URL, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>

		<div class="test method:script send:json">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, param URL, send JSON, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>

		<div class="test method:script a">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, to JSONP outside domain: correct" />
			</form>
			<span>http://manipulator.parentnode.dk/ajax/script.jsonp.php</span>
		</div>

		<div class="test shouldfail:true method:post b">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain: correct" />
			</form>
			<span>http://manipulator.parentnode.dk/ajax/post.php</span>
		</div>

	</div>

</div>

<div class="comments">
	<p>TODO: Expand with file upload tests</p>
</div>
