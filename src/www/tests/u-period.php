<? $page_title = "Period tests" ?>
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


			// u.bug(u.period("m:s.u", {"seconds":13.31809}))
			// u.bug(u.period("m:s.t", {"seconds":13.323}))
			// u.bug(u.period("D", {"years":2}))
			// u.bug(u.period("H", {"months":4}))
			// u.bug(u.period("D", {"months":5}))
			// u.bug(u.period("D", {"seconds":20130002342234.234}))
			// u.bug(u.period("h", {"seconds":20130002342234.234}))
			// u.bug(u.period("m", {"seconds":20130002342234.234}))
			// u.bug(u.period("s", {"seconds":20130002342234.234}))
			// u.bug(u.period("t", {"seconds":20130002342234.234}))
			// u.bug(u.period("D h:m:s.t", {"seconds":2013034.234}))
			// u.bug(u.period("y-o-D", {"days":2013}))


			if(u.period("m:s.u", {"seconds":13.31809}) == "00:13.318") {
				u.ae(scene, "div", {"class":"correct", "html":'u.period("m:s.u", {"seconds":13.31809}): correct'});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":'u.period("m:s.u", {"seconds":13.31809}): error'});
			}

			if(u.period("D h:m:s.u", {"seconds":2013034.2347}) == "23 07:10:34.235") {
				u.ae(scene, "div", {"class":"correct", "html": 'u.period("D h:m:s.u", {"seconds":2013034.234}): correct'});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":'u.period("D h:m:s.u", {"seconds":2013034.234}): error'});
			}

			if(u.period("D", {"years":2}) == 730) {
				u.ae(scene, "div", {"class":"correct", "html":'u.period("D", {"years":2}): correct'});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":'u.period("D", {"years":2}): error'});
			}

			if(u.period("H", {"months":4}) == 2920) {
				u.ae(scene, "div", {"class":"correct", "html":'u.period("H", {"months":4}): correct'});
			}
			else {
				u.ae(scene, "div", {"class":"error", "html":'u.period("H", {"months":4}): error'});
			}


		}

	}
</script>

<div class="scene i:test">
	<h1>Period</h1>


</div>
<div class="comments">
	week, months and years outputs have not been implemented
	
	
</div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>