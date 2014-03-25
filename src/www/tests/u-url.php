<? $page_title = "URL tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {
			if(!location.search) {
				location.href = location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param";
			}
			else {
				// u.bug("test1:" + u.getVar("test1"));
				// u.bug("test2:" + u.getVar("test2"));
				// u.bug("test3:" + u.getVar("test3"));
				// 
				// u.bug("test1 with url:" + u.getVar("test1", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param"));
				// u.bug("test2 with url:" + u.getVar("test2", location.href + "?test1=get_this&test2=get_that"));
				// u.bug("test3 with url:" + u.getVar("test3", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param"));

				if(u.getVar("test1") == "get_this" 
					&& u.getVar("test2") == "get_that" 
					&& !u.getVar("test3")

					&& u.getVar("test1", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param") == "get_this" 
					&& u.getVar("test2", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param") == "get_that" 
					&& !u.getVar("test3", location.href + "?test1=get_this&test2=get_that#test1=fake_param&test3=fake_param")
				) {
					u.ae(scene, "div", {"class":"correct", "html":"getVar: correct"});
				}
				else {
					u.ae(scene, "div", {"class":"error", "html":"getVar: error"});
				}
			}
		}
	}
</script>

<div class="scene i:test">
	<h1>URL</h1>
	<p>This test will refresh the page to add test parameters in order to perform test.</p>

</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>