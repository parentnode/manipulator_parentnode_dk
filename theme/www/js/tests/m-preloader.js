	Util.Modules["preloader"] = new function() {
		this.init = function(div) {

			div.test_results = {};


			var preloader;
//			preloader = u.preloader();
//			div = u.ae(div, "div");

			// Preloader with user-defined callback

			div.callback = function(queue) {
				if(
					u.qsa("li.loaded", queue[0]._queue).length == 5 &&
					u.qsa("li.loaded", queue[0]._queue).length == u.qsa("li", queue[0]._queue).length &&
					queue[0].image.width == 350 &&
					queue[0].image.height == 350 &&
					queue[queue.length-1].image.width == 450 &&
					queue[queue.length-1].image.height == 300
				) {
					u.ae(this, "div", {"class":"testpassed", "html":"u.preloader (custom callback): correct"});
					this.test_results["u.preloader (custom callback)"] = true;
				}
				else {
					u.ae(this, "div", {"class":"testfailed", "html":"u.preloader (custom callback): error"});
					this.test_results["u.preloader (custom callback)"] = true;
				}
			}
			div, u.preloader(div, ["/img/test-350x350.jpg","/img/test-355x500.jpg","/img/test-400x250.png","/img/test-720x576.jpg","/img/test-450x300.jpg"], {"loaded":"callback"});



			// Preloader with default callback
			div.loaded = function(queue) {

				if(
					u.qsa("li.loaded", queue[0]._queue).length == 4 &&
					u.qsa("li.loaded", queue[0]._queue).length == u.qsa("li", queue[0]._queue).length &&
					queue[0].image.width == 460 &&
					queue[0].image.height == 321 &&
					queue[queue.length-1].image.width == 720 &&
					queue[queue.length-1].image.height == 576
				) {
					u.ae(this, "div", {"class":"testpassed", "html":"u.preloader (default callback): correct"});
					this.test_results["u.preloader (default callback)"] = true;
				}
				else {
					u.ae(this, "div", {"class":"testfailed", "html":"u.preloader (default callback): error"});
					this.test_results["u.preloader (default callback)"] = true;
				}
			}
			u.preloader(div, ["/img/test-460x321.png","/img/test-468x334.jpg","/img/test-640x360.png","/img/test-720x576.jpg"]);


			// Image with size
			div.imageLoaded = function(queue) {

				if(
					queue.length == 1 &&
					queue[0].image.width == 355 && 
					queue[0].image.height == 500
				) {
					u.ae(this, "div", {"class":"testpassed", "html":"u.preloader (image size): correct"});
					this.test_results["u.preloader (image size)"] = true;
				}
				else {
					u.ae(this, "div", {"class":"testfailed", "html":"u.preloader (image size): error"});
					this.test_results["u.preloader (image size)"] = true;
					
				}
			}
			div, u.preloader(div, ["/img/test-355x500.jpg"], {"loaded":"imageLoaded"});


		}
	}