<? $page_title = "Timer tests" ?>
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

			// test resetAllTimers
			scene.test_resetalltimers = function() {
				u.sc(this.div_test_resetalltimers, "error");
				this.div_test_resetalltimers.innerHTML = "resetAllTimers: error";
			}
			scene.div_test_resetalltimers = u.ae(scene, "div", ({"class":"correct", "html":"resetAllTimers: correct"}));
			u.t.setTimer(scene, scene.test_resetalltimers, 200);
			u.t.setTimer(scene, scene.test_resetalltimers, 600);
			u.t.setTimer(scene, scene.test_resetalltimers, 800);
			u.t.resetAllTimers();

			// test resetAllIntervals
			scene.test_resetallintervals = function() {
				u.sc(this.div_test_resetallintervals, "error");
				this.div_test_resetallintervals.innerHTML = "resetAllIntervals: error";
			}
			scene.div_test_resetallintervals = u.ae(scene, "div", ({"class":"correct", "html":"resetAllIntervals: correct"}));
			u.t.setInterval(scene, scene.test_resetallintervals, 200);
			u.t.setInterval(scene, scene.test_resetallintervals, 400);
			u.t.setInterval(scene, scene.test_resetallintervals, 600);
			u.t.resetAllIntervals();


			// test setTimer
			scene.test_timer = function() {
				u.sc(this.div_test_timer, "correct");
				this.div_test_timer.innerHTML = "setTimer: correct";
			}
			scene.div_test_timer = u.ae(scene, "div", ({"class":"error", "html":"setTimer: waiting"}));
			u.t.setTimer(scene, scene.test_timer, 500);


			// test resetTimer
			scene.test_reset_timer = function() {
				u.sc(this.div_test_reset_timer, "error");
				this.div_test_reset_timer.innerHTML = "setTimer: error";
			}
			scene.div_test_reset_timer = u.ae(scene, "div", ({"class":"correct", "html":"resetTimer: correct"}));
			scene.t_reset_timer = u.t.setTimer(scene, scene.test_reset_timer, 500);
			u.t.resetTimer(scene.t_reset_timer);


			// test setInterval and resetInterval
			scene.test_interval = function() {
				this.div_test_interval.counter++;
				if(this.div_test_interval.counter > 2) {
					u.sc(this.div_test_interval, "error");
					this.div_test_interval.innerHTML = "setInterval: error resetting";
				}
				else if(this.div_test_interval.counter > 1) {
					u.sc(this.div_test_interval, "correct");
					this.div_test_interval.innerHTML = "setInterval: correct";
					u.t.resetInterval(this.t_interval);
				}
			}
			scene.div_test_interval = u.ae(scene, "div", ({"class":"error", "html":"setInterval: waiting"}));
			scene.div_test_interval.counter = 0;
			scene.t_interval = u.t.setInterval(scene, scene.test_interval, 300);


			// test valid
			scene.test_valid = function() {
				u.ae(scene, "div", ({"class":"error", "html":"valid: error resetting"}));
			}
			scene.t_valid_timer = u.t.setTimer(scene, scene.test_valid, 500);
			if(u.t.valid(scene.t_valid_timer)) {
				u.t.resetTimer(scene.t_valid_timer);
				u.ae(scene, "div", ({"class":"correct", "html":"valid: timer is valid"}));
			}
			else {
				u.ae(scene, "div", ({"class":"error", "html":"valid: timer not valid"}));
			}

			// countdown for test to finish - last test
			var remaining = u.qs(".remaining", scene);
			remaining.update = function() {
				var r = parseInt(this.innerHTML);
				if(r-1 <= 0) {
					this.innerHTML = "Done";
					u.t.resetInterval(this.interval);
				}
				else {
					this.innerHTML = (r-1) + " seconds";
				}
			}
			remaining.interval = u.t.setInterval(remaining, remaining.update, 1000);

		}

	}
</script>

<div class="scene i:test">
	<h1>Timer</h1>
	<p>This test will cause the page to be changed after load, as the timers needs to finish to perform test. Wait for it to finish - <span class="remaining">2 seconds</span></p>


</div>
<div class="comments"></div>

<? include_once($_SERVER["LOCAL_PATH"]."/templates/shell.footer.php") ?>