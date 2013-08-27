<? $page_title = "Events tests" ?>
<? $body_class = "tests" ?>
<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.header.php") ?>

<style type="text/css">
	.level1 {width: 720px; height: 450px; position: relative; background: red;}
	.level2 {width: 420px; height: 230px; position: absolute; left: 100px; top: 50px; padding: 50px 50px; background: green;}
	.level3 {width: 220px; height: 120px; padding: 50px 100px; background: blue;}
	.level4 {width: 120px; height: 30px; padding: 30px 50px; background: yellow;}
	.link {width: 100px; height: 50px; background: orange; position: absolute; right: 0; top: 0;}
	.link a {height: 50px; display: block; text-indent: -9999px;}
</style>

<script type="text/javascript">

	Util.Objects["test"] = new function() {
		this.init = function(scene) {

			var level1 = u.qs(".level1");
			var level2 = u.qs(".level2");
			var level3 = u.qs(".level3");
			var level4 = u.qs(".level4");

			var link = u.qs(".link");


			u.link(link);
			link.clicked = function(event) {
				u.bug("link clicked");
			}


			u.e.click(level1);
			level1.clicked = function(event) {
				u.bug("level1 clicked");
			}

			u.e.hold(level2);
			level2.held = function(event) {
				u.bug("level2 held");
				// reset events in children, because hold can be invoked from any child
				u.e.resetNestedEvents(u.qs(".level4"));
			}

			u.e.dblclick(level2);
			level2.dblclicked = function(event) {
				u.bug("level2 dblclicked");
			}

			u.e.click(level2);
			level2.clicked = function(event) {
				u.bug("level2 clicked");
			}

			u.e.click(level3);
			level3.clicked = function(event) {
				u.bug("level3 clicked");
			}

			u.e.click(level4);
			level4.clicked = function(event) {
				u.bug("level4 clicked");
			}

		}

	}
</script>

<div class="scene i:test">
	<h1>Events</h1>

	<div class="level1">click
		<div class="level2">click, hold, dblclick
			<div class="level3">click
				<div class="level4">click</div>
			</div>
		</div>
	</div>

	<div class="link">
		<a href="#">link</a>
	</div>


</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>