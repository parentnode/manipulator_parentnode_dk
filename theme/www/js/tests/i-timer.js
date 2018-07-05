Util.Objects["timer"] = new function() {
	this.init = function(div) {


		div.test_results = {};


		// test resetAllTimers
		div.test_resetalltimers = function() {
			u.sc(this.div_test_resetalltimers, "testfailed");
			this.div_test_resetalltimers.innerHTML = "u.t.resetAllTimers: error";
			this.test_results["u.t.resetAllTimers"] = false;
		}
		div.div_test_resetalltimers = u.ae(div, "div", {"class":"testpassed", "html":"u.t.resetAllTimers: correct"});
		div.test_results["u.t.resetAllTimers"] = true;

		u.t.setTimer(div, div.test_resetalltimers, 200);
		u.t.setTimer(div, div.test_resetalltimers, 600);
		u.t.setTimer(div, div.test_resetalltimers, 800);
		u.t.resetAllTimers();


		// test resetAllIntervals
		div.test_resetallintervals = function() {
			u.sc(this.div_test_resetallintervals, "testfailed");
			this.div_test_resetallintervals.innerHTML = "u.t.resetAllIntervals: error";
			this.test_results["u.t.resetAllIntervals"] = false;
		}
		div.div_test_resetallintervals = u.ae(div, "div", {"class":"testpassed", "html":"u.t.resetAllIntervals: correct"});
		div.test_results["u.t.resetAllIntervals"] = true;

		u.t.setInterval(div, div.test_resetallintervals, 200);
		u.t.setInterval(div, div.test_resetallintervals, 400);
		u.t.setInterval(div, div.test_resetallintervals, 600);
		u.t.resetAllIntervals();



		// test setTimer
		// callback by reference
		div.test_timer = function() {
			u.sc(this.div_test_timer, "testpassed");
			this.div_test_timer.innerHTML = this.div_test_timer.innerHTML.replace("waiting", "correct");
			this.test_results["u.t.setTimer - 1"] = true;
		}
		div.div_test_timer = u.ae(div, "div", {"class":"testfailed", "html":"u.t.setTimer (callback by reference): waiting"});
		div.test_results["u.t.setTimer - 1"] = false;

		u.t.setTimer(div, div.test_timer, 500);


		// callback by value
		div.test_timer_name = function() {
			u.sc(this.div_test_timer_name, "testpassed");
			this.div_test_timer_name.innerHTML = this.div_test_timer_name.innerHTML.replace("waiting", "correct");
			this.test_results["u.t.setTimer - 2"] = true;
		}
		div.div_test_timer_name = u.ae(div, "div", {"class":"testfailed", "html":"u.t.setTimer (callback to function name): waiting"});
		div.test_results["u.t.setTimer - 2"] = false;

		u.t.setTimer(div, "test_timer_name", 500);



		// test resetTimer
		div.test_reset_timer = function() {
			u.sc(this.div_test_reset_timer, "testfailed");
			this.div_test_reset_timer.innerHTML = this.div_test_reset_timer.innerHTML.replace("correct", "error");
			this.test_results["u.t.resetTimer"] = false;
		}
		div.div_test_reset_timer = u.ae(div, "div", {"class":"testpassed", "html":"u.t.resetTimer: correct"});
		div.t_reset_timer = u.t.setTimer(div, div.test_reset_timer, 500);
		div.test_results["u.t.resetTimer"] = true;

		u.t.resetTimer(div.t_reset_timer);


		// test setInterval and resetInterval
		div.test_interval = function() {
			this.div_test_interval.counter++;
			if(this.div_test_interval.counter > 2) {
				u.sc(this.div_test_interval, "testfailed");
				this.div_test_interval.innerHTML = "u.t.setInterval: error resetting";
			}
			else if(this.div_test_interval.counter > 1) {
				u.sc(this.div_test_interval, "testpassed");
				this.div_test_interval.innerHTML = "u.t.setInterval: correct";
				u.t.resetInterval(this.t_interval);
				this.test_results["u.t.setInterval"] = true;
			}
		}
		div.div_test_interval = u.ae(div, "div", {"class":"testfailed", "html":"u.t.setInterval: waiting"});
		div.div_test_interval.counter = 0;
		div.test_results["u.t.setInterval"] = false;

		div.t_interval = u.t.setInterval(div, div.test_interval, 300);


		// test valid timer
		div.test_valid = function() {
			u.ae(div, "div", {"class":"testfailed", "html":"u.t.valid: error resetting"});
			div.test_results["u.t.valid - 1"] = false;
		}
		div.t_valid_timer = u.t.setTimer(div, div.test_valid, 500);
		if(u.t.valid(div.t_valid_timer)) {
			u.t.resetTimer(div.t_valid_timer);
			u.ae(div, "div", {"class":"testpassed", "html":"u.t.valid: correct"});
			div.test_results["u.t.valid - 1"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.t.valid: correct"});
			div.test_results["u.t.valid - 1"] = false;
		}


		// test invalid timer
		if(!u.t.valid(div.t_valid_timer)) {
			u.ae(div, "div", {"class":"testpassed", "html":"u.t.valid (invalid timer): correct"});
			div.test_results["u.t.valid - 2"] = true;
		}
		else {
			u.ae(div, "div", {"class":"testfailed", "html":"u.t.valid (invalid timer): error"});
			div.test_results["u.t.valid - 2"] = false;
		}



		// countdown for test to finish - last test
		var remaining = u.qs(".remaining");
		remaining.update = function() {
			var r = parseInt(this.innerHTML);
			if(r-1 <= 0) {
				u.ac(remaining, "done");
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