<? $page_title = "Date tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/header.php") ?>

<style type="text/css">
	.scene div {margin: 0 0 5px;}
	.correct {background: green;}
	.error {background: red;}
</style>

<script type="text/javascript">
	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			// u.bug(u.date("Y-m-d"));
			// u.bug(u.date("Y-m-d", 1331809993423));
			// u.bug(u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"));
			// u.bug(u.date("Y-m-d", "Thu Mar 12 2012 12:13:36 GMT+0100 (CET)"));


			if(u.date("Y-m-d", 1331809993423) == "2012-03-15") {
				u.ae(scene, "div", ({"class":"correct", "html":'u.date("Y-m-d", 1331809993423): correct'}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":'u.date("Y-m-d", 1331809993423): error'}));
			}

			if(u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012") == "2012-03-10") {
				u.ae(scene, "div", ({"class":"correct", "html":'u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"): correct'}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":'u.date("Y-m-d", "Sat Mar 10 17:58:43 +0000 2012"): error'}));
			}

			if(u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)") == "2012-03-12") {
				u.ae(scene, "div", ({"class":"correct", "html":'u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)"): correct'}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":'u.date("Y-m-d", "Mon Mar 12 2012 12:13:36 GMT+0100 (CET)"): error'}));
			}

			if(u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]) == "Mar 15, 2012") {
				u.ae(scene, "div", ({"class":"correct", "html":'u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]): correct'}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":'u.date("F d, Y", 1331809993423, ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]): error'}));
			}


		}

	}
</script>

<div class="scene i:test">
	<h2>Date</h2>


</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/footer.php") ?>