<?php
$this->headerIncludes(array(
	"/js/tests/i-request.js"
));
?>

<div class="scene i:scene">
	<h1>Request</h1>

	<p>
		This test requires internet access AND to have the domain alias "manipulator.proxy" 
		configured in your hosts file. If you previously configured the proxy domain, remember to update the IP to your
		current network settings.
	</p>

	<div class="tests i:request method:post">

		<!-- 

			These tests must be run one at the time to avoid weaker browsers failing due to too many simultaneous requests

			All test data provided via HTML
			All responses are routed to response handler in JS, based on div ID


			Using HTML as datasource allows for a relatively easy enabling/disabling of tests, by
			commenting out HTML blocks

			If the tests were all in JS, they would either have to be chained or nested, making it much harder to
			disable individual tests

		-->


		<h2>POSTs</h2>
		<div class="test waiting method:post" id="t0">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test waiting method:post send:json" id="t10">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, send JSON: correct" />
			</form>
			<span>/ajax/post_json.json.php</span>
		</div>

		<div class="test waiting method:post async:true" id="t20">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, async: correct" />
			</form>
			<span>/ajax/post.json.php</span>
		</div>

		<div class="test waiting method:post async:false" id="t30">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to JSON, sync: correct" />
			</form>
			<span>/ajax/post.json.php</span>
		</div>

		<div class="test waiting method:post async:true send:formdata" id="t40">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST FormData, to HTML, async, send formdata: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test waiting method:post async:true" id="t50">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test waiting method:post async:true send:params headers:Content-Type:application/x-www-form-urlencoded" id="t60">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, send URL encoded async: correct, content-type header:application/x-www-form-urlencoded" />
				<input type="hidden" name="headers" value="Content-Type,application/x-www-form-urlencoded" />
			</form>
			<span>/ajax/post_headers_content_type_urlencoded.php</span>
		</div>

		<div class="test waiting method:post async:true send:json headers:Content-Type:application/json" id="t70">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, send JSON async: correct, content-type header:application/json" />
				<input type="hidden" name="headers" value="Content-Type,application/json" />
			</form>
			<span>/ajax/post_headers_content_type_json.php</span>
		</div>

		<div class="test waiting method:post async:true headers:TeSt:Value" id="t80">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async, headers: correct" />
				<input type="hidden" name="headers" value="TeSt:Value" />
			</form>
			<span>/ajax/post_headers.php</span>
		</div>

		<div class="test waiting method:post async:true headers:test1:value1,test2:value2" id="t90">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML, async, multiple headers: correct" />
				<input type="hidden" name="headers" value="test1:value1,test2:value2" />
			</form>
			<span>/ajax/post_headers.php</span>
		</div>

		<div class="test waiting method:post async:true timeout:100" id="t100">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML with delay, async, 100 timeout: correct" />
			</form>
			<span>/ajax/timeout.php</span>
		</div>

		<div class="test waiting method:post async:true timeout:3000" id="t110">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to HTML with delay, async, 3000 timeout: correct" />
			</form>
			<span>/ajax/timeout.php</span>
		</div>

		<div class="test waiting method:post" id="t120">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain without credentials and no CORS: correct" />
			</form>
			<span>http://manipulator.parentnode.dk/ajax/post.php</span>
		</div>

		<div class="test waiting method:post credentials:true" id="t130">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain with credentials and CORS: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors.php</span>
		</div>

		<div class="test waiting method:post" id="t140">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain without credentials AND CORS: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors.php</span>
		</div>


		<div class="test waiting method:post credentials:true headers:Content-Type:application/json" id="t150">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain with credentials, disallowed header: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors.php</span>
		</div>

		<div class="test waiting method:post headers:Content-Type:application/json" id="t160">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, outside domain without credentials, disallowed header: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors.php</span>
		</div>

		<div class="test waiting method:post credentials:true send:params headers:Content-Type:application/x-www-form-urlencoded" id="t170">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, urlencoded outside domain with credentials, allowed header: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors-allowed-header-credentials-urlencoded.php</span>
		</div>

		<div class="test waiting method:post credentials:true send:json headers:Content-Type:application/json" id="t180">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, JSON outside domain with credentials, allowed header: correct" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors-allowed-header-credentials-json.php</span>
		</div>

		<div class="test waiting method:post send:json headers:Content-Type:application/json" id="t190">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, JSON outside domain without credentials, allowed header: correct" />
				<input type="hidden" name="allow-headers" value="content-type" />
			</form>
			<span>http://manipulator.proxy/ajax/post-cors-allowed-header.php</span>
		</div>


		<div class="test waiting method:post responseType:document" id="t200">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, responseType=document, to HTML: correct" />
			</form>
			<span>/ajax/post.php</span>
		</div>

		<div class="test waiting method:post send:json responseType:json" id="t210">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, responseType=json, to JSON, send JSON: correct" />
			</form>
			<span>/ajax/post_json.json.php</span>
		</div>

		<div class="test waiting method:post responseType:blob" id="t220">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, responseType=blob, to Blob: correct" />
			</form>
			<span>/ajax/post.blob.php</span>
		</div>

		<div class="test waiting method:post responseType:arraybuffer" id="t230">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, responseType=arraybuffer, to ArrayBuffer: correct" />
			</form>
			<span>/ajax/post.arraybuffer.php</span>
		</div>

		<div class="test waiting method:post redirect:true" id="t240">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, redirect: correct" />
				<input type="hidden" name="redirect_to" value="/ajax/post-redirected.php" />
			</form>
			<span>/ajax/post-redirect.php</span>
		</div>


		<h2>GETs</h2>
		<div class="test waiting method:get send:params" id="t1000">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to HTML: correct" />
			</form>
			<span>/ajax/get.php</span>
		</div>

		<div class="test waiting method:get send:params" id="t1010">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON: correct" />
			</form>
			<span>/ajax/get.json.php?test=error</span>
		</div>

		<div class="test waiting method:get send:params async:true" id="t1020">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON, async: correct" />
			</form>
			<span>/ajax/get.php</span>
		</div>

		<div class="test waiting method:get send:params async:true headers:Content:valuE" id="t1030">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to JSON, async, headers: correct" />
				<input type="hidden" name="headers" value="Content,valuE" />
			</form>
			<span>/ajax/get_headers.json.php</span>
		</div>

		<div class="test waiting method:get send:params async:true timeout:100" id="t1040">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="GET, to HTML with delay, async, 100 timeout: correct" />
			</form>
			<span>/ajax/timeout.php</span>
		</div>


		<h2>SCRIPTs</h2>
		<div class="test waiting method:script send:params" id="t10000">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php</span>
		</div>

		<div class="test waiting method:script send:params" id="t10010">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, param URL, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>

		<div class="test waiting method:script send:json" id="t10020">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, param URL, send JSON, to JSONP" />
			</form>
			<span>/ajax/script.jsonp.php?test=error</span>
		</div>
 
		<div class="test waiting method:script send:params" id="t10030">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, to JSONP outside domain: correct" />
			</form>
			<span>http://manipulator.parentnode.dk/ajax/script.jsonp.php</span>
		</div>

		<div class="test waiting method:script send:params timeout:100" id="t10040">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="SCRIPT, param URL, to JSONP with delay, 100 timeout" />
			</form>
			<span>/ajax/script.jsonp.timeout.php</span>
		</div>


		<h2>404</h2>
		<div class="test waiting" id="t100000">
			<form name="testform" action="" method="">
				<input type="hidden" name="test" value="POST, to 404: correct" />
			</form>
			<span>/ajax/post.404.php</span>
		</div>

	</div>

</div>

<div class="comments">
	<p>TODO: Expand with file upload tests</p>
</div>
