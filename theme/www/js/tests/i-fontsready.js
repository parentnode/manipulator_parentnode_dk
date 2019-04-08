Util.Objects["fontsready"] = new function() {
	this.init = function(div) {

		div.test_results = {};


		div.fontsLoaded = function(fonts) {
			u.ae(this, "div", {"class":"testpassed", "html":"u.fontsReady, standard: correct"});
			this.test_results["u.fontsReady-1"] = true;
			
			u.bug("fonts are ready", fonts);
		}
		div.fontsNotLoaded = function(fonts) {
			u.ae(this, "div", {"class":"testfailed", "html":"u.fontsReady, standard: timeout"});
			this.test_results["u.fontsReady-1"] = false;

			u.bug("fonts are not ready", fonts);
		}
		u.fontsReady(div, [
			{"family":"PT Serif", "weight": 700},
			{"family":"OpenSans", "style":"normal", "weight": 100},
			{"family":"OpenSans", "style":"italic", "weight": 600},
		]);


		div.allGood = function(fonts) {
			u.ae(this, "div", {"class":"testpassed", "html":"u.fontsReady, timeout + custom callbacks: correct"});
			this.test_results["u.fontsReady-2"] = true;

			u.bug("fonts are ALL good", fonts);
		}
		div.notGood = function(fonts) {
			u.ae(this, "div", {"class":"testfailed", "html":"u.fontsReady, timeout + custom callbacks: error"});
			this.test_results["u.fontsReady-2"] = false;

			u.bug("fonts are NOT good", fonts);
		}
		u.fontsReady(div, {"family":"OpenSans", "weight": 700}, {"callback":"allGood", "timeout":"notGood", "max":1000});

	}
}